<?php
session_start();

# Include the Autoloader (see "Libraries" for install instructions)
require('../vendor/autoload.php');

use Mailgun\Mailgun;

# Instantiate the client.
$mgClient = new Mailgun('key-96d82ca8ad9aa148aba3dd0edf467655');
$domain = "sandbox087ac163b21443349994f894259bab00.mailgun.org";

# Make the call to the client.
if( isset($_POST['submit']) )
{
	$result = $mgClient->sendMessage("$domain",
                  array('from'    => 'Mailgun Sandbox <postmaster@sandbox087ac163b21443349994f894259bab00.mailgun.org>',
                        'to'      => 'Dena Sawyer <denasawyer1111@gmail.com>',
                        'subject' => 'Hello Dena Sawyer',
                        'text'    => 'Congratulations Dena Sawyer, you just sent an email with Mailgun!  
                        You are truly awesome!  You can see a record of this email in your logs: https://mailgun.com/cp/log .  
                        You can send up to 300 emails/day from this sandbox server.  Next, you should add your own domain 
                        so you can send 10,000 emails/month for free.'));



	//$to = 'denasawyer1111@gmail.com'; // Replace with your email	
	//$subject = 'Message from website'; // Replace with your $subject
	//$headers = 'From: ' . $_POST['email'] . "\r\n" . 'Reply-To: ' . $_POST['email'];	
	
	//$message = 'Name: ' . $_POST['name'] . "\n" .
	//           'E-mail: ' . $_POST['email'] . "\n" .
	//           'Subject: ' . $_POST['subject'] . "\n" .
	//           'Message: ' . $_POST['message'];
	
	//mail($to, $subject, $message, $headers);	
	header("Location: home.html");
}
?>