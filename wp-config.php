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
define('DB_NAME', 'three-c');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'TL-5~e%~v6D.|{Qr}!-blMWt>yYASbqS/;u?KB8X(&Xc?_!%`@zz_5!u!dJ]GTQ6');
define('SECURE_AUTH_KEY',  'XGm]JZ?3,[LKKYO<[dH0xZA~=4_HJxO@mDs$&!9.Mhu;39g5/s <<T5)$PyPgLn?');
define('LOGGED_IN_KEY',    'L$81]/lxJ^5)=4wa<h`nYI~Had>XUMj1a`@R7?->/o+&XwP^Bv5j/LprG8YG4i@i');
define('NONCE_KEY',        ']}s4V/L=7`rT.yRMoU~I6S1yLi~]1~R5lLLbdt7,3GsS#,<Q#r6xI#Hsd0]5U2_k');
define('AUTH_SALT',        '%sb`=4|1,cLez;UOC>S?+Y.I?d{-R B1fkB9l?]=0smU(T16n*ePrptH=$NW+5Kf');
define('SECURE_AUTH_SALT', 'wt~8Kqn2`XLY.^lIe&z~27,C2UepH:JZoj;:o(m#X_mw[7iq|vyHEM]9w6#|- S$');
define('LOGGED_IN_SALT',   'XVUA(Owu*Roy%Q0`4451v__L!t,.e{2U*sFAM2sedvG?bzb6M._5cws<?%M^IBD6');
define('NONCE_SALT',       'Ns--{LHnRI&rIIg5kAT[K7VrNrr4}UgKkD6u@pqrJl^;L*A,}xGT#|SpD{/.(n[-');

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
