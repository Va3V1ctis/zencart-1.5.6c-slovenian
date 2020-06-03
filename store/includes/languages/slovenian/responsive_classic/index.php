<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: index.php 19537 2011-09-20 17:14:44Z drbyte $
 */

define('TEXT_MAIN','');

// Showcase vs Store
if (STORE_STATUS == '0') {
  define('TEXT_GREETING_GUEST', 'Pozdravljeni <span class="greetUser">Gost!</span> Bi se radi <a href="%s">prijavili</a>?');
} else {
  define('TEXT_GREETING_GUEST', 'Pozdravljeni, prosimo uživajte v naših izdelkih!');
}

define('TEXT_GREETING_PERSONAL', 'Pozdravljeni <span class="greetUser">%s</span>! Bi radi videli naše <a href="%s">nove izdelke</a>?');

define('TEXT_INFORMATION', '');

//moved to english
//define('TABLE_HEADING_FEATURED_PRODUCTS','Featured Products');

//define('TABLE_HEADING_NEW_PRODUCTS', 'New Products For %s');
//define('TABLE_HEADING_UPCOMING_PRODUCTS', 'Upcoming Products');
//define('TABLE_HEADING_DATE_EXPECTED', 'Date Expected');

if ( ($category_depth == 'products') || (zen_check_url_get_terms()) ) {
  // This section deals with product-listing page contents
  define('HEADING_TITLE', 'Izdelki na zalogi');
  define('TABLE_HEADING_IMAGE', 'Slika izdelka');
  define('TABLE_HEADING_MODEL', 'Model');
  define('TABLE_HEADING_PRODUCTS', 'Ime izdelka');
  define('TABLE_HEADING_MANUFACTURER', 'Proizvajalec');
  define('TABLE_HEADING_QUANTITY', 'Količina');
  define('TABLE_HEADING_PRICE', 'Cena');
  define('TABLE_HEADING_WEIGHT', 'Teža');
  define('TABLE_HEADING_BUY_NOW', 'Kupi zdaj');
  define('TEXT_NO_PRODUCTS', 'V tej katergoriji še ni izdelkov v naši trgovini.');
  define('TEXT_NO_PRODUCTS2', 'Od tega proizvajalce še ni izdelkov v naši trgovini.');
  define('TEXT_NUMBER_OF_PRODUCTS', 'Število izdelkov: ');
  define('TEXT_SHOW', 'Sortiraj rezultate:');
  define('TEXT_BUY', 'Kupi 1 \'');
  define('TEXT_NOW', '\' zdaj');
  define('TEXT_ALL_CATEGORIES', 'Vse kategorije');
  define('TEXT_ALL_MANUFACTURERS', 'Vsi proizvajalci');
} elseif ($category_depth == 'top') {
  // This section deals with the "home" page at the top level with no options/products selected
  /*Replace this text with the headline you would like for your shop. For example: 'Welcome to My SHOP!'*/
  define('HEADING_TITLE', '');
} elseif ($category_depth == 'nested') {
  // This section deals with displaying a subcategory
  /*Replace this line with the headline you would like for your shop. For example: 'Welcome to My SHOP!'*/
  define('HEADING_TITLE', '');
}
?>
