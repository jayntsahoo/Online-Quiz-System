<?php

include("class/users.php");
$email=$_SESSION['email'];
$profile=new users;
$profile->users_profile($email);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Profile Page in Online Quiz System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="css/mobile.css">
  <link rel="stylesheet" href="css/tablet.css">
  <link rel="shortcut icon" href="image/icon.ico">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
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

<br><br>
<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-8">
<h3 class="allheading">Click the Start Quiz button to Start the Quiz</h3>
</div>
<div class="col-sm-2"></div>
</div>


<center><button type="button" class="btn btn-lg btn-primary"  data-toggle="tab" href="#select">Start Quiz</button></center>
  
<div class="col-md-3"></div>
<div class="col-md-6">
    <div id="select" class="tab-pane fade">
    <br>       
    <form method="POST" action="qus_show.php" class="form-horizontal">
      <select class="form-control" id="select" name="cat">
      <option disabled="disabled"><b>Select Category</b></option>
      <?php
      $profile->cat_shows();
      foreach($profile->cat as $category)
      { ?>
      <option value="<?php echo $category['id']; ?>"><?php echo $category['cat_name']; ?></option>
      
<?php   }   ?>

          </select><br>
      <center><input type="submit" class="btn btn-lg btn-primary"></center>
    </div>
  </div>
</div>
</form>
</div>
</div>
</body>
</html>