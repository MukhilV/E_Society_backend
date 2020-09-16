<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
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
        
  //retreiving data
        $sql="select * from mytb1";
        $res=$conn->query($sql);
        $row=$res->fetch_array(MYSQLI_NUM);
        echo $row[0].'  '.$row[1].'  '.$row[2];
?>
