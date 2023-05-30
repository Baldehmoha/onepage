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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'projet' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '4UrGeCp1`Ef`#C]Fu$pA.Htrb^]v!j:B.Y}cP9#]=K5Z;;PN+B1}sGc8r.oW<$yj' );
define( 'SECURE_AUTH_KEY',  'M h2-|QgnJw[.{Ju?no*/iaXjsp4J.v2k_d5h42cpz-3%jV<Bw=xEr9kk>K|[[VS' );
define( 'LOGGED_IN_KEY',    '9cd >@/xcdQ$k:x(0CRty!|5Ome,pJR%0Wb$Tin1p#6]bM  iElw#~=!>~w3ePKw' );
define( 'NONCE_KEY',        '|A82o{]S:Jb4YuH9-[$[fJusXef=MXH0swb84oiML+jv/adWa .n]^n:HH^Wo2J#' );
define( 'AUTH_SALT',        '1kU;o;}o5g5|Avm{>f=tOP_|-z1(zQ(Ylvj$!P^*Icx7RCTrqm}P{S`{hn9 T_W2' );
define( 'SECURE_AUTH_SALT', '<mmCTuU4yzi#V:^ {,V--O@j.pV2df`a!a1{mA;hvBc4HjK^?e;MBwPIy3<p^+S3' );
define( 'LOGGED_IN_SALT',   '&AWla)qrwP$@_my%,6DxRN1cz;]E;7!4=Of&DT.i{5E$5oCG0*5DuF0v2wrg|iy/' );
define( 'NONCE_SALT',       '6Klz:.g,nV3&l;s_shQ<3J(GR<{MgE;..FO$Mk_8Si$=y#_boJpf^T)e*1(@cg;j' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
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
