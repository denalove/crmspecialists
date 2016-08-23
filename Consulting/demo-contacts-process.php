<?php
session_start();

# Include the Autoloader (see "Libraries" for install instructions)
require('../vendor/autoload.php');

use Mailgun\Mailgun;

# Instantiate the client.
$mgClient = new Mailgun('key-96d82ca8ad9aa148aba3dd0edf467655');
$domain = "mg.swflcloudforce.com";

# Make the call to the client.
if( isset($_POST['submit']) )
{
	$result = $mgClient->sendMessage("$domain",
                  array('from'    => '$_POST['email']',
                        'subject' => '$_POST['subject']',
                        'text'    => '$_POST['message']',
                        'body-plain'		=> '$_POST['name']'));



	//$to = 'denasawyer1111@gmail.com'; // Replace with your email	
	//$subject = 'Message from website'; // Replace with your $subject
	//$headers = 'From: ' . $_POST['email'] . "\r\n" . 'Reply-To: ' . $_POST['email'];	
	
	//$message = 'Name: ' . $_POST['name'] . "\n" .
	//           'E-mail: ' . $_POST['email'] . "\n" .
	//           'Subject: ' . $_POST['subject'] . "\n" .
	//           'Message: ' . $_POST['message'];
	
	//mail($to, $subject, $message, $headers);	
	forward("denasawyer1111@gmail.com, home.html");
	header("Location: home.html");
}
?>