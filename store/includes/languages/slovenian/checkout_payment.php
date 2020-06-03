<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2017 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Author: DrByte  Modified in v1.5.5 $
 */

define('NAVBAR_TITLE_1', 'Nakup - Korak 1');
define('NAVBAR_TITLE_2', 'Način plačila - Korak 2');

define('HEADING_TITLE', 'Korak 2 od 3 - Podatki o plačilu');

define('TABLE_HEADING_BILLING_ADDRESS', 'Naslov plačnika');
define('TEXT_SELECTED_BILLING_DESTINATION', 'Vaše naslov načnika je naveden na levi strani, prosimo, da se naslov plačnika ujema s podatki na kreditni kartici, naslov lahko tudi spremenite s klikom na <em>Spremeni naslov</em>.');
define('TITLE_BILLING_ADDRESS', 'Naslov plačnika:');

define('TABLE_HEADING_PAYMENT_METHOD', 'Način plačila');
define('TEXT_SELECT_PAYMENT_METHOD', 'Prosimo izberite način plačila za ta nakup.');
define('TITLE_PLEASE_SELECT', 'Prosimo izberite');
define('TEXT_ENTER_PAYMENT_INFORMATION', '');
define('TABLE_HEADING_COMMENTS', 'Dodatne zahteve glede vašega naročila');

define('TITLE_NO_PAYMENT_OPTIONS_AVAILABLE', 'Ni na voljo ob tem času');
define('TEXT_NO_PAYMENT_OPTIONS_AVAILABLE','<span class="alert">Na žalost ne sprejememamo plačil iz vaše regijo.</span><br />Za več informacij ali za alternativno dostavno nam prosim pišite.');

define('TITLE_CONTINUE_CHECKOUT_PROCEDURE', '<strong>Nadaljujte na korak 3</strong>');
define('TEXT_CONTINUE_CHECKOUT_PROCEDURE', '- da potrdite vaše naročilo.');

define('TABLE_HEADING_CONDITIONS', '<span class="termsconditions">Splošni pogoji poslovanja</span>');
define('TEXT_CONDITIONS_DESCRIPTION', '<span class="termsdescription">Prosimo, da se strinjate z našimi splošnimi pogoji poslovanja. Splošne pogoje poslovanja lahko <a href="' . zen_href_link(FILENAME_CONDITIONS, '', 'SSL') . '" target="_blank"><span class="pseudolink">preberete tukaj</span></a>.</span>');
define('TEXT_CONDITIONS_CONFIRM', '<span class="termsiagree">Prebral sem in se strinjam z splošnimi pogoji poslovanja.</span>');

define('TEXT_CHECKOUT_AMOUNT_DUE', 'Skupaj za plačilo: ');
define('TEXT_YOUR_TOTAL','Skupaj');
