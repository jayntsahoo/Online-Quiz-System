<?php
mysql_connect("localhost","root","quiz");
mysql_select_db("quiz");

if (isset($_POST['submit']))
{
    $name = $_POST['na'];
    $phone = $_POST['ph'];
    $email = $_POST['mail'];
    $subject = $_POST['sb'];
    $comment = $_POST['cm'];

    $query = "insert into contact (id,name,phone,email,subject,comment) values('','$name','$phone','$email','$subject','$comment')";
    
    if(mysql_query($query))
    {
      include("contact.php");
    }

}

?>