<script>
	$(document).ready(function () {
		$('#bday_img').click(function () {
			if($('#events_container').css('display') != 'none')
				$('#events_container').hide();
			$('#bday_container').toggle('blind');
		});
		$('#events_img').click(function () {
			if($('#bday_container').css('display') != 'none')
				$('#bday_container').hide();
			$('#events_container').toggle('blind');
		});
		
		$('div.verse-box').mouseover(function () {
			$(this).css('opacity', '0.8');
			$(this).css('cursor', 'pointer');
		});
		
		$('div.verse-box').mouseleave(function () {
			$(this).css('opacity', '1');
		});
		
		$('div.verse-box').click(function () {
			window.location = '<?php echo base_url();?>verses/viewVerse/'+$(this).attr('id');
		});$('div.video-box').mouseover(function () {
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
			
		if(<?php if(isset($isBirthday) && $isBirthday) echo 1; else echo 0; ?>)
		{
			var w = parseInt($("#zoom-image-container1").css('width'));
			var h = parseInt($("#zoom-image-container1").css('height'));
			if(w > h)
			{
				w -= 100;
				$("#zoom-image-container").html('<img id="large-pic" src="<?php echo base_url();?>images/fireworks.png" style="width:'+w+'px;"/>');
				var offset = (h - (746 * (w / 2048))) / 2;
				$("#zoom-image-container").css('top',offset+'px');
				$("#zoom-image-container").css('left','50px');
			}
			else
			{
				h -= 100;
				$("#zoom-image-container").html('<img id="large-pic" src="<?php echo base_url();?>images/fireworks1.png" style="height:'+h+'px;"/>');
				var offset = (w - (640 * (h / 960))) / 2;
				$("#zoom-image-container").css('left',offset+'px');
				$("#zoom-image-container").css('top','50px');
			}
			$("#zoom-image-container1").fadeIn('fast');
			$("#zoom-image-container").fadeIn('fast');
			$("body").css('overflow','hidden');
		}
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
<div id="title_container" class="title_post" style=" font-size:15pt; border-right:solid thin; border-bottom:solid thin; border-left:solid thin; border-color:#d2d3ca; padding:2px 2px 2px 5px; -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0), 0 0 40px rgba(0, 0, 0, 0.06) inset; -moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0), 0 0 40px rgba(0, 0, 0, 0.06) inset; box-shadow: 0 1px 4px rgba(0, 0, 0, 0), 0 0 40px rgba(0, 0, 0, 0.06) inset;">
	<table style='width:100%;'>
		<tr>
			<td>
				<?php 
					if(!$isBirthday)
					{
						if($today_time->hour >= 4 && $today_time->hour < 12)
							echo 'Good Morning, '.$name->nickname.'!';
						else if($today_time->hour >= 12 && $today_time->hour < 18)
							echo 'Good Afternoon, '.$name->nickname.'!';
						else if($today_time->hour >= 18 && $today_time->hour < 24)
							echo 'Good Evening, '.$name->nickname.'!';
						else if($today_time->hour >= 0 && $today_time->hour < 4)
							echo 'Bakit gising ka pa, '.$name->nickname.'?!';
					}
					else
						echo 'Happy Birthday, '.$name->nickname.'!';
				?>
			</td>
			<?php // if(count($birthdays) > 0 || count($events) > 0): ?>
				<td style="width:15%;" align="right" valign="middle">
					<?php $temp_size = 23;?>
					<div style="position: relative; padding-top:4px;">
						<?php if(count($events) > 0): ?>
							<img id="events_img" src="<?php echo base_url();?>images/icons/events_notif.png" width='<?php echo $temp_size;?>px' style="cursor:pointer;" />
						<?php else: ?>
							<img id="events_img" src="<?php echo base_url();?>images/icons/events.png" width='<?php echo $temp_size;?>px' style="cursor:pointer;" />
						<?php endif; ?>
						<?php if(count($birthdays) > 0): ?>
							<img id="bday_img" src="<?php echo base_url();?>images/icons/cake_notif.png" width='<?php echo $temp_size;?>px' style="cursor:pointer;" />
						<?php else: ?>
							<img id="bday_img" src="<?php echo base_url();?>images/icons/cake.png" width='<?php echo $temp_size;?>px' style="cursor:pointer;" />
						<?php endif; ?>
					</div>
				</td>
			<?php // endif; ?>
		</tr>
	</table>
</div>
<?php if(count($events) > 0): ?>
	<div id="events_container" class="body_post" style="width:608px; display:none; padding:5px 10px; border:solid thin; border-color:#d2d3ca;">
		<div class="title_post" style="font-size:12pt; text-align:left; color:#009900">
			Events
		</div>
		<?php $i = 0; foreach($events as $e):?>
			<?php if($i == 0 || $event_temp != $e->date): $event_temp = $e->date;?>
				<div class="title_post" style="font-size:10pt; text-align:left; padding-left:20px;">
					<?php $date = DateTime::createFromFormat('Y-m-d', $e->date); ?>
					<?php echo $date->format('F j, Y');?>
				</div>
			<?php endif; ?>	
				<div class="body_post" style="font-size:10pt; text-align:left;; padding-left:40px;">
					<?php
						if($e->venue != null && $e->venue != '') 
							$venue_str = ' at '.$e->venue;
						else
							$venue_str = '';
					?>
					
					<?php if(!$e->all_day): ?>
						<?php $time = DateTime::createFromFormat('H:i:s', $e->time); ?>
						<?php echo $time->format('h:i a').': ';?><strong style="color:#009900"><?php echo $e->event;?></strong><?php echo $venue_str;?>
					<?php else: ?>
						All Day: <strong style="color:#009900"><?php echo $e->event;?></strong><?php echo $venue_str;?>
					<?php endif; ?>
				</div>
		<?php $i++; endforeach; ?>
	</div>
<?php else: ?>
	<div id="events_container" class="body_post" style="width:608px; display:none; padding:5px 10px; border:solid thin; border-color:#d2d3ca;">
		<div style="text-align:center;">
			<em>Hi <?php echo $name->nickname.'! I was not informed about any events that is scheduled for the next 7 days. :)'?></em>
		</div>
	</div>
<?php endif; ?>
<?php if(count($birthdays) > 0): ?>
	<div id="bday_container" class="body_post" style="width:608px; display:none; padding:5px 10px; border:solid thin; border-color:#d2d3ca;">
		<div class="title_post" style="font-size:12pt; text-align:left; color:#009900">
			Birthdays
		</div>
		<?php foreach($birthdays as $b):?>
				<div class="body_post" style="font-size:10pt; text-align:left; color:#009900; padding-left:10px;">
					<?php $date = DateTime::createFromFormat('Y-m-d', $b->birthday); ?>
					<font style="color:#454646"><?php echo $date->format('F j, Y').': ';?></strong></font>
					<strong><?php echo $b->name;?></strong>
				</div>
		<?php endforeach; ?>
	</div>
<?php else: ?>
	<div id="bday_container" class="body_post" style="width:608px; display:none; padding:5px 10px; border:solid thin; border-color:#d2d3ca;">
		<div style="text-align:center;">
			<em>Hey <?php echo $name->nickname.'! Nothing to see here. There are no birthdays that I know of for today until the next 2 days. :)'?></em>
		</div>
	</div>
<?php endif; ?>
<div class="body_post" id="command_center" style="border-right:solid thin; border-bottom:solid thin; border-left:solid thin; border-color:#d2d3ca; -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset; -moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset; box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset; background: url('<?php echo base_url();?>images/command_center.png'); background-repeat:no-repeat; padding-left: 165px; height:30px;">
	<div style="padding-top:4px;">
		<?php if($role != 1):?>
			<?php if(isset($pk_accounts) && $pk_accounts == true):?>
				<span style="padding:0 14px;"><?php echo anchor('facilitator/manage','Manage Accounts', 'class="admin_menu"');?></span>
				<span> | </span>
			<?php endif; ?>
			<span style="padding:0 14px;"><?php echo anchor('events','Manage Events', 'class="admin_menu"');?></span>
			<span> | </span>
			<span style="padding:0 14px;"><?php echo anchor('reflections/add_form','Post Reflection Article', 'class="admin_menu"');?></span>
		<?php else: ?>
			<?php if(isset($pk_accounts) && $pk_accounts == true):?>
				<span style="padding:0 12px;"><?php echo anchor('facilitator/manage','Accounts', 'class="admin_menu"');?></span>
				<span> | </span>
			<?php endif; ?>
			<span style="padding:0 12px;"><?php echo anchor('events','Events', 'class="admin_menu"');?></span>
			<span> | </span>
			<span style="padding:0 12px;"><?php echo anchor('course_evaluation','Course Evaluation', 'class="admin_menu"');?></span>
			<span> | </span>
			<span style="padding:0 12px;"><?php echo anchor('portal_monitoring','Monitoring Portal', 'class="admin_menu"');?></span>
		<?php endif; ?>
	</div>
</div>
<br />
<div class="body_post" id="latest_reflection" style="border-right:solid thin; border-left:solid thin; border-color:#d2d3ca; padding:0px 0px 0px 0px; -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset; -moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset; box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset; background: url('<?php echo base_url();?>images/latest.png'); background-repeat:no-repeat; padding-left: 165px; height:30px;">
	<div style="padding-top:4px; width:455px; white-space:nowrap; overflow:hidden; text-overflow:ellipsis;"><a href="<?php echo base_url().'reflections/article/'.$article[0]->url_title; ?>"><strong><?php echo '<span style="text-transform: capitalize">"'.$article[0]->title.'"</span> by '.$article[0]->firstname.' '.$article[0]->lastname; ?></strong></a></div>
</div>
<div style="font-family:Trebuchet MS; padding-left:1px;">
	<?php $i = 0; shuffle($verses); foreach($verses as $v):?>
		<?php 
			if($i % 6 == 0)
			{
				$r = 100; $g = 0; $b = 0;
			}
			else if($i % 6 == 1)
			{
				$r = 150; $g = 150; $b = 0;
			}
			else if($i % 6 == 2)
			{
				$r = 0; $g = 100; $b = 0;
			}
			else if($i % 6 == 3)
			{
				$r = 0; $g = 100; $b = 100;
			}
			else if($i % 6 == 4)
			{
				$r = 0; $g = 0; $b = 100;
			}
			else if($i % 6 == 5)
			{
				$r = 100; $g = 0; $b = 100;
			}
		?>
		
		<?php if($i == 0 || $i == 1 || $i == 4 || $i == 5):?>
			<div id="<?php echo $v->idverse; ?>" class="verse-box" style="float:left; width:157.25px; height:155px; background:url('<?php echo $v->image; ?>'); background-size:200%; background-position-x:80%; background-position-y:20%; color: #fff;">
				<div style="width:147.25px; height:150px; padding: 5px 0px 0px 10px; -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0), 0px 0px 0px 200px rgba(<?php echo $r.','.$g.','.$b.',';?> 0.8) inset; -moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0), 0px 0px 0px 200px rgba(<?php echo $r.','.$g.','.$b.',';?> 0.8) inset; box-shadow: 0 1px 4px rgba(0, 0, 0, 0), 0px 0px 0px 200px rgba(<?php echo $r.','.$g.','.$b.',';?> 0.8) inset; text-shadow: 2px 2px 2px #000;">
					<div style="text-align:left; width:137.25px; height:120px; font-size:10pt; line-height:15pt; overflow:hidden;">
						<?php  echo $v->text; ?>
					</div>
					<div style="height:8px;">&nbsp;</div>
					<div style="text-align:right; width:137.25px; height:25px; font-size:10pt; line-height:15pt;">
						<?php echo "- ".$v->book." ".$v->chapter.":".$v->verse; ?>
					</div>
				</div>
			</div>
		<?php else:?>
			<div id="<?php echo $v->idverse; ?>" class="verse-box" style="float:left; width:314.5px; height:155px; background:url('<?php echo $v->image; ?>'); background-size:200%; background-position-x:50%; background-position-y:20%; color: #fff;">
				<div style="width:304.5px; height:150px; padding: 5px 0px 0px 10px; -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0), 0px 0px 0px 200px rgba(<?php echo $r.','.$g.','.$b.',';?> 0.8) inset; -moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0), 0px 0px 0px 200px rgba(<?php echo $r.','.$g.','.$b.',';?> 0.8) inset; box-shadow: 0 1px 4px rgba(0, 0, 0, 0), 0px 0px 0px 200px rgba(<?php echo $r.','.$g.','.$b.',';?> 0.8) inset; text-shadow: 2px 2px 2px #000;">
					<div style="text-align:left; width:294.5px; height:120px; font-size:13pt; line-height:18pt; overflow:hidden;">
						<?php  echo $v->text; ?>
					</div>
					<div style="height:5px;">&nbsp;</div>
					<div style="text-align:right; width:294.5px; height:25px; font-size:13pt; line-height:18pt;">
						<?php echo "- ".$v->book." ".$v->chapter.":".$v->verse; ?>
					</div>
				</div>
			</div>
		<?php endif; ?>
	<?php $i++; if($i == 6) break; endforeach; ?>
</div>
<div style="clear:both; height: 5px;"></div>
<div id="videos" class="body_post" style="clear:both; background: url('<?php echo base_url();?>images/videos.png'); background-repeat:no-repeat; height:170px;">
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