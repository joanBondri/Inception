define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'jbondri' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'MDPJ' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'mariadb:3306' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '<H~o`d>9N4ly[4q7`PI($+^=e/tZ:3##RyE/C]uufl+l~PH5:ao1Qv$0(m?vi,-O');
define('SECURE_AUTH_KEY',  'IZKw&%<1D.:;|F?89E{^_;a~EZ99ry7cDb!m!|&0M6Aq&NG,k>N]h.36*Iidw^`,');
define('LOGGED_IN_KEY',    '6BBKn.,|`^o2x;-0OqV(/b5x-WrjI+ wDy5V9r0+oi)oCX|iiDd1-=2XLSxznb~O');
define('NONCE_KEY',        '<yaKu2!A@{w6[dk0w$rx)j( XB@h*.(zE2Wr-2)OG{x4=AJcRl&Hmg[g,%uBwdr-');
define('AUTH_SALT',        ',]Tq@O?4|(:{?;pP%7#db`*IBq%O|zHq~-l#/wn(w0,F{:+gOycCk/[rhb_>-GPG');
define('SECURE_AUTH_SALT', 'CXQ }U>Xhz~h9wh9`S+.@Ep5R@w7{)2}_SEy@neZQ5/Saxg+Jtbl6y_mD4!{,V-x');
define('LOGGED_IN_SALT',   'P5B|B@ Y,2}zdPaTki]CmT-oqE<y6M<j@:l?wP!4kzh-|2;<5eFh-(5 Z(YJkw~b');
define('NONCE_SALT',       'rPp|2WtZ#sGLpH=Q^bKRT<A?O7GPMy7*M=;TtT>d?neX%a-$aAw[pVz1U0%<x4R/');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
© 2022 GitHub, Inc.
Terms
Privacy
Security

