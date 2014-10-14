<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class faci_outreach extends CI_Controller {
	private $cont_name = 'faci_outreach';
	
	
		function __construct()
	{
	parent::__construct();
	
	$this->load->database(); 
	$this->load->model('faci_model');
	$this->load->model('facioutreach_model');
	$this->load->model('committee_model');
	$this->load->model('role_model');
	$this->load->model('user_model');
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
	
	
	public function index($id='')	 {
		$userid = $this->session->userdata('iduser');
		if($userid != '')
		{
			if($id=='')
			{
				$role = $this->role_model->get_user_role($userid);
				if($role == 6 || $role == 2)
				{
					$outreach_acts=$this->facioutreach_model->get_all_signup();
					$committees=$this->committee_model->get_all_committees();
					$yearterm = $this->committee_model->get_yearterm();
					
					$data = array();
					$data['admin'] = true;
					$data['outreach_acts'] = $outreach_acts;
					$data['yearterm'] = $yearterm;
					$data['committees'] = $committees;
					$data['controller'] = $this->cont_name;
					load_template_view($this,'facioutreach_page',$data);
				}
				else
				{
					$outreach_acts=$this->facioutreach_model->get_all_live_signup();
					$committees=$this->committee_model->get_all_committees();
					$yearterm = $this->committee_model->get_yearterm();
					
					$data = array();
					$data['admin'] = false;
					$data['outreach_acts'] = $outreach_acts;
					$data['yearterm'] = $yearterm;
					$data['committees'] = $committees;
					$data['controller'] = $this->cont_name;
					load_template_view($this,'facioutreach_page',$data);
				}
			}
			else
			{
				$ans = $this->facioutreach_model->check_live($id);
				if(isset($ans[0]->{'live'}))
				{
					$data = array();
					$role = $this->role_model->get_user_role($userid);
					if($role == 6 || $role == 2)
						$data['admin'] = true;
					else
						$data['admin'] = false;
					
					$committees=$this->committee_model->get_all_committees();
					$yearterm = $this->committee_model->get_yearterm();					
					$data['yearterm'] = $yearterm;
					$data['committees'] = $committees;
					
					if($ans[0]->{'live'})
					{
						if($signup_info=$this->facioutreach_model->get_signup($id))
						{
							$facis = $this->facioutreach_model->get_facis_per_signup($id);
							$num_facis = $this->facioutreach_model->get_number_facis($id);
							$id_user = $this->facioutreach_model->get_id_user($id,$userid);
							$bSignedUp = false;
							if(isset($id_user[0]->{'id'}))
							{
								$data['id_user'] = $id_user[0]->{'id'};
								$bSignedUp = true;
							}
							$data['bSignedUp'] = $bSignedUp;
							$data['num_facis']= $num_facis[0]->{'COUNT(*)'};
							$data['signup_info'] = $signup_info[0];
							$data['facis_in_signup'] = $facis;
							$data['controller'] = $this->cont_name;
							load_template_view($this,'facioutreach_view',$data);
						}
					}
					else
					{
						if($data['admin'])
						{
							if($signup_info=$this->facioutreach_model->get_signup($id))
							{
								$facis = $this->facioutreach_model->get_facis_per_signup($id);
								$num_facis = $this->facioutreach_model->get_number_facis($id);
								
								$data['num_facis']= $num_facis[0]->{'COUNT(*)'};
								$data['signup_info'] = $signup_info[0];
								$data['facis_in_signup'] = $facis;
								$data['controller'] = $this->cont_name;
								load_template_view($this,'facioutreach_view',$data);
							}
						}
						else 
							redirect('/faci_outreach/','refresh');
					}
				}
				else
					redirect('/committees/outreach_committee','refresh');
			}
		}
		else
			redirect('/committees/outreach_committee','refresh');
	}	

	public function faci($function='',$id='',$faci='') {
		$userid = $this->session->userdata('iduser');
		$temp_id = $this->facioutreach_model->get_faci_by_id($faci);
		if(isset($temp_id[0]->{'faci'}))
		{
			$t_id = $this->user_model->get_iduser_from_idprofile($temp_id[0]->{'faci'});
			if(isset($t_id[0]->{'iduser'}))
				$userid_1 = $t_id[0]->{'iduser'};
		}
		else
			$userid_1 = $faci;
		
			if($userid == $userid_1)
			{
				if($function == 'delete')
					$this->facioutreach_model->delete_faci($faci);
				else if($function == 'add')
				{
					$id_user = $this->facioutreach_model->get_id_user($id,$faci);
					if(!isset($id_user[0]->{'id'}))
					{
						$f = $this->user_model->get_user_from_id($faci);
						if(isset($f->{'idprofile'}))
							$this->facioutreach_model->add_faci($id,$f->{'idprofile'});
					}
				}
			}
		redirect('/faci_outreach/'.$id,'refresh');
	}
		
	public function add() {
		$userid = $this->session->userdata('iduser');
		$role = $this->role_model->get_user_role($userid);
		if($role == 6 || $role == 2)
		{
			$new_signup = array(
				'type' => $this->input->post('outreach_type'),
				'date' => $this->input->post('outreach_date'),
				'live' => $this->input->post('live')
			);
			$this->facioutreach_model->add_signup($new_signup);
		}
		redirect('/faci_outreach/','refresh');
	}
	
	public function edit($id='') {
		$userid = $this->session->userdata('iduser');
		$role = $this->role_model->get_user_role($userid);
		if($role == 6 || $role == 2)
		{
			$data = array();
			$signup_info=$this->facioutreach_model->get_signup($id);
			$committees=$this->committee_model->get_all_committees();
			$yearterm = $this->committee_model->get_yearterm();
			
			$data['yearterm'] = $yearterm;
			$data['committees'] = $committees;
			$data['signup_info'] = $signup_info[0];
			$data['controller'] = $this->cont_name;
			load_template_view($this,'facioutreach_edit',$data);
		}
		else
			redirect('/faci_outreach/','refresh');
	}
	
	public function edit_signup($id='') {
		$userid = $this->session->userdata('iduser');
		$role = $this->role_model->get_user_role($userid);
		if($role == 6 || $role == 2)
		{
			$signup = array(
				'type' => $this->input->post('outreach_type'),
				'date' => $this->input->post('outreach_date'),
				'live' => $this->input->post('live')
			);
			
			$this->facioutreach_model->update_signup($id,$signup);
		}
		redirect('/faci_outreach/','refresh');
	}
	
	public function delete($id='') {
		$userid = $this->session->userdata('iduser');
		$role = $this->role_model->get_user_role($userid);
		if($role == 6 || $role == 2)
		{
			$this->facioutreach_model->delete_signup($id);
		}
		redirect('/faci_outreach/','refresh');
	}
}