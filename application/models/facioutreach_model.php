<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class facioutreach_model extends CI_Model {
	
	function __construct() {
        parent::__construct();
    }
	
	function get_all_signup() {
		$this->db->select('*');
		$this->db->from('facioutreach_signup');
		$this->db->order_by('date');
		$query = $this->db->get();
	    return $query->result();
    }
	
	function get_all_live_signup() {
		$this->db->select('*');
		$this->db->from('facioutreach_signup');
		$this->db->where('live', '1');
		$this->db->order_by('date');
		$query = $this->db->get();
	    return $query->result();
    }
	
	function check_live($id) {
		$this->db->select('live');
		$this->db->from('facioutreach_signup');
		$this->db->where('id', $id);
		$query = $this->db->get();
	    return $query->result();
    }
	
	function get_signup($id) {
		$this->db->select('*');
		$this->db->from('facioutreach_signup');
		$this->db->where('id', $id);
		$query = $this->db->get();
	    return $query->result();
    }	
	
	function get_facis_per_signup($id) {
		$this->db->select('facioutreach_members.faci, facioutreach_members.id_outreach, facilitators.firstname, facilitators.lastname, user.iduser');
		$this->db->from('facioutreach_members, facilitators, user');
		$this->db->where('id_outreach', $id);
		$this->db->where('facioutreach_members.faci = facilitators.id');
		$this->db->where('facilitators.id = user.idprofile');
		$this->db->order_by('id_outreach asc, facilitators.batch asc, facilitators.term asc, facilitators.firstname asc');
		$query = $this->db->get();
	    return $query->result();
    }
	
	function get_number_facis($id) {
		$this->db->select('COUNT(*)');
		$this->db->from('facioutreach_members');
		$this->db->where('id_outreach', $id);
		$query = $this->db->get();
	    return $query->result();
    }
	
	function get_id_user($id,$faci) {
		$this->db->select('id');
		$this->db->from('facioutreach_members,user');
		$this->db->where('facioutreach_members.id_outreach', $id);
		$this->db->where('user.iduser', $faci);
		$this->db->where('facioutreach_members.faci = user.idprofile');
		$query = $this->db->get();
	    return $query->result();
    }
	
	function get_faci_by_id($id){
		$this->db->select('faci');
        $this->db->from('facioutreach_members');
		$this->db->where('id', $id);
		$query = $this->db->get();
		
		return $query->result();
	}
	
	function add_faci($id,$faci) {
		$data = array(
			'id_outreach'=>$id ,
			'faci'=>$faci
		);

		$this->db->insert('facioutreach_members', $data); 
	}
	
	function add_signup($data) {
		$this->db->insert('facioutreach_signup', $data); 
	}
	
	function update_signup($id,$data) {
		$this->db->where('id', $id); 
		$this->db->update('facioutreach_signup', $data); 
	}
	
	function delete_faci($faci) {
		$query = $this->db->delete('facioutreach_members', array('id'=>$faci));
	}
	
	function delete_signup($id) {
		$query = $this->db->delete('facioutreach_signup', array('id'=>$id));
	}
}
?>