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
	});	
	function check_input(){
		var temp = $('#datepicker').val();
		if(temp != '')
			return true;
		else
			return false;
	}
</script>
<div id="outreach_container">
	<div id="title_container" class="title_post">
		<div id="title">Edit Facilitator Outreach Details</div>
	</div>
	<br />
	<div class="body_post">
		<?php $attr = array('onsubmit' => 'return check_input()'); echo form_open('faci_outreach/edit_signup/'.$signup_info->id, $attr);?>
			<?php 
				$type = array(
				  'MaSci'  => 'MaSci'
				);
				$live = array(
					'1'  => 'Live',
					'0'  => 'Closed'
				);
			?>
			<table style="width:100%">
				<tr>
					<td>
						<?php
							echo form_label('Type:', 'outreach_type').'</td><td>'; 
							echo form_dropdown('outreach_type', $type, $signup_info->type); 
						?>
					</td>
				</tr>
				<tr>
					<td>
						<?php 
							echo form_label('Date:', 'outreach_date').'</td><td>';
							echo form_input('outreach_date', $signup_info->date, 'id="datepicker"');
						?>
					</td>
				</tr>
				<tr>
					<td>
						<?php 
							echo form_label('Status:', 'live').'</td><td>';
							echo form_dropdown('live', $live, $signup_info->live);
						?>
					</td>
				</tr>
				<tr>
					<td>
						&nbsp;
					</td>
				</tr>
				<tr>
					<td colspan='2' align="left">
						<input class="readmore_button" type="submit" value="GO!" />
					</td>
				</tr>
			</table>
		<?php echo '</form>';?>
	</div>
</div>