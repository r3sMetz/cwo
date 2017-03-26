<?php
/**
 * Grundeinstellungen für WordPress
 *
 * Zu diesen Einstellungen gehören:
 *
 * * MySQL-Zugangsdaten,
 * * Tabellenpräfix,
 * * Sicherheitsschlüssel
 * * und ABSPATH.
 *
 * Mehr Informationen zur wp-config.php gibt es auf der
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php editieren}
 * Seite im Codex. Die Zugangsdaten für die MySQL-Datenbank
 * bekommst du von deinem Webhoster.
 *
 * Diese Datei wird zur Erstellung der wp-config.php verwendet.
 * Du musst aber dafür nicht das Installationsskript verwenden.
 * Stattdessen kannst du auch diese Datei als wp-config.php mit
 * deinen Zugangsdaten für die Datenbank abspeichern.
 *
 * @package WordPress
 */

/** WP-CONFIG-ENV */
if(isset($_SERVER['X_FORWARDED_HOST']) && ! empty($_SERVER['X_FORWARDED_HOST'])) {
	$hostname = $_SERVER['X_FORWARDED_HOST'];
} else {
	$hostname = $_SERVER['HTTP_HOST'];
}

	if(!defined('WP_ENV')){
		require('env/check.php');
	}


require('env/wp-config.' . WP_ENV . '.php');
/** WP-CONFIG-ENV */





/**
 * Der Datenbankzeichensatz, der beim Erstellen der
 * Datenbanktabellen verwendet werden soll
 */
define('DB_CHARSET', 'utf8mb4');

/**
 * Der Collate-Type sollte nicht geändert werden.
 */
define('DB_COLLATE', '');

/**#@+
 * Sicherheitsschlüssel
 *
 * Ändere jeden untenstehenden Platzhaltertext in eine beliebige,
 * möglichst einmalig genutzte Zeichenkette.
 * Auf der Seite {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * kannst du dir alle Schlüssel generieren lassen.
 * Du kannst die Schlüssel jederzeit wieder ändern, alle angemeldeten
 * Benutzer müssen sich danach erneut anmelden.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'b[/&F39F%L)eWTwko=${~Jq~8Qj,bi,Y6IT7 !I4s@2BHHtElMx^J#WAx2Q{pM&D');
define('SECURE_AUTH_KEY',  '8f&u1_o/wjQF{:|F%=i_6>Q=L#7A-e8g3SYWB`7{-P}]L;q%]{/n!#P{NwCs{RR6');
define('LOGGED_IN_KEY',    'Ai.I}e8f5l/W=2.ce%=ggS?efS$E#oV0)[5}.fB1CE$ta7_4.<`6b}0XNr`S+4W<');
define('NONCE_KEY',        ':`x(.@GtN:X9)Q?bA>!#>lIp~}YbaM~XdV7MUBngGE=2DN/UI$r!+NC|ENcG$yPp');
define('AUTH_SALT',        '))xNY-SXmy>zVn=oaUIlQ4VxDkMs%HS `%#.5#S7v~h##1tG?:6{/K*9?>87tK],');
define('SECURE_AUTH_SALT', ']xK#9#=U[7m^^yFl3qQAvS!{X_^6dcO[3:.>[sRvs!;RGtEH4dE8-v/}{+RpkA;%');
define('LOGGED_IN_SALT',   'JFI`oCATZ<0*u+W1Df6`O<(`ERU=:5 (O/q_8r[Z+07u;Bl[F.c6G$}&h+55}++&');
define('NONCE_SALT',       '#a7|~y_c_M4V*3TP(=r=j5Q5(k/xB!r5D-jNNWQluN5@AklAHL3D`9xF$Ahu4=qh');

/**#@-*/

/**
 * WordPress Datenbanktabellen-Präfix
 *
 * Wenn du verschiedene Präfixe benutzt, kannst du innerhalb einer Datenbank
 * verschiedene WordPress-Installationen betreiben.
 * Bitte verwende nur Zahlen, Buchstaben und Unterstriche!
 */
$table_prefix  = 'wpCiweoh';

/**
 * Für Entwickler: Der WordPress-Debug-Modus.
 *
 * Setze den Wert auf „true“, um bei der Entwicklung Warnungen und Fehler-Meldungen angezeigt zu bekommen.
 * Plugin- und Theme-Entwicklern wird nachdrücklich empfohlen, WP_DEBUG
 * in ihrer Entwicklungsumgebung zu verwenden.
 *
 * Besuche den Codex, um mehr Informationen über andere Konstanten zu finden,
 * die zum Debuggen genutzt werden können.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Das war’s, Schluss mit dem Bearbeiten! Viel Spaß beim Bloggen. */
/* That's all, stop editing! Happy blogging. */

/** Der absolute Pfad zum WordPress-Verzeichnis. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Definiert WordPress-Variablen und fügt Dateien ein.  */
require_once(ABSPATH . 'wp-settings.php');
