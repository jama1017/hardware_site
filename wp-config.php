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
define('DB_NAME', 'hardware_site_local');

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
define('AUTH_KEY',         'uz<!FDTIsA#krIMwlZxTRncq+/e0L?A bG22^bsFmYAo9v4BB_l:mQ_q;.[77_GG');
define('SECURE_AUTH_KEY',  ';!s5.,yZXdxam8so:|9wDW^Nx@~2t4&l b0HPN=0%M)X;`8]$G2{(E-].ZU:v-&c');
define('LOGGED_IN_KEY',    'c:8{Uw^E4$Ur|Wa6JID7`:!,cAF&[i+]NV]?*7X_9+T(RN):1T^dNe{](B 3/4X>');
define('NONCE_KEY',        'qY:QK+]+e!sIf79/W8]ZnI@{Tfv%d<n=u[PcWFMo/s,hmU&mNwHS|W?H,X;G&HAz');
define('AUTH_SALT',        '*i`p5$jghKe5J#j#VN$uK^.1SPHx<KGs#KsfMUCZaG};]dIh[/l#-?@[jkKaX0s1');
define('SECURE_AUTH_SALT', 'Pc<&SvpO863:M=bPJhD YvK5,R+>agWh?AgL3V$mO(q>| d;}QwTH1/s>*(QhXjF');
define('LOGGED_IN_SALT',   'nkLui(ED&>d=4Hbf1+|fEouR/p~rL+fmL%tX7M1fGR=5qMMP5qwmSV>w[=s*/hn6');
define('NONCE_SALT',       'UnjY`Y^mnQ)t=^be/~7RJv7O}L$jbgV$nZs)>MS45CrwPzN_e.%Edqm+}D[E#k-@');

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
