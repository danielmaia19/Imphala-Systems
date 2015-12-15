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
define('DB_NAME', 'ybmzcom_imphala');

/** MySQL database username */
define('DB_USER', 'ybmzcom_imphala');

/** MySQL database password */
define('DB_PASSWORD', 'Info2015');

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
define('AUTH_KEY',         '`ua+N@ tZYm wpQ$u<1+rI((Gvp]}!^OA~ez6X}t+ae|A=I>+@,9L{DZ8@W<<-bC');
define('SECURE_AUTH_KEY',  '~:1j~F|W!Cp/<c9{vKg.!&3V&*0U>`CrKMp:_>2IH29TOr{(,+=0l~q)AJ5;t@,6');
define('LOGGED_IN_KEY',    'd{TYIdS)p.#EdY*~U4EkoSvDI~C:Xanv?i&h)j$pENyU%t{w,n_w[`@#?bV9^E8=');
define('NONCE_KEY',        '1~nE{am)iD}@OD!WS4%3ZIf+Q<|CUa{W)t_h)R]VHn#6p-W;}+5?1G-Wk0fm[ErF');
define('AUTH_SALT',        '{TxjJ@h#/CLZ5-gC4y&_@=c*mXbA{[au;<xwitsu{mh I([@3_2}V|Eufp(HcR3Z');
define('SECURE_AUTH_SALT', 's8w{Af0(f8SQ(${CDizT_k[Phak3R6>f9f,orZ&/9S7aTQ F6U-levSg;Vyr:X+%');
define('LOGGED_IN_SALT',   'EDZe<33T^c[-}@`^n)p33[bp3V8r?8on%x$6,M..~ne#~*pQ$9.{eEtaLk6#]FEr');
define('NONCE_SALT',       'K1` ]f&yu%f@P5v12AKe!/|&gjXCCp7QyOC^x~k]6jDO)nz}bHh]|cKL-,`f8=OM');

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
