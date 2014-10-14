<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
if (!function_exists('setup_pagination')){
    function setup_pagination($caller, $per_page, $uri_segment, $total_rows, $base_url){
        $caller->load->library('pagination');
        $config['base_url'] = site_url($base_url);
        $config['total_rows'] = $total_rows;
        $config['per_page'] = $per_page;
        $config['uri_segment'] = $uri_segment;
		$config['use_page_numbers'] = TRUE;
        // $config['num_links'] = 20;
        // $config['full_tag_open'] = '<div id="pagination">';
        // $config['full_tag_close'] = '</div>';
		$config['next_link'] = 'Next >';
		$config['prev_link'] = '< Previous';
        $caller->pagination->initialize($config);
    }
}
if (!function_exists('add_article')){
    function add_article($caller) {
        if($caller->article_model->insert_article()==TRUE){
            return "Add Successful";
        }
        else{
            return "Error in Adding";
        }
    }
}
if (!function_exists('update_article')){
    function update_article($caller) {
        if($caller->article_model->update_article()==TRUE){
            return "Update Successful";
        }
        else{
            return "Error in Updating";
        }
    }
}
if (!function_exists('delete_article')){
    function delete_article($caller) {
        $id = $caller->uri->segment(3);
        if($caller->article_model->delete_article($id)==TRUE){
            return "Update Successful";
        }
        else{
            return "Error in Updating";
        }
    }
}
if (!function_exists('add_article_form')){
    function add_article_form($caller,$controller) {
        $data = array();
        $data['controller'] = $controller;
        $view = 'normal';

        // code for ckeditor rte/wysiwyg
        $caller->load->helper('ckeditor');
        $data['ckeditor'] = formdev_ckeditor_setup('rte_add');

        if($caller->uri->segment(3)){
            $view = $caller->uri->segment(3);
        }
        if($view == 'normal'){
            load_template_view($caller,'admin-articles_add',$data);
        }
        else if($view == 'admin'){
            $data['action'] = $controller.'/add'.'_'.$view;
            $data['content_page'] = "admin-articles_add";
            $caller->load->view('includes/admin-template',$data); 
        }
    }
}
if (!function_exists('update_article_form')){
    function update_article_form($caller,$controller) {
        $data = array();
        $id = $caller->uri->segment(3);
        if($article = $caller->article_model->get_article_from_id($id)){
                $data['article'] = $article;
        }
        $data['controller'] = $controller;

        // code for ckeditor rte/wysiwyg
        $caller->load->helper('ckeditor');
        $data['ckeditor'] = formdev_ckeditor_setup('rte_update');

        $view = 'normal';
        if($caller->uri->segment(4)){
            $view = $caller->uri->segment(4);
        }
        if($view == 'normal'){
            $data['action'] = $controller.'/update';
            load_template_view($caller,'admin-articles_update',$data);
        }
        else if($view == 'admin'){
            $data['action'] = $controller.'/update'.'_'.$view;
            $data['content_page'] = "admin-articles_update";
            $caller->load->view('includes/admin-template',$data); 
        }
    }
}
if (!function_exists('show_article')){
    function show_article($caller,$url_title,$data) {
        if($url_title){
            if($article=$caller->article_model->get_article_from_url($url_title)){
                $data['article'] = $article;
                load_template_view($caller,'articles_page-full',$data);
            }
            else{
                redirect(reflections);
            }
        }
    }    
}

function formdev_ckeditor_setup($txtarea_id){
    $ckeditor_config = array(
        'id' => $txtarea_id,//required
        'path' => 'js/ckeditor', //required
        'config' => array( //optional
            'width' => '600px',
            'height' => '300px',
            'toolbar' => array(
                array('Bold','Italic','Underline','Strike','FontSize','Link','Unlink'),
				array('Image', 'Table', 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', 'Blockquote'),
                array('Smiley')
            ),
            // 'removePlugins' => 'resize'
            'resize_dir' => 'vertical',
            'uiColor' => '#78aa23'
        )
    );
    return $ckeditor_config;
}
?>