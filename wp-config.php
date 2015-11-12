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
define('DB_NAME', 'dyanmic_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

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
define('AUTH_KEY',         ':(#IxW-CjiYM5{2c`80I%:auAp9>%./9WtQIIjF^h/`dE<WmlcP=F}%kxA@eVRy*');
define('SECURE_AUTH_KEY',  'dn/fq,|##_+umjEv)r0+(tyB-s}M}g$sU5E3Vb2-pEtZ-ZZJ0Oo-K71 e(=$d7Gr');
define('LOGGED_IN_KEY',    '^FV$&*FX57AA,0;SwNh}e=k>dPS?csfeS]kcyfWLx:5 f.1h9QHoPRiRXAf}_x8a');
define('NONCE_KEY',        'P|7hM/A& Q!*i.~vxArEl}C{V0`a@Y_{j9ix0vP o)vjhIlAfWiKTbF}sYjgnyx>');
define('AUTH_SALT',        'k]03]oF!RRS1x1K99UN;.4PdH$O3_rmDq%:r-e9[QV}zk?Jwg4ThL%;+`x[6w^&E');
define('SECURE_AUTH_SALT', 'sI;,P~Qn-34/d1Q|G}8PuDHo1fVO{psZJAs4zUD69Wt;jcj+^L3d UCCZt024t/H');
define('LOGGED_IN_SALT',   'Y$|+)jaNoE/GrU!wc Y4f#CfV!N~MzhWbT_&X]_!|g=7-UlNLeodffDXN&R).9.,');
define('NONCE_SALT',       '#9lxx8o1T61X_E[q3DNU?F2B}oZWPB:M/LPS71u2e1`t3a^-m!Sp.0fXSPG R<gq');

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
