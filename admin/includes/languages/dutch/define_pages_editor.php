<?php
//dutch translation Zencart ; v1.3.7 2007-09-11 by Edwin Wiering ; v1.3.5 2006-09-04 by joostvdl ; dutch translation Zencart v1.2.6d 2005-11-12  by dutchguy 
//aangepast voor 1.3.8. 2007-12-17 by wilbroek
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003 The zen-cart developers                           |
// |                                                                      |
// | http://www.zen-cart.com/index.php                                    |
// |                                                                      |
// | Portions Copyright (c) 2003 osCommerce                               |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
// $Id: define_pages_editor.php 1969 2005-09-13 06:57:21Z drbyte $
//

define('HEADING_TITLE', 'Kies Pagina Editor voor: ');
define('NAVBAR_TITLE', 'Kies Pagina Editor');

define('TEXT_INFO_EDIT_PAGE', 'Selecteer pagina om aan te passen:');

define('TEXT_INFO_MAIN_PAGE', 'Startpagina');

define('TEXT_INFO_SHIPPINGINFO', 'Verzenden en Terugsturen');
define('TEXT_INFO_PRIVACY', 'Privacy verklaring');
define('TEXT_INFO_CONDITIONS', 'Algemene voorwaarden');
define('TEXT_INFO_CONTACT_US', 'Contact gegevens');
define('TEXT_INFO_CHECKOUT_SUCCESS', 'Afrekenen met succes afgerond');

define('TEXT_INFO_PAGE_2', 'Pagina 2');
define('TEXT_INFO_PAGE_3', 'Pagina 3');
define('TEXT_INFO_PAGE_4', 'Pagina 4');

define('TEXT_FILE_DOES_NOT_EXIST', 'Bestand komt niet voor: %s');

define('ERROR_FILE_NOT_WRITEABLE', 'Foutmelding: bestand kan niet worden beschreven. Stel de juiste bevoegdheden in voor: %s');

define('TEXT_INFO_SELECT_FILE', 'Selecteer een bestand om te wijzigen ...');
define('TEXT_INFO_EDITING', 'Wijzig bestand:');

define('TEXT_INFO_CAUTION','Opmerking: wijzig altijd alleen bestanden in je template override directory, Voorbeeld: /languages/' . $_SESSION['language'] . '/html_includes/' . $template_dir . '<br />Zorg altijd voor <strong>BACKUPS</strong> voordat je bestanden wijzigd.');
?>