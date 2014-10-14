<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Role_model extends CI_Model {

		public function insert_user_role($userrole)
	{
		$insert = $this->db->insert('acl_user_roles', $userrole);
	}
	
		public function get_user_role($iduser)
	{
		$this->db->where('iduser', $iduser);
		$query = $this->db->get('acl_user_roles');
		return $query->row()->idrole;
	}
	
	public function update_user_role($userrole)
	{
	$this->db->where('iduser', $userrole['iduser']);
	$this->db->update('acl_user_roles', $userrole); 
	}

	public function perm_to_role($permrole)
	{
		$this->db->where('idrole', $permrole['idrole']);
		$this->db->where('idperm', $permrole['idperm']);
		$query = $this->db->get('acl_roles_perms');
		
		if($query->num_rows() == 1)
		{
			$this->update_perm_to_role($permrole);
		}
		else
		{
			$this->insert_perm_to_role($permrole);
		}
	}
	
	public function update_perm_to_role($permrole)
	{
	
	$this->db->where('idrole', $permrole['idrole']);
	$this->db->where('idperm', $permrole['idperm']);
	$this->db->update('acl_roles_perms', $permrole); 
	
	}
	
	public function insert_perm_to_role($permrole)
	{
		$this->db->insert('acl_roles_perms', $permrole);
	}
	
}