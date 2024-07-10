<?php

function check_login($con) {

    // checking if id is in database then fetches user data if it is
    if(isset($_SESSION['user_id'])) {

        $id = $_SESSION['user_id']

        // Selecting similar IDs
        $query = "SELECT * FROM users WHERE user_id = '$id' limit 1";
        
        // reading from database based on query and connection
        $result = mysqli_query($con, $query);

        // checking if result is true
        if($result && mysqli_num_rows($result) > 0) {

            // if the thing above is true it will get user data from the database as well
            $user_data = mysqli_fetch_assoc($result);

            return $user_data;
        } 
    }

    // redirects to the account page if the if statement above is false
    # This is useful to have if you are in a page you aren't suppposed to be.
    # Otherwise I think this would be best used to redirect to home page instead of acc, but can change that later
    header("Location: acc.php");
    die;

}

function random_num() {
    $text = "";
    if($length < 5) {
        $length = 5;
    }

    $len = rand(4,$length);

    for ($i = 0; $i < $len; $i++) {
        $text .= rand(0,9)
    }

    return $text;
}