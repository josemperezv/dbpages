<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="dbStudio">
<meta name="author" content="dbStudio">
<title>dbStudio | Contacto</title>
<!-- core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href="css/animate.min.css" rel="stylesheet">
<link href="css/owl.carousel.css" rel="stylesheet">
<link href="css/style2.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
    <link href="img/favicon.png" rel='icon' type='image/x-icon'/>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'/>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'/>
<!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/wow.min.js"></script>
<script src='js/jquery.scrollto.js'></script>
<script src="js/owl.carousel.min.js"></script>
<script type="text/javascript">
	// makes sure the whole site is loaded
	jQuery(window).load(function() {
	// will fade out the whole DIV that covers the website.
	jQuery("#preloader").delay(2000).fadeOut("slow");
	});
</script>

</head>
<!--/head-->
<body>
<div id="preloader">
  <div class="loader">
    <svg class="circular" viewBox="25 25 50 50">
      <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
    </svg>
  </div>
</div>

<div class="reading-progress"></div>
<header class="main-section" id="home">
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container"> 
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="http://dbstudio.com.ve/es/"><img src="img/logo.png" alt="logo" /></a> </div>
      
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="navbar-collapse">
        <ul class="nav navbar-nav navbar-right cl-effect-5">
          <li><a href="index.html"><span data-hover="INICIO">INICIO</span></a></li>
          <li><a href="index.html#about"><span data-hover="NOSOTROS">NOSOTROS</span></a></li>
          <li><a href="servicios/"><span data-hover="SERVICIOS">SERVICIOS</span></a></li>
          <li><a href="catalogo.html"><span data-hover="LANZAMIENTOS">LANZAMIENTOS</span></a></li>
          <li><a href="tienda.html"><span data-hover="TIENDA">TIENDA</span></a></li>
          <li><a href="contacto.php"><span data-hover="CONTACTO">CONTACTO</span></a></li>
          <li><a href="http://dbstudio.com.ve/en/"><img src="img/us.png" alt="English" /></a></li>
        </ul>
      </div>
      <!-- /.navbar-collapse --> 
    </div>
    <!-- /.container --> 
  </nav>
  <!-- /.navbar --> 
</header>
<!-- header -->

<!--=============================================================================================================-->

<section class="white-section" id="contact">
  <div class="container">
    <div class="section-header wow slideInDown" data-wow-duration="300" data-wow-delay="300">
      <h3><strong>Contacto</strong></h3>

    </div>
    <div class="row">
      <div class="col-sm-7 col-xs-offset-1">
        <div class="contact-form wow slideInLeft" data-wow-duration="300" data-wow-delay="300">
        
<?php 
$action=$_REQUEST['action']; 
if ($action=="")    /* display the contact form */ 
    { 
    ?> 
    <form id="contact-form" class="form" action="" method="POST" enctype="multipart/form-data">

    <input type="hidden" name="action" value="submit">
        <div class="form-group">
            <label class="form-label" for="Name">Tu Nombre</label>
            <input type="text" class="form-control" id="Name" name="name" placeholder="Tu nombre*" tabindex="1" required>
        </div>
        <div class="form-group">
            <label class="form-label" for="email">Tu Correo Electrónico</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Tu correo electrónico*" tabindex="2" required>
        </div>
        <div class="form-group">
            <label class="form-label" for="subject">Asunto</label>
	    <input type="text" class="form-control" id="subject" name="subject" placeholder="Asunto" tabindex="3">
        </div>
        <div class="form-group">
            <label class="form-label" for="comments">Mensaje</label>
            <textarea rows="5" cols="50" name="message" class="form-control" id="comments" placeholder="Mensaje*" tabindex="4" required></textarea>
        </div>

        <div class="text-left mt70">
            <input type="submit" class="button buttonb" value="ENVIAR"/>
        </div>
    </form> 
    <?php 
    }  
else                /* send the submitted data */ 
    { 
    $name=$_REQUEST['name']; 
    $email=$_REQUEST['email']; 
    $message=$_REQUEST['message']; 
    if (($name=="")||($email=="")||($message=="")) 
        { 
        echo "All fields are required, please fill <a href=\"\">the form</a> again."; 
        } 
    else{         
        $from="From: $name<$email>\r\nReturn-path: $email"; 
        $subject="Nuevo mensaje en www.dbstudio.com.ve"; 
        mail("contacto@dbstudio.com.ve", $subject, $message, $from); 
        echo "Correo Enviado"; 
        } 
    }   
?> 
	
      </div>
      </div>
      
      <div class="col-sm-3 pull-right">
        <div class="contact-detail wow slideInRight" data-wow-duration="300" data-wow-delay="300">
          <div class="cnt-item"> <li><i class='fa fa-whatsapp'></i></li>
            <p>Teléfono: +58 (424) 584-5551 <br />
			+58 (414) 564-0508 <br />
		    +1 (515) 519-5551</p>
          </div>
          <div class="cnt-item"> <li><i class='fa fa-map-marker'></i></li>
            <p>Barquisimeto, <br />
              VENEZUELA </p>
          </div>
          <div class="cnt-item"> <li><i class='fa fa-envelope'></i></li>
            <p><a href="mailto:contacto@dbstudio.com.ve">contacto@dbstudio.com.ve</a><br />
              <a href="mailto:dbstudiove@gmail.com">dbstudiove@gmail.com</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--=============================================================================================================-->

<footer id="footer" class="footer-section">
  <div class="footer-main">
    <div class="container">

        <div class="block">
            <ul>
              <li><h3>NOSOTROS</h3></li>
              <li><a href="index.html#about">dbStudio</a></li>
              <li><a href="equipos.html">Equipos</a></li>
              <li><a href="staff/">Staff</a></li>
              <li><a href="contacto.php">Contacto</a></li>
              <li><a href="sitemap.html">Site Map</a></li>
            </ul>
        </div>
        <div class="block">
            <ul>
              <li><h3>SERVICIOS</h3></li>
              <li><a href="#">Mezcla</a></li>
              <li><a href="#">Masterización</a></li>
              <li><a href="#">Producción Musical</a></li>
              <li><a href="#">Secuencias y Programación</a></li>
              <li><a href="#">Diseño Gráfico</a></li>
            </ul>
        </div>
        <div class="block">
            <ul>
              <li><a href="#">Presencia Web</a></li>
              <li><a href="#">Distribución</a></li>
              <li><a href="#">Digitalización</a></li>
              <br><br><br><br>
              <li><h3>TRABAJOS</h3></li>
              <li><a href="catalogo.html">Catálogo</a></li>
            </ul>
        </div>
    
    <div class="block">
      <ul>
        <li><h3>TIENDA</h3></li>
        <li><a href="tienda.html">Tienda Online</a></li>
        <br><br>
        <li><a href="http://dbstudio.com.ve/en/"><i>English Version</i></a></li>
      </ul>
    </div>

        <div class="social-link">
        <a class='facebook' href='https://www.facebook.com/dbstudiove/' target="_blank"><i class='fa fa-facebook'></i></a>&nbsp;&nbsp;&nbsp;
        <a class='twitter' href='https://twitter.com/dbstudiove' target="_blank"><i class='fa fa-twitter'></i></a>&nbsp;&nbsp;&nbsp;
        <a class='youtube' href='https://www.youtube.com/channel/UCTueZXgO8_-33D9S3jLj3pw' target="_blank"><i class='fa fa-youtube-play'></i></a>&nbsp;&nbsp;&nbsp;
        <a class='soundcloud' href='http://www.soundcloud.com/dbstudiove' target="_blank"><i class='fa fa-soundcloud'></i></a>&nbsp;&nbsp;&nbsp;
        <a class='tumblr' href='http://dbstudiove.tumblr.com/' target="_blank"><i class='fa fa-tumblr'></i></a>&nbsp;&nbsp;&nbsp;
        <a class='instagram' href='https://www.instagram.com/dbstudiove/' target="_blank"><i class='fa fa-instagram'></i></a>
      </div>
  </div>    
    
  <div class="footer text-center">
    <div class="btn btn-top" id="toTop"> <a href="#"><i class="fa fa-angle-up"></i></a> </div>
    <p>&copy; 2017 dbStudio</p>
  </div>
</footer>
<script src="js/main.js"></script>
</body>
</html>