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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'crookedtree');

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
define('AUTH_KEY',         'V?f=&,a7J?#gr%34w[gqLHy|aHuCDiz83-&+Q}0v-PD,N>|MV!j&SRe,!WA`okzH');
define('SECURE_AUTH_KEY',  'G.WbNt=Yv94[fA?8|;(i0%|x+F1eU3J<=DUr: xN/3aJ=iVH6We$)b_@OSG6eQF]');
define('LOGGED_IN_KEY',    '@.F*j]qFy-RbI?X*H9y=q$t<1CQ*LLr=jmmBSt`:<a&XxP,ix/OLsD^$`+aMjP*K');
define('NONCE_KEY',        '@428Swx#OWR+m!uoZg9sp+&}!n~KzSl%^Sp4lMKAtIY}K^c9&NI~i.7#-w8.,l(;');
define('AUTH_SALT',        't;$UxQkkwz#1!u.SRW6f3f5R,ur+p zAqCSqD,@6m?%! )@_?^SM`Swd;I}~$=(M');
define('SECURE_AUTH_SALT', 'IKhxk bgCIg`[-`?wmdltT#3`ax#d~wR~_Z~^c<DP]t:;9n;N|6<7^|X%xR)+5R/');
define('LOGGED_IN_SALT',   'K9Q8{5CTiLodK3|2|]LD3iMPJh%-,.Pb4EP%a}|4-0t9}@.3A%ySXt2F:S.^.L^J');
define('NONCE_SALT',       'N[t?G,&iJQ#-l%L%JE-c[_L+]amBC<f<Udteh?,_OFN@.- Qrz$|FlHlJ&N-rO@w');

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
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
