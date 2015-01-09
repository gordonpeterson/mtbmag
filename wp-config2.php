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
define('AUTH_KEY',         'uy{`75CQ<jc-thnz-:b5?7vWl|[V=gl<@#ZT[T)lu@sB[5|QLn.V@ma1^{+qh!5$');
define('SECURE_AUTH_KEY',  '+jP-dt9hs`sHsgdKwY1U@OnB!g%Kba4I9KNtATuRtn6QEYa?%7IK-98!-dOe0^o%');
define('LOGGED_IN_KEY',    'b^+W| ^C*!zY.iRx/q|*hA%9 TfEnhcq3Fy{l+aTEV@Bn#?WKKd_EPBb-5cf[).t');
define('NONCE_KEY',        '6)an2Zi>}[g_$4r}X)$b>?UIs|l+$M?q1v<SK#+,H&?^w]c ,P>o/U9|1=0vpNVL');
define('AUTH_SALT',        ',BpbsKyx2fGhv|hzo%u|;-cR*p#ZyUE.F<SUW3e<8Tq$+W IdNj[&K%LP+rL9J1(');
define('SECURE_AUTH_SALT', 'RJ.C0kAn=.#d)8(8>`>~S%gJ4+$s7`fzTc3lQ#U]2pTdf<|da2RF`+1-fQq9U(?Z');
define('LOGGED_IN_SALT',   '%!!&/vLe>gmxc|>eaRndJvwhJ1k/|8E.:L5H`<p&~IT`v4sc$tp2tUwXC!w|(^-`');
define('NONCE_SALT',       '$2Am$Tx`;0-9-o)/=Uc/NG:vAB#%h,Q&g5 %5sEZ4Ri<lV|~)!mC2;k-&+}a[YKi');

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
