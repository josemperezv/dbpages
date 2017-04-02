<?php 

// Parametros a configurar para la conexion de la base de datos 

$hotsbd = "mysql12.000webhost.com";    // sera el valor de nuestra BD 
$basededatos = "a4547983_tephros";    // sera el valor de nuestra BD 

$usuariobd = "a4547983_tephros";    // sera el valor de nuestra BD 
$clavebd = "Tephros1";    // sera el valor de nuestra BD 

// Fin de los parametros a configurar para la conexion de la base de datos 

$conexion_bd = mysqli_connect("$hotsbd","$usuariobd","$clavebd","$basededatos")
    or die ("Conexión denegada, el Servidor de Base de datos que solicitas no puede ser localizado"); 
    $db = mysqli_select_db($conexion_bd,"$basededatos")
    or die ("La Base de Datos <b>$basededatos</b> no puede ser localizada");