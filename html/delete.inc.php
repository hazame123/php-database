<?php

$uid = $_GET['deleteuser'];

?>

<section class="hero is-dark is-halfheight is-bold">
  <!-- Hero head: will stick at the top -->
<div class="hero-head">
  
</div>

  <!-- Hero content: will be in the middle -->
  <div class="hero-body">
    <div class="container has-text-centered">
        
        <p class="title is-3">Delete User?</p>
        <br />
        <p class="subtitle is-4">Are your sure you would like to <b>permanently</b> remove this user from the database?</p>
        
        <a class="button is-dark is-" href="?user=<?php echo $uid; ?>">Cancel</a>
        <a class="button is-danger is-outlined" href="includes/delete.inc.php?user=<?php echo $uid; ?>">Delete</a>
        
    </div>
  </div>
  
<div class="hero-foot">
  
</div>
  
</section>