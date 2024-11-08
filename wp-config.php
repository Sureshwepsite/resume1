<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'surez' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
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
define( 'AUTH_KEY',         '/n^Z>0IP kW#1pA@eeat+2{40=+(;~$xp7CA!?ANOW{e~ixxDg514-6I-Khwge=)' );
define( 'SECURE_AUTH_KEY',  '0wu4Ji_B+Z=gJ,)T;)yG5F-GCT%55o0PkV}2s}YT2#w1/J$:1%XF@_=;#,:8%@OB' );
define( 'LOGGED_IN_KEY',    'V.8I^;KT-fC~0Q%U/]cZHq&f^cQ=(Ac;<krIDyA}>7|?<H^_O0X2<-oUC .S61&q' );
define( 'NONCE_KEY',        'ccQp=,C+JJ[WS.67gK4a<2E/%HRc$^^$hK!vFGM<-zt9s*a9^ZkN(qI3Mk.&vE$G' );
define( 'AUTH_SALT',        '@Y0S|-klE&U>$N$Cg/M-V$S1HZQfA4et>^k:#WD `vEnVF`%sjmkn5EFHa/xB&Yn' );
define( 'SECURE_AUTH_SALT', '@:nGphbyP^Ett<.z44>SDT?JxgOFC&aR0Mcz$N],/roN{-yseW;a+cje,w(f_!r?' );
define( 'LOGGED_IN_SALT',   '$.rkkXFp!fSn-U:8goc2 cUo0UjGoyqB~Vj!&@Ptd@ sl}KJV&|wkUvLV5|GL%.J' );
define( 'NONCE_SALT',       ':2YT?(1S[8/ MJkjf%C^O(oskGqlY7b.d_V2ot{=IhD]$j1o&#5lxj!v{H_QApP%' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'surez_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
