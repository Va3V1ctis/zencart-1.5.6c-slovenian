<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2018 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott C Wilson Mon Apr 23 08:06:02 2018 -0400 Modified in v1.5.6 $
 */

define ('EMAIL_LOGO_FILENAME', 'header.jpg');  //-File is present in /email folder
define ('EMAIL_LOGO_WIDTH', '550');
define ('EMAIL_LOGO_HEIGHT', '110');
define ('EMAIL_LOGO_ALT_TITLE_TEXT', ''); //Zen Cart! The Art of E-commerce

// -----
// If you want to include some extra information in each email's header information (like perhaps the store address and/or phone number),
// set this value to contain the full HTML content to be copied, e.g. '<div id="extra-stuff">Extra stuff for header</div>'.
//
define ('EMAIL_EXTRA_HEADER_INFO', '');

// office use only
define('OFFICE_FROM','<strong>Od:</strong>');
define('OFFICE_EMAIL','<strong>E-mail:</strong>');

define('OFFICE_SENT_TO','<strong>Poslano:</strong>');
define('OFFICE_EMAIL_TO','<strong>Na E-mail:</strong>');

define('OFFICE_USE','<strong>Samo za interno uporabo:</strong>');
define('OFFICE_LOGIN_NAME','<strong>Ime:</strong>');
define('OFFICE_LOGIN_EMAIL','<strong>E-mail:</strong>');
define('OFFICE_LOGIN_PHONE','<strong>Telefon:</strong>');
define('OFFICE_LOGIN_FAX','<strong>Fax:</strong>');
define('OFFICE_IP_ADDRESS','<strong>IP naslov:</strong>');
define('OFFICE_HOST_ADDRESS','<strong>Strežnik:</strong>');
define('OFFICE_DATE_TIME','<strong>Datum in čas:</strong>');
if (!defined('OFFICE_IP_TO_HOST_ADDRESS')) define('OFFICE_IP_TO_HOST_ADDRESS', 'OFF');

define('EMAIL_TEXT_TELEPHONE', 'Telefon: ');

// email disclaimer
define('EMAIL_DISCLAIMER', 'E-mail smo dobili od vas ali od enega izmed naših kupcev, v primeru, da e-mail ni željen, nam ga prosimo pošljite na %s ');
define('EMAIL_SPAM_DISCLAIMER','E-mail je bil poslan v skladu z GPDR pravili.');
// Define a message you'd like to add to an order confirmation email
define('EMAIL_ORDER_MESSAGE',''); 
define('EMAIL_FOOTER_COPYRIGHT','(c) ' . date('Y') . ' <a href="' . zen_href_link(FILENAME_DEFAULT) . '" target="_blank">' . STORE_NAME . '</a>.');
define('TEXT_UNSUBSCRIBE', "\n\nZa odjavo od naših novic in e-mailov se lahko tukaj odjavite: \n");

// email advisory for all emails customer generate - tell-a-friend and GV send
define('EMAIL_ADVISORY', '-----' . "\n" . '<strong>POMEMBNO:</strong> Za varnost in omejitev zlorabe spremljamo podatke o poslanih e-mailih. V primeru, da e-mail ni željen, nam ga prosimo pošljite na ' . STORE_OWNER_EMAIL_ADDRESS . "\n\n");

// email advisory included warning for all emails customer generate - tell-a-friend and GV send
define('EMAIL_ADVISORY_INCLUDED_WARNING', '<strong>To sporočilo je bilo poslano v skladu z našo trgovino:</strong>');


// Admin additional email subjects
define('SEND_EXTRA_CREATE_ACCOUNT_EMAILS_TO_SUBJECT','[USTVARI RAČUN]');
define('SEND_EXTRA_GV_CUSTOMER_EMAILS_TO_SUBJECT','[DARILNI BON STRANKI POSLAN]');
define('SEND_EXTRA_NEW_ORDERS_EMAILS_TO_SUBJECT','[NOVO NAROČILO]');
define('SEND_EXTRA_CC_EMAILS_TO_SUBJECT','[DODATNI PODATKI O KREDITNI KARTICI] #');

// Low Stock Emails
define('EMAIL_TEXT_SUBJECT_LOWSTOCK','Opozorilo: Nizka zaloga');
define('SEND_EXTRA_LOW_STOCK_EMAIL_TITLE','Poročilo o nizki zalogi: ');
