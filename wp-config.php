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
define('DB_NAME', 'brick');

/** MySQL database username */
define('DB_USER', 'mysql');

/** MySQL database password */
define('DB_PASSWORD', 'mysql');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1/openserver/phpmyadmin');

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
define('AUTH_KEY',         '@Nfct`r^K7Nd~2naL:0bg>?5l&i`HJ*vCh4d9L(d>LEVw#WLdG~U[.u$6Q@?:]`%');
define('SECURE_AUTH_KEY',  'uH2Hz]Rz3P*t)Ms?v&OHkbi=^cA+mWJqLa7~0U5=+w8C==X]SF|/L/>eWl2;:Q!!');
define('LOGGED_IN_KEY',    ':TE)#~#!~NEPR8s# vsC7*nAGm_B>{3&y|7oiSP%-}Lhf>cNHL//,.l}a=^>gydZ');
define('NONCE_KEY',        'AHSqW+C6GW*e</W/vr5%*c^bn+/R%JeZp,7t{Z>R=2$yvW!=zIOwOsOgQ0hz%`HH');
define('AUTH_SALT',        'gVM4JcK4vz-CWr1-^v7HMyp%C4}!a}Se=gZExHIl2+l&QPbuJfmvt5lZ3g8RfHf3');
define('SECURE_AUTH_SALT', 'hw.hGVyRaw/Y}G$@U>]3}}UfPvc-wpS,:j;|)0WXgzD`<-m3[9]Wm<j+ GQGb!bn');
define('LOGGED_IN_SALT',   ']Z^sOn>5<j+(zyQY-Cb)n31Y.m1uAt!ywR:>`:J^B` Jq$L<YFakqB{` L?B;tWS');
define('NONCE_SALT',       '1fn>?T_s:^Eou$Z>?^TX8WQ)XWC>(PGxHh,R`YYFJu;0Fnhjeg^Z:X(u1FT$ypHB');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
