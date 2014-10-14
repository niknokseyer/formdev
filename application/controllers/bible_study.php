<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class bible_study extends CI_Controller {
	private $cont_name = 'bible_study';
	
	
		function __construct()
	{
	parent::__construct();
	
	$this->load->database(); 
	$this->load->model('faci_model');
	$this->load->model('bsgroup_model');
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
	
	
	public function index($group='')	 {
		if($group=='')
		{
			$yearterm = $this->bsgroup_model->get_yearterm();
			$groups=$this->bsgroup_model->get_all_groups();
			
			$data = array();
			$data['groups'] = $groups;
			$data['yearterm'] = $yearterm;
			$data['ishome'] = true;
			$data['controller'] = $this->cont_name;
			load_template_view($this,'bs_page',$data);
		}	
		else
		{
			$group = str_replace('_',' ',$group);
			$group_id = $this->bsgroup_model->get_group_id($group);
			if(isset($group_id['id']))
			{
				$g_id = $group_id['id'];
				$data = array();
				if($group_info=$this->bsgroup_model->get_group($g_id)){
					$facis_in_bs = array();
					$facis = $this->bsgroup_model->get_facis_per_bs($g_id);
					$num_facis = $this->bsgroup_model->get_number_facis($g_id);
					$facis_in_bs[] = $facis;
					$groups=$this->bsgroup_model->get_all_groups();
					$yearterm = $this->bsgroup_model->get_yearterm();
			
					$data['ishome'] = false;
					$data['yearterm'] = $yearterm;
					$data['groups'] = $groups;
					$data['num_facis']= $num_facis[0]->{'COUNT(*)'};
					$data['group_info'] = $group_info[0];
					$data['facis_in_bs'] = $facis_in_bs[0];
					$data['controller'] = $this->cont_name;
					load_template_view($this,'bsgroup_view',$data);
				}
			}
			else
				redirect('/bible_study/','refresh');
		}
	}
	
	public function view($section=''){
		//TODO
	}

	public function manage($function='') {
		//TODO
	}
}