<?php
    session_start();
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    include("connection.php");
    include("functions.php");

    if (isset($_POST['log-in'])) {
      $email = $_POST['log-in-email'];
      $password = $_POST['log-in-password'];
      // THIS ONLY CHECKS IF IT IS EMPTY CHECK FOR PASSWORD LENGTH AND NUMERIC USERNAME LATER
      if (!empty($email) && !empty($password)) {
          $query = "SELECT * FROM login_db WHERE username = '$email' LIMIT 1";

          $result = mysqli_query($con, $query);

          if ($result) {
              if ($result && mysqli_num_rows($result) > 0) {
                  // if the thing above is true it will get user data from the database as well
                  $user_data = mysqli_fetch_assoc($result);

                  if ($user_data['password'] === $password) {
                      $_SESSION['user_id'] = $user_data['user_id'];
                      echo '<div class="success-message">Login successful!</div>';


                      header("Location: memberpage.php");
                      die;
                  }
              }
          }
          echo "Bad password";
      } else {
          echo "No username/password";
      }
    }
?>

<!DOCTYPE html>

<?php include('title-head.html'); ?>

<?php include('guest-meau-header.html'); ?>

<!--required for bootstrap to work-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<link rel="stylesheet" href="/css/login.css">

<body>
      <br>

      <img src="\icon\android-chrome-96x96.png" alt="">

      <h4>Log in to EcoOrganize</h4>

      <div class="card" style="width: 50%; float:middle;" >
        <div class="card-body">
          <form method="post">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="log-in-email">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <!-- <a href="">Forgot Password?</a> -->
              <input type="password" class="form-control" id="exampleInputPassword1" name="log-in-password">
            </div>
            <button type="submit" class="btn btn-primary" name="log-in">Log in</button>
          </form>
        </div>
      </div>
    </body>
</html>