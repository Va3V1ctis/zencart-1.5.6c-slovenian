<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: DrByte 2019 May 26 Modified in v1.5.6b $
 */

// FOLLOWING WERE moved to meta_tags.php
//define('TITLE', 'Zen Cart!');
//define('SITE_TAGLINE', 'The Art of E-commerce');
//define('CUSTOM_KEYWORDS', 'ecommerce, open source, shop, online shopping');
// END: moved to meta_tags.php

  define('FOOTER_TEXT_BODY', '&copy; ' . date('Y') . ' <a href="' . zen_href_link(FILENAME_DEFAULT) . '" target="_blank">' . STORE_NAME . '</a>.');

// look in your $PATH_LOCALE/locale directory for available locales..
  $locales = array('sl_utf8');
  @setlocale(LC_TIME, $locales);
  define('DATE_FORMAT_SHORT', '%d/%m/%Y');  // this is used for strftime()
  define('DATE_FORMAT_LONG', '%A %d %B, %Y'); // this is used for strftime()
  define('DATE_FORMAT', 'd/m/Y'); // this is used for date()
  define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');

////
// Return date in raw format
// $date should be in format mm/dd/yyyy
// raw date is in format YYYYMMDD, or DDMMYYYY
  if (!function_exists('zen_date_raw')) {
    function zen_date_raw($date, $reverse = false) {
      if ($reverse) {
        return substr($date, 3, 2) . substr($date, 0, 2) . substr($date, 6, 4);
      } else {
        return substr($date, 6, 4) . substr($date, 0, 2) . substr($date, 3, 2);
      }
    }
  }

// if USE_DEFAULT_LANGUAGE_CURRENCY is true, use the following currency, instead of the applications default currency (used when changing language)
  define('LANGUAGE_CURRENCY', 'EUR');

// Global entries for the <html> tag
  define('HTML_PARAMS','dir="ltr" lang="sl"');

// charset for web pages and emails
  define('CHARSET', 'utf-8');

// footer text in includes/footer.php
  define('FOOTER_TEXT_REQUESTS_SINCE', 'zahtevkov od');

// Define the name of your Gift Certificate as Gift Voucher, Gift Certificate, Zen Cart Dollars, etc. here for use through out the shop
  define('TEXT_GV_NAME','Bon');
  define('TEXT_GV_NAMES','Bon');

// used for redeem code, redemption code, or redemption id
  define('TEXT_GV_REDEEM','Koda za popust');

// used for redeem code sidebox
  define('BOX_HEADING_GV_REDEEM', TEXT_GV_NAME);
  define('BOX_GV_REDEEM_INFO', 'Koda za popust: ');

// text for gender
  define('MALE', 'g.');
  define('FEMALE', 'ga.');
  define('MALE_ADDRESS', 'g.');
  define('FEMALE_ADDRESS', 'ga.');

// text for date of birth example
  define('DOB_FORMAT_STRING', 'dd/mm/yyyy');

//text for sidebox heading links
  define('BOX_HEADING_LINKS', '&nbsp;&nbsp;[več]');

// categories box text in sideboxes/categories.php
  define('BOX_HEADING_CATEGORIES', 'Kategorije');

// manufacturers box text in sideboxes/manufacturers.php
  define('BOX_HEADING_MANUFACTURERS', 'Izdelovalci');

// whats_new box text in sideboxes/whats_new.php
  define('BOX_HEADING_WHATS_NEW', 'Novo');
  define('CATEGORIES_BOX_HEADING_WHATS_NEW', 'Novi izdelki ...');

  define('BOX_HEADING_FEATURED_PRODUCTS', 'Izpostavljno');
  define('CATEGORIES_BOX_HEADING_FEATURED_PRODUCTS', 'Izpostavljeni izdelki ...');
  define('TEXT_NO_FEATURED_PRODUCTS', 'Več izpostavljenih izdelkov bo kmalu dodanih..');

  define('TEXT_NO_ALL_PRODUCTS', 'Več izdelkov bo kmalu dodanih.');
  define('CATEGORIES_BOX_HEADING_PRODUCTS_ALL', 'Vsi izdelki ...');

// quick_find box text in sideboxes/quick_find.php
  define('BOX_HEADING_SEARCH', 'Iskanje');
  define('BOX_SEARCH_ADVANCED_SEARCH', 'Napredno iskanje');

// specials box text in sideboxes/specials.php
  define('BOX_HEADING_SPECIALS', 'Izdelki v akciji');
  define('CATEGORIES_BOX_HEADING_SPECIALS','Izdelki v akciji ...');

// reviews box text in sideboxes/reviews.php
  define('BOX_HEADING_REVIEWS', 'Mnenja kupcev');
  define('BOX_REVIEWS_WRITE_REVIEW', 'Napiši mnenje o tem izdelku.');
  define('BOX_REVIEWS_NO_REVIEWS', 'Bodite prvi, ki napiše mnenje o tem izdelku.');
  define('BOX_REVIEWS_TEXT_OF_5_STARS', '%s od 5 zvezdic!');

// shopping_cart box text in sideboxes/shopping_cart.php
  define('BOX_HEADING_SHOPPING_CART', 'Košarica');
  define('BOX_SHOPPING_CART_EMPTY', 'Vaša košarica je prazna.');
  define('BOX_SHOPPING_CART_DIVIDER', 'ea.-&nbsp;');

// order_history box text in sideboxes/order_history.php
  define('BOX_HEADING_CUSTOMER_ORDERS', 'Ponovno naroči');

// best_sellers box text in sideboxes/best_sellers.php
  define('BOX_HEADING_BESTSELLERS', 'Najbolje prodajani izdelki');
  define('BOX_HEADING_BESTSELLERS_IN', 'Najbolje prodajani izdelki v<br />&nbsp;&nbsp;');

// notifications box text in sideboxes/products_notifications.php
  define('BOX_HEADING_NOTIFICATIONS', 'Obvestila');
  define('BOX_NOTIFICATIONS_NOTIFY', 'Obvesti me o <strong>%s</strong>');
  define('BOX_NOTIFICATIONS_NOTIFY_REMOVE', 'Ne obveščajte me več o <strong>%s</strong>');

// manufacturer box text
  define('BOX_HEADING_MANUFACTURER_INFO', 'Informacije o proizvajalcu');
  define('BOX_MANUFACTURER_INFO_HOMEPAGE', '%s spletna stran');
  define('BOX_MANUFACTURER_INFO_OTHER_PRODUCTS', 'Ostali izdelki');

// languages box text in sideboxes/languages.php
  define('BOX_HEADING_LANGUAGES', 'Jeziki');

// currencies box text in sideboxes/currencies.php
  define('BOX_HEADING_CURRENCIES', 'Valute');

// information box text in sideboxes/information.php
  define('BOX_HEADING_INFORMATION', 'Informacije');
  define('BOX_INFORMATION_PRIVACY', 'Politika zasebnosti');
  define('BOX_INFORMATION_CONDITIONS', 'Splošni pogoji uporabe');
  define('BOX_INFORMATION_SHIPPING', 'Dostava');
  define('BOX_INFORMATION_CONTACT', 'Kontakt');
  define('BOX_INFORMATION_UNSUBSCRIBE', 'Odjavi se od pošte');

  define('BOX_INFORMATION_SITE_MAP', 'Zemljevid strani');

// information box text in sideboxes/more_information.php - were TUTORIAL_
  define('BOX_HEADING_MORE_INFORMATION', 'Več informacij');
  define('BOX_INFORMATION_PAGE_2', 'Stran 2');
  define('BOX_INFORMATION_PAGE_3', 'Stran 3');
  define('BOX_INFORMATION_PAGE_4', 'Stran 4');

//New billing address text
  define('SET_AS_PRIMARY' , 'Nastavi kot primarni naslov');
  define('NEW_ADDRESS_TITLE', 'Naslov za plačilo');

// javascript messages
  define('JS_ERROR', 'Prosimo popravite naslednje zadeve:\n\n');

  define('JS_REVIEW_TEXT', '* Prosimo, da dodate celotno mnenje. Mnenje mora imeti vsaj ' . REVIEW_TEXT_MIN_LENGTH . ' znakov.');
  define('JS_REVIEW_RATING', '* Prosimo izberite oceno.');

  define('JS_ERROR_NO_PAYMENT_MODULE_SELECTED', '* Prosimo izberite plačilno metodo.');

  define('JS_ERROR_SUBMITTED', 'Obrazec je bil že poslan. Prosimo pritisnite OK in počakajte, da se proces konča.');

  define('ERROR_NO_PAYMENT_MODULE_SELECTED', 'Prosimo izberite plačilno metodo.');
  define('ERROR_CONDITIONS_NOT_ACCEPTED', 'Prosimo, da se strinjate s splošnimi pogoji uporabe te spletne strani.');
  define('ERROR_PRIVACY_STATEMENT_NOT_ACCEPTED', 'Prosimo, da se strinjate s politiko zasebnosti.');

  define('CATEGORY_COMPANY', 'Podatki o podjetju');
  define('CATEGORY_PERSONAL', 'Vaši osebni podatki');
  define('CATEGORY_ADDRESS', 'Vaš naslov');
  define('CATEGORY_CONTACT', 'Vaši podatki');
  define('CATEGORY_OPTIONS', 'Možnosti');
  define('CATEGORY_PASSWORD', 'Vaše geslo');
  define('CATEGORY_LOGIN', 'Login');
  define('PULL_DOWN_DEFAULT', 'Prosimo izberite državo');
  define('PLEASE_SELECT', 'Prosimo izberite ...');
  define('TYPE_BELOW', 'Dodajte izbiro ...');

  define('ENTRY_COMPANY', 'Ime podjetja:');
  define('ENTRY_COMPANY_ERROR', 'Prosimo vnesite ime podjetja.');
  define('ENTRY_COMPANY_TEXT', '');
  define('ENTRY_GENDER', 'Naziv:');
  define('ENTRY_GENDER_ERROR', 'Prosimo izberite vaš naziv.');
  define('ENTRY_GENDER_TEXT', '*');
  define('ENTRY_FIRST_NAME', 'Ime:');
  define('ENTRY_FIRST_NAME_ERROR', 'Je vaše ime pravilno? Zahtevano je najmanj ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' znakov. Prosimo poizkusite znova.');
  define('ENTRY_FIRST_NAME_TEXT', '*');
  define('ENTRY_LAST_NAME', 'Priimek:');
  define('ENTRY_LAST_NAME_ERROR', 'Je vaš priimek pravilen? Zahtevano je najmanj ' . ENTRY_LAST_NAME_MIN_LENGTH . ' znakov. Prosimo poizkusite znova.');
  define('ENTRY_LAST_NAME_TEXT', '*');
  define('ENTRY_DATE_OF_BIRTH', 'Datum rojstva:');
  define('ENTRY_DATE_OF_BIRTH_ERROR', 'Je vaš datum rojstva pravilen? Zahtevan je naslendji format: MM/DD/LLLL (ie 02/21/1978) ali naslednji format: LLLL-MM-DD (ie 1978-02-21)');
  define('ENTRY_DATE_OF_BIRTH_TEXT', '* (ie. 02/21/1978 ali 1978-02-21)');
  define('ENTRY_EMAIL_ADDRESS', 'E-mail naslov:');
  define('ENTRY_EMAIL_ADDRESS_ERROR', 'Je vaš e-mail pravilen? Zahtevano je najmanj ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' znakov. Prosimo poizkusite znova.');
  define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', 'Vaš e-mail naslov ni prepoznan. Prosimo poizkusite znova.');
  define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', 'Vaš e-mail naslov je že v našem sistemu, v primeru, da ga želite spremeniti, to lahako naredite v razdelku Moj Račun.');
  define('ENTRY_EMAIL_ADDRESS_TEXT', '*');
  define('ENTRY_NICK', 'Forum vzdevek:');
  define('ENTRY_NICK_TEXT', '*'); // note to display beside nickname input field
  define('ENTRY_NICK_DUPLICATE_ERROR', 'Vaš vzdevek je že uporabljen. Prosimo poizkusite znova.');
  define('ENTRY_NICK_LENGTH_ERROR', 'Prosimo poizkusite znova. Vaš vzdevek mora imeti vsaj' . ENTRY_NICK_MIN_LENGTH . ' znakov.');
  define('ENTRY_STREET_ADDRESS', 'Ulica:');
  define('ENTRY_STREET_ADDRESS_ERROR', 'Polje ulica mora imeti vsaj ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' znakov.');
  define('ENTRY_STREET_ADDRESS_TEXT', '*');
  define('ENTRY_SUBURB', 'Ulica (dodatno):');
  define('ENTRY_SUBURB_ERROR', '');
  define('ENTRY_SUBURB_TEXT', '');
  define('ENTRY_POST_CODE', 'Poštna številka:');
  define('ENTRY_POST_CODE_ERROR', 'Polje poštna številka mora imeti vsaj ' . ENTRY_POSTCODE_MIN_LENGTH . ' znakov.');
  define('ENTRY_POST_CODE_TEXT', '*');
  define('ENTRY_CITY', 'Mesto:');
  define('ENTRY_CUSTOMERS_REFERRAL', 'Referral koda:');

  define('ENTRY_CITY_ERROR', 'Polje mesto mora imeti vsaj ' . ENTRY_CITY_MIN_LENGTH . ' znakov.');
  define('ENTRY_CITY_TEXT', '*');
  define('ENTRY_STATE', 'Država/provinca:');
  define('ENTRY_STATE_ERROR', 'Polje država/provinca mora imeti vsaj ' . ENTRY_STATE_MIN_LENGTH . ' znakov.');
  define('ENTRY_STATE_ERROR_SELECT', 'Prosimo izberite državo/provinco iz naslednje seznama');
  define('ENTRY_STATE_TEXT', '*');
  define('JS_STATE_SELECT', '-- Prosimo izberite --');
  define('ENTRY_COUNTRY', 'Država:');
  define('ENTRY_COUNTRY_ERROR', 'Prosimo izberite državo iz naslednjega menija.');
  define('ENTRY_COUNTRY_TEXT', '*');
  define('ENTRY_TELEPHONE_NUMBER', 'Telefon:');
  define('ENTRY_TELEPHONE_NUMBER_ERROR', 'Polje telefon mora imeti vsaj ' . ENTRY_TELEPHONE_MIN_LENGTH . ' znakov.');
  define('ENTRY_TELEPHONE_NUMBER_TEXT', '*');
  define('ENTRY_FAX_NUMBER', 'Fax:');
  define('ENTRY_FAX_NUMBER_ERROR', '');
  define('ENTRY_FAX_NUMBER_TEXT', '');
  define('ENTRY_NEWSLETTER', 'Naroči se na naše novice.');
  define('ENTRY_NEWSLETTER_TEXT', '');
  define('ENTRY_NEWSLETTER_YES', 'Naroči');
  define('ENTRY_NEWSLETTER_NO', 'Odnaroči');
  define('ENTRY_NEWSLETTER_ERROR', '');
  define('ENTRY_PASSWORD', 'Geslo:');
  define('ENTRY_PASSWORD_ERROR', 'Vaše geslo mora imeti vsaj ' . ENTRY_PASSWORD_MIN_LENGTH . ' znakov.');
  define('ENTRY_PASSWORD_ERROR_NOT_MATCHING', 'Gesli se ne ujemata.');
  define('ENTRY_PASSWORD_TEXT', '* (vsaj ' . ENTRY_PASSWORD_MIN_LENGTH . ' znakov)');
  define('ENTRY_PASSWORD_CONFIRMATION', 'Potrdite geslo:');
  define('ENTRY_PASSWORD_CONFIRMATION_TEXT', '*');
  define('ENTRY_PASSWORD_CURRENT', 'Trenutno geslo:');
  define('ENTRY_PASSWORD_CURRENT_TEXT', '*');
  define('ENTRY_PASSWORD_CURRENT_ERROR', 'Vaše geslo mora imeti vsaj' . ENTRY_PASSWORD_MIN_LENGTH . ' znakov.');
  define('ENTRY_PASSWORD_NEW', 'Novo geslo:');
  define('ENTRY_PASSWORD_NEW_TEXT', '*');
  define('ENTRY_PASSWORD_NEW_ERROR', 'Vaše novo geslo mora imeti vsaj ' . ENTRY_PASSWORD_MIN_LENGTH . ' znakov.');
  define('ENTRY_PASSWORD_NEW_ERROR_NOT_MATCHING', 'Gesli se morata ujemati.');
  define('PASSWORD_HIDDEN', '--SKRITO--');

  define('FORM_REQUIRED_INFORMATION', '* Potrebne informacije');
  define('ENTRY_REQUIRED_SYMBOL', '*');

  // constants for use in zen_prev_next_display function
  define('TEXT_RESULT_PAGE', '');
  define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Prikazano <strong>%d</strong> od <strong>%d</strong> (od <strong>%d</strong> izdelkov)');
  define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Prikazano <strong>%d</strong> od <strong>%d</strong> (od <strong>%d</strong> orders)');
  define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Prikazano <strong>%d</strong> od <strong>%d</strong> (od <strong>%d</strong> mnenj)');
  define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_NEW', 'Prikazano <strong>%d</strong> od <strong>%d</strong> (od <strong>%d</strong> novih izdelkov)');
  define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Prikazano <strong>%d</strong> od <strong>%d</strong> (of <strong>%d</strong> izdeklkov v akciji)');
  define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_FEATURED_PRODUCTS', 'Prikazano <strong>%d</strong> od <strong>%d</strong> (od <strong>%d</strong> izpostavljneih izdelkov)');
  define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_ALL', 'Prikazano <strong>%d</strong> od <strong>%d</strong> (od <strong>%d</strong> izdelkov)');

  define('PREVNEXT_TITLE_FIRST_PAGE', 'Prva stran');
  define('PREVNEXT_TITLE_PREVIOUS_PAGE', 'Naslednja stran');
  define('PREVNEXT_TITLE_NEXT_PAGE', 'Naslednja stran');
  define('PREVNEXT_TITLE_LAST_PAGE', 'Zadnja stran');
  define('PREVNEXT_TITLE_PAGE_NO', 'Stran %d');
  define('PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE', 'Prejšnji set od %d strani');
  define('PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE', 'Naslednji set od %d strani');
  define('PREVNEXT_BUTTON_FIRST', '&laquo;PRVA');
  define('PREVNEXT_BUTTON_PREV', '[&laquo;&nbsp;Naslednja]');
  define('PREVNEXT_BUTTON_NEXT', '[Prejšnja&nbsp;&raquo;]');
  define('PREVNEXT_BUTTON_LAST', 'ZADNJA&raquo;');

  define('TEXT_BASE_PRICE','Cena štartq od: ');

  define('TEXT_CLICK_TO_ENLARGE', 'večja slika');

  define('TEXT_SORT_PRODUCTS', 'Sortiraj izdelke ');
  define('TEXT_DESCENDINGLY', 'padajoče');
  define('TEXT_ASCENDINGLY', 'naraščujoče');
  define('TEXT_BY', ' od ');

  define('TEXT_REVIEW_BY', 'od %s');
  define('TEXT_REVIEW_WORD_COUNT', '%s besed');
  define('TEXT_REVIEW_RATING', 'Ocena: %s [%s]');
  define('TEXT_REVIEW_DATE_ADDED', 'Dodana: %s');
  define('TEXT_NO_REVIEWS', 'Trenutno še ni mnenja o izdelku.');

  define('TEXT_NO_NEW_PRODUCTS', 'Več novih produktov bo kmalu dodanuh.');

  define('TEXT_UNKNOWN_TAX_RATE', 'Davek');

  define('TEXT_REQUIRED', '<span class="errorText">Obvezno</span>');

  define('WARNING_INSTALL_DIRECTORY_EXISTS', 'SECURITY WARNING: Installation directory exists at: %s. Please remove this directory for security reasons.');
  define('WARNING_CONFIG_FILE_WRITEABLE', 'Warning: I am able to write to the configuration file: %s. This is a potential security risk - please set the right user permissions on this file (read-only, CHMOD 644 or 444 are typical). You may need to use your webhost control panel/file-manager to change the permissions effectively. Contact your webhost for assistance. <a href="http://tutorials.zen-cart.com/index.php?article=90" target="_blank">See this FAQ</a>');
  define('ERROR_FILE_NOT_REMOVEABLE', 'Error: Could not remove the file specified. You may have to use FTP to remove the file, due to a server-permissions configuration limitation.');
  define('WARNING_SESSION_AUTO_START', 'Warning: session.auto_start is enabled - please disable this PHP feature in php.ini and restart the web server.');
  define('WARNING_DOWNLOAD_DIRECTORY_NON_EXISTENT', 'Warning: The downloadable products directory does not exist: ' . DIR_FS_DOWNLOAD . '. Downloadable products will not work until this directory is valid.');
  define('WARNING_SQL_CACHE_DIRECTORY_NON_EXISTENT', 'Warning: The SQL cache directory does not exist: ' . DIR_FS_SQL_CACHE . '. SQL caching will not work until this directory is created.');
  define('WARNING_SQL_CACHE_DIRECTORY_NOT_WRITEABLE', 'Warning: I am not able to write to the SQL cache directory: ' . DIR_FS_SQL_CACHE . '. SQL caching will not work until the right user permissions are set.');
  define('WARNING_DATABASE_VERSION_OUT_OF_DATE', 'Your database appears to need patching to a higher level. See Admin->Tools->Server Information to review patch levels.');
  define('WARNING_COULD_NOT_LOCATE_LANG_FILE', 'WARNING: Could not locate language file: ');

  define('TEXT_CCVAL_ERROR_INVALID_DATE', 'The expiration date entered for the credit card is invalid. Please check the date and try again.');
  define('TEXT_CCVAL_ERROR_INVALID_NUMBER', 'The credit card number entered is invalid. Please check the number and try again.');
  define('TEXT_CCVAL_ERROR_UNKNOWN_CARD', 'The credit card number starting with %s was not entered correctly, or we do not accept that kind of card. Prosimo poizkusite znova ali pa izberite drugo kreditno kartico.');

  define('BOX_INFORMATION_DISCOUNT_COUPONS', 'Koda za popust');
  define('BOX_INFORMATION_GV', TEXT_GV_NAME . ' FAQ');
  define('VOUCHER_BALANCE', TEXT_GV_NAME . ' Stanje ');
  define('BOX_HEADING_GIFT_VOUCHER', TEXT_GV_NAME . ' račun');
  define('GV_FAQ', TEXT_GV_NAME . ' FAQ');
  define('ERROR_REDEEMED_AMOUNT', 'Čestitamo, uspešno ste uporabili ');
  define('ERROR_NO_REDEEM_CODE', 'Niste vnesli ' . TEXT_GV_REDEEM . '.');
  define('ERROR_NO_INVALID_REDEEM_GV', 'Napačen ' . TEXT_GV_NAME . ' ' . TEXT_GV_REDEEM);
  define('TABLE_HEADING_CREDIT', 'Stanje');
  define('GV_HAS_VOUCHERA', 'Imate pozitivno stanje na vašem ' . TEXT_GV_NAME . ' računu. Če želite <br />
                           lahko stanje prenesete na <a class="pageResults" href="');

  define('GV_HAS_VOUCHERB', '"><strong>e-mail</strong></a> nekomu');
  define('ENTRY_AMOUNT_CHECK_ERROR', 'Nimate dovolj stanja na računu, da pošljete željeno vsoto.');
  define('BOX_SEND_TO_FRIEND', 'Pošlji ' . TEXT_GV_NAME . ' ');

  define('VOUCHER_REDEEMED',  TEXT_GV_NAME . ' uporabljen');
  define('CART_COUPON', 'Koda :');
  define('CART_COUPON_INFO', 'več informacij');
  define('TEXT_SEND_OR_SPEND','Imate pozitivno stanje na vašem ' . TEXT_GV_NAME . ' računu. Če želite ga lahko uporabite ali pošljete komu. Če želite poslati lahko to narediti z obrazcom spodaj');
  define('TEXT_BALANCE_IS', 'Vaše ' . TEXT_GV_NAME . ' stanje je: ');
  define('TEXT_AVAILABLE_BALANCE', 'Vač ' . TEXT_GV_NAME . ' račun');

// payment method is GV/Discount
  define('PAYMENT_METHOD_GV', 'Koda za popust');
  define('PAYMENT_MODULE_GV', 'Koda');

  define('TABLE_HEADING_CREDIT_PAYMENT', 'stanje na voljo');

  define('TEXT_INVALID_REDEEM_COUPON', 'Napačna koda za popust');
  define('TEXT_INVALID_REDEEM_COUPON_MINIMUM', 'You must spend at least %s to redeem this coupon');
  define('TEXT_INVALID_STARTDATE_COUPON', 'This coupon is not available yet');
  define('TEXT_INVALID_FINISHDATE_COUPON', 'This coupon has expired');
  define('TEXT_INVALID_USES_COUPON', 'This coupon could only be used ');
  define('TIMES', ' times.');
  define('TIME', ' time.');
  define('TEXT_INVALID_USES_USER_COUPON', 'You have used coupon code: %s the maximum number of times allowed per customer. ');
  define('REDEEMED_COUPON', 'a coupon worth ');
  define('REDEEMED_MIN_ORDER', 'on orders over ');
  define('REDEEMED_RESTRICTIONS', ' [Product-Category restrictions apply]');
  define('TEXT_ERROR', 'An error has occurred');
  define('TEXT_INVALID_COUPON_PRODUCT', 'This coupon code is not valid for any product currently in your cart.');
  define('TEXT_VALID_COUPON', 'Congratulations you have redeemed the Discount Coupon');
  define('TEXT_REMOVE_REDEEM_COUPON_ZONE', 'The coupon code you entered is not valid for the address you have selected.');

// more info in place of buy now
  define('MORE_INFO_TEXT','... več informacij');

// IP Address
  define('TEXT_YOUR_IP_ADDRESS','Vaš IP naslov je: ');

//Generic Address Heading
  define('HEADING_ADDRESS_INFORMATION','Podatki o naslovu');

// cart contents
  define('PRODUCTS_ORDER_QTY_TEXT_IN_CART','Količina v košarici: ');
  define('PRODUCTS_ORDER_QTY_TEXT','Dodaj v košarico: ');

// success messages for added to cart when display cart is off
// set to blank for no messages
// for all pages except where multiple add to cart is used:
  define('SUCCESS_ADDED_TO_CART_PRODUCT', 'Uspešno dodano v nakupovalno košarico ...');
// only for where multiple add to cart is used:
  define('SUCCESS_ADDED_TO_CART_PRODUCTS', 'Uspešno ste dodali naslednje izdelke v košarico ...');

  define('TEXT_PRODUCT_WEIGHT_UNIT','kg');

// Shipping
  define('TEXT_SHIPPING_WEIGHT','kg');
  define('TEXT_SHIPPING_BOXES', 'paketov');

// Discount Savings
  define('PRODUCT_PRICE_DISCOUNT_PREFIX','Prihrani:&nbsp;');
  define('PRODUCT_PRICE_DISCOUNT_PERCENTAGE','%');
  define('PRODUCT_PRICE_DISCOUNT_AMOUNT','&nbsp;');

// Sale Maker Sale Price
  define('PRODUCT_PRICE_SALE','Prihrani:&nbsp;');

//universal symbols
  define('TEXT_NUMBER_SYMBOL', '# ');

// banner_box
  define('BOX_HEADING_BANNER_BOX','Oglaševalci');
  define('TEXT_BANNER_BOX','Prosimo obiščite naše oglaševalce ...');

// banner box 2
  define('BOX_HEADING_BANNER_BOX2','Ste videli ...');
  define('TEXT_BANNER_BOX2','Preverite še danes!');

// banner_box - all
  define('BOX_HEADING_BANNER_BOX_ALL','Oglaševalci');
  define('TEXT_BANNER_BOX_ALL','Prosimo obiščite naše oglaševalce ...');

// boxes defines
  define('PULL_DOWN_ALL','Prosimo izberite');
  define('PULL_DOWN_MANUFACTURERS','- Reset -');
// shipping estimator
  define('PULL_DOWN_SHIPPING_ESTIMATOR_SELECT', 'Prosimo izberite');

// general Sort By
  define('TEXT_INFO_SORT_BY','Sortiraj po: ');

// close window image popups
  define('TEXT_CLOSE_WINDOW',' - Kliknite sliko, da jo zaprete');
// close popups
  define('TEXT_CURRENT_CLOSE_WINDOW','[ Zapri okno ]');

// iii 031104 added:  File upload error strings
  define('ERROR_FILETYPE_NOT_ALLOWED', 'NAPAKA:  File type not allowed.');
  define('WARNING_NO_FILE_UPLOADED', 'OPOZORILO:  no file uploaded.');
  define('SUCCESS_FILE_SAVED_SUCCESSFULLY', 'USPEH:  file saved successfully.');
  define('ERROR_FILE_NOT_SAVED', 'NAPAKA:  File not saved.');
  define('ERROR_DESTINATION_NOT_WRITEABLE', 'NAPAKA:  destination not writeable.');
  define('ERROR_DESTINATION_DOES_NOT_EXIST', 'NAPAKA: destination does not exist.');
  define('ERROR_FILE_TOO_BIG', 'OPOZORILO: File was too large to upload!<br />Order can be placed but please contact us for help with upload');
// End iii added

  define('TEXT_BEFORE_DOWN_FOR_MAINTENANCE', 'OPOZORILO: Spletna stran se posodbalja, na voljo bo spet: ');
  define('TEXT_ADMIN_DOWN_FOR_MAINTENANCE', 'OPOZORILO: Spletna stran se posodbalja.');

  define('PRODUCTS_PRICE_IS_FREE_TEXT','Zastonj!');
  define('PRODUCTS_PRICE_IS_CALL_FOR_PRICE_TEXT','Pokliči za ceno');
  define('TEXT_CALL_FOR_PRICE','Pokliči za ceno');

  define('TEXT_INVALID_SELECTION',' Napanča izbira: ');
  define('TEXT_ERROR_OPTION_FOR',' On the Option for: ');
  define('TEXT_INVALID_USER_INPUT', 'User Input Required<br />');

// product_listing
  define('PRODUCTS_QUANTITY_MIN_TEXT_LISTING','Min: ');
  define('PRODUCTS_QUANTITY_UNIT_TEXT_LISTING','Enot: ');
  define('PRODUCTS_QUANTITY_IN_CART_LISTING','V košarici:');
  define('PRODUCTS_QUANTITY_ADD_ADDITIONAL_LISTING','Dodaj naslednje:');

  define('PRODUCTS_QUANTITY_MAX_TEXT_LISTING','Max:');

  define('TEXT_PRODUCTS_MIX_OFF','*Mešano NE');
  define('TEXT_PRODUCTS_MIX_ON','*Mešano DA');

  define('TEXT_PRODUCTS_MIX_OFF_SHOPPING_CART','<br />*You can not mix the options on this item to meet the minimum quantity requirement.*<br />');
  define('TEXT_PRODUCTS_MIX_ON_SHOPPING_CART','*Mixed Option Values is ON<br />');

  define('ERROR_MAXIMUM_QTY','The quantity added to your cart has been adjusted because of a restriction on maximum you are allowed. See this item:<br />');
  define('ERROR_CORRECTIONS_HEADING','Prosimo popravite naslednje izdekle: <br />');
  define('ERROR_QUANTITY_ADJUSTED', 'Količina izdelkov je bila popravljena. Tega izdelka ne morete dodati v zaželjeni količini. Število izdelkov je:<br />');
  define('ERROR_QUANTITY_CHANGED_FROM', ', se je spremenilo od: ');
  define('ERROR_QUANTITY_CHANGED_TO', ' do ');

// Downloads Controller
  define('DOWNLOADS_CONTROLLER_ON_HOLD_MSG','OPOZORILO: Dolpotegi niso na voljo, dokler vaše plačilo ni preverjeno.');
  define('TEXT_FILESIZE_BYTES', ' bajti');
  define('TEXT_FILESIZE_KBS', ' KB');
  define('TEXT_FILESIZE_MEGS', ' MB');
  define('TEXT_FILESIZE_UNKNOWN', 'Neznano');

// shopping cart errors
  define('ERROR_PRODUCT','<br />Izdelek: ');
  define('ERROR_PRODUCT_STATUS_SHOPPING_CART','<br />Zelo nam je žal, vendar ta izdelek ni več na voljo.<br />Izdelek je bil odstranjen iz vaše košarice.');
  define('ERROR_PRODUCT_ATTRIBUTES','<br />Izdelek: ');
  define('ERROR_PRODUCT_STATUS_SHOPPING_CART_ATTRIBUTES','<br />Zelo nam je žal, vendar zaželjene možnosti izdelka niso več na voljo.<br />Izdelek je bil odstranjen iz vaše košarice');
  define('ERROR_PRODUCT_QUANTITY_MIN',',  ... Napaka pri minimalnem naročilu - ');
  define('ERROR_PRODUCT_QUANTITY_UNITS',' ... Napaka pri številu izdelkov - ');
  define('ERROR_PRODUCT_OPTION_SELECTION','<br /> ... Napačne možnosti izbrane ');
  define('ERROR_PRODUCT_QUANTITY_ORDERED','<br /> Celotna vrednost: ');
  define('ERROR_PRODUCT_QUANTITY_MAX',' ... Napaka pri maksimalnem naročilu - ');
  define('ERROR_PRODUCT_QUANTITY_MIN_SHOPPING_CART',', ima vklopljeno možnost minimalnega naročila. ');
  define('ERROR_PRODUCT_QUANTITY_UNITS_SHOPPING_CART',' ... Napaka pri številu izdelkov - ');
  define('ERROR_PRODUCT_QUANTITY_MAX_SHOPPING_CART',' ... Napaka pri maksimalnem naročilu - ');

  define('WARNING_SHOPPING_CART_COMBINED', 'OPOZORILO: Združili smo vaši nakupovalni košarici, prosimo preverite, če je vsebina košarice po vaši želji.');
  define('WARNING_PRODUCT_QUANTITY_ADJUSTED', 'Količina izdelkov je bila spremenjena glede na zalogo. ');
  define('OUT_OF_STOCK_CANT_CHECKOUT', 'Izdelki označeni z ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' niso na zalogi.<br />Prosimo spremenite število izdelkov (' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . '). Hvala!');
  define('OUT_OF_STOCK_CAN_CHECKOUT', 'izdelki označeni z ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' niso na zalogi.<br />Dostavljeni bodo takoj, ko jih ponovno dobimo.');

// error on checkout when $_SESSION['customers_id' does not exist in customers table
  define('ERROR_CUSTOMERS_ID_INVALID', 'Problem je bil z prijavo!<br />Prosimo, da se ponovno prijavite ali pa da naredite nov račun ...');

  define('TABLE_HEADING_FEATURED_PRODUCTS','Izpostavljeni izdelki');

  define('TABLE_HEADING_NEW_PRODUCTS', 'Novi izdelki v %s');
  define('TABLE_HEADING_UPCOMING_PRODUCTS', 'Prihajajoči izdelki');
  define('TABLE_HEADING_DATE_EXPECTED', 'Datum, ko bo izdelek na voljo');
  define('TABLE_HEADING_SPECIALS_INDEX', 'Mesečna akcija za %s');

  define('CAPTION_UPCOMING_PRODUCTS','Naslednji izdelki bodo kmalu na voljo');
  define('SUMMARY_TABLE_UPCOMING_PRODUCTS','tablea prikazuje izdelek, ki bodo kmalu na voljo in datum, kdaj bodo na voljo');

// meta tags special defines
  define('META_TAG_PRODUCTS_PRICE_IS_FREE_TEXT','Zastonj!');

// customer login
  define('TEXT_SHOWCASE_ONLY','Kontakt');
// set for login for prices
  define('TEXT_LOGIN_FOR_PRICE_PRICE','Cena ni na voljo');
  define('TEXT_LOGIN_FOR_PRICE_BUTTON_REPLACE','Prijavite se, da vidite ceno');
// set for show room only
  define('TEXT_LOGIN_FOR_PRICE_PRICE_SHOWROOM', ''); // blank for prices or enter your own text
  define('TEXT_LOGIN_FOR_PRICE_BUTTON_REPLACE_SHOWROOM','Samo predstavitev izdelkov');

// authorization pending
  define('TEXT_AUTHORIZATION_PENDING_PRICE', 'Cena ni na voljoe');
  define('TEXT_AUTHORIZATION_PENDING_BUTTON_REPLACE', 'Ni še odobreno');
  define('TEXT_LOGIN_TO_SHOP_BUTTON_REPLACE','Prijavite se za nakup');
  define('TEXT_AUTHORIZATION_PENDING_CHECKOUT', 'Problem z nakupom - Nakup še ni odobren');

// text pricing
  define('TEXT_CHARGES_WORD','Calculated Charge:');
  define('TEXT_PER_WORD','<br />Price per word: ');
  define('TEXT_WORDS_FREE',' Word(s) free ');
  define('TEXT_CHARGES_LETTERS','Calculated Charge:');
  define('TEXT_PER_LETTER','<br />Price per letter: ');
  define('TEXT_LETTERS_FREE',' Letter(s) free ');
  define('TEXT_ONETIME_CHARGES','*onetime charges = ');
  define('TEXT_ONETIME_CHARGES_EMAIL',"\t" . '*onetime charges = ');
  define('TEXT_ATTRIBUTES_QTY_PRICES_HELP', 'Option Quantity Discounts');
  define('TABLE_ATTRIBUTES_QTY_PRICE_QTY','QTY');
  define('TABLE_ATTRIBUTES_QTY_PRICE_PRICE','PRICE');
  define('TEXT_ATTRIBUTES_QTY_PRICES_ONETIME_HELP', 'Option Quantity Discounts Onetime Charges');

// textarea attribute input fields
  define('TEXT_MAXIMUM_CHARACTERS_ALLOWED',' maximum characters allowed');
  define('TEXT_REMAINING','remaining');

// Shipping Estimator
  define('CART_SHIPPING_OPTIONS', 'Izračunani stroški dostave');
  define('CART_SHIPPING_OPTIONS_LOGIN', 'Prosimo, da se <a href="' . zen_href_link(FILENAME_LOGIN, '', 'SSL') . '"><span class="pseudolink">Prijavite</span></a>, da vam lahko pokažemo točne stroške dostave.');
  define('CART_SHIPPING_METHOD_TEXT', 'Dostavne metode');
  define('CART_SHIPPING_METHOD_RATES', 'Cene');
  define('CART_SHIPPING_METHOD_TO','Dostavi ');
  define('CART_SHIPPING_METHOD_TO_NOLOGIN', 'Dostavi: <a href="' . zen_href_link(FILENAME_LOGIN, '', 'SSL') . '"><span class="pseudolink">Prijava</span></a>');
  define('CART_SHIPPING_METHOD_FREE_TEXT','Zastonj dostava');
  define('CART_SHIPPING_METHOD_ALL_DOWNLOADS','- Dolpotegi');
  define('CART_SHIPPING_METHOD_RECALCULATE','Izračunaj');
  define('CART_SHIPPING_METHOD_ZIP_REQUIRED','da');
  define('CART_SHIPPING_METHOD_ADDRESS','Naslov:');
  define('CART_OT','Skupni izračun stroškov:');
  define('CART_OT_SHOW','da'); // set to false if you don't want order totals
  define('CART_ITEMS','Idelki v košarici: ');
  define('CART_SELECT','Izberite');
  define('ERROR_CART_UPDATE', '<strong>Prosimo, da posodobite vaše naročilo.</strong> ');
  define('IMAGE_BUTTON_UPDATE_CART', 'Posodobi');
  define('EMPTY_CART_TEXT_NO_QUOTE', 'Opozorilo! Vaša seja je potekla ... Prosimo obnovite svojo košarico za točne stroške dostave ...');
  define('CART_SHIPPING_QUOTE_CRITERIA', 'Izračun stroškov glede na vaš naslov:');

// multiple product add to cart
  define('TEXT_PRODUCT_LISTING_MULTIPLE_ADD_TO_CART', 'Dodaj: ');
  define('TEXT_PRODUCT_ALL_LISTING_MULTIPLE_ADD_TO_CART', 'Dodaj: ');
  define('TEXT_PRODUCT_FEATURED_LISTING_MULTIPLE_ADD_TO_CART', 'Dodaj: ');
  define('TEXT_PRODUCT_NEW_LISTING_MULTIPLE_ADD_TO_CART', 'Dodaj: ');
  //moved SUBMIT_BUTTON_ADD_PRODUCTS_TO_CART to button_names.php as BUTTON_ADD_PRODUCTS_TO_CART_ALT

// discount qty table
  define('TEXT_HEADER_DISCOUNT_PRICES_PERCENTAGE', 'Količinski popust');
  define('TEXT_HEADER_DISCOUNT_PRICES_ACTUAL_PRICE', 'Količinski popust');
  define('TEXT_HEADER_DISCOUNT_PRICES_AMOUNT_OFF', 'Količinski popust');
  define('TEXT_FOOTER_DISCOUNT_QUANTITIES', '* Popust se izračuna na izbrane možnosti');
  define('TEXT_HEADER_DISCOUNTS_OFF', 'Količinski popust ni na voljo ...');

// sort order titles for dropdowns
  define('PULL_DOWN_ALL_RESET','- RESET - ');
  define('TEXT_INFO_SORT_BY_PRODUCTS_NAME', 'Ime izdelka');
  define('TEXT_INFO_SORT_BY_PRODUCTS_NAME_DESC', 'Ime izdelka - pad');
  define('TEXT_INFO_SORT_BY_PRODUCTS_PRICE', 'Cena - najnižja do najvišje');
  define('TEXT_INFO_SORT_BY_PRODUCTS_PRICE_DESC', 'Cena - najvišja do najnižje');
  define('TEXT_INFO_SORT_BY_PRODUCTS_MODEL', 'Model');
  define('TEXT_INFO_SORT_BY_PRODUCTS_DATE_DESC', 'Dodano - Najnovejši naprej');
  define('TEXT_INFO_SORT_BY_PRODUCTS_DATE', 'Dodano - Najstarejši naprej');
  define('TEXT_INFO_SORT_BY_PRODUCTS_SORT_ORDER', 'Privzeti prikaz');

// downloads module defines
  define('TABLE_HEADING_DOWNLOAD_DATE', 'Link Expires');
  define('TABLE_HEADING_DOWNLOAD_COUNT', 'Remaining');
  define('HEADING_DOWNLOAD', 'To download your files click the download button and choose "Save to Disk" from the popup menu.');
  define('TABLE_HEADING_DOWNLOAD_FILENAME','Filename');
  define('TABLE_HEADING_PRODUCT_NAME','Item Name');
  define('TABLE_HEADING_BYTE_SIZE','File Size');
  define('TEXT_DOWNLOADS_UNLIMITED', 'Unlimited');
  define('TEXT_DOWNLOADS_UNLIMITED_COUNT', '--- *** ---');

// misc
  define('COLON_SPACER', ':&nbsp;&nbsp;');
  define('PAYMENT_JAVASCRIPT_DISABLED', 'Za nakup prosimo, da vklopite Javascript.');

// table headings for cart display and upcoming products
  define('TABLE_HEADING_QUANTITY', 'Količina');
  define('TABLE_HEADING_PRODUCTS', 'Ime izdelka');
  define('TABLE_HEADING_TOTAL', 'Skupaj');

// create account - login shared
  define('TABLE_HEADING_PRIVACY_CONDITIONS', 'Politika zasebnosti');
  define('TEXT_PRIVACY_CONDITIONS_DESCRIPTION', 'Prosimo označite, da se strinjate s politiko zasebnosti. Politika zasebnosti lahko preberete na <a href="' . zen_href_link(FILENAME_PRIVACY, '', 'SSL') . '"><span class="pseudolink">naslednji povezavi</span></a>.');
  define('TEXT_PRIVACY_CONDITIONS_CONFIRM', 'Prebral sem in se strinjam s politiko zasebnosti!');
  define('TABLE_HEADING_ADDRESS_DETAILS', 'Naslov');
  define('TABLE_HEADING_PHONE_FAX_DETAILS', 'Dodatni podatki');
  define('TABLE_HEADING_DATE_OF_BIRTH', 'Preverite svojo starost');
  define('TABLE_HEADING_LOGIN_DETAILS', 'Podatki za prijavo');
  define('TABLE_HEADING_REFERRAL_DETAILS', 'Kdo vas je napotil na našo stran?');

  define('ERROR_TEXT_COUNTRY_DISABLED_PLEASE_CHANGE', 'Na žalost ne sprejemamo več nakupov iz "%s".  Prosimo spremenite svoj naslov.');

  define('ENTRY_EMAIL_PREFERENCE','Podatki za email');
  define('ENTRY_EMAIL_HTML_DISPLAY','HTML');
  define('ENTRY_EMAIL_TEXT_DISPLAY','samo TEKST');
  define('EMAIL_SEND_FAILED','NAPAKA: Napaka pri pošiljanju na e-mail: "%s" <%s> z subjektom: "%s"');

  define('DB_ERROR_NOT_CONNECTED', 'NAPAKA - Napaka pri povezavi na databazo');
  define('ERROR_DATABASE_MAINTENANCE_NEEDED', '<a href="http://www.zen-cart.com/content.php?334-ERROR-0071-There-appears-to-be-a-problem-with-the-database-Maintenance-is-required" target="_blank">NAPAKA 0071: Napaka pri povezavi na databazo.</a>');

  // EZ-PAGES Alerts
  define('TEXT_EZPAGES_STATUS_HEADER_ADMIN', 'OPOZORILO: EZ-PAGES HEADER - Samo zasebno za administratorjev IP.');
  define('TEXT_EZPAGES_STATUS_FOOTER_ADMIN', 'OPOZORILO: EZ-PAGES FOOTER - Samo zasebno za administratorjev IP.');
  define('TEXT_EZPAGES_STATUS_SIDEBOX_ADMIN', 'OPOZORILO: EZ-PAGES SIDEBOX - Samo zasebno za administratorjev IP.');

// extra product listing sorter
  define('TEXT_PRODUCTS_LISTING_ALPHA_SORTER', '');
  define('TEXT_PRODUCTS_LISTING_ALPHA_SORTER_NAMES', 'Izdelki, ki se začnejo na ...');
  define('TEXT_PRODUCTS_LISTING_ALPHA_SORTER_NAMES_RESET', '-- Reset --');

///////////////////////////////////////////////////////////

  $file_list = array(FILENAME_EMAIL_EXTRAS, FILENAME_HEADER, FILENAME_BUTTON_NAMES, FILENAME_ICON_NAMES, FILENAME_OTHER_IMAGES_NAMES, FILENAME_CREDIT_CARDS, FILENAME_WHOS_ONLINE, FILENAME_META_TAGS); 
  foreach ($file_list as $file) { 
    $file = str_replace(".php","",$file); 
    require_once(zen_get_file_directory(DIR_FS_CATALOG . DIR_WS_LANGUAGES . $_SESSION['language'] . '/', $file . '.php', 'false'));
  }

// END OF EXTERNAL LANGUAGE LINKS
