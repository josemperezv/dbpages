<?php
	$to = 'josemperezv@gmail.com';
	$subject = 'Testing PHP Mail';
	$message = 'This mail is sent using the PHP mail function';
	$headers = 'From: operacioneslara@telcorp.com.ve';

	mail($to,$subject,$message,$headers);
	echo "The email message was sent.";
?>