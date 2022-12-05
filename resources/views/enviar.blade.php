 
<?php

 //correo

    $name = $_post['nombre'];
    $mail = $_post['correo'];
    $phone = $_post['telefono'];
    $date = $_post['fecha'];
    $hora = $_post['hora'];

    $header = 'From: ' . $mail . " \r\n";
    $header .= "X-Mailer: php/" . phpversion() . " \r\n";
    $header .= "Mime-Version: 1.0 \r\n";
    $header .= "Content-Type: text/plain";

    $message = "Este mensaje fue enviado por: " . $name . " \r\n";
    $message .= "Su correo es: " . $mail . " \r\n";
    $message .= "Teléfono de contacto: " . $phone . " \r\n";
    $message .= "Fecha de cita: " . $date . " \r\n";
    $message .= "Hora de cita: " . $hora . " \r\n";

    $para = 'mayajosue2020@gmail.com'
    $asunto = 'Solicitud de cita para psicologia'
