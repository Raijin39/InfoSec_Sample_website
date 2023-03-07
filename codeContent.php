<?php
session_start();
require 'connection/connectionPost.php';


if(isset($_POST['save_post']))
{
    $title = mysqli_real_escape_string($con, $_POST['title']);
    $content = mysqli_real_escape_string($con, $_POST['content']);
    $publish_date = mysqli_real_escape_string($con, $_POST['publish_date']);
    $publisher = mysqli_real_escape_string($con, $_POST['publisher']);

    $query = "INSERT INTO post (title,content,publish_date,publisher) VALUES ('$title','$content','$publish_date','$publisher')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Post Created Successfully";
        header("Location: addContent.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Post Not Created";
        header("Location: addContent.php");
        exit(0);
    }
}

?>