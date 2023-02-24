
<?php 

session_start();

	include("connection.php");
	include("function.php");

	$user_data = check_login($con); //


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$email = $_POST['email'];
		$password = $_POST['password'];

		if(!empty($email) && !empty($password) && !is_numeric($email))
		{

			//read from database
			$query= "select * from users where first_name = '	$email' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>





<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="css/LoginFormstyle.css" />
  <title>Sign in & Sign up Form</title></head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        
        <form method="post" class="sign-in-form">
          <h2 class="title">Sign in</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Email Address" name="email" id="email" required />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="password" id="password" required />
          </div>
          <input type="submit" value="Login" name="signin" class="btn solid" />
          <p style="display: flex;justify-content: center;align-items: center;margin-top: 20px;"><a href="forgot-password.php" style="color: #4590ef;">Forgot Password?</a></p>
        </form>


		<form method="post" class="sign-up-form">
          <h2 class="title">Sign up</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="First Name" name="first_name" id="first_name" required/>
          </div>

          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Last Name" name="last_name" id="last_name" required/>
          </div>

          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Contact Number" name="phone_number" id="phone_number" required/>
          </div>

          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" placeholder="Email Address" name="email"  id="email" required/>
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="password"  id="password" required/>
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Confirm Password" name="cpassword" id="cpassword" required/>
          </div>
          <input type="submit" class="btn" name="signup" value="Sign up" />
        </form>
      </div>
    </div>

          
          <input type="submit" class="btn" name="signup" value="Sign up" />
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
         
     

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Building you GREAT DESIGN that Sell, Join thousand of designers with Us!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
        </div>

        <div class="panel right-panel">
            <div class="content">
              <h3>One of us ?</h3>
              <p>
                WELCOME BACK! To keep connected with us, please login with your personal account.
              </p>
              <button class="btn transparent" id="sign-in-btn">
                Sign in
              </button>
            </div>
          </div>
   



  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <script src="js/app.js"></script>
  </body>
</html>


	<a href="logout.php">Logout</a>
























