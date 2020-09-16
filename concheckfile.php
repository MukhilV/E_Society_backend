<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 */



$servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "mydb1";

// Create connection
        $conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        echo "  Connected successfully<br>";
        
          /* $sql = "insert into mytb1 (id,name,age) values (8,'cake',5)";
if($conn->query($sql)==TRUE)
{echo "row created;";}
else{echo "error".$sql."<br>".$conn->error;}*/
$sql1 = "select * from mytb1";
$result = $conn->query($sql1);
// Numeric array
while($row = $result -> fetch_array(MYSQLI_NUM))
{
   // $p = printf ("%d \t %s \t %d  \n", $row[0], $row[1],$row[2]);
   // echo $p;
    echo $row[0]."&nbsp".$row[1]."&nbsp".$row[2]."<br>";
    echo "<br>";
}
//$name=print $_GET["name"];
//$email = print $_GET["email"];

$id=$_GET["identity"];
$nme=$_GET["name"];
$age=$_GET["email"];
$sql2="insert into mytb1(id,name,age) values ($id,'$nme',$age)";
if($conn->query($sql2)==TRUE)
{echo "row created;";}
else{echo "error".$sql2."<br>".$conn->error;}

//echo $result;
$conn->close();
        
?>

