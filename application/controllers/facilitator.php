<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Facilitator extends CI_Controller {
	private $cont_name = 'facilitator';
	
	
		function __construct()
	{
	parent::__construct();
	
	$this->load->database(); 
	$this->load->model('faci_model');
	$this->load->model('user_model');
	$this->load->model('role_model');
	$this->load->model('batch_model');
	$this->load->model('familytree_model');
	$this->load->model('fb_gallery_model');
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
	
	
	public function index($faci='')	 {
	
	
	if($faci=='')
	{
		$data = array();
		if($batches=$this->faci_model->get_all_batches()){
			$batch_facis = array();
			$num_facis = array();
			$cur_facis = array();
			foreach($batches as $b){
			$facis = $this->faci_model->get_facis($b->batchnumber);
			$batch_facis[] = $facis;
			$num = $this->faci_model->get_numFacis($b->batchnumber);
			$num_facis[] = $num[0]->{'COUNT(batch)'};
			$cur = $this->faci_model->get_numCurFacis($b->batchnumber);
			$cur_facis[] = $cur[0]->{'COUNT(batch)'};
			}
			$data['batches'] = $batches;
			$data['batch_facis'] = $batch_facis;
			$data['num_facis'] = $num_facis;
			$data['cur_facis'] = $cur_facis;
		}
		
			if($user_id = $this->session->userdata('iduser')){
            $this->load->library('acl',array('user_id'=>$user_id));
            if($this->acl->has_permission('pk_accounts')){
                $data['pk_accounts'] = 'true';
            }
        }
		
		$data['controller'] = $this->cont_name;
        load_template_view($this,'facilitators_page',$data);
	}	
	else
	{
	
	if($faci=='formdev')
	{
	redirect('home');
	}
	
	$tempuser = $this->user_model->get_user($faci);
	
	if(isset($tempuser['iduser']))
	{
	
	$info = $this->user_model->get_info($tempuser['iduser']);
	$batch_desc = $this->batch_model->get_batch_desc($info->batch);
	$result_p = $this->familytree_model->get_parents($tempuser['iduser']);
	$result_c = $this->familytree_model->get_children($tempuser['iduser']);
	$result_s = array();
	$parentsinfo = array();
	$siblingsinfo = array();
	$childreninfo = array();
	if($result_p != null)
		foreach($result_p as $r)
		{
			if(($tempdata = $this->familytree_model->get_faci_info($r['iduser'])) != null)
				foreach($tempdata as $td)
					array_push($parentsinfo,$tempdata[0]);
			if(($tempdata = $this->familytree_model->get_siblings($r['iduser'],$tempuser['iduser'])) != null)
				foreach($tempdata as $td)
					if(!in_array($td,$result_s))
						array_push($result_s,$td);
		}
	
	foreach($result_s as $r)
	{
		if(($tempdata = $this->familytree_model->get_faci_info($r['idfacichild'])) != null)
			foreach($tempdata as $td)
				array_push($siblingsinfo,$tempdata[0]);
	}
	
	if($result_c != null)
		foreach($result_c as $r)
		{
			if(($tempdata = $this->familytree_model->get_faci_info($r['idfacichild'])) != null)
				foreach($tempdata as $td)
					array_push($childreninfo,$tempdata[0]);
		}
		
	$info->picture = "default";
	
	if(file_exists("images/profile/".$tempuser['username']."_.png"))
	{
		$info->picture = $tempuser['username'].'_';
	}
	
	$lname_tag = $info->lastname;
	$nname_tag = $info->nickname;
	$fname_tag = explode(" ",$info->firstname);
	
	$i = 0;
	$where_clause = "(tags LIKE '%".$fname_tag[0]."%' ";
	if(count($fname_tag) > 1)
	{
		for($i = 1; $i < count($fname_tag) - 1; $i++)
		{
			$where_clause .= "OR tags LIKE '%".$fname_tag[$i]."%' ";
		}
		$where_clause .= "OR tags LIKE '%".$fname_tag[$i]."%' ";
	}
	$where_clause .= "OR tags LIKE '%".$nname_tag."%') ";
	$where_clause .= "AND tags LIKE '%".$lname_tag."%' ";
	
	$photos = $this->fb_gallery_model->getPhotosByTags($where_clause);
	
	$data['info'] = $info;
	$data['batch_desc'] = $batch_desc;
	$data['parentsinfo'] = $parentsinfo;
	$data['siblingsinfo'] = $siblingsinfo;
	$data['childreninfo'] = $childreninfo;
	$data['photos'] = $photos;
	
	$data['controller'] = 'facipage';
    load_template_view($this,'view_facilitator',$data);
	}
	else
	{
	redirect('/facilitator/','refresh');
	}

	
	}
	
	}
	
	public function view($faci='')
	{
		$user_id = $this->session->userdata('iduser');
		$tempuser = $this->user_model->get_user($faci);
		
		if(isset($tempuser['iduser']))
		{
		
		$info = $this->user_model->get_info($tempuser['iduser']);
		$batch_desc = $this->batch_model->get_batch_desc($info->batch);
		$result_p = $this->familytree_model->get_parents($tempuser['iduser']);
		$result_c = $this->familytree_model->get_children($tempuser['iduser']);
		$result_s = array();
		$parentsinfo = array();
		$siblingsinfo = array();
		$childreninfo = array();
		if($result_p != null)
			foreach($result_p as $r)
			{
				if(($tempdata = $this->familytree_model->get_faci_info($r['iduser'])) != null)
					foreach($tempdata as $td)
						array_push($parentsinfo,$tempdata[0]);
				if(($tempdata = $this->familytree_model->get_siblings($r['iduser'],$tempuser['iduser'])) != null)
					foreach($tempdata as $td)
						if(!in_array($td,$result_s))
							array_push($result_s,$td);
			}
		
		foreach($result_s as $r)
		{
			if(($tempdata = $this->familytree_model->get_faci_info($r['idfacichild'])) != null)
				foreach($tempdata as $td)
					array_push($siblingsinfo,$tempdata[0]);
		}
		
		if($result_c != null)
			foreach($result_c as $r)
			{
				if(($tempdata = $this->familytree_model->get_faci_info($r['idfacichild'])) != null)
					foreach($tempdata as $td)
						array_push($childreninfo,$tempdata[0]);
			}
			
		    $info->picture = "default";
			
		if(file_exists("images/profile/".$tempuser['username']."_.png"))
		{
			$info->picture = $tempuser['username'].'_';
		}
		
		$lname_tag = $info->lastname;
		$nname_tag = $info->nickname;
		$fname_tag = explode(" ",$info->firstname);
		
		$i = 0;
		$where_clause = "(tags LIKE '%".$fname_tag[0]."%' ";
		if(count($fname_tag) > 1)
		{
			for($i = 1; $i < count($fname_tag) - 1; $i++)
			{
				$where_clause .= "OR tags LIKE '%".$fname_tag[$i]."%' ";
			}
			$where_clause .= "OR tags LIKE '%".$fname_tag[$i]."%' ";
		}
		$where_clause .= "OR tags LIKE '%".$nname_tag."%') ";
		$where_clause .= "AND tags LIKE '%".$lname_tag."%' ";
		
		$photos = $this->fb_gallery_model->getPhotosByTags($where_clause);
		
		$user = $this->session->all_userdata();
		$data['user'] = $user;
		$data['info'] = $info;
		$data['batch_desc'] = $batch_desc;
		$data['parentsinfo'] = $parentsinfo;
		$data['siblingsinfo'] = $siblingsinfo;
		$data['childreninfo'] = $childreninfo;
		$data['photos'] = $photos;
		
		$data['controller'] = 'facipage';
	    $this->load->view('show_facilitator',$data);
		}
		else
		{
		redirect('/facilitator/','refresh');
		}
	}
	
	public function perms($id){
	
	
	
	$data['idrole'] = $id;
	
	$this->load->helper('array');
	
	$this->load->library('acl',array('user_id'=>$this->session->userdata('iduser')));
	$roleperms = $this->acl->get_role_perms($id);
	
	if($this->acl->has_permission('pk_roles')){
    $pk_roles = true;
    }
		
	if(isset($pk_roles) && $pk_roles == true)
	{
	
	
	$data['roleperms'] = $roleperms;
	
	//Get Permissions List
	$this->load->library('acl');
	$permissions = $this->acl->get_all_perms();
    $data['permissions'] = $permissions;
	
	$data['controller'] = $this->cont_name;
	$this->load->view('role_perms',$data);
	
	}
	else
	{
	echo "You are not authorized to manage roles.";
	}
	}
	
	public function roles(){
	
	$date = date('Y-m-d H:i:s',time());
			
	$perm_array = array();
	
	$idrole = $this->input->post('idrole');
	
	$perm_array = $this->input->post();
	
	array_shift($perm_array);
	
	$i=1;
	
	//Filling in the array
	for($i;$i<=15;$i++)
	{
	$permrole[$i]=0;
	}
	foreach($perm_array as $p):
	
	$permrole[$p]=1;
	endforeach;
	
	$ctr=1;
	foreach($permrole as $pr):
	
	$perm = array(
	'idrole' => $idrole,
	'idperm' => $ctr,
	'date_added' => $date,
	'value' => $pr
	);
	
	$ctr++;
	
	$this->role_model->perm_to_role($perm);
	
	endforeach;
	
	redirect('/facilitator/manage/roles','refresh');
	
	}

	public function manage($function='') {
	//redirect_ifnonadmin($this,'facilitator');

	$user = $this->session->all_userdata();

	$data['user'] = $user;

	
	$this->load->library('acl',array('user_id'=>$this->session->userdata('iduser')));
        if($this->acl->has_permission('pk_accounts')){
        $pk_accounts = true;
        }
		
		if(isset($pk_accounts) && $pk_accounts == true)
		{
		
		$infos['pk_accounts'] = $pk_accounts;
	
		$data['controller'] = $this->cont_name;
		$data['function'] = $function;
		
		//Get Batch List
		$batches = $this->faci_model->get_all_batches();
		foreach($batches as $b){
        	$batch[$b->batchnumber] = "$b->batch_label Batch $b->batchnumber ($b->startyear-$b->endyear)";
        }
		
		$batch[0] = "$b->batch_label Batch 1 ($b->startyear-$b->endyear)";
		
        $infos['batch'] = $batch;
		
		
		//Get Role List
		 $roles = $this->acl->get_all_roles();
		foreach($roles as $r){
			$role[$r->idrole] = "$r->role_name";
        }
        $infos['role'] = $role;
		
		
		//Get User List
		$user = array();
		$user_array = $this->user_model->get_all_users();
		foreach($user_array as $u){
			$users[$u->iduser] = "$u->lastname, $u->firstname";
        }
        $infos['user_list'] = $users;
		
		$data['infos'] = $infos;		
		
		load_template_view($this,'facilitator_manage',$data);
		}
		else
		{
		    $data = array();
            $data['controller'] = $this->cont_name;
			$data['message'] = "You are not authorized to manage accounts.";
            load_template_view($this,'error_page',$data);
		}
	
		//$this->load->view('facilitators_adminpage'); //TODO change this to faci_admin-page and display a tabular list of all the facis and their batches in the future
	}

	public function account($id){
	
    $userinfo = $this->user_model->get_info($id);
	
	
	$this->load->library('acl',array('user_id'=>$id));
		//Get Role List
		 $roles = $this->acl->get_all_roles();
		foreach($roles as $r){
			$role[$r->idrole] = "$r->role_name";
        }
		
		$userrole = $this->role_model->get_user_role($id);
	
		//Get Batch List
		$batches = $this->faci_model->get_all_batches();
		foreach($batches as $b){
        	$batch[$b->batchnumber] = "$b->batch_label Batch $b->batchnumber ($b->startyear-$b->endyear)";
        }
		
		$batch[0] = "$b->batch_label Batch 1 ($b->startyear-$b->endyear)";
		
		$data['userrole'] = $userrole;
		
		$data['role'] = $role;
		
        $data['batch'] = $batch;
	
	$data['userinfo'] = $userinfo;
	
	$data['controller'] = $this->cont_name;
	$this->load->view('faci_edit',$data);
	
	}
	
	public function add(){
	
		//Form Validation Checking
		$this->form_validation->set_rules('firstname', 'Name', 'trim|required');
		$this->form_validation->set_rules('lastname', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email|is_unique[user.email]');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]|is_unique[user.username]');
	
		if($this->form_validation->run() == FALSE)
		{
			//returns to page if form is incomplete
			$this->manage("add");
		}
		else
		{
		
		//will be used for e-mail confirmation.
		
		$password = $this->input->post('password');
		
			$new_profile = array(
			'firstname' => $this->input->post('firstname'),
			'lastname' => $this->input->post('lastname'),
			'batch' => $this->input->post('batch_list'),
			'term' => $this->input->post('term_list'),
			'current_faci' =>  $this->input->post('current_faci')
		);
		
			if($id = $this->faci_model->insert_faci($new_profile))
			{
			
				$new_user = array(
				'email' => $this->input->post('email'),			
				'username' => $this->input->post('username'),
				'password' => md5($password),
				'idprofile' => $id,
				'logincount' => 0
				);
			
				if($iduser = $this->user_model->create_user($new_user))
				{
				
					$date = date('Y-m-d H:i',time());
				
					$user_role = array(
					'iduser' => $iduser,
					'idrole' => $this->input->post('role_list'),
					'date_added' => $date
					);
					
					$this->role_model->insert_user_role($user_role);
					
					$this->load->library('email');
					$this->email->set_newline("\r\n");
		
					$this->email->from('admin@ccsformdev.com', 'FORMDEV');
					$this->email->to($new_user['email']);		
					$this->email->subject('FORMDEV - Account Information');		
					$this->email->message('<html>

<head>

<title>FORMDEV - Formation and Development</title>

</head>

<body>

<table align="center" width="600" cellpadding="2" cellspacing="2">

  <tr>

    <td bgcolor="#FFFFFF"><font face="Arial, Helvetica, sans-serif" size="1" color="#999999">For more information please visit: <a href="http://www.ccsformdev.com">http://www.ccsformdev.com</a></font></td>

  </tr>

</table>

<table align="center" width="600" style="border: #666666 1px solid;" cellpadding="0" cellspacing="0">

  <tr>

    <td bgcolor="#efefef" style="border-bottom: #666666 1px solid;" ><br>

      <TABLE border="0" align="center">

        <TR>

          <TD><p style="font-family: arial,  helvetica, sans-serif;font-size: 25px;color: #666666;">FORMDEV: Formation and Development</p></TD>

        </TR>

      </TABLE>

      <br>

    </td>

  </tr>

  <tr>

    <td><TABLE width="510" border="0" cellpadding="0" cellspacing="0" align="center">

        <TR>

          <TD>
		  
			</br>

			<p style="font-family: arial,  helvetica, sans-serif;font-size: 15px;color: #666666;">FORMDEV Website v2.0</p>

            <p style="font-family: arial,  helvetica, sans-serif;font-size: 12px;color: #666666;">Good day '.$new_profile['firstname'].' '.$new_profile['lastname'].'!</p>

			<p style="font-family: arial,  helvetica, sans-serif;font-size: 12px;color: #666666;">Feel free to explore the website. Thank you and God bless.</p>
			  
            <p style="font-family: arial,  helvetica, sans-serif;font-size: 15px;color: #666666;">Login Information</p>

            <p style="font-family: arial,  helvetica, sans-serif;font-size: 12px;color: #666666;">Username: '.$new_user['username'].'</p>
			<p style="font-family: arial,  helvetica, sans-serif;font-size: 12px;color: #666666;">Password: '.$password.'</p>

            <table width="100%" align="center" cellpadding="5" cellspacing="5" style="border: #666666 1px solid;">

              <tr>

                <td width="2%"></td>

                <td width="98%"><p style="font-family: arial,  helvetica, sans-serif;font-size: 12px;color: #666666;">
				<a href="http://www.facebook.com/FORMDEV" title="Follow FORMDEV in Facebook"><img src="http://www.ccsformdev.com/images/icons/facebook.png" /></a>
				<a href="http://www.twitter.com/CCSFORMDEV" title="Follow FORMDEV in Twitter"><img src="http://www.ccsformdev.com/images/icons/twitter.png" /></a>
				<a href="http://www.youtube.com/user/CCSFORMDEV" title="Follow FORMDEV in YouTube"><img src="http://www.ccsformdev.com/images/icons/youtube.png" /></a>
				</p></td>

              </tr>

            </table>

            <br>

            <font face="Verdana, Arial, Helvetica, sans-serif" color="#666666" size="1">FORMDEV<br />College of Computer Studies<br />De La Salle University - Manila<br /><a href="http://www.ccsformdev.com">http://www.ccsformdev.com</a></font><br><br> </TD>

        </TR>

      </TABLE>

</table>

</body>

</html>');
			
					$this->email->send();
					
					echo "Login details sent to user";
					
				}
				
			}
		
			redirect('/facilitator/manage/add','refresh');
			
		}
	
	}

	public function addbatch(){
	
	$this->load->library('acl',array('user_id'=>$this->session->userdata('iduser')));
    if($this->acl->has_permission('pk_accounts')){
    $pk_accounts = true;
    }
	
	if(isset($pk_accounts) && $pk_accounts !=null)
	{
	$batch = $this->input->post();

	$this->batch_model->insert_batch($batch);
	
	redirect('/manage/batch','refresh');
	}
	else
	{
	$data = array();
    $data['controller'] = $this->cont_name;
	$data['message'] = "You are not authorized to manage accounts.";
    load_template_view($this,'error_page',$data);
	}
	
	
	}
	
	public function edit_family_tree($caller='',$faci='')
	{
		if($caller == 'account' || $caller == 'manage')
		{
			$user_id = $this->session->userdata('iduser');
			$tempuser = $this->user_model->get_info($faci);
			
			if($user_id != null && isset($tempuser->{'iduser'}))
			{
				$this->load->library('acl',array('user_id'=>$user_id));
				if($this->acl->has_permission('pk_accounts'))
					$isAdmin = true;
				else
					$isAdmin = false;
				if($faci == $user_id || $isAdmin)
				{
					if($faci != $user_id && $caller == 'account')
						$caller = 'manage';
					$result_p = $this->familytree_model->get_parents($tempuser->{'iduser'});
					$result_c = $this->familytree_model->get_children($tempuser->{'iduser'});
					$parentsinfo = array();
					$childreninfo = array();
					if($result_p != null)
						foreach($result_p as $r)
						{
							if(($tempdata = $this->familytree_model->get_faci_info($r['iduser'])) != null)
								foreach($tempdata as $td)
									array_push($parentsinfo,$tempdata[0]);
						}
					
					if($result_c != null)
						foreach($result_c as $r)
						{
							if(($tempdata = $this->familytree_model->get_faci_info($r['idfacichild'])) != null)
								foreach($tempdata as $td)
									array_push($childreninfo,$tempdata[0]);
						}
						
					$parent_candidates = array();
					$user_array = $this->familytree_model->get_parent_candidates($tempuser->{'batch'},$tempuser->{'term'});
					foreach($user_array as $u){
						$bFound = false;
						for($i = 0; $i < count($parentsinfo); $i++)
							if($u->iduser == $parentsinfo[$i]->{'iduser'})
							{
								$bFound = true;
								break;
							}
						if(!$bFound)
							$parent_candidates[$u->iduser] = "$u->lastname, $u->firstname";
					}
					
					$child_candidates = array();
					$user_array = $this->familytree_model->get_child_candidates($tempuser->{'batch'},$tempuser->{'term'});
					foreach($user_array as $u){
						$bFound = false;
						for($i = 0; $i < count($childreninfo); $i++)
							if($u->iduser == $childreninfo[$i]->{'iduser'})
							{
								$bFound = true;
								break;
							}
						if(!$bFound)
							$child_candidates[$u->iduser] = "$u->lastname, $u->firstname";
					}
					
					$data['caller'] = $caller;
					$data['parent_candidates'] = $parent_candidates;
					$data['child_candidates'] = $child_candidates;
					$data['info'] = $tempuser;
					$data['parentsinfo'] = $parentsinfo;
					$data['childreninfo'] = $childreninfo;
					$data['controller'] = 'facilitator';
				    load_template_view($this,'edit_family_tree',$data);
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
				redirect('/facilitator/','refresh');
		}
		else
			redirect('/facilitator/','refresh');
	}
	
	public function add_parent($faci_id){
		$tempuser = $this->user_model->get_info($faci_id);
		if(isset($tempuser))
		{
			if($user_id = $this->session->userdata('iduser'))
			{
				$this->load->library('acl',array('user_id'=>$user_id));
				if($this->acl->has_permission('pk_accounts'))
					$isAdmin = true;
				else
					$isAdmin = false;
				if($isAdmin || $faci_id == $user_id)
				{
					if($this->input->post('user_list') > 0)
					{
						$new_parent = array(
							'idfacichild' => $faci_id,
							'iduser' => $this->input->post('user_list')
						);
						$this->familytree_model->add_member($new_parent);
					}
					if($faci_id == $user_id)
						redirect('/facilitator/edit_family_tree/account/'.$faci_id,'refresh');
					else
						redirect('/facilitator/edit_family_tree/manage/'.$faci_id,'refresh');
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
				redirect('/facilitator/','refresh');
		}
		else
			redirect('/facilitator/','refresh');
	}
	
	public function add_child($faci_id){
		$tempuser = $this->user_model->get_info($faci_id);
		if(isset($tempuser))
		{
			if($user_id = $this->session->userdata('iduser'))
			{
				$this->load->library('acl',array('user_id'=>$user_id));
				if($this->acl->has_permission('pk_accounts'))
					$isAdmin = true;
				else
					$isAdmin = false;
				if($isAdmin || $faci_id == $user_id)
				{
					if($this->input->post('user_list') > 0)
					{
						$new_child = array(
							'idfacichild' => $this->input->post('user_list'),
							'iduser' => $faci_id
						);
						$this->familytree_model->add_member($new_child);
					}
					if($faci_id == $user_id)
						redirect('/facilitator/edit_family_tree/account/'.$faci_id,'refresh');
					else
						redirect('/facilitator/edit_family_tree/manage/'.$faci_id,'refresh');
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
				redirect('/facilitator/','refresh');
		}
		else
			redirect('/facilitator/','refresh');
	}
	
	public function delete_parent($faci_id,$parent_id){
		$tempuser = $this->user_model->get_info($faci_id);
		if(isset($tempuser))
		{
			if($user_id = $this->session->userdata('iduser'))
			{
				$this->load->library('acl',array('user_id'=>$user_id));
				if($this->acl->has_permission('pk_accounts'))
					$isAdmin = true;
				else
					$isAdmin = false;
				if($isAdmin || $faci_id == $user_id)
				{
					if($this->familytree_model->isValid($parent_id,$faci_id))
						$this->familytree_model->delete_member($parent_id,$faci_id);
					if($faci_id == $user_id)
						redirect('/facilitator/edit_family_tree/account/'.$faci_id,'refresh');
					else
						redirect('/facilitator/edit_family_tree/manage/'.$faci_id,'refresh');
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
				redirect('/facilitator/','refresh');
		}
		else
			redirect('/facilitator/','refresh');
	}
	
	public function delete_child($faci_id,$child_id){
		$tempuser = $this->user_model->get_info($faci_id);
		if(isset($tempuser))
		{
			if($user_id = $this->session->userdata('iduser'))
			{
				$this->load->library('acl',array('user_id'=>$user_id));
				if($this->acl->has_permission('pk_accounts'))
					$isAdmin = true;
				else
					$isAdmin = false;
				if($isAdmin || $faci_id == $user_id)
				{
					if($this->familytree_model->isValid($faci_id,$child_id))
						$this->familytree_model->delete_member($faci_id,$child_id);
					if($faci_id == $user_id)
						redirect('/facilitator/edit_family_tree/account/'.$faci_id,'refresh');
					else
						redirect('/facilitator/edit_family_tree/manage/'.$faci_id,'refresh');
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
				redirect('/facilitator/','refresh');
		}
		else
			redirect('/facilitator/','refresh');
	}
	
	public function edit(){
		$this->load->model('faci_model');
		// $facis = $this->faci_model->get_all_facis();
		// foreach($facis as $f){
		// 	$strFacis[] = "$f->lastname, $f->firstname";
		// }
		// $data['facis'] = $strFacis;
		$data['facis'] = $this->faci_model->get_all_facis();
		$data['controller'] = $this->cont_name;
		$this->load->view('faci_admin-page-edit',$data);
	}

	public function delete(){
		$data['controller'] = $this->cont_name;
		$this->load->view('faci_admin-page-delete');
	}
}