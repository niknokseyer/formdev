<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class fb_gallery_model extends CI_Model {
	
	function __construct() {
        parent::__construct();
    }
	
	function getAlbums(){
		$this->db->select('*');
		$this->db->from('albums');
		$this->db->order_by('updated_time desc');
		$query = $this->db->get();
	    return $query->result();
	}
	
	function getPhotos($album){
		$this->db->select('*');
		$this->db->from('photos');
		$this->db->where('album',$album);
		$query = $this->db->get();
	    return $query->result();
	}
	
	function getPhotosByTags($tags){
		
		$query = $this->db->query("SELECT source FROM photos WHERE ".$tags);
	    return $query->result();
	}
	
	function update_backup($data_albums,$data_photos) {
		$this->db->truncate('photos');
		
		$this->db->select('*');
		$this->db->from('albums');
		$query = $this->db->get();
	    $result = $query->result();
		
		foreach($result as $r)
		{
			$this->db->where('id',$r->{'id'});
			$this->db->delete('albums');
		}
		
		foreach($data_albums as $da)
			$this->db->insert('albums',$da);
		foreach($data_photos as $dp)
			$this->db->insert('photos',$dp);
	}
}
?>