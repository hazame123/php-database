<!DOCTYPE html>
<html>
    <head>
      <?php
      
      if (strpos($_SERVER['REQUEST_URI'],"?user=")){
      
      $uid = $_GET['user'];
      $search = "SELECT * FROM users WHERE user_id='$uid'";
      $result = mysqli_query($conn, $search);
      while($row = mysqli_fetch_assoc($result)){
      $name = $row['user_first'] . " " . $row['user_last'];
      }
        echo '<title>'.$name.'</title>';
      } else {
        echo '<title>Search</title>';
      }
      
      ?>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="/css/bulma.css" type="text/css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    
<?php
session_start();
?>


<body>
    
<?php
  
  if (isset($_SESSION['u_id'])){
    include ("html/search.inc.php");
  } else if (!isset($_SESSION['u_id'])){
      include ("html/login.inc.php");
  }
  
?>


</body>
</html>