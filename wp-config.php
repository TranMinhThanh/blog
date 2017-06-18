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
define('DB_NAME', 'u553447175_blog');

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
define('AUTH_KEY',         'S%w.NwT.{(wx)~ADVHwP/K<V8UMn+nH?-[&vFiOh*BE#!7Zj4WG<a7JnO<#EYKkK');
define('SECURE_AUTH_KEY',  'e;H1kH.@/kpD~*:[3$mEt3v~ix-ZEwiD|9f#>[Wwj{Ld*GN1bxdtWZ@iycnhmleh');
define('LOGGED_IN_KEY',    'f{nNIv&lQmb 4L;/2Sf8.JIC{rXO;D^W+(_U*Mtb>;#3)Tboq! .R()5eO,0vRNj');
define('NONCE_KEY',        'yL^GEeL[wQoAt uDAvpEh!i1F]La&TAdwu%742&S$&$30@2c6Unf,YkF?{7Xq}:[');
define('AUTH_SALT',        ');(09#HL#rh_J_5/A<k[A&pAZYY4nywn-<WG:X1:A!l5}1VX#k2#^OY%5Q_i.CK1');
define('SECURE_AUTH_SALT', '!f;3vFw.iA0K/j1FM!v w?OX$o/z4JlsST+/J.LQrzC8wkuhI%06(+1drDW>$>|d');
define('LOGGED_IN_SALT',   '*.fb^K6p<h9HX!K>.cD*)`Ha(BgDtr|n;Cw)CFb%)!:s??2UGnjp<ocN%^N!W>8N');
define('NONCE_SALT',       'YYpV[(|pV3<wZmO?fp0X9qzZK3.E}6{0`cZW;{si>(LXyPJ$-6^4P0~FZOQl0U!s');

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
