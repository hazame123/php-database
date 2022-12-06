<?php

session_start();

?>

<section class="hero is-dark is-halfheight is-bold">

<div class="hero-head">
  
</div>

  <div class="hero-body">
    
    <div class="container is-centered">
      
      <section align="center">
      
      <?php
      
            $i = 0;
            foreach($_SESSION['all'] as $result) {
            if ($i %4 == 0){
            echo '<div class="columns">';
            }
            echo '<div class="column is-3">';
            echo '<div class="box has-text-centered">';
            echo $result;
            echo '</div>';
            echo '</div>';

            $i++;
            
            if ($i %4 == 0){
            echo "</div>";
            }
        } 
              
      ?>
      
      </section>
      
    </div>
    
  </div>
  
<div class="hero-foot">
  <div class="container has-text-centered">
      <a class="button is-light is-small" href="add.php">
        Add Client
      </a>
    </div>
    <br>
</div>
  
</section>