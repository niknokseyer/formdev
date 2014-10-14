<div id="bs_container">
	<div id="title_container" class="title_post">
		<div id="title"><?php echo $group_info->name;?></div>
		<div id="sub-title" style="font-size:15pt"></div>
		<div style="font-size:15pt">&nbsp;</div>
	</div>
	<div class="body_post" style="font-size: 10.5pt; font-weight:bold; text-align:justify;">
		<div id="bs-info-container">
			<div>
				<font style="color:#009900;">Bible Study Meeting Schedule: </font><?php echo $group_info->schedule;?>
			</div>
			<div>&nbsp;</div>
			<div>
				<font style="color:#009900;">Book: </font><?php echo $group_info->book;?>
			</div>
			<div>&nbsp;</div>
			<div>
				<table>
					<tr>
						<td style="color:#009900;">Bible Study Leader:</td>
						<td align="center">
							<div style="width:100px; overflow:hidden;">
							<a href="<?php echo base_url().'facilitator/'.$facis_in_bs[0]->username;?>">
								<?php if(!isset($facis_in_bs[0]->facebook) || $facis_in_bs[0]->facebook == null):?>
									<?php echo '<img src="'.base_url().'images/profile/no-image.png" height="100px" />';?>
								<?php else: ?>
									<?php echo '<img src="http://graph.facebook.com/'.$facis_in_bs[0]->facebook.'/picture?type=large" height="100px" />';?>
								<?php endif; ?>
							</a>
							</div>
							<a style="color: #636363;" href="<?php echo base_url().'facilitator/'.$facis_in_bs[0]->username;?>">
								<?php echo $facis_in_bs[0]->firstname.' '.$facis_in_bs[0]->lastname;?>
							</a>
						</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td style="color:#009900;" colspan="4">Bible Study Members:</td>
					</tr>
					<?php $i = 0; $j = 0; foreach ($facis_in_bs as $f):?>
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
	</div>
</div>