<?php
session_start();
if( isset($_POST['submit']) )
{
	$to = 'denasawyer1111@gmail.com'; // Replace with your email	
	$subject = 'Message from website'; // Replace with your $subject
	$headers = 'From: ' . $_POST['email'] . "\r\n" . 'Reply-To: ' . $_POST['email'];	
	
	$message = 'Name: ' . $_POST['name'] . "\n" .
	           'E-mail: ' . $_POST['email'] . "\n" .
	           'Subject: ' . $_POST['subject'] . "\n" .
	           'Message: ' . $_POST['message'];
	
	mail($to, $subject, $message, $headers);	
	header("Location: index.html");
}
?>