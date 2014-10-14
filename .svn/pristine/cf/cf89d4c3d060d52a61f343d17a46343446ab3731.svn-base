<?php
class File_model extends CI_Model {
	
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
	
	function get_files()
	{
	
	$this->db->select('file.*,filegroup.group_name,facilitators.firstname');
    $this->db->from('file');
	$this->db->join('filegroup', 'file.groupid = filegroup.groupid');
	$this->db->join('user', 'user.iduser = file.iduser');
	$this->db->join('facilitators', 'facilitators.id = user.idprofile');
	$this->db->order_by('file.groupid');
	$this->db->order_by('file.list_order');
	$query = $this->db->get();
	
	return $query->result_array();
	
	}
	
	function get_filenames()
	{
	
	$this->db->select('file.filename');
    $this->db->from('file');
	$query = $this->db->get();
	
	return $query->result_array();
	
	}
	
	function get_group_files($gid)
	{
	
	$this->db->select('file.idfile,file.list_order');
    $this->db->from('file');
	$this->db->where('groupid', $gid);
	$this->db->order_by('file.list_order');
	$query = $this->db->get();
	
	return $query->result_array();
	
	}
	
	function get_groupid($id)
	{
	
	$this->db->select('file.groupid');
    $this->db->from('file');
	$this->db->where('idfile', $id);
	$this->db->order_by('file.list_order');
	$query = $this->db->get();
	
	return $query->result_array();
	
	}
	
	function get_listorder($id)
	{
	
	$this->db->select('file.list_order');
    $this->db->from('file');
	$this->db->where('idfile', $id);
	$query = $this->db->get();
	
	return $query->result_array();
	
	}
	
	function get_count_group_files($gid)
	{
	
	$this->db->select('COUNT(*)');
    $this->db->from('file');
	$this->db->where('groupid', $gid);
	$this->db->order_by('file.list_order');
	$query = $this->db->get();
	
	return $query->result_array();
	
	}
	
	function add_download($download,$idfile)
	{
		$this->db->set('download',$download+1);
		$this->db->where('idfile', $idfile);
		$this->db->update('file');
	}
	
	function get_file($filename)
    {
		//returns the file
		$query = $this->db->get_where('file', array('filename'=>$filename));
	    return $query->row_array();
    }
	
	function get_file_by_id($id)
    {
		//returns the file
		$query = $this->db->get_where('file', array('idfile'=>$id));
	    return $query->row_array();
    }

	function update_file($data)
	{
	$gid = $this->get_groupid($data['idfile']);
	$old_groupid = $gid[0]['groupid'];
	$r = $this->get_listorder($data['idfile']);
	$listorder = $r[0]['list_order'];
	
	if($old_groupid != $data['groupid'])
	{
		$lo = $this->get_count_group_files($data['groupid']);
		$listorder = (($lo[0]['COUNT(*)']) + 1);
	}
	
	if($data['filename'] != '')
		$details = array(
               'iduser' => $data['iduser'],
               'label' => $data['label'],
			   'filename' => $data['filename'],
               'access' => $data['access'],
			   'datetime' => $data['datetime'],
			   'groupid' => $data['groupid'],
			   'list_order' => $listorder
            );
	else
		$details = array(
               'iduser' => $data['iduser'],
               'label' => $data['label'],
               'access' => $data['access'],
			   'datetime' => $data['datetime'],
			   'groupid' => $data['groupid'],
			   'list_order' => $listorder
            );
	$this->db->where('idfile', $data['idfile']);
	$this->db->update('file', $details); 
	
	$files = $this->get_group_files($old_groupid);
	$i = 0;
	foreach($files as $f)
	{
		$data = array(
					'idfile' => $f['idfile'],
					'list_order' => ($i+1)
				);
		$i ++;
		$this->update_file_order($data);
	}
	
	}
	
	function update_file_order($data)
	{
	
	$details = array(
               'list_order' => $data['list_order']
            );
	
	$this->db->where('idfile', $data['idfile']);
	$this->db->update('file', $details); 
	
	
	}
	
	function add_file($new_file_insert_data) {
		
		$insert = $this->db->insert('file', $new_file_insert_data);
		return $insert;
	
	}
	
	function delete_file($idfile) {
	
		$groupid = $this->get_groupid($idfile);
		$query = $this->db->delete('file', array('idfile'=>$idfile));
		$files = $this->get_group_files($groupid[0]['groupid']);
		$i = 0;
		foreach($files as $f)
		{
			$data = array(
						'idfile' => $f['idfile'],
						'list_order' => ($i+1)
					);
			$i ++;
			$this->update_file_order($data);
		}
	}
}
?>