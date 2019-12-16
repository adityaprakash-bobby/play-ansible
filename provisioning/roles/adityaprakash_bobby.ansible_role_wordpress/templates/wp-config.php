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
define( 'DB_NAME', '{{ database_name }}' );

/** MySQL database username */
define( 'DB_USER', '{{ database_user }}' );

/** MySQL database password */
define( 'DB_PASSWORD', '{{ database_password }}' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '|@-!0E6385BDY1(az-0Ll/P-5{y#i*(@xjPAy-nm?.3DR}mJjrVw2Tn79P(Q5Sv?' );
define( 'SECURE_AUTH_KEY',  'D:wb?LWaZRn)TIw PWo9Mz!Ey^v4~qpdoKZaz_%cPaa|#zY7jtQVPP/9!jJjH&C%' );
define( 'LOGGED_IN_KEY',    'Nr/nJ>jTY,B`zc9]kEX[8G[Xu)fr#9_sgh~82P8g7,ibj7w4=irImg$9g$Zp#M^K' );
define( 'NONCE_KEY',        '(5^}:3OzE,!*KF;2k-Brb.{327,bSg?[+N%swZhUb`q_}|prv?,FW,staL6;V;?|' );
define( 'AUTH_SALT',        '5(nx,QS^)V~3CzFvNbRA)/k7 `_;;<2UQ7!BVh94X>CE:c>o%-?QhUs1]<]TT#=8' );
define( 'SECURE_AUTH_SALT', ';GU< gb@PA/;MPRiq<atA#s3Q,<a]:rE!nvONi$su* 5x!u3yV#RYdfEJT|s=CKZ' );
define( 'LOGGED_IN_SALT',   'l;I*M7vMj3mShkqan)T!W[?:$77kB&yb&CeAXHi^I,&bEKa9~Mol&37ST84)|aIs' );
define( 'NONCE_SALT',       ';2R2:;ksqk?|i<cuI_=/,L5_&-DHx<ZU`P2~42 +01lM</&B>dFuD_}Fou5G^@YT' );

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