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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '1r^CyjzKL{I[+c$sf2KbHsf|jM/~|`W^8zpHiP2@JPZ*;0cJL)e>y/J46VeH,)*m' );
define( 'SECURE_AUTH_KEY',  'OBro;@2[,%douDDhZioByB&6z 1-jap>!J:{vPH;qN5ek[)4?<dF)IKeIr!Q9n&_' );
define( 'LOGGED_IN_KEY',    '!LUhQ!Pd7U.V=As=f[:SfKl7FyHI9G S[b1~2)a8sGsUCYLwiE5sQ8kefmrPSxRr' );
define( 'NONCE_KEY',        '/ GRd@YSJ=F-_R [+%ZW}AZ$2sD:.w_@FzO:u-hu$X)m}*BbrA2[*];ElRVhpuVa' );
define( 'AUTH_SALT',        '%1tkj9rw8ezD9g[;W SRNVv$iElIb5#b3h<v*r0uK&%v58aDmfsjw=$-=4{g$e c' );
define( 'SECURE_AUTH_SALT', '-0_D8CtBOGND#P`~C~x%wD?r<dV0C?iXX!I-y~K-2oyOVPS}Xm,8c97Q-|UOZUg%' );
define( 'LOGGED_IN_SALT',   '{Oi/_?sShNR{oe31:xu?jkV$,:aX)2bdYVZ*5)u~+!3eQ%96Bp9PzG:yzDH(Vu__' );
define( 'NONCE_SALT',       'bTDX3T?LLCTM@]g!VLQI&+OkYfSi#FN@q){W(u9%uL*7,-&EC2%=tY`xHw9F_>~&' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
