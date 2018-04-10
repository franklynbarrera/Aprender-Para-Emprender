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
define('DB_NAME', 'aprender');

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


define('FS_METHOD','direct');



/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'MZ0Pwpwd+(gZP9tk1b7Ba=-?v9ga)Qtz7HHnAKD-)#R]aN]+6=`Iuld:aDUMpP Z');
define('SECURE_AUTH_KEY', 'Pw8<.h]@7;p:~rj?$W#b@3&)CTIP[/sd)p nYz%P6E?yFrQ%C]xw0diqt.Y;3^/u');
define('LOGGED_IN_KEY', '@hEGVxF_YsprWCFWi,CH$yY<b?`>b+titthZ4nE=v@fg5><?KD^b&i}2U0cZ%|]#');
define('NONCE_KEY', 'YBonJ*c]}z=+=dB7ep4ZnMuzdG7+$e}x3J=%%S->&rJ>6gj7:wmVf{3 !*O$15y{');
define('AUTH_SALT', '79w>)%f$!LBOn6bH.!%]]w 6xcVK2lMtm/]/palkT~ JTOO:2xzof2ESv^FjYOP*');
define('SECURE_AUTH_SALT', 'C>$ffIo&`xYqVcUg))~/n:Gp``&DUylTbY>;_[C<j?M*hn kk&jxh~3syQ1OLl_u');
define('LOGGED_IN_SALT', 'ezKF.lN;RY9;u.mrB[>@$sl[nubTMDO]M4&lcb&Mtz^*e|UBV?b=#$x*ivB%v>G)');
define('NONCE_SALT', 'h-x.G:r!LDlqz}??o#g`v|+j:u#~4Mg4lFap>ar3;d_`$%[rPGM~^a%P7N4)vm;B');

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


