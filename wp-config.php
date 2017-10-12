<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

//LOCAL CONFIGURATION


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';
if($_SERVER['HTTP_HOST'] == 'nc.local'){
    define('DB_HOST', 'localhost');
	define('DB_NAME', 'dev_nc');
    define('DB_USER', 'dev');
    define('DB_PASSWORD', 'dev');
    define('WP_DEBUG', true);

}
//MYUAT CONFIGURATION
else if($_SERVER['HTTP_HOST'] == 'nc.swiftconcepts.net'){
    define('DB_HOST', 'squirtle');
    define('DB_NAME', 'uat_nc');
    define('DB_USER', 'uat');
    define('DB_PASSWORD', 'uat');
    define('WP_DEBUG', true);
}

//STAGING CONFIGURATION
//TODO SETUP STAGING
else if($_SERVER['HTTP_HOST'] == 'dev.ashleyassists.com'){
    define('DB_HOST', '');
    define('DB_NAME', '');
    define('DB_USER', '');
    define('DB_PASSWORD', '');
    define('WP_DEBUG', false);
}

//NO HOST MATCH? DEFAULT TO PRODUCTION MODE.
else{
    define('DB_HOST', 'ashl41301003227.db.41301003.217.hostedresource.net:3311');
    define('DB_NAME', 'ashl41301003227');
    define('DB_USER', 'ashl41301003227');
    define('DB_PASSWORD', 'fP6x-LiniM|i');
    define('WP_DEBUG', false);
	$table_prefix  = 'wp_b4prhcy9x4_';
}

define( 'WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/' );
define( 'WP_HOME', 'http://' . $_SERVER['SERVER_NAME'] . '/' );

define( 'WP_CONTENT_DIR', dirname(__FILE__) . '/nc-content' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/nc-content' );

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
define('AUTH_KEY',         '&VF8Sd2bt2Z>}9^F`I^3`sD7 -X>8bQ@:w?+YX#.x2R-,8Xrpf|)+P6]uzq;QY&#');
define('SECURE_AUTH_KEY',  ',nr6lHoYyOY~9Re&A5z#@5KWs4:VwRU[OdvlJ[@?)/8i4j6.Lc?7olTH-Cn,-Q>5');
define('LOGGED_IN_KEY',    '8Hz2.hHzg$MD)~}62l;yO7j&((AQx?eLtnQ3<sL:DER.G2sR,2Z~Ie_#2|cE6rb;');
define('NONCE_KEY',        ')%ud#.FXMOg1Z1&`l!Ik}iU5Zt:-[Q*7R+2yxbEW|z. 3byz3]b.kv^[>h[^G)0C');
define('AUTH_SALT',        'am;>sr|u?,*#<NJu%YGH)0nxPxYt#27nvm8z`(parY/hWy3NLD`(4;|Y[|F$m0~R');
define('SECURE_AUTH_SALT', '|}1I7dVH )5iRW0MFnPsN/p7BUIS4Okgokhy!:=Pq7qG[l@+/yhq++tuL`?(qd_l');
define('LOGGED_IN_SALT',   'p7OH+-}W:Kno(ctPPvbZ*E+ojI{Zcy~;b^rdY=+(:kN[)W<{uh2H3cNB=5+G-{|}');
define('NONCE_SALT',       'R@r{Ooli{^|J&{%o.$Ul|bE8%wi-22JQHARIu:0J/X~{51|amN-Xm!`trpau)uP}');

/**#@-*/


/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
//define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
