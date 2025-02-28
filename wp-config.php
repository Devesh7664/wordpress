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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
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
define( 'AUTH_KEY',         'XL5npy5mpxZtb9A6d,3+3];MM7U>hd=W[0V6eX.j{~tZp3FJ^BbYGbC!W1 a]JcO' );
define( 'SECURE_AUTH_KEY',  'v5K<N@TKEDIuv~zA-um+)*eh!byLIb}ECiKLh$l)eQ-g|gXEX@_`quk y/@*UeuS' );
define( 'LOGGED_IN_KEY',    'jRGcU4w5JJ/sz1e;sg7Tv%*AegO<1SLQq6Zc?[2TR&#+wPaw6uQG+Anb}I+l9)GN' );
define( 'NONCE_KEY',        '/bch|:Dd>PfpcG5Z <@.SJQH5j1OaH9v.PJ$zaq4BqnHm064Z4RrAqB:ex~giC6t' );
define( 'AUTH_SALT',        'G}qu)EipJMn:gkvh/==S7x8n,sWX#]| O;uIii,;P_K-7u)=>ybQ- R5i2z$-:Wx' );
define( 'SECURE_AUTH_SALT', 'H]jM1:xM:J6@-}9~QCNMGZG.-i&21E$;}o{HyOv7#nq2&Nx5B9x2 1|roig[K;-[' );
define( 'LOGGED_IN_SALT',   'MgJDGE!2*H~vnpo:.]I[zW]gs,ONzUO$TQ6P[f&RGC-|4oPvi%Ml9}7@_(Lk7[Ai' );
define( 'NONCE_SALT',       '$7?SY9wxZ3R~s-ND7#e#Vy-^HtL<YwZ5+nHJ?2Wj!wsp|(*1XAbpBq~S-em1r{6J' );

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
