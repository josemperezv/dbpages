<?php
require_once 'conexion.php';
$mail = $_POST['Mail'];

$validar = '#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#';
if(preg_match($validar, $mail)){
    $sql = "SELECT * FROM registered WHERE email='$mail'";
    $consulta = mysqli_query($conexion_bd, $sql);
    if(mysqli_num_rows($consulta) == 0){
        date_default_timezone_set("America/Caracas");
        $date = date('Y-m-d');
        $hour = date('h:i:s');
        $sql = "INSERT INTO registered (email,date,time) VALUES ('$mail','$date','$hour')";
        $consulta = mysqli_query($conexion_bd, $sql);
        echo 'Thanks For Your Suscription';
    }else {
        echo "You've already subscribed";
    }
}else{
    echo 'Invalid Email address';
}

