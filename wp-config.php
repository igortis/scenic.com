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
define( 'DB_NAME', 'wp-scenic-04-06-2020' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root25' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'je-:S2g&8MOjaO8~ ?w(||P4,B-U*pYzJqxfHF-*Aq!CJs7N{MAz8o0mG.{G/PUA' );
define( 'SECURE_AUTH_KEY',  'c3(yI(als@+[pOT#t~sP5++X6%+,(cG0[E)E[vSfj&uWQ]`<0t`P_/0Qgh6t1ESy' );
define( 'LOGGED_IN_KEY',    'Ab?,g-|E[-v~xoj?;krkUw`@c%Mc?y/o:=5uI#z}!W(eORmw&iFGX>;+HlTDL<+8' );
define( 'NONCE_KEY',        '!A-4%I~pvk1oZ.A^}!O3<?}`@NS)AR4$yoCKH9t|t`(*|WRC`L:Y#-j4}9X2tKPK' );
define( 'AUTH_SALT',        'mP!e&#-<8j-GBL:8T(FFU>d_*z<+7`Oeq+?-LVm{>#Nba2;>7}A@7uyl]br<pXjT' );
define( 'SECURE_AUTH_SALT', 'Ac%X:R>rHSYSzM>Xxrpt=@T<Y7ZZ7WpZpr|n;$M=T@o[0CK?^RBB=jy4&3=6FRLO' );
define( 'LOGGED_IN_SALT',   'k{u~F=TGx?8bu<6]1^*.npED[-coG{KfK=WA+NB]!H}lq+n.;C9.&dP[2jZSgk@1' );
define( 'NONCE_SALT',       '7QT-+_v)T;3cTvYNx~ /-&NpYjLo}~OK:iGa-+}}CuvVpm@`15{K+egs<%SZ-r9y' );

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
