<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class main_model extends CI_Model {
	
	function __construct() {
        parent::__construct();
    }
	
	function get_faci_name($iduser){
		$this->db->select('firstname, nickname');
		$this->db->from('facilitators, `user`');
		$this->db->where('facilitators.id = user.idprofile');
		$this->db->where('user.iduser', $iduser);
		$query = $this->db->get();
	    $q = $query->result();
		return $q[0];
	}
	
	function get_start_end_term() {
		$this->db->select('term, start_date, end_date');
		$this->db->from('tbl_terms');
		$query = $this->db->get();
	    $q = $query->result();
		return $q[0];
	}
	
	function isCurrentFaci($iduser){
		$sql = 'SELECT IF((SELECT current_faci FROM `user`, facilitators WHERE user.iduser = '.$iduser.' AND user.idprofile = facilitators.id) = \'yes\',true,false) as current_faci';
		$query = $this->db->query($sql);
	    $q = $query->result();
		if(isset($q[0]->{'current_faci'}))
		{
			if($q[0]->{'current_faci'})
				return true;
			else
				return false;
		}
		else
			return false;
	}
	
	function get_birthday($iduser){
		$this->db->select('birthday');
		$this->db->from('facilitators, `user`');
		$this->db->where('facilitators.id = user.idprofile');
		$this->db->where('user.iduser', $iduser);
		$query = $this->db->get();
	    $q = $query->result();
		return $q[0];
	}
	
	function get_curtime() {
		$this->db->select('hour(CURTIME()) as hour, minute(CURTIME()) as min');
		$query = $this->db->get();
	    $q = $query->result();
		return $q[0];
	}
	
	function get_date($n) {
		$sql = 'SELECT (SELECT DATE_ADD(CURDATE(), INTERVAL '.$n.' DAY)) as date;';
		$query = $this->db->query($sql);
	    $q = $query->result();
		return $q[0];
	}
	
	function get_class($iduser) {
		$this->db->select('tbl_class.section, tbl_class.schedule');
		$this->db->from('tbl_class, tbl_class_faci, user');
		$this->db->where('tbl_class.id = tbl_class_faci.class');
		$this->db->where('user.iduser', $iduser);
		$this->db->where('tbl_class_faci.faci = user.idprofile');
		$query = $this->db->get();
	    return $query->result();
    }
	
	function get_bible_study($iduser) {
		$this->db->select('tbl_bs_group.name, tbl_bs_group.schedule');
		$this->db->from('tbl_bs_group, tbl_bs_faci, `user`');
		$this->db->where('tbl_bs_group.id = tbl_bs_faci.bs_group');
		$this->db->where('tbl_bs_faci.faci = user.idprofile');
		$this->db->where('user.iduser', $iduser);
		$query = $this->db->get();
	    return $query->result();
    }
	
	function get_outreach_activities($iduser) {
		$this->db->select('facioutreach_signup.id, facioutreach_signup.type, facioutreach_signup.date');
		$this->db->from('facioutreach_signup, facioutreach_members, `user`');
		$this->db->where('facioutreach_signup.id = facioutreach_members.id_outreach ');
		$this->db->where('facioutreach_members.faci = user.idprofile');
		$this->db->where('user.iduser', $iduser);
		$this->db->where('facioutreach_signup.date >= (SELECT CURDATE())');
		$this->db->where('facioutreach_signup.date < (SELECT DATE_ADD(CURDATE(), INTERVAL 7 DAY))');
		$this->db->order_by('date asc, type asc');
		$query = $this->db->get();
	    return $query->result();
	}
	
	function get_committee($iduser) {
		$this->db->select('tbl_committees.name');
		$this->db->from('tbl_committees,tbl_committee_membership,`user`');
		$this->db->where('tbl_committees.id = tbl_committee_membership.committee');
		$this->db->where('tbl_committee_membership.faci = user.idprofile');
		$this->db->where('user.iduser', $iduser);
		$query = $this->db->get();
	    return $query->result();
	}
	
	function get_committee_tasks($iduser) {
		$this->db->select('tbl_committees.name, committee_projects.project, committee_project_milestone.id, committee_project_milestone.milestone, committee_project_milestone.date_due');
		$this->db->from('tbl_committees, committee_project_milestone, committee_projects, `user`');
		$this->db->where('committee_project_milestone.project = committee_projects.id');
		$this->db->where('tbl_committees.id = committee_projects.committee');
		$this->db->where('committee_project_milestone.faci_accountable = user.idprofile');
		$this->db->where('user.iduser', $iduser);
		$this->db->where('committee_project_milestone.date_due >= (SELECT CURDATE())');
		$this->db->where('committee_project_milestone.date_due < (SELECT DATE_ADD(CURDATE(), INTERVAL 7 DAY))');
		$this->db->where('status = \'Pending\'');
		$this->db->order_by('date_due asc, committee_projects.project asc');
		$query = $this->db->get();
	    return $query->result();
	}
	
	function get_overdue_committee_tasks($iduser) {
		$this->db->select('tbl_committees.name, committee_projects.project, committee_project_milestone.id, committee_project_milestone.milestone, committee_project_milestone.date_due');
		$this->db->from('tbl_committees, committee_project_milestone, committee_projects, `user`');
		$this->db->where('committee_project_milestone.project = committee_projects.id');
		$this->db->where('tbl_committees.id = committee_projects.committee');
		$this->db->where('committee_project_milestone.faci_accountable = user.idprofile');
		$this->db->where('user.iduser', $iduser);
		$this->db->where('committee_project_milestone.date_due < (SELECT CURDATE())');
		$this->db->where('status = \'Pending\'');
		$this->db->order_by('date_due asc, committee_projects.project asc');
		$query = $this->db->get();
	    return $query->result();
	}
	
	function get_birthday_week() {
		$sql = 'SELECT CONCAT(nickname,\' \',lastname) as name, CONCAT(YEAR(CURDATE()),\'-\',MONTH(birthday),\'-\',DAY(birthday)) as birthday FROM formdev.facilitators WHERE(((SELECT MONTH(birthday)) = (SELECT MONTH(DATE_ADD(CURDATE(), INTERVAL 0 DAY))) AND (SELECT DAY(birthday)) = (SELECT DAY(DATE_ADD(CURDATE(), INTERVAL 0 DAY))))) OR (((SELECT MONTH(birthday)) = (SELECT MONTH(DATE_ADD(CURDATE(), INTERVAL 1 DAY))) AND (SELECT DAY(birthday)) = (SELECT DAY(DATE_ADD(CURDATE(), INTERVAL 1 DAY))))) OR (((SELECT MONTH(birthday)) = (SELECT MONTH(DATE_ADD(CURDATE(), INTERVAL 2 DAY))) AND (SELECT DAY(birthday)) = (SELECT DAY(DATE_ADD(CURDATE(), INTERVAL 2 DAY))))) ORDER BY MONTH(birthday), DAY(birthday), YEAR(birthday);';
		$query = $this->db->query($sql);
	    return $query->result();
	}
	
	function get_events() {
		$this->db->select('*');
		$this->db->from('events');
		$this->db->where('(date > CURDATE() AND date < DATE_ADD(CURDATE(), INTERVAL 7 DAY))');
		$this->db->or_where('(date = CURDATE() AND (HOUR(time) >= HOUR(CURTIME())-1 OR all_day = 1))');
		$this->db->order_by('date asc, time asc');
		$query = $this->db->get();
	    return $query->result();
	}
}
?>