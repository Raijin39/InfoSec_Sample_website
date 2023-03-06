<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: includeLogin/login.php");
}
?>
        <?php include('indexAdmin.php');  ?>

