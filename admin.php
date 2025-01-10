<?php

include("class/users.php");
$cat=new users;
$category=$cat->cat_shows();

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin of Online Quiz System</title>
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


<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="admin.php"><img src=image/logo.png alt="Quiz Logo" padding=5px height=50px width=50px/></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="admin.php"><span class="glyphicon glyphicon-home"></span>
        &nbsp HOME</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php" onclick="logout()"><span class="glyphicon glyphicon-log-in" ></span>&nbsp LOGOUT</a></li>
      </ul>
    </div>
  </div>
</nav>


<div class="col-sm-2"></div>
<div class="col-sm-8">

<br><br><br>
<h2 class="allheading">Admin Panel</h2>

<div class="table-responsive">

  <?php 
  
   if(isset($_GET['msg']) && !empty($_GET['msg']))
    {
    echo "<p>Data Insert Successfully</p>"; 
    }
  
  ?> 

  <form method="POST" action="add_quiz.php">

    <div class="form-group">
      <div class="col-md-3">
        <label for="question">Enter Question :</label>
      </div>
      <div class="col-md-9">
        <input type="text" required autofocus class="form-control" name="qus" placeholder="Enter Question">
      </div><br>
    </div>

<br>

    <div class="form-group">
      <div class="col-md-3">
        <label for="option-1">Enter Option.1 :</label>
      </div>
      <div class="col-md-9">
        <input type="text" required class="form-control" name="op1" placeholder="Enter Option.1">
      </div><br>
    </div>

<br>

    <div class="form-group">
      <div class="col-md-3">
        <label for="option-2">Enter Option.2 :</label>
      </div>
      <div class="col-md-9">
        <input type="text" required class="form-control" name="op2" placeholder="Enter Option.2">
      </div><br>
    </div>

<br>

    <div class="form-group">
      <div class="col-md-3">
        <label for="option-3">Enter Option.3 :</label>
      </div>
      <div class="col-md-9">
        <input type="text" required class="form-control" name="op3" placeholder="Enter Option.3">
      </div><br>
    </div>

<br>

    <div class="form-group">
      <div class="col-md-3">
        <label for="option-4">Enter Option.4 :</label>
      </div>
      <div class="col-md-9">
        <input type="text" required class="form-control" name="op4" placeholder="Enter Option.4">
      </div><br>
    </div>

<br>
    
    <div class="form-group">
      <div class="col-md-3">
        <label for="anwer">Enter Answer :</label>
      </div>
      <div class="col-md-9">
        <input type="text" required class="form-control" name="ans" placeholder="Enter Answer">
      </div><br>
    </div>

<br>

    <div class="form-group">
      <div class="col-md-3">
        <label class="control-label" for="sell">Choose Category :</label>
      </div>
      <div class="col-md-9">
        <select class="form-control" id="sell" name="cat">
          <option value="">Choose Category</option>
          <?php

          foreach($category as $c)
          {
              echo "<option value=".$c['id'].">".$c['cat_name']."</option>";
          }

          ?>
        </select>
      </div><br>
    </div>


    <div class="form-group">
      <div class="col-sm-9 col-sm-offset-3"><br>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        <button type="reset" name="reset" class="btn btn-primary" value="Cancel">Cancel</button>
      </div>
    </div>

  </form>
</div>

<div class="col-sm-2"></div>

</div>
</html>