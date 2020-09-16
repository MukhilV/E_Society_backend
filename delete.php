

<?php
include 'C:\wamp64\www\workspace\DBcon.php';
session_start();
$email=$_SESSION['mailid'];
$sql="delete from tb1 where email='$email'";
$f=0;
if($conn->query($sql)==TRUE) {echo "Account deleted..!";$f=1;}
else {echo "error:".$sql."<br>".$conn->error;}
if($f==1) {    include 'C:\Users\DELL\Documents\NetBeansProjects\virtusa_frontend\public_html\home.html';}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

