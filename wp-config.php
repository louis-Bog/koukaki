<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'koukaki' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         'VnsZy3iy0o2(IYx@kh68Px_9052b,$[e|pe;{Ux=yu^TA,2h/[z3U:LBC[Y6,i_R' );
define( 'SECURE_AUTH_KEY',  'sfTV|qXk)ZW^`61Yk4Or>C}9TE:G>Dl}{285HDka&(FOv6v.0*2`INMIz]-`O{5!' );
define( 'LOGGED_IN_KEY',    'gMk]R/&{e1Tt`uqe:ilC@z}3t+-d>E-#gst~/$SA)g<$@VseUEI/N7&:[I*&!AZg' );
define( 'NONCE_KEY',        ':5a4+fR)6g||o^(Dh&1ZXsyh)ikmUGt`0J Tq(bTuee7wnw^+QDXm5q:kbWZ>2}]' );
define( 'AUTH_SALT',        'Fa,W$P0{sLjrf[mB)e,&?5aA.T]c9{F<Ae`+vKwnY$EjwS@<2-RwOMJ-<]OCqmR&' );
define( 'SECURE_AUTH_SALT', '<hasko&$^tliFf<2+8*0qd,}]h|JsJX-0f.G<odKPM%k5mmkR%Bd/aIh2h?4;4mi' );
define( 'LOGGED_IN_SALT',   '.v`ux3`]Hf5C`M?Kq!WAzu4qU<bXf=2sJvlZ`CnZS}Ti6$8q*Ux!:[Y:7t8*exg)' );
define( 'NONCE_SALT',       '}sG<>M{o:#=9f&6)XxU~K10TzMvC|hYH]U~b.*a+rM@r9w`1f<W+#gh?@$#rWv|L' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
