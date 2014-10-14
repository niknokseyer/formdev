<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class committee_model extends CI_Model {
	
	function __construct() {
        parent::__construct();
    }
	
	function get_all_committees() {
		$this->db->select('*');
		$this->db->from('tbl_committees');
		$this->db->where('id >= 1');
		$this->db->where('id <= 4');
		$query = $this->db->get();
	    return $query->result();
    }
	
	function get_yearterm() {
		$this->db->select('start_year, term');
		$this->db->from('tbl_terms');
		$query = $this->db->get();
	    return $query->result();
    }	
	
	function get_committee_id($com) {
		$this->db->select('id');
		$this->db->from('tbl_committees');
		$this->db->where('name', $com);
		$query = $this->db->get();
	    return $query->row_array();
    }
	
	function get_committee($id) {
		$this->db->select('*');
		$this->db->from('tbl_committees');
		$this->db->where('id', $id);
		$query = $this->db->get();
	    return $query->result();
    }
	
	function get_facis_per_committee($com) {
		$this->db->select('tbl_committee_membership.faci, tbl_committee_membership.committee, tbl_committee_membership.type, facilitators.firstname, facilitators.lastname, user.username, user.facebook');
		$this->db->from('tbl_committee_membership, facilitators, user');
		$this->db->where('committee', $com);
		$this->db->where('tbl_committee_membership.faci = facilitators.id');
		$this->db->where('facilitators.id = user.idprofile');
		$this->db->order_by('committee asc, type asc, facilitators.batch asc, facilitators.term asc, facilitators.firstname asc');
		$query = $this->db->get();
	    return $query->result();
    }
	
	function get_number_facis($com) {
		$this->db->select('COUNT(*)');
		$this->db->from('tbl_committee_membership');
		$this->db->where('committee', $com);
		$query = $this->db->get();
	    return $query->result();
    }
	
	function get_committee_projects($com) {
		$this->db->select('*');
		$this->db->from('committee_projects');
		$this->db->where('committee', $com);
		$this->db->order_by('project asc');
		$query = $this->db->get();
	    return $query->result();
	}
	
	function get_committee_projects_milestones($project) {
		$sql = 'SELECT committee_project_milestone.*, facilitators.nickname as faci, IF(committee_project_milestone.date_due < (SELECT CURDATE()) AND status = \'Pending\', true, false) as overdue, user.iduser FROM committee_project_milestone, facilitators, user WHERE project = '.$project.' AND committee_project_milestone.faci_accountable = facilitators.id AND facilitators.id = user.idprofile ORDER BY date_due asc';
		$query = $this->db->query($sql);
	    return $query->result();
	}
	
	function isComHead($com, $id) {
		$this->db->select('type');
		$this->db->from('tbl_committee_membership, facilitators, user');
		$this->db->where('tbl_committee_membership.committee', $com);
		$this->db->where('user.iduser', $id);
		$this->db->where('tbl_committee_membership.faci = facilitators.id');
		$this->db->where('facilitators.id = user.idprofile');
		$query = $this->db->get();
		$q = $query->result();
	    if(isset($q[0]->{'type'}))
			if($q[0]->{'type'} == 'Committee Head')
				return true;
			else
				return false;
		else
			return false;
	}
	
	function get_project_id($com, $proj) {
		$this->db->select('id');
		$this->db->from('committee_projects');
		$this->db->where('committee', $com);
		$this->db->where('project', $proj);
		$query = $this->db->get();
	    return $query->row_array();
	}
	
	function get_project_info($proj) {
		$this->db->select('*');
		$this->db->from('committee_projects');
		$this->db->where('id', $proj);
		$query = $this->db->get();
	    $q = $query->result();
		return $q[0];
	}
	
	function get_committee_project_milestone($m) {
		$this->db->select('*');
		$this->db->from('committee_project_milestone');
		$this->db->where('id', $m);
		$query = $this->db->get();
	    $q = $query->result();
		return $q;
	}
	
	function add_project($data) {
		$this->db->insert('committee_projects', $data); 
	}
	
	function delete_project($id) {
		$query = $this->db->delete('committee_projects', array('id'=>$id));
	}
	
	function edit_project($id,$data) {
		$this->db->where('id', $id); 
		$this->db->update('committee_projects', $data); 
	}
	
	function add_milestone($data) {
		$this->db->insert('committee_project_milestone', $data); 
	}
	
	function delete_milestone($id) {
		$query = $this->db->delete('committee_project_milestone', array('id'=>$id));
	}
	
	function edit_milestone($id,$data) {
		$this->db->where('id', $id); 
		$this->db->update('committee_project_milestone', $data); 
	}
}
?>