<!DOCTYPE html>
<html>
    <head>
        <title>Add</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="/css/bulma.css" type="text/css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    
    
<?php
include ("includes/start.inc.php");
?>


<body>
    
<?php
  
  if (isset($_SESSION['u_id'])){
    include ("html/add.inc.php");
  } else {
      include ("html/login.inc.php");
  }
  
?>


</body>
</html>