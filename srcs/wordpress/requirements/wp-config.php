define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'jbondri' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'mdpjbondri' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'jbondri' );

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
define( 'AUTH_KEY',         'fdc53290fd66efaff9c8122bc1ac422f13d3e69f' );
define( 'SECURE_AUTH_KEY',  'bf762ffb157db5d95dd57785e434b30367445486' );
define( 'LOGGED_IN_KEY',    '0a63c732aeff6795be3aa08f113a33d33d49937d' );
define( 'NONCE_KEY',        '3f9a998e6081fdb365278b9526c926bbfa0e0af4' );
define( 'AUTH_SALT',        '49075d462262e51f73c8953bbd1a9bee12280a5f' );
define( 'SECURE_AUTH_SALT', '45d9b47fd4430ebafdb5288f6001ae434a954b27' );
define( 'LOGGED_IN_SALT',   '32b4ddc69e357da05552333f39777b97d0aeb27f' );
define( 'NONCE_SALT',       'b94f1b9613dbca9a559eb8467599b02953c9360d' );
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

