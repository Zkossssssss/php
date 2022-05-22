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
define( 'DB_NAME', 'i03_wp' );

/** MySQL database username */
define( 'DB_USER', 'i03_wp' );

/** MySQL database password */
define( 'DB_PASSWORD', '123' );

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
define( 'AUTH_KEY',         'y4$VFZW=)S;FP<FoPH3x5}zHlG3w{3@Xq:Bw?7Vb{ZQ@k8%#7q:[286YOoL&+CZ>' );
define( 'SECURE_AUTH_KEY',  'jQ|uer)piBo]1ndg.<z+Bo.0Ic.8.06A`i;6dW}*WKs*XX6%sx+ZP;X_Xn,2TP]Q' );
define( 'LOGGED_IN_KEY',    'V*Ahoe=?*M{$1H]Uq1B>S-2T$C2A1:6kB1wi2mgVoH$$7dnI6@b?6J3!h^6XKOt}' );
define( 'NONCE_KEY',        '0z.=RycN+@]6eKkRaO;y-xiT,b*d~lmp{Q0c}`/f{eL~bhVhQ`R:2nu]zvQy&l4X' );
define( 'AUTH_SALT',        'Y%J)Gym90!Yb}y4,)3;xG#|uFK77:[y:s4 Q7R v}+K,Jp/miw>L>km~L*;s*N b' );
define( 'SECURE_AUTH_SALT', 'rDKrh1T0$Un+OeqXT.,IiU~^G>ZRIKz1n|.aqVgJhEbq!WL|4Z{x;),b;r~9PXkR' );
define( 'LOGGED_IN_SALT',   'lDM@OXC.]6|1}btyvBD!XW)v rMvnp%=KB[Y+Sf5@$$]`@`eV]@HFcw5OBBEkvW%' );
define( 'NONCE_SALT',       '~wH!-#_wd0j@D>ThTPE9mvA_:e#)rS0,gc/>aG7+ba*d^s_H<m_>gtaojn/[Lv84' );

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
