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
define( 'DB_NAME', 'beautysalon_db' );

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
define( 'AUTH_KEY',         'LZ0)*iXCJU9WtMcsRDvSY#<PUxj~V*_,!G9O{ XZG_Kd?O~X3/&:w$6%P3!tFCxT' );
define( 'SECURE_AUTH_KEY',  'iVE?Ao>dysG(=#4+J?PC/{fZ$)!.]U8aAq/$nGK]85|1h]XkahZ3?_J`&.T,+j=6' );
define( 'LOGGED_IN_KEY',    '>cta^t].H>U`KfA0h(@@zF#m/Dp>RM.<eEfPx=X;1KeF}YFCG@S)<G>PxJ_+|B;S' );
define( 'NONCE_KEY',        ')au2%3e+ywpJ(t$A0uJ|XOU3SmC z%fYvecNfK1*+zj*?D;GWC9.>0Efi:{-#d X' );
define( 'AUTH_SALT',        'aNmF@<,;+xo$<$uX?!9J/qy|>>}gDQahX07/Znk?}*0;e_V4=jZ- c:V!e]e?:cu' );
define( 'SECURE_AUTH_SALT', '~-wlpm8&t ^iaoc@$[b)1$Q[J&4;|)[z(ae.SQ8zPs,VuBmDv,rci$[Iplhrk[Pi' );
define( 'LOGGED_IN_SALT',   '|[s5/d_./(*bhAXC_=K4V`C4hLL?aZq#i:Y`DbpT=fT<j.aWlOh[0QW|Xgd[/kH~' );
define( 'NONCE_SALT',       'jK%b2Hi$O0+uF5>C,O^h$i3oo>lR)89ACD}Z;kmmqkpDIh@#+O]R/@%`Y;P{ +o}' );

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
