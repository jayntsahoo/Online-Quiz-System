<?php

$db=mysqli_connect("localhost","root","","quiz");
$fn=$_POST['fn'];
$ln=$_POST['ln'];
$ph=$_POST['ph'];
$email=$_POST['mail'];
$img_name=$_FILES['img']['name'];
$tmp_name=$_FILES['img']['tmp_name'];
$pas=md5($_POST["pass"]);
move_uploaded_file($tmp_name, "img/".$img_name);

$check="select * from login where email='$email'";
$run=mysqli_query($db,$check);
include("class/users.php");
$register=new users;
extract($_POST);
if(mysqli_num_rows($run)>0)
	{
		$register->url("index.php?Run=Failed...username-already-exists");
	}
else
{
	$query="insert into login values ('','$fn','$ln','$email','$pas','$ph','$img_name')";
	if($register -> signup($query))
	{
		$register->url("index.php?Run=Success...you-have-registered-successfully");
	}
}

?>