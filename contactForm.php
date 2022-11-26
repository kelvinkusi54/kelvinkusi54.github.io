<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	$to = "kelvinkusi54@gmail.com";
	$subject = "Mail From Website";
	$txt = "Name = ". $name . "\r\nEmail = " . $email . "\r\nMessage =" . $message;
	$headers = "From: noreply@globtech.com" . "\r\n" .
	"CC: somebodyelse@example.com";
	if($email!=NULL){
		mail($to, $subject, $txt,$headers);
	}

	header("Location: thankyou.html");
?>