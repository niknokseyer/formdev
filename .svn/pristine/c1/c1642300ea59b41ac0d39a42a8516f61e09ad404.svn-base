<script>
	$(document).ready(function () {
		$(function() {
			$( "#datepicker" ).datepicker({
				changeMonth: true,
				changeYear: true,
				dateFormat: "yy-mm-dd",
				yearRange: "c-50,c"
			});
		});
		
		$('div.add_button').click(function () {
			$('div.add_event').toggle('blind');
			if($('#add_button').html()=='Add Event')
				$('#add_button').html("Cancel");
			else
				$('#add_button').html("Add Event");
		});
		
		$('#all_day').change(function () {
			var checked = $('#all_day').is(':checked');
			if(!checked)
			{
				$('#hour_dropdown').removeAttr('disabled');
				$('#min_dropdown').removeAttr('disabled');
			}
			else
			{
				$('#hour_dropdown').attr({disabled: 'disabled'});
				$('#min_dropdown').attr({disabled: 'disabled'});
			}
		});
	});
	function check_input(){
		var temp = $('#event').val();
		var temp1 = $('#datepicker').val();
		if(temp != '' && temp1 != '')
			return true;
		else
			return false;
	}
</script>
<div class="title_post" style="float:left;">
	Events
</div>
<div class="add_button" style="float:right; position:relative; top:3px;">
	<button id="add_button" class="readmore_button">Add Event</button>
</div>
<br/>
<div class='add_event' style=" clear:both; display:none;">
	<div class="body_post" style="padding-left:5px; background:#EFFFEB;">
		<b>Add Event</b>
		<?php $attr = array('onsubmit' => 'return check_input()'); echo form_open('events/add', $attr);?>
			<table>
				<tr>
					<td>
						<?php 
							echo form_label('Event:', 'event').'</td><td>';
							echo form_input('event', '', 'id="event" style="width:200px"');
						?>
					</td>
					
					<td>
						<?php 
							echo '&nbsp;&nbsp;&nbsp;'.form_label('Venue:', 'venue').'</td><td>';
							echo form_input('venue', '', 'id="venue" style="width:200px"');
						?>
					</td>
					<td>
						<?php 
							echo '&nbsp;&nbsp;&nbsp;'.form_label('Announce?', 'announcement').'</td><td>';
						?>
						<input id="announcement" type="checkbox" name="announcement" value="1"/>
					</td>
				</tr>
				<tr>
					<td>
						<?php 
							echo form_label('Date:', 'datepicker').'</td><td>';
							echo form_input('date', '', 'id="datepicker" style="width:200px"');
						?>
					</td>
					<td colspan="2">
						<table>
							<tr>
								<td>
									<?php 
										echo '&nbsp;&nbsp;&nbsp;'.form_label('All Day:', 'all_day').'</td><td>';
									?>
									<input id="all_day" type="checkbox" name="all_day" value="1"/>
								</td>
								<td>
									<?php
										for($h = 0; $h < 24; $h++)
											if($h < 10)
												$hour[$h] = '0'.$h;
											else
												$hour[$h] = $h;
										for($m = 0; $m < 60; $m++)
											if($m < 10)
												$min[$m] = '0'.$m;
											else
												$min[$m] = $m;
										echo '&nbsp;&nbsp;&nbsp;'.form_label('Time:', 'hour_dropdown').'</td><td>';
										echo form_dropdown('hour',$hour,'','id="hour_dropdown"').':';
										echo form_dropdown('min',$min,'','id="min_dropdown"');
									?>
								</td>
							</tr>
						</table>
					</td>
					<td align="center" colspan="2">
						<input class="readmore_button" type="submit" value="GO!" style="margin-left:0px;"/>
					</td>
				</tr>
			</table>
		<?php echo '</form>';?>
	</div>
</div>
<br />
<div id="cf_events" class="body_post">
	<?php if(count($cf_events) > 0): ?>
		<strong>Current and Future Events</strong>
		<table class="body_post" style="width:100%;">
			<tr style="background-color:#9bbb59; color:white">
				<th width="40%" align="center">Event</th>
				<th width="15%" align="center">Date</th>
				<th width="10%" align="center">Time</th>
				<th width="25%" align="center">Venue</th>
				<th width="10%" align="center"></th>
			</tr>
			<?php $i = 0; foreach($cf_events as $cf): ?>
				<?php if($i % 2 == 0): ?>
					<tr style='background-color:#d8e4bc; color: #000000;'>
				<?php else: ?>
					<tr style='background-color:#ebf1de; color: #000000;'>
				<?php endif; ?>
				<td>
					<?php echo '&nbsp;'.$cf->event; ?>
				</td>
				<td align="center">
					<?php $date = DateTime::createFromFormat('Y-m-d', $cf->date); ?>
					<?php echo $date->format('M j, Y');?>
				</td>
				<td align="center">
					<?php 
						if($cf->all_day)
							echo 'All Day';
						else
						{
							$date = DateTime::createFromFormat('H:i:s', $cf->time);
							echo $date->format('g:iA');
						}
					?>
				</td>
				<td align="center">
					<?php echo $cf->venue; ?>
				</td>
				<td align="center">
					<?php if($event_user_info['role'] == 1 || $event_user_info['role'] == 2 || $event_user_info['role'] == 13 || $event_user_info['userid'] == $cf->posted_by):?>
						<a href="<?php echo base_url(); ?>events/edit/<?php echo $cf->idevents;?>">
							<img src="<?php echo base_url(); ?>images/icons/edit.gif" />
						</a>
						<a href="<?php echo base_url(); ?>events/delete/<?php echo $cf->idevents;?>">
							<img src="<?php echo base_url(); ?>images/icons/delete.gif" />
						</a>
					<?php endif; ?>
				</td>
			<?php $i++; endforeach; ?>
		</table>
	<?php endif; ?>
</div>
<br />
<div id="old_events" class="body_post">
	<?php if(count($old_events) > 0): ?>
		<strong>Past Events</strong>
		<table class="body_post" style="width:100%;">
			<tr style="background-color:#9bbb59; color:white">
				<th width="40%" align="center">Event</th>
				<th width="15%" align="center">Date</th>
				<th width="10%" align="center">Time</th>
				<th width="25%" align="center">Venue</th>
				<th width="10%" align="center"></th>
			</tr>
			<?php $i = 0; foreach($old_events as $o): ?>
				<?php if($i % 2 == 0): ?>
					<tr style='background-color:#d8e4bc; color: #000000;'>
				<?php else: ?>
					<tr style='background-color:#ebf1de; color: #000000;'>
				<?php endif; ?>
				<td>
					<?php echo '&nbsp;'.$o->event; ?>
				</td>
				<td align="center">
					<?php $date = DateTime::createFromFormat('Y-m-d', $o->date); ?>
					<?php echo $date->format('M j, Y');?>
				</td>
				<td align="center">
					<?php 
						if($o->all_day)
							echo 'All Day';
						else
						{
							$date = DateTime::createFromFormat('H:i:s', $o->time);
							echo $date->format('g:iA');
						}
					?>
				</td>
				<td align="center">
					<?php echo '&nbsp;'.$o->venue; ?>
				</td>
				<td align="center">
					<?php if($event_user_info['role'] == 1 || $event_user_info['role'] == 2 || $event_user_info['role'] == 13 || $event_user_info['userid'] == $o->posted_by):?>
						<a href="<?php echo base_url(); ?>events/edit/<?php echo $o->idevents;?>">
							<img src="<?php echo base_url(); ?>images/icons/edit.gif" />
						</a>
						<a href="<?php echo base_url(); ?>events/delete/<?php echo $o->idevents;?>">
							<img src="<?php echo base_url(); ?>images/icons/delete.gif" />
						</a>
					<?php endif; ?>
				</td>
			<?php $i++; endforeach; ?>
		</table>
	<?php endif; ?>
</div>