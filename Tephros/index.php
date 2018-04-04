<!DOCTYPE html>

<html lang="en">
    <head>
    
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script type="text/javascript" src="css/search.json" async=""></script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="Tephros" />
    <meta name="description" content="The Official Tephros Site." />

    <link rel="shortcut icon" href="img/favicon.jpg">
    <link rel="apple-touch-icon" href="https://f1.bcbits.com/img/a0410012072_3.jpg">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <!--<meta name="apple-mobile-web-app-status-bar-style" content="black translucent">-->

    <title>Tephros | Between Angels & Demons</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Marcellus+SC' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>

<body id="page-top" class="index">

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.6";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right list-inline">
                    <li class="hidden active">
                        <a href="#page-top"></a>
                    </li>
                    <li class="">
                        <a href="https://www.facebook.com/tephrosvzla" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                    </li>
                    <li class="">
                        <a href="https://www.twitter.com/tephrosvzla" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                    </li>
                    <li class="">
                        <a href="https://www.instagram.com/tephrosvzla/" target="_blank"><i class="fa fa-instagram fa-lg"></i></a>
                    </li>
		    <li class="">
                        <a href="https://www.youtube.com/c/Tephros" target="_blank"><i class="fa fa-youtube-play fa-lg"></i></a>
                    </li>
		    <li class="">
                        <a href="https://www.soundcloud.com/tephros" target="_blank"><i class="fa fa-soundcloud fa-lg"></i></a>
                    </li>
		    <li class="">
                        <a href="https://open.spotify.com/artist/0c3p8MZh3ZeoHP7wyiYaaV" target="_blank"><i class="fa fa-spotify fa-lg"></i></a>
                    </li>
		    <li class="">
                        <a href="https://itunes.com/tephros" target="_blank"><i class="fa fa-apple fa-lg"></i></a>
                    </li>
		    <li class="">
			<a href="mailto:contact@tephros.com.ve"><i class="fa fa-envelope fa-lg"></i></a>
		    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav> 
    
    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
		<div class="intro-heading">Tephros</div>
            </div>
        </div>
    </header>

    <!-- Video -->    
    <div id="video" class="container">
	<iframe width="720" height="480" src="https://www.youtube.com/embed/GmGhopGwUQA" frameborder="1" bordercolor=#922 allowfullscreen></iframe>
    </div>

    <!-- Download -->    
    <div id="download" class="container">    
        <br>CHECK THE FREE DOWNLOADS!<br>
            <input type="button" value="Download" class="prebutton buttonpre" onclick="parent.location='download.html'">
        <br><br>OR...
    </div>

    <!-- Pre Order -->    
    <div id="preorder" class="container">    
        <br>ORDER YOUR PHYSICAL COPY OF BETWEEN ANGELS & DEMONS HERE!<br>
            <input type="button" value="Venezuela" class="prebutton buttonpre" onclick="parent.location='http://www.dbstudio.com.ve/es/tienda.html#!/Tephros-Between-Angels-&-Demons/p/65783263/category=0'">
            <input type="button" value="Rest of the world" class="prebutton buttonpre" onclick="parent.location='http://tephros.bandcamp.com'">
    </div>    
    
    <!-- Newsletter -->
    <div id="newsletter" class="container">    
    <form name="frmEmail">
        <br>Join the Tephros mailing list<br>
            <input type="email" name="txtMail" id="txtMail" class="email-input" placeholder=" Your email">
            <input type="button" name="btnMail" value="Sign up" class="signup-input" onclick="guardar()">
    </form>
        
    <div id="exito"></div>
        
        <script>
            function guardar(){
                var Mail = document.getElementById("txtMail").value;
                xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function(){
                    if (xhttp.readyState == 4 && xhttp.status == 200) {
                        document.getElementById("exito").innerHTML = xhttp.responseText;
			document.getElementById("txtMail").value = "";
                    }
                };
                xhttp.open("POST", "guardar_mail.php", true); //abrimos la conexion, definimos tipo, url y AJAX=true
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send("Mail="+Mail);
            }
        </script>
    </div>

<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
-->
    <!-- Footer -->
    <footer>
        <div class="container">
	    <span class="copyright">&copy; 2018 Tephros. All Rights Reserved. </span><br/>
        <a href="http://www.dbstudio.com.ve" target="_blank"><img src="img/powered.png" width="100"></img></a>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>
    
</body>

</html>