<?php

include("class/users.php");
$email=$_SESSION['email'];
$profile=new users;
$profile->users_profile($email);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>User Profile in Online Quiz System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="css/mobile.css">
  <link rel="stylesheet" href="css/tablet.css">
  <link rel="shortcut icon" href="image/icon.ico">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style type="text/css">
    .profile{
          font-family: cambria;
          font-size:20px;  
      }
    .field{
          background-color:#F3E5F5;
          padding:10px;
          font-weight: bold;
          color: black;
          text-align:center;
          font-size:20px;
          background-color: #F3E5F5;
    }
    .value{
          padding:8px;
          font-size:18px;
          font-weight: bold;
          text-align:center;
    }
  </style>
</head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="profile.php"><img src=image/logo.png alt="Quiz Logo" padding=5px height=50px width=50px/></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="profile.php"><span class="glyphicon glyphicon-home"></span>
        &nbsp HOME</a></li>
        <li><a href="instruction.php">INSTRUCTION</a></li>
        <li><a href="seeprofile.php">PROFILE</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in" ></span>&nbsp LOGOUT</a></li>
      </ul>
    </div>
  </div>
</nav>


<br><br><br>

<div class="row profile">
<div class="col-sm-2"></div>

<div class="col-sm-8">

<h2 class="allheading">See Your Profile</h2>
<br>

<?php
foreach($profile->data as $prof)
{ ?>

  <div class="row">
    <div class="col-sm-6">
      <p class="field">First Name</p>
      <p class="value"><?php echo $prof['fname'];?></p>
      <p class="field">Last Name</p>
      <p class="value"><?php echo $prof['lname'];?></p>
    </div>
    <div class="col-sm-6">
      <p class="field">Profile Image</p>
      <p class="value"><img src="img/<?php echo $prof['image']?>" class="img-rounded" width=130px height=130px alt="Passport Photo" /></p>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-6">
      <p class="field">User Name</p>
      <p class="value"><?php echo $prof['email'];?></p>
    </div>
    <div class="col-sm-6">
      <p class="field">Phone Number</p>
      <p class="value"><?php echo $prof['phone'];?></p>
    </div>
  </div>

<?php    } ?>
 
</div>
</div>
<div class="col-sm-2"></div>

</div>
</body>
</html>