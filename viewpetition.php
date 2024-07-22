
<?php
    session_start();
    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);
?>

<!DOCTYPE html>
<style>
.card {
  display: flex;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  transition: 0.3s;
}
    </style>
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
            <div class="card" style="width: 100%; height:auto">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $petition['title']; ?></h5>
                        <p class="card-text"><?php echo $petition['body']; ?></p>
                        <?php
                         if ($petition['link'] != null) {
                        ?>
                    <a target="_blank" href="<?php echo $petition['link']; ?>" class="btn btn-primary" style="background-color:rgb(155, 219, 155); border-color:rgb(155, 219, 155)">Learn more</a>
                    <?php
                }?>
                 <p>Signatures: <?php echo $petition['signatures']; ?> / <?php echo $petition['signatures_needed']; ?></p>
                    </div>

                </div>
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