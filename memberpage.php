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
    <br>

    <!-- form to collect zipcode and then use sql sort calls to find closest petitions: MUST IMPLEMENT -->
    <p><span style="color:white">s</span>Enter your zip code to view nearby petitions:</p>
    <form method="post">
      <div class="input-group input-group-lg" style="width:65%">
        <input type="text" class="form-control" aria-label="Sizing example input" name="zip-input" maxlength="5">
        <button type="submit" class="btn btn-primary" name="submit-button">Submit</button>
      </div>
    </form>

    <!--petitions in card format-->
    <?php
    if (isset($_POST['submit-button'])) {
      require_once('connection.php');

      $petition_zip = $_POST['zip-input'];
      if ($petition_zip) {
        $query = 'SELECT * FROM petitions_db WHERE LEFT(zip_code, 3) = LEFT("' . mysqli_real_escape_string($con, $petition_zip) . '", 3)';

        $result = mysqli_query($con, $query);
      
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
                }
                ?>
                <p>Signatures: <?php echo $petition['signatures']; ?> / <?php echo $petition['signatures_needed']; ?></p>
                
                <button class="blue-button">Sign</button>
              </div>
            </div>
            <hr>  
            <?php
          }
        } else {
          echo "<p>No Petitions Found for this area.</p>";
        }

          // Free the result set after the loop (important for resource management)
          mysqli_free_result($result);
        } else {
          echo "<p>No Petitions Found for this area.</p>";
        }
        mysqli_close($con);
      }
        ?>
</body>

<script>
.blue-button {
  background-color: #cccccc;  /* Light gray color */
  color: #999999;                /* Darker gray text */
  border: none;                /* Remove default border */
  padding: 10px 20px;          /* Add some padding */
  font-size: 16px;           /* Set font size */
  cursor: default;            /* Change cursor to default */
  float: right;               /* Make the button float right */
}
  </script>
