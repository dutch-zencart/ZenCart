<?php
/**
 * @package languageDefines Dutch
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright Nederlandse teksten 2007 zenned.nl
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @licentie in het Nederlands http://users.skynet.be/xterm/gpld.txt GNU Algemene Publieke Licentie V2.0
 * @version $Id: popup_cvv_help.php 1969 2005-09-13 06:57:21Z bjarnetenharkel $
 * @laatste versie kijk op: zen-cart.nl
 * @gesponsorde vertaling door: SIDER | automatisering, http://sider.nl
 */

define('HEADING_CVV', 'Wat is CVV?');
define('TEXT_CVV_HELP1', 'Visa en Mastercard maken gebruik van 3 cijferig Card Verificatie Nummer<br /><br />
                    Voor uw veiligheid dient u het card verificatie nummer in te vullen.<br /><br />
                    Het verificatie nummer is een 3-cijferig nummer op de handtekeningstreek aan de achterzijde van de card.
                    Dit is een geprint nummer normaal gesproken rechts van uw handtekening. Bij buitendlandse kaarten staat
                    het nummer soms aan de voorkant van de card <br />' .
                    zen_image(DIR_WS_TEMPLATE_ICONS . 'cvv2visa.gif'));

define('TEXT_CVV_HELP2', 'American Express 4 cijferig card verificatie nummer<br /><br />
                    Het American Express verificatie nummer is een 4-cijferig nummer op de voorzijde van de card.
                    Dit is een geprint nummer normaal gesproken rechts van uw creditcard nummer<br />' .
                    zen_image(DIR_WS_TEMPLATE_ICONS . 'cvv2amex.gif'));

define('TEXT_CLOSE_CVV_WINDOW', 'Sluit venster [x]');
?>