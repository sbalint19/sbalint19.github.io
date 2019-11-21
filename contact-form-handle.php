<?php
	$name = $_Post['name'];
	$visitor_email = $_Post['email'];
	$message = $_Post['message'];

	$email_from = 'sarossi.b@gmail.com';

	$email_subject = "Új üzenet";

	$email_body = "Vezetéknév: $name.\n".
					"Keresztnév: $name.\n".
					"Email cím*: $visitor_email.\n".
					"Tárgy: $message.\n";

	$to = "sarossi.b@gmail.com";
	$headers = "From: $email_from \r\n";
	$headers .= "Reply-To: $visitor_email \r\n";

	mail($to,$email_subject,$email_body,$headers);

header("Location: kapcsolat.html");

?>