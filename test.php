<!DOCTYPE html>
<html>
    
    <head>
        
        <title>Test</title>
        <link rel="stylesheet" href="css/bulma.css" type="text/css" />
        
        <?php 
        
        session_start();
        
        ?>
        
    </head>
    
    <body>
        
<br />
        
<container class="container is-fluid">

<?php
            
            $i = 0;   
            foreach($_SESSION['all'] as $result) {
            if ($i %4 == 0){
            echo '<div class="columns">';
            }
            echo '<div class="column is-3">';
            echo '<a href="">';
            echo '<div class="box has-text-centered">';
            echo $result;
            echo '</div>';
            echo '</a>';
            
            echo '</div>';
            
            $i++;
            
            if ($i %4 == 0){
            echo "</div>";
            }
        } 
              
      ?>

</container>
        
    </body>
    
</html>