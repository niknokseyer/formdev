<?php

class ReflectionModel extends CI_Model {
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
	
	function get_Reflections()
    {
		$query = $this->db->get('reflection');
        return $query->result_array();
    }	
	
	function insert_Reflections() {
		//$this->load->library('typography');
		
		$string = htmlspecialchars($_POST['message'], ENT_QUOTES);
		$string = $this->typography->auto_typography($string);
		$data = array (
			'iduser'=>$_POST['iduser'],
			'title'=>$_POST['title'],
			'message'=>$string
		);
		$this->db->insert('reflection', $data);
		redirect('/reflections');
	}
	
	function delete_Reflections($id) {		
		$this->db->where('idreflection', $id);	
		$this->db->delete('reflection');
		redirect('/reflections');
	}
	
	function update_Reflections($id) {
		$data = array (
		'title' => $_POST['title'],
		'message'=>$_POST['message']
		);
		$this->db->where('idreflection', $id);
		$this->db->update('reflection', $data);
		redirect('/reflections');
	}
}
?>