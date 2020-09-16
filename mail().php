<?php
$to       = 'mukhil1140@gmail.com';
$subject  = 'Testing sendmail.exe';
$message  = 'Hi, you just received an email using sendmail!';
$headers  = 'From: julie';



//include 'C:\wamp64\www\workspace\DBcon.php';
/*
session_start();
$to       = 'mukhil1140@gmail.com';
$subject  = $_POST['subject'];
$message  = $_POST['content'];
$from=$_POST['from'];
$head = $_SESSION["mailid"];
$headers = $head." ".$from;*/
            
if(mail($to,$subject ,$message , $headers))
{echo "Email sent";}
else
{echo "Email sending failed";}
?>