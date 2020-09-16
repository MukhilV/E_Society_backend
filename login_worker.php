<html>
    <head>
        <title>Welcome to E-society</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">-->
        <style>
             .error {
    width: 100%;
  margin: 20px;
  
}

/* top nav*/
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
  font-size: 28px;
  font-family: sans-serif;
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

/*** go back button ****/
button {
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
        </style>
    </head>
    <body>
<!--         <ul>
            <li style="float:left"><a href=""> &nbsp;&nbsp;&nbsp;E - Society  </a></li>
      
        <li style="float:right"><a href="http://localhost:8383/virtusa_frontend/signin_worker.html"><i class="fa fa-user-plus"></i> Sign in </a></li>
        <li style="float:right"><a href=""> Help </a></li>
  </ul>-->
       <div class="error"style="margin:0 auto;">
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//echo "hello world";

include 'C:\wamp64\www\workspace\DBcon.php';
//echo "login page<br>";
session_start();
$email=$_POST['mail'];
$_SESSION["mailid"]=$email;
$pswrd=$_POST['pswrd'];
$_SESSION['password']=$pswrd;

//if($email=="" || $pswrd==""){echo "Please fill all the fields"; return;}
if($email!="" && $pswrd!=""){

$sql="select email,password from tb2";
$res=$conn->query($sql);
$f=0;$s=0;
while($row = $res -> fetch_array(MYSQLI_NUM))
    {
        if($email==$row[0])
        {
            if($pswrd==$row[1])
                {
                //echo "<br>login successful<br>";
                $f=1;$s=1;
                break;
                }
            else
                {
                //echo "<br>incorrect password<br>";
                echo '<div class="w3-card-4" style="width:100%;">
    <header class="w3-container w3-grey">
      <h1>Error Message</h1>
    </header>

    <div class="w3-container">
      <p<br><br>&nbsp Incorrect password<br></p>
    </div>

  </div>';
      
    echo '<br><br><a href="http://localhost:8383/virtusa_frontend/login_worker.html"><button class="button" style="vertical-align: middle; width: 40%;"> go back </button></a><br>';
                $f=1;
                break;
                }
            
        }
    }
    if($f==0)
    {
        //echo "<br>incorrect email<br>";
         echo '<div class="w3-card-4" style="width:100%;">
    <header class="w3-container w3-grey">
      <h1>Error Message</h1>
    </header>

    <div class="w3-container">
      <p<br><br>&nbsp Incorrect Email<br></p>
    </div>

  </div>';
      
    echo '<br><br><a href="http://localhost:8383/virtusa_frontend/login_worker.html"><button class="button" style="vertical-align: middle; width: 40%;"> go back </button></a><br>';
    }
    
 if($s==1) {include 'C:\Users\DELL\Documents\NetBeansProjects\virtusa_frontend\public_html\home1.html';}
 $date= date("j, n, Y");
    //echo "Date:".$date."<br>";
}
else {
    echo '<br><br><a href="http://localhost:8383/virtusa_frontend/login_mem.html"><button> go back </button></a><br>';
}
                   ?>
        </div>
    </body>
</html>