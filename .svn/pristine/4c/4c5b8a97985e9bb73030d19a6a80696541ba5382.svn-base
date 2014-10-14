<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class batch_model extends CI_Model {
	
	function __construct() {
        parent::__construct();
    }

	function get_batches(){
		$q = $this->db->get('batches');
		return $q->result();		
	}

	function get_batches_ordered($column_name){
		$this->db->order_by($column_name,'asc');
		$q = $this->db->get('batches');
		return $q->result();
	}

	function get_batches_faci($faci_id){
		
	}
	
	function get_batch_desc($batch_id) {
		$this->db->select('*');
		$this->db->from('batches');
		$this->db->where('batchnumber', $batch_id);
		$query = $this->db->get();
	    return $query->result();
    }

	function get_batch($batch_id) {
		$query = $this->db->get_where('facis', array('id'=>$batch_id));
	    return $query->result();
    }
	
	    function insert_batch($batch_arr){
        $this->db->insert('batches',$batch_arr);
    }
}
?>