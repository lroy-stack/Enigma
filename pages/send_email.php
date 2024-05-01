<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = strip_tags(trim($_POST["Nombre"]));
    $email = filter_var(trim($_POST["Email"]), FILTER_SANITIZE_EMAIL);
    $mensaje = trim($_POST["Mensaje"]);

    if (empty($nombre) OR empty($mensaje) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Oops! Hubo un problema con tu envío. Por favor completa el formulario y prueba de nuevo.";
        exit;
    }

    $recipient = "isa@enigmaconalma.com";
    $subject = "Nuevo mensaje de contacto de $nombre";
    $email_content = "Nombre: $nombre\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Mensaje:\n$mensaje\n";

    $email_headers = "From: $nombre <$email>";

    if (mail($recipient, $subject, $email_content, $email_headers)) {
        echo "¡Gracias! Tu mensaje ha sido enviado.";
    } else {
        echo "Oops! Algo salió mal y no pudimos enviar tu mensaje.";
    }
} else {
    echo "¡Oops! Algo salió mal y no pudimos procesar tu solicitud.";
}
?>
