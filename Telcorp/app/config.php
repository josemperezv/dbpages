<?php 
$current_page_uri=$_SERVER['REQUEST_URI'];
$part_url = explode("/", $current_page_uri);

$page = end($part_url);  // Asi sabras qué página está viendo el usuario

//Ahora tienes que asignar los títulos adecuados:

switch ($page) {

    case 'index.php':
           
          $page_title = 'Inicio';
		  $page_desc ='';
		  $page_keywords ='';
		  $page_author='';

    break;
    case 'about.php':

          $page_title = 'Nosotros';
		  $page_desc ='';
		  $page_keywords ='';
		  $page_author='';

    break;
	    case 'services.php':

          $page_title = 'Servicios';
		  $page_desc ='';
		  $page_keywords ='';
		  $page_author='';

    break;
    case 'partners.php':

          $page_title = 'Unete al Equipo';
		  $page_desc ='';
		  $page_keywords ='';
		  $page_author='';

    break;
    case 'support.php':

          $page_title = 'Soporte';
		  $page_desc ='';
		  $page_keywords ='';
		  $page_author='';

    break;
    case 'contact.php':

          $page_title = 'Contactanos';
		  $page_desc ='';
		  $page_keywords ='';
		  $page_author='';

    break;
    case 's-internet.php':

          $page_title = 'Internet Inteligente';
		  $page_desc ='';
		  $page_keywords ='';
		  $page_author='';

    break;
    case 'cloud.php':

          $page_title = 'Services en La Nube';
		  $page_desc ='';
		  $page_keywords ='';
		  $page_author='';

    break;
    case 'pbx.php':

          $page_title = 'PBXVirtual';
		  $page_desc ='';
		  $page_keywords ='';
		  $page_author='';

    break;
    case 'ip-vpn.php':

          $page_title = 'Enlace de Datos IP y VPN';
		  $page_desc ='';
		  $page_keywords ='';
		  $page_author='';

    break;
    case 's-system.php':

          $page_title = 'Televigilancia';
		  $page_desc ='';
		  $page_keywords ='';
		  $page_author='';

    break;
    case 'wifi.php':

          $page_title = 'Implementacion WIFI';
		  $page_desc ='';
		  $page_keywords ='';
		  $page_author='';

    break;
    case 'p-line.php':

          $page_title = 'L&iacute;nea Privada Internacional';
		  $page_desc ='';
		  $page_keywords ='';
		  $page_author='';

    break;
    case 'infrastructure.php':

          $page_title = 'Desarrollo de Infraestructura';
		  $page_desc ='';
		  $page_keywords ='';
		  $page_author='';

    break;
    case 'integrated.php':

          $page_title = 'Soluciones Integradas';
		  $page_desc ='';
		  $page_keywords ='';
		  $page_author='';

    break;
    case 'termns.php':

          $page_title = 'Politicas de Privacidad';
		  $page_desc ='';
		  $page_keywords ='';
		  $page_author='';

    break;
	    case 'benefits.php':

          $page_title = 'Ventajas Competitivas';
		  $page_desc ='';
		  $page_keywords ='';
		  $page_author='';

    break;
    case 'search.php':

          $page_title = 'Resultados de la Busqueda';
		  $page_desc ='';
		  $page_keywords ='';
		  $page_author='';

    break;

    default:  //Más vale prevenir..

          $page_title = 'Inicio';
		  $page_desc ='';
		  $page_keywords ='';
		  $page_author='';

    break;
}  