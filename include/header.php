<?php
include "db_conn.php";
$queryPosts = "SELECT * FROM `post`";
$resultPosts = mysqli_query($conn, $queryPosts);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/style.css">
    <title>
      <?php if(isset($page_title)){ echo "$page_title"; } ?>
    </title>

    </head>
    <body>