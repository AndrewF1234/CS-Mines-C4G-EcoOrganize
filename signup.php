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

    
    if (!empty($email) && !empty($password) && !empty($name) && !empty($zip)) {
      if ($validation === true) {
        $user_id = random_num();
        $query = "INSERT INTO login_db (user_id, username, password, name, zip) VALUES ('$user_id', '$email', '$password', '$name', '$zip')";

        mysqli_query($con, $query);

        // $new = "SELECT * FROM login_db WHERE username = '$email' LIMIT 1";

        // $result = mysqli_query($con, $new);

        // $user_data = mysqli_fetch_assoc($result);

        // retrieve_data($user_data);

        // can redirect signup to login 
        header("Location: memberpage.php");
        die;
      }
      else {
        $_SESSION['error'] = $validation;
        header("Location: signup.php");
        die;
      }
    } else {
      $_SESSION['error'] = "One or More Required Fields is Empty"; // Needs to handle both types (username/password)
    }
  }
?>

<!DOCTYPE html>

<?php include('title-head.html'); ?>

<?php include('guest-menu-header.html'); ?>

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
            <?php if (isset($_SESSION['error']) && $_SESSION['error'] === "Must Be A Valid Zip Code") { ?>
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
      <?php if (isset($_SESSION['error']) && $_SESSION['error'] === "One or More Required Fields is Empty") { ?>
        <p style="color: red;"><?php echo $_SESSION['error']; ?></p>
        <?php unset($_SESSION['error']); ?>
      <?php } ?>
      

    </body>
</html>