<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'mywp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '!rk3~:<b&4C7s4|s[QC}BM| |}#!.(C?Si6`4QyMv(1Q{zI0dbfSuKw|s=R-++H@');
define('SECURE_AUTH_KEY',  'bSe|gOq{I{&V$U|SwFmQnaE4h>#X%}U6V.jl. -*alN=pBs-tFq-=5{m+2+D>!C>');
define('LOGGED_IN_KEY',    '|4A`lr5p4CF(c#kfQmA>g+t$Ke|M=-j-r8MTFR/0$BT/c}VmNNVDIfHalShSV-:-');
define('NONCE_KEY',        'o/IRi0Lm%/.FJrsT5&XWxS;jU|LX/HH-,yS Ysj?LZ~ygP$)d[n%L!@TQG~u)B((');
define('AUTH_SALT',        'e9W~|v)+h`?zZ%>h[!Jg3n2);}r+UWrW==MIHHZC-jO8(Q/+[#6pYqRmUzq{=!{[');
define('SECURE_AUTH_SALT', 'HvoP[}2f6{f`,DchM:q$yX_2aqn`LxvxaVwkTM;`!i.#,]>KIkRlf!4ry`l!!}{a');
define('LOGGED_IN_SALT',   'X-eNTvrQ?E*IE2(j-c~YocQ:E Gd^)gMQ<Ee.&z:D*d?3sGFiJuO:%9p!E~+Ijgw');
define('NONCE_SALT',       '>f)W*+AjSg-@OG3O[M+@XF2}#},IC- wde +a[$,cehx5v)zA-$t)NH@4UTF4j0c');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
