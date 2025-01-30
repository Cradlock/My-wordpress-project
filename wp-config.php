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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '+wupC~$};nb_Hf6fpY9`H:Vx`jabK3f26e10bK~A|A#m.A>IWD_n/M2yOBJ(@V*n' );
define( 'SECURE_AUTH_KEY',  'cYuZ(I PW{$f2bUwrFc]tCk[HS^N?dj~R]OIeOrOc1T+oBT= o9BT:;v+?@/tB#n' );
define( 'LOGGED_IN_KEY',    'InQpV}HVgcT/(0wWu+m&p*SiBo iv^)`Nss_;:r^rNVr*ZY1V1TuRU[.-yPu6}ff' );
define( 'NONCE_KEY',        'bZ42lqQZ&1I)@5eLDRE-A6S#+dvt:4(] <<K6|MV2{/N2,>mp m#84f,9Zgs#$!D' );
define( 'AUTH_SALT',        'qu*eC%DeL{.!nU3-6+|j;#A$8e5;Mx@.0i78_q{KbEg1@5$#{@W@pxi`/=[kKL#B' );
define( 'SECURE_AUTH_SALT', 'X)~EWm4(3L%SDpbEhdEoW/ZJ}Y3Qu-nX )jP.WF&Z<N|%PzJ_i.[{decT?.2T2v/' );
define( 'LOGGED_IN_SALT',   ')^qlvG$[@m]-~CfxHZ2+FBOz}J:TIQ9zqpJr46MRj<y5LQcZ!_*MMlPMWA+wT6eb' );
define( 'NONCE_SALT',       '3R%h$>m8lMvgVUsF^8st {NNBKz<X[K~V+:qKHQ;drvCpT))*TL#B tn:Nz{wdVH' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
