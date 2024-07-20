<?php
session_start();


  include("connection.php");
  include("functions.php");
  ?>
  <!DOCTYPE html>
  <html>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title -->
    <title>EcoOrganize</title>
    <h1>Account Details</h1>
</head>
    <body>
    
    <?php
    print_r($_SESSION['email']);
    ?>

</body>
</html>
