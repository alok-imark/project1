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
define('DB_NAME', 'storageit');

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
define('AUTH_KEY',         '_]GqATdM8v?CgguG8~gWSUXmDna3ku^vji)EB]bUSfX;{9/y0{+AZeNX&L-rWld@');
define('SECURE_AUTH_KEY',  'x?:|65_R7 *hRYzxj!588u#0HwwLRpO5)1R~Qp+{ra$MVZldnCsw%T=mRcNU=b#R');
define('LOGGED_IN_KEY',    '2E!0yp=aBaDlg.-.r9!haRzv~uO8TI%c@@01g;k9u(@{j,mR?ev:DgHI?ljM+@T`');
define('NONCE_KEY',        'faShshCloFa&T3F=%|I;Fh@ke0P,v7vamP ybI 56>-6G/4UCsj4[|M}2;Dpzxh;');
define('AUTH_SALT',        '}g%#Z,w.76ccz!OYfdenXa_>F384!+ca6@ +f,|{BjDS*^I~(k]5/j|h.~4dJZ@e');
define('SECURE_AUTH_SALT', '[I/3,J~#?!2)4emwx]*dTg~,S8Zefhc26{wd(+b1izI*_?K6>n{. nso6=ELY}D[');
define('LOGGED_IN_SALT',   ':VN_?|;Bnx7]vyq9oj2{0HH`VhN?y(oGNFxv1|nM7<NKU[fF:9T]TU1 ~PToUWM6');
define('NONCE_SALT',       '!6s:a]#Q6-4wEI4xJg~!&pi}I~6a^(=t*s`fLDlqi*oF^<5E^ 3tcI: AM8?eCn7');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'im_';

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
