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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpdatabase' );

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
define( 'AUTH_KEY',         'D*[kl#;rEN]L{A?Q5Pi%#[ze%5E15=XUX{JmAQHs`LKA*9!rAf]*ad%MkKq!0k)4' );
define( 'SECURE_AUTH_KEY',  'O|!.::`ib0{vC}4hAnMuyJ1s#43H:BP4|58 uF7CyioHJ;c&%pB8O^|@sC)@l1B9' );
define( 'LOGGED_IN_KEY',    'HHm=z5%~K2!Jae%B&r9ZG~H>A3+ol.4%kwhCLi9hP%39%]k[;M*B=Q#W-CQ<V!5 ' );
define( 'NONCE_KEY',        'L~1PMv7[fr#wI!WA3l?ZU|,st,6a3NCZJ4c0U*(b)In(W1{CD7bda:j>?D{D|E?_' );
define( 'AUTH_SALT',        'On5=m:*|}xIG)c@t7Pz+uq@O;Q?|mK/5=YF8|.u|bp{NB&3zgqSP2XlF3~t6ro>Y' );
define( 'SECURE_AUTH_SALT', '%1VM F~Vfw@5RPF [6eVUEJEDWa1{,F?t:,/npO~g?zNe-CE.w7&@c*]Z6(Ik_X~' );
define( 'LOGGED_IN_SALT',   ':qiTTy&MMYG[?L9K$0qEg+xWGJ[2}.=} gW%N?U(m7<lJcjB6=iBn_sKKX*r!Okp' );
define( 'NONCE_SALT',       '|ap&scw5]LKyZKAv//tD[Eon`^Cimg8vVl*Hc1@bWhAOUmCokiwxn>%qllAG8l6h' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
