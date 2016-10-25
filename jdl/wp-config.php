<?php
/** Enable W3 Total Cache **/
 // Added by W3 Total Cache

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
 //Added by WP-Cache Manager
define('DB_NAME', 'joinerydev_jdl');

/** A new comment inserted here */

/** MySQL database username */
define('DB_USER', 'joinerydev_jdl');

/** MySQL database password */
define('DB_PASSWORD', 'easyairvent');

/** MySQL hostname */
define('DB_HOST', 'denkendesigncom.fatcowmysql.com');

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
define('AUTH_KEY',         '|psbj7#YQ}=#wku)&FnEKW4R+hQ^o{!`9u`Jc#<4%/=sf,m/y><W}wbAkWzY8-jJ');
define('SECURE_AUTH_KEY',  'IS8=Daqo~KRsP|&M8u3x;6>w+O|%+k6e-!sf-[_qmTDc!j<Cn3f4M,nvO.:=B6VR');
define('LOGGED_IN_KEY',    '< Q (bWJ0bph/X}94rcJzqy2` VEDeRz|2S+OJ+c?c|nWc-y17WxF3B7J6sQD6=@');
define('NONCE_KEY',        'w_BT,=1sGmt2%[jjr+Q^-`URHBMk(oV~a|^g=XwVP@z!+~+|l<4:d480R|W$=7X6');
define('AUTH_SALT',        'Q-tTS|y:x8Cg}F}|Rfj9]j:= g3(Acl<_vwCa).TFr^Lhnasnbb+=Z+W+Z.YPJ# ');
define('SECURE_AUTH_SALT', 'y(-K]+(k;q}[Nt$[VQ~0_hH)0REw^X 0|IX9W)5s]dxeBbD=(J%X(/syK-|[&p#w');
define('LOGGED_IN_SALT',   'GuY@<tCnJ-vusx+5bsx8uq-9B-p7O*Mv.(voU,PSn?|5Y^05&JsMXoTWW}?5e(aG');
define('NONCE_SALT',       'rNII+5|bbP,|-s^ZaHJXlvb4NX_sW~c8&T!cSq ld&@0RU`F g@QbnVJYL]K+eJN');

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
define ('WPLANG', '');

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
