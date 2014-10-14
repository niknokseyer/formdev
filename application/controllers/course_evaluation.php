<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class course_evaluation extends CI_Controller {
	private $cont_name = 'course_evaluation';
	
	
		function __construct()
	{
	parent::__construct();
	
	$this->load->database(); 
	$this->load->model('courseeval_model');
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
	
	
	public function index()	 {
		$userid = $this->session->userdata('iduser');
		if($userid != '')
		{
			$data = array();
			$percentages = array();
			$scores = array();
			$prev_scores = array();
			
			$eval = $this->courseeval_model->get_recent_course_eval();
			if($eval != null)
			{
				$year = $eval[0]->{'start_year'};
				$term = $eval[0]->{'term'};
				if($term == 2)
				{
					$prev_term = 3;
					$prev_year = $year-1;
				}
				else
				{
					$prev_term = 2;
					$prev_year = $year;
				}
			
				for($i=1; $i<25; $i++)
				{
					$perc = array();
					for($j=0; $j<4; $j++)
						if($i < 18)
						{	$p = $this->courseeval_model->get_percent_criterion($i,$j,$year,$term);
							if($i != 2 && $j == 0)
							{
								$ws = $this->courseeval_model->get_wsum_criterion($i,$year,$term);
								$ps = $this->courseeval_model->get_prev_score($i,$prev_term,$prev_year);
							}
							$perc[] = $p[0]->{'perc'};
						}
						else
						{
							if($i == 18)
								$p = $this->courseeval_model->get_percent_criterion('18a',$j,$year,$term);
							else if($i == 19)
								$p = $this->courseeval_model->get_percent_criterion('18b',$j,$year,$term);
							else
							{
								$p = $this->courseeval_model->get_percent_criterion(($i-1),$j,$year,$term);
								if($j == 0)
								{
									$ws = $this->courseeval_model->get_wsum_criterion(($i-1),$year,$term);
									$ps = $this->courseeval_model->get_prev_score(($i-1),$prev_term,$prev_year);
								}
							}
							$perc[] = $p[0]->{'perc'};
						}
					$percentages[] = $perc;
					if($i != 2 && $i != 18 && $i != 19)
					{
						$scores[] = $ws[0]->{'score'};
						$prev_scores[] = $ps;
					}
					else
					{
						$scores[] = 0;
						$prev_scores[] = 0;
					}
				}
			}
			else
			{
				$prev_scores = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
				$scores = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
				for($i = 0; $i < 24; $i++)
				{
					for($j = 0; $j < 4; $j++)
						$perc[] = 0;
					$percentages[] = $perc;
				}
				
			}
			if($eval != null)
			{
				$data['start_year'] = $eval[0]->{'start_year'};
				$data['term'] = $eval[0]->{'term'};
			}
			else
			{
				$data['start_year'] = '';
				$data['term'] = '';
			}
			$data['prev_scores'] = $prev_scores;
			$data['percentages'] = $percentages;
			$data['scores'] = $scores;
			$data['controller'] = $this->cont_name;
			load_template_view($this,'courseeval_view',$data);
		}
		else
		{
		    $data = array();
            $data['controller'] = 'error';
			$data['message'] = "You are not authorized to manage this page.";
            load_template_view($this,'error_page',$data);
		}
	}
	
	public function view_progress($i=''){
		$userid = $this->session->userdata('iduser');
		if($userid != '')
		{
			if($i == '')
				$i = 1;
			if($i >= 1 && $i <= 6)
			{
				switch($i)
				{
					case 1: $start = 1; $end = 3; $category = 'Lectures'; break;
					case 2: $start = 4; $end = 7; $category = 'Activities'; break;
					case 3: $start = 8; $end = 10; $category = 'Group Discussions'; break;
					case 4: $start = 11; $end = 13; $category = 'Workbook / Assignments'; break;
					case 5: $start = 14; $end = 14; $category = 'Outreach'; break;
					case 6: $start = 15; $end = 24; $category = 'Becoming A Lasallian'; break;
				}
				
				for($j = $start; $j <= $end; $j++)
				{
					if($j < 18)
					{
						$scores[] = $this->courseeval_model->get_consolidated_scores_criterion($j);
						$questions[] = $this->courseeval_model->get_question($j);
						$items[] = $j;
					}
					else if($j == 18)
					{
						//$scores[] = $this->courseeval_model->get_consolidated_scores_criterion('18a');
						//$questions[] = $this->courseeval_model->get_question('18a');
						//$items[] = '18a';
					}
					else if($j == 19)
					{
						//$scores[] = $this->courseeval_model->get_consolidated_scores_criterion('18b');
						//$questions[] = $this->courseeval_model->get_question('18b');
						//$items[] = '18b';
					}
					else if($j > 19)
					{
						$scores[] = $this->courseeval_model->get_consolidated_scores_criterion(($j-1));
						$questions[] = $this->courseeval_model->get_question(($j-1));
						$items[] = ($j-1);
					}
				}
				
				$data['category'] = $category;
				$data['questions'] = $questions;
				$data['page'] = $i;
				$data['items'] = $items;
				$data['scores'] = $scores;
				$data['controller'] = $this->cont_name;
				load_template_view($this,'courseeval_viewprogress',$data);
			}
			else
				redirect('course_evaluation/view_progress');
		}
		else
		{
		    $data = array();
            $data['controller'] = 'error';
			$data['message'] = "You are not authorized to manage this page.";
            load_template_view($this,'error_page',$data);
		}
	}
	
	public function add() {
		$userid = $this->session->userdata('iduser');
		if($userid != '')
		{
			if($this->input->post('total_record') != null && $this->input->post('total_record') != 0)
			{
				for($j = 1; $j <= 24; $j++)
				{
					if($j < 18)
						$questions[] = $this->courseeval_model->get_question($j);
					else if($j == 18)
						$questions[] = $this->courseeval_model->get_question('18a');
					else if($j == 19)
						$questions[] = $this->courseeval_model->get_question('18b');
					else if($j > 19)
						$questions[] = $this->courseeval_model->get_question(($j-1));
				}
				
				$data['questions'] = $questions;
				$data['total'] = $this->input->post('total_record');
				$data['start_year'] = $this->input->post('year');
				$data['term'] = $this->input->post('term');
				$data['section'] = $this->input->post('section');
				$data['controller'] = $this->cont_name.'_1';
				load_template_view($this,'courseeval_addData',$data);
			}
			else
			{
				$temp = time(); 
				$date = new DateTime();
				$date->setTimezone(new DateTimeZone('Asia/Manila'));
				$date->setTimestamp($temp);
				$this_year = $date->format('Y');
				$month = $date->format('m');
				if($month >= 5 && $month <= 8)
				{
					$data = array();
		            $data['controller'] = 'error';
					$data['message'] = "Oops! Sorry! The \"Add Course Evaluation Data\" Facility is closed for the 1st Term.";
		            load_template_view($this,'error_page',$data);
				}
				else
				{
					$role = $this->role_model->get_user_role($userid);
					if($month < 5)
					{
						$term = 3;
						$this_year = $this_year - 1;
					}
					else
						$term = 2;
					if($role == 1 || $role == 2)
						$data['submissions'] = $this->courseeval_model->get_term_submissions($this_year,$term);
					else
					{
						if(($section = $this->courseeval_model->isClassFaci($userid)))
						{	
							$temp = $this->courseeval_model->get_class_term_submissions($section,$this_year,$term);
							$temp1 = $this->courseeval_model->get_faci_term_submissions($userid,$this_year,$term);
							foreach($temp1 as $t)
								if($t->section != $section)
									array_push($temp,$t);
							$data['submissions'] = $temp;
						}
						else
							$data['submissions'] = $this->courseeval_model->get_faci_term_submissions($userid,$this_year,$term);
					}
					$data['classes'] = $this->courseeval_model->get_term_classes();
					$data['this_year'] = $this_year;
					$data['month'] = $month;
					$data['controller'] = $this->cont_name.'_1';
					load_template_view($this,'courseeval_add',$data);
				}
			}
		}
		else
		{
		    $data = array();
            $data['controller'] = 'error';
			$data['message'] = "You are not authorized to manage this page.";
            load_template_view($this,'error_page',$data);
		}
	}
	
	public function addData() {
		$userid = $this->session->userdata('iduser');
		if($userid != '')
		{
			if($this->input->post('start_year') != null && $this->input->post('term') != null)
			{
				$temp = time(); 
				$date = new DateTime();
				$date->setTimezone(new DateTimeZone('Asia/Manila'));
				$date->setTimestamp($temp);
				
				for($i = 3; $i > -1; $i--)
				{
					$new_data['value'] = $i;
					for($j = 1; $j < 25; $j++)
					{
						if($j < 18)
						{
							$q = 'q'.$j;
							$col_name = $j.'_'.$i;
						}
						else if($j == 18)
						{
							$q = 'q18a';
							$col_name = '18a_'.$i;
						}
						else if($j == 19)
						{
							$q = 'q18b';
							$col_name = '18b_'.$i;
						}
						else if($j > 19)
						{
							$q = 'q'.($j-1);
							$col_name = ($j-1).'_'.$i;
						}
						$new_data[$q] = $this->input->post($col_name);
					}
					
					$new_data['section'] = $this->input->post('section');
					$new_data['start_year'] = $this->input->post('start_year');
					$new_data['term'] = $this->input->post('term');
					$new_data['faci'] = $userid;
					$new_data['submission_time'] = $date->format('Y-m-d H:i:s');
					
					$this->courseeval_model->addData($new_data);
				}
			}
			redirect('course_evaluation','refresh');
		}
		else
		{
		    $data = array();
            $data['controller'] = 'error';
			$data['message'] = "You are not authorized to manage this page.";
            load_template_view($this,'error_page',$data);
		}
	}
	
	public function delete()
	{
		$userid = $this->session->userdata('iduser');
		if($userid != '')
		{
			if($this->input->post('submission_time') != null && $this->input->post('submission_time') != '')
			{
				$sy = $this->input->post('start_year');
				$term = $this->input->post('term');
				$section = $this->input->post('section');
				$faci = $this->input->post('faci');
				$st = $this->input->post('submission_time');
				$role = $this->role_model->get_user_role($userid);
				
				if($role == 1 || $role == 2)
					$this->courseeval_model->deleteData($sy,$term,$section,$faci,$st);
				else
				{
					if(($s = $this->courseeval_model->isClassFaci($userid)))
					{
						if($section == $s || $faci == $userid)
							$this->courseeval_model->deleteData($sy,$term,$section,$faci,$st);
					}
					else
					{
						if($faci == $userid)
							$this->courseeval_model->deleteData($sy,$term,$section,$faci,$st);
					}
				}
			}
		}
		redirect('course_evaluation/add','refresh');
	}
}