<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	private $controller_name = 'home';

	function __construct()
	{
		parent::__construct();
		$this->load->model('article_model');
		$this->load->model('main_model');
		$this->load->model('article_model');
		$this->load->model('Verse_model');
		$this->load->model('role_model');
		$this->article_model->init(3);
	}
	
	public function index()
	{
		$userid = $this->session->userdata('iduser');
		if($userid == '')
		{
			$data = array();
			if($result = $this->article_model->get_article_from_url('home')){
				$data['article'] = $result;
			}
			$result = $this->article_model->get_latest_reflection();
			$article = $result['articles'];
			$data['top_story'] = $article;
			$data['view'] = '';
			$data['controller'] = $this->controller_name;
			load_template_view($this,'home_page',$data);
		}
		else
		{
			$role = $this->role_model->get_user_role($userid);
			if($this->main_model->isCurrentFaci($userid) && $role != 1 && $role != 12)
			{
				$name = $this->main_model->get_faci_name($userid);
				$today_time = $this->main_model->get_curtime();
				$start_end_term = $this->main_model->get_start_end_term();
				for($i = 0; $i < 6; $i++)
					$dates[] = $this->main_model->get_date($i);
				$birthdays = $this->main_model->get_birthday_week();
				$term = $start_end_term->term;
				$start = $start_end_term->start_date;
				$end = $start_end_term->end_date;
				$class = $this->main_model->get_class($userid);
				$bs = $this->main_model->get_bible_study($userid);
				$faci_outreach = $this->main_model->get_outreach_activities($userid);
				$com_tasks = $this->main_model->get_committee_tasks($userid);
				$overdue_com_tasks = $this->main_model->get_overdue_committee_tasks($userid);
				$com = $this->main_model->get_committee($userid);
				if($role == 2)
					$com[0]->{'name'} = 'Student Head';
				if($com == null)
					$com[0]->{'name'} = 'Facilitator';
				$birthday = $this->main_model->get_birthday($userid);
				$bday = DateTime::createFromFormat('Y-m-d', $birthday->birthday); $bday1 = $bday->format('m d');
				$datestring = "m d"; $temp = time(); 
				$date = new DateTime();
				$date->setTimezone(new DateTimeZone('Asia/Manila'));
				$date->setTimestamp($temp);
				$today = $date->format('m d');
				if($bday1 == $today)
					$isBirthday = true;
				else
					$isBirthday = false;
				$events = $this->main_model->get_events();
				
				$data = array();
				if($user_id = $this->session->userdata('iduser')){
					$this->load->library('acl',array('user_id'=>$user_id));
					if($this->acl->has_permission('pk_accounts')){
						$data['pk_accounts'] = 'true';
					}
					if($this->acl->has_permission('pk_announcements_add') && $this->acl->has_permission('pk_announcements_update') && $this->acl->has_permission('pk_announcements_delete')){
						$data['pk_announcements'] = 'true';
					}
				}
				$result = $this->article_model->get_latest_reflection();
				$article = $result['articles'];
				
				$data['events'] = $events;
				$data['article'] = $article;
				$data['name'] = $name;
				$data['isBirthday'] = $isBirthday;
				$data['today_time'] = $today_time;
				$data['dates'] = $dates;
				$data['birthdays'] = $birthdays;
				$data['term'] = $term;
				$data['start'] = $start;
				$data['end'] = $end;
				$data['class'] = $class;
				$data['bs'] = $bs;
				$data['faci_outreach'] = $faci_outreach;
				$data['com_tasks'] = $com_tasks;
				$data['overdue_com_tasks'] = $overdue_com_tasks;
				$data['com'] = $com;
				$data['controller'] = $this->controller_name;
				load_template_view($this,'main_page',$data);
			}
			else
			{
				$name = $this->main_model->get_faci_name($userid);
				$today_time = $this->main_model->get_curtime();
				$birthdays = $this->main_model->get_birthday_week();
				$birthday = $this->main_model->get_birthday($userid);
				$bday = DateTime::createFromFormat('Y-m-d', $birthday->birthday); $bday1 = $bday->format('m d');
				$datestring = "m d"; $temp = time(); 
				$date = new DateTime();
				$date->setTimezone(new DateTimeZone('Asia/Manila'));
				$date->setTimestamp($temp);
				$today = $date->format('m d');
				if($bday1 == $today)
					$isBirthday = true;
				else
					$isBirthday = false;
				$events = $this->main_model->get_events();
				
				$data = array();
				if($user_id = $this->session->userdata('iduser')){
					$this->load->library('acl',array('user_id'=>$user_id));
					if($this->acl->has_permission('pk_accounts')){
						$data['pk_accounts'] = 'true';
					}
					if($this->acl->has_permission('pk_announcements_add') && $this->acl->has_permission('pk_announcements_update') && $this->acl->has_permission('pk_announcements_delete')){
						$data['pk_announcements'] = 'true';
					}
				}
				$result = $this->article_model->get_latest_reflection();
				$article = $result['articles'];
				$resultV = $this->Verse_model->get_other_verses(0, 0);
				
				$data['role'] = $role;
				$data['verse'] = $this->Verse_model->get_VerseWeek();
				$data['verses'] = $resultV['verses'];
				$data['events'] = $events;
				$data['article'] = $article;
				$data['name'] = $name;
				$data['isBirthday'] = $isBirthday;
				$data['today_time'] = $today_time;
				$data['birthdays'] = $birthdays;
				$data['controller'] = $this->controller_name;
				load_template_view($this,'main_alumni_page',$data);
			}
		}
	}

	public function admin(){
		$data = array();
		if($result = $this->article_model->get_articles()){
			$data['article'] = $result[0];
		}
		$data['view'] = 'admin';
		$data['content_page'] = 'home_page';
		$data['controller'] = $this->controller_name;

		//check authorization here
		//pk_home_update --- This must be changed to admin
		if($user_id = $this->session->userdata('iduser')){
			$this->load->library('acl',array('user_id'=>$user_id));
			if($this->acl->has_permission('pk_home_update')){
				$data['pk_home_update'] = 'true';
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
		//pk_home_update
		$has_access = false;
		if($user_id = $this->session->userdata('iduser')){
			$this->load->library('acl',array('user_id'=>$user_id));
			if($this->acl->has_permission('pk_home_update')){
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
        redirect("$this->controller_name/admin");
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */