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
define( 'DB_NAME', 'portfolio-db' );

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
define( 'AUTH_KEY',         's]9Oaw_K`RefhU`_Ct@fn4] h:EB&Kc/e Se$m{<j4H:iZxuO&#DWN`kc8l]yKU9' );
define( 'SECURE_AUTH_KEY',  '8zN6*D8tax&-$73c[3sTD8Kg6IU~|sJoF.!DOAQlgKgh]iDri@l*&e|?T11evwW}' );
define( 'LOGGED_IN_KEY',    'J6MNAB;mmO=ysp:*-uh46E5-U;K)?IMYc,r2=ALOB9iJX@9K+dbCt~_@[ChL}?R@' );
define( 'NONCE_KEY',        'UlS`Us.&J2{_#0.9F7[8Hx!GEskIq4bN F[Qlds}Y&YpZ}{<o*,@:kv-yw)m@<!X' );
define( 'AUTH_SALT',        '}JavSqf>{<e/Gk^i9rz{PP6r~q~+vA.SKY6p9p9p]w:iw4`/Ckrx;TcdGve;8)+7' );
define( 'SECURE_AUTH_SALT', '0)ycmE|QHHu#y/>3wxim&W(=%E^RXmxCnq/`I*x5o8y6w7J $v9/b/#X$5WNiD1]' );
define( 'LOGGED_IN_SALT',   'D}-D3j:Eigdo|*Us{:@Z]qx%c4s7C[XYY}R:6RnQ`z/dra7v4v&:Lai%pgA3oTK6' );
define( 'NONCE_SALT',       '_%Rlqw`TbFi>X>=h%pqpUALRNjf]pS,l<3OkJe{M,:~/MtM}X$6Wxm7b<8iu|S?s' );

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
