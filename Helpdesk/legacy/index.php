<?php
session_start();
$valido=true;
      if(isset($_POST['entrar'])){
         /*Entra solo si se presiona el boton entrar*/
        
         //datos de acceso
         $host="localhost";
         $usuario="root";
         $contra="dunkelheit";
         $db="login";
         
         //establecer la conexion
        $testconec= mysql_pconnect($host,$usuario,$contra) or die ("No se puede conectar");
        mysql_select_db($db) or die ("No se encuentra la base de datos especificada");
        
        
         $nombre=$_POST['usuario'];
         $contrasena=$_POST['contra'];
         $consulta="SELECT username,password FROM login_user where username ='$nombre' AND password ='$contrasena'";
         $result=mysql_query($consulta) or die (mysql_error());
         $filasn= mysql_num_rows($result);
         if ($filasn<=0 || isset($_GET['nologin']) ){
             $valido=false;
         }else{
        $rowsresult=mysql_fetch_array($result);          
        $_SESSION['idusuario']= $rowsresult['id'];
             $valido=true;
             //guardamos en sesion el nombre del usuario 
             $_SESSION["usuario"]=$nombre;
             header("location:inicio.php?login=true");
         }               
      }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>TELCORP | Login</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"/>
</head>

<body>

    <div id="form">
            
        <form action="index.php" method="post">
            <p>USUARIO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="usuario" type="text"></p>
            <p>CONTRASEÑA&nbsp;&nbsp;&nbsp;<input name="contra" type="password"></p>
            <p>DEMO:<br>
            Usuario: test<br>
            Contraseña: test</p>
            <br>
            <div id="cent">
            <input name="entrar" type="submit" class="btn-small" value="ENTRAR">
            <?php if ($valido==false) {
                echo '<p>Datos incorrectos</p>';
            }?>
            </div>
        </form>
    </div>
</body>
</html>