<?php
include "db_conn.php";
 $id=$_GET['updateid'];
 if(isset($_POST['Submit'])){
    $title = $_POST['title'];
    $content =$_POST['content'];
    $publish_date = $_POST['publish_date'];
    $publisher = $_POST['publisher'];
 }


 $sql="UPDATE post SET title= '$title', content= '$content', publish_date='$publish_date', publisher='$publisher' WHERE id=$id";
 $resultUpdate=mysqli_query($conn,$sql);
 if($resultUpdate){
    echo "Success";
    // header(location:'tablePostAdmin.php');
 }else{
    die(mysqli_error($conn));
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

<body>

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
                <input type="text" class="form-control" name="publish_date">
            </div>
            <div class="form-group">
                <label>Publisher</label>
                <input type="text" class="form-control" name="publisher">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="return" class="btn btn-danger">Return</button>
    </form>
</div>

    </body>
</html>