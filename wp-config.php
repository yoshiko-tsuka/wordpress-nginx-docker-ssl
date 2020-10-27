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
define( 'DB_NAME', 'local-new' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         '%nSUts=^HBNBg^E3;7+@a/y2[N#p`8`2+}nM]G&6dC7r0SO@uY#qCMqqsUd[=FGp' );
define( 'SECURE_AUTH_KEY',  'a)%L9$!@n6@Gs0g<)VxC>er&#JQqdKyrr|c5@;g/OLegprd-_aO`>7qW4CVKE&U>' );
define( 'LOGGED_IN_KEY',    ';JbO[eU&B1lr1U]u/XjWLCmgSG=hH<@Ltn@p|)LkL%cuhw:!NKP}GcBVLy4*(}4o' );
define( 'NONCE_KEY',        'sZ!@RVD^;X!p._4(Lsu:_SLyR6C:#@Cj`!,Y!@#%<GZ}wm3IM7=i<tM[JRGdL)t[' );
define( 'AUTH_SALT',        'KHH@N2j|<-_%.I])7x/Bp;&8mqe3<m,;n_AXRpL6w/N]sxN+(7%C1&=(8b7paP.,' );
define( 'SECURE_AUTH_SALT', 'c3^7tg-uNglwC6V$Efi6jf&2^dJ!KD^sQlKwi_]X..Ll/._enJ{<UIo^o.uSb)$#' );
define( 'LOGGED_IN_SALT',   '8)|yl*YryG;.K)2>qx<?2,n[raw/>I:dx+K|wWiQ&?<xb4d0D:{Ib$gIB4(&{j(X' );
define( 'NONCE_SALT',       'mV<#Nvq6n_/<g!gMxNUYVaQy+u$yM>01MtRd9glxmL<NTble)F|<;i#Vhpp%G`Xm' );

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
define('WP_ALLOW_REPAIR', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
