<!DOCTYPE html>
<html lang="en">
<head>
  <title>Javascript General Knowledge</title>
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

<div class="container">

    <div class="container-fluid header text-center">    
      <p class="heading">Online Quiz System Portal</p>
      <p class="tagline">Enhance Your Knowledge</p>
    </div>
    
    <div class="marque">
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
      <a class="navbar-brand" href="index.php"><img src=image/logo.png alt="Quiz Logo" padding=5px height=50px width=50px/></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span>&nbsp HOME</a></li>
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
    <div class="col-sm-2 sidenav">
      
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
    
<div class="col-sm-8 text-left"> 
      
<b><br>
<h2 class="allheading">Javascript General Knowledge</h2>
<br>

<div class="row">
  <div class="col-sm-6">
      <div class="panel panel-color">
        <div class="panel-heading">1. A while loop has how many statements controlling it?</div>
        <div class="panel-body">Answer : two</div>
      </div>
  </div>
  <div class="col-sm-6">
      <div class="panel panel-color">
        <div class="panel-heading">2. Which event is triggered if the browser window is resized?</div>
        <div class="panel-body">Answer : onresize</div>
      </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-6">
      <div class="panel panel-color">
        <div class="panel-heading">3. What does = do?</div>
        <div class="panel-body">Answer : Makes the left value equal to the right</div>
      </div>
  </div>
  <div class="col-sm-6">
      <div class="panel panel-color">
        <div class="panel-heading">4. How do you call a function?</div>
        <div class="panel-body">Answer : result = myFunction()</div>
      </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-6">
      <div class="panel panel-color">
        <div class="panel-heading">5. Which of these is not a valid parameter?</div>
        <div class="panel-body">Answer : an operator</div>
      </div>
  </div>
  <div class="col-sm-6">
      <div class="panel panel-color">
        <div class="panel-heading">6. The control statement on a while loop is tested?</div>
        <div class="panel-body">Answer : before each time through the loop</div>
      </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-6">
      <div class="panel panel-color">
        <div class="panel-heading">7. do while (a < b) runs</div>
        <div class="panel-body">Answer : until a >= b</div>
      </div>
  </div>
  <div class="col-sm-6">
      <div class="panel panel-color">
        <div class="panel-heading">8. Which of these is not a logical operator?</div>
        <div class="panel-body">Answer : !</div>
      </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-6">
      <div class="panel panel-color">
        <div class="panel-heading">9. Which DOM is supported by the most browsers?</div>
        <div class="panel-body">Answer : getElementById</div>
      </div>
  </div>
  <div class="col-sm-6">
      <div class="panel panel-color">
        <div class="panel-heading">10. Which event causes a delay?</div>
        <div class="panel-body">Answer : setTimeout</div>
      </div>
  </div>
</div>
</b>
       
</div>
      

<div class="col-sm-2 sidenav">
      
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
  <p class="footer"><a href="index.php">Home</a>&nbsp|&nbsp<a href="aboutoqs.php">About OQS</a>&nbsp|&nbsp<a href="aboutus.php">About US</a>&nbsp|&nbsp<a href="Contact.php">Contact US</a></p>
  <p class="footerpara">Copyright &copy 2016 Online Quiz System Portal | All Rights Reserved </p>
</footer>

</div>
</body>
</html>