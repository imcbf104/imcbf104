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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'imcbf104_db' );

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
define( 'AUTH_KEY',         'Bcc1f<fZLJvPz6~,oSpLuG~sV0m=p{m)*{?xl0T0DOH@j| c/MmV=%#j2/r38cJE' );
define( 'SECURE_AUTH_KEY',  '];==7-b*kMsk)0/7)q.QX+PY]Zs,K/savw0uwu?u_k/tN<:N{v>k606+]>P`2io9' );
define( 'LOGGED_IN_KEY',    'X_)5~]ER}c;AXRFK<vk3K=%qmxn^=u!kGu8zKc#m-)[eU>}>SvNd9N@aFT<J9?T6' );
define( 'NONCE_KEY',        'd#O=/+b)[U!r>hG5:R6AyCtDH?kXQ@+qyO.A6;~<O7O x~Be{L!#69Ih|.9s{L~t' );
define( 'AUTH_SALT',        ' MuZ<c(<!`.VBqy`C~&Ch5j.<plO~z9W:mqx|hW8pwdw,KK{D4 a[ccWb$L|wP:c' );
define( 'SECURE_AUTH_SALT', 'F7|lzCb68~~~x2u|ZT187Jg[|DKk5O/FnVizS4F/s~.G6;5?t]7BfJhhiTW $Zxx' );
define( 'LOGGED_IN_SALT',   'Oh72S@G^~w@3mLy/%rf)GF@lBYgQtcisjZc!<Flv[d$QG^c9a[@Tz$tfO-lWCAT7' );
define( 'NONCE_SALT',       'EosOchBGsn<ebDih>:?NDyvpv?._p=xh=^BX$/b)*00KuBi8<oB=`I:Ad)j X!){' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
