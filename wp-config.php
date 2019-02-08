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
define('DB_NAME', 'wordpress_new');

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
define('AUTH_KEY',         'tTV{;z0iQS9Zc(u1x-4n}WAshtHof,2=_KlHSN7R=IQZnn] bi}C*Mv5iV7 aR8/');
define('SECURE_AUTH_KEY',  'JTtzV*7)Bqb.ZxOnv_U2<qi_7}OPYR`()akXO+::jTm}e~jP@boWTvu65-@t~eDf');
define('LOGGED_IN_KEY',    'K${ThJX/hwYdN2;6P^)3nZXbK|LMW20jUG?X>*A+Q|b4B2JDmW<H4nqVm@@)14y@');
define('NONCE_KEY',        'sMj.rV&C*l?z`8oDL:*yo@skK=c6yQGS@+m/zqvKU[N~-_APU`-F`/2%HLqWcD:Q');
define('AUTH_SALT',        'O@i`^1|Z,O LINLn ~PY_2(8$Ql-RwDe]4Qy$Gr?TudL|A$U$]t,=q({rg7QE;.t');
define('SECURE_AUTH_SALT', 'U`68&729RETkK4[ ATi^(J]r90<Vhs/EBNM_7Hsv@sWOKG12V($JgSP:D2|H6~dz');
define('LOGGED_IN_SALT',   'p,uW-&|v)Zy[gnY1F-Y}]Nhg1^St$fR:O&-9PN>t./?htPp/g;-:IjpU,u:M)#I@');
define('NONCE_SALT',       '}kx*9;I{0*kA2iTl&%~*)q(a9@5nr=|&kM(JiG(*i2|=/e<wdBBp}pQ;#O2>cmx9');

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
