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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '0000' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         'tX%]VsY;7U$qGx 1`Sfmq9WJB9>ji(rF|/}`:M4+k)P@svZ[m&6rCckDXLy{G%Q%' );
define( 'SECURE_AUTH_KEY',  '[-khK:Dqpdwa=S}S&hnFC]Li&83# !}:`b$%I-cD+pBECrd&AJ`L72KvQO1*[uT0' );
define( 'LOGGED_IN_KEY',    '<7]RQ3K@4T1,~;Su(VRxlU=7_ej7AYrA./vVzeO8@@{l#yC+PK<T0*g9df(5?^z.' );
define( 'NONCE_KEY',        ';tkIe7Y#l/#;czrK!4-jy&|F$Ds!X8|N=*}*,-*Hp?[zI&L^~V1 J@Z8AYj]Zp](' );
define( 'AUTH_SALT',        'uXvi{ha8yKz1X>.t,q1r|KrEDnXVRk5/!6-Kpg[C$(U{8fL#LY_9tT#,!aS%m_7v' );
define( 'SECURE_AUTH_SALT', '1y>PxTZIF6K<vOXUE=<P?PHhf*dw_3@Z|Z3{TH!Zct1&B+!%pXoxYi}`YJlg2(NS' );
define( 'LOGGED_IN_SALT',   '>,fN=Ty v43M7J.tHTpU`q*DWZt}y?fpF.k}(Vbfto|iW7>|:j(2V2?3?H~tO8[W' );
define( 'NONCE_SALT',       '&kE7V!fPL1f1XK>#+cMl@FxWHJVM60HF>8QV_KJH,G?);)wv9dEx=};,rjbO0<q?' );

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
