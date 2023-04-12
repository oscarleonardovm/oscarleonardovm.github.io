<?php
// Obtener los datos del formulario
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Hacer algo con los datos del formulario, por ejemplo, enviar un correo electrónico
$to = 'LEONARDOZXY@GMAIL.com'; // Cambia esto con tu dirección de correo electrónico
$subject = 'Mensaje de contacto del formulario';
$message = "Nombre: $name\nEmail: $email\nAsunto: $subject\nMensaje: $message";
$headers = 'From: ' . $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if (mail($to, $subject, $message, $headers)) {
    // Si el correo se envía exitosamente, puedes redirigir o mostrar un mensaje de éxito
    echo 'El mensaje se ha enviado correctamente.';
} else {
    // Si hay un error al enviar el correo, puedes mostrar un mensaje de error
    echo 'Error al enviar el mensaje. Por favor, inténtalo de nuevo más tarde.';
}
?>