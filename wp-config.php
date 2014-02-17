<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'universitenomade');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'nirvana');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '4n0Aup0{^wkO2xy}1-Kw$b-LD2g6i`*)^|QFkIQoP-Ia}P7_og3Ig)9|+e^[&;P_');
define('SECURE_AUTH_KEY',  ':8PGn$hu=l+Y@-_^# 1PZ4<U{Fx):Yd?1Xu|jYhH3*lDm!`aSfifR@Imn~<2;IA7');
define('LOGGED_IN_KEY',    '41xdNVV-xPBc],6Yc@F7gBs2i7Jl+-UcR2vIM)D|(fj/Ptk:s6SVn?UaY aise28');
define('NONCE_KEY',        'C{jQj9zDw/<RE+h*R|{@3<|jamvpB={qi5Gqwgtii liL;ZT~xA*(+98{)g/~-~U');
define('AUTH_SALT',        'CPgJt,Vz^5tf(e7(+tm6Er27~/Ys4p%BZfEPmf7+^wL$`oT0EqT]Fh:9)*p&r~?B');
define('SECURE_AUTH_SALT', 'cE|v6,i5_Wl0r/Qpkg>DLS2-nvz8fkNK PYM+P+d +5wS=q MODQKLmZa%B7vL&5');
define('LOGGED_IN_SALT',   'Y.*S!$87MG<Ms?SYj]Un/5D?!xy=y}^Hd~+Z9LW-:ly_:xDjg{GY`38SNj`yakI-');
define('NONCE_SALT',       'YA:VV?%.hK/6eH+w%WEq1--,VlXO*UJvOqZwSAOZd1Wg|/N;+[22kd]0=-KW#t?r');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Langue de localisation de WordPress, par défaut en Anglais.
 *
 * Modifiez cette valeur pour localiser WordPress. Un fichier MO correspondant
 * au langage choisi doit être installé dans le dossier wp-content/languages.
 * Par exemple, pour mettre en place une traduction française, mettez le fichier
 * fr_FR.mo dans wp-content/languages, et réglez l'option ci-dessous à "fr_FR".
 */
define('WPLANG', 'fr_FR');

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');