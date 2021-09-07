<?php
$destino= "faltaenvidoteatro@gmail.com";
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$prefijo =  $_POST["prefijo"];
$telefono = $_POST["telefono"];
$correo = $_POST["email"];
$nacimientoDia = $_POST["dia"];
$nacimientoMes = $_POST["mes"];
$nacimientoAño = $_POST["año"];
$comentarios = $_POST["textarea"];
$recibirNovedades = $_POST["checkbox"];



$contenido = "Nombre: " . $nombre . "\nApellido: "  . $apellido . "\nPrefijo: " . $prefijo . "\nTelefono: "  . $telefono .  "\nCorreo: " . $correo . "\Dia_de_nacimiento: " . $nacimientoDia . "\Mes_de_nacimiento: " . $nacimientoMes . "\Año_de_nacimiento: " . $nacimientoAño . "\nComentarios: " . $comentarios;
    
    
mail($destino,"contacto",$contenido);
header("location:../index.html");

?>