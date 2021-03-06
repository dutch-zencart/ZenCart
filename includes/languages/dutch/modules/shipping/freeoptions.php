<?php
/**
 * @package languageDefines Dutch
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright Nederlandse teksten 2007 zenned.nl
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @licentie in het Nederlands http://users.skynet.be/xterm/gpld.txt GNU Algemene Publieke Licentie V2.0
 * @version $Id: $Id: freeoptions.php 3830 2006-06-21 23:47:16Z bjarnetenharkel $
 * @laatste versie kijk op: zen-cart.nl
 * @gesponsorde vertaling door: SIDER | automatisering, http://sider.nl
 */

define('MODULE_SHIPPING_FREEOPTIONS_TEXT_TITLE', 'Optioneel geen verzendkosten');
define('MODULE_SHIPPING_FREEOPTIONS_TEXT_DESCRIPTION', '
Optioneel geen verzendkosten word gebruikt om een gratis verzendmethode te bieden als er ook andere verzendmethodes worden weergegeven.
Kan worden ingesteld als: Altijd weergeven, Totaal bestelling, gewicht bestelling of op basis van het aantal items dat besteld wordt.
De optioneel geen verzendkosten module word niet getoond als de Geen verzendkosten module word weergegeven.<br /><br />
Totaal instellen op >= 0.00 en <= niks (leeg laten) zal deze module activeren om te worden getoond bij alle verzendmethodes, behalve voor Geen verzendkosten - gratis verzend.<br /><br />
NB: Door alle insttellingen voor totaal, gewicht en items tellen leeg te laten zal deze module deactiveren.<br /><br />
NB: De Optioneel geen verzendkosten module zal niet worden getoond als de Geen verzendkosten staat ingesteld op aktiveren bij een bestelgewicht van 0.
zie: Geen verzendkosten
');
define('MODULE_SHIPPING_FREEOPTIONS_TEXT_WAY', 'Geen verzendkosten');

?>