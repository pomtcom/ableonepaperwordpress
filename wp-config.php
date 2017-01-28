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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpressuser');

/** MySQL database password */
define('DB_PASSWORD', 'P@ssw0rd');

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



define('AUTH_KEY',         '>A^$i%VkG=qChsMoKr&wi|;|tA&?*NWhjfAffV6hSp`-Y^VlHPJ-f%!{[P#7+y5]');
define('SECURE_AUTH_KEY',  '|M.3wt%sAgKR Q>lt^>;TKO[6#}/y2_fT.dy].buG?|$OU`Fz$G0SMIFj|!~iGD+');
define('LOGGED_IN_KEY',    'kr%mftg9CAtjH*tkj>ES>*|kj~_0JnEj/W,|Ft2dRBq[.t#=EY>,on3gfbZR~Fl0');
define('NONCE_KEY',        '?[];PVhLWX6N| |+)n^zxotH?4X*PV1-ibrebYxTl3-f-BrEarfuC<x~ jt/@1<.');
define('AUTH_SALT',        ':m^%Dpd- Ohk|x(qmX`+)HNN4M+:-BI9FBQ%/keXNKOiCv?fGXcD#~EK%PP2@9z_');
define('SECURE_AUTH_SALT', 'Kr{9}l3)WxmSHh_Q5)FLo2SN w&e.+{oA0XQ?/7N=|~fC?Z(8S|n>8o.ajk/-uz+');
define('LOGGED_IN_SALT',   'MnT8[y),-YK_]0}`,r+h<4E @TCIF|}A!GW{|vriBf,!!GYlqZjZN2DT+Kj;l-}b');
define('NONCE_SALT',       'Nl1NUK50$gpU?}tV>qUa{%%|:o=J#T~bQ1j20hq&%j-=b%k|6^C__H~bTfDCUR1j');












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


define('FS_METHOD', 'direct');
