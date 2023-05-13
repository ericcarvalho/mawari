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
define( 'DB_NAME', 'id20575697_wp_d94e15656e2d729c8ce9df5f162d4c57' );

/** MySQL database username */
define( 'DB_USER', 'id20575697_wp_d94e15656e2d729c8ce9df5f162d4c57' );

/** MySQL database password */
define( 'DB_PASSWORD', '8618643b28ac053baf0c9298b54a44bcb82288e2' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'b42I$i2;W#l{52F#CKuU -&q`+!&cWrDzfs%-:!uuk>K_QIm51uLMeF=Z3t^[e) ' );
define( 'SECURE_AUTH_KEY',   'hBVabnl[|P]peOhbjJ4wh>;@x*-AQvIdeH |=$`7W`^~%,FD=Uvt/1QS1XH6t:90' );
define( 'LOGGED_IN_KEY',     '!BBo:ih&!&!.llYI*f!UXIPd=,V;<h-BnHU2O$QWgvzc+q3&w-r#VxnR5X3&6W1o' );
define( 'NONCE_KEY',         'yap*`0):V|YNz619L$8aVytlO`ec$,*%%T{T-LXs0k?v3%xUzNhqZxALJNe5EFsr' );
define( 'AUTH_SALT',         '3i rp10AUG5Iay~:eec+%b}XBP_r`bt*B&ojt{8ay1u# pR2Og%$?ox v?NZ}h98' );
define( 'SECURE_AUTH_SALT',  'e|x&;TFpjd?+o[ZHo`S.~]r_RPg+L{%p0kd[U@RQP8*1=uOAz|J;8K}c$%]<YP!g' );
define( 'LOGGED_IN_SALT',    '[/r(o<Y 9bYNx=,@|bI*b@VR%9PE+,r#]5xi9yfE??0s^saD<$GDk^BMMpL1szM4' );
define( 'NONCE_SALT',        '=uHsW,D+w2gM*a]qg ]nSz6,F+N#N`57M4tnH7F;:_JE35na|+wh!VFaSX-24dFv' );
define( 'WP_CACHE_KEY_SALT', '%gPILH?I|UUl]<p)vrOLf==$.0s:#IX@Ob>{X#-DVbB$`{f*U^PJ=en5yAYh+sZ5' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
