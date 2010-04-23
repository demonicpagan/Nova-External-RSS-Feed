<?php
/*
|---------------------------------------------------------------
| SIM CONTROLLER
|---------------------------------------------------------------
|
| File: controllers/sim.php
| System Version: 1.0
|
| Controller that handles the SIM part of the system.
|
*/

require_once APPPATH . 'controllers/base/sim_base.php';

class Sim extends Sim_base {
	
	function Sim()
	{
		parent::Sim_base();
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
		$view_loc = view_location('sim_logarchive', $this->skin, 'main');

		// write data to the template
		$this->template->write('title', $this->lang->line('rss_title'));
		$this->template->write_view('content', $view_loc, $data);

		// render the template
		$this->template->render();
	}
}

/* End of file sim.php */
/* Location: ./application/controllers/sim.php */