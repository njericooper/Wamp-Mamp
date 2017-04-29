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
define('DB_NAME', 'njerbkdp_coop');

/** MySQL database username */
define('DB_USER', 'njerbkdp_coop1');

/** MySQL database password */
define('DB_PASSWORD', 'No9To52017!!');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

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
 define('AUTH_KEY',         '3}Z6.Nc&T23XWgAD@Xe|E^RRpI} b[UX5j(=Q(j{_>OF?-jG,-pNaoj/.|ogf@9u');
 define('SECURE_AUTH_KEY',  '3KSMXnbr=S?P,5pcvmlPA)A[RGh#z*#c@q%&.|8wMX<Lfam-;>U?5|V>_<loe#Fi');
 define('LOGGED_IN_KEY',    '}{WFV7wiS8mq2L; Qc]I<0{cl|{]M.d&0^pmCe=1u$B}U8&F5peu8!KM_=|H|b}c');
 define('NONCE_KEY',        '2HMTl:L+t,3n[NpSjD?9#F?C|P2`^(!OP+F}}{q]H5v:JiI:7An}uX{M+(iq_3v|');
 define('AUTH_SALT',        '7YO3|_|/|+Zh}De+~G[Fr.|ToN`8>p-D%-^<!o7oag7_hXxtfyR.e5N#c_s_5+LQ');
 define('SECURE_AUTH_SALT', 'm589T>Wp7w/GxroNHFA+o&Z);-KnNK3zg=luHSW*36EKlv:1Xq8:l|#d |+<`pRv');
 define('LOGGED_IN_SALT',   'KHd{[|O&VRZJom= l|Fh3.VUrUOf9v9 TQU!+)&-e+tA!ttb*M2|Vw_=mXs_T4--');
 define('NONCE_SALT',       'O>:eENh*84=}0[vPa%UD{u3pT8!*o0<P|Gj(z#_%vV|I@=7%%$5>OB89UY(<[3Mq');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpcd_';

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
