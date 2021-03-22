<?php
    $destinatario = 'bill_ftj@hotmail.com';

    $nombre = $_POST['nombre'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];
    $email = $_POST['email'];

    $header = "Enviado desde la página de billdesign";
    $mensajeCompleto = $mensaje . "\nAtentamente: ". $nombre 

    mail($destinatario ,$asunto ,$mensajeCompleto ,$header);
    echo"<script>alert('correo enviado exitosamente')</script>";
    echo"<script>setTimeout(\"location.href='mail.html'\",1000)</script>";

?>