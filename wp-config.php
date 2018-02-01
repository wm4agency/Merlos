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
define('DB_NAME', 'Merlos');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'merlos');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'WebMedia4');

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
define('AUTH_KEY', '`X3i=j%nP%lRRgnJcIJ-<pKsL[2rKYwp3f6AZK4;-MdD(r#_V0-zc2*>1mw6D~X=');
define('SECURE_AUTH_KEY', 'qTMZrkiIR+n|%p/ RcPZ70E9.0X>nUf%yUh@mKD{:3z_ncVg72f>hg*pD>bNk!,0');
define('LOGGED_IN_KEY', 'F#l)Ae*m#th<LS{[q8AmpSP BcFmE&EM@}ow=1t;AJH[F6Vn:+)1iBd~h8Sltm#_');
define('NONCE_KEY', 'S}|?#kq@RY5O.E$&<p(X*W&laZ@k{CU@i:6}yrVZJ<JRaIq;`_?q 1/Q^Ima&qQ9');
define('AUTH_SALT', 'bjq zx#L&S@3GL}H!e,E+8j6dlu)<Fx;YeL6v&h,Y(|xQ4xOexPm)4i5BN ({*^ ');
define('SECURE_AUTH_SALT', 'oWpiy/s~Y^l62SvlS]t[)G3~X CA&5YM~Us]@YJ/xA?DZ5$PMeE.ar16>~U84K.r');
define('LOGGED_IN_SALT', 'Jyl^s~xJ4zrq9FiZX2/rt0$E,q-<R04kj9E&+M7N0NQ#5^Y^}(8]4N]FQcY04wv(');
define('NONCE_SALT', 'FbHX.E|uMa_M-tVden_v4xA:Hc&}x:ChM39&xbn`#b[u5a=jesqM*=wUsh<|RI>=');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wpmerlos_';


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

