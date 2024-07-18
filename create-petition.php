<?php
session_start();


  include("connection.php");
  include("functions.php");

  $user_data = check_login($con);

?>
<!DOCTYPE html>

<?php include('title-head.html'); ?>

<?php include('member-menu-header.html'); ?>

<body>

      <h3><a href="acc.php">Sign up or log in</a> to create a petition</h3>
    </body>