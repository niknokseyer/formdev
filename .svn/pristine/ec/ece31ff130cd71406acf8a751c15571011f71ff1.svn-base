<script>
	$(document).ready(function () {
		var pic_height = parseInt($('#profpic').css('height'));
		if(pic_height < 200)
			$('#profpic_wrapper').css('height',pic_height+'px');
	});
</script>
<div id="faci_view_container">
	<div id="left-part" style="float:left">
		<div style="clear:both; height:265px; width:739px; overflow:hidden;">
			<div style="position:relative; top:0px; left:8px; height:265px; width:1000px;">
				<?php 
					if(count($photos) > 0):
						shuffle($photos);
						foreach($photos as $coverPics):
				?>
						<img src=<?php echo $coverPics->source; ?> height="265" style="float:left;"/>
				<?php 	endforeach;
					else:
				?>
					<img src="https://fbcdn-sphotos-e-a.akamaihd.net/hphotos-ak-prn1/946563_10151453018521158_1919701949_n.jpg" height="265" width="739" style="float:left;"/>
				<?php		
					endif;
				?>
			</div>
			<div style="position:absolute; top:0px; clear:both;">
				<div style="position:relative; top: 0px; left:8px; clear:both; width:730px; height:262px; box-shadow:0px 0px 0px rgba(0,0,0,1), inset 0px -80px 80px rgba(0,0,0,0.3);">
				</div>
				<div style="position:absolute; top:157px;">
					<div id="up_part" style="padding-left:8px;">
						<div id="main_info_container" style="position:relative; top: 0px; float:left; width:700px; text-transform:uppercase; padding-left:16px; padding-right:34px; height:85px; overflow:hidden;">
								<div class="title_post" >
									<font style="color:#fff; text-shadow: black 0.1em 0.1em 0.2em;"><?php echo $info->nickname; ?></font>
								</div>
								<div class="title_post" style="clear: both; font-size:18pt; color:#fff; text-shadow: black 0.1em 0.1em 0.2em;"">
									<?php echo "$info->firstname $info->lastname";?>
								</div>
								<div class="title_post" style="font-size:14pt; color:#FFF; text-shadow: black 0.1em 0.1em 0.2em;">
									<?php echo $batch_desc[0]->batch_label.' Batch '.$batch_desc[0]->batchnumber.' (S.Y. '.$batch_desc[0]->startyear.'-'.$batch_desc[0]->endyear.')';?>
								</div>
						</div>
					</div>
					<div style="position:relative; top:-10px; clear:both; height:35px; overflow:hidden;"><img src='<?php echo base_url(); ?>images/profile_border.png' width="740px"/></div>
				</div>
			</div>
		</div>
		<div style="clear:both; height:35px; overflow:hidden;"><img src='<?php echo base_url(); ?>images/profile_border_1.png' width="740px" /></div>
		<div id="down_part" style="padding-left:24px; padding-right:34px;">
			<span class="body_post">
				<div id="info-container" style="position:relative; height:100%">
					<div id="other_info_container" style="position:relative; top: 0px; float:left; width:690px;">
						<?php if(isset($user['iduser']) && $user['iduser']!=null): ?>
							<?php if($user['iduser']==$info->iduser): ?>
								<div style="position:absolute; top:0px; right:0px; width:120px;">
									<button class="readmore_button" onclick="window.location='<?php echo base_url();?>account/edit'">
										Edit Profile
									</button>
								</div>
								<br />
							<?php endif; ?>
						<?php endif; ?>
						<table class="body_post" style="text-align:left; font-size:10.5pt; text-transform:uppercase; font-weight:bold;">
							<tr>
								<td style="color:#00AA00">Favorite Quote: </td>
							</tr>
							<tr>
								<td style="color:#464545"><?php echo $info->motto; ?></td> 
							</tr>
							<tr>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td style="color:#00AA00">Favorite Verse: </td>
							</tr>
							<tr>
								<td style="color:#464545"><?php echo $info->favorite_verse; ?></td> 
							</tr>
							<tr>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td style="color:#00AA00">Random Stuff: </td>
							</tr>
							<tr>
								<td style="color:#464545"><?php echo $info->random_stuff; ?></td> 
							</tr>
						</table>
						<div id="familytree">
							<div style="font-weight:bold; text-transform:uppercase; font-size:10.5pt; color:#00AA00; padding-top:15px; padding-bottom: 15px;">
								"FORMDEV Family Tree"
							</div>
							<div style="text-align:center;">
								<?php $i = 0; foreach($parentsinfo as $f): ?>
									<div style="line-height: normal; width:80px; display:inline-block; display:-moz-inline-box; white-space:normal; vertical-align:top;">
										<?php if(!isset($f->facebook) || $f->facebook == null):?>
											<?php echo '<img id="thumb" src="'.base_url().'images/profile/no-image.png" onClick="redirect(\''.$f->username.'\')"><div id="facilink">'.$f->firstname.' '.$f->lastname.'</div></img>'?>
										<?php else: ?>
											<?php echo '<img id="thumb" src="http://graph.facebook.com/'.$f->facebook.'/picture?type=large" onClick="redirect(\''.$f->username.'\')"><div id="facilink">'.$f->firstname.' '.$f->lastname.'</div></img>'?>
										<?php endif; ?>
									</div>
								<?php $i++; ?>
								<?php endforeach; ?>
							</div>
							<div style="clear:both;">&nbsp;</div>
							<div style="text-align:center;">
								<?php if(count($siblingsinfo) == 0):?>
									<div style="line-height: normal; width:110px; display:inline-block; display:-moz-inline-box; padding-bottom:20px; white-space:normal;">
										<?php if(!isset($info->facebook) || $info->facebook == null):?>
											<?php echo '<img id="focused_thumb" src="'.base_url().'images/profile/no-image.png" onClick="redirect(\''.$info->username.'\')"><div id="facilink">'.$info->firstname.' '.$info->lastname.'</div></img>'?>
										<?php else: ?>
											<?php echo '<img id="focused_thumb" src="http://graph.facebook.com/'.$info->facebook.'/picture?type=large" onClick="redirect(\''.$info->username.'\')"><div id="facilink">'.$info->firstname.' '.$info->lastname.'</div></img>'?>
										<?php endif; ?>
									</div>
								<?php endif; ?>
								<?php $i = 0; $bDisp = false; $pos = ceil((count($siblingsinfo)+1)/2); foreach($siblingsinfo as $f): ?>
									<?php if(!$bDisp && $i == ($pos-1)):?>
										<div style="line-height: normal; width:130px; display:inline-block; display:-moz-inline-box; vertical-align:middle; padding-bottom:20px; white-space:normal;">
											<?php if(!isset($info->facebook) || $info->facebook == null):?>
												<?php echo '<img id="focused_thumb" src="'.base_url().'images/profile/no-image.png" onClick="redirect(\''.$info->username.'\')"><div id="facilink">'.$info->firstname.' '.$info->lastname.'</div></img>'?>
											<?php else: ?>
												<?php echo '<img id="focused_thumb" src="http://graph.facebook.com/'.$info->facebook.'/picture?type=large" onClick="redirect(\''.$info->username.'\')"><div id="facilink">'.$info->firstname.' '.$info->lastname.'</div></img>'?>
											<?php endif; ?>
										</div>
									<?php endif; ?>
									<div style="line-height: normal; width:80px; display:inline-block; display:-moz-inline-box; vertical-align:middle; padding-bottom:20px; white-space:normal;">
										<?php if(!isset($f->facebook) || $f->facebook == null):?>
											<?php echo '<img id="thumb" src="'.base_url().'images/profile/no-image.png" onClick="redirect(\''.$f->username.'\')"><div id="facilink">'.$f->firstname.' '.$f->lastname.'</div></img>'?>
										<?php else: ?>
											<?php echo '<img id="thumb" src="http://graph.facebook.com/'.$f->facebook.'/picture?type=large" onClick="redirect(\''.$f->username.'\')"><div id="facilink">'.$f->firstname.' '.$f->lastname.'</div></img>'?>
										<?php endif; ?>
									</div>
								<?php $i++; ?>
								<?php endforeach; ?>
							</div>
							<div style="clear:both;">&nbsp;</div>
							<div style="text-align:center;">
								<?php $i = 0; foreach($childreninfo as $f): ?>
									<div style="line-height: normal; width:80px; display:inline-block; display:-moz-inline-box; vertical-align:top; white-space:normal;">
										<?php if(!isset($f->facebook) || $f->facebook == null):?>
											<?php echo '<img id="thumb" src="'.base_url().'images/profile/no-image.png" onClick="redirect(\''.$f->username.'\')"><div id="facilink">'.$f->firstname.' '.$f->lastname.'</div></img>'?>
										<?php else: ?>
											<?php echo '<img id="thumb" src="http://graph.facebook.com/'.$f->facebook.'/picture?type=large" onClick="redirect(\''.$f->username.'\')"><div id="facilink">'.$f->firstname.' '.$f->lastname.'</div></img>'?>
										<?php endif; ?>
									</div>
								<?php $i++; ?>
								<?php endforeach; ?>
							</div>
							<br />
						</div>
					</div>
				</div>
			</span>
		</div>
	</div>	
	<div id="side_info_container" style="float:left; width:210px; background-image:url('../images/side-bg.png'); border: 10px solid #efefef; margin: 0 0 10px 0; -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset;	-moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset; box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset;">
		<div id="profpic_container" style = "text-align:center; position:relative; top: 0px; float:left; padding: 5px; border-bottom: 1px solid #ffffff;">
			<div id="profpic_wrapper" style="width: 200px; height:200px; overflow:hidden;">
				<?php if(!isset($info->facebook) || $info->facebook == null):?>
					<img id = "profpic" src="<?php echo base_url(); ?>images/profile/no-image.png" style="width:200px"></img>
				<?php else: ?>
					<?php echo anchor('http://www.facebook.com/profile.php?id='.$info->facebook,'<img id = "profpic" src="http://graph.facebook.com/'.$info->facebook.'/picture?type=large" style="width:200px"></img>','target="_blank"')?>
				<?php endif; ?>
			</div>
		</div>
		<table class="body_post" style="width:100%; font-size:10.5pt; font-weight: bold; text-align:left; padding-left:10px; padding-right:10px; padding-bottom:10px; text-transform:uppercase;">
			<?php if(isset($user['is_logged_in']) && $user['is_logged_in'] == true): ?>
				<tr>
				<?php $bday = DateTime::createFromFormat('Y-m-d', $info->birthday); ?>
				<td style="color:#dddddd">Birthday: </td></tr>
				<tr>
					<td style="color:#ffffff">
						<?php echo $bday->format('F j, Y'); ?>
					</td> 
				</tr>
				<tr>
					<td>&nbsp;</td>
				</tr>
			<?php endif; ?>
			<tr>
				<td style="color:#dddddd">Hometown: </td>
			</tr>
			<tr>
				<td style="color:#ffffff">
					<?php echo $info->hometown; ?>
				</td> 
			</tr>
			<tr>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td style="color:#dddddd">High School: </td>
			</tr>
			<tr>
				<td style="color:#ffffff">
					<?php echo $info->highschool; ?>
				</td> 
			</tr>
			<tr>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td style="text-transform:none; font-weight:normal; font-size:10; font-family: Tahoma,Arial; text-align:center; color:#ffffff">
					<?php if($info->formdev_is != ""): ?>
						"FORMDEV for me is <?php echo $info->formdev_is; ?>"
					<?php endif;?>
				</td>
			</tr>
		</table>
	</div>
</div>