<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online Quiz System Portal</title>
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
    .intro{
      background-color: #AA00FF;
      font-weight: bold;
      font-style: georgia;
      padding: 20px;
    }
  </style>
</head>

<body>

<div class="container">

    <div class="container-fluid header text-center ">    
      <p class="heading">Online Quiz System Portal</p>
      <p class="tagline">Enhance Your Knowledge</p>
    </div>

    <div class="marque ">
      <marquee direction="left" scrollamount=3 scrolldelay=10 behavior="scroll">Welcome! to my Online Quiz System Portal...Here You test Your knowledge as well as enhance your knowledge by take part in quiz...</marquee>
    </div>

<nav class="navbar navbar-inverse">
<div class="row">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>

      </button>
      <a class="navbar-brand" href="index.php"><img class="logoimg" src=image/logo.png alt="Quiz Logo" padding=5px height=50px width=50px/></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">
        <span class="glyphicon glyphicon-home"></span>&nbsp HOME</a></li>
        <li><a href="aboutoqs.php">ABOUT OQS</a></li>
        <li><a href="topic.php">QUIZ TOPIC</a></li>
        <li><a href="aboutus.php">ABOUT US</a></li>
        <li><a href="contact.php">CONTACT US</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" id="myBtnlogin"><span class="glyphicon glyphicon-log-in" ></span>&nbsp LOGIN</a></li>
        <?php  include("login.php"); ?>
        <li><a href="#" id="myBtnsignup"><span class="glyphicon glyphicon-log-out" ></span> SIGN UP</a></li>
        <?php  include("signup.php"); ?>
      </ul>
    </div>
  </div>
</div>
</nav>

<div class="container-fluid contents text-center">    
  <div class="row content">
    <div class="col-md-2 col-sm-3 sidenav">
      
      <div class="well wellhead">
        <p>Study About Topics</p>
      </div>
      <div class="well">
        <p><a href="studyhtml.php">HTML</a></p>
      </div>
      <div class="well">
        <p><a href="studycss.php">CSS</a></p>
      </div>
      <div class="well">
        <p><a href="studyphp.php">PHP</a></p>
      </div>
      <div class="well">
        <p><a href="studymysql.php">MYSQL</a></p>
      </div>
      <div class="well">
        <p><a href="studybootstrap.php">BOOTSTRAP</a></p>
      </div>
     
    </div>

<div class="col-md-8 col-sm-6 text-left"> 
      

<h2 class="allheading">Welcome to Online Quiz System Portal</h2>


<div class="jumbotron intro">
  <p align="justify" >The Online Quiz System is a web application to take online quiz in various computer science topics like HTML, CSS, PHP, MYSQL, Bootstrap, Javascript etc. Here you know the basic idea about these topics and enhance as well as test your knowledge by taking the quiz and see the results.</p>
</div>

    
<div class="container-fluid bg-3 text-center">
  <div class="row">
    <div class="col-sm-6">
      <div class="panel">
        <div class="panel-heading"><b>Login Window</b></div>
        <div class="panel-body"><p align="justify">You should be a member of online quiz system to attend the online quiz.If you already a member then sign in here...</p>
        <button type="button" id="myBtnloginin" class="btn btn-color">Login</button><?php  include("loginin.php"); ?></div>
      </div>
    </div>

    <div class="col-sm-6">
      <div class="panel">
      <div class="panel-heading"><b>Signup Window</b></div>
      <div class="panel-body"><p align="justify">You should be a member of online quiz system to attend the online quiz.If not Register here for become a member...</p>
      <button type="button" id="myBtnsignupin" class="btn btn-color">Register</button><?php  include("signupin.php"); ?></div>
    </div>
  </div>

</div>
</div>
</div>
      
<div class="col-md-2 col-sm-3 sidenav">
      
      <div class="well wellhead">
        <p>Enhance Your GK</p>
      </div>
      <div class="well">
        <p><a href="gkhtml.php">HTML</a></p>
      </div>
      <div class="well">
        <p><a href="gkcss.php">CSS</a></p>
      </div>
      <div class="well">
        <p><a href="gkphp.php">PHP</a></p>
      </div>
      <div class="well">
        <p><a href="gkmysql.php">MYSQL</a></p>
      </div>
      <div class="well">
        <p><a href="gkbootstrap.php">BOOTSTRAP</a></p>
      </div>
    
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p class="footer"><a href="index.php">Home</a>&nbsp|&nbsp<a href="aboutoqs.php">About OQS</a>&nbsp|&nbsp<a href="aboutus.php">About US</a>&nbsp|&nbsp<a href="contact.php">Contact US</a></p>
  <p class="footerpara">Copyright &copy 2016 Online Quiz System | All Rights Reserved </p>
</footer>

</div>
</body>
</html>