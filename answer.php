<?php

include("class/users.php");
$ans=new users;
$answer=$ans->answer($_POST);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Answer of Quiz Test</title>
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
    .table-head{
      background-color: #9C27B0;
      font-family: cambria;
      font-weight: bold;
      padding: 5px;
      color: white;
      font-size: 20px
    }
    .table-body{
      background-color: #E1BEE7;
      font-family: cambria;
      font-weight: bold;
      padding: 5px;
      color: black;
      font-size: 16px;
    }
    .table-footer{
      //background-color: #AB47BC;
      font-family: cambria;
      font-weight: bold;
      padding: 5px;
      color: black;
      font-size: 21px;
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


<div class="col-sm-2"></div>
<div class="col-sm-8"> 
<br><br><br>

<?php

  $total_qus=$answer['right']+$answer['wrong']+$answer['no_answer'];
  $attempt_qus=$answer['right']+$answer['wrong'];

?>

<h2 class="allheading">Your Quiz Results</h2>
<br>

<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-8"> 

<div class="table-responsive">
<table class="table table-striped ">
    <thead>
        <tr class="table-head">
            <th>Total Number of Questions</th>
            <th><?php echo $total_qus; ?></th>
        </tr>
    </thead>
    <tbody>
        <tr class="table-body">
            <td>Attempted Questions</td>
            <td><?php echo $attempt_qus; ?></td>
        </tr>
        <tr class="table-body">
            <td>Right Answer</td>
            <td><?php echo $answer['right']; ?></td>
        </tr>
        <tr class="table-body">
            <td>Wrong Answer</td>
            <td><?php echo $answer['wrong']; ?></td>
         </tr>
         <tr class="table-body">
            <td>No Answer</td>
            <td><?php echo $answer['no_answer']; ?></td>
         </tr>
         <tr class="table-footer">
            <td>Your Results</td>
            <td><?php 
            $per=($answer['right']*100)/($total_qus);
            $percent=round($per); 
            echo $percent." %";
            ?></td>
         </tr>
    </tbody>

</table>
</div>
</div>
<div class="col-sm-2"></div>
</div>

<form method="POST" action="profile.php" class="form-horizontal">
<center>
<input type="submit" value="OK" class="btn btn-lg btn-primary" />
</center>
</form>

</div>

<div class="col-sm-2"></div>
</body>
</html>