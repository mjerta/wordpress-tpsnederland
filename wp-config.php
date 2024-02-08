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
define('DB_NAME', 'database3');

/** MySQL database username */
define('DB_USER', 'user3');

/** MySQL database password */
define('DB_PASSWORD', 'password3');

/** MySQL hostname */
define('DB_HOST', 'mariadb3');

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
define('AUTH_KEY',         '#*}_lvav<Dk-501MG{p>hcTKZ2_>B.L-jT%^,>/|eY<geN,kNXq5y)JoLyErijLI');
define('SECURE_AUTH_KEY',  'MbxN$Q!pN.GklC>f(MZ=B],2q`>6-|M%QvPY5ae}553I^d{u#l{,z4p9>I)G)ryz');
define('LOGGED_IN_KEY',    '/aFFnA$)O%!jfDt@72|,q_LeT5k/6!:{d@75Y764h:@@Oo*uw52q~E[^w`t[_?%M');
define('NONCE_KEY',        '2Lw$sC0>o0tE>cf%B;KqEg0zU3dZ4i4WNtWFZ,)mo|^TY3ZF|sb9bA1PM~ai-qEu');
define('AUTH_SALT',        'Uw22:aAtT%uo.umK^uN/-@tap2G~wtOMsVo0^ G(:j:@fu;#;p>WmaLgBLvqhRmz');
define('SECURE_AUTH_SALT', 'yS0AGv3OG$._ozW77rk8aSVI|2,)-bmd#_<y>NST75b%c<&QJ|Nf.e(3mjSl`.Y ');
define('LOGGED_IN_SALT',   ']l;scn]NX9^meNhZ@phl Mag[+Pt*^b6bXDici+GBx{}LQ}W}[VIa7W?9sovz{, ');
define('NONCE_SALT',       'aSP^|}&xR7!.25Xtv/LsqxNU(D|s!?dR6Q7.p7rATmB`bb|jxFK4d6I4iyO<u)W4');

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
