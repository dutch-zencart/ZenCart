<?php
/*
// dutch translation Zencart ; v1.3.7 2007-09-11 by Edwin Wiering ; v1.3.5 2006-09-04 by joostvdl ; dutch translation Zencart v1.2.6d 2005-11-12  by dutchguy 
 * @package admin
 * @copyright Copyright 2003-2009 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: modules.php 14455 2009-09-24 18:59:43Z drbyte $
 */

define('HEADING_TITLE_MODULES_PAYMENT', 'Module betaalmethode');
define('HEADING_TITLE_MODULES_SHIPPING', 'Module verzendmethode');
define('HEADING_TITLE_MODULES_ORDER_TOTAL', 'Module opbouw factuur');
define('HEADING_TITLE_MODULES_PRODUCT_TYPES', 'Module soort artikel');

define('TABLE_HEADING_MODULES', 'Module');
define('TABLE_HEADING_SORT_ORDER', 'Rangschikking');
define('TABLE_HEADING_ORDERS_STATUS','Status bestelling');
define('TABLE_HEADING_ACTION', 'Actie(s)');

define('TEXT_MODULE_DIRECTORY', 'Directory waarin deze module is opgeslagen:');
define('WARNING_MODULES_SORT_ORDER','Waarschuwing: Er zijn dubbele sorteervolgordes die resulteren in verkeerde berekeningen.<br />Pas deze punten nu aan!');
define('ERROR_MODULE_FILE_NOT_FOUND', 'Waarschuwing: de module is niet geladen omdat er een taalbestand mist: ');
define('TEXT_EMAIL_SUBJECT_ADMIN_SETTINGS_CHANGED', 'Waarschuwing: Uw Admin instellingen zijn gewijzigd in uw webwinkel.');
define('TEXT_EMAIL_MESSAGE_ADMIN_SETTINGS_CHANGED', 'Dit is een automatisch e-mail van uw Zen Cart winkel om u te waarschuwen van een verandering die net is gemaakt in uw administratieve instellingen: ' . "\n\n" . 'Opmerking: Admin instellingen zijn VERANDERD voor de [%s] module, door uw Zen Cart admin gebruiker %s.' . "\n\n" . 'Als u niet deze veranderingen hebt doorgevoerd, is het raadzaam dat u de instellingen onmiddellijk controleerd.' . "\n\n" . 'Als u al op de hoogte was van deze wijzigingen, dan kunt u dit automatische e-mailbericht negeren.');
define('TEXT_EMAIL_MESSAGE_ADMIN_MODULE_INSTALLED', 'Dit is een automatisch e-mail van uw Zen Cart winkel om u te waarschuwen van een verandering die net is gemaakt in uw administratieve instellingen: ' . "\n\n" . 'Opmerking: Admin instellingen zijn gewijzigd. De [%s] module is geïnstalleerd door uw Zen Cart admin gebruiker %s.' . "\n\n" . 'Als u niet deze veranderingen hebt doorgevoerd, is het raadzaam dat u de instellingen onmiddellijk controleerd.' . "\n\n" . 'Als u al op de hoogte was van deze wijzigingen, dan kunt u dit automatische e-mailbericht negeren.');
define('TEXT_EMAIL_MESSAGE_ADMIN_MODULE_REMOVED', 'Dit is een automatisch e-mail van uw Zen Cart winkel om u te waarschuwen van een verandering die net is gemaakt in uw administratieve instellingen: ' . "\n\n" . 'Opmerking: Admin instellingen zijn gewijzigd. De [%s] module is VERWIJDERD door uw Zen Cart admin gebruiker %s.' . "\n\n" . 'Als u niet deze veranderingen hebt doorgevoerd, is het raadzaam dat u de instellingen onmiddellijk controleerd.' . "\n\n" . 'Als u al op de hoogte was van deze wijzigingen, dan kunt u dit automatische e-mailbericht negeren.');
define('TEXT_DELETE_INTRO', 'Weet u zeker dat u deze module wilt verwijderen?');
define('TEXT_WARNING_SSL_EDIT', 'Waarschuwing: <a href="http://tutorials.zen-cart.com/index.php?article=14" target="_blank">Om veiligheidsredenen is het bewerken van deze module uitgeschakeld totdat uw Admin is geconfigureerd voor SSL</a>.');
define('TEXT_WARNING_SSL_INSTALL', 'Waarschuwing: <a href="http://tutorials.zen-cart.com/index.php?article=14" target="_blank">Om veiligheidsredenen is de installatie van deze module uitgeschakeld totdat uw Admin is geconfigureerd voor SSL</a>.');