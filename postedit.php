<?php
include "db_conn.php";
 $id=$_GET['updateid'];
 $queryPosts = "SELECT * FROM `post` WHERE id=$id";
 $resultPosts = mysqli_query($conn, $queryPosts);
 $fetch=mysqli_fetch_assoc($resultPosts);

if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $content =$_POST['content'];
    $publish_date = $_POST['publish_date'];
    $publisher = $_POST['publisher'];

    $sql="UPDATE post SET title= $title, content='$content', publish_date='$publish_date', publisher='$publisher' WHERE id=$id";
    $resultUpdate=mysqli_query($conn,$sql);
    if($resultUpdate){
        echo "Success";
        header('location:indexAdmin.php');
    }else{
        die(mysqli_error($conn));
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
        <link rel="stylesheet" href="css/admindashboard.css">

    </head>
<!-- Update Form Starts -->
    <?php include("includeadmin/navbaradmin.php") ?>
    <body>
        
        <div class="container"  style="padding-top:5%">
            <h3>Edit</h3>
            <form method ="post" class="pe-5">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" name="title" value="<?php echo $fetch['title']?>">
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <input type="text" class="form-control" name="content" value="<?php echo $fetch['content']?>">
                    </div>
                    <div class="form-group">
                        <label>Published Date</label>
                        <input type="text" class="form-control" name="publish_date" value="<?php echo $fetch['publish_date']?>">
                    </div>
                    <div class="form-group">
                        <label>Publisher</label>
                        <input type="text" class="form-control" name="publisher" value="<?php echo $fetch['publisher']?>">
                    </div>
                    <div class="mt-2 me-2">
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        <button type="return" class="btn btn-danger"><a class="text-decoration-none text-white"href="indexAdmin.php">Return</a></button>
                    </div>
                </form>
        </div>
<!-- Update Form Ends -->
    </body>
    <?php $resultPosts->data_seek(0); ?>
</html>