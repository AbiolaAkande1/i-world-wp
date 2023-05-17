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
define( 'DB_NAME', 'Techit-assessment' );

/** Database username */
define( 'DB_USER', 'abby' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         ' UB`rjnX*OPX@+j<SjW/lBRA[7wd=]Bk*PWi#3)Aog.WP2W{(HVK9q:)F+TdwtvQ' );
define( 'SECURE_AUTH_KEY',  'Hr}]Yx4l]jj]AM/BED56uui8T rLV9pY rK4dt,$,n6D{cb$ykzA#sK-, e5+%Ac' );
define( 'LOGGED_IN_KEY',    'x-Uc<hGtqai>d,KnB4kelxWUbvUtnp`v{42po@vl5H ;v9t|g0o}[^U]GD#i0 db' );
define( 'NONCE_KEY',        'SEy3^aNS4!K|?[+Es7 yi[T6z1zSJ&*g2jP$8>?|SR}HcQg lqm )60X*9I)T/d1' );
define( 'AUTH_SALT',        'u,l{(hGZI/J+i*pVWJsv*%UD{9Co5zLm8p %#{r}G:O_Is/z`a Q9[`^Xw#M<h2%' );
define( 'SECURE_AUTH_SALT', '8Y|5HsU;vz2,/Ft4Q!tzkXDN_kNZ!j>rz&(w0_($(`ZUbsgr6MgQg0>3g5qL!JxK' );
define( 'LOGGED_IN_SALT',   '6FE,{Vi:&~M<$5M;Yem.tk%k,h]WhMtBfM=1:=r7J{=p[-}VRkz<rR&/RtD%X#dh' );
define( 'NONCE_SALT',       'u@wN2zZG+T :*)a=j>vH37r-Iay?BKJ&UfhaO0ZZ?|k5|Pq/W5CPO$Zkn]YfuG+&' );

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
