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
define( 'DB_NAME', 'wordpress.text' );

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
define( 'AUTH_KEY',         'Q.FR7UNvy+Gf%Pa6JMqd,OigwbkEO/]0-y]y*DnDOZ&FIfXf,0!)+./Yb5@@Lk#V' );
define( 'SECURE_AUTH_KEY',  'H~jBc_>*X)`ikh!cmR+rHv]i[u*z*VI}YRjK/[dx9<n~/>wuZ0k/$ +HB>%h>2A0' );
define( 'LOGGED_IN_KEY',    '56v/P1xKz1{+UD[Xm})=V~{WJderawwdvSS ~y|TMS_^y!S4O8#Z%R;q*deyNMw:' );
define( 'NONCE_KEY',        'L!jZKGTFfPAs!aP*E;oia16S-hHpjn%WR%T}HD<QgZo}[zIh59{E|.:&,_2V,^Oj' );
define( 'AUTH_SALT',        '-u;*}v6*bcfm&,E%oV sDI>;f/l!Oc{ByVWBU==a)s0`TEvL~=%>d3Y@ +1T{]Ia' );
define( 'SECURE_AUTH_SALT', '.|$tH]{n9B.D.mKz*]8C^MlXsbx{YHwHC~mTNUSvtdEEUUy&7y@AtT>f<0FZIU^[' );
define( 'LOGGED_IN_SALT',   '+W04{2lN#*P~SmHo_;kya*Qo%s,;8Z;3&aXx6Y ejKI4s9)4@s^Nn-<J&E_%O+A8' );
define( 'NONCE_SALT',       '2(~>A#,QGiX6iIfRcb<vBIzSHKkyS=B/oqmxq)1uje]=a24zJ@7 pV*m$R;b*wv4' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
