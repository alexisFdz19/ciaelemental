<?php

if(isset($_POST['email'])) {

// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
$email_to = "alexisfdz19@gmail.com";
$email_subject = "Contacto CIA Elemental";

// Aquí se deberían validar los datos ingresados por el usuario
if(!isset($_POST['name']) ||
!isset($_POST['email']) ||
!isset($_POST['message'])) {


//require ('error.html');
die();
}

$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombre: " . $_POST['name'] . "\n";
$email_message .= "Correo electrónico: " . $_POST['email'] . "\n";
$email_message .= "Mensaje: " . $_POST['message'] . "\n";


// Ahora se envía el e-mail usando la función mail() de PHP
$headers = 'From: '.$_POST['email']."\r\n".
				'Reply-To: '.$_POST['email']."\r\n".
				'X-Mailer: PHP/'. phpversion();
mail($email_to, $email_subject, utf8_decode($email_message), $headers);

//require ('exito.html');

 header( "refresh:2;url=contacto.html");

}

?>