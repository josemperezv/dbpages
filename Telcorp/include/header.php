<?php include 'app/config.php';?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>TELCORP | <?=$page_title;?></title>
    <meta charset="utf-8">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <meta name="description" content="<?=$page_desc;?>">
    <meta name="keywords" content="<?=$page_keywords;?>">
    <meta name="author" content="<?=$page_author;?>">
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
        <!--<![endif]-->
        <script>
            $(document).ready(function(){
                jQuery('.camera_wrap').camera({
					pagination:true
				});

            });
			$(window).load(function(){
			  $().UItoTop({ easingType: 'easeOutQuart' });
			})
</script>
	<!--[if lt IE 8]>
  		<div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/img/upgrade.jpg"border="0"alt=""/></a></div>
 	<![endif]-->
  <!--[if lt IE 9]>

    <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

<!-- Chatra {literal} 
<script>
    ChatraID = 'S3gc7KaZ8adwZpKjG';
    (function(d, w, c) {
        var n = d.getElementsByTagName('script')[0],
            s = d.createElement('script');
        w[c] = w[c] || function() {
            (w[c].q = w[c].q || []).push(arguments);
        };
        s.async = true;
        s.src = (d.location.protocol === 'https:' ? 'https:': 'http:')
            + '//call.chatra.io/chatra.js';
        n.parentNode.insertBefore(s, n);
    })(document, window, 'Chatra');
</script> -->
<!-- /Chatra {/literal} -->

  <!--Start of Zopim Live Chat Script-->
<!-- <script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="//v2.zopim.com/?41sjiOc6qPXSBkdwR246ruuK50AJj8Sn";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script> -->
<!--End of Zopim Live Chat Script-->

</head>

<body>
<!--==============================header=================================-->
 <header>
 <div class="header-block">
         <div class="container">
            <div class="row">
              <div class="span12 clearfix">
                <div class="header-phone">Llamanos: <span>+58 212 8819800</span></div>
                <div class="header-search clearfix">
                	<ul>
                      <li><a href="htptp://telcorp.info/app/">Ingresa</a><span>|</span></li>
                      <li><a href="http://telcorp.info/cloud/cloud/"><i class="fa fa-cloud fa-lg" aria-hidden="true"> </i></a></li>
                    </ul>
                	<form id="search-form" action="search.php" method="GET" accept-charset="utf-8" class="navbar-form" >
                        <input type="text" name="s" onBlur="if(this.value=='') this.value=''" onFocus="if(this.value =='' ) this.value=''" value=" "  >
                        <a href="#" onClick="document.getElementById('search-form').submit()" class="btn-small">Buscar</a>
                    </form>
                </div>
              </div>
            </div>
          </div>
       </div>
       <div class="header-block2">
          <div class="container">
            <div class="row">
              <div class="span12 clearfix">
                <h1 class="brand"><a href="index.php"><img src="img/logo.png" alt="callpoint"></a></h1>
                <div class="navbar navbar_ clearfix">
                 <?php require 'include/menu.php';?>
                </div>
             </div>
          </div>

