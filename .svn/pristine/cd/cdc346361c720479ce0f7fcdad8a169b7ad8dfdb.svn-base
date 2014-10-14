<script>
	$(document).ready(function () {
		<?php if($isFaci): ?>
			$('div.article-ctrl').click(function () {
				var elem1 = "#article-ctrl-btns";
				$(elem1).toggle('drop',{ direction: 'up' });
			});
			
			$('#home-button').click(function () {
				var elem1 = "#article-ctrl-btns";
				$(elem1).toggle('drop',{ direction: 'up' });
				$('#committee-projects-container').hide();
				$('#com-info-container').show();
			});
			$('#cp-button').click(function () {
				var elem1 = "#article-ctrl-btns";
				$(elem1).toggle('drop',{ direction: 'up' });
				$('#com-info-container').hide();
				$('#committee-projects-container').show();
			});
		<?php endif; ?>
		<?php if($isAdmin): ?>
			$('div.add_button').click(function () {
				$('div.add_project').toggle('blind');
				if($('#add_button').html()=='Add Project')
					$('#add_button').html("Cancel");
				else
					$('#add_button').html("Add Project");
			});
		<?php endif; ?>
	});
	<?php if($isAdmin): ?>
		function check_input(){
			var temp = $('#proj_name').val();
			if(temp != '')
				return true;
			else
				return false;
		}
	<?php endif; ?>
</script>
<?php if($isAdmin): ?>
	<style>
		a.projlink:hover{
			text-decoration:underline;
		}
	</style>
<?php endif; ?>
<div id="com_container">
	<div id="title_container" class="title_post">
		<div id="title"><?php echo $committee_info->name;?></div>
		<div id="sub-title" style="font-size:15pt"></div>
		<div style="font-size:15pt">&nbsp;</div>
	</div>
	<div class="body_post">
		<?php if($isFaci): ?>
			<div class="article-ctrl" style="font-size: 10pt; font-weight:normal; cursor:pointer; display:block; height:24px; position:absolute; top:0px; left:610px; border:thin solid #ccc; border-top:0; -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset; -moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset; box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset;">
				<img src="<?php echo base_url()?>images/ellipsis.png" height="24px">
			</div>
			<div id="article-ctrl-btns" style="z-index:1000; font-size: 10pt; font-weight:normal; width: 120px; display:none; background-color:#ffffff; position:absolute; top:24px; left:514px; border:thin solid #ccc; -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset; -moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset; box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset;">
				<div id="home-button" style="cursor:pointer; padding-left:5px; padding-top:5px; border-bottom:thin solid #ccc;">
					<font style="color:#636363; font-size:14px;">
						Home
					</font>
				</div>
				<div id="cp-button" style="cursor:pointer; padding-left:5px; padding-top:5px; border-bottom:thin solid #ccc;">
					<font style="color:#636363; font-size:14px;">
						Committee Plans
					</font>
				</div>
				<?php if($committee_info->name == 'Outreach Committee'): ?>
					<div id="other-button" style="cursor:pointer; padding-left:5px; padding-top:5px; border-bottom:thin solid #ccc;">
						<font style="font-size:14px;">
							<a style="color:#636363;" href="<?php echo base_url();?>faci_outreach">Sign-up Forms</a>
						</font>
					</div>
				<?php endif; ?>
				<?php if($committee_info->name == 'Monitoring Committee'): ?>
					<div id="other-button" style="cursor:pointer; padding-left:5px; padding-top:5px; border-bottom:thin solid #ccc;">
						<font style="font-size:14px;">
							<a style="color:#636363;" href="<?php echo base_url();?>portal_monitoring/">Monitoring Portal</a>
						</font>
					</div>
				<?php endif; ?>
			</div>
		<?php endif; ?>
		<div id="com-info-container" style="font-size: 10.5pt; font-weight:bold; text-align:justify; <?php if(!$com_home) echo 'display:none;';?>">
			<div>
				<table>
					<tr>
						<td style="color:#009900;">Committee Head:</td>
						<td align="center">
							<div style="width:100px; overflow:hidden;">
							<a href="<?php echo base_url().'facilitator/'.$facis_in_com[0]->username;?>">
								<?php if(!isset($facis_in_com[0]->facebook) || $facis_in_com[0]->facebook == null):?>
									<?php echo '<img src="'.base_url().'images/profile/no-image.png" height="100px" />';?>
								<?php else: ?>
									<?php echo '<img src="http://graph.facebook.com/'.$facis_in_com[0]->facebook.'/picture?type=large" height="100px" />';?>
								<?php endif; ?>
							</a>
							</div>
							<a style="color: #636363;" href="<?php echo base_url().'facilitator/'.$facis_in_com[0]->username;?>">
								<?php echo $facis_in_com[0]->firstname.' '.$facis_in_com[0]->lastname;?>
							</a>
						</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td style="color:#009900;" colspan="4">Committee Members:</td>
					</tr>
					<?php $i = 0; $j = 0; foreach ($facis_in_com as $f):?>
						<?php if($i > 0):?>
							<?php if($j == 0) echo '<tr>';?>
								<td valign="top" align="center" style="width:100px; padding-left:45px">
									<div style="width:100px; overflow:hidden;">
										<a href="<?php echo base_url().'facilitator/'.$f->username;?>">
											<?php if(!isset($f->facebook) || $f->facebook == null):?>
												<?php echo '<img src="'.base_url().'images/profile/no-image.png" height="100px" />';?>
											<?php else: ?>
												<?php echo '<img src="http://graph.facebook.com/'.$f->facebook.'/picture?type=large" height="100px" />';?>
											<?php endif; ?>
										</a>
									</div>
									<a style="color: #636363;" href="<?php echo base_url().'facilitator/'.$f->username;?>">
										<?php echo $f->firstname.' '.$f->lastname;?>
									</a>
								</td>
							<?php 
								if($j == 3 || $i == $num_facis-1)
								{ 
									echo '</tr>';
									echo '<tr><td>&nbsp;</td></tr>';
									$j = 0;
								} 
								else $j++;
							?>
						<?php endif; ?>
					<?php $i++; endforeach;?>
				</table>
			</div>
		</div>
		<?php if($isFaci): ?>
			<div id="committee-projects-container" <?php if($com_home) echo 'style="display:none;"'; ?>>
				<div class="title_post" style="font-size:15pt; float:left;">
					Committee Plans
				</div>
				<?php if($isAdmin): ?>
					<div class="add_button" style="float:right; position:relative; top:0px;">
						<button id="add_button" class="readmore_button">Add Project</button>
					</div>
					<br/>
					<div class='add_project' style=" clear:both; display:none;">
						<div class="body_post" style="padding-left:5px; background:#EFFFEB;">
							<b>Add Committee Project</b>
							<?php $attr = array('onsubmit' => 'return check_input()'); $str = str_replace(' ','_',$committee_info->name); echo form_open('committees/committee_projects/'.$str.'/add_project/', $attr);?>
								<table style="width:100%">
									<tr>
										<td width="80%">
											<?php 
												echo form_label('Project Name:', 'proj_name').' ';
												echo form_input('proj_name', '', 'id="proj_name" style="width:390px;"');
											?>
										</td>
										<td width="20%">
											<input class="readmore_button" type="submit" value="GO!" />
										</td>
									</tr>
								</table>
							<?php echo '</form>';?>
						</div>
					</div>
				<?php else:?>
					<br />
				<?php endif; ?>
				<br />
				<?php $i = 0; foreach($projects as $p): ?>
					<div style="color:#464545; font-weight:bold; clear:both;">
						<li>
							<?php 
								$str1 = str_replace(' ','_',$committee_info->name);
								$str2 = str_replace(' ','_',$p->project);
								if($isAdmin)
									echo '<a class="projlink" style="color:#464545;" href="'.base_url().'committees/committee_projects/'.$str1.'/view_project/'.$str2.'">'.$p->project.'</a>';
								else
									echo $p->project;
							?>
						</li>
					</div>
					<?php if($proj_milestones[$i] != null): ?>
						<table style="width:100%">
							<tr style="background-color:#9bbb59; color:white">
								<th width="7%" align="center">Status</th>
								<th width="53%" align="center">Milestone</th>
								<th width="20%" align="center">Date Due</th>
								<th width="20%" align="center">Faci Accountable</th>
							</tr>
							<?php $j=0; foreach($proj_milestones[$i] as $pm): ?>
								<?php if($j % 2 == 0): ?>
									<tr style='background-color:#d8e4bc; color: #000000;'>
								<?php else: ?>
									<tr style='background-color:#ebf1de; color: #000000;'>
								<?php endif; ?>
									<td align='center'>
										<?php
											if($pm->iduser == $user['iduser'])
												echo '<a href="'.base_url().'committees/project_milestones/'.$str1.'/'.$str2.'/edit_status/'.$pm->id.'/'.$controller.'">';
											if($pm->status == 'Pending')
											{
												if($pm->overdue)
													echo '<img src="'.base_url().'images/icons/overdue.png" width="25px"/>';
												else
													echo '<img src="'.base_url().'images/icons/pending.png" width="25px"/>';
											}
											else
												echo '<img src="'.base_url().'images/icons/done.png" width="25px"/>';
											if($pm->iduser == $user['iduser'])
												echo '</a>';
										?>
									</td>
									<td align='left'>
										<?php echo $pm->milestone; ?>
									</td>
									<td align='center'>
										<?php $date = DateTime::createFromFormat('Y-m-d', $pm->date_due); echo $date->format('F j, Y');?>
									</td>
									<td align='center'>
										<?php echo $pm->faci; ?>
									</td>
								</tr>
							<?php $j++; endforeach; ?>
						</table>
					<?php endif; ?>
					<br />
				<?php $i++; endforeach;?>
			</div>
		<?php endif; ?>
	</div>
</div>