<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$to ="ashickashick@gmail.com"
$subject ="mail from website"

$txt ="you have received a message from".$name ."\r\nEmail:".$email."\r\nMessage:".$message;
if ($email!=NULL){
    mail($to,$subject,$txt,$headers);
}

header('location:thanks.html');


?>