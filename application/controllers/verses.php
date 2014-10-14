<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * This class shows the default verse page when the verse of the week is clicked.
 */
class Verses extends CI_Controller {
	private $cont_name = 'verses';
        /**
         * General function to check if the submit button is clicked.
         * @param type $trigger
         * @return type 
         */
        function submit($trigger = 'submit')
        {
          return (isset($_POST[$trigger]) || isset($_POST[$trigger.'_x']) || isset($_GET[$trigger]) || isset($_GET[$trigger.'_x']) ? true : false);
        }
        /**
         * Constructor.
         */
        function __construct() {
            parent::__construct();
            $this->load->database(); 
            $this->load->model('Verse_model');
        }
        /**
         * Handles both default function to load the verses and also submit to insert verse.
         */
	public function index()
	{
            date_default_timezone_set('GMT');
            $ph_time = time() + 8 * 60 * 60; //sets the current time to philippine time
            if($this->submit('submit')) {
                $_POST['datetime'] = date('Y-m-d H:i',$ph_time);
                $this->Verse_model->insert_Verses();
            }
            $this->verseDefault($ph_time);
	}
        /**
         * Loads the verse_page.
         * @param type $ph_time 
         */
        function verseDefault($ph_time) {
		
			$limit = 9;
			$uri_segment = 3;

			$offset = $this->uri->segment($uri_segment);
			if($offset > 0)
				$offset = ($offset-1)*9;
			$result = $this->Verse_model->get_other_verses($limit, $offset);
				
			if($result){
				setup_pagination($this, $limit, $uri_segment, $result['num_rows'], 'verses/index');
				$data['verses'] = $result['verses'];
			}
            $user = $this->session->all_userdata();
            $data['user'] = $user;
            $data['faci'] = $this->Verse_model->get_Facis();
            $data['verse'] = $this->Verse_model->get_VerseWeek();
            $data['controller'] = $this->cont_name;
            
            //check authorization here
                if($user_id = $this->session->userdata('iduser')){
                    $this->load->library('acl',array('user_id'=>$user_id));
                    if($this->acl->has_permission('pk_verse_edit')){
                        $data['pk_verse_edit'] = 'true';
                    }
                    if($this->acl->has_permission('pk_verse_add')){
                        $data['pk_verse_add'] = 'true';
                    }
                    if($this->acl->has_permission('pk_verse_setvw')){
                        $data['pk_verse_setvw'] = 'true';
                    }
                }
                $data['updated'] = $this->Verse_model->checkVW($data['verse']->seton);
            
            load_template_view($this,'verses_page',$data);
        }
        /**
         * Selects a verse to be the verse of the week.
         */
        function randIt() {
            $verse = $this->Verse_model->randVerse();
            $this->Verse_model->update_VW($verse['idverse']);
            //edit 
            $this->editVerse($verse['idverse']);
        }
        /**
         * Views a specific verse.
         */
        function viewVerse() {	
		$data['verseinfo'] = $this->Verse_model->getVerse($this->uri->segment(3));
                $data['faciverse'] = $this->Verse_model->getFaci($data['verseinfo']->iduser);
                $user = $this->session->all_userdata();
                $data['user'] = $user;
                $data['content_page'] = 'verse_view';
//                $data['verse'] = $this->Verse_model->get_VerseWeek();
                $data['controller'] = $this->cont_name;
                //check authorization here
                if($user_id = $this->session->userdata('iduser')){
                    $this->load->library('acl',array('user_id'=>$user_id));
                    if($this->acl->has_permission('pk_verse_edit')){
                        $data['pk_verse_edit'] = 'true';
                    }
                    if($this->acl->has_permission('pk_verse_add')){
                        $data['pk_verse_add'] = 'true';
                    }
                    if($this->acl->has_permission('pk_verse_setvw')){
                        $data['pk_verse_setvw'] = 'true';
                    }
                }
                load_template_view($this,'verse_view',$data);
	}
        /**
         * Shows the edit screen of a verse.
         * @param type $id 
         */
	function editVerse($id = 0) {	
                if($id == 0)
                    $data['verseinfo'] = $this->Verse_model->getVerse($this->uri->segment(3));
                else
                    $data['verseinfo'] = $this->Verse_model->getVerse($id);
                $data['faciverse'] = $this->Verse_model->getFaci($data['verseinfo']->idfaci);
                $user = $this->session->all_userdata();
                $data['user'] = $user;
                $data['content_page'] = 'verse_edit';
                $data['faci'] = $this->Verse_model->get_Facis();
                $data['controller'] = $this->cont_name;
                
                if($user_id = $this->session->userdata('iduser')){
                    $this->load->library('acl',array('user_id'=>$user_id));
                    if($this->acl->has_permission('pk_verse_edit')){
                        $data['pk_verse_edit'] = 'true';
                    }
                    if($this->acl->has_permission('pk_verse_add')){
                        $data['pk_verse_add'] = 'true';
                    }
                    if($this->acl->has_permission('pk_verse_setvw')){
                        $data['pk_verse_setvw'] = 'true';
                    }
                }
                load_template_view($this,'verse_edit',$data);
	}
        /**
         * updates the information on a verse, which includes deletion of a verse/set as VW.
         */
	function update() {
            if($this->submit('update')) {
                //either delete or set as verse of the week
                //delete
                if(isset($_POST['checkboxdel'])) {
//                    if(!empty($_POST['checkboxdel'])) {
                        $total = count($_POST['checkboxdel']);
                        for($i=0; $i < $total; $i++)
                        {
                          $this->Verse_model->delVerse($_POST['checkboxdel'][$i]);
                        }
//                    }
                }
                //set as verse of the week
               if(isset($_POST['setVerse'])) {
                   $setVW = $_POST['setVerse'];
                   print_r($_POST['setVerse']);
                   $this->Verse_model->update_VW($setVW);
               }
               //verse_page
                date_default_timezone_set('GMT');
                $ph_time = time() + 8 * 60 * 60; //sets the current time to philippine time
                $this->verseDefault($ph_time);
            } else if($this->submit('randomize')) {
                $this->randIt();
            } else {
//                redirect('/verses');
                //verse_page
                date_default_timezone_set('GMT');
                $ph_time = time() + 8 * 60 * 60; //sets the current time to philippine time
                $this->verseDefault($ph_time);
            }
        }
        /**
         * updates the info on a verse.
         */
	function updateVerse() {
            if($this->submit('update')) {
                if($_POST['seton'] == null) {
                    date_default_timezone_set('GMT');
                    $ph_time = time() + 8 * 60 * 60;
                    $_POST['seton'] = date('Y-m-d H:i',$ph_time);
                }
		$this->Verse_model->update_Verses($_POST['idverse']);
//            } else {
//                redirect(site_url('/verses'));
            }
            //verse_page
            date_default_timezone_set('GMT');
            $ph_time = time() + 8 * 60 * 60; //sets the current time to philippine time
            redirect('verses/viewVerse/'.$_POST['idverse']);
	}
        /**
         * Loads the screen for adding a verse.
         */
        function addVerse() {
                $user = $this->session->all_userdata();
                $data['user'] = $user;
                $data['faci'] = $this->Verse_model->get_Facis();
                $data['controller'] = $this->cont_name;
                 //check authorization here
                if($user_id = $this->session->userdata('iduser')){
                    $this->load->library('acl',array('user_id'=>$user_id));
                    if($this->acl->has_permission('pk_verse_edit')){
                        $data['pk_verse_edit'] = 'true';
                    }
                    if($this->acl->has_permission('pk_verse_add')){
                        $data['pk_verse_add'] = 'true';
                    }
                    if($this->acl->has_permission('pk_verse_setvw')){
                        $data['pk_verse_setvw'] = 'true';
                    }
                }
                load_template_view($this,'verse_add',$data);
        }
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
?>