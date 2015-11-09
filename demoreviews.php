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

      $servername = "localhost";
      $username = "root";
      $password = "root";
      $dbname = "registrations";

      // Create connection
      $conn = mysqli_connect($servername, $username, $password, $dbname);
      // Check connection
      if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
      }

      $sql = "SELECT id, round1, round2  FROM demoStore";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
            //echo "id: " . $row["id"]. "<br>" . " - Round1: " . $row["round1"]. "<br>" . "- Round2: " . $row["round2"]. "<br>";
            echo "<div id='zonal'>row id: " . $row["id"]. "<span id='toggle' onclick='toggle()'>=  click</span></div>";
        }
      } else {
          echo "0 results";
      }
      
      mysqli_close($conn);
    ?>  
  </div>
</div>
<script>
function toggle(){
  //echo "id: " . $row["id"]. "<br>" . " - Round1: " . $row["round1"]. "<br>" . "- Round2: " . $row["round2"]. "<br>";
  alert("clicked");
}

</script>
  <script src="js/library/jquery.js"></script>
  <script src="js/main.js"></script>
</body>
</html>