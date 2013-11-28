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
define('DB_NAME', 'redfusalibre');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '12345');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'EC>t$[N$BPYa|]H;_|47h,%j &hZ+|X%#*_Yv|,-V|VAnN_D@TDEe3Gw][TZ)ReY');
define('SECURE_AUTH_KEY',  'D4AduqfgL&N@uP/=CP7,O|95nfN<zW!Zc@i(|wSj|3CsQ3DHoko.([_ewE;H:^tZ');
define('LOGGED_IN_KEY',    'N!p|zu? n?e|1F->Y8nzI>:ow1CMh+k8]`k_/H!-9nfM}.Ak^~]Fr`YY%`?B=[d!');
define('NONCE_KEY',        'HU[TbTz5r|*`:+n}3lj5nL^&&d!S|O:wps*dJDZ}2mBpm?Q{2Y&>|!qb/T<;]X+c');
define('AUTH_SALT',        '*A+9AO*,;7]&|g< <kAP!K;&OrezrntZftyM8~]ScpZ*S EaNmbSdh+N(NR,Z&>i');
define('SECURE_AUTH_SALT', '3gYX~U_-)P4w.`^U?*aFV3m-90:4mUw 3%nozZSEB&=l^x[!,.?h,|$F#}X0=Vvd');
define('LOGGED_IN_SALT',   '8$qlij)4dqqw|xXTJQ*pKY]xo9&!}MTqMXo_.UQxA_x/EAPK-YerFZbi+q7-%sq?');
define('NONCE_SALT',       't(!Wkchmk(#F;,>w9W0RwO)C.=6y8BS[mTLyL>|R#k_@G 9>O</1~HWTO/yE%z8@');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';

/**
 * Idioma de WordPress.
 *
 * Cambia lo siguiente para tener WordPress en tu idioma. El correspondiente archivo MO
 * del lenguaje elegido debe encontrarse en wp-content/languages.
 * Por ejemplo, instala ca_ES.mo copiándolo a wp-content/languages y define WPLANG como 'ca_ES'
 * para traducir WordPress al catalán.
 */
define('WPLANG', 'es_ES');

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

