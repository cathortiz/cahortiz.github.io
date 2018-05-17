<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   // empty($_POST['phone']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No hay argumentos!";
	return false;
   }
	
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
// $phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));
	
$gmail = 'catherinortiz@gmail.com'; 
$email_subject = "Contacto del portfolio:  $name";
$email_body = "Mensaje recibido del portfolio.\n\n"."Detalles:\n\nNombre: $name\n\nEmail: $email_address\n\nMensaje:\n$message";
$headers = "De: catherinortiz@gmail.com\n";
$headers .= "Responder a: $email_address";	
mail($gmail,$email_subject,$email_body,$headers);
return true;			
?>
