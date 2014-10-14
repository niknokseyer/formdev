<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Announcements extends CI_Controller {
	private $controller_name = 'announcements';

	function __construct() {
        parent::__construct();
        $this->load->model('article_model');
        $this->article_model->init(2);
    }
    
	public function index()
	{
        $data = array();

        $limit = 3;
        $uri_segment = 3;

        $offset = $this->uri->segment($uri_segment);
		if($offset > 0)
			$offset = ($offset-1)*3;
        $result = $this->article_model->get_articles_lim($limit, $offset);
		
        if($result){
            setup_pagination($this, $limit, $uri_segment, $result['num_rows'], 'announcements/index');
            $articles = $result['articles'];
            $data['articles'] = $articles;
        }
        $data['title'] = "Announcements";
        $data['controller'] = $this->controller_name;

        //check authorization here
        //add,update, delete
        if($user_id = $this->session->userdata('iduser')){
            $this->load->library('acl',array('user_id'=>$user_id));
            if($this->acl->has_permission('pk_announcements_update')){
                $data['pk_announcements_update'] = 'true';
            }
            if($this->acl->has_permission('pk_announcements_add')){
                $data['pk_announcements_add'] = 'true';
            }
            if($this->acl->has_permission('pk_announcements_delete')){
                $data['pk_announcements_delete'] = 'true';
            }
        }
        load_template_view($this,'articles_page',$data);
	}
	
	function search($tags=''){	
		if($tags != null && $tags != '')
		{
			$tags = str_replace('_',' ',$tags);
			$data = array();

			$limit = 4;
			$uri_segment = 4;
			$offset = $this->uri->segment($uri_segment);
			if($offset > 0)
				$offset = ($offset-1)*4;
			$result = $this->article_model->get_articles_lim_by_tags($tags, $limit, $offset);
			if($result){
				setup_pagination($this, $limit, $uri_segment, $result['num_rows'], 'announcements/search/'.$tags);
				$articles = $result['articles'];
				$data['articles'] = $articles;
			}
			$data['title'] = "Search Announcements";
			$data['search_tag'] = $tags;
			$data['controller'] = $this->controller_name;

			//check authorization here
			//add,update, delete
			if($user_id = $this->session->userdata('iduser')){
				$this->load->library('acl',array('user_id'=>$user_id));
				if($this->acl->has_permission('pk_reflections_update')){
					$data['pk_reflections_update'] = 'true';
				}
				if($this->acl->has_permission('pk_reflections_add')){
					$data['pk_reflections_add'] = 'true';
				}
				if($this->acl->has_permission('pk_reflections_delete')){
					$data['pk_reflections_delete'] = 'true';
				}
			}
			load_template_view($this,'articles_page',$data);
		}
		else
			redirect('announcements','refresh');
	}
	
    function article($url_title=""){
        //check authorization here
        //add,update, delete
        if($user_id = $this->session->userdata('iduser')){
            $this->load->library('acl',array('user_id'=>$user_id));
            if($this->acl->has_permission('pk_announcements_update')){
                $data['pk_announcements_update'] = 'true';
            }
            if($this->acl->has_permission('pk_announcements_add')){
                $data['pk_announcements_add'] = 'true';
            }
            if($this->acl->has_permission('pk_announcements_delete')){
                $data['pk_announcements_delete'] = 'true';
            }
        }
        $data['controller'] = $this->controller_name;
        show_article($this, $url_title,$data);
    }

    function add() {
        $admin_message = add_article($this);
        redirect($this->controller_name);
    }

    function add_form(){
        //check authorization here
        //pk_announcements_update
        $has_access = false;
        if($user_id = $this->session->userdata('iduser')){
            $this->load->library('acl',array('user_id'=>$user_id));
            if($this->acl->has_permission('pk_announcements_add')){
                $has_access = true;
            }
        }

        if($has_access){
            add_article_form($this,$this->controller_name);
        }
        else{
            redirect($this->controller_name);
        }

        
    }
    function update() {
        $admin_message = update_article($this);
        redirect($this->controller_name);
    }

    function delete() {
        $admin_message = delete_article($this);
        redirect($this->controller_name);
    }

    function update_form(){
        //check authorization here
        //pk_announcements_update
        $has_access = false;
        if($user_id = $this->session->userdata('iduser')){
            $this->load->library('acl',array('user_id'=>$user_id));
            if($this->acl->has_permission('pk_announcements_update')){
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

    function admin($sort_by='datetime', $sort_order='desc'){
        $data = array();

        $limit = 10;
        $uri_segment = 5;

        $data['fields'] = array(
            'id' => 'ID',
            'title' => 'Title',
            'firstname' => 'Author',
            'datetime' => 'Date Posted',
            'edited_date' => 'Last Modified'
        );
        $data['sort_by'] = $sort_by;
        $data['sort_order'] = $sort_order;

        $offset = $this->uri->segment($uri_segment);
        $result = $this->article_model->get_articles_lim($limit,$offset,$sort_by,$sort_order);
        
        if($result){
            setup_pagination($this, $limit, $uri_segment, $result['num_rows'], 'announcements/admin');
            $articles = $result['articles'];

            $data['articles'] = $articles;
            $data['pagination'] = $this->pagination->create_links();
        }
        $data['title'] = "Admin - Announcements";
        $data['content_page'] = "admin-articles_page";
        $data['controller'] = $this->controller_name;;
        $this->load->view('includes/admin-template',$data);   
    }
    function add_admin() {
        $admin_message = add_article($this);
        redirect($this->controller_name.'/admin');
    }
    function update_admin() {
        $admin_message = update_article($this);
        redirect($this->controller_name.'/admin');
    }
    function delete_admin() {
        $admin_message = delete_article($this);
        redirect($this->controller_name.'/admin');
    }
}