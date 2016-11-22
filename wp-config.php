<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'portfolio2');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '*[+aRJmrh],p;U_Vrwxw$82[J<XirSIyLQ)PFYup6gv&P#i.Z![B$)CXx`U[Blj0');
define('SECURE_AUTH_KEY',  ',i`NmZdtn0UtOSnfOdYA~MrAks8{uK*.Ms!p/$},73 Kb=tcisR)fxt<}N.K]^z_');
define('LOGGED_IN_KEY',    'Bm]6`q]0bmCj,*ZX.X~AIkDP$Si;@>*_4,*Dmo@V !SbxY&S*WUDi*gIL@,]78C-');
define('NONCE_KEY',        'Es]#  e3;;gL;VgHJIa{<)Z/1|oPU9&Cz./`$>TF_y-(F%MDNy(z*cdmUkge|jef');
define('AUTH_SALT',        '}#wy[M30.#6 {[|=,u_peXC9>y/Fx{^%?L.=hrI*E>I>DW@[:iRIHu{f`<FCL&LG');
define('SECURE_AUTH_SALT', 'I|=Z8lJ|w%3{tbLDV.@j86Kun[,F+]m@Ih!-iO)=<Yn9)fw(<*IWBN)Vpg:;lJ)m');
define('LOGGED_IN_SALT',   '0#TZMB%[3.U1ITYv!&H,*/)yh@Q>}<KM$X,ARuFkh&gHJC&PGhu/N[8CO63C-^JH');
define('NONCE_SALT',       '1g~=&oY.`.A|L{oZ`yJRhM ,-GatKB71KafG=vUmP IMQGFZ?oAUpoi]%Ib74S6E');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
