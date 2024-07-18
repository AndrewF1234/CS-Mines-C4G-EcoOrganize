<?php
session_start();


  include("connection.php");
  include("functions.php");

  //$user_data = check_login($con);

?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title -->
    <title>EcoOrganize</title>

    <!-- Favicon and touch icons -->
    <link rel="apple-touch-icon" sizes="114x114" href="/icon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/icon/favicon-16x16.png">
    <link rel="manifest" href="/icon/site.webmanifest">
    <link rel="mask-icon" href="/icon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- External CSS: Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <!--required for bootstrap to work-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!--Logo, can be placed somewhere else, in navbar for example-->
    <a href="index.php"> <img src="/images/ecoorganize.png" alt="Ecoorganize logo" width="35%" height="auto"></a>

    <!--navbar-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Menu</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php" style="background-color: rgb(206, 206, 206);">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="accountPage.html">Account</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="tech.php">Create a petition</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <br>

      <!-- form to collect zipcode and then use sql sort calls to find closest petitions: MUST IMPLEMENT -->
      <p><span style="color:white">s</span>Enter your zip code to view nearby petitions:</p>

      <div class="input-group input-group-lg" style="width:65%">
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>

      <!--petitions in card format-->
      <br>
      <div class="card" style="width: 85%; height:auto">
        <div class="card-body">
          <h5 class="card-title">Sample petition 1</h5>
          <p class="card-text">A description of the petition, who made it, what are its goals.</p>
          <a href="#" class="btn btn-primary" style="background-color:rgb(155, 219, 155); border-color:rgb(155, 219, 155)">Go somewhere, maybe a link to a website</a>
        </div>
      </div>

      <br>
      <div class="card" style="width: 85%; height:auto">
        <div class="card-body">
          <h5 class="card-title">Sample petition 1</h5>
          <p class="card-text">A description of the petition, who made it, what are its goals.</p>
          <a href="#" class="btn btn-primary" style="background-color:rgb(155, 219, 155); border-color:rgb(155, 219, 155)" >Go somewhere, maybe a link to a website</a>
        </div>
      </div>

      <br>
      <div class="card" style="width: 85%; height:auto">
        <div class="card-body">
          <h5 class="card-title">Sample petition 1</h5>
          <p class="card-text">A description of the petition, who made it, what are its goals.</p>
          <a href="#" class="btn btn-primary" style="background-color:rgb(155, 219, 155); border-color:rgb(155, 219, 155)">Go somewhere, maybe a link to a website</a>
        </div>
      </div>
</body>