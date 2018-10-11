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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpressdefault' );

/** MySQL database username */
define( 'DB_USER', 'wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wp' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'CP!w;$4.{5FmNu9s%9#SO[D OTL>qj@sdmYtaoG-wFzh/Lr_S1ZvuJJA}x4#V#Wc' );
define( 'SECURE_AUTH_KEY',   'ksuT2YpIX/FujdI93ti|QKz0ACmTUeI<lpdZP09nA$sZ65dAkgaW|<I..tDfP5iI' );
define( 'LOGGED_IN_KEY',     '=CGC+c<AeIKv>$1si4gyF!]cdj,dIE0NXPKsC0IjM<VW+8%-r^hU$u$rN]TWEtn8' );
define( 'NONCE_KEY',         '}o|gthBY:gO6<kXP/jD)}GJbGW#kQ|8FMa8Li,(<@^(?,Famn&E-V2pApbljb+ra' );
define( 'AUTH_SALT',         'THBz9Y+tLgvp}Ut{mdr0ho2BN`*CKXeDWV?X4NOrZX)A]d{a9f%*iF_c)1jWJ-Fl' );
define( 'SECURE_AUTH_SALT',  '$>Rma5[<~&-zZX>bRfe%B4w5+E5)JkaW)ev0i]p[ lJ(No)0^&#M H=?mJf`3WuC' );
define( 'LOGGED_IN_SALT',    'D2i3u2j:,}U<;6 R`>b{4phOD~.WB14[pK`86?i1aBsFgz/G #yo<26j68CE8sFg' );
define( 'NONCE_SALT',        'z}het|(1bpd?M+NX{NPyjs}n=dTnG!P+|7w@,B0.tQ*|R|WXd^IK%}4Lf;hGdkJ3' );
define( 'WP_CACHE_KEY_SALT', 'OrkiHW@:9N5(%B.[m-X&25-0Qc*3LV2csWX=3S{5!%iFAlaF#@HlnJ$$>[<qT<ok' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'WP_DEBUG', true );
define( 'SCRIPT_DEBUG', true );


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
