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
define('DB_NAME', 'simple-wp-theme');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         '#&:tBr$mEn,a/Zoixx}?Lpc$O52(k;/<kdTq1IN=q<EqO8g,Gv!`n1i2,W0fdmhp');
define('SECURE_AUTH_KEY',  'YtG3O!1[3qb:DBRnr=?e@o>_Qp2s/AA2G l<izNOob9)?5Y6`X@%IXOlN~32*+BH');
define('LOGGED_IN_KEY',    '+=mFHeSk]Nh#<c3</Wq}E$4)61aAQDrpK&0fHeqW+2~C<d}rcHSq-p_6GZo`;{8L');
define('NONCE_KEY',        '.bf{&8lE o4nB8Z&k~~5B4/Nd.-S8UCfeZ Jm0`bTnY@0U vF;s}MtN:,WwD]$-$');
define('AUTH_SALT',        'kl0N1T<e2Eg %(Us-q,(6^l]2#JE58):=UcQv7Vgn}ez[X<En+D&TC?ncg.#Cl`$');
define('SECURE_AUTH_SALT', '5h=|C+Ef4Q84#@,^>I<3YB<57lr6iFZO]O`afZIrxN  Tg+s4-$lq(6!j*s=s9<G');
define('LOGGED_IN_SALT',   'Yp8J/EN(FR}njQNw8}v4|JWk~=pE#}1[Kbj@FYfG#}):S>{@x?n4wFs,y+.-} 5G');
define('NONCE_SALT',       '`}XL{eW(De3P-_LD*O/FmbWlL|>G3d3pV:thGimZZ~t$eVxyr*?^>:8 /1AIhKhY');

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
