<?php
//** MySQL-Einstellungen **//
define('DB_NAME',     'DB3286484');          // Der Name der Datenbank
define('DB_USER',     'U3286484');           // Ihr MySQL-Benutzername
define('DB_PASSWORD', '2CR3sbt6fgXG');          // Sowie das MySQL-Passwort
define('DB_HOST',     'rdbms.strato.de');    // Diesen Parameter müssen Sie in den allermeisten Fällen nicht ändern
define('DB_CHARSET',  'utf8');
define('DB_COLLATE',  '');

// Wenn Sie mehrere WordPress-Installationen in einer Datenbank haben,
// muss jede Installation ein eigenes "Tabellenpräfix" bekommen
$table_prefix  = 'wp_';   // Bitte nur Zahlen, Buchstaben und Unterstriche

// Setzen Sie für AUTH_KEY, SECURE_AUTH_KEY und LOGGED_IN_KEY ein Passwort oder
// einen langen Satz ein. Sie werden ihn später nicht mehr benötigen, daher
// machen Sie ihn ruhig lang und kompliziert. Unter http://api.wordpress.org/secret-key/1.0/
// können Sie einen langen Passwortsatz automatisch generieren lassen.
define('AUTH_KEY',        'riRhq77e4GvxZ4fafp7k4obNoAE3PrGtT9mdb3VGS53dPwVlYKeTsl1Xx');
define('SECURE_AUTH_KEY', 'riRhq77e4GvxZ4fafp7k4obNoAE3PrGtT9mdb3VGS53dPwVlYKeTsl1Xx');
define('LOGGED_IN_KEY',   'riRhq77e4GvxZ4fafp7k4obNoAE3PrGtT9mdb3VGS53dPwVlYKeTsl1Xx');


// Ändern Sie den folgenden Parameter, wenn Sie eine übersetzte Version von
// WordPress nutzen. Für die gewünschte Sprache muss eine MO-Datei in
// wp-content/languages liegen.
// Installieren Sie beispielsweise de_DE.mo in wp-content/languages und
// setzen Sie WPLANG auf 'de_DE', um WordPress auf deutsch zu haben.
define ('WPLANG', 'de_DE');

/* Ab hier sind keine weiteren Änderungen notwendig. Viel Spaß beim Bloggen! */

if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH.'wp-settings.php');
?>
