<?php
include "db_conn.php";
$queryUsers = "SELECT * FROM `users`";
$queryPosts = "SELECT * FROM `post`";
$resultUsers = mysqli_query($conn, $queryUsers);
$resultPosts = mysqli_query($conn, $queryPosts);
?>

<?php
session_start();
if (!isset($_SESSION["users"])) {
   header("Location: login.php"); //redirected to Dashboard once the user is logged in
}
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="css/admindashboard.css">

    <script type="text/javascript"
        id="for-js-disabled-js">$('head').append('<style id="for-js-disabled">#js-disabled { display: none; }</style>'); $(document).ready(function () { $('#js-disabled').remove(); $('#for-js-disabled').remove(); $('#for-js-disabled-js').remove(); });</script>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap5.min.css">

    <!-- <title>Bootstrap Example</title> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>
    <script> $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>

    
</head>

<body style="max-height: 100vh; height: 100vh;" class="overflow-y-hidden">