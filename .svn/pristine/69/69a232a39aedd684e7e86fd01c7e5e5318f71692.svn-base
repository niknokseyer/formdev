<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Familytree_model extends CI_Model {	
	
	public function get_faci_info($iduser) {
        $this->db->select('facilitators.*, user.iduser, user.username, user.facebook');
        $this->db->from('facilitators','user');
		$this->db->where('iduser',$iduser);
		$this->db->join('user', 'facilitators.id = user.idprofile');
    	$query = $this->db->get();
    	return $query->result();
    }
	
	public function get_parents($faci)
	{
		$this->db->select('iduser');
		$this->db->where(array('idfacichild'=>$faci));
		$this->db->from('facichildren');
		$q = $this->db->get();
		$result = $q->result_array();
			
		if(count($q->result_array()) > 0)
			return $result;
		else
			return null;
	
	}
	
	public function get_siblings($idparent,$iduser)
	{
		$this->db->select('idfacichild');
		$this->db->where(array('iduser'=>$idparent));
		$this->db->where('idfacichild != '.$iduser);
		$this->db->from('facichildren');
		$q = $this->db->get();
		$result = $q->result_array();
		if(count($q->result_array()) > 0)
			return $result;
		else
			return null;
	}
	
	public function get_children($iduser)
	{
		$this->db->select('idfacichild');
		$this->db->where(array('iduser'=>$iduser));
		$this->db->from('facichildren');
		$q = $this->db->get();
		$result = $q->result();
		$result = $q->result_array();
		if(count($q->result_array()) > 0)
			return $result;
		else
			return null;
	
	}
	
	public function get_parent_candidates($batch,$term)
	{
		$sql = 'SELECT * FROM formdev.user, facilitators WHERE facilitators.id = user.idprofile AND (batch < '.$batch.' OR (batch = '.$batch.' AND term < '.$term.')) AND batch > 0 ORDER BY lastname asc, firstname asc;';
		$query = $this->db->query($sql);
	    return $query->result();
	}
	
	public function get_child_candidates($batch,$term)
	{
		$sql = 'SELECT * FROM formdev.user, facilitators WHERE facilitators.id = user.idprofile AND (batch > '.$batch.' OR (batch = '.$batch.' AND term > '.$term.')) AND batch > 0 ORDER BY lastname asc, firstname asc;';
		$query = $this->db->query($sql);
	    return $query->result();
	}
	
	public function add_member($data)
	{
		$this->db->insert('facichildren', $data);
	}
	
	public function isValid($parent,$child)
	{
		$sql = 'SELECT IF((SELECT COUNT(*) FROM facichildren WHERE idfacichild = '.$child.' AND iduser = '.$parent.') = 1 ,true,false) as isValid;';
		$query = $this->db->query($sql);
	    $q = $query->result();
		if($q[0]->{'isValid'})
			return true;
		else
			return false;
	}
	
	public function delete_member($parent,$child)
	{
		$query = $this->db->delete('facichildren', array('idfacichild'=>$child,'iduser'=>$parent));
	}
}
?>