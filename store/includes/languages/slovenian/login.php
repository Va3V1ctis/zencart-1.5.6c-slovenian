<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2009 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: login.php 14280 2009-08-29 01:33:18Z drbyte $
 */

define('NAVBAR_TITLE', 'Prijava');
define('HEADING_TITLE', 'Pozdravljeni, prosimo prijavite se');

define('HEADING_NEW_CUSTOMER', 'Nova stanka? Prosimo, da izpolnite podatke za plačilo');
define('HEADING_NEW_CUSTOMER_SPLIT', 'Nova stanka');

define('TEXT_NEW_CUSTOMER_INTRODUCTION', 'Ustvarite račun pri <strong>' . STORE_NAME . '</strong> s katerim bo vaše kupovanje hitrejše in udobnejše.');
define('TEXT_NEW_CUSTOMER_INTRODUCTION_SPLIT', 'Imate PayPal račun? Bi radi hitro plačali s kreditno kartico? Prosimo prijavite se in uporabite možnost hitrega nakupa.');
define('TEXT_NEW_CUSTOMER_POST_INTRODUCTION_DIVIDER', '<span class="larger">ali</span><br />');
define('TEXT_NEW_CUSTOMER_POST_INTRODUCTION_SPLIT', 'Ustvarite račun pri <strong>' . STORE_NAME . '</strong> s katerim bo vaše kupovanje hitrejše in udobnejše.');

define('HEADING_RETURNING_CUSTOMER', 'Že imate račun: Prosimo prijavite se.');
define('HEADING_RETURNING_CUSTOMER_SPLIT', 'Stranke, ki že imajo račun pri nas');

define('TEXT_RETURNING_CUSTOMER_SPLIT', 'Da bi končali nakup se prosimo prijavite v <strong>' . STORE_NAME . '</strong> račun.');

define('TEXT_PASSWORD_FORGOTTEN', 'Ste pozabili svoje geslo?');

define('TEXT_LOGIN_ERROR', 'NAPAKA: Geslo in e-mail se ne ujemate, prosimo poskusite znova.');
define('TEXT_VISITORS_CART', '<strong>OPOZORILO:</strong> V primeru, da ste že kupovali in pustili izdelke v košarici jih bom sedaj združili z vašo košarico, prosimo preverite vsebino košarice. <a href="javascript:session_win();">[Več informacij]</a>');

define('TABLE_HEADING_PRIVACY_CONDITIONS', '<span class="privacyconditions">Politika zasebnosti</span>');
define('TEXT_PRIVACY_CONDITIONS_DESCRIPTION', '<span class="privacydescription">Prosimo, da označite, da se strinjate z našo politiko zasebnosti. Našo politiko zasebnosti lahko</span> <a href="' . zen_href_link(FILENAME_PRIVACY, '', 'SSL') . '"><span class="pseudolink">preberete tukaj</span></a>.');
define('TEXT_PRIVACY_CONDITIONS_CONFIRM', '<span class="privacyagree">Prebral sem in se strinjal s politiko zasebnosti</span>');

define('ERROR_SECURITY_ERROR', 'Zgodila se je napaka pri prijavi, prosimo prijavite se ponovno.');

define('TEXT_LOGIN_BANNED', 'NAPAKA: Prosimo, prijavite se.');
