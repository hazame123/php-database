<?php

$uid = $_GET['uid'];
$membership = $_GET['membership'];

include 'clients.inc.php';

$zero = 0;

$one = 31;
$three = 31 * 3;
$six = 31 * 6;
$twelve = 365;
$ten = 10;

if ($membership == "1month"){
    
    echo "Add 1 month membership to user ".$uid;
    
    $sql = "UPDATE users SET user_membership='$one',user_entries='$zero' WHERE user_id='$uid'";
    
    mysqli_query($conn, $sql) or die("Could not add membership".mysqli_error);
    
} else if ($membership == "3month"){
    
    echo "Add 3 month membership to user ".$uid;
    
    $sql = "UPDATE users SET user_membership='$three',user_entries='$zero' WHERE user_id='$uid'";
    
    mysqli_query($conn, $sql) or die("Could not add membership".mysqli_error);
    
} else if ($membership == "6month"){
    
    echo "Add 6 month membership to user ".$uid;
    
    $sql = "UPDATE users SET user_membership='$six',user_entries='$zero' WHERE user_id='$uid'";
    
    mysqli_query($conn, $sql) or die("Could not add membership".mysqli_error);
    
} else if ($membership == "12month"){
    
    echo "Add 12 month membership to user ".$uid;
    
    $sql = "UPDATE users SET user_membership='$twelve',user_entries='$zero' WHERE user_id='$uid'";
    
    mysqli_query($conn, $sql) or die("Could not add membership".mysqli_error);
    
} else if ($membership == "10entry"){
    
    echo "Add 10 entries to user ".$uid;
    
    $sql = "UPDATE users SET user_entries='$ten',user_membership='$zero' WHERE user_id='$uid'";
    
    mysqli_query($conn, $sql) or die("Could not add entries".mysqli_error);
    
}

header("Location: ../search.php?user=".$uid);
exit();