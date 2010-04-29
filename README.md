RSS External Feed Application
=============================
Developer: Dustin Lennon<br />
Email: <demonicpagan@gmail.com>

This application is developed under the licenses of Nova and CodeIgniter.

Install Instructions
--------------------
The following application will add the ability to pull RSS external feeds to your Nova management system. To install 
this application you need to perform the following steps.

1. Upload the application/cache directory to your application folder.

2. Upload application/config/external_rss.php to your application/config folder of your Nova install. Configure your
MOD settings in this file.

3. Upload application/controllers/sim.php to your application/controllers folder of your Nova install replacing 
the existing one if you haven't already modified this file. If you already have changes in this file, it's best 
that you just take the contents of this file and add it into your existing sim.php file.

4. Add the following line into your app_lang.php for your associated language(s) after the rest of the includes 
and before the Global items.

	`/* include RSS External Feed Language file */`<br />
	`include_once APPPATH .'language/'. $language . '/rss_lang.php';`

5. Upload application/language/english/rss_lang.php to your 
application/views/language/english folder of your Nova install. Translate this page into other languages and upload
them to the appropriate language directories. (If you would like your language included into a future release, 
please contact me via email.)

6. Upload application/libraries/Lastrss.php to your application/libraries folder of your Nova installation.

7. Upload application/views/_base_override/main/pages/sim_logarchive.php to your
application/views/_base_override/main/pages folder of your Nova install.

8. Log into your Nova management system and add a RSS menu item so your users can access your RSS page.
You will use the link of sim/logarchive when you create the menu item.

If you experience any issues please submit a bug report on 
<http://github.com/demonicpagan/Nova-External-RSS-Feed/issues>.

You can always get the latest SVN trunk from <http://github.com/demonicpagan/Nova-External-RSS-Feed> as well.

Changelog - Dates are in Epoch time
-----------------------------------
1272514948:

*	Created a more readable README for GitHub.

1271983178:

*	Changed the RSS Parser library from SimplePie to lastRSS. SimplePie has too many incompatibilities with
PHP5 causing pages to be unreachable thus resulting in blank pages if running on Firefox and connection
errors in Chrome and Internet Explorer.
*	Added a cache directory for transparent caching of rss feeds.

1271775224:

*	Fixed the blank screen issue, was an error in the model file where I forgot to rename the class so a
class was being called twice (THANK YOU PHP ERROR REPORTING!).
*	Found error in sim.php as to why the feed wasn't being displayed.
*	Added Site URL option to admin to separate it from the Feed URL updated the SQL file to accommodate this.
*	Updated SimplePie library to the latest version from SimplePie.org

1271763038:

*	Started work on RSS External Feed MOD for Nova. Currently a bug in applications/controllers/site.php 
causing a blank screen.