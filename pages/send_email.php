<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $correo = htmlspecialchars($_POST['correo']);
    $fecha = htmlspecialchars($_POST['fecha']);
    $hora = htmlspecialchars($_POST['hora']);
    $personas = htmlspecialchars($_POST['personas']);
    $telefono = htmlspecialchars($_POST['telefono']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    $mail = new PHPMailer(true);
    try {
        // Configuración del servidor
        $mail->isSMTP();
        $mail->Host = 'smtp.hostinger.com'; // Cambia esto por el servidor SMTP de Hostinger
        $mail->SMTPAuth = true;
        $mail->Username = 'isa@enigmaconalma.com'; // Cambia esto por tu dirección de correo
        $mail->Password = 'CocinaConAlma_20'; // Cambia esto por tu contraseña de correo
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587; // El puerto SMTP

        // Remitente y destinatario
        $mail->setFrom('', 'NUEVA RESERVA WEB'); // Cambia esto por tu dirección de correo y nombre
        $mail->addAddress('isa@enigmaconalma.com', 'Enigma');

        // Contenido del correo
        $mail->isHTML(true);
        $mail->Subject = 'Nueva reserva recibida';
        $mail->Body    = "Nombre: $nombre<br>Correo: $correo<br>Fecha: $fecha<br>Hora: $hora<br>Personas: $personas<br>Teléfono: $telefono<br>Mensaje: $mensaje";

        $mail->send();
        echo 'El mensaje se ha enviado correctamente.';
    } catch (Exception $e) {
        echo "Hubo un error al enviar el mensaje. Error de PHPMailer: {$mail->ErrorInfo}";
    }
} else {
    echo "Método de solicitud no soportado.";
}
?>
