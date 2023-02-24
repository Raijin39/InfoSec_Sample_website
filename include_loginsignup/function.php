<?php
if (function_exists('check_login') ===FALSE) { //solution
function check_login($con) // Cannot redeclare function previously declared in other file

{

	if(isset($_SESSION['phone_number']))
	{

		$phone_number = $_SESSION['phone_number'];
		$query = "select * from users where phone_number = '$phone_number' limit 1"; //check if theres a phone number in a database, and limit to 1 user that have tht number

		$result = mysqli_query($con,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}

	//redirect to login
	header("Location: LoginForm.php");
	die;


}

function random_num($length)
{

	$text = "";
	if($length < 5)
	{
		$length = 5;
	}

	$len = rand(4,$length);

	for ($i=0; $i < $len; $i++) { 
		# code...

		$text .= rand(0,9);
	}

	return $text;
}
}