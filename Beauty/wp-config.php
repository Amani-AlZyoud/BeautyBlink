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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'beauty' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'u#P;%DhW?WNBfG$go60P{kaav**J3W32L,+xr.w*Dc9TJFI1$3,3mTrQhbKlFoG}' );
define( 'SECURE_AUTH_KEY',  '}8(ZP9Sxyib9whMELs!1+`WU*f46DMK[l[d+o$i?u{j]pplHH_-<5b@.dI0P&J|p' );
define( 'LOGGED_IN_KEY',    '@aeIkws_;55Heo%KX}a`;ni`]F3MA`Bq6+E@Wh78R}?Z00[Q1dt9%}<#SgmF|--Z' );
define( 'NONCE_KEY',        '0=4LdSQW|<&+%6PMQvCjfJABLE<|:C21Jv<O3n}l}]U*:eOO!fCp`(SgV??s~Kf_' );
define( 'AUTH_SALT',        'Vdo=>|[cSS)Hp`SA.t#WP@KDO&vo(8bZd|Y~s.]uC1S4IYKyaK_qN5O~u-Wf-O.L' );
define( 'SECURE_AUTH_SALT', 'eR;ihbd XS^!jFC[1jqMuuBc}F1}lfdLSiCvB^YJwt&uH-FEnC&[f.GEo>=ldNCj' );
define( 'LOGGED_IN_SALT',   '1:qyvl}n`g`x 1@p(B>>O_|*;vPLNm0T9z0Rk3*XdY,5,@-#p}wDN&_/cmpKoI5(' );
define( 'NONCE_SALT',       'J.5=)Y.q/0FN}C5MZwP,J}/Qc^OfBg[,@u&BCOi%_ft#[Rt{6.*))_Xxj9oiCk~p' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
