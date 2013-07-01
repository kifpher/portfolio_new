<?php

include 'config.php';
	error_reporting (E_ALL ^ E_NOTICE);
	$post = (!empty($_POST)) ? true : false;

if($post)
	{
		include 'functions.php';
		$first_name = stripslashes($_POST['first_name']);
		$last_name = stripslashes($_POST['last_name']);
		$email = trim($_POST['email']);
		$message = stripslashes($_POST['message']);

		$error = '';

// Check name
if(!$first_name)
	{
		$error .= 'Enter your first name.<br />';
	}
if(!$last_name)
	{
		$error .= 'Enter your last name.<br />';
	}
// Check email
if(!$email)
	{
		$error .= 'Enter your e-mail id.<br />';
	}
if($email && !ValidateEmail($email))
	{
		$error .= 'Invalid email address.<br />';
	}
if(!$error)
	{
		$mail = mail(WEBMASTER_EMAIL, $subject, $message,
     		"From: ".$first_name.$last_name." <".$email.">\r\n"
    		."Reply-To: ".$email."\r\n"
    		."X-Mailer: PHP/" . phpversion());
if($mail)
	{
		echo 'OK';
	}
}
else
	{
		echo '<div class="notification_error">'.$error.'</div>';
	}
}
?>