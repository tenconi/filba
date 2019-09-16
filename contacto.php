<?php
	$destino="tenco@tenco.com.ar";
	$nombre=$_POST["nombre"];
	$correo=$_POST["email"];
	$mensaje=$_POST["mensaje"];
	$contenido="Nombre: " . $nombre . "\nCorreo: " . $correo "\nMensaje: " . $mensaje ;
	mail($destino, "Contacto Web", $contenido);
	header("Location: index.html");
?>