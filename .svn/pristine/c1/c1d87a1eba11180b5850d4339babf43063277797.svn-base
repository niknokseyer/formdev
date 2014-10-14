<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" href="<?php echo base_url().'css/admin.css'; ?>" />
	<link rel="shortcut icon" href="<?php echo base_url();?>favicon.ico" type="image/vnd.microsoft.icon" />
</head>
<body>

<div class="wrapper">
	<aside class="sidebar">
		<ul>
			<?php 
			$css_selected = array('class'=>'current');
			$home_css = '';
			$about_css = '';
			$reflections_css = '';
			$announcements_css = '';

			if($controller == 'home'):
				$home_css = $css_selected;
			elseif($content_page == 'about_page'):
				$about_css = $css_selected;
			elseif(isset($controller) && $controller == 'reflections'):
				$reflections_css = $css_selected;
			elseif(isset($controller) && $controller == 'announcements'):
				$announcements_css = $css_selected;
			endif;
			?>

			<li><?php echo anchor('home/admin','Home',$home_css); ?></li>
			<li><?php echo anchor('about/admin','About',$about_css); ?></li>
			<li><?php echo anchor('reflections/admin','Reflections',$reflections_css); ?></li>
			<li><?php echo anchor('announcements/admin','Announcements',$announcements_css);?></li>
			
		</ul>
	</aside>
