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
        $mysqli = new mysqli($host,$usuario,$contra,$db) or die ("No se puede conectar");
        //mysql_select_db($db) or die ("No se encuentra la base de datos especificada");
        
        
         $user=$_POST['usuario'];
         $contrasena=$_POST['contra'];
         //$consulta="SELECT username,password FROM login_user where username ='$nombre' AND password ='$contrasena'";
         //$result=mysql_query($consulta) or die (mysql_error());
         $result = $mysqli->query("SELECT username,password FROM login_user where username ='$user' AND password ='$contrasena'") or die (mysql_error());
         
         //$filasn= mysql_num_rows($result);
         $filasn = $result->num_rows;
         if ($filasn<=0 || isset($_GET['nologin']) ){
             $valido=false;
         }else{
        //$rowsresult=mysql_fetch_array($result);          
        $rowsresult = $result->fetch_array();
        $_SESSION['idusuario']= $rowsresult['id'];
             $valido=true;
             //guardamos en sesion el nombre del usuario

//        $result2 = $mysqli->query("SELECT name from login_user");
//        $_SESSION["usuario"] = mysqli_fetch_assoc($result2);

             $_SESSION["usuario"]=$user;
             header("location:inicio.php?login=true");
         }               
      }
?>

<!DOCTYPE html>
<html>
<head>
    <title>TELCORP | Login</title>
    <meta charset="UTF-8">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"/>
</head>

<body>

    <div id="form">
        <form action="index.php" method="post">
            <div id="cent">
            USUARIO<br>
            <input name="usuario" type="text">
            <br><br>

            CONTRASE&Ntilde;A<br>
            <input name="contra" type="password">
            <br><br>

            DEMO:<br>
            Usuario: test<br>
            Contrase&ntilde;a: test
            <br><br>
            
            <input name="entrar" type="submit" class="btn-small" value="ENTRAR">
            <?php if ($valido==false) {
                echo '<p>Datos incorrectos</p>';
            }?>
            </div>
        </form>
    </div>

</body>
</html>