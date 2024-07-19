<?php
session_start();


  include("connection.php");
  include("functions.php");
    
    $query = "SELECT * FROM login_db WHERE username = '$email'";
    $result = $con->query($query);
    echo $result->fetch_assoc();

    ?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title -->
    <title>EcoOrganize</title>
    <h1>Account Details</h1>
</head>
<h2>$result</h2>
<h3><a href="index.php">Home</h3>