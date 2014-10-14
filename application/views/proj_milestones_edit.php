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
		var temp = $('#milestone').val();
		var temp1 = $('#datepicker').val();
		if(temp != '' && temp1 != '')
			return true;
		else
			return false;
	}
</script>
<div id="com_proj_container">
	<div id="title_container" class="title_post">
		<div id="title">Edit Project Milestone Details</div>
	</div>
	<br />
	<div class="body_post">
		<?php $str = str_replace(' ','_',$committee_info->name); $str1 = str_replace(' ','_',$project_info->project);?>
		<?php $attr = array('onsubmit' => 'return check_input()'); echo form_open('committees/project_milestones/'.$str.'/'.$str1.'/update/'.$proj_milestone->id, $attr);?>
			<table style="width:100%">
				<tr>
					<td colspan="3">
						<?php 
							echo form_label('Milestone:', 'milestone').' ';
							echo form_input('milestone', $proj_milestone->milestone, 'id="milestone" style="width:540px;"');
						?>
					</td>
				</tr>
				<tr>
					<td>
						<?php 
							echo form_label('Date Due:', 'date_due').' ';
							echo form_input('date_due', $proj_milestone->date_due, 'id="datepicker" style="width:110px;"');
						?>
					</td>
					<td>
						<?php
							echo form_label('Faci:', 'user_list').' ';
							echo form_dropdown('user_list',$user_list,$faci_id, 'class="user_dropdown" style="width:200px;"');
						?>
					</td>
					<td>
						<?php
							$status = array(
							  'Pending'  => 'Pending',
							  'Done'    => 'Done'
							);
							echo form_label('Status:', 'status').' ';
							echo form_dropdown('status',$status,$proj_milestone->status, 'class="status" style="width:110px;"');
						?>
					</td>
				</tr>
				<tr>
					<td>
						&nbsp;
					</td>
				</tr>
				
				<tr>
					<td colspan='3' align="center">
						<input class="readmore_button" type="submit" value="GO!" />
					</td>
				</tr>
			</table>
		<?php echo '</form>';?>
	</div>
</div>