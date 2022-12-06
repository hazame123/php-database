<?php

include 'clients.inc.php';

$uid = $_GET['user'];

$from = $_GET['from'];

$search = "SELECT * FROM users WHERE user_id='$uid'";

$result = mysqli_query($conn, $search);

$resultCheck = mysqli_num_rows($result);

while($row = mysqli_fetch_assoc($result)){
    
    $client_number = $row['user_id'];
    $name = $row['user_first'] . " " . $row['user_last'];
    $email_address = $row['user_email'];
    $date_of_birth = $row['user_dob'];
    $post_code = $row['user_postcode'];
    $membership = $row['user_membership'];
    $entries = $row['user_entries'];
    $in_out = $row['in_out'];
    $frozen = $row['frozen'];
    
}

if ($in_out == 0){

if ($entries > 0){
    
    $entries--;
    $in_out = 1;
    
    echo $entries;
    echo "<br />";
    if ($in_out == 1){
        echo "User is now in";
    }
    
    $sql = "UPDATE users SET user_entries='$entries',in_out='$in_out' WHERE user_id='$uid'";
    
    mysqli_query($conn, $sql);
    
    if ($from == "user"){
    header("Location: ../search.php?user=".$uid);
    } else {
        header("Location: search.inc.php?search=refresh");
    }
    
} else if ($membership != "None"){
    
    $in_out = 1;
    
    echo $membership;
    echo "<br />";
    if ($in_out == 1){
        echo "User is now in";
    }
    
    $sql = "UPDATE users SET in_out='$in_out' WHERE user_id='$uid'";
    
    if ($from == "user"){
    header("Location: ../search.php?user=".$uid);
    } else {
        header("Location: search.inc.php?search=refresh");
    }
    
    mysqli_query($conn, $sql);
    
} else if ($entries == 0 && $membership == "None"){
    
    $in_out = 1;
    
    $sql = "UPDATE users SET in_out='$in_out' WHERE user_id='$uid'";
    
    mysqli_query($conn, $sql);
    
    if ($from == "user"){
    header("Location: ../search.php?user=".$uid);
    } else {
        header("Location: search.inc.php?search=refresh");
    }
    
}


} else if ($in_out == 1){
    
    echo "User already entered.";
    
    if ($from == "user"){
    header("Location: ../search.php?user=".$uid);
    } else {
        header("Location: search.inc.php?search=refresh");
    }
    
}