<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ses');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'j=pIGX0g8cO|fjI]C2rlVk$2jIE0&(OCASY-:DQ{u^Wx&GuTEi,[2}$stOP9S9y3');
define('SECURE_AUTH_KEY',  'qzku-+A4iNMj~kG3E7KUdja:CXQ^m1S*OwgqnG>[]vltWk?|XXz$r5`/[Nof)iaA');
define('LOGGED_IN_KEY',    '%BUDj+R)<+f{,itqC$Jk]n+(y@D:r/<3{+ MKb^hx wne;6v=-W}{Tr$,],)G?^,');
define('NONCE_KEY',        'McCjnb<Jat-P%MvBW%3:WiqtoFUNvxM7Xn3:4`u^U&_#UZ)wu!pj(~&%N[p+5h#5');
define('AUTH_SALT',        'Ps qEku[J/]xw_+iuVJ:DqK5y_z3CG;6;bFp.JT8uZBrQ0v;. b-$Gi~pWrp=nqR');
define('SECURE_AUTH_SALT', 'ZI#]aRkd6{? -l+!h|hXAOC4y$-FB._V=W,gXVw7Zh;j6wH6$??x]T3lV;9`y8#+');
define('LOGGED_IN_SALT',   'wy@XHw0J4}|`+)*TNiYg%SS^PSRj>#X$(7d>waj#-g0#OrZU9X:$-Ee|>m>27)Kp');
define('NONCE_SALT',       'W3%?h35_UgR-v3ht;a@^K,lT{l^^Z8kjwVEVA%)Bq9p7qE~]&`bx95*O/5[&M&bq');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
