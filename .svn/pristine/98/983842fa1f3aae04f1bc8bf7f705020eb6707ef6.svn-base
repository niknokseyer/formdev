<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class course extends CI_Controller {
	private $cont_name = 'course';
	
	
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
	
	
	public function index()	 {
		$data = array();
		$sections=$this->formdevclass_model->get_all_sections();
		$yearterm = $this->formdevclass_model->get_yearterm();
		
		$data['yearterm'] = $yearterm;
		$data['sections'] = $sections;
		$data['controller'] = $this->cont_name;
		load_template_view($this,'course_page',$data);
	}
}