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
define('DB_NAME', 'wordpress');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY', 'L>V:(PA~::kPVep5KzM:?RajH*d?V/00+0kN1:CMq;k5{JeP[6^kCKKv?/dKymjz');
define('SECURE_AUTH_KEY', '[%]0t;g[^nqN}iN1V5dH;A_=NTT!;g,2TGci{4+wGMF3]vtl($kCc@$eYI wlU_|');
define('LOGGED_IN_KEY', 'ofSyv`Tl:S@8kShN`A;Q_fk.w:S=+,1hQUDuLyHshj!-WJqZ,w1<@mtR5~<ij-!b');
define('NONCE_KEY', ',bWz-@:}10{JrZg>E:g?J*^,1pWB;-&`St*,NUTx_ NhlxR2K3vU,yyW^|!leoEW');
define('AUTH_SALT', 'M1og{&~knn.mqVHM/(J@C`g5d#Vx*df,R8qqSiKu27=uR,0?q$2%744O9%It_N3f');
define('SECURE_AUTH_SALT', ',07](KF< QR>E#.}u{b]cQxM+7CgNM6|CAl)s/#&NX)Y<.7pO~-b5D/7/F2RWEu+');
define('LOGGED_IN_SALT', 'FDHs~3Yeroa+E|fa}a-c6x@{]-xXV$UN@a471&2cx&eRLXb_Q5vm3:6x8,t[EDxi');
define('NONCE_SALT', 'xzA 0%a(~%&!2l_&@w?d<$6KMIw}Z>+cGZp*f8G>a*)X%ex:FM^7g>DG?DOZ5b1m');

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

