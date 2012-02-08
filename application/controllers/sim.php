<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once MODPATH.'core/controllers/nova_sim.php';

class Sim extends Nova_sim {

	public function __construct()
	{
		parent::__construct();
	}

	function logarchive()
	{

		// Adds RSS Feed to main
		$this->config->load('external_rss', TRUE);

		// Load the SimplePie Library
		$this->load->library('lastrss');

		// Set config items to variables
		$rss_url = $this->config->item('rss_url','external_rss');
		$rss_limit = $this->config->item('rss_limit','external_rss');
		$rss_cache_location = $this->config->item('rss_cahce_location','external_rss');
		$rss_cache_time = $this->config->item('rss_cache_time','external_rss');

		// lastRSS Cache
		$this->lastrss->cache_time = $rss_cache_time;
		$this->lastrss->cache_dir = $rss_cache_location;

		// Set the Feed URL
		$data['rss_items'] = $this->lastrss->get($rss_url);

		// Set the number of items returned
		$this->lastrss->items_limit = $rss_limit;

		$data['rss_site_url'] = $this->config->item('rss_site_url','external_rss');

		$data['header'] = $this->lang->line('rss_title');

		// Labels
		$data['rss'] = array(
			'rss_recent' => $this->lang->line('rss_recent'),
			'rss_sim' => $this->options['sim_name'],
			'rss_full' => $this->lang->line('rss_full'),
			'rss_ucip' => $this->lang->line('rss_ucip'),
		);

		// Get view file page location
		$this->_regions['content'] = Location::view('sim_logarchive', $this->skin, 'main', $data);
		$this->_regions['title'] .= $this->lang->line('rss_title');

		// write data to the template
		Template::assign($this->_regions);

		// render the template
		Template::render();
	}
}
