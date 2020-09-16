<!DOCTYPE html>
<html>
<head>
    <title> Settings status</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: "Lato", sans-serif;
  font-size: 28px;
   background-color: #f2f2f2;
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
/* Settings section */

 .set_php {
    width: 1000px;
  padding: 50px;
  margin: 20px;
  
  
}
</style>
</head>
<body>
    
<ul>
  <li style="float:right"><a href="http://localhost:8383/virtusa_frontend/login_mem.html"><i class="fa fa-sign-out"></i> log out </a></li>

<li style="float:left">
 <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="http://localhost:8383/virtusa_frontend/home.html"><i class="fa fa-fw fa-home"></i> Home</a>
  <a href="http://localhost:8383/virtusa_frontend/settings.html"><i class="fa fa-fw fa-wrench"></i> Settings</a>
  <a href="http://localhost:8383/virtusa_frontend/contact.html"><i class="fa fa-bar-chart"></i> Reports</a>
   <a href="http://localhost:8383/virtusa_frontend/email.html"><i class="fa fa-envelope"></i> Feedback</a>
  <a href="http://localhost:8383/virtusa_frontend/login_mem.html"><i class="fa fa-sign-out"></i> log out</a>
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

<div class="set_php" style="margin: 0 auto;" >
    <?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 */
$newname=$_POST['newname'];
$newincome=$_POST['newincome'];
$oldpassword=$_POST['oldpassword'];
$newpassword=$_POST['newpassword'];

if($newincome=="" && $newname=="" && $newpassword=="" && $oldpassword==""){
    echo "enter some value";
    echo '<br><br><a href="http://localhost:8383/virtusa_frontend/settings.html"><button> go back </button></a><br>';
  return;
}


session_start();
include 'C:\wamp64\www\workspace\DBcon.php';
//getting neccessary variables
$prevpassword=$_SESSION['password'];
$mail=$_SESSION["mailid"];
$f=0;
 $sql="SELECT name, income FROM tb1 WHERE email='$mail';";
    $res=$conn->query($sql);
    $row=$res->fetch_array(MYSQLI_NUM);
    $oldname=$row[0];
    $oldincome=$row[1];
    
//date calc    
$today = date("j, n, Y");
$pattern = "/[,\s]/";
$day= preg_split($pattern, $today);
$month=$day[2];
$date1=$day[0];
$year=$day[4];
    
//pre verification
if($newpassword!="" and $oldpassword=="")
{
    echo "confirm your old password first";
     echo '<br><br><a href="http://localhost:8383/virtusa_frontend/settings.html"><button> go back </button></a><br>';
  return;
}

//changing user name
if($newname!=""){
    $sql="update tb1 set name='$newname' where email='$mail'";
    if($conn->query($sql)==TRUE){echo "<br>Name changed<br>";}
    else {echo "error:".$sql."<br>".$conn->error;}
}

//changing income
if($newincome!=""){
    $sql="update tb1 set income='$newincome' where email='$mail'";
    if($conn->query($sql)==TRUE){echo "<br>Income changed<br>";}
    else {echo "error:".$sql."<br>".$conn->error;}
}

//changing password
  if($oldpassword!=""){ 
   if($prevpassword!=$oldpassword){echo "<br>incorrect password<br>"; $f=1;}
   if($newpassword==""){echo "<br>invalid password,<br>password cannot be empty<br>"; $f=1;}
   if($oldpassword==$prevpassword && $oldpassword==$newpassword){echo "new password cannot be old password";$f=1;}
   if($f==0){
        $sql="update tb1 set password='$newpassword' where email='$mail'";
    if($conn->query($sql)==TRUE){echo "<br> Password changed<br>";}
    else {echo "error:".$sql."<br>".$conn->error;}
  }
  
}

//recording changes
if($newname!="" || $newincome!="" || $newpassword!=""){
   if($newincome=="") {$newincome=$oldincome;}
   if($newpassword=="") {$newpassword="#no_change";}
   if($oldpassword=="") {$oldpassword="#no_change";}
   if($newname=="") {$newname="#no_change";}
    $sql1="insert into changes(email,oldname,newname,oldincome,newincome,oldpassword,newpassword,date,month,year) values('$mail','$oldname','$newname',$oldincome,$newincome,'$oldpassword','$newpassword',$date1,$month,$year)";
    if($conn->query($sql1)==TRUE){echo "<br>changes reflected <br>";}
    else {echo "<br>error:".$sql1."<br>".$conn->error; }
}
    
  
?>
      
    </div>
            
   
</body>
</html> 
