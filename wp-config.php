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
define( 'DB_NAME', 'Tour-Travel-Web' );

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
define( 'AUTH_KEY',         '$H2sUf5?y2E!df>CT$ln`n@V@l&R3q4Y)#9YabmC}<]$z%7nP.;yL1VaCFq@2]-t' );
define( 'SECURE_AUTH_KEY',  'zQc_kpwlLu3zQmtmTEKlceku~?x8)y$QX};]5#>DoaI9;&)Aaq7+4f~wZi+Qh&lg' );
define( 'LOGGED_IN_KEY',    'fxfW78xiUn1c|41J{7 kyYfBd4~G:w_-?<AU9f=e<gn>rz=)pPP[5`_?`$th(}QS' );
define( 'NONCE_KEY',        'Y%NmZwzgQ~q.m*f*GK73e/2uV*oD,2er|wKI-M-[TjdW([[M{F{F>PY.lm|3$nx0' );
define( 'AUTH_SALT',        '}o`G?Yi)<ivi^&IglzS8{&`ZO`lc,YMMm]>2L./qn8&MYn1u2L{<sGmUf1d)l@H4' );
define( 'SECURE_AUTH_SALT', '11HyKNG`,5pqB$lD0Fr6fwb*9nPz)Tl:k%t ^,RUuf/& 36Kva-X>t?`fh1D+8-W' );
define( 'LOGGED_IN_SALT',   'E;Skr=_Je6U`9B/f.vj#psy()^n8xOR]!rk<sBV>[uxQk,qHXu%eKN@8_2rD9$Ku' );
define( 'NONCE_SALT',       'K?mkPEY};!)62MrbG7AIF0/QT-.+<vHjI|lmxfX!_F.dlpy?V<*KAUG,DMHOIK1=' );

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
