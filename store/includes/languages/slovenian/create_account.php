<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2012 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version GIT: $Id: Author: DrByte  Sat Jul 21 16:05:31 2012 -0400 Modified in v1.5.1 $
 */

define('NAVBAR_TITLE', 'Ustvari račun');

define('HEADING_TITLE', 'Podatki o mojem računu');

define('TEXT_ORIGIN_LOGIN', '<strong class="note">OPOZORILO:</strong> V primeru, da ste že naredili račun pri nas, vas prosimo, da se <a href="%s">prijavite</a>.');

define('ERROR_CREATE_ACCOUNT_SPAM_DETECTED', 'Najlepša hvala, moderator bo kmalu pregledal vaš zahteve za ustvaritev računa.');


// greeting salutation
define('EMAIL_SUBJECT', 'Pozdravljeni na ' . STORE_NAME);
define('EMAIL_GREET_MR', 'Spoštovani g. %s,' . "\n\n");
define('EMAIL_GREET_MS', 'Spoštovana ga. %s,' . "\n\n");
define('EMAIL_GREET_NONE', 'Spoštovani %s' . "\n\n");

// First line of the greeting
define('EMAIL_WELCOME', 'Pozdravljeni na <strong>' . STORE_NAME . '</strong>.');
define('EMAIL_SEPARATOR', '--------------------');
define('EMAIL_COUPON_INCENTIVE_HEADER', 'Čestitamo za ustvarjen račun, da bi vas pozdravili na naši trgovini, vam podarjamo kodo za popust!' . "\n\n");
// your Discount Coupon Description will be inserted before this next define
define('EMAIL_COUPON_REDEEM', 'Da bi uporabili kodo za popust, kodo ' . TEXT_GV_REDEEM . ' vnesite pri nakupu:  <strong>%s</strong>' . "\n\n");
define('TEXT_COUPON_HELP_DATE', '<p>Koda za popust je veljavna od %s do %s</p>');

define('EMAIL_GV_INCENTIVE_HEADER', 'Poslali smo vam kodo za popust: ' . TEXT_GV_NAME . ' za %s!' . "\n");
define('EMAIL_GV_REDEEM', '' . TEXT_GV_NAME . ' ' . TEXT_GV_REDEEM . ' je: %s ' . "\n\n" . 'Uporabite jo, da vnesete ' . TEXT_GV_REDEEM . ' pri nakupu na strani 1 od 3 pri nakupu. ');
define('EMAIL_GV_LINK', ' Lahko pa uporabite tudi naslednjo povezavo: ' . "\n");
// GV link will automatically be included before this line

define('EMAIL_GV_LINK_OTHER','Ko ste kodo za popust ' . TEXT_GV_NAME . ' vnesli v naši trgovini, lahko kodo ' . TEXT_GV_NAME . ' uporabite sami ali pa jo lahko tudi pošljete svojemu prijatelju ali prijateljici.' . "\n\n");

define('EMAIL_TEXT', 'Ker ste uspešno ustvarili račun pri nas, lahko sedaj uživate <strong>mnogo naših storitev</strong>. Naj jih izpostavimo samo nekaj:' . "\n\n<ul>" . '<li><strong>Zgodovina vaših nakupov</strong> - Prikaže vse nakupe, ki ste jih ustvarili pri nas.' . "\n\n" . '<li><strong>Košarica</strong> - Vsi izdelki, ki jih dodate v košarico vas bodo počakali dokler jih ne odstranite ali potrdite nakup.' . "\n\n" . '<li><strong>Možnost različnih naslovov</strong> - Lahko ustvarite več različnih naslovov, to je idealno, če želite nakup poslati komu drugemu, mogoče za rojstni dan?' . "\n\n" . '<li><strong>Mnenja o izdelkih</strong> - Veseli bomo vašega mnenja o izdelkih.' . "\n\n</ul>");
define('EMAIL_CONTACT', 'V primeru, da imate težave ali vprašanja pri uporabi naše trgovina nam prosimo pišite na: <a href="mailto:' . STORE_OWNER_EMAIL_ADDRESS . '">'. STORE_OWNER_EMAIL_ADDRESS ." </a>\n\n");
define('EMAIL_GV_CLOSURE', "\n" . 'Lep pozdrav,' . "\n\n" . STORE_OWNER . "\nStore Owner\n\n". '<a href="' . HTTP_SERVER . DIR_WS_CATALOG . '">'.HTTP_SERVER . DIR_WS_CATALOG ."</a>\n\n");

// email disclaimer - this disclaimer is separate from all other email disclaimers
define('EMAIL_DISCLAIMER_NEW_CUSTOMER', 'Ta e-mail smo dobili od vas ali od nekoga, ki vas pozna. V primeru, da mislite, da je to sporočilo napačna nam ga prosimo pošljite na %s ');
