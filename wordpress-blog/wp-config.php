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
define( 'DB_NAME', 'adrianaruizps' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '50,hsw?MH@~-N%6PN!R@RdSFS_gR!3zZ~p9,lnDNjQSi|dLk7N/K]8mg eW5[?y#' );
define( 'SECURE_AUTH_KEY',  'n#%U):&oQ)iFJ0yae2CzWL(rm5ZapT8)v3kEKcQGBE9^^+sU)JS]&9{s2SO*)XwC' );
define( 'LOGGED_IN_KEY',    '=5K4Vk@Aod6Y{&sHkzjrsUnUeI)|y@v]`G` i!TC#.d}ToC6@gMp`iB]0.s2:~g<' );
define( 'NONCE_KEY',        'z{MIhuN59mw<o7IQ^#,.:Tj[R4vq|z@*hf%^$5hMw5:vOoA3C9bb`PWN8125<bL-' );
define( 'AUTH_SALT',        '2w}Qxw[Q`0*qHZ.n0&Czq`snp&jT0E{=cdIee!tFNsX.<#dgM*k}qpidTH0~b9u~' );
define( 'SECURE_AUTH_SALT', 'Hiv`_5YcNE[]/9GIJ-(W=xxp*am!6;AufDXWFpvy0T59o~Wrgg$``(9ajKp%^#o;' );
define( 'LOGGED_IN_SALT',   'JaWQ5 U4./K `(K1^#ih7G>^.#o+FN+uZ*!@-N5^J615_n<cMVRjz>=HK8aD`8)W' );
define( 'NONCE_SALT',       'h[IEbt>5/9_L9pTf[W#Lr#l3B?-@n/w{**7M$QRK0*</{4.2G.><wmiKIP9%p jt' );

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
