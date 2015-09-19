<?php

//require './phpmailer/PHPMailerAutoload.php';

$to = 'janellec@bendbroadband.com';
$subject = 'contact email from janellecontreras.com';
$message = "Mesage from: ".$_POST("name")." - ".$_POST("email")."\n\r".$_POST("message");
$headers = "From: janellecontreras.com \r\n" .
			'Reply-To: janellec@bendbroadband.com' . "\r\n" .
			'X-Mailer: PHP/'.phpversion();
mail($to, $subject, $message, $headers);

include 'thankyou.php';


?>