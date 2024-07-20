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
      <div class="card" style="width:100%; height:auto">
        <h3>Create a listing for your petition:</h3>
        <form>
            <div class="mb-3">
              <label for="exampleInputName1" class="form-label">Petition name</label>
              <input type="text" class="form-control" id="exampleInputName1">
            </div>

            <div class="mb-3">
              <label for="exampleInputDesc1" class="form-label">Petition description</label>
              <input type="text" class="form-control" id="exampleInputDesc1">
            </div>

            <div class="mb-3">
                <label for="exampleInputZip1" class="form-label">Zip Code</label>
                <input type="text" class="form-control" id="exampleInputZip1">
            </div>

            <div class="mb-3">
                <label for="exampleInputSigNeed1" class="form-label">Signatures Needed</label>
                <input type="text" class="form-control" id="exampleInputSigNeed1">
            </div>

            <div class="mb-3">
                <label for="exampleInputLink1" class="form-label">Link to external information</label>
                <input type="text" class="form-control" id="exampleInputLink1">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>


      </div>