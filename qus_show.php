<?php

include("class/users.php");
$qus=new users;
$cat=$_POST['cat'];
$qus->qus_show($cat);
$_SESSION['cat']=$cat;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Showing Quiz Questions and Answers</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="css/mobile.css">
  <link rel="stylesheet" href="css/tablet.css">
  <link rel="shortcut icon" href="image/icon.ico">
  <style type="text/css">
    .heading {
      background-color: #9C27B0;
      font-family: cambria;
      font-weight: bold;
      padding: 10px;
      color: white;
    }
    .question {
      font-weight: bold;
      font-size: 20px;
      font-style: cambria;
    }
    .option {
      font-weight: bold;
      font-size: 18px;
      font-style: cambria;
    }
  </style>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript">
  function timeout() 
    {
      //var hours=Math.floor(timeLeft/3600);
      //var minute=Math.floor((timeLeft-(hours*60*60)-30)/60);
      var minute=Math.floor(timeLeft/60);
      var second=timeLeft%60;
      //var hrs=checktime(hours);
      var mint=checktime(minute);
      var sec=checktime(second);
      if(timeLeft<=0)
      {
        clearTimeout(tm);
        document.getElementById("form1").submit();
      }
      else
      {  
      //document.getElementById("time").innerHTML=hrs+":"+min+":"+sec;
      document.getElementById("time").innerHTML=mint+":"+sec;
      }

      timeLeft--;
      var tm= setTimeout(function(){timeout()},1000);
    }

    function checktime(msg)
    {
        if (msg<10)
        {
          msg="0"+msg;
        }
        return msg;
    }
</script>
</head>

<body onload="timeout()">

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
<div class="col-sm-2"></div>
<div class="col-sm-8">    


<h2 class="heading">Online Quiz in PHP

<script type="text/javascript">
  //var timeLeft=2*60*60;
  var timeLeft=5*60;
</script>

<div id="time" style="float: right">Timeouth</div></h2>
<br>

<form method="POST" id="form1" action="answer.php">
  <?php 
    $i=1;
    foreach($qus->qus as $qust) { 
  ?>
 
  <div class="panel-group">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <?php echo 'Qn.'.$i; ?>&nbsp;&nbsp;<?php echo $qust['question']; ?>
      </div>
      
      <div class="panel-body option">
        <?php if (isset($qust['ans1'])) { ?>
        &nbsp;A.&emsp;<input type="radio" value="0" name="<?php echo $qust['id']; ?>" />&emsp;
        <?php echo $qust['ans1']; ?>
        <?php } ?>
        
        <br>

        <?php if (isset($qust['ans2'])) { ?>
          &nbsp;B.&emsp;<input type="radio" value="1" name="<?php echo $qust['id']; ?>" />&emsp;
          <?php echo $qust['ans2']; ?>
        <?php } ?>

        <br>

        <?php if (isset($qust['ans3'])) { ?>
          &nbsp;C.&emsp;<input type="radio" value="2" name="<?php echo $qust['id']; ?>" />&emsp;
          <?php echo $qust['ans3']; ?>
        <?php } ?>
      
        <br>

        <?php if (isset($qust['ans4'])) { ?>
          &nbsp;D.&emsp;<input type="radio" value="3" name="<?php echo $qust['id']; ?>" />&emsp;
          <?php echo $qust['ans4']; ?>
        <?php } ?>

        <input type="radio" value="no_attempt" checked="checked" style="display: none" name="<?php echo $qust['id']; ?>" />
      
      </div>
    </div>
</div>

<?php  $i++; } ?>

<center><input type="submit" value="Submit Quiz" class="btn btn-lg btn-success" />
</center><br>
</form>

</div>
<div class="col-sm-2"></div>

</body>
</html>