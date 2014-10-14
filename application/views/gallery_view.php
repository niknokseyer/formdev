<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<span class="title_post"><?php echo anchor("/gallery/","Gallery","class='gallery_title'"); ?>
</span>
<script type="text/javascript" src="<?php echo base_url()?>javascript/jquery.pikachoose.js"></script>
<script>
	$(document).ready(function (){
		$("#pikame").PikaChoose({carousel:true,carouselOptions:{wrap:'circular'}});
		
		$('span#slideshow').mouseover(function () {
			if($('div#slideshow').css('display')=='none')
			{
				$(this).css('cursor', 'pointer');
				$('span#slideshow').css('text-decoration','underline');
			}
			else
				$(this).css('cursor', 'default');
		});	
		$('span#slideshow').mouseleave(function () {
			$('span#slideshow').css('text-decoration','none');
		});	
		$('span#list').mouseover(function () {
			if($('div#list').css('display')=='none')
			{
				$(this).css('cursor', 'pointer');
				$('span#list').css('text-decoration','underline');
			}
			else
				$(this).css('cursor', 'default');
		});
		$('span#list').mouseleave(function () {
			$('span#list').css('text-decoration','none');
		});
		
		$('span#slideshow').click(function () {
			if($('div#slideshow').css('display') == 'none')
			{
				$('div#list').hide('fade');
				$('div#slideshow').show('fade');
				$('span#slideshow').css('color','#009900');
				$('span#list').css('color','#454646');
				$('.pika-stage').css('height','250px');
			}
		});
		$('span#list').click(function () {
			if($('div#list').css('display') == 'none')
			{
				$('div#slideshow').hide('fade');
				$('div#list').show('fade');
				$('span#list').css('color','#009900');
				$('span#slideshow').css('color','#454646');
			}
		});
		
		$('.list_img').mouseover(function () {
			$(this).css('cursor', 'pointer');
		});
		$('#zoom-image-container1 img').mouseover(function () {
			$(this).css('cursor', 'pointer');
		});
		$('#zoom-image-container1').click(function () {
			$(this).fadeOut('fast');
			$("#zoom-image-container").fadeOut('fast');
			$("div.controls").fadeOut('fast');
			$("div.controls1").fadeOut('fast');
			bPlay = false;
			$('div.controls1 table tr td img').attr('src','<?php echo base_url();?>css/play.png');
			$('div.controls1').attr('id','play');
			$("body").css('overflow','');
		});
		$('#zoom-image-container1 img').click(function () {
			$('#zoom-image-container1').fadeOut('fast');
			$("#zoom-image-container").fadeOut('fast');
			$("div.controls").fadeOut('fast');
			$("div.controls1").fadeOut('fast');
			bPlay = false;
			$('div.controls1 table tr td img').attr('src','<?php echo base_url();?>css/play.png');
			$('div.controls1').attr('id','play');
			$("body").css('overflow','');
		});
		
		$('div.controls table tr td img').mouseover(function () {
			$(this).css('cursor', 'pointer');
		});
		
		$('div.controls1 table tr td img').mouseover(function () {
			$(this).css('cursor', 'pointer');
		});
		
		$('div.controls').click(function () {
			if($(this).attr('id') == 'prev')
			{
				if(parseInt($(this).attr('current')) > 0)
				{
					show_caption((parseInt($(this).attr('current')) - 1));
					replace_image(pics[(parseInt($(this).attr('current')) - 1)]);
				}
				else
				{
					replace_image(pics[(pics.length - 1)]);
					show_caption((pics.length - 1));
				}
			}
			else if($(this).attr('id') == 'next')
			{
				if(parseInt($(this).attr('current')) < (pics.length - 1))
				{
					show_caption((parseInt($(this).attr('current')) + 1));
					replace_image(pics[(parseInt($(this).attr('current')) + 1)]);
				}
				else
				{
					replace_image(pics[0]);
					show_caption(0);
				}
			}
		});
		
		$('div.controls1 table tr td img').click(function () {
			if($('div.controls1').attr('id') == 'play')
			{
				$(this).attr('src','<?php echo base_url();?>css/pause.png');
				$('div.controls1').attr('id','pause');
				bPlay = true;
			}
			else
			{
				$(this).attr('src','<?php echo base_url();?>css/play.png');
				$('div.controls1').attr('id','play');
				bPlay = false;
			}
		});
	});
	
	var pics = new Array(<?php
				$i = 0;
				foreach($photos as $p)
				{
					echo '"'.$p['source'].'"';
					if($i < (count($photos)-1))
						echo ',';
					$i++;
				}
			?>);
	
	function find_idx(x){
		return pics.indexOf(x);
	}
	
	function load_image(x){
		var h = parseInt($("#zoom-image-container1").css('height')) - 100;
		$("#zoom-image-container").html('<img id="large-pic" src="'+x+'" style="height:'+h+'px;"/>');
		var w = parseInt($("#zoom-image-container1").css('width')) - 100;
		if(parseInt($("#zoom-image-container").css('width')) > parseInt($("#zoom-image-container1").css('width')))
		{
			$("#large-pic").css('width',w+'px');
			$("#large-pic").css('height','');
		}
		var x_pos = (parseInt($("#zoom-image-container1").css('width'))/2) - (parseInt($("#zoom-image-container").css('width'))/2);
		$("#zoom-image-container").css('left',x_pos+'px');
		var y_pos = (parseInt($("#zoom-image-container1").css('height'))/2) - (parseInt($("#zoom-image-container").css('height'))/2);
		//y_pos = y_pos / 2;
		$("#zoom-image-container").css('top',y_pos+'px');
		$("#zoom-image-container1").fadeIn('fast');
		$("div.controls").fadeIn('fast');
		$("div.controls1").fadeIn('fast');
		//$("div.controls").css('height',(h+70)+'px');
		$("div.controls").attr('current',find_idx(x));
		$("#play-ctrls").css('width',(w+40)+'px');
		$("#zoom-image-container").fadeIn('fast');
		$("body").css('overflow','hidden');
		show_caption(find_idx(x));
	}
	
	function replace_image(x){
		var h = parseInt($("#zoom-image-container1").css('height')) - 100;
		$("#zoom-image-container").html('<img id="large-pic" src="'+x+'" style="height:'+h+'px;"/>');
		var w = parseInt($("#zoom-image-container1").css('width')) - 100;
		if(parseInt($("#zoom-image-container").css('width')) > parseInt($("#zoom-image-container1").css('width')))
		{
			$("#large-pic").css('width',w+'px');
			$("#large-pic").css('height','');
		}
		var x_pos = (parseInt($("#zoom-image-container1").css('width'))/2) - (parseInt($("#zoom-image-container").css('width'))/2);
		$("#zoom-image-container").css('left',x_pos+'px');
		var y_pos = (parseInt($("#zoom-image-container1").css('height'))/2) - (parseInt($("#zoom-image-container").css('height'))/2);
		//y_pos = y_pos / 2;
		$("#zoom-image-container").css('top',y_pos+'px');
		$("#play-ctrls").css('width',(w+40)+'px');
		$("div.controls").attr('current',find_idx(x));
	}
	
	function show_caption(i){
		for(j = 0; j < <?php echo count($photos);?>; j++)
			if(j == i)
				$('#caption_'+j).css('display','');
			else
				$('#caption_'+j).css('display','none');
	}
	
	var bPlay = false;
	
	var slideshow=setInterval(function(){play()},3000);
	function play(){
		if(bPlay)
		{
			var idx = parseInt($('div.controls').attr('current'));
			if(idx < (pics.length - 1))
			{
				replace_image(pics[(idx + 1)]);
				show_caption((idx + 1));
			}
			else
			{
				replace_image(pics[0]);
				show_caption(0);
			}
		}
	}
</script>
<div id="prev" class="controls" style="position:fixed; left:-3px; top:30px; height:85%; width:28px; z-index:9999; display:none;">
	<table style="height:100%; width:28px;">
		<tr>
			<td>
				<img src="<?php echo base_url(); ?>css/prev.png" width="28px" />
			</td>
		</tr>
	</table>
</div>
<div id="next" class="controls" style="position:fixed; right:3px; top:30px; height:85%; width:28px; z-index:9999; display:none;">
	<table style="height:100%; width:28px;">
		<tr>
			<td>
				<img src="<?php echo base_url(); ?>css/next.png" width="28px" />
			</td>
		</tr>
	</table>
</div>
<div id="play" class="controls1" style="position:fixed; left:0px; bottom:0px; width:100%; z-index:10000; display:none; padding:0px 30px; opacity:0.90; background-color:#000;">
	<table id="play-ctrls" style="text-align:center;">
		<tr>
			<td valign="middle" style="padding-top:10px; width:46px;">
				<img src="<?php echo base_url(); ?>css/play.png" height="46px" />
			</td>
			<td style="width:10px;">
				&nbsp;
			</td>
			<td align="left" id="caption">
				<?php $i = 0; foreach($photos as $p): ?>
					<div id="caption_<?php echo $i?>" class="body_post" style="font-family:Trebuchet MS,Arial; color:#fff; display: none">
						<?php 
							if(isset($p['name']))
							{
								$c = $p['name'];
								echo $c;
							}
							else
								echo '';
						?>
					</div>
				<?php $i++; endforeach; ?>
			</td>
		</tr>
	</table>
</div>
<div class="title_post" style="font-size:10pt"><span id="list" style="color:#009900;">List</span> | <span id="slideshow">Slideshow</span></div>
<br />
<span class="body_post">

<div id="list" style="display:block">
	<ul class="box">
	<?php  foreach ($photos as $photo):?>
	<li><div style="width:178px; height:130px;">
		<img class="list_img" src="<?php echo $photo['source'];?>" width="178px" height="130px" onclick="load_image('<?php echo $photo['source'];?>')" />
	</div></li>
	<?php endforeach; ?>
	</ul>
</div>
<div id="slideshow" style="display:none">
	<div class="pikachoose">
	<ul id="pikame" class="jcarousel-skin-pika">
	<?php  foreach ($photos as $photo):?>
	<li><a href="<?php echo $photo['source']; ?>" target="_blank"><img src="<?php echo $photo['source']; ?>"/></a><span><?php if(isset($photo['name']) && $photo['name']!=null) echo $photo['name']; ?></span></li>
	<?php endforeach; ?>
	</ul>
	</div>
</div>
</br>

<center>
<div class="fb-comments" data-href="<?php echo current_url(); ?>/" data-num-posts="2" data-width="630"></div>
</center> 
    
</span>
