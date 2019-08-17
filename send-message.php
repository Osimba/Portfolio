<?php

// Get mailer autoloader
require 'mail/phpmailer/PHPMailerAutoload.php';

// define variables and set to empty values
$nameError = $emailError = $messageError = "";
$name = $email = $message = $result =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	if (empty($_POST['name'])) {
		$nameError = "Please enter your name";
	} else {
		$name = checkInput($_POST["name"]);
	}
	 
	if (empty($_POST['email'])) {
		$emailError = "Please enter your email address";
	} else {
	   $email = checkInput($_POST["email"]);
	   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$emailError = "Please enter a valid email address";
	  }
	}
	 
	
	if (empty($_POST['message'])) {
		$messageError = "Please enter a message";
	} else {
	   $message = checkInput($_POST["message"]);
	}

	if(empty($nameError) && empty($emailError) && empty($messageError)) {
		$mail = new PHPMailer();
		$mail->Host = 'smtp.gmail.com';
		$mail->SMTPAuth = true;
		$mail->Username = 'osiqua@gmail.com';
		$mail->Password = 'Oxygen11';
		$mail->SMTPSecure = 'tls';
		$mail->Port = 587;
		$mail->CharSet = 'utf-8';
		//It's important not to use the submitter's address as the from address as it's forgery,
		//which will cause your messages to fail SPF checks.
		//Use an address in your own domain as the from address, put the submitter's address in a reply-to
		$mail->setFrom('osiqua@gmail.com', $name);
		$mail->addAddress('oq@proqweb.com');
		$mail->addReplyTo($email, $name);
		$mail->Subject = 'Contact form from Portfolio Website';
		$mail->Body = "Service Request\n\n" . $message;
		
		//Send Message
		$mail->send();
		
		$result = '<div> <strong> Thank you!</strong> We\'ll get back to you shortly.</div>';
	} else {
		$result = '<div>Sorry, there were errors in your form:<br>' . $nameError . "<br>" . $emailError . "<br>" . $messageError;
	}
	
}

function checkInput($userData) {
	$userData = trim($userData);
	$userData = stripslashes($userData);
	$userData = htmlspecialchars($userData);
	return $userData;
}


echo $result;
echo "<br><br><a href='https://portfolio.proqweb.com'>Return home.</a>";