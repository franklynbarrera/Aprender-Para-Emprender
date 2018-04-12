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
define('DB_USER', 'homestead');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'secret');

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
define('AUTH_KEY', '^kTP y2FPwFSd$JloG2w:>d=/l>t#L/jw7gXym}KQS?74*f_YuorC.N[RVjC/~bI');
define('SECURE_AUTH_KEY', 'eM0j:/$9;f?NP.h`@y!:nikg*|O>N{=B-1Tr!i|@0-h=OAs[`];r?4vd>feQnfd3');
define('LOGGED_IN_KEY', 'dWAwr|kbwzmveobgw $#SBCw.fLE0gvN&HIT}/OAdkabD0[lOzz `$goA:8:&?I|');
define('NONCE_KEY', 'e_+5OsPl<xciL,V`o,wq%PW}37_zHHNvHB_QCq8f]wo=0b)tf m3R mm2Z[Hnk3{');
define('AUTH_SALT', 'FqJ7+M(gy??(lyvdRqLvl8KH_Wp-.|AvUU6`^W7i5-Fe8p^Ir/n8?? i SL0)S @');
define('SECURE_AUTH_SALT', '_]N!c, qG,Pp:[/yIa?~S4ksCc1vxY3g//@o`tK|XE8[Ae{K@1#z0+r=% d):<e=');
define('LOGGED_IN_SALT', 'b`/U*OoX%)eX4^y<Ih>9>~>7J#X!>n:aO`Iaon`&.$`>c?tf<.dgdV]>)R[p|_[,');
define('NONCE_SALT', ' 2p>|CAU;zGU.XH3z4uJ>cD2r..Ps,(l%iG|8T&[Xhz6F15Z]PqFy~xzA{ih,bl4');

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

