<?php

function retrieve_data($user_data) {
    $_SESSION['user_id'] = $user_data['user_id'];
    $_SESSION['id'] = $user_data['id'];
    $_SESSION['name'] = $user_data['name'];
    $_SESSION['zip'] = $user_data['zip'];
    $_SESSION['username'] = $user_data['username'];
    $_SESSION['date'] = $user_data['date'];
}

function check_login($con) {
    if (isset($_SESSION['user_id'])) {
        $id = $_SESSION['user_id'];
        $stmt = $con->prepare("SELECT * FROM login_db WHERE user_id = ? LIMIT 1");
        $stmt->bind_param("s", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result && $result->num_rows > 0) {
            return $result->fetch_assoc();
        }
    }
    header("Location: login.php");
    die;
}

function random_num() {
    // Minimum and maximum values
    $min = 100;
    $max = 10000000;
  
    // Use random_int for cryptographically secure random numbers
    return random_int($min, $max);
  }

function validateZip($zip) {
  
    if (preg_match("/^\d{5}$/", $zip)) {
      return true;
    }
  
    return "Must Be A Valid Zip Code";
}