<?php
/*
//dutch translation Zencart ; v1.3.7 2007-09-11 by Edwin Wiering ; v1.3.5 2006-09-04 by joostvdl ; dutch translation Zencart v1.2.6d 2005-11-12  by dutchguy 
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: store_manager.php 19689 2011-10-04 15:51:25Z drbyte $
 */

  define('HEADING_TITLE', 'Winkelmanager');
  define('TABLE_CONFIGURATION_TABLE', 'Zoek CONSTANT definities');

  define('SUCCESS_PRODUCT_UPDATE_SORT_ALL', 'De volgorde van rangschikken voor opties is <strong>met succes</strong> gewijzigd.');
  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_PRICE_SORTER', 'De sorteervolgorde van de artikelprijzen is <strong>met succes</strong> gewijzigd');
  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_VIEWED', 'Bekeken artikelen <strong>met succes</strong> gewijzigd naar 0');
  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_ORDERED', 'Bestelde artikelen <strong>met succes</strong> gewijzigd naar 0');
  define('SUCCESS_UPDATE_ALL_MASTER_CATEGORIES_ID', 'Alle hoofdcategorieën van gekoppelde artikelen zijn <strong>met succes</strong> ingesteld.');
  define('SUCCESS_UPDATE_COUNTER', 'De teller is <strong>met succes</strong> gewijzigd naar: ');

  define('ERROR_CONFIGURATION_KEY_NOT_FOUND', '<strong>Foutmelding:</strong> er zijn geen overeenkomstige "configuration keys" gevonden voor ...');
  define('ERROR_CONFIGURATION_KEY_NOT_ENTERED', '<strong>Foutmelding:</strong> er is geen "configuration key" of tekst ingevuld om naar te zoeken... het zoeken is afgebroken.');

  define('TEXT_INFO_COUNTER_UPDATE', '<strong>Wijzig teller</strong><br />nieuwe waarde: ');
  define('TEXT_INFO_PRODUCTS_PRICE_SORTER_UPDATE', '<strong>Wijzig de sorteervolgorde van de prijzen voor	alle artikelen</strong><br />mogelijkheid tot sorteren op getoonde prijzen: ');
  define('TEXT_INFO_PRODUCTS_VIEWED_UPDATE', '<strong>Stel de waarde in voor alle bekeken artikelen</strong><br />waarde wordt weer 0 ');
  define('TEXT_INFO_PRODUCTS_ORDERED_UPDATE', '<strong>Stel de waarde in voor alle bestelde artikelen</strong><br />waarde wordt weer 0 ');
  define('TEXT_INFO_MASTER_CATEGORIES_ID_UPDATE', '<strong>Stel voor alle artikelen de hoofdcategorie ID in</strong><br />te gebruiken voor gekoppelde artikelen en prijzen ');

  define('TEXT_NEW_ORDERS_ID', 'Nieuwe bestelling ID');
  define('TEXT_INFO_SET_NEXT_ORDER_NUMBER', '<strong>Set next order number</strong><br />NOTE: You cannot set the order number to a value lower than any existing order already in the database.');
  define('TEXT_MSG_NEXT_ORDER', 'The next order number has been set to %s');
  define('TEXT_MSG_NEXT_ORDER_MAX', 'Due to existing order data, the next order number is currently: %s');
  define('TEXT_MSG_NEXT_ORDER_TOO_LARGE', 'Due to database limitations, you cannot set the next order number higher than 2000000000. Please choose a lower value.');

  define('TEXT_CONFIGURATION_CONSTANT', '<strong>Zoek <u>CONSTANTS</u> of taal gerelateerde <u>defines</u></strong>');
  define('TEXT_CONFIGURATION_KEY', 'Key of Naam:');
  define('TEXT_INFO_CONFIGURATION_UPDATE', '<strong>Opmerking:</strong> ONSTANTS worden in hoofdletters geschreven.<br />Zoeken in taalbestanden kan een alternatief zijn wanneer er niks wordt gevonden in de database tabellen.');


  define('TEXT_CONFIGURATION_CONSTANT_FILES', '<strong>Zoek in taal gerelateerde <u>defines</u></strong>');
  define('TEXT_CONFIGURATION_KEY_FILES', 'Zoektekst:');
  define('TEXT_INFO_CONFIGURATION_UPDATE_FILES', '<strong>Opmerking:</strong> Het zoeken in een taal bestand kan in hoofd- en kleine letters.');

  define('TABLE_TITLE_KEY', '<strong>Sleutelwaarde:</strong>');
  define('TABLE_TITLE_TITLE', '<strong>Titel:</strong>');
  define('TABLE_TITLE_DESCRIPTION', '<strong>Beschrijving:</strong>');
  define('TABLE_TITLE_GROUP', '<strong>Groep:</strong>');
  define('TABLE_TITLE_VALUE', '<strong>Waarde:</strong>');

  define('TEXT_LANGUAGE_LOOKUPS', 'Kies taal bestand(en) om in te zoeken:');
  define('TEXT_LANGUAGE_LOOKUP_NONE', 'Geen');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_LANGUAGE', 'Alle taal bestanden voor ' . strtoupper($_SESSION['language']) . ' - Catalog/Admin');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG', 'Alle taal bestanden - Catalog (' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . 'english.php /dutch.php etc.)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG_TEMPLATE', 'Alle bestanden standaard taal - Catalog (' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN', 'Alle taal bestanden - Admin (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . 'english.php /dutch.php etc.)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN_LANGUAGE', 'Alle bestanden standaard taal - Admin (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ALL', 'Alle huidig geselecteerde taal bestanden - Catalog/Admin');

  define('TEXT_INFO_NO_EDIT_AVAILABLE','Geen wijziging beschikbaar');
  define('TEXT_INFO_CONFIGURATION_HIDDEN', ' of, VERBORGEN');

  define('TEXT_INFO_DATABASE_OPTIMIZE', '<strong>Optimaliseer de Database</strong> om ongebruikte ruimte van verwijderde records vrij te maken.<br />Optioneel draai maandelijks of weekelijks deze optimalisatie op een drukke database.<br />(Het beste om dit uit te voeren als het minder druk is.)');
  define('TEXT_INFO_OPTIMIZING_DATABASE_TABLES', 'Database table optimization in progress. This may take a few minutes. Please wait. The previous menu will re-appear when finished ... ');
  define('SUCCESS_DB_OPTIMIZE', 'Database Optimalizatie - Tabellen verwerkt: ');

  define('TEXT_INFO_PURGE_DEBUG_LOG_FILES', '<strong>Cleanup Debug Log Files</strong><br /><strong>CAUTION: </strong>Zen Cart records PHP error messages for debugging purposes, and many payment modules can be set to log debug data to diagnose communication problems. <br />Clicking this purge option will *permanently* remove *ALL* debug logs associated with PHP errors and the PayPal, Authorize.net, and Linkpoint/FirstData modules.');
  define('SUCCESS_CLEAN_DEBUG_FILES', 'Debug Log Files Purged');
