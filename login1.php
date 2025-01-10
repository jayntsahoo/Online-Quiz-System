<?php

include("class/users.php");
$signin=new users;
extract($_POST);

if($signin->signin($mail,$pass))
	{	
		$signin->url("profile.php?Run=Success...You-have-successfully-logged-on");
	}
else
	{
		$signin->url("index.php?Run=failed...your-username-&-password-doesnot-match");
	}

?>