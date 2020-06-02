<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: gv_send.php 3421 2006-04-12 04:16:14Z drbyte $
 */

define('HEADING_TITLE', 'Pošlji ' . TEXT_GV_NAME);
define('HEADING_TITLE_CONFIRM_SEND', 'Pošlji ' . TEXT_GV_NAME . ' potrditev');
define('HEADING_TITLE_COMPLETED', TEXT_GV_NAME . ' poslano');
define('NAVBAR_TITLE', 'Pošlji ' . TEXT_GV_NAME);
define('EMAIL_SUBJECT', 'Sporočilo od ' . STORE_NAME);
define('HEADING_TEXT','Prosimo vnesite e-mail, vsoto in ime ' . TEXT_GV_NAME . ', ki ga želite poslati. Za več informacij, poglejte <a href="' . zen_href_link(FILENAME_GV_FAQ, '', 'NONSSL').'">' . GV_FAQ . '.</a>');
define('ENTRY_NAME', 'Ime:');
define('ENTRY_EMAIL', 'E-mail:');
define('ENTRY_MESSAGE', 'Vaše sporočilo:');
define('ENTRY_AMOUNT', 'Vsota, ki jo pošiljate:');
define('ERROR_ENTRY_TO_NAME_CHECK', 'Nismo prejeli ime, prosimo, da ga ponovno vpišete. ');
define('ERROR_ENTRY_AMOUNT_CHECK', '' . TEXT_GV_NAME . ' vsota je napačna. Prosimo vnesite vsoto znova.');
define('ERROR_ENTRY_EMAIL_ADDRESS_CHECK', 'Je e-mail pravilen? Prosimo, da ga ponovno vpišete.');
define('MAIN_MESSAGE', 'Pošiljate darilni bon ' . TEXT_GV_NAME . ' vreden %s do %s, na e-mail %s. V primeru, da ti podatki niso pravilni, jih lahko spremenite preko <strong>Uredi</strong> gumba.<br /><br />Sporočilo, ki ga pošiljate je:<br /><br />');
define('SECONDARY_MESSAGE', 'Dragi %s,<br /><br />' . 'Poslan vam je bil vrednostni bon ' . TEXT_GV_NAME . ' vreden %s od %s');
define('PERSONAL_MESSAGE', '%s pravi:');
define('TEXT_SUCCESS', 'Čestitamo, darilni bon ' . TEXT_GV_NAME . ' je bil poslan.');
define('TEXT_SEND_ANOTHER', 'Bi radi poslali še en ' . TEXT_GV_NAME . '?');
define('TEXT_AVAILABLE_BALANCE',  'Darilni bon');

define('EMAIL_GV_TEXT_SUBJECT', 'Darilni bon od %s');
define('EMAIL_SEPARATOR', '----------------------------------------------------------------------------------------');
define('EMAIL_GV_TEXT_HEADER', 'Čestitamo, dobili ste ' . TEXT_GV_NAME . ' vreden %s');
define('EMAIL_GV_FROM', 'Ta darilni bon ' . TEXT_GV_NAME . ' je poslal %s');
define('EMAIL_GV_MESSAGE', 'z sporočilom: ');
define('EMAIL_GV_SEND_TO', 'Živjo, %s');
define('EMAIL_GV_REDEEM', 'Če želitev vnovčiti ' . TEXT_GV_NAME . ', prosimo, da ga uporabite s klikom. Prosimo, da vpišete ' . TEXT_GV_REDEEM . ': %s  v primeru, da imate težave.');
define('EMAIL_GV_LINK', 'Za vnovčitev bona');
define('EMAIL_GV_VISIT', ' ali obiščite ');
define('EMAIL_GV_ENTER', ' in vpišite ' . TEXT_GV_REDEEM . ' ');
define('EMAIL_GV_FIXED_FOOTER', 'V primeru, da imate težave z ' . TEXT_GV_NAME . ' preko uporabe avtomatično ustvarjene povezave, ' . "\n" .
                                'lahko vpišete ' . TEXT_GV_NAME . ' ' . TEXT_GV_REDEEM . ' tudi ročno pri Nakupu v naši trgovini.');
define('EMAIL_GV_SHOP_FOOTER', '');
?>
