<?php 
if(!session_id()) session_start();

	include("connection.php");
	include("function.php");

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{

		//something was posted

    $first_name= $_POST["first_name"];
    $last_name= $_POST["last_name"];
    $phone_number= $_POST["phone_number"];
    $email= $_POST["email"];
    $password= $_POST["password"];
    $cpassword= $_POST["cpassword"];

		if(
      !empty($first_name) && !empty($last_name) && !empty($phone_number) && !empty($email) && !empty($password) && !empty($cpassword))
		{

			//save to database
			$user_id = random_num(20);
			$query = "INSERT INTO users (user_id, first_name, last_name, phone_number, email, password, cpassword ) VALUES ('$user_id', '$first_name', '$last_name', '$phone_number',  '$email', '$password', '$cpassword')";
			
      mysqli_query($con, $query);

			header("Location: LoginForm.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>

