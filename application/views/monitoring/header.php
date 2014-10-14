<?php

$prefix = "";
$prefix1 = "";
$linkH = "";
$where = explode("/", $_SERVER['PHP_SELF']);

if($where[3] == "Monitoring")
{
	 if($where[4] == "forms")
	{
		$prefix = "../../";
		$prefix1 = "../"; 
	}
	else
	{
		$prefix = "../";
		$prefix1 = "";
	}
	
	$linkH = $where[4];
}

//if (!isset($_COOKIE["monitoring"]))
//	header('Location: '.$prefix.'login.php');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FORMDEV Monitoring Committee</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/default_monitoring.css" />
<link rel="stylesheet" href="<?php echo base_url();?>css/datepicker_monitoring.css">
<link rel="stylesheet" href="<?php echo base_url();?>css/jquery/jquery.ui.all.css">
<script type="text/javascript" src="<?php echo base_url();?>js/monitoring/default.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/monitoring/prototype.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/monitoring/datepicker.js"></script>
<?php
	include('header_links.php');
?>
