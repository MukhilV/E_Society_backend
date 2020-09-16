<?php

//require('phpmailer/class.phpmailer.php');
//require( 'C:\wamp64\www\workspace\class.PHPMailer.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/* Exception class. */
require 'C:\PHPMailer\src\Exception.php';

/* The main PHPMailer class. */
require 'C:\PHPMailer\src\PHPMailer.php';

/* SMTP class, needed if you want to use SMTP. */
require 'C:\PHPMailer\src\SMTP.php';

$mail = new PHPMailer(TRUE);


/* Open the try/catch block. */
try {
    $mail->Username = "mukhil99@gmail.com";
    $mail->Password = "strngpswrd@99";
//
//$mail->isSMTP();
   /* Set the mail sender. */
   $mail->setFrom('mukhil99@gmail.com', 'Mukhil99');

   /* Add a recipient. */
   $mail->addAddress('mukhil1140@gmail.com');

   /* Set the subject. */
   $mail->Subject = "Reminder";

   /* Set the mail message body. */
   $mail->Body = "this is a mail from task scheduler";

   /* Finally send the mail. */
   $mail->send();
}
catch (Exception $e)
{
   /* PHPMailer exception. */
   echo $e->errorMessage().",,,,";
   
}
catch (\Exception $e)
{
   /* PHP exception (note the backslash to select the global namespace Exception class). */
   echo $e->getMessage()."kjhgj";
   
}



?>