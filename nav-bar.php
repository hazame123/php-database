<div class="navbar-brand">
  
<div class="navbar-start">
  
  <div class="navbar-item">
    
    <a class="navbar-item" href="index.php">
      <img src="images/full logo.png">
    </a>
    
  </div>
  
</div>

<div class="navbar-end">
    
    <div class="navbar-item">
    
    <?php
      
      if (isset($_SESSION['u_id'])){
        
        echo $_SESSION['u_first'], ' ', $_SESSION['u_last'],
              '<form class="navbar-item" action="includes/logout.inc.php" method="post">
                <input class="button is-dark" type="submit" name="submit" value="Logout">
              </form>';
              
      }
      
    ?>
    
    </div>
    
      <p class="navbar-item"></p>
    
</div>

</div>