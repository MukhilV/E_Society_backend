<!DOCTYPE html>
<html>
<head>
    <title> Messages</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: "Lato", sans-serif;
  font-size: 20px;
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

 .report_php {
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

tr:nth-child(even){background-color: #ffffff;}

th {
  background-color: #333;
  color: white;
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
  <a href="http://localhost:8383/virtusa_frontend/settings.html"><i class="fa fa-fw fa-wrench"></i> Settings</a>
  <a href="http://localhost/workspace/msg_worker.php"><i class="fa fa-comment" aria-hidden="true"></i> Messages</a>
   <a href="http://localhost:8383/virtusa_frontend/email1.html"><i class="fa fa-envelope"></i> Feedback</a>
   
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

<div class="report_php" style="margin: 0 auto;" >
    
     <?php
       session_start();
       $mail=$_SESSION["mailid"];
       include 'C:\wamp64\www\workspace\DBcon.php';
      
       $sql2="select frommail,fromname,message,time from message_worker where mail='$mail' order by id desc";
    $res=$conn->query($sql2);
   echo "<table>";
    echo "<tr> <th>From-mail</th> <th>From</th> <th>Message</th> <th>Time</th> </tr>";
    while($row=$res->fetch_array(MYSQLI_NUM))
        {
            echo "<tr><td>".$row[0]."</td> <td>".$row[1]."</td> <td>".$row[2]."</td><td>".$row[3]."</td> </tr>";
        }
        echo "</table>";
        echo "<br><br>";
       
      
       ?>
       

    
    </div>
            
   
</body>
</html> 



