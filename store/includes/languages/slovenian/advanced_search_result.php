<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003 The zen-cart developers                           |
// |                                                                      |   
// | http://www.zen-cart.com/index.php                                    |   
// |                                                                      |   
// | Portions Copyright (c) 2003 osCommerce                               |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
// $Id: advanced_search_result.php 1969 2005-09-13 06:57:21Z drbyte $
//

define('NAVBAR_TITLE_1', 'Napredno iskanje');
define('NAVBAR_TITLE_2', 'Rezultati iskanja');

//define('HEADING_TITLE_1', 'Advanced Search');
define('HEADING_TITLE', 'Napredno iskanje');

define('HEADING_SEARCH_CRITERIA', 'Izberite vaše iskalne kriterije');

define('TEXT_SEARCH_IN_DESCRIPTION', 'Išči po opisu izdelka');
define('ENTRY_CATEGORIES', 'Kategorije:');
define('ENTRY_INCLUDE_SUBCATEGORIES', 'Tudi po podkategorijah');
define('ENTRY_MANUFACTURERS', 'Proizvajalci:');
define('ENTRY_PRICE_FROM', 'Cena od:');
define('ENTRY_PRICE_TO', 'Cena do:');
define('ENTRY_DATE_FROM', 'Datum od:');
define('ENTRY_DATE_TO', 'Datum do:');

define('TEXT_SEARCH_HELP_LINK', 'Pomoč pri iskanju [?]');

define('TEXT_ALL_CATEGORIES', 'Vse kategorije');
define('TEXT_ALL_MANUFACTURERS', 'Vsi proizvajalci');

define('HEADING_SEARCH_HELP', 'Pomoč pri iskanju');
define('TEXT_SEARCH_HELP', 'Uporabljate lahko AND in/ali OR operatorja za bolj podrobno iskanje.<br /><br />Kot primer, <span style="text-decoration:underline;">Microsoft AND miška</span> prikaže vse rezultate, ki vsebujejo Microsoft in mišja. V primeru, da uporabite <u>miška OR tipkovnica</u>, ki prikazujejo vse rezultate, ki imajo v imenu ali opisu "miška" ali "tipkovnica".<br /><br />V primeru, da želite samo specifične rezultate lahko uporabite narekovaje.<br /><br />Kot primer, <span style="text-decoration:underline">"apple računalnik"</span>, bo prikazalo samo rezultate, kjer je omenjena besedna zaveza apple računalnik.<br /><br />Lahko uporabite tudi oklepaje za bolj podrobno iskanje.<br /><br />Kot primer, <span style="text-decoration:underline;">Microsoft AND (tipkovnica OR miška OR "Visual code editor")</span>.');
define('TEXT_CLOSE_WINDOW', 'Zapri okno [x]');

define('TABLE_HEADING_IMAGE', '');
define('TABLE_HEADING_MODEL', 'Model');
define('TABLE_HEADING_PRODUCTS', 'Ime izdelka');
define('TABLE_HEADING_MANUFACTURER', 'Proizvajalec');
define('TABLE_HEADING_QUANTITY', 'Količina');
define('TABLE_HEADING_PRICE', 'Cena');
define('TABLE_HEADING_WEIGHT', 'Teža');
define('TABLE_HEADING_BUY_NOW', 'Kupi zdaj');

define('TEXT_NO_PRODUCTS', 'Ni najdenih izdelkov glede na vaše iskalne kriterije.');

define('KEYWORD_FORMAT_STRING', 'izbrane besede');
define('ERROR_AT_LEAST_ONE_INPUT', 'Vsaj eno polje mora biti izbrano.');
define('ERROR_INVALID_FROM_DATE', 'Napačen datum.');
define('ERROR_INVALID_TO_DATE', 'Napačen datume.');
define('ERROR_TO_DATE_LESS_THAN_FROM_DATE', '"Datum do", mora biti nižji od "datuma od"');
define('ERROR_PRICE_FROM_MUST_BE_NUM', 'Cena mora biti številka.');
define('ERROR_PRICE_TO_MUST_BE_NUM', 'Cena mora biti številka.');
define('ERROR_PRICE_TO_LESS_THAN_PRICE_FROM', '"Cena od" mora biti višja od "Cena do" mora biti številka.');
define('ERROR_INVALID_KEYWORDS', 'Napačne izbrane besede iskanja.');
?>
