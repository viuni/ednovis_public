<?php

	// Set email address to send to i.e: you@yoursite.com
	$sendTo		=	'ednovis@gmail.com';

	// Set email subject (appears as subject)
	$subject 	= 	'EDNOVIS - Contact Form Submission';

	/* No need to touch the code below this line! */

	// get posted form values
	$name 		= 	$_POST['name'];
	$email 		= 	$_POST['email'];
	$phone 		= 	$_POST['phone'];
	$message 	= 	$_POST['message'];
	$verify 	= 	$_POST['verify'];

	// setup email header
	$header 	= 	"From: ".$email;

	// construct email body
	$body 		=	"Name: ".$name."\r\n".
					"Email: ".$email."\r\n".
					"Phone: ".$phone."\r\n".
					"\r\n".
					"Message: ".$message;


	// make sure verification is correct
	if(md5($verify).'a4xn' == $_COOKIE['tntcon']) {

		// send email
		mail($sendTo, $subject, $body, $header);
		//set verify cookie
		setcookie('tntcon','');
		//go to success page
		// header('Location: contact_success.html');
		exit;
	}
	else {
		// error
		echo 'Error. Message not sent! Please go back and fill in all required fields.';
		exit;
	}
	/*
	Copyright (c) 2023
	*/
?>
