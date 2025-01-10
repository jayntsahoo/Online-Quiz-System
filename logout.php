<?php

session_start();

include("class/users.php");

$logout=new users;

$logout->url("index.php?Run=Success...You-have-successfully-logged-out");

session_destroy();

?>