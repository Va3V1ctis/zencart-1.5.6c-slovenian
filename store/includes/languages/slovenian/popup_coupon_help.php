<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: DrByte 2019 May 25 Modified in v1.5.6b $
 */

define('HEADING_COUPON_HELP', 'Pomoč pri kodah za popust');
define('TEXT_CLOSE_WINDOW', 'Zapri okno [x]');
define('TEXT_COUPON_HELP_HEADER', '<strong>Koda za popust velja za</strong> ');
define('TEXT_COUPON_HELP_NAME', '<br /><br />Ime kode za popust : %s');
define('TEXT_COUPON_HELP_FIXED', '<br /><br />Koda je v višini %s popusta za vaše naročilo');
define('TEXT_COUPON_HELP_MINORDER', '<br /><br />Potrošiti morate vsaj %s za uporabo te kode za popust');
define('TEXT_COUPON_HELP_FREESHIP', '<br /><br />Koda za popust omogoča zastonj pošiljanje.');
define('TEXT_COUPON_HELP_DESC', '<br /><br />Opis kode za popust : %s');
define('TEXT_COUPON_HELP_DATE', '<br /><br />Koda za popust je veljavna od %s do %s');
define('TEXT_COUPON_HELP_RESTRICT', '<br /><br />Omejitve za Izdelek/Kategorijo');
define('TEXT_COUPON_HELP_CATEGORIES', 'Kategorija');
define('TEXT_COUPON_HELP_PRODUCTS', 'Izdelek');
define('TEXT_ALLOW', 'Dovoli');
define('TEXT_DENY', 'Zavrni');

define('TEXT_ALLOWED', ' (Dovoljeno)');
define('TEXT_DENIED', ' (Zavrnjeno)');

define('TEXT_NO_CAT_TOP_ONLY_DENY', '<p>Ta koda za popust ni za vse kategorije.</p>');
define('TEXT_NO_CAT_RESTRICTIONS', '<p>Ta koda za popust velja za vse kategorije.</p>');
define('TEXT_NO_PROD_RESTRICTIONS', '<p>Ta koda za popust velja za vse izdelke.</p>');
define('TEXT_NO_PROD_SALES', '<p>Koda za popust ne velja za izdelke v akciji.</p>');

// gift certificates cannot be purchased with Discount Coupons
define('TEXT_COUPON_GV_RESTRICTION','Koda za popust ni veljavna za nakup ' . TEXT_GV_NAMES . '.');

define('TEXT_COUPON_GV_RESTRICTION_ZONES', 'Določene omejitve pri nakupu.');
