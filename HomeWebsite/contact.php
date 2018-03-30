<?php
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$phNumber = $_POST['phone'];
	$message = $_POST['message'];
	
	$email_subject = "New Form Submission";
	
	$email_body = "User Name: $name.\n". 
					"User Email: $visitor_email.\n".
						"User Phone: $phNumber.\n".
							"User Message: $message.\n";
							
	
	$mailTo = jamescox1997@hotmail.com;
	
	$headers = "From: ".$visitor_email ;
	
	mail($mailTo, $email_subject, $email_body, $headers);
	
	header("Location: index.html");
	
?>	
						