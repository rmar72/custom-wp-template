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
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1:8889');

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
define('AUTH_KEY',         ';nOUL%MI.mhQd^<06*CC3.`?B,L>00g.DNSq$UG#e.)M%$ol^NV|k`c{xCO~7JuE');
define('SECURE_AUTH_KEY',  '_~]_W&)Ka,%b5hGS<Zh/Z9Vmbk8o?J?GMxV|C|F_heB<l<R8]s&ww[eSjhM($W5S');
define('LOGGED_IN_KEY',    'DmHN7C5$~]#(=0:di9+vPPy#}u8}Uy6<aOp>/KM!<Ni[RIxWW5.-Vtc3{L;,-/5H');
define('NONCE_KEY',        '4i/?L)&NQwoI5(k4Ql1S}G?Y0oJn?W}=o<oCzq`,W_{1gFE7Se(X,<(tC0]_HbT1');
define('AUTH_SALT',        '&[xkWj#L8^U|?G`Dmlyb{Y bZPbvMkrobQqb#u(S(nj!rZrw-B$78_ xE/gXmI+$');
define('SECURE_AUTH_SALT', ' Ey RpHMS]V660H:? }#i(k6U*ayGX&|KAp<jy/f.(K)zX6sd*2>AO?Q:7]*C3E-');
define('LOGGED_IN_SALT',   '_JneB*i(9Oss]tPh<8{?NQQVRI3m!bCCy3.n1mrmHzw3p/|ZdKx9O*jf%`mQtY.(');
define('NONCE_SALT',       '^Moy-6`YZ ]HD`:?2g=<-n8QwpI9UNXd2>CWZm/.NKzXr9{!,|o]e(,KZsl;jd_-');

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
