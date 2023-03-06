<?php
session_start();
session_destroy();
header("Location: includeLogin/login.php");
?>