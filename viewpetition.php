<?php
    session_start();


    include("connection.php");
    include("functions.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petition</title>
</head>
<body>
    <h1>Petition Details</h1>
    <?php
        // Include the connection script (replace with your connection details)
        require_once('connection.php');

        // Get the petition ID from the URL (if provided)
        $petition_id = isset($_GET['id']) ? (int)$_GET['id'] : null;

        // If an ID is provided, attempt to retrieve petition data
        if ($petition_id) {
            $sql = "SELECT * FROM petitions_db WHERE owner_id = $petition_id";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) == 1) {
                $petition = mysqli_fetch_assoc($result);

                // Display petition details
                echo "<h2>" . $petition['label'] . "</h2>";
                echo "<p>" . $petition['body'] . "</p>";

                if ($petition['link'] != null) {
                    echo "<a href='" . $petition['link'] . "'>Learn More</a>";
                }

                echo "<p>Signatures: " . $petition['signatures'] . " / " . $petition['signatures_needed'] . "</p>";
                // Add a form to sign the petition (replace with your logic)
                echo '<form action="sign.php" method="post">
                    <input type="hidden" name="petition_id" value="' . $petition['owner_id'] . '">
                    <button type="submit">Sign Petition</button>
                </form>';
            } else {
                echo "<p>Petition not found!</p>";
            }
        } else {
            echo "<p>Please provide a petition ID.</p>";
        }

        // Close the connection
        mysqli_close($con);
    ?>
</body>
</html>