<?php
  session_start();

  include("connection.php");
  include("functions.php");

  $user_data = check_login($con);

  # Adding to the Database

  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $signatures = $_POST['signatures'];
    $link = $_POST['link'];
    $petition_id = random_num(20);

    $query = "INSERT INTO petitions_db (owner_id, petition_id, owner_name, zip_code, title, body, signatures_needed, link) VALUES ('" . $_SESSION['user_id'] . "', '$petition_id', '" . $_SESSION['name'] . "', '" . $_SESSION['zip'] . "', '$title', '$description', '$signatures', '$link')";

    mysqli_query($con, $query);

    header("Location: viewpetition.php");
    die;
  }
  


?>
<!DOCTYPE html>

<?php include('title-head.html'); ?>

<?php include('member-menu-header.html'); ?>

<body>
      <div class="card" style="width:100%; height:auto">
        <h3>Create a listing for your petition:</h3>
        <form method="post">
            <div class="mb-3">
              <label for="exampleInputName1" class="form-label">Petition Title</label>
              <input type="text" class="form-control" name="title" required>
            </div>

            <div class="mb-3">
              <label for="exampleInputDesc1" class="form-label">Petition description</label>
              <input type="text" class="form-control" name="description" required>
            </div>

            <div class="mb-3">
                <label for="exampleInputSigNeed1" class="form-label">Signatures Needed</label>
                <input type="text" class="form-control" name="signatures" required>
            </div>

            <div class="mb-3">
                <label for="exampleInputLink1" class="form-label">Link to external information</label>
                <input type="text" class="form-control" name="link">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
          <?php if (isset($_SESSION['error']) && $_SESSION['error'] === "One or More Required Fields is Empty") { ?>
            <p style="color: red;"><?php echo $_SESSION['error']; ?></p>
            <?php unset($_SESSION['error']); ?>
          <?php } ?>


      </div>