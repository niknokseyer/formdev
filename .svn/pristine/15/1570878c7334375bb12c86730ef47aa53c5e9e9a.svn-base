<?php

$authenticated = true;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FORMDEV Monitoring Committee</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/default_monitoring.css" />
<link rel="stylesheet" href="<?php echo base_url();?>css/datepicker.css">
<link rel="stylesheet" href="<?php echo base_url();?>css/jquery/jquery.ui.all.css">
<script type="text/javascript" src="<?php echo base_url();?>js/default.js"></script>

<script type="text/javascript">
	
	var requiredFields = ['user','pass'];
	
</script>

</head>

<body>
<div id="loading" align="center"><img src="<?php echo base_url();?>images/loading.gif" id="loading_image" style="position:relative;" /></div>
<div id="wrapper">
  <div id="navbar" align="right">
	<div id="navbg"></div>
    <div id="navlinks" align="right" style="color:#FF0000">
            You must login first before you could use this facility.    </div>
  </div>

<div align="center" style="height:100px">

<div style="position:relative; top:210px; width:500px; text-align:center; vertical-align:middle;">
    <div align="center" style="position:absolute; font-family:'Courier New', Courier, monospace; width:500px; <?php if($authenticated) echo "height:250px;"; else echo "height:270px;";?> text-align:left" class="ui-widget-content ui-corner-all">
    	<form id="loginform" action="<?php echo base_url();?>account/validate_credentials" method="post">
            <div style="padding:20px 20px 10px 20px;">
                <span style="font-weight:bold; font-size:14pt">Monitoring Committee Login</span>
                <hr />
                <div id="formerrormessage" style="background:#FFFF99; color:#FF0000; font-size:10pt; font-weight:bold; <?php if($authenticated) echo "display:none;"; else echo "display:block;";?>">
                    <span style="padding:10px;">Invalid username or password.</span>
                </div>
            </div>
            <div align="center">
                    <div style="width:350px; padding-bottom:8px;">
                        <span style="font-size:11pt; font-weight:bold;"><label for="user" style="width:100px; padding:3px; float:left;">Username:</label></span>
                        <input type="text" id="user" name="username" style="width:200px;"/>
                    </div>
                    <div style="width:350px; padding:8px;">
                        <span style="font-size:11pt; font-weight:bold;"><label for="pass" style="width:100px; padding:3px; float:left;">Password:</label></span>
                        <input type="password" id="pass" name="password" style="width:200px;" />
                    </div>
				<span style="font-size:11pt;">
                    <div style="padding:3px 0px 3px 75px; line-height:1.28;">
                    	<input id="persist_box" type="checkbox" value="1" name="persistent">
                        <label for="persist_box">Keep me logged in</label>
                    </div>
                    <div style="padding:15px 15px 5px 0px;">
                    	<input type="hidden" name="controller" value="portal_monitoring" />
                        <input type="submit" class="login_button" value="LOGIN" />
                    </div>
                    <div style="padding:3px 0px 5px 85px;">
                        <a href="forgot_password.php" class="forgotpassword">Forgot your password?</a>
                    </div>
				</span>
            </div>
        </form>
    </div>
</div>

</div>

<?php

include('footer.php');

?>