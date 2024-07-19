<?php
session_start();


  include("connection.php");
  include("functions.php");

  //$user_data = check_login($con);

?>

<!DOCTYPE html>

<?php include('/title-head.html'); ?>

<?php include('/guest-menu-header.html'); ?>

<!--required for bootstrap to work-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<body>
      <br>

      <!-- form to collect zipcode and then use sql sort calls to find closest petitions: MUST IMPLEMENT -->
      <p><span style="color:white">s</span>Enter your zip code to view nearby petitions:</p>

      <div class="input-group input-group-lg" style="width:65%">
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>

      <!--petitions in card format-->
      <br>
      <div class="card" style="width: 85%; height:auto">
        <div class="card-body">
          <h5 class="card-title">Sample petition 1</h5>
          <p class="card-text">A description of the petition, who made it, what are its goals.</p>
          <a href="#" class="btn btn-primary" style="background-color:rgb(155, 219, 155); border-color:rgb(155, 219, 155)">Go somewhere, maybe a link to a website</a>
        </div>
      </div>

      <br>
      <div class="card" style="width: 85%; height:auto">
        <div class="card-body">
          <h5 class="card-title">Sample petition 1</h5>
          <p class="card-text">A description of the petition, who made it, what are its goals.</p>
          <a href="#" class="btn btn-primary" style="background-color:rgb(155, 219, 155); border-color:rgb(155, 219, 155)" >Go somewhere, maybe a link to a website</a>
        </div>
      </div>

      <br>
      <div class="card" style="width: 85%; height:auto">
        <div class="card-body">
          <h5 class="card-title">Sample petition 1</h5>
          <p class="card-text">A description of the petition, who made it, what are its goals.</p>
          <a href="#" class="btn btn-primary" style="background-color:rgb(155, 219, 155); border-color:rgb(155, 219, 155)">Go somewhere, maybe a link to a website</a>
        </div>
      </div>
</body>