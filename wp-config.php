<?php

// define ('WP_CONTENT_URL','http://ghkattorneys.com/content');

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
define('DB_NAME', 'ghkazqex_wordpress');

/** MySQL database username */
define('DB_USER', 'ghkazqex_wp');

/** MySQL database password */
define('DB_PASSWORD', 'wb[@Ah38u6FS');

/** MySQL hostname */
define('DB_HOST', 'localhost');


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Q9Qwy4fIlw/_uc%gJ*N!Il/AZ.%jWj_fMn@V+PG-s6oXNFkV$/{YN :nL~:pL|Sk');
define('SECURE_AUTH_KEY',  '^6CY#WMX-SAfCQ2Hx:QS>}N?R%/w9ex#~1(P:y-c0vw{+a|y^dAIMhyI]S3:j1.a');
define('LOGGED_IN_KEY',    '&lk`=9oLHhVm;wON0pn3hws01KrVRvBEt:!T.0>s$Vd7)}-x?Zj32k~&RmRL4An8');
define('NONCE_KEY',        'ys~k>WU(v|WqJ1L/HD;c,,U~R^h2P-JpP#4<|-^2}&a;3E0 t{S)/7cX`SO/9tWl');
define('AUTH_SALT',        '[OzL2K1_JLA+c;[_!=Cc._WY;+ZQ`{*U9y5pSax(BrREiFu=1=T$U~+(ZsO8OYx<');
define('SECURE_AUTH_SALT', '_n-XHL]T{Akz)d{N< ;cY@70}9y?-M+y%v&d({tw96nBU!Bs.n%u@wg-Y6WLzcj|');
define('LOGGED_IN_SALT',   'X`+yWT%Mw:},{Z7ZkrUtBba$w*u=pfzY+B<wqlpC+24^xM%S32nTJt8Ksn)#A!5n');
define('NONCE_SALT',       'ca*/BR?F}hJET:gj,dIz^-G:uyOx6&iziHeD3Gu*w}~BCrhSGO:*a4ps;KicbjAl');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = '13121a_';

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
