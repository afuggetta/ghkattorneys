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
define('DB_NAME', 'ghkazqex_wp745');

/** MySQL database username */
define('DB_USER', 'ghkazqex_wp745');

/** MySQL database password */
define('DB_PASSWORD', '25P2gq6S9m');

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
define('AUTH_KEY',         'usxdsfnrwcesgspru7gsprqeevhxgxmicyroo1h6hmlc5wkefdugor59yklfozpr');
define('SECURE_AUTH_KEY',  'ux7setds79j40eoa4r3swrygdthpewfbkcv7pednjiv03edigapfa82hmfu3opsb');
define('LOGGED_IN_KEY',    'nt91uzpcnf67vykcfhgqjdgqf88xk4b0qhss8wpj52zi6qfgz4zr2t4pylgdss79');
define('NONCE_KEY',        'zialxs1qtbc6sy2r0r7pzm9my8m8gvcizu9fjb1fnxr5q6qby4rb0jc8nklsxr0k');
define('AUTH_SALT',        'upda76ylx6idpql3b2ld7vm7ua4xx79ieze68qnmerpbcwd3lstj2vmegihuqwf4');
define('SECURE_AUTH_SALT', 'cmokff2nge7g71smwl6h26llunvewi2fy7q5wn84hwg5dpana2mt4gzwar3xzvtc');
define('LOGGED_IN_SALT',   'dt9alctczcyaqz3d4l61eau66y9ivn2xfjlmx49ixlcbots0ruqbj9e0yrexwmhn');
define('NONCE_SALT',       'aeo85nw2exiga4uswdzw0cnovx3lkqov00jhtkjwhs1ardyehxgkyuwuyhius9of');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ghk_';

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
