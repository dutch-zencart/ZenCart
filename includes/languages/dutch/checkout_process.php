<?php
/**
 * @package languageDefines Dutch
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright Nederlandse teksten 2007 zenned.nl
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @licentie in het Nederlands http://users.skynet.be/xterm/gpld.txt GNU Algemene Publieke Licentie V2.0
 * @version $Id: checkout_process.php 1969 2005-09-13 06:57:21Z bjarnetenharkel $
 * @laatste versie kijk op: zen-cart.nl
 * @gesponsorde vertaling door: SIDER | automatisering, http://sider.nl
 */

define('EMAIL_TEXT_SUBJECT', 'Bevestigen bestelling');
define('EMAIL_TEXT_HEADER', 'Bevestigen bestelling');
define('EMAIL_TEXT_FROM',' van ');  //toegevoegd aan EMAIL_TEXT_HEADER, alleen bovenaan e-mail in plattetekst indeling
define('EMAIL_THANKS_FOR_SHOPPING','Hartelijk bedankt voor Uw bestelling!');
define('EMAIL_DETAILS_FOLLOW','Hieronder staan de details van uw bestelling.');
define('EMAIL_TEXT_ORDER_NUMBER', 'Bestelnummer:');
define('EMAIL_TEXT_INVOICE_URL', 'Gespecificeerde rekening:');
define('EMAIL_TEXT_INVOICE_URL_CLICK', 'Klik hier voor een gespecificeerde rekening');
define('EMAIL_TEXT_DATE_ORDERED', 'Datum besteld:');
define('EMAIL_TEXT_PRODUCTS', 'Artikelen');
define('EMAIL_TEXT_SUBTOTAL', 'Subtotaal:');
define('EMAIL_TEXT_TAX', 'BTW:        ');
define('EMAIL_TEXT_SHIPPING', 'Verzendkosten: ');
define('EMAIL_TEXT_TOTAL', 'Totaal:    ');
define('EMAIL_TEXT_DELIVERY_ADDRESS', 'Afleveradres');
define('EMAIL_TEXT_BILLING_ADDRESS', 'Factuuradres');
define('EMAIL_TEXT_PAYMENT_METHOD', 'Betaalmethode');

define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('TEXT_EMAIL_VIA', 'via');

// gebruik geen # als afkorting voor nummer (gebruikelijk in het Engels) aangezien sommige anti-spam filters mail dan blokkeren
define('EMAIL_ORDER_NUMBER_SUBJECT', ' Nr.: ');
define('HEADING_ADDRESS_INFORMATION','Adresinfo');
define('HEADING_SHIPPING_METHOD','Verzendmethode');
?>