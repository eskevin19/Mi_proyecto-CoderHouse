<?php
    

    $nombre = $_POST["nombre"];
    $mail = $_POST["email"];
    $mensaje = $_POST["textarea"];


    // A quien le mando esta info.

    $para = "contacto@elviolin.com";
    $asunto = "este mail fue enviado desde la web";

    // Función que envía la info del form -
    mail($para, $asunto. utf8_decode($mensaje) );


//Función que redirecciona al usuario una vez que completo el form
    header("location:exito.html");












?>