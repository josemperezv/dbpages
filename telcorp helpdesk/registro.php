<?php
 
//Configuracion de la conexion a base de datos
  $bd_host = "localhost:3306"; 
  $bd_usuario = "id233792_telcorp1"; 
  $bd_password = "telcorp"; 
  $bd_base = "id233792_telcorphelpdesk"; 
 
$con = mysql_connect($bd_host, $bd_usuario, $bd_password); 
mysql_select_db($bd_base, $con); 
 
//variables POST
  $nom=$_POST['InputClient'];
  $ape=$_POST['InputComment'];
  $tec=$_POST['InputTech'];
  $pri=$_POST['InputPrio'];
  $cat=$_POST['InputCat'];

//registra los datos del empleados
  $sql="INSERT INTO incidencia (Cliente, Descripcion, Asignado, Prioridad, Categoria) VALUES ('$nom', '$ape', '$tec', '$pri', '$cat')";
mysql_query($sql,$con) or die('Error. '.mysql_error());

include('tickets.php');
?>