<?php
 $mensaje= "El mensaje: ".$_POST['mensaje'];
 $mensaje= $mensaje."\n--------------\n";
 $mensaje= $mensaje."El Nombre: ".$_POST['nombre'];
  $mensaje= $mensaje."\n--------------\n";
 $mensaje= $mensaje."El Correo: ".$_POST['email'];
   $mensaje= $mensaje."\n--------------\n";
 $mensaje= $mensaje."El Teléfono: ".$_POST['telefono'];
   
   $destino="info@volunfair.org";
   $remitente= $_POST['email'];
   $asunto = $_POST['nombre'];
   @mail ($destino,$asunto,$mensaje,"FROM: $remitente");
 
   
?>

/* http://manuelbaronetti.com.ar/blog/2014/02/facil-y-simple-formulario-de-contacto-con-html5-ajax-y-php/*/
   