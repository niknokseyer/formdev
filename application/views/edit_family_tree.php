<script>
	$(document).ready(function () {
		$('#addparent_button').click(function () {
			$('div.add_parent').toggle('blind');
			if($('#addparent_button').html()=='Add Parent')
				$('#addparent_button').html("Cancel");
			else
				$('#addparent_button').html("Add Parent");
		});
		$('#addchild_button').click(function () {
			$('div.add_child').toggle('blind');
			if($('#addchild_button').html()=='Add Handle')
				$('#addchild_button').html("Cancel");
			else
				$('#addchild_button').html("Add Handle");
		});
		
		$('div.article-ctrl').click(function () {
			var elem1 = "#article-ctrl-btns";
			$(elem1).toggle('drop',{ direction: 'up' });
		});
	});
</script>
<div class="title_post">
	<?php echo $info->firstname.' '. $info->lastname;?>
</div>
<div class="title_post" style='font-size:15pt;'>
	Edit Faci Family Tree
</div>
<div class="article-ctrl" style="font-size: 10pt; font-weight:normal; cursor:pointer; display:block; height:24px; position:absolute; top:0px; left:610px; border:thin solid #ccc; border-top:0; -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset; -moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset; box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset;">
			<img src="<?php echo base_url()?>images/ellipsis.png" height="24px">
</div>
<div id="article-ctrl-btns" class='body_post' style="z-index:1000; font-size: 10pt; font-weight:normal; width: 70px; display:none; background-color:#ffffff; position:absolute; top:24px; left:564px; border:thin solid #ccc; -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset; -moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset; box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset;">
	<div id="home-button" style="cursor:pointer; padding-left:5px; padding-top:5px; height:22px; border-bottom:thin solid #ccc;">
		<?php if($caller == 'manage') $path = 'facilitator/manage/edit'; else $path = 'account/edit';?>
		<a href='<?php echo base_url().$path; ?>'>
			<img src="<?php echo base_url(); ?>images/back.png" height="20px" style="float:left;"/>
			<font style="color:#636363; font-size:14px; float:left;">
				&nbsp;Back
			</font>
		</a>
	</div>
</div>
<br />
<table class="body_post" style='width:100%'>
	<tr>
		<td>
			<div style='font-size:13pt; color:#009900;'>
				<b>"Facilitator Parents"</b>
			</div>
			<div>
				<em>[The person/s who served as <?php echo $info->nickname.'\'s';?> facilitators when s/he was just a FORMDEV student then. :)]</em>
			</div>
		</td>
		<?php if(count($parentsinfo) < 2 && count($parent_candidates) > 0): ?>
			<td style='width:90px;'>
				<button id="addparent_button" class="readmore_button">Add Parent</button>
			</td>
		<?php endif; ?>
	</tr>
</table>
<?php if(count($parentsinfo) < 2 && count($parent_candidates) > 0): ?>
	<div class='add_parent' style=" clear:both; display:none;">
		<div class="body_post" style="padding-left:5px; background:#EFFFEB;">
			<b>Add Facilitator Parent</b>
			<?php echo form_open('facilitator/add_parent/'.$info->iduser);?>
				<table style="width:100%">
					<tr>
						<td width="100%">
							<?php
								echo form_label('Faci:', 'user_list').' ';
								echo form_dropdown('user_list',$parent_candidates,'', 'class="user_dropdown" style="width:470px;"');
							?>
						</td>
						<td>
							<input class="readmore_button" type="submit" value="GO!" />
						</td>
					</tr>
				</table>
			<?php echo '</form>';?>
		</div>
		<br />
	</div>
<?php endif; ?>
<?php if(count($parentsinfo) > 0): ?>
	<table class="body_post" style="width:100%;">
		<tr style="background-color:#9bbb59; color:white">
			<th width="90%" align="center">Facilitator</th>
			<th width="10%" align="center"></th>
		</tr>
		<?php $i = 0; foreach($parentsinfo as $p): ?>
			<?php if($i % 2 == 0): ?>
				<tr style='background-color:#d8e4bc; color: #000000;'>
			<?php else: ?>
				<tr style='background-color:#ebf1de; color: #000000;'>
			<?php endif; ?>
			<td>
				<?php echo '&nbsp;'.$p->firstname.' '.$p->lastname; ?>
			</td>
			<td align="center">
				<a href="<?php echo base_url(); ?>facilitator/delete_parent/<?php echo $info->iduser.'/'.$p->iduser; ?>">
					<img src="<?php echo base_url(); ?>images/icons/delete.gif" />
				</a>
			</td>
		<?php $i++; endforeach; ?>
	</table>
<?php endif; ?>
<br />
<table class="body_post" style='width:100%'>
	<tr>
		<td>
			<div style='font-size:13pt; color:#009900;'>
				<b>"Facilitator Handles"</b>
			</div>
			<div>
				<em>[The student handle/s of <?php echo $info->nickname;?> who also became facilitator/s. :)]</em>
			</div>
		</td>
		<?php if(count($child_candidates) > 0): ?>
			<td style='width:90px;'>
				<button id="addchild_button" class="readmore_button">Add Handle</button>
			</td>
		<?php endif; ?>
	</tr>
</table>
<?php if(count($child_candidates) > 0): ?>
	<div class='add_child' style=" clear:both; display:none;">
		<div class="body_post" style="padding-left:5px; background:#EFFFEB;">
			<b>Add Facilitator Handle</b>
			<?php echo form_open('facilitator/add_child/'.$info->iduser);?>
				<table style="width:100%">
					<tr>
						<td width="100%">
							<?php
								echo form_label('Faci:', 'user_list').' ';
								echo form_dropdown('user_list',$child_candidates,'', 'class="user_dropdown" style="width:470px;"');
							?>
						</td>
						<td>
							<input class="readmore_button" type="submit" value="GO!" />
						</td>
					</tr>
				</table>
			<?php echo '</form>';?>
		</div>
		<br />
	</div>
<?php endif; ?>
<?php if(count($childreninfo) > 0): ?>
	<table class="body_post" style="width:100%;">
		<tr style="background-color:#9bbb59; color:white">
			<th width="90%" align="center">Facilitator</th>
			<th width="10%" align="center"></th>
		</tr>
		<?php $i = 0; foreach($childreninfo as $c): ?>
			<?php if($i % 2 == 0): ?>
				<tr style='background-color:#d8e4bc; color: #000000;'>
			<?php else: ?>
				<tr style='background-color:#ebf1de; color: #000000;'>
			<?php endif; ?>
			<td>
				<?php echo '&nbsp;'.$c->firstname.' '.$c->lastname; ?>
			</td>
			<td align="center">
				<a href="<?php echo base_url(); ?>facilitator/delete_child/<?php echo $info->iduser.'/'.$c->iduser; ?>">
					<img src="<?php echo base_url(); ?>images/icons/delete.gif" />
				</a>
			</td>
		<?php $i++; endforeach; ?>
	</table>
<?php endif; ?>