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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          ' 1Uq &rtU4m7~ZSD>zC~:J)8}stMH>T:YZ!A[czt? ~zI^su[dXY=d{{qi(2cm2=' );
define( 'SECURE_AUTH_KEY',   'DIibUewwg^9Y$xTRn{sXvZ3K>F#xA=kJ#oaqP?u_GuEDiWL+Y%87-Kcr[]$x:Trb' );
define( 'LOGGED_IN_KEY',     'U>0U]*(H8F@`T` $fqxzMsU`$-$&>Uw7TQ/[>2@@3DJkZ_ndCQvP0{B5C`Eg e %' );
define( 'NONCE_KEY',         'kufN%Zn^|gdkbF.WXIq PI8]ITO14qj5N1qlsap(PvBi[(/!Adnch]}>~y 2tcAN' );
define( 'AUTH_SALT',         '&]97lm[r.-|[K`Z1e?;RU1y3]7bMi2;%D6%MLOez`IGBz~3RMD^lwr%IgeCS?QPJ' );
define( 'SECURE_AUTH_SALT',  'ST~q<(sN 8)#;r}1tpkNlwa-7G Z;G0^Xd-)HD1E@ru8ZsH|TjO:~3B5S0EY3u:~' );
define( 'LOGGED_IN_SALT',    'tG9M^DZiq}f8#U*68glKgeE4Px?-C>lm8XNO5e//-rv0YI~t[~PmfLjr!N0y_JJU' );
define( 'NONCE_SALT',        '0U%Q K2F@ XERZddZni)Ew4 UI^qVhs*T5ykcWFQFq~]6s]3_ <8k E?/m{qX4n,' );
define( 'WP_CACHE_KEY_SALT', 'Qnp?mYc(rGhYINuB^p/KOYzu8!A-9~x9*A1s|;uB02Dp>KsYx@^^Wb_A?];0V?3<' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
