<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

	public function get_user($username)
	{
		$this->db->where('username', $username);
		$query = $this->db->get('user');
		
		return $query->row_array();
	}
	
	public function get_iduser_from_username($username)
	{
		$this->db->select('iduser');
        $this->db->from('user');
		$this->db->where('username', $username);
		$query = $this->db->get();
		
		return $query->row_array();
	}
	
	public function get_iduser_from_idprofile($idprofile)
	{
		$this->db->select('iduser');
        $this->db->from('user');
		$this->db->where('idprofile', $idprofile);
		$query = $this->db->get();
		
		return $query->result();
	}
	
		public function fb_connect($facebook)
	{
		$this->db->where('facebook', $facebook);
		$query = $this->db->get('user');
		
		return $query->row_array();
	}
	
	public function add_logincount($logincount,$id)
	{
		$this->db->set('logincount',$logincount+1);
		$this->db->where('iduser', $id);
		$this->db->update('user');
		
	}

	public function get_facebook($iduser)
	{
		$this->db->where('iduser', $iduser);
		$query = $this->db->get('user');
		
		return $query->row()->facebook;	
	}	
	
	public function update_facebook($facebook,$id)
	{
		$this->db->set('facebook',$facebook);
		$this->db->where('iduser', $id);
		$this->db->update('user');
	}
	
	public function check_facebook($facebook,$id)
	{
		$this->db->like('facebook', $facebook, 'none'); 
		$query = $this->db->get('user');
		
		if($query->num_rows() >= 1)
		{
		return true;
		}
		else
		{
		return false;
		}
	}
	
	public function update_email($email,$id)
	{
		$this->db->set('email',$email);
		$this->db->where('iduser', $id);
		$this->db->update('user');
		
	}
	
	public function update_password($password,$id)
	{
		$this->db->set('password',md5($password));
		$this->db->where('iduser', $id);
		$this->db->update('user');
		
	}
	
		public function get_logincount($iduser)
	{
		$this->db->where('iduser', $iduser);
		$query = $this->db->get('user');
		
		return $query->row()->logincount;	
	}
	
	public function get_email($iduser)
	{
		$this->db->where('iduser', $iduser);
		$query = $this->db->get('user');
		
		return $query->row()->email;	
	}
	
	public function get_password($iduser)
	{
		$this->db->where('iduser', $iduser);
		$query = $this->db->get('user');
		
		return $query->row()->password;
		
		
	}
	
	    function get_all_users() {		
		$this->db->select('*');
        $this->db->from('user');
		$this->db->join('facilitators', 'facilitators.id = user.idprofile');
		$this->db->where('batch != -1');
		$this->db->order_by("lastname", "asc"); 
    	$query = $this->db->get();

        return $query->result();
    }
	
	function get_all_current_facis() {		
		$this->db->select('*');
        $this->db->from('user, facilitators');
		$this->db->where('facilitators.id = user.idprofile');
		$this->db->where('facilitators.current_faci = \'yes\'');
		$this->db->where('batch != -1');
		$this->db->order_by("lastname", "asc"); 
    	$query = $this->db->get();

        return $query->result();
    }
	
	public function get_info($iduser)
	{
		$this->db->select('*');
		$this->db->where(array('iduser'=>$iduser));
		$this->db->from('user');
		$this->db->join('facilitators', 'facilitators.id = user.idprofile');
		$q = $this->db->get();
		
		if($q->num_rows() == 1){
		$result = $q->result();
		return $result[0];
		}
	
	}

	public function get_user_from_id($id){
		$q = $this->db->get_where('user',array('iduser'=>$id));
		$result = $q->result();
		return $result[0];
	}

	public function updateprofile($data){
	$value = array(
               'firstname' => $data['firstname'],
               'lastname' => $data['lastname'],
               'nickname' => $data['nickname'],
			   'birthday' => $data['birthday'],
               'course' => $data['course'],
               'hometown' => $data['hometown'],
			   'highschool' => $data['highschool'],
               'hobbies_interests' => $data['hobbies_interests'],
               'motto' => $data['motto'],
			   'favorite_verse' => $data['favorite_verse'],
               'random_stuff' => $data['random_stuff'],
               'formdev_is' => $data['formdev_is'],
			   'contact' => $data['contact'],
			   'expected_term_graduation' => $data['expected_term_graduation'],
			   'batch' => $data['batch'],
			   'term' => $data['term'],
			   'current_faci' => $data['current_faci']
            );

$this->db->where('id', $data['id']);
$this->db->update('facilitators', $value); 
	}
	
	public function updateaccount($data){
	$value = array(
               'email' => $data['email'],
               'password' => $data['password']
            );

$this->db->where('iduser', $data['id']);
$this->db->update('user', $value); 
	}
	
	public function get_username($iduser)
	{
		$this->db->where('iduser', $iduser);
		$query = $this->db->get('user');
		
		return $query->row()->username;	
	
	}
	
	public function username_exists($username)
	{
		$this->db->where('username', $username);
		$query = $this->db->get('user');
		
		if($query->num_rows() >= 1)
		return true;
		else
		return false;
	}
	
	public function validate($login)
	{
		$this->db->where('username', $login['username']);
		$this->db->where('password', md5($login['password']));
		$query = $this->db->get('user');
		
		if($query->num_rows() == 1)
		{	
			echo "Logging you in.. please wait.";
			
			foreach($query->result() as $r)
			{
			
			$logincount = $r->logincount;
			$iduser = $r->iduser;
			
			}
			
			$this->add_logincount($logincount,$iduser);
			
			return true;
		}
	}
	
	public function create_user($newuser)
	{
		$insert = $this->db->insert('user', $newuser);
		
		return $this->db->insert_id();
	}
}
?>