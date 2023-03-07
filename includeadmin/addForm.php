<?php
session_start();
if (isset($_SESSION["post"])) {
   header("Location: indexAdmin.php"); //redirected to Dashboard once the ADMIN is registered
}

        if (isset($_POST["submit"])) {
           $title = $_POST["title"];
           $content = $_POST["content"]; 
           $publish_date = $_POST["publish_date"]; 
           $publisher = $_POST["publisher"]; 

           if (empty($title) OR empty($content) OR empty($publishe_date) OR empty($publisher)) {
            array_push($errors,"All fields are required");
        } else {
            require_once "connection/connectionPost.php";
            $sql = "SELECT * FROM post WHERE title = '$title'";
            $result = mysqli_query($conn, $sql);
            $rowCount = mysqli_num_rows($result);
            if ($rowCount>0) {
                array_push($errors,"Title already exists!");
            }
            if (count($errors)>0) {
                foreach ($errors as  $error) {
                    echo "<div class='alert alert-danger'>$error</div>";
                    echo "<a href='indexAdmin.php#post'></a>";
                }
            } else {
                $sql = "INSERT INTO post (title, content, publishe_date, publisher) VALUES ( ?, ?, ?, ? )";
                $stmt = mysqli_stmt_init($conn);
                $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
                if ($prepareStmt) {
                    mysqli_stmt_bind_param($stmt,"sss",$title, $content, $publishe_date, $publisher);
                    mysqli_stmt_execute($stmt);
                    header("Location: indexAdmin.php#post");
                } else {
                    die("Something went wrong");
                }
            }
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