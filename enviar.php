<?php
    $destino="ezequiel.ramirez.87@gmail.com";
    $nombre=$_POST["nombre"];
    $correo=$_POST["correo"];
    $telefono=$_POST["telefono"];
    $mensaje=$_POST["mensaje"];
    $contenido="Nombre".$nombre."\nCorre: ".$correo."\nTelefono: ".$telefono."\nMensaje: ".$mensaje;
    mail($destino,"Contacto",$contenido);
    header("location:gracias.html");
?>
