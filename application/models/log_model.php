<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Log_model extends CI_Model {
	
	public function insert_log($newlog)
	{
		$this->db->insert('log', $newlog);
	}
}
?>