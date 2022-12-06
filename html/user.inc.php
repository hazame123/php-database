<?php

session_start();

if(strpos($_SERVER['REQUEST_URI'],"?user=")){

include_once 'clients.inc.php';

$uid = $_GET['user'];

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
    
    $comments = $row['user_comment'];
    
}

}

?>

<section class="hero is-dark is-halfheight is-bold">
  <!-- Hero head: will stick at the top -->
<div class="hero-head">
    
    <br />
    <br />
    
        <div class="container is-centered">
          

        <a class="button is-light" href="includes/search.inc.php?search=refresh">Back</a>
        
      <br />
      
      <?php
      
      if (empty($comments)){
        echo '<br /><br />';
      } else {
        echo '<br />';
      }
      
      ?>
        
        <section align="center">
          
          <div class="columns">
              
              <div class="column">
                  
                  <p class="subtitle">Name: </p>

              </div>
              
              <div class="column">
                  
                  <p class="subtitle">Email: </p>
                  
              </div>
              
              <div class="column">
                  
                  <p class="subtitle">Date of Birth: </p>
                  
              </div>
              
              <div class="column">
                  
                  <p class="subtitle">Postcode: </p>
                  
              </div>
              
              <div class="column">
                  
                  <p class="subtitle">Membership: </p>
                  
              </div>
              
          </div>
          
          <br />
          
          <div class="columns">
              
              <div class="column">
                  
                  <p class="subtitle is-5"><?php echo $name; ?></p>
                  
              </div>
              
              <div class="column">
                  
                  <p class="subtitle is-5"><?php echo $email_address; ?></p>
                  
              </div>
              
              <div class="column">
                  
                  <p class="subtitle is-5"><?php echo $date_of_birth; ?></p>
                  
              </div>
              
              <div class="column">
                  
                  <p class="subtitle is-5"><?php echo $post_code; ?></p>
                  
              </div>
              
              <div class="column">
                  
                  <a class="button is-light is-outlined" href="?membershipadd=<?php echo $uid; ?>"><b><?php 
                  
                  if ($entries == 0){
                    if ($membership == 0){
                    echo "No Membership";
                    } else {
                      echo $membership." Days Left";
                    }
                  } else {
                    echo $entries." Entries Left";
                  }
                  
                  ?></b></a>
                  
              </div>
              
          </div>
          
      </section>
      
        </div>
    
</div>

  <div class="hero-body">
    
    <div class="container has-text-centered">
      
      <?php
      
      if (!empty($comments)){
        echo '<div class="control">
            <textarea class="textarea has-text-centered" type="text" rows="1" readonly>Notes: '.$comments.'</textarea>
          </div>';
      }
      
      ?>
      
    </div>
    
  </div>
  
<div class="hero-foot">
  <div class="container has-text-centered">
    
      <a class="button is-danger is-" href="?deleteuser=<?php echo $uid; ?>">Delete</a>
      <a class="button is-light is-outlined" href="?edituser=<?php echo $uid; ?>">Edit</a>
      
      <?php
      
      if ($membership > 0){
      
      if ($frozen == 0){
        echo '<a class="button is-info is-outlined" href="includes/freeze.inc.php?user='.$uid.'">Freeze</a>';
      } else if ($frozen == 1){
        echo '<a class="button is-info" href="includes/freeze.inc.php?user='.$uid.'">Defrost</a>';
      }
      
      }
      
      ?>
      
      <?php
      if ($in_out == 0){
        echo '<a class="button is-light" href="includes/enter.inc.php?user='.$uid.'&&from=user">Enter</a>';
      } else if ($in_out == 1){
        echo '<a class="button is-danger is-outlined" disabled="true" href="">User Signed In</a>';
      }
      ?>
        
    </div>
    <br>
</div>
  
</section>