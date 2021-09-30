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
define( 'DB_NAME', 'projeto_teste' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'E=nW3%ZSL-ZvrTEteypa|p8~g&zHGD@Fi^E&fQ| UQVe*K>w=G*V/8sqZIHw,9b~' );
define( 'SECURE_AUTH_KEY',  '23_EETH7!;<WNy*h5Mej.aG&Z=GOf5o~>dr<A~BKQ?Oil/LZs2 LIa<F[tTnVCH_' );
define( 'LOGGED_IN_KEY',    '.h93(ZX:X8CHZ%NN5@Ib|&CvGwb(6RPfll|rjJ[f564-[;9%}W`8)5qwPjgijctS' );
define( 'NONCE_KEY',        '7i%2|y,p?0$OOqvJJX;7Sl>cY4%wZy{}y[UnMV4$0[7L;a:[b;/929d7I42]mU2&' );
define( 'AUTH_SALT',        'cP&UC]%R!{7%V^/%/C{]Gi-u`3.xL(O5fET2(O$BN5Z|VqG}5 Y(/VF6Y%iHW3&T' );
define( 'SECURE_AUTH_SALT', ')`C_4Vb 04@SJ&ai=(Xpgc0eyG5a1&,!Z-O{pV>C6&gE{_e,#BrB0,c~woa@qd2B' );
define( 'LOGGED_IN_SALT',   'Ic=p`74?|6pVj;SwICSSg:$ee9v5E!`8w(</ggW4ssr.{):`nNYf+`|?y#cTmdky' );
define( 'NONCE_SALT',       '2QgEvD5wTe)0e,]B^(xAr}XS%_:c/~gUp{[LW;9LK_Z_OG`Eg;W,-^W4YjsLN!9L' );

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
