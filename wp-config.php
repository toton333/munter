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
define('DB_NAME', 'munter');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'ladygaga123');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'Hp|]n+/c{G7;@Qg6Np[$3LOS?!RqBIuC$gJ3CxprAiTT*J$*+;&89T&0LV3v#465');
define('SECURE_AUTH_KEY',  '-`Ec(G=wQ?v|)F@MbB3zE]PQ>?>}9ea+/]`HW)M76n-bpba+|q2,AdOvmt&KSZYM');
define('LOGGED_IN_KEY',    'AJRnEi+*JKj>(teDO~+-?JZIi88)e_)%$%VIS?S$zj8_T/cOR!bH[`<YEd&U@pG-');
define('NONCE_KEY',        '8h2<5J|h6DVTJ=RP9V:+S1P,;Poakn[o0Uw@b-I:Ck+%Oh!:f&D?#Svmp!.5RHm:');
define('AUTH_SALT',        'v$zV(e`B0+5IhFkD?/^DLYNhB`RVS.J+hY8-}RR=2#|+6?RxRQRcYO[=^{2*>$u2');
define('SECURE_AUTH_SALT', 'YD1|4q-,m/aXG,f#O?VZm& ~_Xlm]KpwCM~I|y,dLDXYem*>1P3U7o~7u&<+Tkq4');
define('LOGGED_IN_SALT',   '~.-T;2y%[i}NEFqY&QZ=hEj^^_a;T{Qg^,xWzx8~&_Rig4{*=d<Uuvv}vo7-|h,C');
define('NONCE_SALT',       'AB-o[|[f|[x8QfY4NWlN^@O9t<=m_8(}Cr]s1+-J )`07Skl)}r)*b(J+mhSY[si');

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
