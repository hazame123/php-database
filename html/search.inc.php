<section class="hero is-primary is-halfheight is-bold">
<div class="hero-head">
  
  <?php
  include ("nav-bar.php");
  ?>
  
</div>

  <div class="hero-body">
    
    <container class="container">
    
    <div class="colums">
      
      <div class="column is-8 is-offset-1">
        
        <form method="get" action="includes/search.inc.php">
          
          <div class="columns">
            
          <div class="column is-3">
          <div>
              <label>First Name: </label>
              <input class="input is-primary" type="text" name="first" value="" placeholder="Firstname">
          </div>
          </div>
          
          <br>
          
          <div class="column is-3">
          <div>
              <label>Lastname: </label>
              <input class="input is-primary" type="text" name="last" value="" placeholder="Lastname">
          </div>
          </div>
          
          <br>
          
          <div class="column is-3">
          <div>
              <label>Email: </label>
              <input class="input is-primary" type="text" name="email" value="" placeholder="Email">
          </div>
          </div>
          
          <br>
          
          <div class="column is-3">
          <div>
              <label>Date of Birth: </label>
              <input class="input is-primary" type="text" name="dob" value="" placeholder="Date of Birth">
          </div>
          </div>
          
          <br>
          
          <div class="column is-3">
          <div>
              <label>Postcode: </label>
              <input class="input is-primary" type="text" name="post" value="" placeholder="Postcode">
          </div>
          </div>
          
          </div>
          
          <br>
          
          <div class="columns">
            
            <div class="column is-offset-7">
          
          <div>
          <input class="button is-light" id="submit" name="submit" type="submit" value="Search">
          </div>
          
          </div>
          
          </div>

        </form>
        
      </div>
      
    </div>
    
    </container>

  </div>
  
<div class="hero-foot">
  
</div>

</section>


<?php

if(strpos($_SERVER['REQUEST_URI'],"?search=results")){
    include ("searchResults.php");
} else if(strpos($_SERVER['REQUEST_URI'],"?search=not-found")){
    include ("not-found.php");
} else if(strpos($_SERVER['REQUEST_URI'],"?membershipadd=")){
    include ("membership.inc.php");
} else if(strpos($_SERVER['REQUEST_URI'],"?user=")){
    include ("user.inc.php");
} else if(strpos($_SERVER['REQUEST_URI'],"?edituser=")){
    include ("edit.inc.php");
} else if(strpos($_SERVER['REQUEST_URI'],"?deleteuser=")){
    include ("delete.inc.php");
} else {
   include ("addButton.php");
}

?>