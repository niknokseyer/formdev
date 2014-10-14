<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class acl {
	var $perms = array();
	var $user_id = array();
	var $user_roles = array();
	var $ci;

	/*
		config array expects the following keys:
		'user_id' - stores the id of the user
	*/
	function __construct($config=array()){
		$this->ci = &get_instance(); //get the instance of the caller

		$this->user_id = floatval($config['user_id']); //gets the float value of a variable
		$this->user_roles = $this->get_user_roles();
		$this->build_acl();
	}

	function build_acl(){
		//get the permissions for the user's role if any
		if(count($this->user_roles) > 0){ //count - counts all elements in an array
			$this->perms = array_merge($this->perms, $this->get_role_perms($this->user_roles));
		}
		//get the permissions assigned to the individual
		$this->perms = array_merge($this->perms, $this->get_user_perms($this->user_id));
	}

	function get_perm_key_from_id($perm_id){
		$this->ci->db->select('perm_key');
		$this->ci->db->where('idperm',floatval($perm_id));
		$q = $this->ci->db->get('acl_perms',1);
		$data = $q->result();
		return $data[0]->perm_key;
	}

	function get_perm_name_from_id($perm_id) {
		$this->ci->db->select('perm_name');
		$this->ci->db->where('idperm',floatval($perm_id));
		$q = $this->ci->db->get('acl_perms',1);
		$data = $q->result();
		return $data[0]->perm_name;
	}

	function get_role_name_from_id($role_id){
		$this->ci->db->select('role_name');
		$this->ci->db->where('idrole',floatval($role_id));
		$q = $this->ci->db->get('acl_roles',1);
		$data = $q->result();
		return $data[0]->role_name;	
	}

	function get_user_roles(){
		$this->ci->db->where(array('iduser'=>floatval($this->user_id)));
		$this->ci->db->order_by('date_added','asc');
		$q = $this->ci->db->get('acl_user_roles');
		$data = $q->result();

		$resp = array();
		foreach($data as $row){
			$resp[] = $row->idrole;
		}
		return $resp;
	}

	function get_all_roles($format='ids'){
		$format = strtolower($format);
		$this->ci->db->order_by('role_name','asc');
		$q = $this->ci->db->get('acl_roles');
		$data = $q->result();

		$resp = array();
		foreach( $data as $row ){
			if ($format == 'full'){
				$resp[] = array("idrole"=>$row->idrole,"role_name"=>$row->role_name);
			} 
			else {
				$resp[] = $row->idrole;
			}
		}
		//return $resp by default
		return $data;
	}

	function get_all_perms($format='ids') {
		$format = strtolower($format);
		$this->ci->db->order_by('idperm','asc');
		$sql = $this->ci->db->get('acl_perms');
		$data = $sql->result();

		$resp = array();
		foreach( $data as $row ){
			if ($format == 'full'){
				$resp[$row->permKey] = array('id'=>$row->idperm,'name'=>$row->perm_name, 'key' => $row->perm_key);
			} 
			else {
				$resp[] = $row->idperm;
			}
		}
		//return $resp;
		return $data;
	}

	//get the permissions for the given role
	function get_role_perms($role) {
		if (is_array($role)){
			$this->ci->db->where_in('idrole',$role);
		} 
		else {
			$this->ci->db->where(array('idrole'=>floatval($role)));
		}

		$this->ci->db->order_by('id','asc');
		$sql = $this->ci->db->get('acl_roles_perms'); //$this->db->select($roleSQL);
		$data = $sql->result();
		
		$perms = array();
		foreach($data as $row)
		{
			//pK is perm key, hp = has permission
			$pK = strtolower($this->get_perm_key_from_id($row->idperm));
			if ($pK == '') { continue; }
			if ($row->value === '1') {
				$hP = true;
			} 
			else {
				$hP = false;
			}
			$perms[$pK] = array('perm'=>$pK,'inheritted'=>true,'value'=>$hP,'name'=> $this->get_perm_name_from_id($row->idperm),'id' => $row->idperm);
		}
		return $perms;
	}

	function get_user_perms($userID) {
		//$strSQL = "SELECT * FROM `".DB_PREFIX."user_perms` WHERE `userID` = " . floatval($userID) . " ORDER BY `addDate` ASC";

		$this->ci->db->where('iduser',floatval($userID));
		$this->ci->db->order_by('date_added','asc');
		$sql = $this->ci->db->get('acl_user_perms');
		$data = $sql->result();

		$perms = array();
		foreach( $data as $row )
		{
			$pK = strtolower($this->get_perm_key_from_id($row->idperm));
			if ($pK == '') { continue; }
			if ($row->value == '1') {
				$hP = true;
			} else {
				$hP = false;
			}
			$perms[$pK] = array('perm'=>$pK,'inheritted'=>false,'value'=>$hP,'name'=> $this->get_perm_name_from_id($row->idperm),'id' => $row->idperm);
		}
		return $perms;
	}

	function has_role($roleID) {
		foreach($this->user_roles as $k => $v)
		{
			if (floatval($v) === floatval($roleID))
			{
				return true;
			}
		}
		return false;
	}

	function has_permission($permKey) {
		$permKey = strtolower($permKey);
		if (array_key_exists($permKey,$this->perms))
		{
			if ($this->perms[$permKey]['value'] === '1' || $this->perms[$permKey]['value'] === true)
			{
				return true;
			} else {
				return false;
			}
		} else {
			return false;
		}
	}

}