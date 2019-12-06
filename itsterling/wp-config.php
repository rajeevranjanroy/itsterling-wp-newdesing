<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'itsterling' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '}w8S<t?^l-!2B)JcVb6`!V$T;PSr5j>?z)=waBNmD*OlKP+WbSgJ2Lu<BV&2}rm;' );
define( 'SECURE_AUTH_KEY',  '+b2iQO]65f5}za%=@Q{q}Vxw4o>3meB<6Tr?+G^Y_T*}cq9WkV)b|{63)x0RufxG' );
define( 'LOGGED_IN_KEY',    'B!mlbS%D#7RlpPGw,5=jZ1g> AS&9@!98]JU;Dc{CDjg|}:nioljTIcmt>|y(8w|' );
define( 'NONCE_KEY',        'j(/h^}OgNJf&*&RQY*xXG<eX)z i;UlefqK:]38:Df(CINdq,jlVe){6f@(]3vep' );
define( 'AUTH_SALT',        '=xYvdDYz?~u})l1xr2 pZ9`c%TGpR/G^O<*|/*:O0Tr)g.^p0|f~jo=Hko(8*,x#' );
define( 'SECURE_AUTH_SALT', 'YG9%XfVnV?py%aKLx(HhxZ/*w{%Uq_U>wfQrLppL(c{/B^k8Ui8egEX(yW5|8hjd' );
define( 'LOGGED_IN_SALT',   'd``EuVy4UMphH(gXYSsIbaE|hEh#U-,OQhc)2t`QeUx~vc:]/gZ_=`[79D9h`k3C' );
define( 'NONCE_SALT',       '*/CohpO<XCn;NKsgLuu&rXGXRC_Z>c4<OBTso|9ze7V.z.<k4j/*%FS|}a~Y*M7Y' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
