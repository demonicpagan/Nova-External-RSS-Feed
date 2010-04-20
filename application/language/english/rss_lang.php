<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
|---------------------------------------------------------------
| LANGUAGE FILE - ENGLISH
|---------------------------------------------------------------
| File: application/language/english/mibbit_chat_lang.php
| System Version: 1.0
|
| English language file for the system. Punctuation constants are
| defined in ./application/config/constants.php
|
|---------------------------------------------------------------
| NOTES
|---------------------------------------------------------------
| The following should not be translated:
|
| # NDASH	- translates to a medium dash
| # RSQUO	- translates to a right single quote
| # RARROW	- translates to a right double arrow
| # LARROW	- translates to a left double array
| # AMP		- translates to an ampersand
|
| Rules:
|
| # If you use an apostrophe (') in your translations, you shoud be
|   using the PHP variable for it (RSQUO)
| # If you use a dash (-) in your translations, you should be using
    the PHP variable for it (NDASH)
| # Respect case-sensitivity in the original language. If something
|   is capitalized in English, make sure it's capitalized in your
|   translation. Likewise, if it isn't capitalized in English, don't
|   capitalize it in your translation
| # Respect punctuation. If there's a colon (:), question mark (?),
|   exclamation mark (!), period (.), semicolon (;), comma (,), or
|   any other form of punctuation in the English, it needs to exist
|   in your translation. Exceptions exist where language conventions
|	say otherwise.
*/

/*
|---------------------------------------------------------------
| RSS PAGE TEXT
|---------------------------------------------------------------
*/

$lang['rss_title'] = 'LOG ARCHIVE';
$lang['rss_recent'] = 'Recent logs for the ';
$lang['rss_ucip'] = 'a UCIP SIMulation';
$lang['rss_full'] = 'Full Archive';

/*
|---------------------------------------------------------------
| RSS ADMIN PAGE TEXT
|---------------------------------------------------------------
*/

$lang['rss'] = 'External RSS Feed';
$lang['rss_url'] = 'External RSS Feed URL';
$lang['rss_limit'] = 'Number of Returned Items';
$lang['rss_site_url'] = 'Archive URL';