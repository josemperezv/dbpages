<?php
$host = "localhost";
$user = "root";
$pass = "dunkelheit";
$db = 'jnsdb';

$link = mysqli_connect($host, $user, $pass) or die('No se pudo conectar: ' . mysqli_error());
mysqli_select_db($link,$db) or die("Couldn't connect to database");
mysqli_set_charset($link, 'utf8mb4');
?>
