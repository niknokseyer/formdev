<style>
	#latest_reflection div a:link{
		color:#454646;
	}
	
	#latest_reflection div a:visited{
		color:#454646;
	}
	
	#latest_reflection div a:hover{
		color:#009900;
	}
	
	#command_center a:link{
		color:#454646;
	}
	
	#command_center a:visited{
		color:#454646;
	}
	
	#command_center a:hover{
		color:#009900;
	}
</style>
<script>
	$(document).ready(function () {
		$('div.video-box').mouseover(function () {
			$(this).css('opacity', '1');
			$(this).css('cursor', 'pointer');
		});
		
		$('div.video-box').mouseleave(function () {
			$(this).css('opacity', '0.8');
		});
		
		$('div.video-box').click(function () {
			load_video($(this).attr('id'));
		});
		
		$('#zoom-image-container1 img').mouseover(function () {
				$(this).css('cursor', 'pointer');
		});
		
		$('#zoom-image-container1').click(function () {
			$("#zoom-image-container").html('');
			$(this).fadeOut('fast');
			$("#zoom-image-container").fadeOut('fast');
			$("body").css('overflow','');
		});
		$('#zoom-image-container1 img').click(function () {
			$("#zoom-image-container").html('');
			$('#zoom-image-container1').fadeOut('fast');
			$("#zoom-image-container").fadeOut('fast');
			$("body").css('overflow','');
		});
	});
	function load_video(x){
		var w = parseInt($("#zoom-image-container1").css('width')) - 100;
		var h = parseInt($("#zoom-image-container1").css('height')) - 100;
		
		$("#zoom-image-container").html('<iframe width="'+w+'" height="'+h+'" src="http://www.youtube.com/embed/'+x+'?rel=0" frameborder="0" allowfullscreen></iframe>');
		$("#zoom-image-container").css('top','50px');
		$("#zoom-image-container").css('left','50px');
		$("#zoom-image-container1").fadeIn('fast');
		$("#zoom-image-container").fadeIn('fast');
		$("body").css('overflow','hidden');
	}
</script>
<div class="body_post" id="latest_reflection" style="border:solid thin; border-color:#d2d3ca; background: url('<?php echo base_url();?>images/latest.png'); background-repeat:no-repeat; padding-left: 165px; height:30px;">
	<div style="padding-top:4px; width:455px; white-space:nowrap; overflow:hidden; text-overflow:ellipsis;"><a href="<?php echo base_url().'reflections/article/'.$top_story[0]->url_title; ?>"><strong><?php echo '"'.$top_story[0]->title.'" by '.$top_story[0]->firstname.' '.$top_story[0]->lastname; ?></strong></a></div>
</div>
<span class="body_post">
	<article class="article">
		<?php if(isset($article)): ?>
			<?php echo $article->content; ?>
		<?php endif; ?>
	</article>
</span>
<div id="videos" class="body_post" style="background: url('<?php echo base_url();?>images/videos.png'); background-repeat:no-repeat; height:170px;">
	<div style="border:solid 2px; border-color:#000; height:97px; position:relative; top:60px; padding: 5px 5px;">
		<div id="8DmCdIWDk5s" class="video-box" style="float:left; width:306px; background-color:#000; height: 95px; border: solid thin #fff; opacity:0.8;">
			<table>
				<tr>
					<td>
						<img src="http://i1.ytimg.com/vi/8DmCdIWDk5s/mqdefault.jpg" height="89px" />
					</td>
					<td style="text-align:left; color:#fff; padding-left:5px;">
						<strong>FORMDEV - Through the Brothers</strong>
						<br />
						April 21, 2012
					</td>
				</tr>
			</table>
		</div>
		<div id="8oFPlgvmSvI" class="video-box" style="float:left; width:306px; background-color:#000; height: 95px; border: solid thin #fff; opacity:0.8;">
			<table>
				<tr>
					<td>
						<img src="http://i1.ytimg.com/vi/8oFPlgvmSvI/mqdefault.jpg" height="89px" />
					</td>
					<td style="text-align:left; color:#fff;  padding-left:5px;">
						<strong>Life of A Facilitator</strong>
						<br />
						April 21, 2012
					</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="right" style="position:relative; top:-85px;">
		<a href="http://www.facebook.com/FORMDEV" title="Follow FORMDEV in Facebook" target="_blank"><img src="<?php echo base_url();?>images/icons/facebook.png" /></a>
		<a href="http://www.twitter.com/CCSFORMDEV" title="Follow FORMDEV in Twitter" target="_blank"><img src="<?php echo base_url();?>images/icons/twitter.png" /></a>
		<a href="http://www.youtube.com/CCSFORMDEV" title="Follow FORMDEV in YouTube" target="_blank"><img src="<?php echo base_url();?>images/icons/youtube.png" /></a>	
		<a href="http://raymundsison.wordpress.com/formdev" title="FORMDEV - Raymund Sison" target="_blank"><img src="<?php echo base_url();?>images/icons/wordpress.png" /></a>					
	</div>
</div>