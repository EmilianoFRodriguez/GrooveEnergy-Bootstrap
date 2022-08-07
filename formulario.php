<?php
$name = $_POST ['name'];
$email = $_POST ['email'];
$title = $_POST ['title'];
$tags = $_POST ['tags'];
$description = $_POST ['description'];

$mensaje = "Nombre del DJ" . $name . ",\r\n";
$mensaje = "Email de contacto" . $email . "\r\n";
$mensaje = "Titulo del trac/set" . $title . "\r\n";
$mensaje = "Hashtags" . $tags . "\r\n";
$mensaje = "Descripcion" . $description . "\r\n";
$mensaje = "Enviado el " . date('d/m/y', time());

$destinatario = 'emeleano.er@gmail.com';
$asunto = 'Este mail fue enviado desde Groove Energy WEB';

mail($destinatario, $asunto, utf8_decode($mensaje), $header);
header('<location:exito.html');
?> 