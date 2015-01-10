<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */


// disable wp-cron
//define('DISABLE_WP_CRON', true);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'db_testmtbmag');

/** MySQL database username */
define('DB_USER', 'wusr0005');

/** MySQL database password */
define('DB_PASSWORD', 'ecevo243');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'I*[g#bJ`7e2Q|5ahS9f QT1nSbhBoV>$G}aW-R~5Zf922OuEF&t>gZ}TK^)U<-wq');
define('SECURE_AUTH_KEY',  'ie>>6J#A4##@! 3t,{&}Fn!;x+|s@g@QVRfOkMxr>d}+|NE1>])bf1}m8?lOcN{3');
define('LOGGED_IN_KEY',    '-X^E3iyDObs5F)aq,dF3&_q<{rPYr<kXGxR1^Y, VtOTPW=Gd,]&{c6.n83RZCgR');
define('NONCE_KEY',        'kHMVy{dRSU[YBi5O^3Njq!n<^.~r!q4^I7P)VQ!_kDG{6J. GwHYmzs]7EFmfkR_');
define('AUTH_SALT',        'eQ/6ue<Py9gWk8~bTN|Xl!vo5fArFsEw3eE~ Om?o2dEsbad9A-9PZgY]B_6K.Oj');
define('SECURE_AUTH_SALT', '28w:gd*%R)GR6Hj^=8L7&ue{)SQu.gfs|Zk}G*()9Q*MlHx!^O`[YWMS/@9e:8{(');
define('LOGGED_IN_SALT',   '*ck9YBfGvYeVvCjg4g5etSQ13a3%0q:aYL9}q!8B`W+HXjgYF^0ME||X%o7a-FG]');
define('NONCE_SALT',       'jlWAGAry6X$ BoH0B$>_RD9+~tXm+f,./n4d)MN[l)<!bwE2QM@6``Z (.q[1*9T');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG','it_IT');
define('FS_METHOD', 'direct');

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
	
define('WP_CACHE', true);

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('WP_MEMORY_LIMIT', '64M');



