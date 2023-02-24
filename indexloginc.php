
<?php
 $page_title="LOGIN PAGE";
session_start();

include('include_loginsignup/LoginForm.php');
include('include_loginsignup/signup.php');
include('include_loginsignup/function.php');
include('include_loginsignup/connection.php');


	$user_data = check_login($con);

?>




