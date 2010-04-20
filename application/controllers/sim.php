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
		// Load the SimplePie Library
		$this->load->library('simplepie');

		// Adds RSS Feed to main
		$this->load->model('external_rss_model', 'rss');
		$rss = $this->rss->get_all_settings();

		// Make sure there is something there
		if ($rss->num_rows() > 0)
		{
			foreach ($rss->result() as $rssr)
			{
				$setting[$rssr->rss_key] = $rssr->rss_value;
			}

			// Set the Feed URL
			$this->simplepie->set_feed_url($setting['rss_feed_url']);

			// Set the number of items returned
			$this->simplepie->set_item_limit($setting['rss_limit']);

			$data['rss_url'] = $setting['rss_url'];
		}

		// Disable SimplePie Cache
		$this->simplepie->enable_cache(false);

		// Initialize SimplePie
		$this->simplepie->init();
		$this->simplepie->handle_content_type();

		// Get the number of items from the feed
		$data['rss_items'] = $this->simplepie->get_items();

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