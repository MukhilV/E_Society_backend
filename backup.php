<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: "Lato", sans-serif;
  font-size: 28px;
}

.sidenav {
  display: none;
  height: 100%;
  width: 250px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
  color: #818181;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

/*top nav */
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}
/* Payment section */
/* Payment section */
 .email_php {
    width: 1000px;
  padding: 50px;
  margin: 20px;
  
  
}
</style>
</head>
<body>
    
<ul>
  <li style="float:right"><a href="http://localhost:8383/virtusa_frontend/index.html"><i class="fa fa-sign-out"></i> log out </a></li>

<li style="float:left">
 <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="http://localhost:8383/virtusa_frontend/home.html"><i class="fa fa-fw fa-home"></i> Home</a>
  <a href="http://localhost:8383/virtusa_frontend/settings.html"><i class="fa fa-fw fa-wrench"></i> Settings</a>
  <a href="http://localhost:8383/virtusa_frontend/contact.html"><i class="fa fa-bar-chart"></i> Reports</a>
   <a href="http://localhost:8383/virtusa_frontend/email.html"><i class="fa fa-envelope"></i> Feedback</a>
  <a href="http://localhost:8383/virtusa_frontend/index.html"><i class="fa fa-sign-out"></i> log out</a>
</div></li>
  </ul>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

<script>
function openNav() {
  document.getElementById("mySidenav").style.display = "block";
}

function closeNav() {
  document.getElementById("mySidenav").style.display = "none";
}
</script>

<div class="email_php" style="margin: 0 auto;" >
    <?php

$from_mail=$_POST['from'];
$pswrd_gm=$_POST['gmpswrd'];
$sub=$_POST['subject'];
$body=$_POST['content'];

if($from_mail=="" || $pswrd_gm=="" || $sub=="" || $body=="") 
    {echo 'All fields are mandatory..';
    echo '<br><br><a href="http://localhost:8383/virtusa_frontend/email.html"><button> go back </button></a><br>';
    }

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
$f=0;

/* Open the try/catch block. */
try {
   // $mail->Username = "mukhil99@gmail.com";
//$mail->Password = "yurlate@456";
//
//$mail->isSMTP();
    $mail->Username = $from_mail;
    
    $mail->Password =$pswrd_gm;
   /* Set the mail sender. */
   $mail->setFrom('mukhil99@gmail.com', 'Mukhil99');

   /* Add a recipient. */
   $mail->addAddress('mukhil1140@gmail.com');

   /* Set the subject. */
   $mail->Subject = $sub;

   /* Set the mail message body. */
   $mail->Body = $body;

   /* Finally send the mail. */
   $mail->send();
}
catch (Exception $e)
{
   /* PHPMailer exception. */
   echo $e->errorMessage().",,,,";
   $f=1;
}
catch (\Exception $e)
{
   /* PHP exception (note the backslash to select the global namespace Exception class). */
   echo $e->getMessage()."kjhgj";
   $f=1;
}

if($f==0) {echo "Email sent";}
else {echo "Error in sending mail";}

?>
    
      
    </div>
            
   
</body>
</html> 
