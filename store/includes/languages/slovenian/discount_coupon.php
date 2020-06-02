<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * $Id: discount_coupon.php 14712 2009-10-28 22:05:08Z ajeh $
 */

define('NAVBAR_TITLE', 'Koda za popust');
define('HEADING_TITLE', 'Koda za popust');

define('TEXT_INFORMATION', '');
define('TEXT_COUPON_FAILED', '<span class="alert important">%s</span> ni veljavna koda za popust, prosimo preverite znova vpisano kodo.');

define('HEADING_COUPON_HELP', 'Pomoč pri kodi za popust');
define('TEXT_CLOSE_WINDOW', 'Zapri okno [x]');
define('TEXT_COUPON_HELP_HEADER', '<p class="bold">Koda za popust je veljavna za ');
define('TEXT_COUPON_HELP_NAME', '\'%s\'. </p>');
define('TEXT_COUPON_HELP_FIXED', '');
define('TEXT_COUPON_HELP_MINORDER', '<p>Zapraviti morate vsaj %s, da boste uporabili naslednjo kodo za popust.</p>');
define('TEXT_COUPON_HELP_FREESHIP', '');
define('TEXT_COUPON_HELP_DESC', '<p><span class="bold">Ponudba za popust:</span> %s</p><p class="smallText">Določene omejitve veljajo pri uporabi kode za popust.</p>');
define('TEXT_COUPON_HELP_DATE', '<p>Koda za popusta velja za %s in %s</p>');
define('TEXT_COUPON_HELP_RESTRICT', '<p class="biggerText bold">Omejitve pri uporabi kode za popust</p>');
define('TEXT_COUPON_HELP_CATEGORIES', '<p class="bold">Omejitve pri kategoriji:</p>');
define('TEXT_COUPON_HELP_PRODUCTS', '<p class="bold">Omejitve pri izdelkih:</p>');
define('TEXT_ALLOW', 'Dovoljeno');
define('TEXT_DENY', 'Ni dovoljeno');

define('TEXT_NO_CAT_TOP_ONLY_DENY', '<p>Koda za popust ima naslednje omejitve.</p>');
define('TEXT_NO_CAT_RESTRICTIONS', '<p>Koda za popust velja za vse kategorije.</p>');
define('TEXT_NO_PROD_RESTRICTIONS', '<p>Koda za popust velja za vse izdelke.</p>');
define('TEXT_NO_PROD_SALES', '<p>Koda za popust ne velja za izdelke v akciji.</p>');
define('TEXT_CAT_ALLOWED', ' (velja za to kategorijo)');
define('TEXT_CAT_DENIED', ' (ne velja za to kategorijo)');
define('TEXT_PROD_ALLOWED', ' (velja za ta izdelek)');
define('TEXT_PROD_DENIED', ' (ne velja za ta izdelek)');
// gift certificates cannot be purchased with Discount Coupons
define('TEXT_COUPON_GV_RESTRICTION','<p class="smallText">Koda za popust se lahko uporabi pri nakupu ' . TEXT_GV_NAMES . '. Omejitev 1 kupona za nakup.</p>');

define('TEXT_DISCOUNT_COUPON_ID_INFO', 'Preveri kodo za popust ... ');
define('TEXT_DISCOUNT_COUPON_ID', 'Vaša koda za popust: ');

define('TEXT_COUPON_GV_RESTRICTION_ZONES', 'Določene omejitve pri plačevanju.');
