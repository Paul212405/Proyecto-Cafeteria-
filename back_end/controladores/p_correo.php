<?php
$nombre = $_POST['txt_nombre_completo'];
$email = $_POST['txt_correo'];
$telefono = $_POST['txt_tel'];
$mensaje = $_POST['txa_asunto'];

$header = 'From: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Enviado por: " . $nombre . " \r\n";
$message .= "Su E-mail es: " . $email . " \r\n";
$message .= "Teléfono de contacto: " . $telefono . " \r\n";
$message .= "Mensaje: " . $mensaje . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'mrcoringa24@gmail.com';
$asunto = 'MENSAJE DE CLIENTE';

mail($para, $asunto, utf8_decode($message), $header);

?>