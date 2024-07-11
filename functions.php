<?php

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
    header("Location: index.php");
    die;
}

function random_num($length) {
    $text = "";
    if($length < 5) {
        $length = 5;
    }

    $len = rand(4,$length);

    for ($i = 0; $i < $len; $i++) {
        $text .= rand(0,9);
    }

    return $text;
}