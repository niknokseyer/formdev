<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Events extends CI_Controller {
	private $cont_name = 'events';
	
	
		function __construct()
	{
	parent::__construct();
	
	$this->load->database(); 
	$this->load->model('events_model');
	$this->load->model('article_model');
	$this->load->model('user_model');
	$this->load->model('role_model');
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

	public function index(){
		$user_id = $this->session->userdata('iduser');
		if($user_id != null)
		{
			$this->load->library('acl',array('user_id'=>$user_id));
			$isAdmin = true;
			if($isAdmin)
			{
				$old_events = $this->events_model->get_old_events();
				$cf_events = $this->events_model->get_current_future_events();
				$role = $this->role_model->get_user_role($user_id);
				
				$event_user_info = array(
					'userid' => $user_id,
					'role' => $role
				);
				
				$data = array();
				$data['event_user_info'] = $event_user_info;
				$data['old_events'] = $old_events;
				$data['cf_events'] = $cf_events;
				$data['controller'] = $this->cont_name;
				load_template_view($this,'events_page',$data);
			}
			else
				redirect('/home/','refresh');
		}
		else
			redirect('/home/','refresh');
	}
	
	public function add(){
		$user_id = $this->session->userdata('iduser');
		if($user_id != null)
		{
			$this->load->library('acl',array('user_id'=>$user_id));
			$isAdmin = true;
			if($isAdmin)
			{
				if($this->input->post('event') != '' && $this->input->post('event') != null)
				{
					if($this->input->post('all_day') != null)
					{
						$time_str = '00:00:00';
						if($this->input->post('announcement') != null)
						{
							$time_str1 = '. It is an all day event';
							if($this->input->post('venue') != null)
								$venue_str = ' that will be held at '.$this->input->post('venue').'.</p><p>See you there. God bless!';
							else
								$venue_str = '.</p><p>God bless!';
						}
					}
					else
					{
						$time_str = $this->input->post('hour').':'.$this->input->post('min').':00';
						if($this->input->post('announcement') != null)
						{
							$time = DateTime::createFromFormat('H:i:s', $time_str);
							$time_str1 = ' at '.$time->format('g:i A').'.';
							if($this->input->post('venue') != null)
								$venue_str = 'It will be held at '.$this->input->post('venue').'.</p><p>See you there. God bless!';
							else
								$venue_str = '</p><p>God bless!';
						}
					}
					
					if($this->input->post('announcement') != null)
					{
						$date = DateTime::createFromFormat('Y-m-d', $this->input->post('date'));
						$date_str = $date->format('F j, Y');
						$starters = array('Mark your calendars:','Save the date:','Block off this date/s on your calendars:','Announcing a new event:');
						$id_s = array_rand($starters);
						$content = '<p>'.$starters[$id_s].' the '.$this->input->post('event').' will be on '.$date_str.$time_str1.$venue_str.'</p>';
						$summary = $this->article_model->generate_summary($content);
						$title = $this->input->post('event');
						$url_title = $this->article_model->generate_slug($title,-1);
						date_default_timezone_set('GMT');
						$ph_time = time() + 8 * 60 * 60; //sets the current time to philippine time
						
						$new_article = array (
							'iduser'=> $user_id,
							'title'=> $title,
							'datetime'=> date('Y-m-d H:i:s',$ph_time),
							'content'=>$content,
							'summary'=>$summary,
							'edited_date'=>date('Y-m-d H:i:s',$ph_time),
							'url_title'=>$url_title,
							'idtype'=> 2
						);
						
						$q = $this->events_model->insert_announcement($new_article);
					}
					
					$new_event = array(
						'event' => $this->input->post('event'),
						'date' => $this->input->post('date'),
						'all_day' => $this->input->post('all_day'),
						'time' => $time_str,
						'venue' => $this->input->post('venue'),
						'posted_by' => $user_id
					);
					
					if($this->input->post('announcement') != null)
						$new_event['announcement'] = $q;
					
					$this->events_model->add_event($new_event);
				}
				redirect('/events/','refresh');
			}
			else
			{
				$data = array();
				$data['controller'] = 'error';
				$data['message'] = "You are not authorized to manage this page.";
				load_template_view($this,'error_page',$data);
			}
		}
		else
			redirect('/home/','refresh');
	}
	
	public function delete($id){
		$user_id = $this->session->userdata('iduser');
		if($user_id != null)
		{
			$faci = $this->events_model->get_poster($id);
			$role = $this->role_model->get_user_role($user_id);
			
			if($role == 1 || $role == 2 || $role == 13)
				$isAdmin = true;
			else if($faci[0]->{'posted_by'} == $user_id)
				$isAdmin = true;
			else
				$isAdmin = false;
			
			if($isAdmin)
			{
				if($this->events_model->isValid($id))
				{
					if(($a_id = $this->events_model->wasAnnounced($id)) > 0)
						$this->events_model->delete_announcement($a_id);
					else
						$this->events_model->delete_event($id);
				}
				redirect('/events/','refresh');
			}
			else
			{
				$data = array();
				$data['controller'] = 'error';
				$data['message'] = "You are not authorized to delete this event.";
				load_template_view($this,'error_page',$data);
			}
		}
		else
			redirect('/home/','refresh');
	}
	
	public function edit($id){
		$user_id = $this->session->userdata('iduser');
		if($user_id != null)
		{
			$faci = $this->events_model->get_poster($id);
			$role = $this->role_model->get_user_role($user_id);
			
			if($role == 1 || $role == 2 || $role == 13)
				$isAdmin = true;
			else if($faci[0]->{'posted_by'} == $user_id)
				$isAdmin = true;
			else
				$isAdmin = false;
			
			if($isAdmin)
			{
				if($this->events_model->isValid($id))
				{
					$event_info = $this->events_model->get_event($id);
					
					$data = array();
					$data['event_info'] = $event_info;
					$data['controller'] = 'events';
					load_template_view($this,'events_edit',$data);
				}
				else
					redirect('/events/','refresh');
			}
			else
			{
				$data = array();
				$data['controller'] = 'error';
				$data['message'] = "You are not authorized to edit this event.";
				load_template_view($this,'error_page',$data);
			}
		}
		else
			redirect('/home/','refresh');
	}
	
	public function update(){
		$user_id = $this->session->userdata('iduser');
		if($user_id != null)
		{
			$id = $this->input->post('id');
			$faci = $this->events_model->get_poster($id);
			$role = $this->role_model->get_user_role($user_id);
			
			if($role == 1 || $role == 2 || $role == 13)
				$isAdmin = true;
			else if($faci[0]->{'posted_by'} == $user_id)
				$isAdmin = true;
			else
				$isAdmin = false;
			
			if($isAdmin)
			{
				if($this->input->post('event') != '' && $this->input->post('event') != null)
				{
					if($this->events_model->isValid($id))
					{
						if($this->input->post('all_day') != null)
						{
							$time_str = '00:00:00';
							if($this->input->post('announcement') != null)
							{
								$time_str1 = '. It is an all day event';
								if($this->input->post('venue') != null)
									$venue_str = ' that will be held at '.$this->input->post('venue').'.</p><p>See you there. God bless!';
								else
									$venue_str = '.</p><p>God bless!';
							}
						}
						else
						{
							$time_str = $this->input->post('hour').':'.$this->input->post('min').':00';
							if($this->input->post('announcement') != null)
							{
								$time = DateTime::createFromFormat('H:i:s', $time_str);
								$time_str1 = ' at '.$time->format('g:i A').'.';
								if($this->input->post('venue') != null)
									$venue_str = 'It will be held at '.$this->input->post('venue').'.</p><p>See you there. God bless!';
								else
									$venue_str = '</p><p>God bless!';
							}
						}
						
						if($this->input->post('announcement') != null)
						{
							$date = DateTime::createFromFormat('Y-m-d', $this->input->post('date'));
							$date_str = $date->format('F j, Y');
							$starters = array('Mark your calendars:','Save the date:','Block off this date/s on your calendars:','Announcing a new event:');
							$id_s = array_rand($starters);
							$content = '<p>'.$starters[$id_s].' the '.$this->input->post('event').' will be on '.$date_str.$time_str1.$venue_str.'</p>';
							$summary = $this->article_model->generate_summary($content);
							$title = $this->input->post('event');
							$url_title = $this->article_model->generate_slug($title,-1);
							date_default_timezone_set('GMT');
							$ph_time = time() + 8 * 60 * 60; //sets the current time to philippine time
							
							$new_article = array (
								'iduser'=> $user_id,
								'title'=> $title,
								'content'=>$content,
								'summary'=>$summary,
								'edited_date'=>date('Y-m-d H:i:s',$ph_time),
								'url_title'=>$url_title
							);
							
							$this->events_model->update_announcement($this->input->post('announcement'),$new_article);
						}
						
						$new_event = array(
							'event' => $this->input->post('event'),
							'date' => $this->input->post('date'),
							'all_day' => $this->input->post('all_day'),
							'time' => $time_str,
							'venue' => $this->input->post('venue')
						);
						
						$this->events_model->update_event($id,$new_event);
					}
				}
				redirect('/events/','refresh');
			}
			else
			{
				$data = array();
				$data['controller'] = 'error';
				$data['message'] = "You are not authorized to edit this event.";
				load_template_view($this,'error_page',$data);
			}
		}
		else
			redirect('/home/','refresh');
	}
}