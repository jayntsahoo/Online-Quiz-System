<?php

include("class/users.php");
$signin=new users;
extract($_POST);

if($signin->signin($mail,$pass))
	{	
		$signin->url("admin.php?Run=Success...You-have-successfully-logged-on");
	}
else
	{
		$signin->url("adminlogin.php?Run=failed...your-username-&-password-doesnot-match");
	}

?>