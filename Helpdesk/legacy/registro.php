<?php
 
//Configuracion de la conexion a base de datos
  $bd_host = "localhost"; 
  $bd_usuario = "root"; 
  $bd_password = "dunkelheit"; 
  $bd_base = "telcorphelpdesk"; 
 
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