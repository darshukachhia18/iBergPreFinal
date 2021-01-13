<?php
if(isset( $_POST['name']))
$name = $_POST['name'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['message']))
$email = $_POST['message'];


$content="From: $name";
$recipient = "darshank188@gmail.com";
$mailheader = "From: $email \r\n";
$content = "Massage: $message";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
echo "Email sent!";
?>