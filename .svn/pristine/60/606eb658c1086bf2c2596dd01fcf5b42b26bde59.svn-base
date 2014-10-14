</head>

<body>
<div id="loading" align="center"><img src="<?php echo base_url(); ?>images/loading.gif" id="loading_image" style="position:relative;" /></div>
<div id="wrapper">
  <div id="navbar" align="right">
	<div id="navbg"></div>
<?php
	if($linkH != 'login.php')
	{
?>
    <div id="navlinks" align="right">
            <a class="navlink" href="http://ccsformdev.com">CCSFORMDEV.com</a>
            <a class="<?php if($linkH == 'dashboard') echo 'navlinkSelected'; else echo 'navlink';?>" href="<?php echo base_url(); ?>portal_monitoring/dashboard">DASHBOARD</a>
            <a class="<?php if($linkH == 'forms') echo 'navlinkSelected'; else echo 'navlink';?>" href="#" onMouseOver="revealSubmenu('subnavlinks')" onMouseOut="hideSubmenu('subnavlinks')">FORMS</a>
            <a class="<?php if($linkH == 'generate-report') echo 'navlinkSelected'; else echo 'navlink';?>" href="<?php echo base_url(); ?>portal_monitoring/generate-report">REPORTS</a>
            <a class="navlink" href="<?php echo base_url();?>account/logout">LOGOUT</a>
    </div>
    
    <div id="subnavlinks" align="left" onMouseOver="revealSubmenu('subnavlinks')" onMouseOut="hideSubmenu('subnavlinks')">
        <hr />
        <a class="subnavlink" href="<?php echo base_url(); ?>portal_monitoring/forms/bs">BS Attendance Form</a><br /><hr />
        <a class="subnavlink" href="<?php echo base_url(); ?>portal_monitoring/forms/class">Class Attendance Form</a><br /><hr />
        <a class="subnavlink" href="<?php echo base_url(); ?>portal_monitoring/forms/outreach">Outreach Attendance Form</a><br /><hr />
        <a class="subnavlink" href="<?php echo base_url(); ?>portal_monitoring/forms/reports">Monitoring Reports Form</a><br /><hr />
    </div>
    <!--<div id="userpart" class="ui-widget-content ui-corner-all" align="left">
    	<span id="login_title">LOGIN</span>
        <br />
        <form action="<?php /* echo $prefix */ ?>page/monitoring-admin">
            <input class="login_input1" type="text" value="Username" />
			<input class="login_input1" type="password" value="Password" />
            <input class="login_button" type="submit" value="LOGIN" />
        </form>
  	</div> -->
<?php 

	}
	else
	{
	
?>

    <div id="navlinks" align="right" style="color:#FF0000">
            You must login first before you could use this facility.
    </div>

<?php

	}

?>
  </div>