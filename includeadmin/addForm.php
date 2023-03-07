<?php
session_start();
require 'connection/connectionPost.php';

        if (isset($_POST["submit"])) {

                $title = mysqli_real_escape_string($con, $_POST['title']);
                $content = mysqli_real_escape_string($con, $_POST['content']);
                $publish_date = mysqli_real_escape_string($con, $_POST['publish_date']);
                $publisher = mysqli_real_escape_string($con, $_POST['publisher']);
            
                $query = "INSERT INTO post (title,content,publish_date,publisher) VALUES ('$title','$content','$publish_date','$publisher')";
            
                $query_run = mysqli_query($con, $query);
                if($query_run)
                {
                    $_SESSION['message'] = "Student Created Successfully";
                    header("Location: addForm.php");
                    exit(0);
                }
                else
                {
                    $_SESSION['message'] = "Student Not Created";
                    header("Location: addForm.php");
                    exit(0);
                }
            }
            
            ?>
           

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
    <?php  ?>

    <!-- addForm -->
    <div class="container mt-5">
    <form method ="post" class="ps-5 pe-5 pt-5">
            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="form-group">
                <label>Content</label>
                <input type="text" class="form-control" name="content">
            </div>
            <div class="form-group">
                <label>Published Date</label>
                <input type="text" class="form-control" name="publishe_date">
            </div>
            <div class="form-group">
                <label>Publisher</label>
                <input type="text" class="form-control" name="publisher">
            </div>
            <div class="pt-4">
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                <button type="return" class="btn btn-danger">Return</button>
            </div>
    </form>
</div>
    
  </body>
</html>