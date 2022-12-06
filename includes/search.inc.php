<html>
    <head>
        <title>Results</title>
        <link rel="stylesheet" href="../css/bulma.css" type="text/css" />
    </head>
</html>
<?php



if (isset($_GET['submit'])){
    
    session_start();
    
    include_once 'clients.inc.php';
    
    $first = mysqli_real_escape_string($conn, $_GET['first']);
    $last = mysqli_real_escape_string($conn, $_GET['last']);
    $dob = mysqli_real_escape_string($conn, $_GET['dob']);
    $email = mysqli_real_escape_string($conn, $_GET['email']);
    $post = mysqli_real_escape_string($conn, $_GET['post']);
    
    //Turn search entries into SESSION so can be used in the refresh section
    
    $_SESSION['first'] = $first;
    $_SESSION['last'] = $last;
    $_SESSION['dob'] = $dob;
    $_SESSION['email'] = $email;
    $_SESSION['post'] = $post;
    
    //
    
    
    $search =
    "SELECT *
    FROM users
    WHERE (user_first LIKE '%{$first}%' && user_last LIKE '%{$last}%' && user_email LIKE '%{$email}%' && user_dob LIKE '%{$dob}%' && user_postcode LIKE '%{$post}%');";
    
    $result = mysqli_query($conn, $search);
    
    $resultCheck = mysqli_num_rows($result);

    //create array to put resutls in
    $allResults = [];
    //
    
    if ($resultCheck > 0){
        
        while($row = mysqli_fetch_assoc($result)){
            
            
            $client_number = $row['user_id'];
            $name = $row['user_first'] . " " . $row['user_last'];
            $email_address = $row['user_email'];
            $date_of_birth = $row['user_dob'];
            $post_code = $row['user_postcode'];
            
            $user_membership = $row['user_membership'];
            $user_entries = $row['user_entries'];
            
            $in_out = $row['in_out'];
            $frozen = $row['frozen'];
            $days_frozen = $row['days_frozen'];
            
            // set what membership type is to be displayed
            
            if ($frozen == 0){
            
            if ($user_entries == 0){
                if ($user_membership == 0){
                    $membership = "None";
                } else {
                    $membership = $user_membership." Days Left";
                }
            } else {
                $membership = $user_entries." Entries Left";
            }
            
            } else if ($frozen == 1){
                
                if ($user_entries == 0){
                if ($user_membership == 0){
                    $membership = "None";
                } else {
                    $membership = "Frozen for ".$days_frozen." days";
                }
            } else {
                $membership = "Frozen for ".$days_frozen." days";
            }
                
            }
            
            //
            
            //decipher whether client is alread signed in
            
            if ($in_out == 0){
                $enterButton = '<a class="button is-dark is-outlined" href="/includes/enter.inc.php?user='.$row['user_id'].'">Enter</a>';
            } else if ($in_out == 1){
                $enterButton = '<a class="button is-danger is-outlined" disabled="true" href="">User Signed In</a>';
            }
            
            //
            
            //put all results in variable ($all)
            
            $all = '<a href="?user=' . $row['user_id'] . '">'
            . '<p class="subtitle is-4 has-text-black">' . $row['user_first'] . " " . $row['user_last'] . '</p>'
            . $row['user_email'] 
            . '<br>' 
            . $row['user_dob'] 
            . '<br>' 
            . $row['user_postcode'] 
            . "<br />"
            . "Membership: " ."<b>". $membership ."</b>"
            . "<br />"
            . "<br />"
            . '</a>'
            . $enterButton;
            
            //push results to array
            
            array_push($allResults, $all);
            
            //
        }
        
        //turn the array into session
        
        $_SESSION['all'] = $allResults;
        
        //
    
    header("Location: ../search.php?search=results");
        
        

    } else {
        
        header("Location: ../search.php?search=not-found");
        exit();
        
    }
    
} else if (strpos($_SERVER['REQUEST_URI'],"?search=refresh")){
    
    session_start();
    
    include_once 'clients.inc.php';
    
    $first = $_SESSION['first'];
    $last = $_SESSION['last'];
    $dob = $_SESSION['dob'];
    $email = $_SESSION['email'];
    $post = $_SESSION['post'];
    
    $search =
    "SELECT *
    FROM users
    WHERE (user_first LIKE '%{$first}%' && user_last LIKE '%{$last}%' && user_email LIKE '%{$email}%' && user_dob LIKE '%{$dob}%' && user_postcode LIKE '%{$post}%');";
    
    $result = mysqli_query($conn, $search);
    
    $resultCheck = mysqli_num_rows($result);

    //create array to put resutls in
    $allResults = [];
    //
    
    if ($resultCheck > 0){
        
        while($row = mysqli_fetch_assoc($result)){
            
            
            $client_number = $row['user_id'];
            $name = $row['user_first'] . " " . $row['user_last'];
            $email_address = $row['user_email'];
            $date_of_birth = $row['user_dob'];
            $post_code = $row['user_postcode'];
            
            $user_membership = $row['user_membership'];
            $user_entries = $row['user_entries'];
            
            $in_out = $row['in_out'];
            $frozen = $row['frozen'];
            $days_frozen = $row['days_frozen'];
            
            // set what membership type is to be displayed
            
            if ($frozen == 0){
            
            if ($user_entries == 0){
                if ($user_membership == 0){
                    $membership = "None";
                } else {
                    $membership = $user_membership." Days Left";
                }
            } else {
                $membership = $user_entries." Entries Left";
            }
            
            } else if ($frozen == 1){
                
                if ($user_entries == 0){
                if ($user_membership == 0){
                    $membership = "None";
                } else {
                    $membership = "Frozen for ".$days_frozen." days";
                }
            } else {
                $membership = "Frozen for ".$days_frozen." days";
            }
                
            }
            
            //
            
            //decipher whether client is alread signed in
            
            if ($in_out == 0){
                $enterButton = '<a class="button is-dark is-outlined" href="/includes/enter.inc.php?user='.$row['user_id'].'">Enter</a>';
            } else if ($in_out == 1){
                $enterButton = '<a class="button is-danger is-outlined" disabled="true" href="">User Signed In</a>';
            }
            
            //
            
            //put all results in variable ($all)
            
            $all = '<a href="?user=' . $row['user_id'] . '">'
            . '<p class="subtitle is-4 has-text-black">' . $row['user_first'] . " " . $row['user_last'] . '</p>'
            . $row['user_email'] 
            . '<br>' 
            . $row['user_dob'] 
            . '<br>' 
            . $row['user_postcode'] 
            . "<br />"
            . "Membership: " ."<b>". $membership ."</b>"
            . "<br />"
            . "<br />"
            . '</a>'
            . $enterButton;
            
            //push results to array
            
            array_push($allResults, $all);
            
            //
        }
        
        //turn the array into session
        
        $_SESSION['all'] = $allResults;
        
        //
    
    header("Location: ../search.php?search=results");
        
        

    } else {
        
        header("Location: ../search.php?search=not-found");
        exit();
        
    }
    
}
?>