<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	private $controller_name = 'dashboard';
	
	function __construct() {
	
		parent::__construct();
		$this->load->database(); 
		$this->load->model('faci_model');
		$this->load->model('user_model');
		$this->load->model('role_model');
		$this->load->model('batch_model');
	}
	
	function _remap($method)
{
  $param_offset = 2;

  // Default to index
  if ( ! method_exists($this, $method))
  {
    // We need one more param
    $param_offset = 1;
    $method = 'index';
  }

  // Since all we get is $method, load up everything else in the URI
  $params = array_slice($this->uri->rsegment_array(), $param_offset);

  // Call the determined method with all params
  call_user_func_array(array($this, $method), $params);
} 	
	
	public function index($function='')
	{

	$user = $this->session->all_userdata();

	$data['user'] = $user;

	
	$this->load->library('acl',array('user_id'=>$this->session->userdata('iduser')));
        if($this->acl->has_permission('pk_accounts')){
        $pk_accounts = true;
        }
		
		if(isset($pk_accounts) && $pk_accounts == true)
		{
		
		$infos['pk_accounts'] = $pk_accounts;
	
		$data['controller'] = $this->controller_name;
		$data['function'] = $function;
		
		//Get Batch List
		$batches = $this->faci_model->get_all_batches();
		foreach($batches as $b){
        	$batch[$b->batchnumber] = "$b->batch_label Batch $b->batchnumber ($b->startyear-$b->endyear)";
        }
		
		$batch[0] = "$b->batch_label Batch 1 ($b->startyear-$b->endyear)";
		
        $infos['batch'] = $batch;
		
		
		//Get Role List
		 $roles = $this->acl->get_all_roles();
		foreach($roles as $r){
			$role[$r->idrole] = "$r->role_name";
        }
        $infos['role'] = $role;
		
		
		//Get User List
		$user = array();
		$user_array = $this->user_model->get_all_users();
		foreach($user_array as $u){
			$users[$u->iduser] = "$u->lastname, $u->firstname";
        }
        $infos['user_list'] = $users;
		
		$data['infos'] = $infos;		
		
		load_template_view($this,'dashboard_page',$data);
		}
		else
		{
		    $data = array();
            $data['controller'] = $this->controller_name;
			$data['message'] = "You are not authorized to view your dashboard.";
            load_template_view($this,'error_page',$data);
		}
	
	}
	
	public function backup()
	{

		$this->load->library('acl',array('user_id'=>$this->session->userdata('iduser')));
        if($this->acl->has_permission('pk_accounts')){
        $pk_accounts = true;
        }
		
	if(isset($pk_accounts) && $pk_accounts == true)
	{
	
	$prefs = array(
                'format'      => 'zip',             // gzip, zip, txt
                'add_drop'    => TRUE,              // Whether to add DROP TABLE statements to backup file
                'add_insert'  => TRUE,              // Whether to add INSERT data to backup file
                'newline'     => "\n"               // Newline character used in backup file
              );

	
	// Load the DB utility class
	$this->load->dbutil();

	// Backup your entire database and assign it to a variable
	$backup =& $this->dbutil->backup($prefs); 

	// Load the file helper and write the file to your server
	$this->load->helper('file');
	write_file('/sql/formdev.zip', $backup); 

	// Load the download helper and send the file to your desktop
	$this->load->helper('download');
	force_download('formdev.zip', $backup);
	
	}
	else
	{
		    $data = array();
            $data['controller'] = $this->controller_name;
			$data['message'] = "You are not allowed to download the database.";
            load_template_view($this,'error_page',$data);
	}
	
	}
	

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */