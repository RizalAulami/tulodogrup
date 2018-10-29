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
define('DB_NAME', 'tulodogrup');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ua{F{@V58#I**cfdow V<xTl%Outzl2JvVuI=1>p_h{Jm@1CTZ{% swW30vfu+fA');
define('SECURE_AUTH_KEY',  '!ZKK13/_D90uBMdo.LQ/xb^asg#wB)6|EqSdx:_V6k:<U%al{`n9%aDfc$nW=z^^');
define('LOGGED_IN_KEY',    'pegK@_$?-sD_/`HJ>b_&ZLrCQ}L-0Z%WSKtPEuJ<[ppGOf>bc#(mb5bsh0+_Sssx');
define('NONCE_KEY',        '3b:cAc`1R%R<^*SB&4_tSzbL_<KM<j^q%f*FbkBM~q4LUlUbKE$&(*ZP.ry;k2px');
define('AUTH_SALT',        '-u9O<jrsx7Nz!4?+(w(7Lw$4/vhR:.0TP:|&?a,Ul`{fa]z_jXc1oXN;]-U4(k~C');
define('SECURE_AUTH_SALT', 'T6(|O%p|Jp+4d#|e8hdn0-RUd;2s2 -`coYB$P[SPh#8}Dhk/)3fxg2l;QBqF>Nf');
define('LOGGED_IN_SALT',   ':YbyBm:AXw@^9yY]@%*+:l2Kz#hSjnv;3oF<iBfjRLvw%n2G%y%|pUV F!kOH,LJ');
define('NONCE_SALT',       '7V)-^NZK_F/u4>Be,H`p5o5]qzZE?uzR)[}VG|@y,.P2ji5Z{][HFM<+i/fWc%}1');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
