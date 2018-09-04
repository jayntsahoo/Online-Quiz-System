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


<div class="col-sm-4"></div>
<div class="col-sm-4">

<br><br><br>
<h2 class="allheading">Admin Login</h2>
<br>

<form method="POST" action="adminlogin1.php">

              <div class="form-group">
                <label for="usrname"><span class="glyphicon glyphicon-user"></span> User Name</label>
                <input type="email" autofocus class="form-control" id="usrname" name="mail" placeholder="Enter Email" />
              </div>

              <div class="form-group">
                <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                <input type="password" class="form-control" id="psw" name="pass" placeholder="Enter Password" />
              </div>

              <div class="checkbox">
                <label><input type="checkbox" value="" checked>Remember me</label>
              </div>

    <div class="form-group">
      <div class="col-sm-9 col-sm-offset-3"><br>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        <button type="reset" name="reset" class="btn btn-primary" value="Cancel">Cancel</button>
      </div>
    </div>

  </form>
</div>

<div class="col-sm-4"></div>

</div>
</html>