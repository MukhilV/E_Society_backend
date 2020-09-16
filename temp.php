<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require 'PHPMailer/PHPMailerAutoload.php';
 $mail=new PHPMailer();
 $mail->Host='smpt.gmail.com';
 $mail->SMPTAuth='true';
 $smail->Username='mukhil99@gmail.com';
 $mail->Password='strngpswrd@99';
 $mail->SMPTSecure='tls';
 $mail->Port=587;
 $mail->SetFrom('svdscz@jdkka.com','thefv');
 $mail->addAddress=('mukhil1140@gmail.com');
 $mail->addReplyTo('no reply','info');
 $mail->Subject='subject';
 $mail->Body="my body";
 if($mail->send())
 {
     echo 'mail sent';
     
 }
 else{
     echo "failure";
 }
?>
