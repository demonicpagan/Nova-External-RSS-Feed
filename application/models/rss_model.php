<?php
/*
|---------------------------------------------------------------
| CHAT MODEL
|---------------------------------------------------------------
|
| File: models/chat_model.php
| System Version: 1.0
|
| Model used to access the config table and pull the system global
| variables for use by the controllers and views.
|
*/

class Chat_model extends Model {

	function Chat_model()
	{
		parent::Model();

		/* load the db utility library */
		$this->load->dbutil();
	}

	/*
	|---------------------------------------------------------------
	| GET METHODS
	|---------------------------------------------------------------
	*/

	function get_all_settings()
	{
		$query = $this->db->get('rss');

		return $query;
	}

	function get_settings($value = '')
	{
		$array = FALSE;

		if (is_array($value))
		{ /* if the value is array, do nothing */
			$select = $value;
		}
		else
		{ /* otherwise, we need to set the string as an array value */
			$select[] = $value;
		}

		/* grab all the global items */
		$query = $this->db->get('rss');

		if ($query->num_rows() > 0)
		{ /* if there is at least 1 row in the result */
			foreach ($query->result() as $item)
			{
				if (in_array($item->rss_key, $select))
				{ /* if the key is in the array of keys we want, drop it in an array */
					$array[$item->rss_key] = $item->rss_value;
				}
			}
		}

		/* return the final settings array */
		return $array;
	}

	/*
	|---------------------------------------------------------------
	| UPDATE METHODS
	|---------------------------------------------------------------
	*/

	function update_setting($field = '', $data = '', $identifier = 'rss_key')
	{
		$this->db->where($identifier, $field);
		$query = $this->db->update('rss', $data);

		/* optimize the table */
		$this->dbutil->optimize_table('rss');

		return $query;
	}
}

/* End of file chat_model.php */
/* Location: ./application/models/chat_model.php */