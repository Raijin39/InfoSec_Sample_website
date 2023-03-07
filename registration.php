<?php
session_start();
if (isset($_SESSION["user"])) {
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
        if (isset($_POST["submit"])) { //POST to catch all the data that users will input
           $fullName = $_POST["fullname"]; //full name, email, password and repeat password are array keys
           $email = $_POST["email"];
           $password = $_POST["password"];
           $passwordRepeat = $_POST["repeat_password"];
           
           $passwordHash = password_hash($password, PASSWORD_DEFAULT); //to encrypt the users password

           $errors = array(); //below is the condition when array is error
           
           if (empty($fullName) OR empty($email) OR empty($password) OR empty($passwordRepeat)) { //if theres any empty placeholder, it will have an error
            array_push($errors,"All fields are required"); //specific error validation per field
        
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  //used the filter where function to return false when theres no '@' sign in the email then i add new errors section, 2nd argument is CONSTRAINT and needs to be the same to the 1st argument filter validate
            array_push($errors, "Email is not valid"); //  used the array_push function and the 1st argument i used is the variable error and the 2nd is the error name that will show up when the input is invalid
        
        } elseif (strlen($password)<8) { 
            array_push($errors,"Password must be at least 8 charactes long"); 
        } elseif ($password!==$passwordRepeat) {
            array_push($errors,"Password does not match");
        } else { 
            require_once "includeLogin/config.php";
            $sql = "SELECT * FROM users WHERE email = '$email'"; //command to search through the database if the email is already existed
            $result = mysqli_query($conn, $sql);
            $rowCount = mysqli_num_rows($result);
            if ($rowCount>0) {
                array_push($errors,"Email already exists!");
            }
            if (count($errors)>0) { //check the number of array limit, IF THE LENGTH OF ARRAY IS GREATER THAN 0, THEN THE DATA  CANNOT BE INSERTED IN THE DATABASE
                foreach ($errors as  $error) { //so because its array and have multiple values, i used foreach to display those values
                    echo "<div class='alert alert-danger'>$error</div>"; //if theres an error it will display this
                }
            } else { //else the data will be inserted in the database
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
    }
        ?>
        <form action="registration.php" method="post"> 
        <div id="registraton-div" class="d-flex aligns-items-center justify-content-center" style="height:100px" >
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
            <div id="registraton-" class="d-flex aligns-items-center justify-content-center" style="height:40px" >
                <input type="submit" class="btn btn-primary" value="Register" name="submit" >
            </div>
        </form>
        <div class="d-flex aligns-items-center justify-content-center"> 
        <div><p>Already Registered <a href="login.php">Login Here</a></p></div> 
      </div>
    </div>
</body>
</html>