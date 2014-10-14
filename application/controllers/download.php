<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Download extends CI_Controller {
	private $cont_name = 'download';

	function __construct()
	{
	parent::__construct();

	$this->load->database(); 
	$this->load->model('File_model');
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

	public function index($filename="")
	{
	/*
		$files = $this->File_model->get_files();
		$data['files'] = $files;
	   // $data['content_page'] = 'downloads_page';
		$user = $this->session->all_userdata();
		$content['message'] = "";
		$data['content'] = $content;
		$data['user'] = $user;		
            $this->load->database(); 
            $this->load->model('Verse_model');
            $data['verse'] = $this->Verse_model->get_VerseWeek();
            $data['controller'] = $this->cont_name;
	    load_template_view($this,'downloads_page',$data);
		*/
		
		if($filename!=null && $filename!="")
		redirect('files/download/'.$filename, 'refresh');
		
		redirect('files/download','refresh');
		
	}
	
	public function students($id)
	{
	
	$file = $this->File_model->get_file($id);
	
	if ($file['access']==2)
	{
	$data = file_get_contents("./downloads/".$file['filename']); // Read the file's contents
	$name = $file['filename'];

	force_download($name, $data);
	}
	else
	{
	echo "You are not allowed to download this file";
	}
	
	}

	public function facilitators($id)
	{
	$user = array();
	$user = $this->session->all_userdata();
	if(isset($user['is_logged_in']) && $user['is_logged_in'] == true)
	{
	$file = $this->File_model->get_file($id);
	
	if ($file['access']==1)
	{
	$data = file_get_contents("./downloads/".$file['filename']); // Read the file's contents
	$name = $file['filename'];

	force_download($name, $data);
	}
	else
	{
	echo "You are not allowed to download this file";
	}
	}
	echo "You are not allowed to download this file";
	
	}

	public function do_upload()
	{
		$config['upload_path'] = './downloads/';
		$config['allowed_types'] = 'pdf|doc|docx|gif|jpg|png';
		$config['overwrite'] = TRUE;
		$config['remove_spaces'] = FALSE;
		
		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = $this->upload->display_errors();

			$data['content_page'] = 'downloads_page';
			$content['message'] = $error;
			$data['content'] = $content;
			$this->load->view('includes/template', $data);
			redirect('/files/download','refresh');
		
		}
		else
		{
			$upload = $this->upload->data();
			$date = time();
			$baseurl = base_url();
			
			$new_file_insert_data = array(
			'iduser' => $this->session->userdata('iduser'),
			'label' => $this->input->post('label'),
			'path' => $baseurl.'downloads/',
			'filename' => $upload['file_name'],
			'datetime' => $date,
			'access' => $this->input->post('access')				
			);
			
			if($query = $this->File_model->add_file($new_file_insert_data))
			{			
			$data['content_page'] = 'downloads_page';
			$content['message'] = 'Upload Successful!';
			$data['content'] = $content;	
			$this->load->view('includes/template', $data);
			redirect('/files/download','refresh');
			}
		}
	
	}
	
	public function upload()
	{
		if(!$user['upload_permission'])
		{
                    $data = array();
                    $data['controller'] = $this->cont_name;
                    load_template_view($this,'error_page',$data);
		}
		else
		{
                    $data = array();
                    $data['controller'] = $this->cont_name;
                    load_template_view($this,'upload_page',$data);
		}
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */