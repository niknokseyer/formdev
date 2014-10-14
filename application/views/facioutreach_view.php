<script>
	$(document).ready(function () {
		$('div.article-ctrl').click(function () {
			var elem1 = "#article-ctrl-btns";
			$(elem1).toggle('drop',{ direction: 'up' });
		});
	});
</script>
<div id="outreach_container">
	<div id="title_container" class="title_post">
		<div id="title" style="float:left;"><?php echo $signup_info->type;?> Outreach</div>
		<div style="position:absolute; top:-9px; left:485px;">
			<?php if($signup_info->live && !$bSignedUp): ?>
				<a href='<?php echo base_url(); ?>faci_outreach/faci/add/<?php echo $signup_info->id.'/'.$user['iduser']; ?>'>
					<button id="add_button" class="readmore_button">Join!</button>
				</a>
			<?php endif; ?>
		</div>
		<div class="article-ctrl" style="font-size: 10pt; font-weight:normal; cursor:pointer; display:block; height:24px; position:absolute; top:0px; left:610px; border:thin solid #ccc; border-top:0; -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset; -moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset; box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset;">
			<img src="<?php echo base_url()?>images/ellipsis.png" height="24px">
		</div>
		<div id="article-ctrl-btns" style="z-index:1000; font-size: 10pt; font-weight:normal; width: 70px; display:none; background-color:#ffffff; position:absolute; top:24px; left:564px; border:thin solid #ccc; -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset; -moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset; box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset;">
			<div id="home-button" style="cursor:pointer; padding-left:5px; padding-top:5px; height:22px; border-bottom:thin solid #ccc;">
				<a href='<?php echo base_url(); ?>faci_outreach'>
					<img src="<?php echo base_url(); ?>images/back.png" height="20px" style="float:left;"/>
					<font style="color:#636363; font-size:14px; float:left;">
						&nbsp;Back
					</font>
				</a>
			</div>
		</div>
		<div id="sub-title" style="clear:both; font-size:14pt">(<?php $date = DateTime::createFromFormat('Y-m-d', $signup_info->date); echo $date->format('F j, Y');?>)</div>
		<div style="font-size:14pt">&nbsp;</div>
	</div>
	<div class="body_post">
		<table style="width:100%">
			<tr style="background-color:#9bbb59; color:white">
				<th width="10%" align="center">#</th>
				<th width="80%" align="center">Name of Facilitator</th>
				<th width="10%" align="center"></th>
			</tr>
			<?php $i=0; foreach($facis_in_signup as $s): ?>
				<?php if($i % 2 == 0): ?>
					<tr style='background-color:#d8e4bc; color: #000000;'>
				<?php else: ?>
					<tr style='background-color:#ebf1de; color: #000000;'>
				<?php endif; ?>
					<td align='center'>
						<?php echo $i+1; ?>
					</td>
					<th align='left'>
						<?php echo '&nbsp;'.$s->firstname.' '.$s->lastname; ?>
					</th>
					<td align='center'>
						<?php if($signup_info->live && $user['iduser']==$s->iduser): ?>
							<a href="<?php echo base_url(); ?>faci_outreach/faci/delete/<?php echo $signup_info->id.'/'.$id_user; ?>">
								<img src="<?php echo base_url(); ?>images/icons/delete.gif" />
							</a>
						<?php endif; ?>
					</td>
				</tr>
			<?php $i++; endforeach; ?>
		</table>
	</div>
</div>