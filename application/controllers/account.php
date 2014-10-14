<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account extends CI_Controller {

private $cont_name = 'account';

	function __construct() {
	
		parent::__construct();
		$this->load->database(); 
		$this->load->model('user_model');
		$this->load->model('role_model');
	}

		public function index()
	{
		redirect('/account/edit','refresh');
	}
	
	public function manage()
	{
		redirect('/facilitator/manage','refresh');
	}
	
	public function username_taken()
  {
    $username = trim($_POST['username']);
	
    // if the username exists return a 1 indicating true
    if ($this->user_model->username_exists($username)) {
      echo '1';
    }
   }
	
	public function adduser(){
    	$data['message'] = '';
        $data = array();
        $data['controller'] = $this->cont_name;
        load_template_view($this,'adduser_page',$data);
	}
	
	public function facebook($uid=""){

	if( $iduser = $this->session->userdata('iduser') )
	{
	
	$currentuid = $this->user_model->get_facebook($iduser);
	if($currentuid==null || $currentuid=='')
	{
	if(!$this->user_model->check_facebook($uid,$iduser))
	$this->user_model->update_facebook($uid,$iduser);
	}
	
	}

	}

	public function edit(){
	
	$notice = "";
	
	$user = $this->session->all_userdata();
	
	if(isset($user['is_logged_in']) && $user['is_logged_in'] == true)
	{
	$data = array();
	$info = $this->user_model->get_info($user['iduser']);
	$data['user'] = $user;
	$data['info'] = $info;
	$data['controller'] = $this->cont_name;
	
	if($this->user_model->get_logincount($user['iduser']) <= 1)
	$notice = "You are advised to personalize your password.";
	
	$data['notice'] = $notice;
	
	load_template_view($this,'view_account',$data);
	}
	else
	{
		$data = array();
        $data['controller'] = $this->cont_name;
		$data['message'] = "Please login first.";
        load_template_view($this,'error_page',$data);
	}
	
	}

		public function updateprofile($idprofile){

		$user = $this->session->all_userdata();
		
			$user_id = $this->session->userdata('iduser');
            $this->load->library('acl',array('user_id'=>$user_id));
            if($this->acl->has_permission('pk_accounts')){
                $pk_accounts = 'true';
            }
		
		if(($this->input->post('iduser') == $user['iduser']) || (isset($pk_accounts) && $pk_accounts == true))
		{
		
		$data = array();
		$data = $this->input->post();
		$data['id'] = $idprofile;
		
		$this->user_model->updateprofile($data);
		
		if($this->input->post('iduser') == $user['iduser'])
		{
		redirect('/account/edit','refresh');
		}
		else
		{
		
		$date = date('Y-m-d H:i',time());
				
		$user_role = array(
		'iduser' => $this->input->post('iduser'),
		'idrole' => $this->input->post('role_list'),
		'date_added' => $date
		);
					
		$this->role_model->update_user_role($user_role);
		
		redirect('/facilitator/manage/edit','refresh');
		}
		}
		
		else
		{
			$data = array();
            $data['controller'] = $this->cont_name;
			$data['message'] = "You are not allowed to edit this profile.";
            load_template_view($this,'error_page',$data);
		}
	
	}
	
	public function updateemail($iduser){
	

		$this->load->library('acl',array('user_id'=>$this->session->userdata('iduser')));
		if($this->acl->has_permission('pk_accounts')){
		$pk_accounts = true;
		}
	
		if(isset($pk_accounts) && $pk_accounts !=null)
		{
		$email = $this->input->post('email');
	
		$this->user_model->update_email($email, $iduser);
		
		redirect('/facilitator/manage/','refresh');
		}
		else
		{
			$data = array();
            $data['controller'] = $this->cont_name;
			$data['message'] = "You are not allowed to edit this account.";
            load_template_view($this,'error_page',$data);
		}
	
	}

	public function resetpass($iduser){
	
		$this->load->library('acl',array('user_id'=>$this->session->userdata('iduser')));
		if($this->acl->has_permission('pk_accounts')){
		$pk_accounts = true;
		}
	
		if(isset($pk_accounts) && $pk_accounts !=null)
		{
		$password = random_string('alnum', 8);
		$username = $this->user_model->get_username($iduser);
	
	
			$this->user_model->update_password($password, $iduser);
	
					$this->load->library('email');
					$this->email->set_newline("\r\n");
		
					$config['smtp_user'] = 'accounts@ccsformdev.com';
					$config['smtp_pass'] = 'facilitator12';
					$this->email->initialize($config);
		
					$this->email->from('accounts@ccsformdev.com', 'FORMDEV');
					$this->email->to($this->user_model->get_email($iduser));		
					$this->email->subject('FORMDEV - Reset Password');		
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

			<p style="font-family: arial,  helvetica, sans-serif;font-size: 15px;color: #666666;">Reset Password</p>
			
			<p style="font-family: arial,  helvetica, sans-serif;font-size: 12px;color: #666666;">Here is your new login information.</p>
			  
            <p style="font-family: arial,  helvetica, sans-serif;font-size: 15px;color: #666666;">Login Information</p>

			<p style="font-family: arial,  helvetica, sans-serif;font-size: 12px;color: #666666;">Username: '.$username.'</p>
			
			<p style="font-family: arial,  helvetica, sans-serif;font-size: 12px;color: #666666;">New Password: '.$password.'</p>

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
		
		redirect('/facilitator/manage/','refresh');
		}
		else
		{
			$data = array();
            $data['controller'] = $this->cont_name;
			$data['message'] = "You are not allowed to edit this account.";
            load_template_view($this,'error_page',$data);
		}
	
	}	
	
	
	public function updateaccount($iduser){
	

		if($iduser == $this->session->userdata('iduser') )
		{
		$email = $this->input->post('email');
		if($this->user_model->get_password($iduser) == md5($this->input->post('curpassword')))
		{
		$data = array();
		$data['id'] = $iduser;
		$data['email'] = $this->input->post('email');
		if($this->input->post('newpassword') != null)
		$data['password'] = md5($this->input->post('newpassword'));
		else
		$data['password'] = $this->user_model->get_password($iduser);
		
		$this->user_model->updateaccount($data);
		
		$this->logout();
		}
		else
		{
			$data = array();
            $data['controller'] = $this->cont_name;
			$data['message'] = "Password doesn't match.";
            load_template_view($this,'error_page',$data);
		}
		}
		else
		{
			$data = array();
            $data['controller'] = $this->cont_name;
			$data['message'] = "You are not allowed to edit this account.";
            load_template_view($this,'error_page',$data);
		}
	}
	
	
	public function get_userinfo($username) // get user info and store it to session
	{
	
		$user = $this->user_model->get_user($username);
		
		$data = array(
		'iduser' => $user['iduser'],
		'username' => $user['username'],
		'is_logged_in' => true
		);
		
		$this->session->set_userdata($data);
		
		$date = date('Y-m-d H:i',time());
		
		$log = array(
		'iduser' => $user['iduser'],
		'ip_address' => $this->session->userdata('ip_address'),
		'activity' => 'login',
		'datetime' => $date,
		'user_agent' => $this->session->userdata('user_agent')
		);
		
		$this->load->model('log_model');
		
		$this->log_model->insert_log($log);
		
		if($user['logincount'] <= 1)
		redirect('/account/edit','refresh');
		
	}
	
	public function fb_connect($facebook)
	{
		if ($user = $this->user_model->fb_connect($facebook))
		{
		$data = array(
		'iduser' => $user['iduser'],
		'username' => $user['username'],
		'is_logged_in' => true
		);
		
		$this->session->set_userdata($data);
		
		$date = date('Y-m-d H:i',time());
		
		$log = array(
		'iduser' => $user['iduser'],
		'ip_address' => $this->session->userdata('ip_address'),
		'activity' => 'facebook - login',
		'datetime' => $date,
		'user_agent' => $this->session->userdata('user_agent')
		);
		
		$this->load->model('log_model');
		
		$this->log_model->insert_log($log);
		
		
		$user_id = $this->session->userdata('iduser');
		$this->load->library('monitoring_lib');
		$userInfo  = $this->monitoring_lib->get_user_role($user_id);
		$result = $userInfo->user.'.'.uniqid().'.'.$userInfo->level;
		setcookie("monitoring", $result, time()+7200,'/');
		
		redirect('home');
		
		}
		else
		{
		
			$data = array();
            $data['controller'] = $this->cont_name;
			$data['message'] = "This Facebook account is not associated with any of the FORMDEV accounts.";
            load_template_view($this,'error_page',$data);
		
		}
	
	}
	
	public function validate_credentials(){
	
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		$login = array(		
		'username' => $username,
		'password' => $password
		);
	
		if ($username != 'username' && $password != 'password'){
		$query = $this->user_model->validate($login);
		
		if($query) // if the user's credentials validated...
		{
			$this->get_userinfo($this->input->post('username'));
			$user_id = $this->session->userdata('iduser');
			$this->load->library('monitoring_lib');
			$userInfo  = $this->monitoring_lib->get_user_role($user_id);
			$result = $userInfo->user.'.'.uniqid().'.'.$userInfo->level;
			setcookie("monitoring", $result, time()+7200,'/');
			
			redirect($this->input->post('controller'));
		}
				else // incorrect username or password
		{
			$data = array();
            $data['controller'] = $this->cont_name;
			$data['message'] = "Incorrect username and/or password.";
            load_template_view($this,'error_page',$data);
		}
		}
		else // incorrect username or password
		{
			$data = array();
            $data['controller'] = $this->cont_name;
			$data['message'] = "Incorrect username and/or password.";
            load_template_view($this,'error_page',$data);
		}
	}
	
	function register()
	{
	
		$data = array();
        $data['controller'] = $this->cont_name;
		$data['message'] = "The accounts for this website is currently for FORMDEV Facilitators only. Thank you.";
        load_template_view($this,'error_page',$data);
	
	}
	
	function logout()
	{
		echo "Signing out.. please wait.";
		setcookie("monitoring","",0,'/');
		$this->session->sess_destroy();
		redirect('home');
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */	