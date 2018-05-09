<?php
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$subject = htmlspecialchars($_POST['subject']);
$message = htmlspecialchars($_POST['message']);
// Send email
$subject = "=?utf-8?B?".base64_encode($subject)."?=";
$headers = "From: $email\r\nReply-to: $email\r\n\Content-type: text/html; charset=utf-8\r\n";
if(mail("san4es4ever@yahoo.com",$subject,$message,$headers))
echo "Message send";
else
echo "Error:Message wasn't send";
?>