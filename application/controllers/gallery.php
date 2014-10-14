<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends CI_Controller {
    private $cont_name = 'gallery';
    var $gallery_path;
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
//            $this->load->helper(array('form', 'url'));
            $this->gallery_path = realpath(APPPATH . '../images/gallery/original');
            $this->load->database(); 
            $this->load->model('Gallery_model');
			$this->load->model('fb_gallery_model');
			$this->load->model('Facebook_model');
			$this->load->helper('text');
     }
     /**
      * Default view for gallery(shows all albums) & handles creation of an album.
      */
	public function index() {
		try{		
			$albums = $this->Facebook_model->api('formdev/albums');
			$alb = array();
			$pht = array();
			foreach($albums['data'] as $a):
				if($a['name'] != "Timeline Photos" && $a['name'] != "Cover Photos" && 
				   $a['name'] != "FORMDEV Announcements" && $a['name'] != "Profile Pictures")
				{
					$alb[] = $a;
					$photos = $this->Facebook_model->api('/'.$a['id'].'/photos');
					$temp = array();
					$i = 0;
					foreach($photos['data'] as $p):
						if($i<3)
						{	
							$temp[] = $p;
							$i++;
						}
						else
							break;
					endforeach;
					array_push($pht,$temp);
				}
			endforeach;

			$user_id = $this->session->userdata('iduser');
			$this->load->library('acl',array('user_id'=>$user_id));
			if($this->acl->has_permission('pk_gallery'))
			{
				$data['pk_gallery'] = 'true';
			}
			
			if(substr_count(base_url(),'localhost'))
				$data['backup'] = true;
			else
				$data['backup'] = false;
				
			$data['photos'] = $pht;
			$data['albums'] = $alb;
			$user = $this->session->all_userdata();
			$data['user'] = $user;
			$data['content_page'] = 'gallery_page';
			$data['controller'] = $this->cont_name;
			load_template_view($this,'gallery_page',$data);
		}catch(Exception $e)
		{
			$albums = $this->fb_gallery_model->getAlbums();
			$alb = array();
			$pht = array();
			
			foreach($albums as $a):
				$alb[] = array(
							'id' => $a->{'id'},
							'name' => $a->{'name'},
							'count' => $a->{'count'}
						);
				$photos = $this->fb_gallery_model->getPhotos($a->{'id'});
				$temp = array();
				$i = 0;
				foreach($photos as $p):
					if($i<3)
					{	
						$temp[] = isset($p->{'name'}) 
									?
										$photo = array(
													'name' => $p->{'name'},
													'source' => $p->{'source'},
													'album' => $a->{'id'}
												)
									:
										$photo = array(
													'name' => null,
													'source' => $p->{'source'},
													'album' => $a->{'id'}
												);
						$i++;
					}
					else
						break;
				endforeach;
				array_push($pht,$temp);
			endforeach;

			$user_id = $this->session->userdata('iduser');
			$this->load->library('acl',array('user_id'=>$user_id));
			if($this->acl->has_permission('pk_gallery'))
			{
				$data['pk_gallery'] = 'true';
			}
			
			$data['backup'] = false;	
			$data['photos'] = $pht;
			$data['albums'] = $alb;
			$user = $this->session->all_userdata();
			$data['user'] = $user;
			$data['content_page'] = 'gallery_page';
			$data['controller'] = $this->cont_name;
			
			load_template_view($this,'gallery_page',$data);
		}

		//$this->output->cache(720);
	}
	
	public function refresh() {
	
	delete_files('./application/cache/');
	
	redirect('gallery','refresh');
	
	}
            
     /**
      * Loads a display for viewing an album.
      */
     public function album($aid="") {
		if(isset($aid) && $aid!='')
		{
			try
			{
			 	$photos = $this->Facebook_model->api('/'.$aid.'/photos');
				
				$pht = array();
				foreach($photos['data'] as $p):
					$pht[] = $p;
				endforeach;
			
				$data['photos'] = $pht;
				
		        $user = $this->session->all_userdata();
		        $data['user'] = $user;
		        $data['content_page'] = 'gallery_view';
		        $data['controller'] = $this->cont_name;

		        //check authorization here
		        //gallery

		        load_template_view($this,'gallery_view',$data);
			}catch(Exception $e)
			{
				$photos = $this->fb_gallery_model->getPhotos($aid);
				
				$pht = array();
				foreach($photos as $p):
					$pht[] = isset($p->{'name'}) 
							?
								$photo = array(
											'name' => $p->{'name'},
											'source' => $p->{'source'},
											'album' => $aid
										)
							:
								$photo = array(
											'name' => null,
											'source' => $p->{'source'},
											'album' => $aid
										);
				endforeach;
			
				$data['photos'] = $pht;
				
		        $user = $this->session->all_userdata();
		        $data['user'] = $user;
		        $data['content_page'] = 'gallery_view';
		        $data['controller'] = $this->cont_name;

		        //check authorization here
		        //gallery

		        load_template_view($this,'gallery_view',$data);
			}
		}
		else
		{
			redirect('gallery','refresh');
		}
		
    }
	
	public function update_backup(){
		$albums = $this->Facebook_model->api('formdev/albums');
		$alb = array();
		$pht = array();
		foreach($albums['data'] as $a):
			if($a['name'] != "Timeline Photos" && $a['name'] != "Cover Photos" && 
			   $a['name'] != "FORMDEV Announcements" && $a['name'] != "Profile Pictures")
			{
				$album = array(
							'id' => $a['id'],
							'name' => $a['name'],
							'count' => $a['count'],
							'updated_time' => $a['updated_time']
						);
				$alb[] = $album;
				
				$photos = $this->Facebook_model->api('/'.$a['id'].'/photos');
				
				
				foreach($photos['data'] as $p)
				{
					$tag = "";
					if(isset($p['tags']))
					{
						foreach($p['tags']['data'] as $person)
						{
							$tag = $tag.$person['name'].";";
						}
					}
					if(isset($p['name']))
					{
						$photo = array(
									'name' => $p['name'],
									'source' => $p['source'],
									'album' => $a['id'],
									'tags' => NULL
								);
						if($tag != "")
						{
							$photo['tags'] = $tag;
						}
					}
					else
					{
						$photo = array(
									'source' => $p['source'],
									'album' => $a['id'],
									'tags' => NULL
								);
						if($tag != "")
						{
							$photo['tags'] = $tag;
						}
					}
					array_push($pht,$photo);
				}
			}
		endforeach;
		
		$this->fb_gallery_model->update_backup($alb,$pht);
		redirect('gallery','refresh');
	}
    
}
?>