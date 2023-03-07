<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: indexAdmin.php"); //redirected to Dashboard once the user is logged in
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="includeLogin/style.css">
</head>
<body>
    <div class="container">
        <?php
        if (isset($_POST["login"])) { //POST to catch all the data that users will input
           $email = $_POST["email"];
           $password = $_POST["password"];
            require_once "includeLogin/config.php"; //database connection
            $sql = "SELECT * FROM users WHERE email = '$email'"; //the email provided by the users in the registration SHOULD MATCH the email that will be inputted in the login
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC); 
            if ($user) { //Check in the database if the password matches the email address
                if (password_verify($password, $user["password"])) {
                    session_start();
                    $_SESSION["users"] = "yes"; //if it matches, it will allow the users to login
                    header("Location: indexAdmin.php"); //proceed here if sucessfully LOGIN
                    die();

                }else{ //else it will have an error
                    echo "<div class='alert alert-danger'>Password does not match</div>"; 
                }
            }else{
                echo "<div class='alert alert-danger'>Email does not match</div>";
            }
        }
        ?>
      <form action="login.php" method="post">
      <div id="login-div" class="d-flex aligns-items-center justify-content-center" style="height:100px" >
      <h1>LOGIN</h1>
      </div>
        <div class="form-group">
            <input type="email" placeholder="Enter Email:" name="email" class="form-control">
        </div>
        <div class="form-group">
            <input type="password" placeholder="Enter Password:" name="password" class="form-control">
        </div>
        <div id="login-div" class="d-flex aligns-items-center justify-content-center" style="height:40px" >
            <input type="submit" value="Login" name="login" class="btn btn-primary ">
        </div>
      </form>
     <div class="d-flex aligns-items-center justify-content-center"><p>Not registered yet <a href="registration.php">Register Here</a></p></div> 
    </div>
</body>
</html>