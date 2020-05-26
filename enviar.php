<?php
/* Llamando a los campos */
$nombre = $_POST['nomCliente'];
$apellido = $_POST['ApCliente'];
$email = $_POST['Correo'];
$telefono = $_POST['telefonoCliente'];
$mensaje = nl2br($_POST['observacion']);

//Datos para el correo
$destinatario = "info@limpiezasabraxas.com";
$asunto = "Mensaje desde nuestra Web";

$contenido = "De: $nombre ";
$contenido .= "$apellido \n";
$contenido .= "Correo: $email \n";
$contenido .= "Telefono: $telefono \n";
$contenido .= "Mensaje: $mensaje \n";

//enviando mensaje
mail($destinatario,$asunto,$contenido);
header('location:mensajeEnvio.html')
?>