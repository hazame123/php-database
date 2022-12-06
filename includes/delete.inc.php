<?php

if(strpos($_SERVER['REQUEST_URI'],"?user=")){
    
    include_once 'clients.inc.php';
    
    $uid = $_GET['user'];
    
    $order66 = "DELETE FROM users WHERE user_id='$uid'";
    
    mysqli_query($conn, $order66) or die("Could not delete user".mysqli_error);
    
    $dropId = "ALTER TABLE users DROP user_id";
    
    mysqli_query($conn, $dropId) or die("Could not drop user ID"." - ".mysqli_error);
    
    $setId = "ALTER TABLE users ADD user_id MEDIUMINT NOT NULL AUTO_INCREMENT Primary key";
    
    mysqli_query($conn, $setId) or die("Could not set user ID"." - ".mysqli_error);
    
    header("Location: ../search.php");
    exit();
    
} else {
    
    echo 'User not specified';
    
}

