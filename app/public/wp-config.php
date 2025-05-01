<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'railway');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', 'mnewGHyShBiCBLyHWsNBQEIbktlPiTdh');

/** Database hostname */
define('DB_HOST', 'switchback.proxy.rlwy.net:12401');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');


/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',          'srcSgN_6/#wwf/9,d.:[Lq}wl$D`jELQWDE*/O049N~{wh@rS1+m_+9b#-e_Dkys');
define('SECURE_AUTH_KEY',   '^w*f6[8?#j3a$qW2m~Ujihb~xLG3b`b>s7Te]{*Jq.fG<=L)}X*K0+1!5O~4)67&');
define('LOGGED_IN_KEY',     '*5%^Whg p#(~#YU ihbXYl#^Lxrzj,vHvlbO8pp?/:TI.L+*&6yPP[(-5+r*@3U-');
define('NONCE_KEY',         'PILoLT5y o`8N#+S]!iX$~aqg<f>w[!3He!Vjvn%aH:e?hYM,[m}revV*..Khdmi');
define('AUTH_SALT',         'be?e8<Vy >4zkG9+=VX1!PO1DlEu./*s4]ja*1t40H@:CEM_U?!=V>1T=7;?QUId');
define('SECURE_AUTH_SALT',  '@9uwwtijK1C2%Z?Ef{GziX.,cl{6{U5~4cX_M?A3lztw{`O}cKRmwu %y)(^p!/y');
define('LOGGED_IN_SALT',    'GnZp-*}amSn0ao,n;i[@EI0Hinq#vP6LSTd:<3/sb)H!y{rIlX85o]wNG[D6_C2~');
define('NONCE_SALT',        '_oe^3#(!8D;U^!q5O9{^D:/tKp&k>NbAIL4*i|Z~dq<1naV^G@2HhsRloW-g`>r=');
define('WP_CACHE_KEY_SALT', '5}kNK`c=>GvJT_-A5r3aEC++-EBHJ#!jD:l8R:cuy_uew)8o;<a[nE.J`q~mwd*{');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if (! defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

define('WP_ENVIRONMENT_TYPE', 'local');
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (! defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
