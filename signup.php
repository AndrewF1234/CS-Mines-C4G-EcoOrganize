<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

  include("connection.php");
  include("functions.php");

  // if someone is trying to signup
  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = $_POST['sign-up-email'];
    $password = $_POST['sign-up-password'];
    $name = $_POST['name'];
    $zip = $_POST['zip-code'];
    // Sign up
    // THIS ONLY CHECKS IF IT IS EMPTY CHECK FOR PASSWORD LENGTH AND NUMERIC USERNAME LATER
    $validation = validateZip($zip);

    if ($validation === true) {
      if (!empty($email) && !empty($password)) {
        $user_id = random_num(20);
        $query = "INSERT INTO login_db (user_id, username, password, name, zip) VALUES ('$user_id', '$email', '$password', '$name', '$zip')";

        mysqli_query($con, $query);

        // can redirect signup to login 
        header("Location: memberpage.php");
        die;
      } else {
          echo "Remake username/password"; // Needs to handle both types (username/password)
      }
    }
    else {
      $_SESSION['error'] = $validation;
      header("Location: signup.php");
      die;
    }
  }
?>

<!DOCTYPE html>

<?php include('title-head.html'); ?>

<?php include('guest-meau-header.html'); ?>

<!--required for bootstrap to work-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<body>
      <!--sign up card-->'
      <div class="card" style="width: 100%"  >
        <h4>Sign up:</h4>
        <div class="card-body">
          <form method="post">
            <div class="mb-3">
              <label class="form-label">Email address</label>
              <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="sign-up-email">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label class="form-label">Full Name</label>
              <input type="name" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
              <label class="form-label">Zip Code</label>
              <input type="zip" class="form-control" id="identification" name="zip-code" maxlength="5">
            </div>
            <?php if (isset($_SESSION['error'])) { ?>
              <p style="color: red;"><?php echo $_SESSION['error']; ?></p>
              <?php unset($_SESSION['error']); ?>
            <?php } ?>
            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="sign-up-password">
            </div>
            <button type="submit" class="btn btn-primary" name="sign-up">Sign Up</button>
          </form>
        </div>
      </div>
      

    </body>
</html>