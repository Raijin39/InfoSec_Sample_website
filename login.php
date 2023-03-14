<?php
session_start();
if (isset($_SESSION["users"])) {
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
        $delay = 0;
        $disabled = '';
        $max_attempts = 5;
        
        if (isset($_POST["login"])) {
           $email = $_POST["email"];
           $password = $_POST["password"];
            require_once "includeLogin/config.php";
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($user) {
                if (password_verify($password, $user["password"])) {
                    $_SESSION["users"] = "yes"; 
                    header("Location: indexAdmin.php"); 
                    die();
                }else{
                    if(isset($_SESSION['login_attempts'])){
                        $_SESSION['login_attempts']++;
                    } else {
                        $_SESSION['login_attempts'] = 1;
                    }
            
                    if($_SESSION['login_attempts'] >= $max_attempts){
                        $disabled = 'disabled';
                        $delay = 5000;
                    } else {
                        $disabled = '';
                        $delay = 0;
                    }
                    echo "<div class='alert alert-danger'>Email or Password is incorrect.</div>";
                }
            }else{
                if(isset($_SESSION['login_attempts'])){
                    $_SESSION['login_attempts']++;
                } else {
                    $_SESSION['login_attempts'] = 1;
                }
        
                if($_SESSION['login_attempts'] >= $max_attempts){
                    $disabled = 'disabled';
                    $delay = 5000;
                } else {
                    $disabled = '';
                    $delay = 0;
                }
                echo "<div class='alert alert-danger'>Email or Password is incorrect.</div>";
            }
        }
        ?>
        <form action="login.php" method="post">
            <div id="login-div" class="d-flex aligns-items-center justify-content-center" style="height:100px" >
            <h1>LOGIN</h1>
            </div>

            <div class="form-group">
                <input id="email" type="email" placeholder="Enter Email:" name="email" class="form-control" <?php echo $disabled; ?>>
            </div>
            <div class="form-group">
                <input id="password" type="password" placeholder="Enter Password:" name="password" class="form-control" <?php echo $disabled; ?>>
            </div>
            <div class="form-btn">
                <div id="login-div" class="d-flex aligns-items-center justify-content-center" style="height:40px" >
                <input id="loginbtn" type="submit" value="Login" name="login" class="btn btn-primary" <?php echo $disabled; ?>>
            </div>
        </form>
        <div class="d-flex aligns-items-center justify-content-center"><p>Not registered yet <a href="registration.php">Register Here</a></p></div> 
        </div>

        <?php
        if($delay > 0){
            echo '<script>';
            echo 'setTimeout(function() {';
            echo 'document.getElementById("email").removeAttribute("disabled");';
            echo 'document.getElementById("password").removeAttribute("disabled");';
            echo 'document.getElementById("loginbtn").removeAttribute("disabled");';
            echo '}, ' . $delay . ');';
            echo '</script>';
        }
        ?>
    </div>
</body>
</html>