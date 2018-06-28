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
define('DB_NAME', 'wp_perfectmelt');

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
define('AUTH_KEY',         'xNW_zdeuLn+,`N&R-}0]A>~p(gSY$c}R%au|GO;N?(`.m:V2ZFiBT+cT$/s;i9i8');
define('SECURE_AUTH_KEY',  'tD p|W6ZvfJ_S!U9~!UH1m~FsZU,&+tUG*j,Ao?E&3<`k#%}s..ubp}P,JXs:m#0');
define('LOGGED_IN_KEY',    ' 370CB5|M~w.eyZ|4D`PP#eFsB^25eI_&|iyr~j]Y*Di+>?&FpnKNW$P>XaE_{]0');
define('NONCE_KEY',        'aa/2~=8_UH:%D.*u-MIvSF{l Pq@!qx|RyRt:VJIa_2(NK Ejd@pXYR1Q}>leP q');
define('AUTH_SALT',        '&(FMXd<E33DUQzR+bXXBZMb8fJ1mV;z l$3`Us~{FMRiY_Go=gwjCF/AiB(||a#a');
define('SECURE_AUTH_SALT', '2Vs MDY9Q!Rd]9?^p1K_^B*%Y<b-7?Tg3Lwz/Iw{AWO8lRgL;^IT&r?]=11Faj&T');
define('LOGGED_IN_SALT',   '=4HupzY}Q#2jaa<p&NEb?vou[0A2mB*n*hHM$FFJ{nu ceA#F;%U_d+=q_!C$lk,');
define('NONCE_SALT',       '&IT6lNPVL<R%#|V$E`>yX$..N{[2hOzEewmxWWUv}gOMRz( D;4KgK7lxRB`4YkZ');

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
