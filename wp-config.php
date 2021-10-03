<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'bmftchwb_wp441' );

/** MySQL database username */
define( 'DB_USER', 'bmftchwb_wp441' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Rp8g.9S9G-' );

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
define( 'AUTH_KEY',         'jzji5pwtqor0w3beby2ugufvz3nbtjb5aqkuqkhmarbyxhkubnnnnfq12rhexvej' );
define( 'SECURE_AUTH_KEY',  'xymivnlt1pfeniek56wwzj7rupntmfn0dl1crclk1gbovihvymiqpvccufzxixpm' );
define( 'LOGGED_IN_KEY',    'zosp1itbtcdroi0uyn52q5pegrklo6o86fzaqp5mrooom7hbw2hdodqkrhee78ry' );
define( 'NONCE_KEY',        'e7fs5d5t9pjhjg7o16wviqlahbrxgbng4rd4atvb7q4l3bjli4batsd45mu7iiw3' );
define( 'AUTH_SALT',        'ulnziah1ijqdyi1sc8ql1gi6mhfbuodhavxslj6tvjcnvgadrt3c0cqcuoc4ps4i' );
define( 'SECURE_AUTH_SALT', 'hgzbw3lvomkry4gplzcpiox2dk5xzjtmvrnnnnqk1ue0biwxxu0emhdsspiyg5uy' );
define( 'LOGGED_IN_SALT',   'mk6wnpmnfd545xrlrslihljom3xde1o1n1i7fyv1lotrizofxfmkep0ak3tdonth' );
define( 'NONCE_SALT',       'jlhqdqe8ed2hn9vb0tiyyagrlqr08bgaqgfr3qoxqfvpovze4fs4v4fapbdmu0mm' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpga_';

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
