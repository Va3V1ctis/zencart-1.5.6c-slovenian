<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: time_out.php 3027 2006-02-13 17:15:51Z drbyte $
 */

define('NAVBAR_TITLE', 'Vaša prijava je potekla');
define('HEADING_TITLE', 'Opozorilo! Vaša seja je potekla.');
define('HEADING_TITLE_LOGGED_IN', 'Opozorilo! Vaša seja je potekla in vaše želje ne moremo izpolniti. ');
define('TEXT_INFORMATION', '<p>V primeru, da ste bili v procesu nakupa, vas prosimo, da se ponovno prijavite in vaša košarica bo obnovljena. Ko se boste ponovno prijavili boste lahko končali nakup.</p><p>V primeru, da ste že končali nakup in ga želite preveriti' . (DOWNLOAD_ENABLED == 'true' ? ', ali želite dolpotegniti željeno vsebino' : '') . ', vas prosimo, da pojdite na stran <a href="' . zen_href_link(FILENAME_ACCOUNT, '', 'SSL') . '">Moj račun</a> in preglejte vaše naročilo.</p>');

define('TEXT_INFORMATION_LOGGED_IN', 'Še vedno ste prijavljeni, lahko nadaljujte navigacijo po naši trgovini.');

define('HEADING_RETURNING_CUSTOMER', 'Prijava');
define('TEXT_PASSWORD_FORGOTTEN', 'Pozabil(a) sem geslo?')
?>
