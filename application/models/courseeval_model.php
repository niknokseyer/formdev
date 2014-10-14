<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class courseeval_model extends CI_Model {
	
	function __construct() {
        parent::__construct();
    }
	
	function get_all_course_eval() {
		$this->db->select('*');
		$this->db->from('course_eval');
		$query = $this->db->get();
	    return $query->result();
    }	
	
	function get_recent_course_eval() {
		$this->db->select('idcourse_eval,start_year,term');
		$this->db->from('course_eval');
		$this->db->order_by('start_year desc, term desc');
		$query = $this->db->get();
		$q = $query->result();
		if($q != null)
	    {
			$sy = $q[0]->{'start_year'};
			$term = $q[0]->{'term'};
			
			$this->db->select('*');
			$this->db->from('course_eval');
			$this->db->where('start_year',$sy);
			$this->db->where('term',$term);
			$query = $this->db->get();
		    return $query->result();
		}
		else
			return null;
    }
	
	function get_consolidated_scores_criterion($q){
		$this->db->select('q'.$q.' as q,start_year,term');
		$this->db->from('consolidated_eval_scores');
		$query = $this->db->get();
		return $query->result();
	}
	
	function get_question($q){
		$this->db->select('question');
		$this->db->from('course_eval_questions');
		$this->db->where('id_question',$q);
		$query = $this->db->get();
		$q = $query->result();
		return $q[0]->{'question'};
	}
	
	function get_yearterm() {
		$this->db->select('start_year, term');
		$this->db->from('tbl_terms');
		$query = $this->db->get();
	    return $query->result();
    }	
	
	function get_prev_score($q,$pt,$py) {
		$this->db->select('q'.$q);
		$this->db->from('consolidated_eval_scores');
		$this->db->where('start_year', $py);
		$this->db->where('term', $pt);
		$query = $this->db->get();
		$r = $query->result();
	    return $r[0]->{'q'.$q};
	}
	
	function get_wsum_criterion($q,$sy,$term) {
		$sql = 'SELECT ws.weighted_sum/SUM(c.q'.$q.') AS score FROM course_eval c, (SELECT (b.weighted_sum2 + (c1.value * SUM(c1.q'.$q.'))) AS weighted_sum FROM course_eval c1, (SELECT (a.weighted_sum3 + (c2.value * SUM(c2.q'.$q.'))) AS weighted_sum2 FROM course_eval c2, (SELECT (c3.value * SUM(c3.q'.$q.')) AS weighted_sum3 FROM course_eval c3 WHERE value = 3 AND start_year = '.$sy.' AND term = '.$term.') a WHERE value = 2 AND start_year = '.$sy.' AND term = '.$term.') b WHERE value = 1 AND start_year = '.$sy.' AND term = '.$term.') ws WHERE start_year = '.$sy.' AND term = '.$term.';';
		$query = $this->db->query($sql);
	    return $query->result();
	}
	
	function get_percent_criterion($q,$val,$sy,$term) {
		$sql = 'SELECT ((SUM(c.q'.$q.') / s.total)*100) AS perc FROM course_eval c, (SELECT SUM(q'.$q.') AS total FROM course_eval WHERE start_year = '.$sy.' AND term = '.$term.') s WHERE c.value = '.$val.' AND start_year = '.$sy.' AND term = '.$term.';';
		
		$query = $this->db->query($sql);
		return $query->result();
	}
	
	function get_term_classes(){
		$this->db->select('section');
		$this->db->from('tbl_class');
		$query = $this->db->get();
		return $query->result();
	}
	
	function get_term_submissions($year,$term){
		$this->db->select('c.submission_time,c.section,c.start_year,c.term,c.faci,f.nickname');
		$this->db->from('course_eval c, user u, facilitators f');
		$this->db->where('c.start_year',$year);
		$this->db->where('c.term',$term);
		$this->db->where('c.faci = u.iduser');
		$this->db->where('u.idprofile = f.id');
		$this->db->distinct();
		$query = $this->db->get();
		return $query->result();
	}
	
	function get_faci_term_submissions($faci,$year,$term){
		$this->db->select('c.submission_time,c.section,c.start_year,c.term,c.faci,f.nickname');
		$this->db->from('course_eval c, user u, facilitators f');
		$this->db->where('c.start_year',$year);
		$this->db->where('c.term',$term);
		$this->db->where('c.faci',$faci);
		$this->db->where('c.faci = u.iduser');
		$this->db->where('u.idprofile = f.id');
		$this->db->distinct();
		$query = $this->db->get();
		return $query->result();
	}
	
	function get_class_term_submissions($section,$year,$term){
		$this->db->select('c.submission_time,c.section,c.start_year,c.term,c.faci,f.nickname');
		$this->db->from('course_eval c, user u, facilitators f');
		$this->db->where('c.start_year',$year);
		$this->db->where('c.term',$term);
		$this->db->where('c.section',$section);
		$this->db->where('c.faci = u.iduser');
		$this->db->where('u.idprofile = f.id');
		$this->db->distinct();
		$query = $this->db->get();
		return $query->result();
	}
	
	function isClassFaci($faci){
		$sql = 'SELECT IF((SELECT type FROM tbl_class_faci, user u WHERE u.iduser = '.$faci.' AND faci = u.idprofile) = \'Class Faci\', (SELECT section FROM tbl_class c, tbl_class_faci cf, user u WHERE u.iduser = '.$faci.' AND faci = u.idprofile AND cf.class = c.id),false) as section';
		$query = $this->db->query($sql);
		$q = $query->result();
		return $q[0]->{'section'};
	}
	
	function addData($data) {
		$this->db->insert('course_eval',$data);
	}
	
	function deleteData($sy,$term,$section,$faci,$st){
		$this->db->where('start_year',$sy);
		$this->db->where('term',$term);
		$this->db->where('section',$section);
		$this->db->where('faci',$faci);
		$this->db->where('submission_time',$st);
		$this->db->delete('course_eval');
	}
}
?>