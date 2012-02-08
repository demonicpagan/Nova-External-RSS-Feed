<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| External RSS Configuration Options
|--------------------------------------------------------------------------
|
| This holds all the needed configuration options for you to place a Mibbit
| chat page on your Nova installation.
|
*/
$config['rss_url'] = "http://<yoursite>/feed";
$config['rss_limit'] = "15";
$config['rss_site_url'] = "http://<yoursite>";
$config['rss_cache_enable'] = TRUE;
$config['rss_cahce_location'] = APPPATH."cache/rss";
$config['rss_cache_time'] = "3600"; // 1 Hour

/* End of file external_rss.php */
/* Location: ./application/config/external_rss.php */