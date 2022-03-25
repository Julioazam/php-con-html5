<?php 


    $destino="byteticsconsulting@gmail.com";
    $nombre = $_POST["name"];
    $asunto = $_POST["asunto"];
    $correo = $_POST["email"];
    $telefono = $_POST["phone"];
    $mensaje = $_POST["message"];
    
    $info = "Nombre: ". $nombre . "\nAsunto: ". $asunto;
    $contenido = "\nMensaje: ". $mensaje."\n\n\rCorreo: ". $correo ."\nTelefono: ". $telefono;
    
    $header="Enviado desde la página web";
    
    $email=mail($destino,$info,$contenido,$header);
    if ($email) {
        echo "<script>alert('Su correo fue enviado Correctamente')</script>";
        echo "<script>setTimeout(\"location.href='envio_exitoso'\",1000)</script>";
    }
    

 ?>

