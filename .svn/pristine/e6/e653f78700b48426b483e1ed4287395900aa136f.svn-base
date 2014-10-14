<script>
	$(document).ready(function () {
		$('div.article-ctrl').click(function () {
			var elem1 = "#article-ctrl-btns";
			$(elem1).toggle('drop',{ direction: 'up' });
		});
		
		$(function() {
			$( "#datepicker" ).datepicker({
				changeMonth: true,
				changeYear: true,
				dateFormat: "yy-mm-dd",
				yearRange: "c-50,c"
			});
		});
		
		$('div.add_button').click(function () {
			$('div.add_project').toggle('blind');
			if($('#add_button').html()=='Add Milestone')
				$('#add_button').html("Cancel");
			else
				$('#add_button').html("Add Milestone");
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
<div id="com_container">
	<div id="title_container" class="title_post">
		<div id="title"><?php echo $project_info->project;?></div>
		<div id="sub-title" style="font-size:15pt"><?php echo $committee_info->name.' Project';?></div>
		<div style="font-size:15pt">&nbsp;</div>
	</div>
	<div class="body_post">
		<div class="article-ctrl" style="font-size: 10pt; font-weight:normal; cursor:pointer; display:block; height:24px; position:absolute; top:0px; left:610px; border:thin solid #ccc; border-top:0; -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset; -moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset; box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset;">
			<img src="<?php echo base_url()?>images/ellipsis.png" height="24px">
		</div>
		<div id="article-ctrl-btns" style="z-index:1000; font-size: 10pt; font-weight:normal; width: 100px; display:none; background-color:#ffffff; position:absolute; top:24px; left:534px; border:thin solid #ccc; -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset; -moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset; box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset;">
			<div id="edit-button" style="cursor:pointer; padding-left:5px; padding-top:5px; border-bottom:thin solid #ccc;">
				<font style="font-size:14px;">
					<a style="color:#636363;" href="<?php echo base_url(); ?>committees/committee_projects/<?php $str = str_replace(' ','_',$committee_info->name); echo $str; ?>/edit_project/<?php $str1 = str_replace(' ','_',$project_info->project); echo $str1; ?>">Edit Project</a>
				</font>
			</div>
			<div id="delete-button" style="cursor:pointer; padding-left:5px; padding-top:5px; border-bottom:thin solid #ccc;">
				<font style="font-size:14px;">
					<a style="color:#636363;" href="<?php echo base_url(); ?>committees/committee_projects/<?php $str = str_replace(' ','_',$committee_info->name); echo $str; ?>/delete_project/<?php $str1 = str_replace(' ','_',$project_info->project); echo $str1; ?>">Delete Project</a>
				</font>
			</div>
			<div id="back-button" style="cursor:pointer; padding-left:5px; padding-top:5px; border-bottom:thin solid #ccc;">
				<font style="font-size:14px;">
					<a style="color:#636363;" href='<?php echo base_url(); ?>committees/<?php echo $str; ?>/plans'>Back</a>
				</font>
			</div>
		</div>
		<div id="committee-projects-container">
			<div class="add_button" style="float:right; position:relative; top:-7px;">
				<button id="add_button" class="readmore_button">Add Milestone</button>
			</div>
			<br/>
			<div class='add_project' style=" clear:both; display:none;">
				<div class="body_post" style="padding-left:5px; background:#EFFFEB;">
					<b>Add Project Milestone</b>
					<?php $attr = array('onsubmit' => 'return check_input()'); $str = str_replace(' ','_',$committee_info->name); $str1 = str_replace(' ','_',$project_info->project); echo form_open('committees/project_milestones/'.$str.'/'.$str1.'/add/', $attr);?>
						<table style="width:100%">
							<tr>
								<td width="100%" colspan=3;>
									<?php 
										echo form_label('Milestone:', 'milestone').' ';
										echo form_input('milestone', '', 'id="milestone" style="width:538px"');
									?>
								</td>
							</tr>
							<tr>
								<td width="30%">
									<?php 
										echo form_label('Date Due:', 'date_due').' ';
										echo form_input('date_due', '', 'id="datepicker"');
									?>
								</td>
								<td width="30%">
									<?php
										echo form_label('Faci:', 'user_list').' ';
										echo form_dropdown('user_list',$user_list,'', 'class="user_dropdown"');
									?>
								</td>
								<td width="15%">
									<input class="readmore_button" type="submit" value="GO!" />
								</td>
							</tr>
						</table>
					<?php echo '</form>';?>
				</div>
				<br />
			</div>
			<?php if($proj_milestones != null): ?>
				<table style="width:100%">
					<tr style="background-color:#9bbb59; color:white">
						<th width="50%" align="center">Milestone</th>
						<th width="20%" align="center">Date Due</th>
						<th width="20%" align="center">Faci Accountable</th>
						<th width="10%" align="center"></th>
					</tr>
					<?php $j=0; foreach($proj_milestones as $pm): ?>
						<?php if($j % 2 == 0): ?>
							<tr style='background-color:#d8e4bc; color: #000000;'>
						<?php else: ?>
							<tr style='background-color:#ebf1de; color: #000000;'>
						<?php endif; ?>
							<td align='left'>
								<?php echo $pm->milestone; ?>
							</td>
							<td align='center'>
								<?php $date = DateTime::createFromFormat('Y-m-d', $pm->date_due); echo $date->format('F j, Y');?>
							</td>
							<td align='center'>
								<?php echo $pm->faci; ?>
							</td>
							<td align='center'>
								<?php 
									$str = str_replace(' ','_',$committee_info->name);
									$str1 = str_replace(' ','_',$project_info->project);
								?>
								<a href="<?php echo base_url(); ?>committees/project_milestones/<?php echo $str.'/'.$str1; ?>/edit/<?php echo $pm->id; ?>">
									<img src="<?php echo base_url(); ?>images/icons/edit.gif" />
								</a>
								<a href="<?php echo base_url(); ?>committees/project_milestones/<?php echo $str.'/'.$str1; ?>/delete/<?php echo $pm->id; ?>">
									<img src="<?php echo base_url(); ?>images/icons/delete.gif" />
								</a>
							</td>
						</tr>
					<?php $j++; endforeach; ?>
				</table>
			<?php endif; ?>
		</div>
	</div>
</div>