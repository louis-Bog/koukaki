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
define( 'AUTH_KEY',         '$3/nr~X]a;nC/ddm,AHwyAp+>Nl1g:aJ=yEgd-EN_mVrymJyBrJ3m;/#gaJs_oH/' );
define( 'SECURE_AUTH_KEY',  'T@n$&tP^VOps :0=A@M!E!#y:hv9c1-T<l#?&.vlDH{O~Z5+9~*eg&clOfv~<4?9' );
define( 'LOGGED_IN_KEY',    ' +s,zpstC{M1T(_79SfHXrQA^A)Z!6`]j)Ej$uLGZ8GM]50;(g?]3Vj;d+Hog_]5' );
define( 'NONCE_KEY',        'FIv9xcBBw4y7J(CWIcMBG8b<WYZlsN0vJRx1x_n-wdk9kb; mWcr)7(j71=;JqP@' );
define( 'AUTH_SALT',        's$UK3v>+ b9i?3RdK`x{U^V;Kfa>qXxATlDX{AJP.tcUGv2PN-o#%3EWn1^r?xFw' );
define( 'SECURE_AUTH_SALT', 'k{KNC%W[Ojm:y%BYDs]*OR(lcj}|yqkbU2Mlv)&<sfhC[pNW#>0m`slMYujtM.5K' );
define( 'LOGGED_IN_SALT',   'u6#!1D#~=p}7~k78iFnuP_TfT=sR7n5uY 8:#Dh?Y5_[It4KwlW.(P1Z$XZB}:>g' );
define( 'NONCE_SALT',       'P;]]-1QPVv}#B$Xe*?GcG9 m0,QtMqx+%z%$UCA$I}uK}|lS~]?Xo3CPg8m^ jZ5' );
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
