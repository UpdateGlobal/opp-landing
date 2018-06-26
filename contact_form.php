<?php
<<<<<<< HEAD
$toEmail = "Octaviopedraza@octaviopedraza.com, christian.haro@update.pe";
=======
$toEmail = "octaviopedraza@yoctaviopedraza.com";
>>>>>>> 209b63363fbca9223aaf9808a082196af1c8a59f
$subject = "Enviado desde Opp landing";
$mailHeaders = 'From: '.$_POST["email"]."\r\n".
'Reply-To: '.$_POST["email"]."\r\n" .
'X-Mailer: PHP/' . phpversion();

$nombres = htmlspecialchars($_POST["nombres"]);
$email = htmlspecialchars($_POST["email"]);
$telefono = htmlspecialchars($_POST["telefono"]);
$comentarios = trim($_POST["mensaje"]);

$mensaje = "Información del Contacto\n";
$mensaje .= "------------------------\n";
$mensaje .= "Nombres		:".filter_var($nombres, FILTER_SANITIZE_STRING)."\n";
$mensaje .= "Email			:".filter_var($email, FILTER_VALIDATE_EMAIL)."\n";
$mensaje .= "Telefono		:".filter_var($telefono, FILTER_SANITIZE_STRING)."\n";
$mensaje .= "Mensaje		:".filter_var($comentarios, FILTER_SANITIZE_STRING)."\n";

if(mail($toEmail, $subject, $mensaje, $mailHeaders)) {
	print "<div class='alert alert-success' role='alert'>Email Enviado Exitosamente.</div>";
} else {
	print "<div class='alert alert-danger' role='alert'>Problema al enviar el correo, intentelo m&aacute;s tarde.</div>";
}

?>