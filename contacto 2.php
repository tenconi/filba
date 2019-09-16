<?php

$destino = "tenco@tenco.com.ar";
$nombre = $_POST ["nombre"];
$correo = $_POST ["email"];
$mensaje = $_POST ["mensaje"];
//se definen las variables
// el"$nombre" es el nombre que le ponemos a la variable que va dentro de "[]" >> son datos que se reciben, por eso van con "$_POST"
$contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo "\nMensaje: " . $mensaje ;
// en contenido se concatena la info a recibir
//"\n" es para salto de linea

mail($destino, "Contacto Web", $contenido);
header("location:tenco.com.ar/filba/index.html");//para que nos redireccione a otra página


?>