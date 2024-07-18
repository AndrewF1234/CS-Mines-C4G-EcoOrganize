<?php
session_start();


  include("connection.php");
  include("functions.php");

  $user_data = check_login($con);

?>
<!DOCTYPE html>

<?php include('title-head.html'); ?>

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
                <a class="nav-link" href="acc.php">Account</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="tech.php">Create a petition</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>


      <h3><a href="acc.php">Sign up or log in</a> to create a petition</h3>
    </body>