<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
if (!function_exists('load_template_view')){
    function load_template_view($caller,$view_name,$data){
        $data['content_page'] = $view_name;
        
		//User Info from Session
		$user = $caller->session->all_userdata();
        $data['user'] = $user;
		
		if(isset($user['is_logged_in']) && $user['is_logged_in'] == true)
		{
        $caller->load->database();
        $caller->load->model('user_model');
       	$profile = $caller->user_model->get_info($user['iduser']);		
		
		$caller->load->library('acl',array('user_id'=>$user['iduser']));
		$profile->type = $caller->acl->get_role_name_from_id( $caller->acl->user_roles[0]);
		
		$data['profile'] = $profile;
		}
        
        $caller->load->database();
        $caller->load->model('Verse_model');
        $data['verse'] = $caller->Verse_model->get_VerseWeek();

        $caller->load->model('article_model');
        $caller->article_model->init(2);
        $query_result = $caller->article_model->get_articles_lim(3, 0);
        if($query_result){
            $data['topannouncements'] = $query_result['articles'];
        }
        $caller->load->view('includes/template', $data);
    }
    
    function redirect_ifnonadmin($parent,$redirect_controller){
        $is_logged_in = $parent->session->userdata('is_logged_in');
        if(!isset($is_logged_in) || $is_logged_in != true){
            redirect($redirect_controller);
        }
    }
}
if (!function_exists('check_access')){
    function check_access($caller,$perm_key){
        $has_access = false;
        if($user_id = $caller->session->userdata('iduser')){
            $caller->load->library('acl',array('user_id'=>$user_id));
            if($caller->acl->has_permission($perm_key)){
                $has_access = true;
            }
        }
        return $has_access;
    }
}
?>