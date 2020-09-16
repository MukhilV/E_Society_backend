<html>
    <head>
        <title> Sign up - member</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <style>
            
                div {
    width: 700px;
  padding: 50px;
  margin: 20px;
  
}
body {font-size: 28px;}

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
          <ul>
            <li style="float:left"><a href=""> &nbsp;&nbsp;&nbsp;E - Society  </a></li>
      
        <li style="float:right"><a href="http://localhost:8383/virtusa_frontend/signin_worker.html"><i class="fa fa-user-plus"></i> Sign in </a></li>
        <li style="float:right"><a href=""> Help </a></li>
  </ul>
        <div style="margin: 0 auto;">
<?php
include 'C:\wamp64\www\workspace\DBcon.php';
//echo "sign up page<br>";

$name=$_POST['name'];
$email=$_POST['email'];
$pswrd1=$_POST['pswrd1'];
$pswrd2=$_POST['pswrd2'];
$income=$_POST['income'];


if($name=="" || $email=="" || $pswrd1=="" || $pswrd2=="" || $income==""){
    //echo "Please fill all the fields.";
    echo '<div class="w3-card-4" style="width:100%;">
    <header class="w3-container w3-grey">
      <h1>Error message!</h1>
    </header>

    <div class="w3-container">
      <p<br><br>&nbsp Please fill all the fields<br></p>
    </div>

  </div>';
    echo'<br><a href="http://localhost:8383/virtusa_frontend/signin.html"><button class="button"> Sign up </button></a>';
    return;
}

if($email!=""){
    $sql1="select name from tb1 where email='$email'";
    $res=$conn->query($sql1);
    $row=$res->fetch_array(MYSQLI_NUM);
    $name1=$row[0];
    if($name1!=""){
        
        //echo "You already have an account..!";
         echo '<div class="w3-card-4" style="width:100%;">
    <header class="w3-container w3-grey">
      <h1>Existing user!</h1>
    </header>

    <div class="w3-container">
      <p<br><br>&nbsp You already have an account<br></p>
    </div>

  </div>';
         echo'<br><a href="http://localhost:8383/virtusa_frontend/login_mem.html"><button class="button"> Log in </button></a>';
        
        return;
    }
    else{
 

$sql="insert into tb1(name,email,password,amount,income) values ('$name','$email','$pswrd1',0,$income)";

if($pswrd1===$pswrd2){
if($conn->query($sql)==TRUE)
{//echo "<br>sign up successfull,login again<br>";
echo '<div class="w3-card-4" style="width:100%;">
    <header class="w3-container w3-grey">
      <h1>Success</h1>
    </header>

    <div class="w3-container">
      <p<br><br>&nbsp sign up successfull,login again<br></p>
    </div>

  </div>';
echo'<br><a href="http://localhost:8383/virtusa_frontend/login_mem.html"><button class="button"> Log in </button></a>';
}
else{echo "<br>error".$sql1."<br>".$conn->error;}

}
else{//echo "<br>password dosen't match,go back and sign up again<br>";
echo '<div class="w3-card-4" style="width:100%;">
    <header class="w3-container w3-grey">
      <h1>Error message</h1>
    </header>

    <div class="w3-container">
      <p<br><br>
      password dosen\'t match,<br>go back and sign up again<br></p>
    </div>

  </div>';
echo'<br><a href="http://localhost:8383/virtusa_frontend/signin.html"><button class="button"> Sign up </button></a>';
}
    }
}
?>
        </div>
    </body>
</html>



