<?php
/*
|---------------------------------------------------------------
| MAIN CONTROLLER
|---------------------------------------------------------------
|
| File: controllers/main.php
| System Version: 1.0
|
| Controller that handles the MAIN section of the system.
|
*/

require_once APPPATH . 'controllers/base/main_base.php';

class Main extends Main_base {

	function Main()
	{
		parent::Main_base();
	}

	function rss()
	{
		// Load the SimplePie Library
		$this->load->library('simplepie');

		// Adds RSS Feed to main
		$this->load->model('rss_model', 'rss');
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

			// Set cache location
			$this->simplepie->set_cache_location(APPPATH.'cache/rss');

			$data['rss_url'] = $setting['rss_url'];
		}

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
		);

		// Get view file page location
		$view_loc = view_location('main_rss', $this->skin, 'main');

		// write data to the template
		$this->template->write('title', $this->lang->line('rss_title'));
		$this->template->write_view('content', $view_loc, $data);

		// render the template
		$this->template->render();
	}

}

/* End of file main.php */
/* Location: ./application/controllers/main.php */