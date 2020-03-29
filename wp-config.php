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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'S2QtWIsujz9{~_;?:6Oz7Ebdmd?U$(|).0tRWDCO0:+ERhUqH>Kaz@o,I<(+1,]R' );
define( 'SECURE_AUTH_KEY',  '/;ABm~LaC`HqM%R+RlS]c&^i00+z|cg#~YB`>OnmX[Ce87zPvK|yNw#~_siq%=Jw' );
define( 'LOGGED_IN_KEY',    '5KSKbQKR:8_,ZDiv=]vXG=WQ-}Q&ooXjszFw6eq5.mpGbC5s!*k$TM>1)~~>2:aD' );
define( 'NONCE_KEY',        'e{5#*h;OU%~2;oanKDb>QGvn}rZYnvn_$9PxjYrTPwJ={[vOb]+vBDR%4OcIPUKp' );
define( 'AUTH_SALT',        '`ni4.mO#!,BAR/Gjz5.*C+7qP9,_<3^g,q-2%100Z1.*x0!;%|Jt4%``ub*XUcl,' );
define( 'SECURE_AUTH_SALT', 'PgJ`,z%]SP<S/[PBeF;eQZ)%PO>70r7 )H{[ ^BjKDEBmSuT`b{>YbM>$lpL9BSx' );
define( 'LOGGED_IN_SALT',   'kv+&]>P]o[:!`>v.PK%Z|YU)<ZZ9]NJg#(d2;7WhV?){h?vT1qUhsJ{`!|P+MO``' );
define( 'NONCE_SALT',       '7lld*9BCLJgI3.+hGg#9h`Hh>E]Gl3_u~{tq4OKiYccLR#HKGWn>JUnfO#vPdIR}' );

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
