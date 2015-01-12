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
define('DB_NAME', 'db_testmtbmag');

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
define('AUTH_KEY',         '<8!,*D=.{hM!3ZLa?z!u_TD+i6Jxh7sIk%QW+Tfc9POE(c6iyp8u%Ho1XGp!y@; ');
define('SECURE_AUTH_KEY',  '|WU+m[y(pZ;7>fTpmmO%=v?`{nk9}EM$s,2S5No+3Rx6)U gK/q}hxmf6$-2-YGu');
define('LOGGED_IN_KEY',    '4v!4wB)ow@]m`}Yzw>C!rEkp^@j4(Q>9<v.y[WHy62KF#39It/1i0R-L;JAfC]-}');
define('NONCE_KEY',        '^}X/*!BV[i2N|bF*N?[o_vQ@16+zbCIwrnpdDKf:Cm$shUOeBcK@)+s@m3{?MadD');
define('AUTH_SALT',        'AhQ5ylQij.=-3+C.Z~$npj=SAKwNn!(D)tFc|xsS{TGpX*;O8s<gpgu#&LwtGI$3');
define('SECURE_AUTH_SALT', 'ZmC] B%?gE&7RzFQ=A/cL/w#?rE];78%3Yv2XH0yEI#b&j&j1w!{~z+]`pyNM/;8');
define('LOGGED_IN_SALT',   'Z:N.n7Qs!7l.1!kjG$#MZYeU&rqS+gK(,d#8jj4T5QlqX}^JlR_}X{lT|q0Fz@ss');
define('NONCE_SALT',       '?3N5|=NiQQ-P|xF|`9qV}ECY:f.Unvqr^wIB%R+R-w*DCJu6)*iU_!r;bUboXR+x');

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
