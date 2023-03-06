<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
   exit();
} 
else {
    header("Location: indexAdmin.php"); //if sucessfully LOGIN
    exit();

} 

?>