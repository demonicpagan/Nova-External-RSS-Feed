<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| External RSS Configuration Options
|--------------------------------------------------------------------------
|
| This holds all the needed configuration options for you to bring 
| external RSS feeds to your Nova installation.
|
*/
$config['rss_url'] = "http://groups.google.com/group/anodyne-productions-nova-3rd-party-developement/feed/rss_v2_0_topics.xml?num=50";
$config['rss_limit'] = "15";
$config['rss_site_url'] = "http://groups.google.com/group/anodyne-productions-nova-3rd-party-developement/topics";
$config['rss_cache_enable'] = TRUE;
$config['rss_cahce_location'] = APPPATH."cache/rss";
$config['rss_cache_time'] = "3600"; // 1 Hour

/* End of file external_rss.php */
/* Location: ./application/config/external_rss.php */