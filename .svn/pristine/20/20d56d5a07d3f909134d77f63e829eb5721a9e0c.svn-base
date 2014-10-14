<!DOCTYPE html>
<html xmlns:fb="http://ogp.me/ns/fb#">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php $title = "- Formation and Development"; ?>
<?php $description = "FORMDEV (Formation and Development) is a special program and community of volunteer faculty, staff, alumni, and students of the College of Computer Studies (CCS) of De La Salle University (DLSU). The mission of FORMDEV is to proclaim and demonstrate the Lasallian and Gospel values of faith, zeal, and love, especially for ones community and for the poor."; ?>
<?php $image = "http://www.ccsformdev.com/Logo.png"; ?>
<?php $keywords = ""; $author = "";  ?>
<?php if($this->uri->total_segments() > 0):?>
<?php $title = humanize($this->uri->segment(1)); ?>
<?php endif; ?>
<?php if((humanize($this->uri->segment(1)) == 'Facilitator' || humanize($this->uri->segment(1)) == 'Formdevclass' || humanize($this->uri->segment(1)) == 'Bible Study' || humanize($this->uri->segment(1)) == 'Committees') && $this->uri->total_segments() > 1):?>
<?php 
$name = str_replace('.',' ',$this->uri->segment(2));
if(humanize($this->uri->segment(1)) != 'Formdevclass')
	$title = humanize($this->uri->segment(1)) . ' - ' . humanize($name);
else
	$title = 'Class - ' . humanize($name);
?>
<?php endif; ?>
<?php if(humanize($this->uri->segment(1)) == 'Verses' && $this->uri->total_segments() > 1 && humanize($this->uri->segment(2)) == 'Viewverse'):?>
<?php 
$title = 'Verse of the Week' . ' - ' . $verseinfo->book . ' ' . $verseinfo->chapter . ':' . $verseinfo->verse;
$description = strip_quotes($verseinfo->text);
if(isset($verseinfo->image) && $verseinfo->image!=null)
	$image = $verseinfo->image;
?>
<?php elseif(humanize($this->uri->segment(1)) == 'Verses' && $this->uri->total_segments() == 1):?>
<?php 
$title = 'Verse of the Week' . ' - ' . $verse->book . ' ' . $verse->chapter . ':' . $verse->verse;
$description = strip_quotes($verse->text);
if(isset($verse->image) && $verse->image!=null)
	$image = $verse->image;
?>
<?php endif; ?>
<?php if((humanize($this->uri->segment(1)) == 'Announcements' || humanize($this->uri->segment(1)) == 'Reflections')  && $this->uri->total_segments() > 1):?>
<?php
$post = str_replace('-',' ',$this->uri->segment(3));
$title = humanize($this->uri->segment(1)) . ' - ' . str_replace('Formdev','FORMDEV',humanize($post));
  if($this->uri->segment(2) == "article") {
    $description = strip_tags($article->summary); }
  if(isset($article)){
    if($article->tags != "") {
      $keywords = str_replace(',',', ',$article->tags) . ', '; }
      $author = $article->firstname.' '.$article->lastname . ', '; }
?>
<?php endif; ?>
<title>FORMDEV <?php echo $title; ?></title>
<meta name="title" content="FORMDEV <?php echo $title; ?>" />
<meta name="keywords" content="<?php echo $keywords; ?>FORMDEV, Formation and Development, FORMDEV Facilitators, FORMDEV Facis, FORMDEV Facilitator, FORMDEV Faci, Facilitators, Facis, Facilitator, Faci, De La Salle University, DLSU, De La Salle, La Salle, DLSU-M, La Salle Canlubang, College of Computer Studies, CCS, Faith, Zeal, Love, FSC, St. John Baptist de La Salle, De La Salle Brothers, St. La Salle" />
<meta name="description" content="<?php echo $description; ?>" />
<meta name="author" content="<?php echo $author; ?>FORMDEV" />

<meta property="og:title" content="FORMDEV <?php echo $title; ?>"/>
<meta property="og:site_name" content="FORMDEV: Formation and Development"/>
<meta property="og:url" content="<?php echo current_url(); ?>"/>
<meta property="og:description"  content="<?php echo $description; ?>"/>
<meta property="og:image" content="<?php echo $image; ?>"/>

<meta property="fb:app_id" content="168991706515536"/>

<link rel="image_src" href="<?php echo $image; ?>" /> 

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/default.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/article.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bottom.css" />
<link rel="stylesheet" href="<?php echo base_url();?>css/jquery/jquery.ui.all.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/ui-lightness/jquery-ui-1.8.19.custom.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/jquery.alerts.css" />

<link rel="shortcut icon" href="<?php echo base_url();?>favicon.ico" type="image/vnd.microsoft.icon" />

<script src="<?php echo base_url();?>js/photo_collection.js"></script>
<script src="<?php echo base_url();?>js/jquery-1.7.2.js"></script>
<script src="<?php echo base_url();?>js/jquery-ui-1.8.19.custom.min.js"></script>
<script src="<?php echo base_url();?>js/jquery.validate.js"></script>
<script src="//connect.facebook.net/en_US/all.js"></script>
<script src="<?php echo base_url();?>js/jquery.effects.core.js"></script>
<script src="<?php echo base_url();?>js/jquery.effects.fold.js"></script>
<script src="<?php echo base_url();?>js/formdev.js"></script>
<script src="<?php echo base_url();?>js/jquery.history.js"></script>
<script src="<?php echo base_url();?>js/jquery.alerts.js"></script>

<link rel="stylesheet" href="<?php echo base_url();?>css/gallery_css.css" media="screen">
<link rel="stylesheet" href="<?php echo base_url();?>css/gallery_list_css.css" media="screen">
<script src="<?php echo base_url();?>js/photoalbum.js"></script>
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script>
$(document).ready(function () {
	
	$('#fb_login').toggle(false);
	//$('#input_login').toggle(false);
	
	$('#navbg').mouseover(function () {
	$(this).css('cursor', 'pointer');
	});	
	
	$('button.login_manually').click(function () {
	{
	$('#fb_login').toggle('slow');
	$('#input_login').toggle('slow');
	$('#login_pic').html('<img src="/images/loginlogo.png" alt="login pic" />');
	}
	});
	
	try{
		FB.Event.subscribe('auth.statusChange', function(response) {
	    if (response.status === 'connected') {
	    // the user is logged in and has authenticated your
	    // app, and response.authResponse supplies
	    // the user's ID, a valid access token, a signed
	    // request, and the time the access token 
	    // and signed request each expire
	    var uid = response.authResponse.userID;
	    var accessToken = response.authResponse.accessToken;
		
		FB.api('/me', function(response) {
		$('span#fb_name').append('log in as <a href="http://www.facebook.com/profile.php?id='+uid+'" target="_blank">'+response.name+'</a>');
		$('div#login_pic').html('<a href="http://www.facebook.com/profile.php?id='+uid+'" target="_blank"><img src="http://graph.facebook.com/'+uid+'/picture?type=large" height="77" width="77"></img></a>');
		});
		
		var url = "'/account/fb_connect/"+uid+"'";
		$('button.formdev_fb').attr('onclick','window.location='+url);
		$('#input_login').toggle(false);
		$('#fb_login').toggle('slow');
		$.post('/account/facebook/' + uid);
	  } else if (response.status === 'not_authorized') {
	    // the user is logged in to Facebook, 
	    // but has not authenticated your app
	  } else {
	    // the user isn't logged in to Facebook.
	  }
	  });
	}
	catch(Exception)
	{}
	var fsize = 16;
	do
	{
		var verse_h = parseInt($('#verse-wrapper').css('height'));
		if(verse_h > 83)
		{
			$('#verse-wrapper').css('font-size',fsize+'px');
			$('#verse-wrapper').css('line-height',(fsize+7)+'px');
		}
		fsize --;
	}while(verse_h > 83);
	
 });

var i = 0;
$(function() {
	// run the currently selected effect
	function runEffect() {
		//this rand should be array shuffling
		i =  Math.floor(Math.random()*photoarray.length);
		document.getElementById("himage").src = photoarray[i];
		document.getElementById("hcaption").src = captionarray[i];
		document.getElementById("hlink").href = linkarray[i];
		$( "#header_caption" ).hide();
		// get effect type from 
		var selectedEffect = "fold";
		// most effect types need no options passed by default
		var options = {};
		$( "#header_pic" ).show( selectedEffect, options, 500, callback );
	};
	
	// run the currently selected effect
	function runEffect1() {
		// get effect type from 
		var selectedEffect = "fold";
		// most effect types need no options passed by default
		var options = {};
		$( "#header_caption" ).show( selectedEffect, options, 500, callback1 );
	};

	//callback function to bring a hidden box back
	function callback() {
		runEffect1();
	};
	
	function callback1(){};

	// set effect from select menu value
	$( "#hidden_button" ).click(function() {
		runEffect();
		return false;
	});

	$( "#header_pic" ).hide();
	$( "#header_caption" ).hide();
});

var t;

function effect() {
	$("#hidden_button").click();
	t = setTimeout("effect()", 10000);
}
function onload() {
	effect();
}
</script>
</head>

<body onload="onload()">
<div align="center" id="zoom-image-container1" style="position:fixed; top:0; left:0; width:100%; height:100%; display:none; background-color: #000000; opacity:0.97; filter:Alpha(opacity=97); z-index:9998"><div style="float:right"><img src="<?php echo base_url();?>images/close-icon.png" /></div></div>
<div align="center" id="zoom-image-container" style="color: #ffffff; position:fixed; display:none; z-index:9999"></div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=168991706515536";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="wrapper">
  <div id="navbar">
    <div id="navlinks" align="right">
    	<?php  
    	$css_selected = 'navlinkSelected';
    	$css_normal = 'navlink';

    	$navclass = array(
	    	'home'=>$css_normal,
	    	'announcements'=>$css_normal,
	    	'reflections'=>$css_normal,
	    	'files'=>$css_normal,
	    	'facilitator'=>$css_normal,
	    	'gallery'=>$css_normal,
	    	'about'=>$css_normal
	    ); 
	    //the code below could be better if implemented as switch case
    	if($controller == 'home'){
	    	$navclass['home']=$css_selected;
	    }
    	elseif($controller == 'announcements'){
	    	$navclass['announcements']=$css_selected;
	    }
    	elseif($controller == 'reflections'){
	    	$navclass['reflections']=$css_selected;
	    }
    	elseif($controller == 'files'){
	    	$navclass['files']=$css_selected;
	    }
    	elseif($controller == 'facilitator'){
	    	$navclass['facilitator']=$css_selected;
	    }
    	elseif($controller == 'gallery'){
	    	$navclass['gallery']=$css_selected;
	    }
    	elseif($controller == 'about'){
	    	$navclass['about']=$css_selected;
	    }
    	?>
    	<a id="home" class="<?php echo $navclass['home']; ?>" href="<?php echo base_url();?>home">HOME</a><a id="announcements" class="<?php echo $navclass['announcements'];?>" href="<?php echo base_url();?>announcements">ANNOUNCEMENTS</a><a id="reflections" class="<?php echo $navclass['reflections'];?>" href="<?php echo base_url();?>reflections">REFLECTIONS</a><a id="downloads" class="<?php echo $navclass['files'];?>" href="<?php echo base_url();?>files">DOWNLOADS</a><a id="facilitators" class="<?php echo $navclass['facilitator'];?>" href="<?php echo base_url();?>facilitator">FACILITATORS</a><a id="gallery" class="<?php echo $navclass['gallery'];?>" href="<?php echo base_url();?>gallery">GALLERY</a><a id="about" class="<?php echo $navclass['about'];?>" href="<?php echo base_url();?>about">ABOUT</a>
    </div>
    <div id="navbg"></div>
  </div> <!--end of navbar -->
	<a id="hlink" href="">
		<div id="header_part">
			<div id="header_pic">
				<img id="himage"/>
			</div>
			<div id="header_caption">
				<img id="hcaption"/>
			</div>
		</div>
	</a>	
  <div id="pagebody">
  	<div id="pagebody_left" <?php if($controller == 'facipage' || $controller == 'course_evaluation') echo 'style="width:980px;"';?>>