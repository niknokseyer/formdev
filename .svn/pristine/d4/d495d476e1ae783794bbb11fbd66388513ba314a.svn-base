<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class events_model extends CI_Model {
	
	function __construct() {
        parent::__construct();
    }
	
	function get_current_future_events() {
		$this->db->select('*');
		$this->db->from('events');
		$this->db->where('date > CURDATE() OR (date = CURDATE() AND (HOUR(time) >= HOUR(CURTIME())-1 OR all_day = 1))');
		$this->db->order_by('date asc, time asc');
		$query = $this->db->get();
		return $query->result();
	}
	
	function get_old_events() {
		$this->db->select('*');
		$this->db->from('events');
		$this->db->where('date < CURDATE() OR (date = CURDATE() AND HOUR(time) < HOUR(CURTIME())-1 AND all_day = 0)');
		$this->db->order_by('date desc, time desc');
		$query = $this->db->get();
		return $query->result();
	}
	
	function get_event($id) {
		$this->db->select('*');
		$this->db->from('events');
		$this->db->where('idevents',$id);
		$query = $this->db->get();
		return $query->result();
	}
	
	function get_poster($id){
		$this->db->select('posted_by');
		$this->db->from('events');
		$this->db->where('idevents',$id);
		$query = $this->db->get();
		return $query->result();
	}
	
	function add_event($data){
		$this->db->insert('events',$data);
	}
	
	function delete_event($id){
		$this->db->where('idevents',$id);
		$this->db->delete('events');
	}
	
	function delete_announcement($id){
		$this->db->where('idarticle',$id);
		$this->db->delete('articles');
	}
	
	function insert_announcement($article){
		$q = $this->db->insert('articles', $article);
		return $this->db->insert_id();
	}
	
	function update_event($id,$data){
		$this->db->where('idevents',$id);
		$this->db->update('events',$data);
	}
	
	function update_announcement($id,$article){
		$this->db->where('idarticle',$id);
		$this->db->update('articles',$article);
	}
	
	public function isValid($id)
	{
		$sql = 'SELECT IF((SELECT COUNT(*) FROM events WHERE idevents = '.$id.') = 1 ,true,false) as isValid;';
		$query = $this->db->query($sql);
		$q = $query->result();
		if($q[0]->{'isValid'})
			return true;
		else
			return false;
	}
	
	public function wasAnnounced($id)
	{
		$sql = 'SELECT IF((SELECT announcement FROM events WHERE idevents = '.$id.'),(SELECT announcement FROM events WHERE idevents = '.$id.'),false) as isValid;';
		$query = $this->db->query($sql);
		$q = $query->result();
		return $q[0]->{'isValid'};
	}
	
}
?>