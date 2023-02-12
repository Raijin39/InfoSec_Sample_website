<?php
function connetion(){
    $host = "localhost";
    $username = "root";
    $password = "20021619";

    $con = new mysqli($host, $username);

    if($con->connect_error){
        echo $con->connect_error;
    }else{
        return $con:
    }
}