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
//define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', 'C:\wamp\www\imphalacms\wp-content\plugins\wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'u366736969_db');


/** MySQL database username */
define('DB_USER', 'admin');


/** MySQL database password */
define('DB_PASSWORD', 'arsenal58');


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
define('AUTH_KEY',         'G7^^*tV|#L=UO]]a[_5hu[q_C&[.+tAes#$+Jaw|2|G:&1kbX&}Qt/!.L5q^Tf2U');

define('SECURE_AUTH_KEY',  'rbg:~v,bf75c}hclwWW<Lf-@gX :pDg79^GHV&c 4i{cQPsRPyc=JRbZi+|-)<RO');

define('LOGGED_IN_KEY',    '#w|jx+~%Iqp;A]|MUAyC]kJ.^{l*VQ?Ngk?KorW}3,qQ1Rbm-vpk SN-x^u(fzse');

define('NONCE_KEY',        '/2yru~MdIREjM9*RV?Q?|P<>WXnq0+`3&ja&|XByvToLDe:2%IDD+=*0;QjXg7+W');

define('AUTH_SALT',        'w$w-l1MTz|9hT /lB~8pUlMV>*=@m.-BJ~|-=^jTz+j$|{MdY}-HH[|}hiy+5!63');

define('SECURE_AUTH_SALT', '5/rV^i%VQh|P%ep~T26098dR_^bh*84|ec@?Wi7D*+N|0*7]!;>UfXK`^YXm;eg1');

define('LOGGED_IN_SALT',   'nC@+h7qRh36CJP+mXlqEabxb|[z-|ah?Cr,|PXAw+e4x<nv5,wa7*ld)~ov}0m&@');

define('NONCE_SALT',       '_m6-F/o?z@)(qA-YM]Ni^cQmOz}sYwY_~k.jLoQ:qoNF`.GY)84k5bXOCY*?L9T_');


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
