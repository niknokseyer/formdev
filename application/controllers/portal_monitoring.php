<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Portal_monitoring extends CI_Controller {
	private $controller_name = 'portal_monitoring';

		function __construct()
		{
		parent::__construct();
		
		$this->load->database(); 
		$this->load->model('user_model');
		$this->load->model('role_model');
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
	
	public function index()
	{
		redirect('portal_monitoring/dashboard','refresh');
	}
	
	public function dashboard()
	{
		$data = array();
		$data['controller'] = $this->controller_name;
		
		//check authorization here
		//pk_home_update
		if($user_id = $this->session->userdata('iduser')){
			$this->load->library('monitoring_lib');
			$data['userInfo'] = $this->monitoring_lib->get_user_role($user_id);
			$this->load->view('monitoring/monitoring_admin',$data);
		}
		else {
			redirect('portal_monitoring/login');
		}
	}
	
	public function forms($arg0)
	{
		$data = array();		
		//check authorization here
		//pk_home_update
		if($user_id = $this->session->userdata('iduser')){
			if($arg0 == "bs") {
				$this->load->library('monitoring_lib');
				$data['formtype'] = "bs";
				$data['post_f'] = $this->input->post('f');
				$data['post_r'] = $this->input->post('r');
				$data['bsgroups'] = $this->monitoring_lib->get_bs_groups();
				$data['bsg_faci'] = $this->monitoring_lib->getFacisAccordingToGroup();
				$this->load->view('monitoring/bs_form',$data);
			}
			else if($arg0 == "bs_submit") {
				$this->load->library('monitoring_lib');
				$ids = explode(';',$this->input->post('facis'));
				$count = count($ids);
				$reportID = $this->monitoring_lib->addGroupAttendanceEntry($this->input->post('date'), $this->input->post('bs_group'), $this->input->post('submittedby'), $this->input->post('remarks'));

				for($i=0; $i<$count; $i++)
				{
					$param = $this->input->post('bs_group').'_'.$ids[$i];
					$this->monitoring_lib->addFaciAttendanceEntryBS($reportID, $ids[$i], $this->input->post($param)); 
				}

				 $this->monitoring_lib->submitBSTransactionRecord($this->input->post('submittedby'), $this->input->post('bs_group'), "ABSR");
			}
			else if ($arg0 == "bs_update") {
				$this->load->library('monitoring_lib');
				$ids = explode(';',$this->input->post('facis'));
				$count = count($ids);
				$reportID = $this->monitoring_lib->updateGroupAttendanceEntry($this->input->post('id'),$this->input->post('date'), $this->input->post('bs_group'), $this->input->post('submittedby'), $this->input->post('remarks'));
				
				for($i=0; $i<$count; $i++)
				{
					$param = $this->input->post('bs_group').'_'.$ids[$i];
					$this->monitoring_lib->updateFaciAttendanceEntry($this->input->post('id'), $ids[$i], $this->input->post($param)); 
				}
				
				$this->monitoring_lib->submitBSTransactionRecord($this->input->post('submittedby'), $this->input->post('bs_group'), "EBSR");
			}
			else if ($arg0 == "class") {
				$this->load->library('monitoring_lib');
				$data['formtype'] = "class";
				$data['post_f'] = $this->input->post('f');
				$data['post_r'] = $this->input->post('r');
				$data['sections'] = $this->monitoring_lib->getClasses();
				$data['sec_faci'] = $this->monitoring_lib->getFacisAccordingToClass();
				$this->load->view('monitoring/class_form',$data);
			}
			else if ($arg0 == "class_submit") {
				$this->load->library('monitoring_lib');
				$ids = explode(';',$this->input->post('facis'));
				$count = count($ids);
				$reportID = $this->monitoring_lib->addClassAttendanceEntry($this->input->post('date'), $this->input->post('section'), $this->input->post('submittedby'),$this->input->post('remarks'));

				for($i=0; $i<$count; $i++)
				{
					$param = $this->input->post('section').'_'.$ids[$i];
					$this->monitoring_lib->addFaciAttendanceEntryClass($reportID, $ids[$i], $this->input->post($param)); 
				}

				$this->monitoring_lib->submitClassTransactionRecord($this->input->post('submittedby'), $this->input->post('section'), "ACAR");
			}
			else if ($arg0 == "class_update") {
				
			}
			else if ($arg0 == "outreach") {
				$this->load->library('monitoring_lib');
				$data['formtype'] = "outreach";
				$data['post_f'] = $this->input->post('f');
				$data['post_r'] = $this->input->post('r');
				$data['facisNotInBSL'] = $this->monitoring_lib->getFacisNotInBSL();
				$data['facilitators'] = $this->monitoring_lib->getCurrentFacilitators();
				$this->load->view('monitoring/outreach_form',$data);
			}
			else if ($arg0 == "outreach_submit") {
				$this->load->library('monitoring_lib');
				$ids = explode(';',$this->input->post('facis'));
				$count = count($ids);
				$reportID = $this->monitoring_lib->addClassAttendanceEntry($this->input->post('date'), $this->input->post('section'), $this->input->post('submittedby'),$this->input->post('remarks'));
			}
		}
		else {
			redirect('portal_monitoring/login');
		}
	}
	
	public function updates_tab()
	{
		$data = array();
		$this->load->library('monitoring_lib');
		$this->load->view('monitoring/admin/updates_tab',$data);
	}
	
	public function account_tab()
	{
		$data = array();
		$this->load->library('monitoring_lib');
		$this->load->view('monitoring/admin/account_tab',$data);
	}
	
	public function com_tab()
	{
		$data = array();
		$this->load->library('monitoring_lib');
		$this->load->view('monitoring/admin/com_tab',$data);
	}
	
	public function faci_tab()
	{
		$data = array();
		$this->load->library('monitoring_lib');
		$this->load->view('monitoring/admin/faci_tab',$data);
	}
	
	public function term_tab()
	{
		$data = array();
		$this->load->library('monitoring_lib');
		$this->load->view('monitoring/admin/term_tab',$data);
	}
	
	public function bs_tab()
	{
		$data = array();
		$this->load->library('monitoring_lib');
		$this->load->view('monitoring/admin/bs_tab',$data);
	}
	
	public function classes_tab()
	{
		$data = array();
		$this->load->library('monitoring_lib');
		$this->load->view('monitoring/admin/classes_tab',$data);
	}
	
	public function bsadd_tab()
	{
		$data = array();
		$this->load->library('monitoring_lib');
		$this->load->view('monitoring/admin/functions/bsadd_tab',$data);
	}
	
	public function login($login_attempt = 1)
	{
		if($user_id = $this->session->userdata('iduser')){
			redirect('Monitoring/dashboard');
		}
		else {
			$data['user'] = $this->input->post('user');
			$data['pass'] = $this->input->post('pass');
			$data['persistent'] = $this->input->post('persistent');
			$data['login_attempt'] = $login_attempt;
			$this->load->view('monitoring/login',$data);
		}
	}
	
}