<?php
include "db_conn.php";
 $id=$_GET['editid'];
 $queryUsers = "SELECT * FROM `users` WHERE id=$id";
 $resultUsers = mysqli_query($conn, $queryUsers);
 $fetch=mysqli_fetch_assoc($resultUsers);

if(isset($_POST['submit'])){
    $full_name = $_POST['full_name'];
    $email =$_POST['email'];
    $password = $_POST['password'];
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);


    $sql="UPDATE users SET full_name= '$full_name', email='$email', password='$password' WHERE id=$id";
    $resultUpdate=mysqli_query($conn,$sql);
        if($resultUpdate){
            echo "Success";
            header('location:indexAdmin.php');
        }else{
            die(mysqli_error($conn));
        }
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
        <link rel="stylesheet" href="css/admindashboard.css">

    </head>
    <?php include("includeadmin/navbaradmin.php") ?>
    <!-- Update Form Starts -->
    <body>
        
        <div class="container"  style="padding-top:5%">
            <h3>Edit</h3>
            <form method ="post" class="pe-5">
                    <div class="form-group">
                        <label>full_name</label>
                        <input type="text" class="form-control" name="full_name" value="<?php echo $fetch['full_name']?>">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" value="<?php echo $fetch['email']?>">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" class="form-control" name="password" value="<?php echo $fetch['password']?>">
                    </div>
                    
                    <div class="mt-2 me-2">
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        <button type="return" class="btn btn-danger"><a class="text-decoration-none text-white"href="indexAdmin.php">Return</a></button>
                    </div>
                </form>
        </div>
<!-- Update Form Ends -->
    </body>
    <?php $resultUsers->data_seek(0); ?>
</html>