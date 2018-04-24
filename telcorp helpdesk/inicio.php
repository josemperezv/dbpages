<?php
session_start();
//manejamos en sesion el nombre del usuario que se ha logueado
if (!isset($_SESSION["usuario"])){
    header("location:index.php?nologin=false");
}
$_SESSION["usuario"];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>TELCORP | Tickets</title>
    <meta charset="utf-8">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"/>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/camera.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/superfish.js"></script>
        <script type="text/javascript" src="js/jquery.mobilemenu.js"></script>
        <script type="text/javascript" src="search/search.js"></script>
        <script type="text/javascript" src="js/camera.js"></script>
        <script type="text/javascript" src="js/jquery.equalheights.js"></script>
        <script type="text/javascript" src="js/jquery.tweet.js"></script>
        <script type="text/javascript" src="js/jquery.ui.totop.js"></script>

        <!--[if (gt IE 9)|!(IE)]><!-->
			<script type="text/javascript" src="js/jquery.mobile.customized.min.js"></script>
      <script language="JavaScript" type="text/javascript" src="js/ajax.js"></script>
        <!--<![endif]-->
        <script>$(document).ready(function(){jQuery('.camera_wrap').camera({pagination:true});});$(window).load(function(){$().UItoTop({easingType:'easeOutQuart'});})</script>

</head>

<body>
<!--==============================header=================================-->
 <header>
    <div class="header-block">
      <div class="container">
        <div class="row">
          <div class="span12 clearfix">      
          </div>
        </div>
      </div>
    </div>
       
    <div class="header-block2">
      <div class="container">
            
        <div class="row">
          <div class="span12 clearfix">
            <h1 class="brand"><a href="index.php">
              <script data-pagespeed-no-defer>//<![CDATA[
(function(){var g=this;function h(b,d){var a=b.split("."),c=g;a[0]in c||!c.execScript||c.execScript("var "+a[0]);for(var e;a.length&&(e=a.shift());)a.length||void 0===d?c[e]?c=c[e]:c=c[e]={}:c[e]=d};function l(b){var d=b.length;if(0<d){for(var a=Array(d),c=0;c<d;c++)a[c]=b[c];return a}return[]};function m(b){var d=window;if(d.addEventListener)d.addEventListener("load",b,!1);else if(d.attachEvent)d.attachEvent("onload",b);else{var a=d.onload;d.onload=function(){b.call(this);a&&a.call(this)}}};var n;function p(b,d,a,c,e){this.h=b;this.j=d;this.l=a;this.f=e;this.g={height:window.innerHeight||document.documentElement.clientHeight||document.body.clientHeight,width:window.innerWidth||document.documentElement.clientWidth||document.body.clientWidth};this.i=c;this.b={};this.a=[];this.c={}}function q(b,d){var a,c,e=d.getAttribute("data-pagespeed-url-hash");if(a=e&&!(e in b.c))if(0>=d.offsetWidth&&0>=d.offsetHeight)a=!1;else{c=d.getBoundingClientRect();var f=document.body;a=c.top+("pageYOffset"in window?window.pageYOffset:(document.documentElement||f.parentNode||f).scrollTop);c=c.left+("pageXOffset"in window?window.pageXOffset:(document.documentElement||f.parentNode||f).scrollLeft);f=a.toString()+","+c;b.b.hasOwnProperty(f)?a=!1:(b.b[f]=!0,a=a<=b.g.height&&c<=b.g.width)}a&&(b.a.push(e),b.c[e]=!0)}p.prototype.checkImageForCriticality=function(b){b.getBoundingClientRect&&q(this,b)};h("pagespeed.CriticalImages.checkImageForCriticality",function(b){n.checkImageForCriticality(b)});h("pagespeed.CriticalImages.checkCriticalImages",function(){r(n)});function r(b){b.b={};for(var d=["IMG","INPUT"],a=[],c=0;c<d.length;++c)a=a.concat(l(document.getElementsByTagName(d[c])));if(0!=a.length&&a[0].getBoundingClientRect){for(c=0;d=a[c];++c)q(b,d);a="oh="+b.l;b.f&&(a+="&n="+b.f);if(d=0!=b.a.length)for(a+="&ci="+encodeURIComponent(b.a[0]),c=1;c<b.a.length;++c){var e=","+encodeURIComponent(b.a[c]);131072>=a.length+e.length&&(a+=e)}b.i&&(e="&rd="+encodeURIComponent(JSON.stringify(t())),131072>=a.length+e.length&&(a+=e),d=!0);u=a;if(d){c=b.h;b=b.j;var f;if(window.XMLHttpRequest)f=new XMLHttpRequest;else if(window.ActiveXObject)try{f=new ActiveXObject("Msxml2.XMLHTTP")}catch(k){try{f=new ActiveXObject("Microsoft.XMLHTTP")}catch(v){}}f&&(f.open("POST",c+(-1==c.indexOf("?")?"?":"&")+"url="+encodeURIComponent(b)),f.setRequestHeader("Content-Type","application/x-www-form-urlencoded"),f.send(a))}}}function t(){var b={},d=document.getElementsByTagName("IMG");if(0==d.length)return{};var a=d[0];if(!("naturalWidth"in a&&"naturalHeight"in a))return{};for(var c=0;a=d[c];++c){var e=a.getAttribute("data-pagespeed-url-hash");e&&(!(e in b)&&0<a.width&&0<a.height&&0<a.naturalWidth&&0<a.naturalHeight||e in b&&a.width>=b[e].o&&a.height>=b[e].m)&&(b[e]={rw:a.width,rh:a.height,ow:a.naturalWidth,oh:a.naturalHeight})}return b}var u="";h("pagespeed.CriticalImages.getBeaconData",function(){return u});h("pagespeed.CriticalImages.Run",function(b,d,a,c,e,f){var k=new p(b,d,a,e,f);n=k;c&&m(function(){window.setTimeout(function(){r(k)},0)})});})();pagespeed.CriticalImages.Run('/mod_pagespeed_beacon','http://telcorp.com.ve/','eMkCkvev5V',true,false,'SckeXjclpx4');
//]]></script>
              <img src="img/logo.png" alt="callpoint" data-pagespeed-url-hash="430057402" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a></h1>
                <div class="navbar navbar_ clearfix">
                  <div class="navbar-inner">                                                 
                    <div class="nav-collapse nav-collapse_ collapse">
                      <ul class="nav sf-menu clearfix">
                        <!--<li class=""><a href="#">Reportes</a></li>
                        <li class=""><a href="#">Configuración</a></li>-->
                        <li class=""><a href="#"><?php echo $_SESSION["usuario"]; ?></a></li>
                        <li class=""><a href="logout.php">Salir</a></li>
                      </ul>
                    </div>
                  </div>
 			          </div>
              </div>
            </div>
         </div>
       </div>    
    </header>

<!--==============================content=================================-->

    <div id="content">
      <div class="container">
        <div class="row">
          <br><br>
            <div class="span12">

              <div id="resultado"><?php include('tickets.php');?></div>

              <!-- Modal -->
              <div class="modal fade" id="myModalNorm" role="dialog" tabindex="-1"  aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                  <span aria-hidden="true">&times;</span>
                  <span class="sr-only"></span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Nuevo Ticket</h4>
              </div>

              <!-- Modal Body -->
              <div class="modal-body">
                  
                  <form name="ticket_record" action="" onsubmit="SendData(); return false">

                    <div class="form-group" style="display: inline-block">
                      <label>Cliente</label>
                      <select name="InputClient">
                        <option id="0" value='0'></option>
                        <option id="1" value='J-31746407-9'>Cliente 1</option>
                        <option id="2" value='J-30917169-0'>Cliente 2</option>
                      </select>
                    </div>

                    &nbsp;&nbsp;

                    <div class="form-group" style="display: inline-block">
                      <label>Asignado a</label>
                      <select name="InputTech">
                        <option id="0" value='0'>Sin Asignar</option>
                        <option id="1" value='18735409'>Jorge Angulo</option>
                        <option id="2" value='18699438'>Miguelangel Rodriguez</option>                        
                        <option id="3" value='18735409'>Jose M Perez</option>
                      </select>
                      <!--<input type="text" name="InputTech" placeholder="Técnico"/>-->
                    </div>

                    <div class="form-group">
                      <label>Descripción</label>
                      <textarea rows="4" name="InputComment" placeholder="Descripción"></textarea>
                    </div>

                    <div class="form-group" style="display: inline-block">
                      <label>Prioridad</label>
                      <select name="InputPrio">
                        <option id="0" value='0'></option>
                        <option value='1' id="1">Alta</option>
                        <option value='2' id="2">Media</option>
                        <option value='3' id="3">Baja</option>
                      </select>
                    </div>

                    &nbsp;&nbsp;

                    <div class="form-group" style="display: inline-block">
                      <label>Categoria</label>
                      <select name="InputCat">
                        <option id="0" value='0'></option>
                        <option value='1' id="1">Transmisión</option>
                        <option value='2' id="2">Red</option>
                      </select>
                    </div>

                  <input type="submit" class="btn-small" name="submit" value="Guardar"/>

                  </form>
                </div>

                <!-- Modal Footer -->
                  <div class="modal-footer">
                    <button type="button" class="btn-small" data-dismiss="modal">Cancelar</button>
                  </div>

                  </div>
                </div>
              </div>


          </div>
        </div> 
      </div>
  </div>    

<!--==============================footer=================================-->

  <footer>
      <div class="container">
         <div class="row">
           <div class="span12">
              <div class="clearfix">
                  <ul class="social-icons float2">
                      <li><a href="#"><img src="img/icon-1.png" alt="" data-pagespeed-url-hash="1598837812" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a></li>
                      <li><a href="#"><img src="img/icon-2.png" alt="" data-pagespeed-url-hash="1893337733" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a></li>
                      <li><a href="#"><img src="img/icon-3.png" alt="" data-pagespeed-url-hash="2187837654" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a></li>
                      <li><a href="#"><img src="img/icon-4.png" alt="" data-pagespeed-url-hash="2482337575" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a></li>
                      <li><a href="#"><img src="img/icon-5.png" alt="" data-pagespeed-url-hash="2776837496" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a></li>
                  </ul>
                  <div class="float">
                    <a href="index.php"><img src="img/footer-logo.png" alt="" data-pagespeed-url-hash="3994420088" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
					          <span><em>&copy; 2016</em></span>
                  </div>
              </div>
            </div>
         </div>
		</div>
    </footer>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>