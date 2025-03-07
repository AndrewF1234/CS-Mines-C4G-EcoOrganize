
<?php
    session_start();
    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);
    if (isset($_SESSION['user_id'])) {
      $user_id = $_SESSION['user_id'];
      $sql = "SELECT * FROM login_db WHERE id = ?";
      $stmt = mysqli_prepare($con, $sql);
      mysqli_stmt_bind_param($stmt, "i", $user_id);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      $user_data = mysqli_fetch_assoc($result);
    }
?>

<!DOCTYPE html>

<?php include('title-head.html'); ?>

<?php include('member-menu-header.html'); ?>

<body>

    <div class="card" style="width:100%; float:right; height:auto">
        <h2>Account info:</h2>
        
        <br>
        <h5>Name:</h5>
        <h6 id="personName"><?php echo $_SESSION['name']; ?></h6>

        <br>
        <h5>Email:</h5>
        <h6 id="personEmail"><?php echo $_SESSION['username']; ?></h6>

        <br>
        <h5>Location:</h5>
        <h6 id="locationName"><?php echo $_SESSION['zip']; ?></h6>

        <button id="editButton">Click here to edit account info</button>
        <script>
            document.getElementById("editButton").addEventListener("click", function () {
                
                document.getElementById("infoEditBox").style.display="block";
                document.getElementById("infoEditBox").style.width="48%";
                document.getElementById("infoEditBox").style.height="auto";
                document.getElementById("infoEditBox").style.float="right";



            })
        </script>

    </div>
    <br> 
    <br>
    <div class="card" style="display:none" id="infoEditBox">
        
        <h4>Change account info:</h4>
        <div class="input-group mb-3">
            <form method="post">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="change-email">
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputName1" class="form-label">Name</label>
                  <input type="email" class="form-control" id="exampleInputName" name="change-name">
                </div>
                <div class="mb-3">
                    <label for="exampleInputZip1" class="form-label">Zip Code</label>
                    <input type="email" class="form-control" id="exampleInputZip" name="change-zip">
                  </div>
                <!--button refreshes page on submit so correct info will be displayed up above, and repulled from the database-->
                <button type="submit" class="btn btn-primary" name="sign-up" href="account.php">Change info</button>
              </form>
        </div>
    </div>
    </body>
</html>