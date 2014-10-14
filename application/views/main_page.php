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
</script>
<style>
	a.projlink{
		color:#636363;
	}
	
	a.projlink:hover{
		text-decoration:underline;
	}
	
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
<div class="body_post" id="latest_reflection" style="border-right:solid thin; border-bottom:solid thin; border-left:solid thin; border-color:#d2d3ca; padding:0px 0px 0px 0px; -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset; -moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset; box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset; background: url('<?php echo base_url();?>images/latest.png'); background-repeat:no-repeat; padding-left: 165px; height:30px;">
	<div style="padding-top:4px; width:455px; white-space:nowrap; overflow:hidden; text-overflow:ellipsis;"><a href="<?php echo base_url().'reflections/article/'.$article[0]->url_title; ?>"><strong><?php echo '<span style="text-transform: capitalize">"'.$article[0]->title.'"</span> by '.$article[0]->firstname.' '.$article[0]->lastname; ?></strong></a></div>
</div>
<br />
<div class="body_post" id="command_center" style="border-right:solid thin; border-bottom:solid thin; border-left:solid thin; border-color:#d2d3ca; -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset; -moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset; box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset; background: url('<?php echo base_url();?>images/command_center.png'); background-repeat:no-repeat; padding-left: 165px; height:30px;">
	<div style="padding-top:4px;">
		<?php if(isset($pk_accounts) && $pk_accounts == true):?>
			<span style="padding:0 12px;"><?php echo anchor('facilitator/manage','Accounts', 'class="admin_menu"');?></span>
			<span> | </span>
		<?php endif; ?>
		<span style="padding:0 12px;"><?php echo anchor('events','Events', 'class="admin_menu"');?></span>
		<span> | </span>
		<span style="padding:0 12px;"><?php echo anchor('course_evaluation','Course Evaluation', 'class="admin_menu"');?></span>
		<span> | </span>
		<span style="padding:0 12px;"><?php echo anchor('portal_monitoring','Monitoring Portal', 'class="admin_menu"');?></span>
	</div>
</div>
<br />
<div class="body_post" style="text-align:justify;">
	<div style="text-align:center; width:46%; height: 164px; float:left; border:solid thin; border-color:#d2d3ca; padding:10px 10px 5px 10px; -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset; -moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset; box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset;">
		<font class="title_post" style="font-size:14pt">FORMDEV Class<?php if(($term == 2 || $term == 3) && $class != null)echo ' - <a href="'.base_url().'formdevclass/'.$class[0]->section.'" style="color:#009900;">'.$class[0]->section.'</a>'; ?></font><hr /><br />
		<?php if(($term == 2 || $term == 3) && $class != null): ?>
			<?php 
				$i = 0;
				if($class[0]->schedule != null && $class[0]->schedule != '-')
				{
					$day = substr($class[0]->schedule,0,strpos($class[0]->schedule,'s,'));
					$start_hour = substr($class[0]->schedule,strpos($class[0]->schedule,' ')+1,2);
					$start_min = substr($class[0]->schedule,strpos($class[0]->schedule,':')+1,2);
					$end_hour = substr($class[0]->schedule,strrpos($class[0]->schedule,' ')+1,2);
					$end_min = substr($class[0]->schedule,strrpos($class[0]->schedule,':')+1,2);
					
					foreach($dates as $d)
					{
						$date = DateTime::createFromFormat('Y-m-d', $d->date); 
						if($day == $date->format('l'))
							break;
						else
							$i++;
					}
					if($i != 0)
					{
						if($i > 1)
							$day_str = 'Days';
						else
							$day_str = 'Day';
						echo '<font class="title_post" style="color:#009900; font-size:28pt;">'.$i.' '.$day_str.'</font><br /><font style="font-size:11pt;">\'til the next class.</font><br /><br /><div><em>Have you already prepared for the next class?</em></div>';
					}
					else
					{	
						$before_str = '<font class="title_post" style="color:#009900; font-size:15pt;">See you in class later! :)<br /></font><font style="font-size:25pt;">&nbsp;</font><br /><br /><div><em>Are you ready for the class later?</em></div>';
						$during_str = '<font class="title_post" style="color:#009900; font-size:15pt;">Class going on! :)<br /></font><font style="font-size:25pt;">&nbsp;</font><br /><br /><div><em>God bless!</em></div>';
						$after_str = '<font class="title_post" style="color:#009900; font-size:28pt;">7 Days</font><br /><font style="font-size:11pt;">\'til the next class.</font><br /><br /><div style="font-size:9pt;"><em>Don\'t forget to upload the workbook assignments.</em></div>';
						if($today_time->hour < $start_hour)
							echo $before_str;
						else if($today_time->hour == $start_hour && $today_time->min < $start_min)
							echo $before_str;
						else if($today_time->hour == $start_hour && $today_time->min >= $start_min)
							echo $during_str;
						else if($today_time->hour >= $start_hour && $today_time->hour < $end_hour)
							echo $during_str;
						else if($today_time->hour == $end_hour && $today_time->min <= $end_min)
							echo $during_str;
						else
							echo $after_str;
					}
				}
				else
					echo '<font class="title_post" style="color:#009900; font-size:28pt;">-</font><br /><font style="font-size:11pt;">\'til the next class.</font>';
			?>
		<?php else: ?>
			<?php if($term == 1): ?>
				<br /><em>No FORMDEV Classes for Term 1</em><br /><br />
			<?php endif; ?>
		<?php endif; ?>
	</div>
	<div style="width:1%; float:left;">&nbsp;</div>
	<div style="text-align:center; width:46%; height: 164px; float:left; border:solid thin; border-color:#d2d3ca; padding:10px 10px 5px 10px; -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset; -moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset; box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset;">
		<font class="title_post" style="font-size:14pt">Bible Study<?php if($bs != null)echo ' - <a href="'.base_url().'bible_study/'.str_replace(' ','_',$bs[0]->name).'" style="color:#009900;">'.$bs[0]->name.'</a>'; ?></font><hr /><br />
		<?php if($bs != null): ?>
			<?php 
				$i = 0;
				if($bs[0]->schedule != null && $bs[0]->schedule != '-')
				{
					$day = substr($bs[0]->schedule,0,strpos($bs[0]->schedule,'s,'));
					$start_hour = substr($bs[0]->schedule,strpos($bs[0]->schedule,' ')+1,2);
					$start_min = substr($bs[0]->schedule,strpos($bs[0]->schedule,':')+1,2);
					$end_hour = substr($bs[0]->schedule,strrpos($bs[0]->schedule,' ')+1,2);
					$end_min = substr($bs[0]->schedule,strrpos($bs[0]->schedule,':')+1,2);
					foreach($dates as $d)
					{
						$date = DateTime::createFromFormat('Y-m-d', $d->date); 
						if($day == $date->format('l'))
							break;
						else
							$i++;
					}
					if($i != 0)
					{
						if($i > 1)
							$day_str = 'Days';
						else
							$day_str = 'Day';
						echo '<font class="title_post" style="color:#009900; font-size:28pt;">'.$i.' '.$day_str.'</font><br /><font style="font-size:11pt;">\'til the next bible study meeting.</font><br /><br /><div style="font-size:9pt;"><em>Have you finished doing your BS application?</em></div>';
					}
					else
					{	
						$before_str = '<font class="title_post" style="color:#009900; font-size:15pt;">See you in the BS later! :)<br /></font><font style="font-size:25pt;">&nbsp;</font><br /><br /><div><em>Are you ready for the BS later?</em></div>';
						$during_str = '<font class="title_post" style="color:#009900; font-size:15pt;">Bible Study going on! :)<br /></font><font style="font-size:25pt;">&nbsp;</font><br /><br /><div><em>God bless!</em></div>';
						$after_str = '<font class="title_post" style="color:#009900; font-size:28pt;">7 Days</font><br /><font style="font-size:11pt;">\'til the next bible study meeting.</font><br /><br /><div style="font-size:9pt;"><em>Start early on your BS application/s!</em></div>';
						if($today_time->hour < $start_hour)
							echo $before_str;
						else if($today_time->hour == $start_hour && $today_time->min < $start_min)
							echo $before_str;
						else if($today_time->hour == $start_hour && $today_time->min >= $start_min)
							echo $during_str;
						else if($today_time->hour >= $start_hour && $today_time->hour < $end_hour)
							echo $during_str;
						else if($today_time->hour == $end_hour && $today_time->min <= $end_min)
							echo $during_str;
						else
							echo $after_str;
					}
				}
				else
					echo '<font class="title_post" style="color:#009900; font-size:28pt;">-</font><br /><font style="font-size:11pt;">\'til the next bible study meeting.</font>';
			?>
		<?php endif; ?>
	</div>
	&nbsp;
	<div style="text-align:center; clear:both; border:solid thin; border-color:#d2d3ca; padding:10px 10px 5px 10px; -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset; -moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset; box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset;">
		<font class="title_post" style="font-size:14pt">Committee and Other Tasks</font><hr />
		<?php if($overdue_com_tasks != null): ?>
			<div class="title_post" style="font-size:10pt; text-align:left; color:#ff0000">
				Overdue Tasks
			</div>
			<?php foreach($overdue_com_tasks as $oc):?>
				<div style="text-align:left; padding-left:10px;">
					<?php 
						$str1 = str_replace(' ','_',$oc->name);
						$str2 = str_replace(' ','_',$oc->project);
						echo '<a class="projlink" href="'.base_url().'committees/project_milestones/'.$str1.'/'.$str2.'/edit_status/'.$oc->id.'"><b>'.$oc->project.'</b>: '.$oc->milestone.'</a>';
					?>
				</div>
			<?php endforeach; ?>
		<?php endif; ?>
		<?php if($com_tasks != null): ?>
			<?php $i = 0; foreach($com_tasks as $c):?>
				<?php if($i == 0 || $temp != $c->date_due): $temp = $c->date_due;?>
					<div class="title_post" style="font-size:10pt; text-align:left; color:#009900">
						<?php $date = DateTime::createFromFormat('Y-m-d', $c->date_due); ?>
						<?php echo $date->format('l, F j, Y');?>
					</div>
				<?php endif; ?>	
				<div style="text-align:left; padding-left:10px;">
					<?php 
						$str1 = str_replace(' ','_',$c->name);
						$str2 = str_replace(' ','_',$c->project);
						echo '<a class="projlink" href="'.base_url().'committees/project_milestones/'.$str1.'/'.$str2.'/edit_status/'.$c->id.'/'.$controller.'"><b>'.$c->project.'</b>: '.$c->milestone.'</a>';
					?>
				</div>
			<?php $i++; endforeach; ?>
		<?php else: ?>
			<?php if($overdue_com_tasks == null): ?>
				<br /><em>You have no remaining tasks due this week. :)</em><br /><br />
			<?php endif; ?>
		<?php endif; ?>
	</div>
	&nbsp;
	<div style="text-align:center; clear:both; border:solid thin; border-color:#d2d3ca; padding:10px 10px 5px 10px; -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset; -moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset; box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset;">
		<font class="title_post" style="font-size:14pt"><a href="<?php echo base_url(); ?>faci_outreach" style="color:#454646;">Facilitator Outreach</font><hr />
		<?php if($faci_outreach != null): ?>
			<?php $i = 0; foreach($faci_outreach as $o):?>
				<?php if($i == 0 || $temp != $o->date): $temp = $o->date;?>
					<div class="title_post" style="font-size:10pt; text-align:left; color:#009900">
						<?php $date = DateTime::createFromFormat('Y-m-d', $o->date); ?>
						<?php echo $date->format('l, F j, Y');?>
					</div>
				<?php endif; ?>	
				<div style="text-align:left; padding-left:10px;">
					<?php echo '<a class="projlink" href="'.base_url().'faci_outreach/'.$o->id.'">'.$o->type.' Outreach';?>
					<?php
						if($o->type == 'MaSci')
							echo ': 4:00pm at Gokongwei Hall, De La Salle University-Manila.</a>';
					?>
				</div>
			<?php $i++; endforeach; ?>
		<?php else: ?>
			<br /><em>You didn't sign up for any outreach activity this week. :(</em><br />
			<em>Go to <a style="color:#009900" href='<?php echo base_url();?>faci_outreach'>Faci Outreach Sign-up Page</a>.</em><br /><br />
		<?php endif; ?>
	</div>
</div>