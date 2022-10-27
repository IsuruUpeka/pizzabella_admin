<?php 
include_once "config.php";

if(isset($_POST['username'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (username,email,age,gender,mobile,password) values('$username','$email','$age','$gender','$mobile','$password')";
    if($conn->query($sql)){
        header("location:index.php");
    }else{
        echo "Error"; 
    }

}
