<?php
	
	// Form Variables
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];
	
	// Outgoing Message
	$email_from = 'contact@norspawn.com';
   $email_subject = "NoRspawn New Contact Form submission";
   $email_body = "You have received a new message.\n" .
   "User: $name\n" .
   "Email: $visitor_email\n" .
   "Message:\n $message";
   
   // Headers
   $to = "contact@norspawn.com";
	$headers = "From: $email_from \r\n";
	$headers .= "Reply-To: $visitor_email \r\n";
   
   //honey pot field
	$honeypot = $_POST['firstname'];
	
	//check if the honeypot field is filled out. If not, send a mail.
	if( $honeypot > 1 ){
		
		return; //you may add code here to echo an error etc.
		
	} else {
		
		mail($to, $email_subject, $email_body, $headers);
		
	}
	
	// Redirect to results page
	header('HTTP/1.1 301 Moved Permanently');
	header('Location: thank-you');
	die();

?>