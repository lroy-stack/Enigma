<?php
// Mostrar errores de PHP para depuración
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar y sanear los datos del formulario
    $nombre = htmlspecialchars($_POST['nombre']);
    $correo = htmlspecialchars($_POST['correo']);
    $fecha = htmlspecialchars($_POST['fecha']);
    $hora = htmlspecialchars($_POST['hora']);
    $personas = htmlspecialchars($_POST['personas']);
    $telefono = htmlspecialchars($_POST['telefono']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    // Dirección de correo electrónico a la que se enviará el formulario
    $to = "isa@enigmaconalma.com";
    $subject = "Nueva reserva recibida";

    // Crear el contenido del correo electrónico
    $body = "Nombre: $nombre\n";
    $body .= "Correo: $correo\n";
    $body .= "Fecha: $fecha\n";
    $body .= "Hora: $hora\n";
    $body .= "Personas: $personas\n";
    $body .= "Teléfono: $telefono\n";
    $body .= "Mensaje: $mensaje\n";

    // Cabeceras del correo
    $headers = "From: $correo" . "\r\n" .
               "Reply-To: $correo" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Enviar el correo
    if (mail($to, $subject, $body, $headers)) {
        echo "El mensaje se ha enviado correctamente.";
    } else {
        echo "Hubo un error al enviar el mensaje. Por favor, inténtelo de nuevo.";
    }
} else {
    echo "Método de solicitud no soportado.";
}
?>
