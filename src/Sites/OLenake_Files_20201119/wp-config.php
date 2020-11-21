<?php // hey day

    if(isset($_SERVER['HTTP_X_FORWARDED_PROTO'] )) {
      if (strpos( $_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false) {
        $_SERVER['HTTPS']='on';
      }
    };

    define( 'WP_MEMORY_LIMIT', '128M' );
    define( 'WP_MAX_MEMORY_LIMIT', '256M' );
    define( 'FS_METHOD', 'direct');
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
define( 'DB_NAME', '369122_368477cd48f57214857d693433f44739' );

/** MySQL database username */
define( 'DB_USER', 'easywp_304625' );

/** MySQL database password */
define( 'DB_PASSWORD', 'RSLV0SjICLRuSrIHblCd8hMP2+hbKrcElG20g0G6Jeo=' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql-cluster-2-mysql-master.database.svc.cluster.local:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '?xhxLX+x~t#{;j`Tqt=CQq![__5{<.X*9?>b1#17m#l_7~FCswo+2hbbQ2Bl~8Kc' );
define( 'SECURE_AUTH_KEY',   '0?TD&NI+IC5=G;Cpw{@pKz?oJgxdhbrL}p@Ww9R$Ck!A.[pmAj}s9/|]IppJ/`^>' );
define( 'LOGGED_IN_KEY',     'c6QQpA|%OrcDyB2[X|(Wq#&v?:WA(cz:^Kod%l50WCaP78uAqk-aCHK{g5L96^gD' );
define( 'NONCE_KEY',         'by5]=3H?Ia@{L>Uke+2-e<d[Kk`qNmtOS$f1>bq[<nJ=;FXaMH#~AHM][c2GCw.Z' );
define( 'AUTH_SALT',         'K!O8VtUm}VI-2#{8V0IzXqy]7#BS40^Qz$ODNEHDGEoTYR9Pj.Z?z? /B|WYRV=x' );
define( 'SECURE_AUTH_SALT',  '{H,3`4RUc^^2lc#( -U%~M*@N))h+ZAOms$7wnXd:Mdb,>S^s+M8lsjeo@z`K]&#' );
define( 'LOGGED_IN_SALT',    'Gl^zTGpe/`LLXM!C%B1Or;q;t[;rUz<s0/v+KMp[byqPF~g6e!f$SnUqu)I!d_T3' );
define( 'NONCE_SALT',        '.Pnv7aU-&{*esIxexS]eUt%/4hY##Bo6pZ]@lo %3P^8)*pJ,}BLYoMOq.1R8N(|' );
define( 'WP_CACHE_KEY_SALT', 'Pp~zS5wqoq*3#@d4p37G[UI_enEQ><M|#/QQYvwkQ@s =H |/xwG*v9nnI[Gu_zl' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
