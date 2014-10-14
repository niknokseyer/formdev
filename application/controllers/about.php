<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {
	private $controller_name = 'about';

	function __construct()
	{
		parent::__construct();
		$this->load->model('article_model');
		$this->article_model->init(4);
	}

	public function index()
	{
		$data = array();
		if($result = $this->article_model->get_article_from_url('about')){
			$data['article'] = $result;
		}
		$data['view'] = '';
		$data['controller'] = $this->controller_name;

		//check authorization here
		//pk_about_update
		if($user_id = $this->session->userdata('iduser')){
			$this->load->library('acl',array('user_id'=>$user_id));
			if($this->acl->has_permission('pk_about_update')){
				$data['pk_about_update'] = 'true';
			}
		}

        load_template_view($this,'about_page',$data);
	}

	public function admin(){
		$data = array();
		if($result = $this->article_model->get_articles()){
			$data['article'] = $result[0];
		}
		$data['view'] = 'admin';
		$data['content_page'] = 'about_page';
		$data['controller'] = $this->controller_name;

		//check authorization here
		//pk_about_update
		if($user_id = $this->session->userdata('iduser')){
			$this->load->library('acl',array('user_id'=>$user_id));
			if($this->acl->has_permission('pk_about_update')){
				$data['pk_about_update'] = 'true';
			}
		}

		$this->load->view('includes/admin-template',$data);
	}

	public function update(){
		$admin_message = update_article($this);
        redirect($this->controller_name);
	}

	public function update_form(){
		//check authorization here
		//pk_about_update
		$has_access = false;
		if($user_id = $this->session->userdata('iduser')){
			$this->load->library('acl',array('user_id'=>$user_id));
			if($this->acl->has_permission('pk_about_update')){
				$has_access = true;
			}
		}

		if($has_access){
			update_article_form($this,$this->controller_name);
		}
		else{
			redirect($this->controller_name);
		}
	}

    function update_admin() {
        $admin_message = update_article($this);
        redirect($this->controller_name.'/admin');
    }
}