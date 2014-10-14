<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Formdevclass_model extends CI_Model {
	
	function __construct() {
        parent::__construct();
    }
	
	function get_all_sections() {
		$this->db->select('*');
		$this->db->from('tbl_class');
		$query = $this->db->get();
	    return $query->result();
    }
	
	function get_yearterm() {
		$this->db->select('start_year, term');
		$this->db->from('tbl_terms');
		$query = $this->db->get();
	    return $query->result();
    }	
	
	function get_section_id($section) {
		$this->db->select('id');
		$this->db->from('tbl_class');
		$this->db->where('section', $section);
		$query = $this->db->get();
	    return $query->row_array();
    }
	
	function get_section($id) {
		$this->db->select('*');
		$this->db->from('tbl_class');
		$this->db->where('id', $id);
		$query = $this->db->get();
	    return $query->result();
    }
	
	function get_facis_per_class($class) {
		$this->db->select('tbl_class_faci.faci, tbl_class_faci.class, tbl_class_faci.type, facilitators.firstname, facilitators.lastname, user.username, user.facebook');
		$this->db->from('tbl_class_faci, facilitators, user');
		$this->db->where('class', $class);
		$this->db->where('tbl_class_faci.faci = facilitators.id');
		$this->db->where('facilitators.id = user.idprofile');
		$this->db->order_by('class asc, type asc, facilitators.batch asc, facilitators.term asc, facilitators.firstname asc');
		$query = $this->db->get();
	    return $query->result();
    }
	
	function get_number_classes() {
		$this->db->select('COUNT(*)');
		$this->db->from('tbl_class');
		$query = $this->db->get();
	    return $query->result();
    }
	
	function get_number_facis($class) {
		$this->db->select('COUNT(*)');
		$this->db->from('tbl_class_faci');
		$this->db->where('class', $class);
		$query = $this->db->get();
	    return $query->result();
    }
	
}
?>