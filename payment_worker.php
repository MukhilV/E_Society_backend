<!DOCTYPE html>
<html>
<head>
    <title> Payment details</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
/* Payment section */
/* Payment section */
 .pay_php {
    width: 1000px;
  padding: 50px;
  margin: 20px;
}

 /* table design */
 table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color:  #ffffff;}

th {
  background-color: #4CAF50;
  color: white;
}

/*go back button*/
.button {
  display: inline-block;
  border-radius: 4px;
  background-color:   #4d4d4d;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 20px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
</head>
<body>
    
<ul>
  <li style="float:right"><a href="http://localhost:8383/virtusa_frontend/login_worker.html"><i class="fa fa-sign-out"></i> log out </a></li>

<li style="float:left">
 <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="http://localhost:8383/virtusa_frontend/home1.html"><i class="fa fa-fw fa-home"></i> Home</a>
  <a href="http://localhost:8383/virtusa_frontend/settings1.html"><i class="fa fa-fw fa-wrench"></i> Settings</a>
  <a href="http://localhost/workspace/msg_worker.php"><i class="fa fa-comment" aria-hidden="true"></i> Messages</a>
  
   <a href="http://localhost:8383/virtusa_frontend/email1.html"><i class="fa fa-envelope"></i> Feedback</a>
  <a href="http://localhost:8383/virtusa_frontend/login_worker.html"><i class="fa fa-sign-out"></i> log out</a>
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

<div class="pay_php" style="margin: 0 auto;" >
        <?php
session_start();
$user_mail=$_SESSION["mailid"];

$amt=$_POST['amt'];
$msg=$_POST["msg"];
if($amt=="" ) {
    //echo "Enter some value";
     echo '<div class="w3-card-4" style="width:50%;">
    <header class="w3-container w3-grey">
      <h1>Error Message</h1>
    </header>

    <div class="w3-container">
      <p<br><br>&nbsp Enter some value<br></p>
    </div>

  </div>';
    echo '<br><br><a href="http://localhost:8383/virtusa_frontend/home1.html"><button class="button" style="vertical-align: middle; width: 40%;"> go back </button></a><br>';
  return;
}
if($amt<0){
    //echo "Enter only positive values";
    echo '<div class="w3-card-4" style="width:50%;">
    <header class="w3-container w3-grey">
      <h1>Error Message</h1>
    </header>

    <div class="w3-container">
      <p<br><br>&nbsp Enter omly positive values<br></p>
    </div>

  </div>';
    echo '<br><br><a href="http://localhost:8383/virtusa_frontend/home1.html"><button class="button" style="vertical-align: middle; width: 40%;"> go back </button></a><br>';
    
    return;
}
//if($amt==""){$amt=0;}
    
include 'C:\wamp64\www\workspace\DBcon.php';

//echo "<br>payment php<br>";

//updating repository
    if($amt>0) {
    
    $sql="select money from repository;";
    $res=$conn->query($sql);
    $row=$res->fetch_array(MYSQLI_NUM);
    $rep=$row[0];
    $total=$rep-$amt;
    if($total<0){
        echo "<br>There is not enough money! try after repository is filled<br>";
        echo "<br>Repository is not updated<br>";
        echo "<br>Repository: ".$rep."<br>";
        
        echo '<div class="w3-card-4" style="width:50%;">
    <header class="w3-container w3-grey">
      <h1>Money shortage</h1>
    </header>

    <div class="w3-container">
      <p<br><br>&nbsp There is not enough money! try after repository is filled<br><br>
      <br>&nbsp Repository is not updated<br><br>
      <br>Repository: '.$rep.'<br>
      </p>
    </div>

  </div>';
        return;
    }
    else{
    /*$sql1="update repository set money=$total;";
    if($conn->query($sql1)==TRUE){echo "Repository updated !<br>";}
     else{echo "error".$sql1."<br>".$conn->error;}
    echo "<br>Repository: ".$total."<br>";*/
    
    //inserting into message_admin
        $sql="select * from tb2 where email='$user_mail'";
        $res=$conn->query($sql);
        $row=$res->fetch_array(MYSQLI_NUM);
        $user_name=$row[0];
        $time= date(DATE_RFC822);
        
        $sql="insert into message_admin(mail,frommail,fromname,money,msg,status,time) values('mukhil1140@gmail.com','$user_mail','$user_name',$amt,'$msg',0,'$time');";
        if($conn->query($sql)==TRUE){echo "<br>Message sent to admin <br>";}
        else{echo "<br>error".$sql."<br>".$conn->error;}
        
    }
    
    }

 /*   

//date calc
$today = date("j, n, Y");
$pattern = "/[,\s]/";
$day= preg_split($pattern, $today);
$month=$day[2];
$date1=$day[0];
$year=$day[4];

//global e-mail
$mail=$_SESSION["mailid"];

// Outward PAYMENT SECTION - updating tb2
$sql="select total from tb2 where email='$mail'";
$res=$conn->query($sql);
$row=$res->fetch_array(MYSQLI_NUM);
$prev=$row[0];
$updatedamt=$prev+$amt;

$sql1="update tb2 set total=$updatedamt where email='$mail'";
if($conn->query($sql1)==TRUE){echo "<br>Request granted!<br>";}
else{echo "<br>error".$sql1."<br>".$conn->error;}

//entering data into outward table-updating outward table
$date= date(DATE_RFC1036);
$sql1="select name from tb2 where email='$mail'";
$res=$conn->query($sql1);
$row=$res->fetch_array(MYSQLI_NUM);
$name=$row[0];
$sql="insert into outward(name,amount,date,email,date1,month,year) values('$name',$amt,'$date','$mail',$date1,$month,$year)";
if($conn->query($sql)==TRUE){echo "<br>New outward detected <br>";}
else{echo "<br>error".$sql."<br>".$conn->error;}
*/
    // Outward PAYMENT SECTION - displaying details
$sql="select total from tb2 where email='$user_mail'";
$res=$conn->query($sql);
$row=$res->fetch_array(MYSQLI_NUM);
$prev=$row[0];
$updatedamt=$prev+$amt;
    
//echo "<br><br>Total requested payment: $updatedamt<br><br>Currently Requested: $amt<br><br> Previous total: $prev<br><br>";

   echo '<div class="w3-card-4" style="width:50%;">
    <header class="w3-container w3-grey">
      <h1>Total Requests</h1>
    </header>

    <div class="w3-container">
      <p><br><br>
      Total requested payment: '.$updatedamt.'<br><br>Currently Requested: '.$amt.'<br><br> Previous total: '.$prev.'<br><br>
      </p>
    </div>

  </div>';
    
    ?>
    </div>
            
   
</body>
</html> 

