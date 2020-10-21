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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'novadigital1_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'vY=Ko(#}& $p-p%&S 5V#aKHDS,L*g2MR)!lZ2JO5a7ge4QKC#wMKR72M,$xV##m' );
define( 'SECURE_AUTH_KEY',  '16JIGleEqt!e)09QuY*EfW0[wqR-SYj^9|)2YoL3kr7&aY_q}>J7Mg@:kS.Y(J*p' );
define( 'LOGGED_IN_KEY',    'l9{sIu2_Ri8.SI;Y(:EM]w,flwznwH~H#C<!SXd(rhm}m4t7nS3s=p!EBEF=6W3s' );
define( 'NONCE_KEY',        'J5|9^-&I{MI>;K`wrrf9U-Y1Au>^reW&{g:uPoEF]OD,>#qswQd/lzC 5]5h+*9Z' );
define( 'AUTH_SALT',        '9n-<;WI=b-caR0h=vkP(a$<2eT)D70]<G@/*5yPrm[^>Z}u[>!V@;?dm.<cTmN-w' );
define( 'SECURE_AUTH_SALT', '%(pf,Gs`4?Wxa_F|U{[>mf43}>~WPXRXVa]Zlj7oxXC<-fJcEz4ysF3%nbEq*8Z6' );
define( 'LOGGED_IN_SALT',   '_)B-d-&MePHqW%/u~bHkj8C>j9o,wK]/_>wV_C<Yew:YFW`m[9ZsFO-Ytl#kU^#@' );
define( 'NONCE_SALT',       'Ko/rVY@}X1TYKu|m$VDo:g=;{Hty8gFEvVS5NxF*iuYC}]tzKG|Y#O|h4$(|WxBb' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
