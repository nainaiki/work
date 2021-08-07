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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'garbobrid' );

/** MySQL database username */
define( 'DB_USER', 'gary998' );

/** MySQL database password */
define( 'DB_PASSWORD', 'sa989s' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'eC{&o:pf]t? <nH_vEmo.,80Y_/5t[Z-LWWkwo] +AIH.~#IC=}_.s*gmW&<AX.R' );
define( 'SECURE_AUTH_KEY',  '77f+`FQZ{0sQGW_ZD.!l^tw7;&l;*X/M^n;:/O*j~w S C+GEyw`7DI0R6-8<%&M' );
define( 'LOGGED_IN_KEY',    'xrP=Y?6s(QB;|q>Ecm,$!Kn_~]:Gz:=oo2trv%dL}px`Z~0dBULcRAum[-f@`rIJ' );
define( 'NONCE_KEY',        'XImzW;Kt`=qc?Q/<94CUqDJ1X.CF^X}ozCxv:` ~jw&uO}w1DMvz^M-F~BS<K0#B' );
define( 'AUTH_SALT',        'J{Q%X`(/%xcn|[-.OEby8jMR){{(p9si/@.L.j@U5B@A|N#N}L4}%?IhZ[u65.};' );
define( 'SECURE_AUTH_SALT', 'A[[atTLpI>A=Yx*L&ENo>n~0h]b9GBx>[|^}i!r1={Pe9k.iQTe*$%>M>tjN@s(2' );
define( 'LOGGED_IN_SALT',   '>0:.%3|opfk)wbwFuZiSo8M-61zSh^(_4uk!]a7oE/LUwHnb04> |I1p?riy}l*c' );
define( 'NONCE_SALT',       '76B)u}JuakmdkNKigxD,ef}wWZCfO0Ji&sSsgK^I7qByrx Cj][no 3(q$KC3@@n' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mp_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('DISALLOW_FILE_EDIT', ture );
