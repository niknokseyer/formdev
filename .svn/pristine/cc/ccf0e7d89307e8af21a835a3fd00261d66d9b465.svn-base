<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class committees extends CI_Controller {
	private $cont_name = 'committees';
	
	
		function __construct()
	{
	parent::__construct();
	
	$this->load->database(); 
	$this->load->model('faci_model');
	$this->load->model('committee_model');
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
	
	
	public function index($com='',$page='')	 {
		if($com=='')
		{
			$committees=$this->committee_model->get_all_committees();
			$yearterm = $this->committee_model->get_yearterm();
			
			$data = array();
			$data['yearterm'] = $yearterm;
			$data['committees'] = $committees;
			$data['controller'] = $this->cont_name;
			load_template_view($this,'committees_page',$data);
		}	
		else
		{
			$com = str_replace('_',' ',$com);
			$com_id = $this->committee_model->get_committee_id($com);
			if(isset($com_id['id']))
			{
				$c_id = $com_id['id'];
				$data = array();
				if($committee_info=$this->committee_model->get_committee($c_id)){
					$facis_in_com = array();
					$facis = $this->committee_model->get_facis_per_committee($c_id);
					$num_facis = $this->committee_model->get_number_facis($c_id);
					$facis_in_com[] = $facis;
					$committees=$this->committee_model->get_all_committees();
					$yearterm = $this->committee_model->get_yearterm();
					$projects = $this->committee_model->get_committee_projects($c_id);
					$proj_milestones = array();
					foreach($projects as $p)
						$proj_milestones[] = $this->committee_model->get_committee_projects_milestones($p->id);
					
					if($page != 'plans')
						$data['com_home'] = true;
					else
						$data['com_home'] = false;
						
					$userid = $this->session->userdata('iduser');
					if($userid != '')
					{
						$data['isFaci'] = true;
						$data['isAdmin'] = $this->committee_model->isComHead($c_id, $userid);
						if(!$data['isAdmin'])
						{
							$role = $this->role_model->get_user_role($userid);
							if($role == 2)
								$data['isAdmin'] = true;
							else
								$data['isAdmin'] = false;
						}
					}
					else
					{
						$data['isFaci'] = false;
						$data['isAdmin'] = false;
						$data['com_home'] = true;
					}
					
					$data['projects'] = $projects;
					$data['proj_milestones'] = $proj_milestones;
					$data['yearterm'] = $yearterm;
					$data['committees'] = $committees;
					$data['num_facis']= $num_facis[0]->{'COUNT(*)'};
					$data['committee_info'] = $committee_info[0];
					$data['facis_in_com'] = $facis_in_com[0];
					$data['controller'] = $this->cont_name;
					load_template_view($this,'committee_view',$data);
				}
			}
			else
				redirect('/committees/','refresh');
		}
	}
	
	public function committee_projects($com='',$function='',$proj=''){
		$c = $com;
		$com = str_replace('_',' ',$com);
		$com_id = $this->committee_model->get_committee_id($com);
		if(isset($com_id['id']))
		{
			$c_id = $com_id['id'];
			$userid = $this->session->userdata('iduser');
			if($userid != '')
			{
				$isAdmin = $this->committee_model->isComHead($c_id, $userid);
				if(!$isAdmin)
				{
					$role = $this->role_model->get_user_role($userid);
					if($role == 2)
						$isAdmin = true;
					else
						$isAdmin = false;
				}
			}
			else
				$isAdmin = false;
			if($isAdmin)
			{
				if($function == 'add_project')
				{
					if($this->input->post('proj_name') != null)
					{
						$project = $this->input->post('proj_name');
						$new_project = array(
							'committee' => $c_id,
							'project' => $project
						);
						$this->committee_model->add_project($new_project);
						$str = str_replace(' ','_',$project);
						redirect('/committees/committee_projects/'.$c.'/view_project/'.$str,'refresh');
					}
					else
						redirect('/committees/'.$c.'/plans','refresh');
				}
				else if($function == 'view_project')
				{
					$proj = str_replace('_',' ',$proj);
					$proj_id = $this->committee_model->get_project_id($c_id, $proj);
					if(isset($proj_id['id']))
					{
						$p_id = $proj_id['id'];
						$committee_info=$this->committee_model->get_committee($c_id);
						$committees=$this->committee_model->get_all_committees();
						$yearterm = $this->committee_model->get_yearterm();
						$project_info = $this->committee_model->get_project_info($p_id);
						$proj_milestones = $this->committee_model->get_committee_projects_milestones($p_id);
						$users = array();
						$user_array = $this->user_model->get_all_current_facis();
						foreach($user_array as $u){
							$users[$u->iduser] = "$u->lastname, $u->firstname";
						}
						
						$data['user_list'] = $users;
						$data['project_info'] = $project_info;
						$data['proj_milestones'] = $proj_milestones;
						$data['yearterm'] = $yearterm;
						$data['committees'] = $committees;
						$data['committee_info'] = $committee_info[0];
						$data['controller'] = $this->cont_name;
						load_template_view($this,'com_project_view',$data);
					}
					else
						redirect('/committees/'.$c.'/plans','refresh');
				}
				else if($function == 'edit_project')
				{
					$proj = str_replace('_',' ',$proj);
					$proj_id = $this->committee_model->get_project_id($c_id, $proj);
					if(isset($proj_id['id']))
					{
						$p_id = $proj_id['id'];
						$committee_info=$this->committee_model->get_committee($c_id);
						$committees=$this->committee_model->get_all_committees();
						$yearterm = $this->committee_model->get_yearterm();
						$project_info = $this->committee_model->get_project_info($p_id);
						
						$data['project_info'] = $project_info;
						$data['committee_info'] = $committee_info[0];
						$data['yearterm'] = $yearterm;
						$data['committees'] = $committees;
						$data['controller'] = $this->cont_name;
						load_template_view($this,'com_project_edit',$data);
					}
					else
						redirect('/committees/'.$c.'/plans','refresh');
				}
				else if($function == 'edit_proj')
				{
					$proj = str_replace('_',' ',$proj);
					$proj_id = $this->committee_model->get_project_id($c_id, $proj);
					if(isset($proj_id['id']))
					{
						if($this->input->post('proj_name') != null)
						{
							$p_id = $proj_id['id'];
							$project = $this->input->post('proj_name');
							$new_project = array(
								'project' => $project
							);
							$this->committee_model->edit_project($p_id, $new_project);
							$str = str_replace(' ','_',$project);
							redirect('/committees/committee_projects/'.$c.'/view_project/'.$str,'refresh');
						}
						else
							redirect('/committees/'.$c.'/plans','refresh');
					}
					else
						redirect('/committees/'.$c.'/plans','refresh');
				}
				else if($function == 'delete_project')
				{
					$proj = str_replace('_',' ',$proj);
					$proj_id = $this->committee_model->get_project_id($c_id, $proj);
					if(isset($proj_id['id']))
						$this->committee_model->delete_project($proj_id['id']);
					redirect('/committees/'.$c.'/plans','refresh');
				}
				else
					redirect('/committees/'.$c.'/plans','refresh');
			}
			else
			{
				$data = array();
				$data['controller'] = 'error';
				$data['message'] = "You are not authorized to manage this page.";
				load_template_view($this,'error_page',$data);
			}
		}
		else
			redirect('/committees/','refresh');
	}
	
	public function project_milestones($com='',$proj='',$function='',$milestone='',$caller=''){
		$c = $com;
		$p = $proj;
		$com = str_replace('_',' ',$com);
		$com_id = $this->committee_model->get_committee_id($com);
		if(isset($com_id['id']))
		{
			$c_id = $com_id['id'];
			$userid = $this->session->userdata('iduser');
			if($userid != '')
			{
				$isAdmin = $this->committee_model->isComHead($c_id, $userid);
				if(!$isAdmin)
				{
					$role = $this->role_model->get_user_role($userid);
					if($role == 2)
						$isAdmin = true;
					else
						$isAdmin = false;
				}
			}
			else
				$isAdmin = false;
			if($isAdmin && $function != 'edit_status' && $function != 'update_status')
			{
				$proj = str_replace('_',' ',$proj);
				$proj_id = $this->committee_model->get_project_id($c_id, $proj);
				if(isset($proj_id['id']))
				{
					$p_id = $proj_id['id'];
					if($function == 'add')
					{
						if($this->input->post('milestone') != null)
						{
							$f = $this->user_model->get_user_from_id($this->input->post('user_list'));	
							$new_milestone = array(
								'project' => $p_id,
								'milestone' => $this->input->post('milestone'),
								'date_due' => $this->input->post('date_due'),
								'faci_accountable' => $f->{'idprofile'}
							);
							$this->committee_model->add_milestone($new_milestone);
						}
						redirect('/committees/committee_projects/'.$c.'/view_project/'.$p,'refresh');
					}
					else if($function == 'edit')
					{
						$committee_info=$this->committee_model->get_committee($c_id);
						$committees=$this->committee_model->get_all_committees();
						$yearterm = $this->committee_model->get_yearterm();
						$project_info = $this->committee_model->get_project_info($p_id);
						$proj_milestone = $this->committee_model->get_committee_project_milestone($milestone);
						if($proj_milestone != null)
						{
							$users = array();
							$user_array = $this->user_model->get_all_current_facis();
							foreach($user_array as $u){
								$users[$u->iduser] = "$u->lastname, $u->firstname";
							}
							$faci_id = $this->user_model->get_iduser_from_idprofile($proj_milestone[0]->{'faci_accountable'});
							
							$data['faci_id'] = $faci_id[0]->{'iduser'};
							$data['user_list'] = $users;
							$data['proj_milestone'] = $proj_milestone[0];
							$data['project_info'] = $project_info;
							$data['committee_info'] = $committee_info[0];
							$data['yearterm'] = $yearterm;
							$data['committees'] = $committees;
							$data['controller'] = $this->cont_name;
							load_template_view($this,'proj_milestones_edit',$data);
						}
						else
							redirect('/committees/committee_projects/'.$c.'/view_project/'.$p,'refresh');
					}
					else if($function == 'update')
					{
						$proj_milestone = $this->committee_model->get_committee_project_milestone($milestone);
						if($proj_milestone != null)
						{
							if($this->input->post('milestone') != null)
							{
								$f = $this->user_model->get_user_from_id($this->input->post('user_list'));	
								$new_milestone = array(
									'project' => $p_id,
									'milestone' => $this->input->post('milestone'),
									'date_due' => $this->input->post('date_due'),
									'faci_accountable' => $f->{'idprofile'},
									'status' => $this->input->post('status')
								);
								$this->committee_model->edit_milestone($milestone, $new_milestone);
							}
						}
						redirect('/committees/committee_projects/'.$c.'/view_project/'.$p,'refresh');
					}
					else if($function == 'delete')
					{
						$proj_milestone = $this->committee_model->get_committee_project_milestone($milestone);
						if($proj_milestone != null)
						{
							$this->committee_model->delete_milestone($milestone);
						}
						redirect('/committees/committee_projects/'.$c.'/view_project/'.$p,'refresh');
					}
					else
						redirect('/committees/committee_projects/'.$c.'/view_project/'.$p,'refresh');
				}
				else
					redirect('/committees/'.$c.'/plans','refresh');
			}
			else if($userid != '' && ($function == 'edit_status' || $function == 'update_status'))
			{		
				$proj = str_replace('_',' ',$proj);
				$proj_id = $this->committee_model->get_project_id($c_id, $proj);
				if(isset($proj_id['id']))
				{
					$p_id = $proj_id['id'];
					if($function == 'edit_status')
					{
						$committee_info=$this->committee_model->get_committee($c_id);
						$committees=$this->committee_model->get_all_committees();
						$yearterm = $this->committee_model->get_yearterm();
						$project_info = $this->committee_model->get_project_info($p_id);
						$proj_milestone = $this->committee_model->get_committee_project_milestone($milestone);
						if($proj_milestone != null)
						{
							$f = $this->user_model->get_user_from_id($userid);
							if($f->{'idprofile'} == $proj_milestone[0]->faci_accountable)
							{	
								$data['proj_milestone'] = $proj_milestone[0];
								$data['project_info'] = $project_info;
								$data['committee_info'] = $committee_info[0];
								$data['yearterm'] = $yearterm;
								$data['committees'] = $committees;
								$data['controller'] = $this->cont_name;
								$data['caller'] = $caller;
								load_template_view($this,'proj_milestones_status_edit',$data);
							}
							else
							{
								$data = array();
								$data['controller'] = 'error';
								$data['message'] = "You are not authorized to manage this page.";
								load_template_view($this,'error_page',$data);
							}
						}
						else
							redirect('/committees/'.$c.'/plans','refresh');
					}
					else if($function == 'update_status')
					{
						$proj_milestone = $this->committee_model->get_committee_project_milestone($milestone);
						if($proj_milestone != null)
						{
							$f = $this->user_model->get_user_from_id($userid);
							if($f->{'idprofile'} == $proj_milestone[0]->faci_accountable)
							{
								if($this->input->post('status') != null)
								{
									$new_milestone = array(
										'status' => $this->input->post('status')
									);
									$this->committee_model->edit_milestone($milestone, $new_milestone);
								}
								if($caller == 'committees')
									redirect('/committees/'.$c.'/plans','refresh');
								else
									redirect('/home/','refresh');
							}
							else
							{
								$data = array();
								$data['controller'] = 'error';
								$data['message'] = "You are not authorized to manage this page.";
								load_template_view($this,'error_page',$data);
							}
						}
						else
							redirect('/committees/'.$c.'/plans','refresh');
					}
					else
						redirect('/committees/'.$c.'/plans','refresh');
				}
				else
					redirect('/committees/'.$c.'/plans','refresh');
			}
			else
			{
				$data = array();
				$data['controller'] = 'error';
				$data['message'] = "You are not authorized to manage this page.";
				load_template_view($this,'error_page',$data);
			}
		}
		else
			redirect('/committees/','refresh');
	}
}