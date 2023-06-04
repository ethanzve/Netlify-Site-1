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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Netlify-Site-1' );

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
define( 'AUTH_KEY',         'UWGg49E%?{~AT=D.tO+xUy*DT+_/A?uluWq(*/d):KgoJtTT7}hcEp@.,,B/ohC>' );
define( 'SECURE_AUTH_KEY',  '.Yxk?sF@)@YM?t%0M#QgI JpvW5rT=oY8*$;;BBhWJiqWL.M}7ByWZKEX.hSA{Pf' );
define( 'LOGGED_IN_KEY',    'Z1w>[0YZhPrlRI)>}?k;4qKv#}sKO+qNmkl)A|VF036->Wox<MuIUwQ+.%Q/.rnY' );
define( 'NONCE_KEY',        'G4:^^>+hLLp<>:1rT2x]3%`zxV(>*X!cd=r,&}ARYm2Am}5dh$&b`NTWFt=<p@&{' );
define( 'AUTH_SALT',        'T3~mY%@92!rXP%XYgTLXg$vsDO58f}stnW%MyuC[&V{~X.9AVemIGP?-Utv%9^oE' );
define( 'SECURE_AUTH_SALT', ' NAYfe^Wmg.?2(WUtO|$9)#WOjxuurjz MFA8DXab.Hig[nK!*UE-705h4hZm*|W' );
define( 'LOGGED_IN_SALT',   '9ebT!/>7/{pr:}@)AYQq2r0DT!Rhe,Q;iRI^B0,mQd+=e=KbikDD[>z CXW _DXq' );
define( 'NONCE_SALT',       '1D,dq8d#Ewro{No]GR!{ul>SnuD?x:B9((X|5eJTna>/}=FV7?[$f<a)*wX8ScCM' );

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
