<?php

include 'clients.inc.php';

$uid = $_GET['user'];

$search = "SELECT * FROM users WHERE user_id='$uid'";

$result = mysqli_query($conn, $search);

while($row = mysqli_fetch_assoc($result)){
    
    $frozen = $row['frozen'];
    
}

if ($frozen == 0){
    
    $frozen = 1;
    $sql = "UPDATE users SET frozen='$frozen' WHERE user_id='$uid'";
    
    mysqli_query($conn, $sql);
    
    header("Location: ../search.php?user=".$uid);
    
} else if ($frozen == 1){
    
    $frozen = 0;
    $days_frozen = 0;
    
    $sql = "UPDATE users SET frozen='$frozen',days_frozen='$days_frozen' WHERE user_id='$uid'";
    
    mysqli_query($conn, $sql);
    
    header("Location: ../search.php?user=".$uid);
    
}

