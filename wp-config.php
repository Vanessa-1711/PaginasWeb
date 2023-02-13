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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '4#0T(4NzR^gp6?!g8-/_2||1tY{82EED1<<&n=6XdBTSn-BgC:Mpk3M}H[%hRdG0' );
define( 'SECURE_AUTH_KEY',  'yxpijl/I<qOh;C!wI1By`EmX^r@_l;:F;wh9V9!1R^:R?t.mj,!5meGHz?kbTR$V' );
define( 'LOGGED_IN_KEY',    '4C_~:dzglPO0Z#VxOlRhRlJbsw^4U~@7M9Z]@T@ 1~p(%{k6Dup(BrbbLqB;zA=c' );
define( 'NONCE_KEY',        '#(Y@6Ue&C7~No;$fA-i2%G@[Pis!ApbbolQk-$L{HM#&1Zd=?_-4Y==(#+hqiy}s' );
define( 'AUTH_SALT',        '~}SjCa:iMSNXgp$02!7RFA`EEke`]%kvj:s<A|^8ma6=)Dqg}-p8B2_7Oi3,l?sa' );
define( 'SECURE_AUTH_SALT', 'C+}+F&K(K<;/}:z>5k0_)<Rd`9d=XoC&.j{0~EjwWLtxA-tPy%?thy>&UjC0$2+V' );
define( 'LOGGED_IN_SALT',   'a0rar[<EGuf_g/JWOrC -}]%r*3l#,$.t=@]^kn`IMN(HD#G?i(ckN?Q~T)`U4[s' );
define( 'NONCE_SALT',       'Vfm@NM 0#Q|@h3Ufbl6A h/W XgV%*b0,4O~E8&PU~-pyb/B-((nzBN{KtL0B.-{' );

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
