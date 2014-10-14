<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class announcement_model extends CI_Model {
    function __construct()
    {
        parent::__construct();
    }
	
    function get_announcements($order='asc', $num_records=-1, $offset=0)
    {
        $this->db->order_by("datetime", $order); 
        
        if($num_records == -1){
            $query = $this->db->get('announcement');
        }
        else{
            $query = $this->db->get('announcement',$num_records, $offset);
        }
        return $query->result();
    }
    
    function get_announcement($id){
        $this->db->where('idannouncement', $id);
        $query = $this->db->get('announcement');
        return $query->result();
    }
    
    function insert_announcement($new_announcement) {		
	$this->db->insert('announcement', $new_announcement);	
//	redirect('/announcements');
    }
	
    function delete_announcement($id) {		
    	$this->db->where('idannouncement', $id);	
	$this->db->delete('announcement');
//	redirect('/announcements');
    }
	
    function update_announcement($id, $updated_announcement) {
//	$data = array ('iduser'=>$_POST['iduser'],'role'=>1,'message'=>$_POST['message'],);
	$this->db->where('idannouncement', $id);
	$this->db->update('announcement', $updated_announcement);
//	redirect('/announcements');
    }
}
?>