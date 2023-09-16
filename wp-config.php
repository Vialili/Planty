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
define( 'DB_NAME', 'Planty' );

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
define( 'AUTH_KEY',         'GwvbQW96vuRPoyNz`[n@-CT}w4i(9m4B+[639t8>,6p]W%>)jl%-YD$e.e1e-ZHl' );
define( 'SECURE_AUTH_KEY',  'Rsl9`}LU.9Vcc]imU+@*fZ3<=E`,=w}~}uyoreZ_zy:gJGtaDm$9sXBk4aXUq4/1' );
define( 'LOGGED_IN_KEY',    'xJawa)Wk>=Wl23T+AI0KmY>#[YRM >T{jR-1ij]|?I$^.k[hzK0Pv~RIT1%Fe5c`' );
define( 'NONCE_KEY',        ';yGO%wVZbo4[E{K6k=p=Ya,dHE+UL7ouArc>WbJ_?Kc5WYVnr]Bv841LW^19FG1C' );
define( 'AUTH_SALT',        'PS*2T=&ut~ oH.=KvG:Z9C4AqmJ+d1to=qD&(A<t90qLAWC[v;c7 CgUwA)smfQ.' );
define( 'SECURE_AUTH_SALT', 'Z7Z|cw+lgt-5tOa48a&lZ,4eV}YAtX%Y-_Qsh:hMT+&M )WxU hS-zB@J5E9l{+K' );
define( 'LOGGED_IN_SALT',   'v1hgXr S ~I^yG%z4qge!pAjkiwtc_DmrDX$=QiTk`v)$|h@4q/K65zzQOb9t9^J' );
define( 'NONCE_SALT',       'l$0&$!F)cST{NJ<tl$V:B 4[Qaz@(!]=-/}`T^Iq*K/i%*~0$]PW+ricO)-UkUt>' );
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
