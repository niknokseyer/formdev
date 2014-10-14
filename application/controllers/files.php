<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Files extends CI_Controller {
	private $cont_name = 'files';

	function __construct()
	{
	parent::__construct();

	$this->load->database(); 
	$this->load->model('File_model');
	}	
	 /**
	 *function __construct()
	 *{
	 *	parent::__construct();
	 *	$this->is_logged_in();
	 *}
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/home
	 *	- or -  
	 * 		http://example.com/index.php/home/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/home/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{
		redirect('/files/download','refresh');
	}
	
	public function update($id)
	{
	
	$date = date('Y-m-d H:i',time());
	
	if($this->input->post('replacefile') == 'replace')
	{	
		$config['upload_path'] = './downloads/';
		$config['allowed_types'] = 'pdf|doc|docx|gif|jpg|png|ppt|pptx|txt|xls|xlsx|zip';
		$config['overwrite'] = TRUE;
		$config['remove_spaces'] = FALSE;
		
		$this->load->library('upload', $config);
		$this->upload->do_upload();
		$upload = $this->upload->data();
		$data = array(
			'idfile' => $id,
			'iduser' => $this->input->post('iduser'),
			'label' => $this->input->post('label'),
			'filename' => $upload['file_name'],
			'datetime' => $date,
			'access' => $this->input->post('access'),
			'groupid' => $this->input->post('groupid')
			);
		$this->File_model->update_file($data);
	}
	else
	{
		$data = array(
			'idfile' => $id,
			'iduser' => $this->input->post('iduser'),
			'label' => $this->input->post('label'),
			'filename' => '',
			'datetime' => $date,
			'access' => $this->input->post('access'),
			'groupid' => $this->input->post('groupid')
			);
		$this->File_model->update_file($data);
	}
	
	redirect('/files/download','refresh');
	
	}
	
	public function update_order()
	{
		$id = $_POST['groupid'];
		if($id != '')
		{
			$files = $this->File_model->get_group_files($id);
			$t = $_POST['field'];
			$str = str_ireplace($id."[]=","",$t);
			$result = explode("&",$str);
			$pos = 1;
			foreach($result as $value)
			{
				$bFound = false;
				$i = 0;
				while(!$bFound && $i < count($files))
				{
					if(intval($files[$i]['list_order']) == intval($value))
						$bFound = true;
					$i++;
				}
				if($bFound)
				{	
					$data = array(
						'idfile' => $files[$i-1]['idfile'],
						'list_order' => $pos
					);
					$this->File_model->update_file_order($data);
					$pos ++;
				}
			}
			echo "CHANGES SAVED!";
		}
	}
	
	public function edit($id='')
	{
	
	if($id==''){
	
	redirect('/files/download','refresh');
	
	}
	else
	{
	
		$user_id = $this->session->userdata('iduser');
        $this->load->library('acl',array('user_id'=>$user_id));
        if($this->acl->has_permission('pk_files')){
        $pk_files = 'true';
        }
	
		if(isset($pk_files) && $pk_files == true)
		{
		
		$file = $this->File_model->get_file_by_id($id);
		$files = $this->File_model->get_filenames();
		
		$data['iduser'] = $user_id;
		$data['pk_files'] = $pk_files;
		$data['file'] = $file;
		$data['files'] = $files;
			
        $this->load->database(); 
        $data['controller'] = $this->cont_name;
	    load_template_view($this,'edit_file',$data);
		}
	
	}
	
	
	}
	
	
	public function download($filename='')
	{	
	if($filename==''){
	
		$files = $this->File_model->get_files();
		$data['files'] = $files;
	   // $data['content_page'] = 'downloads_page';
		$content['message'] = "";
		$data['content'] = $content;
		
		$user_id = $this->session->userdata('iduser');
        $this->load->library('acl',array('user_id'=>$user_id));
        if($this->acl->has_permission('pk_files')){
        $data['pk_files'] = 'true';
        }
        				
            $this->load->database(); 
            $data['controller'] = $this->cont_name;
		//echo 'hello Table ';
	    load_template_view($this,'downloads_page',$data);
		//$this->load->view('downloads_page', $data);
	}
		
		
	else{
		
			$file = $this->File_model->get_file(urldecode($filename));
			
			if($file==null){
                    $data = array();
                    $data['controller'] = $this->cont_name;
					$data['message'] = "File not found";
                    load_template_view($this,'error_page',$data);
			}
			else
	{
	//File for everyone
	if ($file['access']==2)
	{
	$data = file_get_contents("./downloads/".$file['filename']); // Read the file's contents
	$name = $file['filename'];

	$this->File_model->add_download($file['download'],$file['idfile']);
	force_download($name, $data);
	}
	//File for faci only
	else if ($file['access']==1)
	{
	$user = array();
	$user = $this->session->all_userdata();
	if(isset($user['is_logged_in']) && $user['is_logged_in'] == true)
	{
	$data = file_get_contents("./downloads/".$file['filename']); // Read the file's contents
	$name = $file['filename'];

	$this->File_model->add_download($file['download'],$file['idfile']);
	force_download($name, $data);
	}
	else
	{
	                $data = array();
                    $data['controller'] = $this->cont_name;
					$data['message'] = "You are not authorized to download this file. Please login to continue.";
                    load_template_view($this,'error_page',$data);
	}
	
	}
	}
	}
	}

	public function do_upload()
	{
		$config['upload_path'] = './downloads/';
		$config['allowed_types'] = 'pdf|doc|docx|gif|jpg|png|ppt|pptx|txt|xls|xlsx|zip';
		$config['overwrite'] = TRUE;
		$config['remove_spaces'] = FALSE;
		
		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = $this->upload->display_errors();

			$data = array();
            $data['controller'] = $this->cont_name;
			$data['message'] = $error;
            load_template_view($this,'error_page',$data);
			
			/*
			$data['content_page'] = 'downloads_page';
			$content['message'] = $error;
			$data['content'] = $content;
			$user = $this->session->all_userdata();
			$data['user'] = $user;		
			$this->load->view('includes/template', $data);
			redirect('/files/download','refresh');
			*/
		
		}
		else
		{
		
		$user_id = $this->session->userdata('iduser');
        $this->load->library('acl',array('user_id'=>$user_id));
        if($this->acl->has_permission('pk_files')){
        $pk_files = 'true';
        }
		$files = $this->File_model->get_count_group_files($this->input->post('groupid'));
		if(isset($pk_files) && $pk_files == true)
		{
			$upload = $this->upload->data();
			$date = date('Y-m-d H:i',time());
			$baseurl = base_url();
			
			$new_file_insert_data = array(
			'iduser' => $this->session->userdata('iduser'),
			'label' => $upload['raw_name'],
			'filename' => $upload['file_name'],
			'datetime' => $date,
			'access' => $this->input->post('access'),
			'groupid' => $this->input->post('groupid'),
			'download' => 0,
			'list_order' => (($files[0]['COUNT(*)']) + 1)
			);
			if($query = $this->File_model->add_file($new_file_insert_data))
			{			
			$data['content_page'] = 'downloads_page';
			$content['message'] = 'Upload Successful!';
			$data['content'] = $content;
			$user = $this->session->all_userdata();
			$data['user'] = $user;		
			$this->load->view('includes/template', $data);
			redirect('/files/download','refresh');
			}
		}
		else
		{
		            $data = array();
                    $data['controller'] = $this->cont_name;
					$data['message'] = "You are not authorized to upload files.";
                    load_template_view($this,'error_page',$data);
		}
		}
	
	}
	
	public function upload()
	{
	
		$user_id = $this->session->userdata('iduser');
        $this->load->library('acl',array('user_id'=>$user_id));
        if($this->acl->has_permission('pk_files')){
        $data['pk_files'] = 'true';
        }
	
		if(!$data['pk_files'])
		{
                    $data = array();
                    $data['controller'] = $this->cont_name;
					$data['message'] = "You are not authorized to upload files.";
                    load_template_view($this,'error_page',$data);
		}
		else
		{
                    $data = array();
                    $data['controller'] = $this->cont_name;
                    load_template_view($this,'upload_page',$data);
		}
	}
	
	public function delete($idfile)
	{
	
		$user_id = $this->session->userdata('iduser');
        $this->load->library('acl',array('user_id'=>$user_id));
        if($this->acl->has_permission('pk_files')){
        $pk_files = 'true';
        }
	
		if(isset($pk_files) && $pk_files == true)
		{
		$this->File_model->delete_file($idfile);
		redirect('/files/download','refresh');
		}
		else
		{
		$data = array();
		$data['controller'] = $this->cont_name;
		$data['message'] = "You are not authorized to delete files.";
		load_template_view($this,'error_page',$data);
		}
	
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */