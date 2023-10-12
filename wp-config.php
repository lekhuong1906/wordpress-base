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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_base' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '/i7sl!7;U&,XmIkL:z$h<9Pxp*|l;*Tc1*HN>) +|&<jbxoulV)m[O+ueN]9!^C]' );
define( 'SECURE_AUTH_KEY',  'i2)k-S^Sn0)gUFv>] /kL`3i49OKd;5ks]-`!Ym!G}8#Zxc3wr Ml9863jUu=c7_' );
define( 'LOGGED_IN_KEY',    '}~{(slsQ]3oTK+Ctc]rQ1x4.wPdh3]KZ6)|C2JIoA#:U(jiJyEra!}}4,^1`sQ2q' );
define( 'NONCE_KEY',        ']Btmz o[Z=H_9)NwT=I55>W U*f}k9qpD5fuB[`OuW(vjx%-_YBM2R?wPV&Vt<+u' );
define( 'AUTH_SALT',        'pjqFsT8-wxHp)NpJu%*Mz!)8Sdc4g{q~Cd<)^VkkTL| RzR /wYVB/hdMp?oJ5j$' );
define( 'SECURE_AUTH_SALT', 'OA[6qnjN<IFp]}?CkC,%$Wk9[(C _qShoSjDef29RRQX*}.;m:}ZPmbO8g;mZ[(x' );
define( 'LOGGED_IN_SALT',   '}Wbz$$~$rM7sl@1f!=F@9XU_7vNb6ZoCq~L{r`Lw`A:RZfni]]jtLxu(wSC.>x|<' );
define( 'NONCE_SALT',       'BD(Y*M$kj}yW!Dd,M&VE!;6/%_vOFu_1N0$h~ Ozckkj4be:<Wg:*_Mn8y*t2Xgu' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
