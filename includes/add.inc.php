<?php

if (isset($_POST['submit'])){
    
    include_once 'clients.inc.php';
    
    $first = mysqli_real_escape_string($conn, $_POST['first']);
    $last = mysqli_real_escape_string($conn, $_POST['last']);
    $dob = mysqli_real_escape_string($conn, $_POST['dob']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $post = mysqli_real_escape_string($conn, $_POST['post']);
    
    //check if spaces are empty
    if (empty($first) || empty($last) || empty($dob) || empty($email) || empty($post)){
        header("Location: ../add.php?add=empty");
        exit();
    } else {
    //Check if email is already used
            $sql = "SELECT * FROM users WHERE user_email='$email';";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            
            if ($resultCheck > 0){
                header("Location: ../add.php?add=emailtaken");
                exit();
            } else {
                //Insert tge user into the database
                $sql = "INSERT INTO users (user_first, user_last, user_email, user_dob, user_postcode, user_membership) VALUES ('$first', '$last', '$email', '$dob', '$post', 'None');";
                mysqli_query($conn, $sql);
                header("Location: ../add.php?add=success");
                exit();
            }
            
    }
    
} else {
    header("Location: ../add.php?add=error");
    exit();
}