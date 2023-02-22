<?php
    if($_SERVER['REQUEST_METHOD'] =='POST' && isset($_POST['submit'])) {
        $conn= mysqli_connect('localhost', 'root', 'test1') or die("Connection Failed:" .mysqli_connect_error());
        if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) {
            $name= $_POST['name'];
            $name= $_POST['email'];
            $name= $_POST['password'];

            $sql= "INSERT INTO 'users' ('name', 'email', 'password')";

            $query = mysqli_query($conn,$sql);
            if($query){
                echo 'Entry Successfull';
            }
            else {
                echo 'Error Occurred';
            }
        }
    }