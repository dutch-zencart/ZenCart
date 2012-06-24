<?php
//dutch translation Zencart ; v1.3.7 2007-09-11 by Edwin Wiering ; v1.3.5 2006-09-04 by joostvdl ; dutch translation Zencart v1.2.6d 2005-11-12  by dutchguy 
//aangepast voor 1.3.8 2007-12-17 by wilbroek
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: email_extras.php 18698 2011-05-04 14:50:06Z wilt $
 */

// office use only
  define('OFFICE_FROM','<strong>Van:</strong>');
  define('OFFICE_EMAIL','<strong>E-mailadres afzender:</strong>');

  define('OFFICE_SENT_TO','<strong>Verstuurd naar:</strong>');
  define('OFFICE_EMAIL_TO','<strong>E-mailadres ontvanger:</strong>');
  define('OFFICE_USE','<strong>Alleen eigen gebruik:</strong>');
  define('OFFICE_LOGIN_NAME','<strong>Gebruikersnaam:</strong>');
  define('OFFICE_LOGIN_EMAIL','<strong>Aanmelden e-mail:</strong>');
  define('OFFICE_LOGIN_PHONE','<strong>Telefoon:</strong>');
  define('OFFICE_IP_ADDRESS','<strong>IP adres:</strong>');
  define('OFFICE_HOST_ADDRESS','<strong>Host adres:</strong>');
  define('OFFICE_DATE_TIME','<strong>Datum en tijd:</strong>');

// e-mail disclaimer
  define('EMAIL_DISCLAIMER', 'Dit e-mailadres is door u of één van onze klanten aan ons verstrekt. Indien u vindt dat u deze e-mail niet had willen of mogen ontvangen of heeft ontvangen als gevolg van een fout kunt u een e-mail sturen aan %s ');
  define('EMAIL_SPAM_DISCLAIMER','Indien uw e-mailadres uit ons bestand moet worden verwijderd ontvangen wij dit verzoek graag als reply op dit adres. Uw verzoek wordt zo spoedig mogelijk, zonder verdere vragen, in behandeling genomen en uitgevoerd conform uw wens.');
  define('EMAIL_FOOTER_COPYRIGHT','Copyright (c) ' .date('Y') . ' <a href="http://www.zen-cart.com" target="_blank">Zen Cart</a>. Powered by <a href="http://www.zen-cart.com" target="_blank">Zen Cart</a>');
  define('SEND_EXTRA_GV_ADMIN_EMAILS_TO_SUBJECT','[door ADMIN verstuurd]');
  define('SEND_EXTRA_DISCOUNT_COUPON_ADMIN_EMAILS_TO_SUBJECT','[Kortingsbonnen]');
  define('SEND_EXTRA_ORDERS_STATUS_ADMIN_EMAILS_TO_SUBJECT','[STATUS BESTELLINGEN]');
  define('TEXT_UNSUBSCRIBE', "\n\n Om u af te melden voor toekomstige nieuwsbrieven en andere promotionele activiteiten kunt u gebruik maken van de volgende link: \n");

// for whos_online when gethost is off
  define('OFFICE_IP_TO_HOST_ADDRESS', 'Uitgeschakeld');

define('TEXT_EMAIL_SUBJECT_ADMIN_USER_ADDED', 'Admin waarshuwing: Nieuwe admingebruiker toegevoegd.');
define('TEXT_EMAIL_MESSAGE_ADMIN_USER_ADDED', 'Administratieve waarshuwing: Een nieuwe admingebruiker (%s) is TOEGEVOEGD aan uw winkel door %s.' . "\n\n" . 'Als u of een geautoriseerde beheerder deze verandering niet heeft doorgevoerd, is het raadzaam dat u de beveiliging van uw site onmiddellijk controleerd.');
define('TEXT_EMAIL_SUBJECT_ADMIN_USER_DELETED', 'Admin waarshuwing: Een admingebruiker is verwijderd.');
define('TEXT_EMAIL_MESSAGE_ADMIN_USER_DELETED', 'Administratieve waarshuwing: Een admingebruiker (%s) is VERWIJDERD van uw winkel door %s.' . "\n\n" . 'Als u of een geautoriseerde beheerder deze verandering niet heeft doorgevoerd, is het raadzaam dat u de beveiliging van uw site onmiddellijk controleerd.');
define('TEXT_EMAIL_SUBJECT_ADMIN_USER_CHANGED', 'Admin waarshuwing: Admingebruikersdetails zijn gewijzigd.');
define('TEXT_EMAIL_ALERT_ADM_EMAIL_CHANGED', 'Admin waarshuwing: Admingebruiker (%s) e-mailadres is gewijzigd van (%s) in (%s) door (%s)');
define('TEXT_EMAIL_ALERT_ADM_NAME_CHANGED', 'Admin waarshuwing: Admingebruiker (%s) gebruikersnaam is gewijzigd van (%s) in (%s) door (%s)');
define('TEXT_EMAIL_ALERT_ADM_PROFILE_CHANGED', 'Admin waarshuwing: Admingebruiker (%s) beveiligingsprofiel is gewijzigd van (%s) naar (%s) door (%s)');