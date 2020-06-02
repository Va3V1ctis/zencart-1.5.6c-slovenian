<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Author: DrByte  Sun Oct 18 01:50:54 2015 -0400 Modified in v1.5.5 $
 */

define('NAVBAR_TITLE_1', 'Prijava');
define('NAVBAR_TITLE_2', 'Pozabljeno geslo');

define('HEADING_TITLE', 'Pozabljeno geslo');

define('TEXT_MAIN', 'Prosimo vnesite vaš e-mail in kmalu vam bomo poslali novo geslo.');

define('EMAIL_PASSWORD_REMINDER_SUBJECT', STORE_NAME . ' - Novo geslo');
define('EMAIL_PASSWORD_REMINDER_BODY', 'Novo geslo je zahteval ' . $_SERVER['REMOTE_ADDR']  . '.' . "\n\n" . 'Vaše novo geslo je \'' . STORE_NAME . '\' is:' . "\n\n" . '   %s' . "\n\nKo se boste prijavili z novim geslom, ga lahko spremenite v razdelku 'Moj račun'.");

define('SUCCESS_PASSWORD_SENT', 'Najlepša hvala. V primeru, da vaš e-mail naslov obstaja v našem sistemu, vam bomo poslali novo geslo kmalu.');
