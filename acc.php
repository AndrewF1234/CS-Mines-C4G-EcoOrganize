<?php
session_start();

  include("connection.php");
  include("function.php");

  // if someone is trying to signup
  if($_SERVER['REQUEST_METHOD'] == "POST") {
      $email = $_POST['email'];
      $password = $_POST['password'];

      # THIS ONLY CHECKS IF IT IS EMPTY CHECK FOR PASSWORD LENGTH AND NUMERIC USERNAME LATER
      if(!empty($email) && !empty($password)) {
        $user_id = random_num(20)
        $query = "insert into users (user_id, username, password) values ('$user_id', '$email', '$password')"

        mysqli_query($query)

        # can redirect signup to login 
        die;
      } else {
        echo "remake username/password"; // Needs to handle both types (username/password)
      }
  }

?>

<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>account page</title>

  <!-- Favicon and touch icons -->
  <link rel="apple-touch-icon" sizes="114x114" href="/icon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/icon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/icon/favicon-16x16.png">
  <link rel="manifest" href="/icon/site.webmanifest">
  <link rel="mask-icon" href="/icon/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
  
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
              <a class="nav-link" href="acc.php">Account</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tech.php">Create a petition</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


      <h3>Log in or sign up to support your favorite petitions!</h3>
      <br>

      <!--sign up card-->
      <div class="card" style="width: 45%; float:right" >
        <h4>Sign up:</h4>
        <div class="card-body">
          <form method="post">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>

      <div class="card" style="width: 45%; float:left;" >
        <h4>Log in:</h4>
        <div class="card-body">
          <form>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>


    </body>
</html>