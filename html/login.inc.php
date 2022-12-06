<br>
    <br>
    <br>
    <br>
    <div class="colums">
      
    <div class="column is-narrow is-offset-4">
        <p class="subtitle is-3">Login</p>
    </div>
      
      <div class="column is-3 is-offset-4">
        
        <form method="post" action="includes/login.inc.php">
          <div>
              <label>Username / Email: </label>
              <input class="input is-primary" type="text" name="uid" placeholder="Username / Email" value="ibex">
          </div>
          
          <br>
          
          <div>
              <label>Password: </label>
              <input class="input is-primary" type="password" name="pwd" placeholder="Password" value="goatygoat123">
          </div>
          
          <br>
          
          <div>
          <input class="button is-primary" id="submit" name="submit" type="submit" value="Sign In">
          </div>
        </form>
        
        <br />
        
        <?php
        
        if (strpos($_SERVER['REQUEST_URI'],"?login=user-not-found")){
          
          echo '<div align=center>
                <div class="button is-danger">
                  Username Incorrect
                </div>
                </div>';
                
        } else if (strpos($_SERVER['REQUEST_URI'],"?login=incorrect-pwd")){
          
          echo '<div align=center>
                <div class="button is-danger">
                  Password Incorrect
                </div>
                </div>';
          
        }
        
        ?>
        
    </div>
      
</div>