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
define('DB_NAME', 'multiviral');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY', '~@qgKW$BpHYvAnWEcds5:hdyn!twv@_dY(Py9t{~@=]Uw#EE)TjIa]-Edw)Bn6XD');
define('SECURE_AUTH_KEY', 'vAp-yCFCIU58`h:dY1v5=D sm<8NH,@!?bayE5dOTEWXS+}vs3+k&Y&$YkN?%Osv');
define('LOGGED_IN_KEY', 'm,!j$69BvTrEQc8=4${PH}eGbm;n2nx5;8x,I-?C1+4c1zV7s9k_T#n1uS_OvSq5');
define('NONCE_KEY', 'AdC|;ZU?WTjA1c.b~iI(T~SvEdA@8k[G!(x_BCg1= OeR- ]Bco~Pa64Jf/5Xz2Z');
define('AUTH_SALT', 'HN3i!m35h9@&N9C*x<&6Wd0+ Sf+iQ<?=9BgNkks>w(2.KnxUx1D`gYT2n%uOd&Q');
define('SECURE_AUTH_SALT', 'l %h)#X9KW=H&d=>`` VjaXL@p{CfT G(?|C%eJR{J(^FnLfq82adv::Q}f=!|13');
define('LOGGED_IN_SALT', 'Qme<{RMmVm5Uf}m+yedmxGm1% F/J)Tfkz6Dgo=tTSP<*O^LTyj[2MobRkiR2tb2');
define('NONCE_SALT', 'gY*BKXVP!/Ya$qh)(ma)LY!sYs.pQ+$T5dgcFcEQE<K.-y!pF9t*0T@e y&=g8l7');

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

