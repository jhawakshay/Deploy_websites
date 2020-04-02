<?php

$subject = $success1 = $message = "";

$to = "akshayjhawar.nitj@gmail.com";
$subject = "Response from email " . $_POST['email'];
$message = $_POST['message'];


if (mail($to, $subject, $message)){
	$success1 = "Message sent, thank you for contacting us!";
	$subject = $message = '';
} 

?>