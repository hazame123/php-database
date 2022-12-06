<?php

session_start();

if (isset($_POST['submit'])){

include_once 'clients.inc.php';

$uid = $_GET['edituser'];

$first = mysqli_real_escape_string($conn, $_POST['first']);
$last = mysqli_real_escape_string($conn, $_POST['last']);
$dob = mysqli_real_escape_string($conn, $_POST['dob']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$post = mysqli_real_escape_string($conn, $_POST['post']);
$membership = mysqli_real_escape_string($conn, $_POST['membership']);
$entries = mysqli_real_escape_string($conn, $_POST['entries']);

$comments = mysqli_real_escape_string($conn, $_POST['comments']);


$update = "UPDATE users SET user_first='$first',user_last='$last',user_dob='$dob',user_email='$email',user_postcode='$post',user_comment='$comments' WHERE user_id='$uid'";

mysqli_query($conn, $update) or die("Could not update".mysqli_error);

if ($entries == NULL){
    $updateMembership = "UPDATE users SET user_membership='$membership' WHERE user_id='$uid'";
} else if ($membership == NULL){
    $updateMembership = "UPDATE users SET user_entries='$entries' WHERE user_id='$uid'";
}

mysqli_query($conn, $updateMembership) or die("Could not update membership".mysqli_error);

header("Location: ../search.php?user=".$uid);
exit();

}