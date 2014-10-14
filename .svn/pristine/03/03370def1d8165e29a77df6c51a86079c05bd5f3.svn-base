<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reflections extends CI_Controller {
	private $controller_name = 'reflections';

	function __construct() {
        parent::__construct();
        $this->load->model('article_model');
		$this->load->model('user_model');
		$this->article_model->init(1);
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
    
	function index(){	
		$data = array();

		$limit = 4;
		$uri_segment = 3;

		$offset = $this->uri->segment($uri_segment);
		if($offset > 0)
			$offset = ($offset-1)*4;
		$result = $this->article_model->get_articles_lim($limit, $offset);
			
		if($result){
			setup_pagination($this, $limit, $uri_segment, $result['num_rows'], 'reflections/index');
			$articles = $result['articles'];
			$data['articles'] = $articles;
		}
		$data['title'] = "Reflections";
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
	
	function author($author=''){
		if($author != null && $author != '')
		{
			$data = array();

			$limit = 4;
			$uri_segment = 4;
			$authorid = $this->user_model->get_iduser_from_username($author);
			$authorid = $authorid['iduser'];
			$offset = $this->uri->segment($uri_segment);
			if($offset > 0)
				$offset = ($offset-1)*4;
			$result = $this->article_model->get_articles_lim_by_author($authorid, $limit, $offset);
			if($result){
				setup_pagination($this, $limit, $uri_segment, $result['num_rows'], 'reflections/author/'.$author);
				$articles = $result['articles'];
				$data['articles'] = $articles;
			}
			$data['title'] = $articles[0]->firstname." ".$articles[0]->lastname."'s Reflections";
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
			redirect('reflections','refresh');
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
				setup_pagination($this, $limit, $uri_segment, $result['num_rows'], 'reflections/search/'.$tags);
				$articles = $result['articles'];
				$data['articles'] = $articles;
			}
			$data['title'] = "Search Reflections";
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
			redirect('reflections','refresh');
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

	function admin($sort_by='datetime', $sort_order='desc'){
		$data = array();

		$limit = 10;
		$uri_segment = 5;

		$data['fields'] = array(
			'id' => 'ID',
			'title' => 'Title',
			'username' => 'Author',
			'datetime' => 'Date Posted',
			'edited_date' => 'Last Modified'
		);
		$data['sort_by'] = $sort_by;
		$data['sort_order'] = $sort_order;

		$offset = $this->uri->segment($uri_segment);
		$result = $this->article_model->get_articles_lim($limit,$offset,$sort_by,$sort_order);
		
		if($result){
			setup_pagination($this, $limit, $uri_segment, $result['num_rows'], 'reflections/admin');
			$articles = $result['articles'];

			$data['articles'] = $articles;
			$data['pagination'] = $this->pagination->create_links();
		}
		$data['title'] = "Admin - Reflections";
		$data['controller'] = $this->controller_name;
		$data['content_page'] = "admin-articles_page";
		$this->load->view('includes/admin-template',$data);   
	}


	function add() {
        $admin_message = add_article($this);
        redirect($this->controller_name);
    }

	function update() {
		$admin_message = update_article($this);
        redirect($this->controller_name);
	}
	function delete() {
		$admin_message = delete_article($this);
        redirect($this->controller_name);
	}

	function add_form(){
		$has_access = false;
        if($user_id = $this->session->userdata('iduser')){
            $this->load->library('acl',array('user_id'=>$user_id));
            if($this->acl->has_permission('pk_reflections_add')){
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
	function update_form(){
		$has_access = false;
        if($user_id = $this->session->userdata('iduser')){
            $this->load->library('acl',array('user_id'=>$user_id));
            if($this->acl->has_permission('pk_reflections_update')){
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