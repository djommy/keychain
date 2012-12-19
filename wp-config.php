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
define('DB_NAME', 'keychain_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'Cu>?6cIzYHT?;lGbLH.E]O{kfMYA;R%na{/]_,V^aUa[+*jE2y}C2?@f15}N&H=<');
define('SECURE_AUTH_KEY',  'N<kw6FsrTCbUIDlgT(6kMVZMGyC1(@Y~KyoNk;lhc=aYgTsB4dj0E-)hLgE]PBJQ');
define('LOGGED_IN_KEY',    'tlN&(`XDG`eJUYkTDm|in-~!a>g59PCR#0IL0#Oo7<htKO]i,RHe8b_-Snd ^~l(');
define('NONCE_KEY',        '#.)YU(RZw6riG{XWi+mrEl?k%Mw[lP}7]Sq;*x(B_>.``<-9^b.,s_+N@[=_!O:Y');
define('AUTH_SALT',        ')S7^;$(oniQr5N*X@RGRwv+4%ZplHCBS2+l-4!%Y4{Y .+wZKsNUY>%k~y*U1Ct2');
define('SECURE_AUTH_SALT', '|JsFzH`&!ia}EsJ||,6i C&JIhu2WG}zn}d/,1{89@~q,;mZ}y(sQk}6Lk;y2^>e');
define('LOGGED_IN_SALT',   'GfC:|pN=5VF&@iaX+)<yrk3COzVLt~]>)3tpu&F^xZfpX25(Z|u>qjEwhF:giR#:');
define('NONCE_SALT',       '|-Svy/MwEhHovLBjIh;UXNC;L!J@/Lm=NW>X_ yH1-0=0u$/aDz@:4zf2-Ma#;|.');
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
