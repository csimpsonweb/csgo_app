<?php

include 'connect.php';

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <title></title>
  <meta name="description" content="simpson.web project">
  <meta name="author" content="simpson.web">

  <link rel="stylesheet" href="css/meyerReset.css">
  <link rel="stylesheet" href="css/style.css">
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>

<body>
<div id="container">
  <div id="header">
    <img src="assets/sits.png"  width="64" height="28"  alt="sits" id="sits" />
    <a href="index.html"><img src="assets/soo27r.png" width="50" height="50" alt="logo" id="logo" /></a>
  </div>
  <div id="main">
    <?php 

    //Get row from db using GET['id'] variable in WHERE clause
      $sql = 'SELECT * FROM demoStore WHERE id ='.$_GET['id'];
      $result = mysqli_query($conn, $sql);

      $row = mysqli_fetch_assoc($result);

     //Loop through each field in the row and output the value
      foreach($row as $key=>$value){
          if($key !== "id"){
           echo '<p>'.$key.':'.$value.'</p>';
         }
      }
       


    ?>
    





  </div>
</div>
<script>
</script>
  <script src="js/library/jquery.js"></script>
  <script src="js/main.js"></script>
</body>
</html>