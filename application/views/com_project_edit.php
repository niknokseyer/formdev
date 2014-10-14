<script>
    function check_input(){
		var temp = $('#proj_name').val();
		if(temp != '')
			return true;
		else
			return false;
	}
</script>
<div id="com_proj_container">
	<div id="title_container" class="title_post">
		<div id="title">Edit Committee Project Details</div>
	</div>
	<br />
	<div class="body_post">
		<?php $str = str_replace(' ','_',$committee_info->name); $str1 = str_replace(' ','_',$project_info->project);?>
		<?php $attr = array('onsubmit' => 'return check_input()'); echo form_open('committees/committee_projects/'.$str.'/edit_proj/'.$str1, $attr);?>
			<table style="width:100%">
				<tr>
					<td>
						<?php 
							echo form_label('Project Name:', 'proj_name').'</td><td>';
							echo form_input('proj_name', $project_info->project, 'id="proj_name" style="width:500px;"');
						?>
					</td>
				</tr>
				<tr>
					<td>
						&nbsp;
					</td>
				</tr>
				<tr>
					<td colspan='2' align="center">
						<input class="readmore_button" type="submit" value="GO!" />
					</td>
				</tr>
			</table>
		<?php echo '</form>';?>
	</div>
</div>