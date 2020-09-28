<?php

    $destinatario = 'yepesmolina23@gmail.com';

    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];
    $email = $_POST['email'];

    $header = "Enviado desde la página de Alejandra Frank Oscar";
    $mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;
    
    mail($destinatario, $telefono, $mensajeCompleto, $header);
    echo "<script> alert('Correo enviado exitosamente')</script>";
    echo "<script> setTimeout(\"location.href='formulario.html'\",1000)</script>";

?>
