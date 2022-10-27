<?php 
include_once "config.php";
if(isset($_POST['id'])){
    $user_id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $sql = "UPDATE `users` SET `username`='$username',`email`='$email',`gender`='$gender',`age`='$age',`mobile`='$mobile',`password`='$password' WHERE id=$user_id";
    if($conn->query($sql)){
        header("location:index.php");
    }else{
        echo "Error"; 
    }
}