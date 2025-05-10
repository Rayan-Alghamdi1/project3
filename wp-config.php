<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'rayanalghamdi' );

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
define( 'AUTH_KEY',         '9s=]-* TZOf8@}=Y:-Ql,2M,Qc8I&;vGBuqL#,9f}% +4@Sr@uzOD<.i z3h OR=' );
define( 'SECURE_AUTH_KEY',  'c~wq>fF%FwFzHVlHB5@m$C+uDl3b=!K1&JoerGpm6DVUyz!]:;eRP=}seKK%rMDQ' );
define( 'LOGGED_IN_KEY',    'GTq5Km(b7nFc.(!,g^6Os-8_{2< pNuD| AAV/n|(C>;;T:T{6gX`<CY/ES{u[Q@' );
define( 'NONCE_KEY',        'sbq1[3pHj dfpu|<=ui[BkKJnzuZ0O<BS(;(P&-0$%)e1~AzKIPh8/=b4C2i1E]z' );
define( 'AUTH_SALT',        '?$OOa@Tm<2XeeaD/S8cIcqn`LEfOcS0xP C>tn8@/j*:acr9o25F5a8/|LAS@2hI' );
define( 'SECURE_AUTH_SALT', 'DyHb#TOaCED*NfV5Id8X[B!~YE5{GF9jX)*1.,|?Mk>dD:,c;Yj2zM1fx?&2=XGB' );
define( 'LOGGED_IN_SALT',   ')z06 ;`c+1tkQP5B}&^ufC4v _s}Zoc;uyV5 lKi8L2<H<,&y^~E2+6D bJwS<=`' );
define( 'NONCE_SALT',       '#o1HVT%PpzOmLw$pB}=-)L=*jn8+:P|*x2]M2@jl~,kNBN7@:e5M#R76H}/=WBR ' );

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
