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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_test' );

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
define( 'AUTH_KEY',         '_Zi=Qk_p%s(-*I NOsntr%#orZiz$I%BKidv%[v06-V2j5X#MR|/:cBx96Je=DM1' );
define( 'SECURE_AUTH_KEY',  '-5Jz&a,%im*_VLp><>39he/]<W%Jr_};j+x]~-{qH+Y@ezOxSTV`-20nxLq2H+3p' );
define( 'LOGGED_IN_KEY',    '@:Q_[+#{OZT(iB~E~ /2(cQi(OTgd$/^y<Q/O6(9!hOta6imL^P~iaTDC4O?0?9;' );
define( 'NONCE_KEY',        ' 01{J6<7/G:PJp-lpcy)@FfWG~6Bu #p]d,g%%tpK*;c)fh5tVQ8p8{): l}xla1' );
define( 'AUTH_SALT',        'n(fY0!q1)ba>6H6xQaDf@FrapW|yOQ)433t59+B$3Mn)ZQyt*S)]/:2[toY^`DUb' );
define( 'SECURE_AUTH_SALT', '}2D=QTqB1:Ba`=o_fegoBt=TQSvp,J$(/W.tJc1v$:#&r#j9?@6LIyi4ui?([Lcb' );
define( 'LOGGED_IN_SALT',   'N)1>h(r@5d&84kQ&_ZKQV`^Yw,s3BAFZE/(g>7Z~R =f7eb8AcKG>8tr(sy[G]m ' );
define( 'NONCE_SALT',       '0[J#0:odJKf/QX$&oYPtD|zZ+tLHDMX:yaHv9;[q+CI8T)u:66Y12E$oKo20W>W}' );

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
