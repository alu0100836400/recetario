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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '3910700_wpress5b766c1d' );

/** MySQL database username */
define( 'DB_USER', '3910700_wpress5b766c1d' );

/** MySQL database password */
define( 'DB_PASSWORD', '2qzbh4l2E_DIFa2Fo2JzuoLJdrM1SXj0' );

/** MySQL hostname */
define( 'DB_HOST', 'fdb31.runhosting.com' );

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
define( 'AUTH_KEY',         '?HclE?-P&^<amv`4/_$wL(I=LuNr^VF0{ox!L0$It4)BW/9i^7[aC:1qrI*v=3<=' );
define( 'SECURE_AUTH_KEY',  'dGBL%.uUgb^9UA9a0UEXAn#MGm9az);=o9*%*@xf3zF.G~*1DPX9FE3tV>De@SU>' );
define( 'LOGGED_IN_KEY',    'xw?TBWZPLC&RS|`Ph+D5D/eix^^:cb]9UQ8:aZ2WM[AR=GEmbimxAI*^o{~]{CNu' );
define( 'NONCE_KEY',        'qo+avbxE=`0Q/}SH@uM=uwFUJu(e1P%a_@4$O@kfDKNP2_rJc$B/z7dAj>+LF(y~' );
define( 'AUTH_SALT',        'YgP&UYT&Kl@EL1Kw_j(ogS>]] 9rK/`#Ic52shj=*>9bZ5<3|07y/R.lsZ- NahK' );
define( 'SECURE_AUTH_SALT', '74 ZMY)c(NR+YdH/=^mob @9dt*jzR[2;8jmYqp?%@=Kt ,a?sKy+6EJ*8/d!^&j' );
define( 'LOGGED_IN_SALT',   'Q424 Ql^IOn+t9QWe m8u7iGg?X]{wM.0pL#n_]_o[1=s$*//YuC#y9~;>D_k8f_' );
define( 'NONCE_SALT',       '=$b~jP_n}PIgNSwS(36O5Ym=lz8y|@^w[sK{1IqUo|NWuZ?$+H[S6?=F{0L4`f;L' );

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
