<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $servername = "localhost";
        $username = "root";
        $password = "";

// Create connection
        $conn = new mysqli($servername, $username, $password);

// Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully";
        // put your code here
        echo "hello world";
        $name=filter_input(INPUT_GET,"name");
        $email=filter_input(INPUT_GET,"email");
        echo $name;
        echo $email;
        
       
        ?>
    </body>
</html>
