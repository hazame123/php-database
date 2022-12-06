<section class="hero is-primary is-halfheight is-bold">
  <!-- Hero head: will stick at the top -->
<div class="hero-head">
  
  <?php
  include ("nav-bar.php");
  ?>
  
</div>

  <!-- Hero content: will be in the middle -->
  <div class="hero-body">
    <div class="container has-text-centered">
      <a class="button is-light is-large" href="search.php">
        Search Client
      </a>
    </div>
  </div>
  
<div class="hero-foot">
  
</div>

</section>


<section class="hero is-dark is-halfheight is-bold">
  <!-- Hero head: will stick at the top -->
<div class="hero-head">
  
</div>

  <!-- Hero content: will be in the middle -->
  <div class="hero-body">
    
    <container class="container">
        
        <div class="colums">
      
      <div class="column is-8 is-offset-1">
        
        <form method="post" action="includes/add.inc.php">
          
          <div class="columns">
            
          <div class="column is-3">
          <div>
              <label>First Name: </label>
              <input class="input is-primary" type="text" name="first" placeholder="Firstname">
          </div>
          </div>
          
          <br>
          
          <div class="column is-3">
          <div>
              <label>Lastname: </label>
              <input class="input is-primary" type="text" name="last" placeholder="Lastname">
          </div>
          </div>
          
          <br>
          
          <div class="column is-3">
          <div>
              <label>Email: </label>
              <input class="input is-primary" type="text" name="email" placeholder="Email">
          </div>
          </div>
          
          <br>
          
          <div class="column is-3">
          <div>
              <label>Date of Birth: </label>
              <input class="input is-primary" type="text" name="dob" placeholder="Date of Birth">
          </div>
          </div>
          
          <br>
          
          <div class="column is-3">
          <div>
              <label>Postcode: </label>
              <input class="input is-primary" type="text" name="post" placeholder="Postcode">
          </div>
          </div>
          
          </div>
          
          <br>
          
          <div class="columns">
            
            <div class="column is-offset-7">
              
          <div>
          <input class="button is-light" id="submit" name="submit" type="submit" value="Add">
          </div>
          
          </div>
          
          </div>

        </form>
        
      </div>
      
    </div>
    
    </container>
          
    </div>
        
<div class="hero-foot">


<?php
  
if(strpos($_SERVER['REQUEST_URI'],"?add=success")){
  echo '<div align=center>
<div class="button is-success">
  User successfully added
</div>
</div>';
} else if(strpos($_SERVER['REQUEST_URI'],"?add=empty")){
  echo '<div align=center>
<div class="button is-danger">
  Please fill in all fields
</div>
</div>';
} else if(strpos($_SERVER['REQUEST_URI'],"?add=emailtaken")){
  echo '<div align=center>
<div class="button is-danger">
  Email already in use
</div>
</div>';
}
    
?>
  
   <br>
  
</div>
  
</section>