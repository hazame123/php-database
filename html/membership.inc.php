<?php

$uid = $_GET['membershipadd'];

?>

<section class="hero is-dark is-halfheight is-bold">
  <!-- Hero head: will stick at the top -->
<div class="hero-head">
  
</div>

  <!-- Hero content: will be in the middle -->
  <div class="hero-body">
    <div class="container has-text-centered">

<form class="form" action="../includes/membership.inc.php">
      
<div class="control has-text-centered">
    <p class="subtitle is-4">Type of membership: </p>
  <label class="radio">
    <input type="radio" name="membership" value="1month">
    1 Month
  </label>
  <br />
  <br />
  <label class="radio">
    <input type="radio" name="membership" value="3month">
    3 Months
  </label>
  <br />
  <br />
  <label class="radio">
    <input type="radio" name="membership" value="6month">
    6 Months
  </label>
  <br />
  <br />
  <label class="radio">
    <input type="radio" name="membership" value="12month">
    12 Months
  </label>
  <br />
  <br />
  <label class="radio">
    <input type="radio" name="membership" value="10entry">
    10 Entries
  </label>
  <br />
  <br />
  <br />
</div>

<input type="hidden" name="uid" value="<?php echo $uid; ?>" />

<a class="button is-light is-outlined" href="?user=<?php echo $uid; ?>">Cancel</a>
<input class="button is-primary is-outlined" value="Add" type="submit" />

</form>
      
    </div>
  </div>
  
<div class="hero-foot">
  
</div>
  
</section>