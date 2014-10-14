<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Error extends CI_Controller {
	private $controller_name = 'error';
	
	public function index()
	{
	
	$data = array();
	
    $data['controller'] = $this->controller_name;
	$data['message'] = "404 ERROR: Page does not exist.";
    load_template_view($this,'error_page',$data);
	
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
?>