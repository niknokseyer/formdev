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
		
		$('#cancel_button').click(function () {
			window.location = "<?php echo base_url();?>events";
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
<div class="title_post">
	Edit Event: <?php echo $event_info[0]->event;?>
</div>
<br />
<div class='edit_event'>
	<div class="body_post" style="padding-left:5px;">
		<?php $attr = array('onsubmit' => 'return check_input()'); $hidden = array('id' => $event_info[0]->idevents, 'announcement' => $event_info[0]->announcement); echo form_open('events/update', $attr, $hidden);?>
			<table>
				<tr>
					<td>
						<?php 
							echo form_label('Event:', 'event').'</td><td>';
							echo form_input('event', $event_info[0]->event, 'id="event" style="width:250px"');
						?>
					</td>
					
					<td>
						<?php 
							echo '&nbsp;&nbsp;&nbsp;'.form_label('Venue:', 'venue').'</td><td>';
							echo form_input('venue', $event_info[0]->venue, 'id="venue" style="width:250px"');
						?>
					</td>
				</tr>
				<tr>
					<td>
						<?php 
							echo form_label('Date:', 'datepicker').'</td><td>';
							echo form_input('date', $event_info[0]->date, 'id="datepicker" style="width:250px"');
						?>
					</td>
					<td colspan="2">
						<table>
							<tr>
								<td>
									<?php 
										echo '&nbsp;&nbsp;&nbsp;'.form_label('All Day:', 'all_day').'</td><td>';
									?>
									<?php if($event_info[0]->all_day):?>
										<input id="all_day" type="checkbox" name="all_day" value="1" checked/>
									<?php else: ?>
										<input id="all_day" type="checkbox" name="all_day" value="1"/>
									<?php endif;?>
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
										if($event_info[0]->all_day)
										{
											echo form_dropdown('hour',$hour,'','id="hour_dropdown" disabled').':';
											echo form_dropdown('min',$min,'','id="min_dropdown" disabled');
										}
										else
										{
											$time = DateTime::createFromFormat('H:i:s', $event_info[0]->time);
											echo form_dropdown('hour',$hour,$time->format('G'),'id="hour_dropdown"').':';
											echo form_dropdown('min',$min,$time->format('i'),'id="min_dropdown"');
										}
									?>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td align="center" colspan="4">
						&nbsp;
					</td>
				</tr>
				<tr>
					<td align="center" colspan="4">
						<input class="readmore_button" type="submit" value="GO!" style="float:right; margin-left:0px;"/>
						<div style="float:right;">&nbsp;&nbsp;&nbsp;&nbsp;</div>
						<div id="cancel_button" class="readmore_button" style="float:right; background:url('<?php echo base_url();?>images/buttonLbg.png'); width:87px; height:27px;">Cancel</div>
					</td>
				</tr>
			</table>
		<?php echo '</form>';?>
	</div>
</div>