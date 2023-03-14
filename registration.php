<?php
session_start();
if (isset($_SESSION["users"])) {
   header("Location: indexAdmin.php"); //redirected to Dashboard once the ADMIN is registered
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="includeLogin/style.css">
</head>
<body>
    <div class="container">

    
        <?php
        if (isset($_POST["submit"])) {
           $fullName = $_POST["fullname"];
           $email = $_POST["email"];
           $password = $_POST["password"];
                            $uppercase = preg_match('@[A-Z]@', $password);
                            $lowercase = preg_match('@[a-z]@', $password);
                            $number    = preg_match('@[0-9]@', $password);
                            $specialChars = preg_match('@[^\w]@', $password);
           $passwordRepeat = $_POST["repeat_password"];
           
           $passwordHash = password_hash($password, PASSWORD_DEFAULT);
                          

           $errors = array();
           
           if (empty($fullName) OR empty($email) OR empty($password) OR empty($passwordRepeat)) {
            array_push($errors,"All fields are required");
        } 
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "Email is not valid");
        } 
        //fucking error
        if (empty($password)) {
            array_push($errors, "Please input a password");
        } else if (strlen($password) < 8) {
            array_push($errors, "Password must be at least 8 characters");
        } else if (!preg_match('/[A-Z]/', $password)) {
            array_push($errors, "Password must have at least one upper case letter");
        } else if (!preg_match('/[a-z]/', $password)) {
            array_push($errors, "Password must have at least one lower case letter");
        } else if (!preg_match('/[^\w]/', $password) || !preg_match('/[0-9]/', $password)) {
            array_push($errors, "Password must have special characters and numbers");
        }
        if ($password!==$passwordRepeat) {
            array_push($errors,"Password does not match");
        } 
            require_once "includeLogin/config.php";
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $rowCount = mysqli_num_rows($result);
            if ($rowCount>0) {
                array_push($errors,"Email already exists!");
            }
            if (count($errors)>0) {
                foreach ($errors as  $error) {
                    echo "<div class='alert alert-danger'>$error</div>";
                    echo "<a href='login.php'></a>";
                }
            } else {
                $sql = "INSERT INTO users (full_name, email, password) VALUES ( ?, ?, ? )";
                $stmt = mysqli_stmt_init($conn);
                $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
                if ($prepareStmt) {
                    mysqli_stmt_bind_param($stmt,"sss",$fullName, $email, $passwordHash);
                    mysqli_stmt_execute($stmt);
                    header("Location: indexAdmin.php"); //if sucessfully LOGIN
                } else {
                    die("Something went wrong");
                }
            }
        }
    
        ?>
        <form action="registration.php" method="post">
        <div id="login-div" class="d-flex aligns-items-center justify-content-center" style="height:100px" >
         <h1>REGISTRATION</h1></div>
            <div class="form-group">
                <input type="text" class="form-control" name="fullname" placeholder="Full Name:">
            </div>
            <div class="form-group">
                <input type="emamil" class="form-control" name="email" placeholder="Email:">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password:">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="repeat_password" placeholder="Repeat Password:">
            </div>
            
            <div class="form-btn">
            <div class="d-flex aligns-items-center justify-content-center"> 

                <input type="submit" class="btn btn-primary" value="Register" name="submit">
            </div>
        </form>
        <div>
        <div class="d-flex aligns-items-center justify-content-center"> 
        <div><p>Already Registered <a href="login.php">Login Here</a></p></div>
</body>
</html>













