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
// $Id: checkout_process.php 1969 2005-09-13 06:57:21Z drbyte $
//

define('EMAIL_TEXT_SUBJECT', 'Potrditev naročila');
define('EMAIL_TEXT_HEADER', 'Potrditev naročila');
define('EMAIL_TEXT_FROM',' od ');  //added to the EMAIL_TEXT_HEADER, above on text-only emails
define('EMAIL_THANKS_FOR_SHOPPING','Hvala, da ste nakupovali pri nas!');
define('EMAIL_DETAILS_FOLLOW','Sledijo podatki o vašem naročilu.');
define('EMAIL_TEXT_ORDER_NUMBER', 'Številka naročila:');
define('EMAIL_TEXT_INVOICE_URL', 'Račun:');
define('EMAIL_TEXT_INVOICE_URL_CLICK', 'Kliknite tukaj za račun');
define('EMAIL_TEXT_DATE_ORDERED', 'Datum naročila:');
define('EMAIL_TEXT_PRODUCTS', 'Izdelki');
define('EMAIL_TEXT_SUBTOTAL', ':');
define('EMAIL_TEXT_TAX', 'Davek:        ');
define('EMAIL_TEXT_SHIPPING', 'Stroški dostave: ');
define('EMAIL_TEXT_TOTAL', 'Skupaj:    ');
define('EMAIL_TEXT_DELIVERY_ADDRESS', 'Naslov za dostavo');
define('EMAIL_TEXT_BILLING_ADDRESS', 'Naslov plačnika');
define('EMAIL_TEXT_PAYMENT_METHOD', 'Način plačila');

define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('TEXT_EMAIL_VIA', 'od');

// suggest not using # vs No as some spamm protection block emails with these subjects
define('EMAIL_ORDER_NUMBER_SUBJECT', ' Št.: ');
define('HEADING_ADDRESS_INFORMATION','Podatki o naslovu');
define('HEADING_SHIPPING_METHOD','Način dostave');
?>
