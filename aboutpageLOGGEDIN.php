<?php
    session_start();
    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);
?>

<html lang="en">

<?php include('title-head.html'); ?>
<?php include('member-menu-header.html'); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="aboutpagestyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    img {
        display: block;
        margin-left: auto;
        margin-right: auto;
        }
    </style>
</head>


<body>
    <div class="title">
        <h1>About Us</h1>
    </div>
    <div class="maintext">
        <p1> Our goal is to raise awareness and create a space where you can make change with a signature.</p1>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
    <style>
        .maintext{
            font-family: "Times New Roman", Times, serif;
            position: absolute;
            color: rgb(255, 255, 255);
            left: 50%;
            top: 99%;
            transform: translate(-50%, -50%);
            background-color: rgba(192, 255, 224, 0);
            padding: 0.5rem;
            text-align: center;
            font-size: 25px;


        }
    </style>
    <style>
        .title {
          text-align: center;
          font-size: 30px;
          font-family: "Times New Roman", Times, serif;
          color: rgb(11, 31, 11);

        }
    </style>     
    <div class="image1">
        <img src="images/aaa.png" alt="Our Mission" style="width:100%">
    </div>

    <div class="bodytext">
        <p1>In this day and age, while we must pursue technological advancement, we cannot afford to harm nature along the way, especially with growing climate change effects. EcoOrganize can help you help others by signing petitions, writting support, and donating to organizations that will save our environment. Plant forests and conserve nature by supporting EcoOrganize.</p1>
    </div>

    <style> 
        .bodytext {
            border-block-color: rgba(16, 82, 0, 0.788);
            font-family: "Times New Roman", Times, serif;
            font-size: 20px;
            color: rgba(252, 255, 210, 0.89);
            background-color: rgba(0, 92, 0, 0.63);
            padding: 30px;            
            border-block-color: rgba(16, 82, 0, 0.788);
            border-style: inset;
        }
        </style>
<style>
    .img-container {
      border-style: inset;
      border-block-width: 5px;
      border-block-color: rgba(16, 82, 0, 0.788);
    }
    
    </style>
    
    <div class="clearfix">
      <div class="img-container">
      <img src="images/Frame.png"Italy" style="width:100%">
    </div>
    
    <!--div class="button">
        <a href="http://localhost:3000/memberpage.php">Back to Home</a>
    </div-->
    <style>
        .backToMenu {
          text-align: center;
        }
    </style>        
    <!--style>
        a:link {
            color: rgb(4, 87, 4);
            background-color: transparent;
            text-decoration: none;
            font-family: "Times New Roman", Times, serif;
            font-size: 25px;

        }
        a:visited {
            color: rgb(85, 214, 10);
            background-color: transparent;
            text-decoration: none;
            font-family: "Times New Roman", Times, serif;
            font-size: 25px;

        }
        a:hover {
            color: rgb(26, 161, 26);
            background-color: transparent;
            text-decoration: underline;
            font-family: "Times New Roman", Times, serif;
            font-size: 25px;

        }
        a:active {
            color: yellow;
            background-color: transparent;
            text-decoration: underline;
            font-family: "Times New Roman", Times, serif;
            font-size: 25px;
        }
    </style-->


</body>
</html>