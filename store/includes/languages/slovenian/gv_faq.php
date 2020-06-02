<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott C Wilson 2019 Jan 15 Modified in v1.5.6b $
 */

define('NAVBAR_TITLE', TEXT_GV_NAME . ' FAQ');
define('HEADING_TITLE', TEXT_GV_NAME . ' FAQ');

define('TEXT_INFORMATION', '<a name="Top"></a>
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=1','NONSSL').'">Kako kupim ' . TEXT_GV_NAMES . '</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=2','NONSSL').'">Kako pošljem ' . TEXT_GV_NAMES . '</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=3','NONSSL').'">Kako kupujem z ' . TEXT_GV_NAMES . '</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=4','NONSSL').'">Kako vnovčim ' . TEXT_GV_NAMES . '</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=5','NONSSL').'">Imam težave z bonom</a><br />
');
switch ($_GET['faq_item']) {
  case '1':
define('SUB_HEADING_TITLE','Kako kupim ' . TEXT_GV_NAMES);
define('SUB_HEADING_TEXT', TEXT_GV_NAMES . ' lahko kupite enako kakor ostale izdelke v naši trgovini, uporabite lahko vse različne metode.
       Ko boste kupili ' . TEXT_GV_NAME . ', bo dodan k vašemu
       ' . TEXT_GV_NAME . ' stanju. Če že imate ' . TEXT_GV_NAME . ' stanje, videli boste, da je vaše stanje tudi v razdelku Moj račun, kjer je tudi link za pošiljanje ' . TEXT_GV_NAME . ' željeni osebi po e-mailu.');
  break;
  case '2':
define('SUB_HEADING_TITLE','Kako pošljem ' . TEXT_GV_NAMES);
define('SUB_HEADING_TEXT','Pošljete lahko ' . TEXT_GV_NAME . ' v razdelku Moj račun.
       Ko pošljete ' . TEXT_GV_NAME . ' morate vnesti naslednje podatke:
       Ime osebe kateri pošiljate ' . TEXT_GV_NAME . ';
       E-mail naslov osebe ' . TEXT_GV_NAME . ';
       Znesek, ki ga pošiljate (lahko pošljete tudi samo del ' . TEXT_GV_NAME . ' zneska.);
       Kratek opis bo avtomatično poslan preko e-maila;
       Prosimo, da so ti podatki pravilni, lahko jih boste spremenili po svoji želji, predenj boste poslali darilni bon.');
  break;
  case '3':
  define('SUB_HEADING_TITLE','Kako kupujem z ' . TEXT_GV_NAMES);
  define('SUB_HEADING_TEXT','V primeru, da imate dobrostanje na vašem ' . TEXT_GV_NAME . ', potem lahko uporabite za nakup to stanje.
         Izberite vsoto ' . TEXT_GV_NAME . ' iz vašega stanja.
         V primeru, da vsota ne bo dovolj, boste morali izbrati tudi plačilno metodo.
         V primeru, da je vsota dobrostanja višja kot znesek nakupa, bo ostanek vrnjen na vaše stanje ' . TEXT_GV_NAME . '.');
  break;
  case '4':
  define('SUB_HEADING_TITLE','Kako vnovčim ' . TEXT_GV_NAMES);
  define('SUB_HEADING_TEXT','Če ste dobili ' . TEXT_GV_NAME . ' preko e-mail, bo e-mail vseboval podatke o osebi, ki vam je poslala ' . TEXT_GV_NAME . ', skupaj s kratkim sporočilom.
         Bon lahko uporabite na naši trgovini ali v celoti pri nakupu ali pa samo del. Ostanek bo ostal na bonu.
         Prosimo, da e-mail spravite predenj opravite nakup na naši trgovini.');
  break;
  case '5':
  define('SUB_HEADING_TITLE','Imam težave z bonom.');
  define('SUB_HEADING_TEXT','Glede vprašanj z bonom ' . TEXT_GV_NAME . ', nam prosimo pošljite e-mail na '. STORE_OWNER_EMAIL_ADDRESS . '. Prosimo opišite čim bolj podrobno vaš problem.');
  break;
  default:
  define('SUB_HEADING_TITLE','');
  define('SUB_HEADING_TEXT','Prosimo izberite vprašnje.');

  }

  define('TEXT_GV_REDEEM_INFO', 'Prosimo vnesite vašo ' . TEXT_GV_NAME . ' kodo za popust: ');
  define('TEXT_GV_REDEEM_ID', 'Koda za popust:');
