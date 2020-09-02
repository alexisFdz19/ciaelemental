<?php

	// Recibe los datos
	$destino = "alexisfdz19@gmail.com";
	$nombre = $_POST["name"];
	$correo = $_POST["email"];
	$mensaje = $_POST["message"];
	$contenido = "Nombre: " .$nombre. "\nCorreo: " . $correo . "\nMensaje: " . $mensaje;

	// Envía
	mail($destino, "contacto", $contenido);

	// Redirecciona
	header("Location:<?php echo $url?>/views/modulos/contacto.php");

?>