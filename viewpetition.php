
<?php
    session_start();
    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);
?>

<!DOCTYPE html>

<?php include('/title-head.html'); ?>
<?php include('/member-menu-header.html'); ?>

<body>
    

    <h1>Petition Details</h1>

    <?php
        require_once('connection.php');

        $petition_id = $_SESSION['user_id'];

        if ($petition_id) {
            $sql = "SELECT * FROM petitions_db WHERE owner_id = $petition_id";
            $result = mysqli_query($con, $sql);

            if (mysqli_num_rows($result) == 1) {
                $petition = mysqli_fetch_assoc($result);
                ?>
                <h2><?php echo $petition['label']; ?></h2>
                <p><?php echo $petition['body']; ?></p>
                <?php
                if ($petition['link'] != null) {
                    ?>
                    <a href="<?php echo $petition['link']; ?>">Learn More</a>
                    <?php
                }
                ?>
                <p>Signatures: <?php echo $petition['signatures']; ?> / <?php echo $petition['signatures_needed']; ?></p>
                <?php
            } else {
                echo "<p>Petition not found!</p>";
            }
        } else {
            echo "<p>Please provide a petition ID.</p>";
        }
        mysqli_close($con);
    ?>
</body>
</html>