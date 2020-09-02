<?php

	// Recibe los datos
	$destino = "alexisfdz19@gmail.com";
	$nombre = $_POST["name"];
	$correo = $_POST["email"];
	$mensaje = $_POST["message"];
	
	
	// Junta los datos
	$contenido = "Nombre: " .$nombre. "\n\nCorreo: " . $correo . "\n\nMensaje: " . $mensaje;

	// Envía
	mail($destino, "Contacto CIA Elemental - Página Web", $contenido);

	// Redirecciona
	header("Location: http://www.ciaelemental.com/correo-enviado");
    die();

?>