<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Faci_model extends CI_Model {
	

	function __construct() {
        parent::__construct();
    }
	
	function get_faci($faci_id) {
		
		$this->db->select('*');
		$this->db->from('facilitators');
		$this->db->where('id', $faci_id);
		$this->db->join('user', 'user.idprofile = facilitators.id');

		$query = $this->db->get();
		
	    return $query->result();
    }

    function get_all_facilitators(){
        $this->db->order_by('lastname','asc');
        $query = $this->db->get('facilitators');
        return $query->result();
    }

    function get_all_batches() {
        $this->db->order_by('startyear','desc');
        $query = $this->db->get('batches');
        return $query->result();
    }
	
    function get_batch($batch_id) {
		$query = $this->db->get_where('batches', array('id'=>$batch_id));
	    return $query->result();
    }

    // function get_batch_byfaci($faciId){
    //     $this->db->select('batchid');
    //     $query$this->db->get_where('faci_batch',array('faciid'=>$faciId));
    // }

    function get_facis($batch_id) {
        $this->db->select('facilitators.*, user.username, user.facebook');
        $this->db->from('facilitators','user');
		$this->db->where('batch',$batch_id);
		$this->db->join('user', 'facilitators.id = user.idprofile');
		$this->db->order_by("term", "asc");
		$this->db->order_by("lastname", "asc"); 
    	$query = $this->db->get();

		/*
        $faci_ids = array();
        if($query->num_rows > 0){
            foreach($query->result() as $row){
                $faci_ids[] = $row->id;
            }
        }*/
    	return $query->result();
    }
	
	function get_numFacis($batch_id) {
        $this->db->select('COUNT(batch)');
        $this->db->from('facilitators');
		$this->db->where('batch',$batch_id);
		$this->db->join('user', 'facilitators.id = user.idprofile');
    	$query = $this->db->get();
    	return $query->result();
    }
	
	function get_numCurFacis($batch_id) {
        $this->db->select('COUNT(batch)');
        $this->db->from('facilitators');
		$this->db->where('batch',$batch_id);
		$this->db->where('current_faci','yes');
		$this->db->join('user', 'facilitators.id = user.idprofile');
    	$query = $this->db->get();
    	return $query->result();
    }

    function insert_batch($batch_arr){
        $this->db->insert('batches',$batch_arr);
        return $this->db->insert_id();
    }

    function insert_faci($faci_arr){
        $this->db->insert('facilitators',$faci_arr);
        return $this->db->insert_id();
    }

    function update_faci($faciId, $faci){
        $this->db->where('id',$faciId);
        $this->db->update('facilitators',$faci);
    }

    function delete_faci($faciId){
        $this->db->where('id',$faciId);
        $this->db->delete('facilitators');
    }

    function insert_facibatch($faciId, $batchId){
        $this->db->insert('faci_batch',array('faciid'=>$faciId,'batchid'=>$batchId));
    }
	
	
}
?>