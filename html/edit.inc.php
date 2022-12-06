<?php

session_start();

include_once 'clients.inc.php';

$uid = $_GET['edituser'];

$search = "SELECT * FROM users WHERE user_id='$uid'";

$result = mysqli_query($conn, $search);

$resultCheck = mysqli_num_rows($result);

while($row = mysqli_fetch_assoc($result)){
    
    $client_number = $row['user_id'];
    $first_name = $row['user_first'];
    $last_name = $row['user_last'];
    $name = $row['user_first'] . " " . $row['user_last'];
    $email_address = $row['user_email'];
    $date_of_birth = $row['user_dob'];
    $post_code = $row['user_postcode'];
    $membership = $row['user_membership'];
    $entries = $row['user_entries'];
    
    $comments = $row['user_comment'];
    
}

?>

<section class="hero is-dark is-halfheight is-bold">
  <!-- Hero head: will stick at the top -->
<div class="hero-head">
    
    <br />
    <br />
    
        <div class="container is-centered">
            
            <br />
        
        <section align="center">
          
          <form method="post" action="includes/edit.inc.php?edituser=<?php echo $uid; ?>">
          
          <div class="columns">
            
          <div class="column is-2">
          <div>
              <label>First Name: </label>
              <br />
              <br />
              <input class="input is-primary" value="<?php echo $first_name; ?>" type="text" name="first">
          </div>
          </div>
          
          <br>
          
          <div class="column is-2">
          <div>
              <label>Lastname: </label>
              <br />
              <br />
              <input class="input is-primary" value="<?php echo $last_name; ?>" type="text" name="last">
          </div>
          </div>
          
          <br>
          
          <div class="column is-2">
          <div>
              <label>Email: </label>
              <br />
              <br />
              <input class="input is-primary" value="<?php echo $email_address; ?>" type="text" name="email">
          </div>
          </div>
          
          <br>
          
          <div class="column is-2">
          <div>
              <label>Date of Birth: </label>
              <br />
              <br />
              <input class="input is-primary" value="<?php echo $date_of_birth; ?>" type="text" name="dob">
          </div>
          </div>
          
          <br>
          
          <div class="column is-2">
          <div>
              <label>Postcode: </label>
              <br />
              <br />
              <input class="input is-primary" value="<?php echo $post_code; ?>" type="text" name="post">
          </div>
          </div>
          
          <div class="column is-2">
          <div>
              <label><?php
              
              if ($entries == 0){
                    echo "Days: ";
                  } else {
                    echo "Entries: ";
                  }
              
              ?></label>
              <br />
              <br />
              <input class="input is-primary" value="<?php
              
              if ($entries == 0){
                    echo $membership;
                  } else {
                    echo $entries;
                  }
              
              ?>" type="text" name="<?php
              
              if ($entries == 0){
                echo "membership";
              } else {
                echo "entries";
              }
              
              ?>">
              
              
          </div>
          </div>
          
          </div>
          
      </section>
        
        </div>
    
</div>

  <div class="hero-body">
    
    <div class="container is-centered">
      
      <p class="subtitle">Comment:</p>
      <input class="input" name="comments" value="<?php echo $comments; ?>" placeholder="Comment..." />
      
    </div>
    
  </div>
  
<div class="hero-foot">
  <div class="container has-text-centered">
      
      <a class="button is-light is-outlined" href="?user=<?php echo $uid; ?>">Cancel</a>
      <input class="button is-light" id="submit" name="submit" type="submit" value="Save">
      
      </form>
        
    </div>
    <br>
</div>
  
</section>