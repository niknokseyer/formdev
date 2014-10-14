<div id="com_proj_container">
	<div id="title_container" class="title_post">
		<div id="title">Edit Project Milestone Status</div>
	</div>
	<br />
	<div class="body_post">
		<?php $str = str_replace(' ','_',$committee_info->name); $str1 = str_replace(' ','_',$project_info->project);?>
		<?php $attr = array('onsubmit' => 'return check_input()'); echo form_open('committees/project_milestones/'.$str.'/'.$str1.'/update_status/'.$proj_milestone->id.'/'.$caller, $attr);?>
			<table style="width:100%">
				<tr>
					<td>
						<?php
							$status = array(
							  'Pending'  => 'Pending',
							  'Done'    => 'Done'
							);
							echo form_label('Status:', 'status').' ';
							echo form_dropdown('status',$status,$proj_milestone->status, 'class="status" style="width:462px;"');
						?>
					</td>
					<td align="center">
						<input class="readmore_button" type="submit" value="GO!" />
					</td>
				</tr>
			</table>
		<?php echo '</form>';?>
	</div>
</div>