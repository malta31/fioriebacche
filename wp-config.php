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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'fioriebacche_db' );

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
define( 'AUTH_KEY',         'xkscNui lB?h9cdkoyV=(3N~}lA1)1+E8:!rwt[;0D3cAK0A*,Z]2ZL#Y3$? 9en' );
define( 'SECURE_AUTH_KEY',  '_:{Y*Qj-=I50D8<d3R~!$I4q4SxNR(.Q[hn09G0[%IA_Uo[lGU`P`s6HPu6ham~L' );
define( 'LOGGED_IN_KEY',    'B*/wg:BFB6;_d,!SKSF|]eK4wT:*tH^UTJ=Eb!=w:X)q1HDYS#/g3PNyzG@A]Gw,' );
define( 'NONCE_KEY',        'g<Zuyf>rBv0w*Ksh64:ZIR6ycEi0?33zIr2]V2mYQ[&EUWWVm6[3MqX;Re?}4~Jk' );
define( 'AUTH_SALT',        'iViHQS7kOPzvKTV[?gM|VB#fkMjTRm9E!qA~BWhZUmgEvzAM~1{MJQ.~#Z7_bZKj' );
define( 'SECURE_AUTH_SALT', 'C)s>N}+h,2D|C_Swfqv(+nd[sy_}:Pr>d]/+krs,Mwlm.4oqO_;!-`-w*tbr()aR' );
define( 'LOGGED_IN_SALT',   'J~PLkti%jSo8#v5NeSFe=Iw]K(y7EFdOLi!t Jx;c<15;gdbvl-b,*Nf10X]bW?3' );
define( 'NONCE_SALT',       'e2%$rx5Uw|vudJe}pQ|VE/HU_l40Y0ApT8Ws23O]0siF8uy=1@h??3^@B,5tjM.h' );

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
