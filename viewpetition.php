
<?php
    session_start();
    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);
?>

<!DOCTYPE html>

<?php include('title-head.html'); ?>
<?php include('member-menu-header.html'); ?>

<body>
    

    <link rel="stylesheet" href="/css/viewpetition.css">

    <h1 class="fancy-header">Petition Details</h1>


<?php
    require_once('connection.php');

    $petition_id = $_SESSION['user_id'];
    if ($petition_id) {
        $sql = "SELECT * FROM petitions_db WHERE owner_id = $petition_id";
        $result = mysqli_query($con, $sql);
      
        if (mysqli_num_rows($result) > 0) { // Check if there are any rows
          while ($petition = mysqli_fetch_assoc($result)) {
            // Display each petition's details within the loop
            ?>
            <h1><?php echo $petition['title']; ?></h1>
            <p><?php echo $petition['body']; ?></p>
            <?php
            if ($petition['link'] != null) {
              ?>
              <a href="<?php echo $petition['link']; ?>">Learn More</a>
              <?php
            }
            ?>
            <p>Signatures: <?php echo $petition['signatures']; ?> / <?php echo $petition['signatures_needed']; ?></p>
            <hr>  <?php
          }
        } else {
          echo "<p>No Petitions Found for this owner.</p>";
        }

  // Free the result set after the loop (important for resource management)
  mysqli_free_result($result);
} else {
  echo "<p>Invalid petition ID.</p>";
}
mysqli_close($con);
?>


</body>
</html>