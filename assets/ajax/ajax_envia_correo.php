<?php
    header('Cache-Control: no-cache, must-revalidate');
    header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
    header('Content-type: application/json');
    $mail = $_REQUEST['mail'] ;
    $mensaje = $_REQUEST['mensaje'] ;
    $nombre = $_REQUEST['nombre'] ;
    $fono = $_REQUEST['fono'] ;
        
    $cuerpo = "Nombre: ".$nombre."\nE-mail: ".$mail."\nFono: ".$fono."\nMensaje: ".$mensaje;
    
    mail( "{$mail}", "Contacto desde www.vrin.cl", $cuerpo, "From: contacto@vrin.cl" );
    mail( "contacto@vrin.cl", "Contacto desde www.vrin.cl", $cuerpo, "From: contacto@vrin.cl" );
    $json["clase"] = "alert alert-success";
    $json["mensaje"] = "Correo Enviado! Gracias por comunicarte con VRIN.";
   
    echo json_encode($json);
?>
