<?php 
include_once "config.php";
if(isset($_GET['id'])){
    $user_id = $_GET['id'];
    $sql = "DELETE FROM users WHERE id=$user_id";
    if($conn->query($sql)){
        header("location:index.php");
    }else{
        echo "Error"; 
    }
    
}   
