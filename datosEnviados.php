<?php
$name = $_POST['nameCont'];
$edad = $_POST['edad'];
$mail = $_POST['correo'];

$header = 'From:' . $mail . "\r\n";
$header = 'X-Mailer: PHP/:' . phpversion() . "\r\n";
$header = "Mime-Version: 1.0 \r\n";
$header = "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name . "\r\n";
$message = "Su edad es: " . $edad . "\r\n";
$message = "Su correo es: " . $mail . "\r\n";
$message = "Enviado el: " . date('d/m/Y', time());

$para = 'jaguercompany@gmail.com';
$asunto = 'Datos compartidos por el usuario';

mail($para, $asunto, utf8_decode($message), $header);
header("Location: contactos.html");

?>
