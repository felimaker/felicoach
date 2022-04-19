<?php
	$to = "felicoach@gmail.com";
	$tema = "Form de web Felicoach";
	$message = "Nombre: ".$_POST['name']."<br>";
	$message .= "Email: ".$_POST['email']."<br>";
	$message .= "Mensaje: ".$_POST['note']."<br>";
	$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	mail($to, $tema, $message, $headers);
?>