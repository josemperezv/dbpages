<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'u285359448_bajoz');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'u285359448_bajoz');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'bajometalzero');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '>gB,2{<P2rF,`epDI#(WX&Ty`Zp{A,]G&y<L:Q,ZGJ<GZ,b*@>%rKi~uO:`+MR*Q');
define('SECURE_AUTH_KEY', 'zviQb7?S dfQ1IoKf]a9dv71Hr%a7I8;9s+HKo?%6M0VR_efxCf_W1w Q<tJTB4b');
define('LOGGED_IN_KEY', 'MWs$CZ?$ lGYOE*=f+bx.;3]Tl#N3S]wV5haf|Zvx@{4=}40YuY kZh xjK-+%*e');
define('NONCE_KEY', '`5{:{ a3l({7|5{M66OU6-iS`|6dlfAJ&{G,QKE!8<YY-aHy &Wr`OSN=:L(&$~e');
define('AUTH_SALT', '7u;p?h<C&.)Yd_Ixb_81~r78*QOD-R%@i>icigy1(*,NoaFHZ:5L6Fpkx4{O<Aw:');
define('SECURE_AUTH_SALT', '{0{`/Y A7n}xb2v4f{t13k0sv()1AxL?xQh:}_?pGKi%AgGyC0HIhp/DJN;e5Cjv');
define('LOGGED_IN_SALT', 'p[U&euiJ{r0%O;?>i#<|:QIj@Twj7&:o,m0(:Lp*wPEMY@_|J ;anegN^h!;?YG`');
define('NONCE_SALT', '%9*gw6~l^P-@A&ceM46+8VuN5-FDDLEZS[xT?W+H#F9b^a6I?&S+9.oLrl*k|A;{');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

