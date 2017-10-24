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
define('DB_NAME', 'lotusbeta');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'BFoB}V&-=RrxWzls0fY8qo[zDH-)0V,mOr]-KXmU?b^ugpIuA~B5]t:*>5KTf%ui');
define('SECURE_AUTH_KEY',  '$uMs XZMx/Lr/9IScF+hWZIc(H1X4bYp  ?h{A;&:}8Q!:q+2f}jx0#,y%?Zeb?D');
define('LOGGED_IN_KEY',    '1)k~F1WI2+ENvU PJ:r66#nBojC+{!RcbeZpm~<}Y!XA24g:a+m|hdV5!g1</[KW');
define('NONCE_KEY',        '[WhtDBM~=dOmp<F c<ou:;[cyH8U4Jw(t`EfdUA`cLU%M=iC4Nu[OAG~C5ruSUQd');
define('AUTH_SALT',        ']]4}+ov&;^# 2xi|nyhGIApxasv@WQr96/4R}Dj#S?$(d-|F$k^X2M__SR)/rwhH');
define('SECURE_AUTH_SALT', 'l+9MX;Z^Z`0o-{!^Zi-(nC.5#]hGODN%u.A XW.de|1`]Fi4P1LCxZFagynJQeJF');
define('LOGGED_IN_SALT',   ';U!aa4r[%W%v`ZtzdE#!Atkc4DIXlrfq1Z=U%aQ56z KbLAT^NrEVo3$z9z)ENG~');
define('NONCE_SALT',       'j,p!?.q|z$.n9?w0NH8&.BL[7If*DS+k6j7j#bE<E/-Jy*]:_u{j0~ms4N68QOIp');

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
