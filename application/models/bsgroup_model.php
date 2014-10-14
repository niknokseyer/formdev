<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class bsgroup_model extends CI_Model {
	
	function __construct() {
        parent::__construct();
    }
	
	function get_all_groups() {
		$this->db->select('*');
		$this->db->from('tbl_bs_group');
		$query = $this->db->get();
	    return $query->result();
    }
	
	function get_yearterm() {
		$this->db->select('start_year, term');
		$this->db->from('tbl_terms');
		$query = $this->db->get();
	    return $query->result();
    }	
	
	function get_group_id($group) {
		$this->db->select('id');
		$this->db->from('tbl_bs_group');
		$this->db->where('name', $group);
		$query = $this->db->get();
	    return $query->row_array();
    }
	
	function get_group($id) {
		$this->db->select('*');
		$this->db->from('tbl_bs_group');
		$this->db->where('id', $id);
		$query = $this->db->get();
	    return $query->result();
    }
	
	function get_facis_per_bs($group) {
		$this->db->select('tbl_bs_faci.faci, tbl_bs_faci.bs_group, tbl_bs_faci.type, facilitators.firstname, facilitators.lastname, user.username, user.facebook');
		$this->db->from('tbl_bs_faci, facilitators, user');
		$this->db->where('bs_group', $group);
		$this->db->where('tbl_bs_faci.faci = facilitators.id');
		$this->db->where('facilitators.id = user.idprofile');
		$this->db->order_by('bs_group asc, type asc, facilitators.batch asc, facilitators.term asc, facilitators.firstname asc');
		$query = $this->db->get();
	    return $query->result();
    }
	
	function get_number_groups() {
		$this->db->select('COUNT(*)');
		$this->db->from('tbl_bs_group');
		$query = $this->db->get();
	    return $query->result();
    }
	
	function get_number_facis($group) {
		$this->db->select('COUNT(*)');
		$this->db->from('tbl_bs_faci');
		$this->db->where('bs_group', $group);
		$query = $this->db->get();
	    return $query->result();
    }
	
}
?>