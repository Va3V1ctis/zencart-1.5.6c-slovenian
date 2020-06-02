<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: document_product_info.php 6371 2007-05-25 19:55:59Z ajeh $
 */

define('TEXT_PRODUCT_NOT_FOUND', 'Na žalost izdelek ni bil najden.');
define('TEXT_CURRENT_REVIEWS', 'Mnenja o izdelku:');
define('TEXT_MORE_INFORMATION', 'Za več infomacij o izdelku, pojdite na <a href="%s" target="_blank">spletno stran izdelka</a>.');
define('TEXT_DATE_ADDED', 'Izdelek je bil dodan %s.');
define('TEXT_DATE_AVAILABLE', 'Izdelek bo na voljo %s.');
define('TEXT_ALSO_PURCHASED_PRODUCTS', 'Kupci so kupili tudi...');
define('TEXT_PRODUCT_OPTIONS', 'Prosimo izberite: ');
define('TEXT_PRODUCT_MANUFACTURER', 'Izdelal: ');
define('TEXT_PRODUCT_WEIGHT', 'Teže pošiljke: ');
define('TEXT_PRODUCT_QUANTITY', ' enot na zalogi');
define('TEXT_PRODUCT_MODEL', 'Model: ');



// previous next product
define('PREV_NEXT_PRODUCT', 'Izdelek ');
define('PREV_NEXT_FROM', ' od ');
define('IMAGE_BUTTON_PREVIOUS','Prejšnji izdelek');
define('IMAGE_BUTTON_NEXT','Naslednji izdelek');
define('IMAGE_BUTTON_RETURN_TO_PRODUCT_LIST','Nazaj na listo izdelkov');

// missing products
//define('TABLE_HEADING_NEW_PRODUCTS', 'New Products For %s');
//define('TABLE_HEADING_UPCOMING_PRODUCTS', 'Upcoming Products');
//define('TABLE_HEADING_DATE_EXPECTED', 'Date Expected');

define('TEXT_ATTRIBUTES_PRICE_WAS',' [je bila: ');
define('TEXT_ATTRIBUTE_IS_FREE',' sedaj je: Zastonj]');
define('TEXT_ONETIME_CHARGE_SYMBOL', ' *');
define('TEXT_ONETIME_CHARGE_DESCRIPTION', ' Določeni enkratni strošli so možni');
define('TEXT_ATTRIBUTES_QTY_PRICE_HELP_LINK','Količnski popust je na voljo');
define('ATTRIBUTES_QTY_PRICE_SYMBOL', zen_image(DIR_WS_TEMPLATE_ICONS . 'icon_status_green.gif', TEXT_ATTRIBUTES_QTY_PRICE_HELP_LINK, 10, 10) . '&nbsp;');

define('ATTRIBUTES_PRICE_DELIMITER_PREFIX', ' ( ');
define('ATTRIBUTES_PRICE_DELIMITER_SUFFIX', ' )');
define('ATTRIBUTES_WEIGHT_DELIMITER_PREFIX', ' (');
define('ATTRIBUTES_WEIGHT_DELIMITER_SUFFIX', ') ');
?>
