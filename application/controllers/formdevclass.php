<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class formdevclass extends CI_Controller {
	private $cont_name = 'formdevclass';
	
	
		function __construct()
	{
	parent::__construct();
	
	$this->load->database(); 
	$this->load->model('faci_model');
	$this->load->model('formdevclass_model');
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
	
	
	public function index($section='')	 {
		if($section=='')
		{
			redirect('/course/','refresh');
		}	
		else
		{
			$section_id = $this->formdevclass_model->get_section_id($section);
			if(isset($section_id['id']))
			{
				$s_id = $section_id['id'];
				$data = array();
				if($section_info=$this->formdevclass_model->get_section($s_id)){
					$facis_in_class = array();
					$facis = $this->formdevclass_model->get_facis_per_class($s_id);
					$num_facis = $this->formdevclass_model->get_number_facis($s_id);
					$facis_in_class[] = $facis;
					$sections=$this->formdevclass_model->get_all_sections();
					$yearterm = $this->formdevclass_model->get_yearterm();
			
					$data['yearterm'] = $yearterm;
					$data['sections'] = $sections;
					$data['num_facis']= $num_facis[0]->{'COUNT(*)'};
					$data['section_info'] = $section_info[0];
					$data['facis_in_class'] = $facis_in_class[0];
					$data['controller'] = $this->cont_name;
					load_template_view($this,'formdevclasses_view',$data);
				}
			}
			else
				redirect('/course/','refresh');
		}
	}
	
	public function view($section=''){
		//TODO
	}

	public function manage($function='') {
		//TODO
	}
}