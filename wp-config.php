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
define( 'DB_NAME', 'Planty2' );

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
define( 'AUTH_KEY',         'ZZQ?&!gJ}p]>^/M{&(eqiw7J{bmh6{)Puh)Y3SHIi26_xW+a>uQ|S4PqS _IZuS.' );
define( 'SECURE_AUTH_KEY',  'KHHO6hhLm oPEY4ViZ|A=7?$KGO*LLU]>Rl).skax$=)(v.T}q[kZ^m>Il.=43nr' );
define( 'LOGGED_IN_KEY',    'H(jKsM5SIK*(k6_p@|Xqf0TUr4Y)2#J0q41yKJkJW+d.BJqk383,v]giOM>8{Mxl' );
define( 'NONCE_KEY',        'k$}l{U5r~/Tv$*~Shii+phO*d&eq9=KkW(sLF+D7}l)utfS$hP+s`$Sf7; q];M{' );
define( 'AUTH_SALT',        'v9_:VNnTbLaRKATY$[4h0wQ,t(^XP}p*Z~Z|kR/-O}|^*k3U7Q&:e6#*5S9PL,D6' );
define( 'SECURE_AUTH_SALT', '4xgsrm$I6F7t$%ZLJ3/v0:T0?4x|y{vi+3xcO{Nr()%@/I*BC.*^K~M0o!}uQshH' );
define( 'LOGGED_IN_SALT',   'A{<}>CaZr_FO`|Nq!FpkSg4YfNE4G?g/_-2D?FX3I+ByHv?1]yOx+cu;o3aXlkIg' );
define( 'NONCE_SALT',       'UWt*IJ*8MiB9 8x{kb_T#.<_mS)s^u-YgH.4Nk#&GQ9)yPxOjPi>cVSON@3L/dlt' );

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
