<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class monitoring_lib {
	var $perms = array();
	var $user_id = array();
	var $user_roles = array();
	var $ci;

	/*
		config array expects the following keys:
		'user_id' - stores the id of the user
	*/
	function __construct(){
		$this->ci = &get_instance(); //get the instance of the caller
	}

	function get_user_role($user_id){
		$userid = floatval($user_id);
		$this->ci->db->from('tbl_users');
		$this->ci->db->where('iduser', $userid);
		$this->ci->db->join('user', 'user.idprofile=tbl_users.user');
		$this->ci->db->join('tbl_roles', 'tbl_users.role=tbl_roles.role');
		
		$q = $this->ci->db->get();
		$data = $q->result();

		return $data[0];
	}
	
	function get_completed_transactions(){
		$this->ci->db->from('tbl_transactions');
		$this->ci->db->join('facilitators', 'requested_by=id');
		$this->ci->db->join('tbl_transaction_types', 'tbl_transactions.transaction_type=tbl_transaction_types.transaction_type');
		$this->ci->db->select('nickname, tbl_transaction_types.description, report_of_group, status, date_processed, date_requested');
		
		$q = $this->ci->db->get();
		$data = $q->result();
		
		return $data;
	}
	
	function getGroups() {
		$q = $this->ci->db->query("SELECT * FROM tbl_bs_group ORDER BY id ASC");

		$data = $q->result();
		
		return $data;
	}
	
	function getClasses() {
		$q = $this->ci->db->query("SELECT * FROM tbl_class ORDER BY id ASC");

		$data = $q->result();
		
		return $data;
	}
	
	function getGroup($groupID) {
		$q = $this->ci->db->query("SELECT `name` FROM `tbl_bs_group` WHERE `id`=".$groupID);

		$data = $q->result();
		
		return $data;
	}
	
	function getClass($classID) {
		$q = $this->ci->db->query("SELECT `section` FROM `tbl_class` WHERE `id`=".$classID);

		$data = $q->result();
		
		return $data;
	}
	
	function get_bs_groups(){
		$this->ci->db->from('tbl_bs_group');
		$this->ci->db->order_by('id ASC');
		
		$q = $this->ci->db->get();
		$data = $q->result();
		
		return $data;
	}
	
	function getFacisAccordingToGroup(){
		$this->ci->db->select('facilitators.id, facilitators.nickname, tbl_bs_faci.bs_group');
		$this->ci->db->from('facilitators');
		$this->ci->db->join('tbl_bs_faci', 'tbl_bs_faci.faci=facilitators.id');
		$this->ci->db->order_by('tbl_bs_faci.bs_group ASC, tbl_bs_faci.id ASC');
		
		$q = $this->ci->db->get();
		$data = $q->result();
		
		return $data;
	}
	
	function getFacisAccordingToClass() {
		$q = $this->ci->db->query("SELECT f.id, f.nickname, cf.class FROM facilitators f INNER JOIN tbl_class_faci cf ON cf.faci=f.id ORDER BY cf.class ASC, cf.id ASC");

		$data = $q->result();
		
		return $data;
	}
	
	function getGroupsOfFaci($user){
		$this->ci->db->select('tbl_bs_group.id, `name`');
		$this->ci->db->from('tbl_bs_group');
		$this->ci->db->join('tbl_bs_faci', 'bs_group=tbl_bs_group.id');
		$this->ci->db->where('faci', $user);
		$this->ci->db->order_by('`name` ASC');
		
		$q = $this->ci->db->get();
		$data = $q->result();
		
		return $data;
	}
	
	function getAttendancePointsInGroup($group, $faci){
		$q = $this->ci->db->query("SELECT AVG(`attendance`) as `points` FROM tbl_bs_reports INNER JOIN tbl_bs_attendance ON report=id WHERE bs_group=".$group." AND faci=".$faci." AND attendance!=-1.0");

		$data = $q->result();
		
		return $data;
	}
	
	function getNumberPresentInGroup($group, $faci) {
		$q = $this->ci->db->query("SELECT COUNT(`attendance`) as `present` FROM tbl_bs_reports INNER JOIN tbl_bs_attendance ON report=id WHERE bs_group=".$group." AND faci=".$faci." AND attendance=1.0");
		
		$data = $q->result();
		
		return $data;
	}
	
	function getNumberAbsentInGroup($group, $faci) {
		$q = $this->ci->db->query("SELECT COUNT(`attendance`) as `absent` FROM tbl_bs_reports INNER JOIN tbl_bs_attendance ON report=id WHERE bs_group=".$group." AND faci=".$faci." AND attendance=0.0");

		$data = $q->result();
		
		return $data;
	}
	
	function getNumberExcusedInGroup($group, $faci) {
		$q = $this->ci->db->query("SELECT COUNT(`attendance`) as `excused` FROM tbl_bs_reports INNER JOIN tbl_bs_attendance ON report=id WHERE bs_group=".$group." AND faci=".$faci." AND attendance=-1.0");

		$data = $q->result();
		
		return $data;
	}
	
	function getNumberLateInGroup($group, $faci) {
		$q = $this->ci->db->query("SELECT COUNT(`attendance`) as `late` FROM tbl_bs_reports INNER JOIN tbl_bs_attendance ON report=id WHERE bs_group=".$group." AND faci=".$faci." AND attendance=0.5");

		$data = $q->result();
		
		return $data;
	}
	
	function getNumberGroupMeetings($group) {
		$q = $this->ci->db->query("SELECT COUNT(`id`) as `meetings` FROM tbl_bs_reports WHERE bs_group=".$group);
		
		$data = $q->result();
		
		return $data;
	}
	
	function getClassesOfFaci($user) {
		$q = $this->ci->db->query("SELECT tbl_class.id, `section` FROM tbl_class INNER JOIN tbl_class_faci ON class=tbl_class.id WHERE faci=".$user." ORDER BY `section` ASC");
		
		$data = $q->result();
		
		return $data;
	}
	
	function getAttendancePointsInClass($group, $faci) {
		$q = $this->ci->db->query("SELECT AVG(`attendance`) as `points` FROM tbl_class_reports INNER JOIN tbl_class_attendance ON report=id WHERE section=".$group." AND faci=".$faci." AND attendance!=-1.0");

		$data = $q->result();
		
		return $data;
	}
	
	function getNumberClassMeetings($group) {
		$q = $this->ci->db->query("SELECT COUNT(`id`) as `meetings` FROM tbl_class_reports WHERE section=".$group);
		

		$data = $q->result();
		
		return $data;
	}
	
	function getNumberPresentInClass($group, $faci) {
		$q = $this->ci->db->query("SELECT COUNT(`attendance`) as `present` FROM tbl_class_reports INNER JOIN tbl_class_attendance ON report=id WHERE section=".$group." AND faci=".$faci." AND attendance=1.0");

		$data = $q->result();
		
		return $data;
	}
	
	function getNumberLateInClass($group, $faci) {
		$q = $this->ci->db->query("SELECT COUNT(`attendance`) as `late` FROM tbl_class_reports INNER JOIN tbl_class_attendance ON report=id WHERE section=".$group." AND faci=".$faci." AND attendance=0.5");

		$data = $q->result();
		
		return $data;
	}
	
	function getNumberAbsentInClass($group, $faci) {
		$q = $this->ci->db->query("SELECT COUNT(`attendance`) as `absent` FROM tbl_class_reports INNER JOIN tbl_class_attendance ON report=id WHERE section=".$group." AND faci=".$faci." AND attendance=0.0");

		$data = $q->result();
		
		return $data;
	}
	
	function getNumberExcusedInClass($group, $faci) {
		$q = $this->ci->db->query("SELECT COUNT(`attendance`) as `excused` FROM tbl_class_reports INNER JOIN tbl_class_attendance ON report=id WHERE section=".$group." AND faci=".$faci." AND attendance=-1.0");

		$data = $q->result();
		
		return $data;
	}
	
	function getRecentSubmissionsFromBS($faci) {
		$q = $this->ci->db->query("SELECT DISTINCT(t.id), `timestamp`, `date`, `tbg`.`name`, `tf`.`nickname` as `submitted_by` FROM tbl_bs_reports t INNER JOIN tbl_bs_faci tbf ON t.bs_group=tbf.bs_group INNER JOIN tbl_bs_group tbg ON tbg.id=tbf.bs_group INNER JOIN facilitators tf ON t.submitted_by=tf.id WHERE tbf.faci=" . $faci . " OR t.submitted_by=" . $faci . " ORDER BY `timestamp` DESC LIMIT 0,5;");

		$data = $q->result();
		
		return $data;
	}
	
	function getRecentSubmissionsFromSection($faci) {
		$q = $this->ci->db->query("SELECT DISTINCT(t.id), `timestamp`, `date`, `tc`.`section` as `name`, `tf`.`nickname` as `submitted_by` FROM tbl_class_reports t INNER JOIN tbl_class_faci tcf ON tcf.class=t.section INNER JOIN tbl_class tc ON tc.id=t.section INNER JOIN facilitators tf ON t.submitted_by=tf.id WHERE tcf.faci=" . $faci . " OR t.submitted_by=" . $faci . " ORDER BY `timestamp` DESC LIMIT 0,5;");

		$data = $q->result();
		
		return $data;
	}
	
	function getRecentOutreachSubmissions() {
		$q = $this->ci->db->query("SELECT DISTINCT(t.id), `timestamp`, `date`, `activity` as `name`, `tf`.`nickname` as `submitted_by` FROM tbl_outreach_reports t INNER JOIN facilitators tf ON `t`.`submitted_by`=`tf`.`id` ORDER BY `timestamp` DESC LIMIT 0,5;");

		$data = $q->result();
		
		return $data;
	}
	
	function getRecentSubmissionsByFaciBS($faci) {
		$q = $this->ci->db->query("SELECT DISTINCT(t.id), `timestamp`, `date`, `tbg`.`name`, `tf`.`nickname` as `submitted_by` FROM tbl_bs_reports t INNER JOIN tbl_bs_faci tbf ON t.bs_group=tbf.bs_group INNER JOIN tbl_bs_group tbg ON tbg.id=tbf.bs_group INNER JOIN facilitators tf ON t.submitted_by=tf.id WHERE t.submitted_by=" . $faci . " ORDER BY `timestamp` DESC LIMIT 0,5;");

		$data = $q->result();
		
		return $data;
	}
	
	function getRecentSubmissionsByFaciClass($faci) {
		$q = $this->ci->db->query("SELECT DISTINCT(t.id), `timestamp`, `date`, `tc`.`section` as `name`, `tf`.`nickname` as `submitted_by` FROM tbl_class_reports t INNER JOIN tbl_class_faci tcf ON tcf.class=t.section INNER JOIN tbl_class tc ON tc.id=t.section INNER JOIN facilitators tf ON t.submitted_by=tf.id WHERE t.submitted_by=" . $faci . " ORDER BY `timestamp` DESC LIMIT 0,5;");

		$data = $q->result();
		
		return $data;
	}
	
	function getRecentSubmissionsByFaciReports($faci) {
		$q = $this->ci->db->query("SELECT DISTINCT(t.id), `timestamp`, `date`, `name`, `tf`.`nickname` as `submitted_by` FROM tbl_monitoring_reports t INNER JOIN tbl_committees tc ON `committee`=`tc`.`id` INNER JOIN facilitators tf ON `submitted_by`=`tf`.`id` WHERE t.submitted_by=" . $faci . " ORDER BY `timestamp` DESC LIMIT 0,5;");

		$data = $q->result();
		
		return $data;
	}
	
	function getCurrentFacilitators() {
		$q = $this->ci->db->query("SELECT * FROM facilitators WHERE current_faci='yes' AND batch!=-1 ORDER BY batch ASC, term ASC, nickname ASC");

		$data = $q->result();
		
		return $data;
	}
	
	function getFacisNotInBSL() {
		$q = $this->ci->db->query("SELECT DISTINCT tbf.faci, nickname, lastname FROM tbl_bs_faci tbf INNER JOIN facilitators tf ON tf.id=tbf.faci WHERE current_faci='yes' GROUP BY tbf.faci HAVING COUNT(tbf.faci)=1 ORDER BY batch ASC, term ASC, nickname ASC;");

		$data = $q->result();
		
		return $data;
	}
	
	function getBSReport($id) {
		$q = $this->ci->db->query("SELECT `report`, `date`, `bs_group`, `submitted_by`, `remarks`, `faci`, `attendance` FROM tbl_bs_reports tbr INNER JOIN tbl_bs_attendance ON report=id WHERE id=" . $id . ";");

		$data = $q->result();
		
		return $data;
	}
	
	function getCAReport($id) {
		$q = $this->ci->db->query("SELECT `report`, `date`, `section`, `submitted_by`, `remarks`, `faci`, `attendance` FROM tbl_class_reports tbr INNER JOIN tbl_class_attendance ON report=id WHERE id=" . $id . ";");

		$data = $q->result();
		
		return $data;
	}
	
	function addGroupAttendanceEntry($date, $groupID, $subID, $remarks) {
		$data = array(
			'date' => $date,
			'bs_group' => $groupID,
			'submitted_by' => $subID,
			'remarks' => $remarks
		);
		
		$this->ci->db->insert('tbl_bs_reports', $data);
		
		return $this->ci->db->insert_id();
	}
	
	function addClassAttendanceEntry($date, $sectionID, $subID, $remarks) {
		$data = array(
			'date' => $date,
			'section' => $sectionID,
			'submitted_by' => $subID,
			'remarks' => $remarks
		);
		
		$this->ci->db->insert('tbl_class_reports', $data);
		
		return $this->ci->db->insert_id();
	}
	function addFaciAttendanceEntryBS($id, $faci, $attendance) {
		$data = array(
			'report' => $id,
			'faci' => $faci,
			'attendance' => $attendance
		);
		
		$this->ci->db->insert('tbl_bs_attendance', $data);
	}
	
	function addFaciAttendanceEntryClass($id, $faci, $attendance) {
	$data = array(
			'report' => $id,
			'faci' => $faci,
			'attendance' => $attendance
		);
		
		$this->ci->db->insert('tbl_class_attendance', $data);
	}
	
	function submitBSTransactionRecord($userID, $groupID, $transType = "ABSR") {
		$result = $this->getGroup($groupID);
		$group = $result[0]->name;
		
		$data = array(
			'transaction_type' => $transType,
			'date_processed' => date('Y-m-d H:i:s'),
			'report_of_group' => $group,
			'requested_by' => $userID,
			'status' => 'Completed'
		);
		
		$this->ci->db->insert('tbl_transactions', $data);
	}
	
	function submitClassTransactionRecord($userID, $classID, $transType = "ACAR") {
		$result = $this->getClass($classID);
		$class = $result[0]->section;
		
		$data = array(
			'transaction_type' => $transType,
			'date_processed' => date('Y-m-d H:i:s'),
			'report_of_group' => $class,
			'requested_by' => $userID,
			'status' => 'Completed'
		);
		
		$this->ci->db->insert('tbl_transactions', $data);
	}
}