<?php
 
//Configuracion de la conexion a base de datos
  $host = "localhost"; 
  $usuario = "root"; 
  $password = "dunkelheit"; 
  $dbname = "telcorphelpdesk"; 
 
$mysqli = new mysqli($host, $usuario, $password, $dbname);
 
//variables POST
  $nom=$_POST['InputClient'];
  $ape=$_POST['InputComment'];
  $tec=$_POST['InputTech'];
  $pri=$_POST['InputPrio'];
  $cat=$_POST['InputCat'];

//registra los datos del empleados
  //$sql="INSERT INTO incidencia (Cliente, Descripcion, Asignado, Prioridad, Categoria) VALUES ('$nom', '$ape', '$tec', '$pri', '$cat')";

  //mysql_query($sql,$con) or die('Error. '.mysql_error());
  $result = $mysqli->query("INSERT INTO incidencia (Cliente, Descripcion, Asignado, Prioridad, Categoria) VALUES ('$nom', '$ape', '$tec', '$pri', '$cat')") or die (mysql_error());

include('tickets.php');
?>