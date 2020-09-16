<!DOCTYPE html>
<html>
<head>
    <title> Messages</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
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
    width: 1300px;
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
 

/*button */
.button {
 
  border-radius: 4px;
  background-color:   #4d4d4d;
  border: none;
  color: #FFFFFF;
  font-size: 20px;
  
  height: 80px;
  width: 100px;
  margin: 5px;
}

/*toast messages- grant req*/

#grant_req {
  visibility: hidden;
  min-width: 250px;
  margin-left: -125px;
  background-color: #333;
  color: #fff;
  text-align: center;
  border-radius: 2px;
  padding: 16px;
  position: fixed;
  z-index: 1;
  left: 50%;
  bottom: 30px;
  font-size: 17px;
}

#grant_req.show {
  visibility: visible;
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
  from {bottom: 0; opacity: 0;} 
  to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
  from {bottom: 30px; opacity: 1;} 
  to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}

/*Toast msg  deny req*/

#deny_req {
  visibility: hidden;
  min-width: 250px;
  margin-left: -125px;
  background-color: #333;
  color: #fff;
  text-align: center;
  border-radius: 2px;
  padding: 16px;
  position: fixed;
  z-index: 1;
  left: 50%;
  bottom: 30px;
  font-size: 17px;
}

#deny_req.show {
  visibility: visible;
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
  from {bottom: 0; opacity: 0;} 
  to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
  from {bottom: 30px; opacity: 1;} 
  to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}

</style>
</head>
<body>
    
<ul>
  <li style="float:right"><a href="http://localhost:8383/virtusa_frontend/login_mem.html"><i class="fa fa-sign-out"></i> log out </a></li>

<li style="float:left">
 <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="http://localhost:8383/virtusa_frontend/home1.html"><i class="fa fa-fw fa-home"></i> Home</a>
  <a href="http://localhost:8383/virtusa_frontend/settings1.html"><i class="fa fa-fw fa-wrench"></i> Settings</a>
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
<div id="grant_req" class="toast">Request Granted!</div>
<div id="deny_req" class="toast">Request Denied!</div>

<div class="report_php" style="margin: 0 auto;" >
    
   <br><br>
    Received messages:
     <?php
       //session_start();
       //$mail=$_SESSION["mailid"];
       include 'C:\wamp64\www\workspace\DBcon.php';
       
       //if($mail=="mukhil1140@gmail.com"){
       $sql2="select id,frommail,fromname,money,msg,status,time from message_admin where mail='mukhil1140@gmail.com' order by id desc";
    $res=$conn->query($sql2);
   echo "<table>";
    echo "<tr> <th>From-mail</th> <th>From</th> <th>Requested Money</th> <th>Message</th> <th>Time</th> <th></th> <th></th> </tr>";
    while($row=$res->fetch_array(MYSQLI_NUM))
        {
        if($row[5]==0){
            
            
            
            echo '<tr id="'.$row[0].'"><td>'.$row[1].'</td> <td>'.$row[2].'</td> <td>'.$row[3].'</td><td>'.$row[4].'</td><td>'.$row[6].'</td>'
                    . ' <td><form method="post"><input type="submit" name="grant'.$row[0].'" value="grant" class="button" id="grant'.$row[0].'" style="height:30px;" onclick="disp_grant()"/></form></td> '
                    . '<td><form method="post"><input type="submit" name="deny'.$row[0].'" value="deny" class="button" id="deny'.$row[0].'" style="height:30px; onclick="disp_deny()" /></td> </tr>';
           
             echo '<script>
$(document).ready(function(){
  $("#grant'.$row[0].'").click(function(){
    $("#'.$row[0].'").hide();
  });
  
$("#deny'.$row[0].'").click(function(){
    $("#'.$row[0].'").hide();
  });
  
});
</script>';
            $key1="grant".$row[0]."";
            $key2="deny".$row[0]."";
            if(array_key_exists($key1, $_POST)){
               // echo 'grant for id'.$row[0].'is clicked';
                $sql="update message_admin set status=1 where id='$row[0]'";
                 if($conn->query($sql)==TRUE){ 
                     //repository deduction
                     $sql1="select money from repository;";
                     $res1=$conn->query($sql1);
                     $row1=$res1->fetch_array(MYSQLI_NUM);
                     $rep=$row1[0];
                     $total=$rep-$row[3];
                     
                     //repository updation
                     $sql1="update repository set money=$total;";
                     if($conn->query($sql1)==TRUE){echo "Repository updated !<br>";}
                     else{echo "error".$sql1."<br>".$conn->error;}
                     echo "<br>Repository: ".$total."<br>";
                     
                     //date calc
                     $today = date("j, n, Y");
                     $pattern = "/[,\s]/";
                     $day= preg_split($pattern, $today);
                     $month=$day[2]; 
                     $date1=$day[0];
                     $year=$day[4];
             
                     //updating tb2(worker) table
                     $sql="select total from tb2 where email='$row[1]'";
                     $res1=$conn->query($sql);
                     $row1=$res1->fetch_array(MYSQLI_NUM);
                     $prev=$row1[0];
                     $updatedamt=$prev+$row[3];
                     
                     $sql1="update tb2 set total=$updatedamt where email='$row[1]'";
                     if($conn->query($sql1)==TRUE){echo "<br>Request granted!<br>";}
                     else{echo "<br>error".$sql1."<br>".$conn->error;}
                     
                     //entering data into outward table-updating outward table
                      $date= date(DATE_RFC1036);
                      $sql1="select name from tb2 where email='$row[1]'";
                      $res=$conn->query($sql1);
                      $row1=$res->fetch_array(MYSQLI_NUM);
                      $name=$row1[0];
                      $sql="insert into outward(name,amount,date,email,date1,month,year) values('$name',$row[3],'$date','$row[1]',$date1,$month,$year)";
                      if($conn->query($sql)==TRUE){echo "<br>New outward detected <br>";}
                    else{echo "<br>error".$sql."<br>".$conn->error;}
                 
                    //sending granted message to worker
                     $m="Your Request for Rs.".$row[3]." is granted,check your account for updates";
                     $sql1="insert into message_worker(mail,frommail,fromname,message,status,time) values('$row[1]','mukhil1140@gmail.com','admin','$m',1,'$date')";
                      if($conn->query($sql1)==TRUE){echo "<br>Message sent to".$row[1]." <br>";}
                      else{echo "<br>error".$sql."<br>".$conn->error;}
                 
                 }
                 else {
                     echo "error:".$sql."<br>".$conn->error;
                     
                 }
                 //header("Refresh:0");
                 echo '<script>window.location.reload();</script>';
            }
            else if(array_key_exists($key2, $_POST)){
                //sending deny msg to worker
                $sql="update message_admin set status=2 where id='$row[0]'";
                 if($conn->query($sql)==TRUE){
                     $date= date(DATE_RFC1036);
                     $m="Your Request for Rs.".$row[3]." is denied";
                     $sql1="insert into message_worker(mail,frommail,fromname,message,status,time) values('$row[1]','mukhil1140@gmail.com','admin','$m',2,'$date')";
                      if($conn->query($sql1)==TRUE){echo "<br>Message sent to".$row[1]." <br>";}
                      else{echo "<br>error".$sql."<br>".$conn->error;} 
        
                 }
                 else {echo "error:".$sql."<br>".$conn->error;}
                 //header("Refresh:0");
                 echo '<script>window.location.reload();</script>';
            }
            
            echo '<script>
function disp_grant() {
  var x = document.getElementById("grant_req");
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}

function disp_deny() {
  var x = document.getElementById("deny_req");
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
</script>';
            
        }
        }
        echo "</table>";
        echo "<br><br>";
       //}
       //else{
       // $sql2="select frommail,fromname,msg,time from message_admin where mail=$mail order by id desc";
//    $res=$conn->query($sql2);
//   echo "<table>";
//    echo "<tr> <th>From-mail</th> <th>From</th> <th>Message</th> <th>Time</th> </tr>";
//    while($row=$res->fetch_array(MYSQLI_NUM))
//        {
//            echo "<tr><td>".$row[0]."</td> <td>".$row[1]."</td> <td>".$row[2]."</td><td>".$row[3]."</td> </tr>";
//        }
//        echo "</table>";
//        echo "<br><br>";
       //
       //} 
       ?>
       

    
    </div>



<script>
$(document).ready(function(){
  $("#grant").click(function(){
    $('.toast_grant').toast('show');
  });
});

$(document).ready(function(){
  $("#deny").click(function(){
    $('.toast_deny').toast('show');
  });
});
</script>
            
   
</body>
</html> 



