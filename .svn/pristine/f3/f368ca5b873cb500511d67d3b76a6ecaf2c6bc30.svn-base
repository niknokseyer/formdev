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
		
		$('div.add_button').click(function () {
			$('div.add_signup').toggle('blind');
			if($('#add_button').html()=='Add Sign Up Form')
				$('#add_button').html("Cancel");
			else
				$('#add_button').html("Add Sign Up Form");
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
<style>
	a.outreachlink:hover{
		text-decoration:underline;
	}
</style>
<div id="outreach_container">
	<div id="title_container" class="title_post">
		<div id="title" style="float:left;">Facilitator Outreach - Sign Up</div>
		<?php if($admin): ?>
			<div class="add_button" style="float:right; position:relative; top:-7px;">
				<button id="add_button" class="readmore_button">Add Sign Up Form</button>
			</div>
			<br/>
			<div class='add_signup' style=" clear:both; background:#EFFFEB; padding-left:5px; display:none;">
				<div class="body_post">
					Add Outreach Sign Up Form
					<?php $attr = array('onsubmit' => 'return check_input()'); echo form_open('faci_outreach/add', $attr);?>
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
								<td width="25%">
									<?php
										echo form_label('Type:', 'outreach_type').' '; 
										echo form_dropdown('outreach_type', $type, ''); 
									?>
								</td>
								<td width="40%">
									<?php 
										echo form_label('Date:', 'outreach_date').' ';
										echo form_input('outreach_date', '', 'id="datepicker"');
									?>
								</td>
								<td width="25%">
									<?php 
										echo form_label('Status:', 'live').' ';
										echo form_dropdown('live', $live, '');
									?>
								</td>
								<td width="10%">
									<input class="readmore_button" type="submit" value="GO!" />
								</td>
							</tr>
						</table>
					<?php echo '</form>';?>
				</div>
			</div>
		<?php endif; ?>
	</div>

	<div class="body_post" style="clear:both;">
		<br />
		<div style="color:#464545; font-weight:bold;">
			<li>Live Outreach Sign Up</li>
		</div>
		<table style="width:100%">
			<tr style="background-color:#9bbb59; color:white">
				<th width="30%" align="center">Type</th>
				<th width="30%" align="center">Date</th>
				<th width="30%" align="center">Venue</th>
				<th width="10%" align="center"></th>
			</tr>
			<?php $i=0; foreach($outreach_acts as $o): ?>
				<?php if($o->live): ?>
					<?php if($i % 2 == 0): ?>
						<tr style='background-color:#d8e4bc; color: #000000;'>
					<?php else: ?>
						<tr style='background-color:#ebf1de; color: #000000;'>
					<?php endif; ?>
						<th align='center'>
							<a class="outreachlink" style='color: #000000;' href='<?php echo base_url(); ?>faci_outreach/<?php echo $o->id; ?>'><?php echo $o->type.' Outreach'; ?></a>
						</th>
						<td align='center'>
							<?php $date = DateTime::createFromFormat('Y-m-d', $o->date); echo $date->format('F j, Y');?>
						</td>
						<td align='center'>
							<?php if($o->type == 'MaSci') echo 'DLSU'; ?>
						</td>
						<td align='center'>
							<?php if($admin): ?>
								<a href="<?php echo base_url(); ?>faci_outreach/edit/<?php echo $o->id; ?>">
									<img src="<?php echo base_url(); ?>images/icons/edit.gif" />
								</a>
								<a href="<?php echo base_url(); ?>faci_outreach/delete/<?php echo $o->id; ?>">
									<img src="<?php echo base_url(); ?>images/icons/delete.gif" />
								</a>
							<?php endif; ?>
						</td>
					</tr>
				<?php $i++; endif; ?>
			<?php endforeach; ?>
		</table>
		<?php if($admin):?>
		<br />
		<div style="color:#464545; font-weight:bold;">
			<li>Closed Outreach Sign Up</li>
		</div>
		<table style="width:100%">
			<tr style="background-color:#9bbb59; color:white">
				<th width="30%" align="center">Type</th>
				<th width="30%" align="center">Date</th>
				<th width="30%" align="center">Venue</th>
				<th width="10%" align="center"></th>
			</tr>
			<?php $i=0; foreach($outreach_acts as $o): ?>
				<?php if(!$o->live): ?>
					<?php if($i % 2 == 0): ?>
						<tr style='background-color:#d8e4bc; color: #000000;'>
					<?php else: ?>
						<tr style='background-color:#ebf1de; color: #000000;'>
					<?php endif; ?>
						<th align='center'>
							<a class="outreachlink" style='color: #000000;' href='<?php echo base_url(); ?>faci_outreach/<?php echo $o->id; ?>'><?php echo $o->type.' Outreach'; ?></a>
						</th>
						<td align='center'>
							<?php $date = DateTime::createFromFormat('Y-m-d', $o->date); echo $date->format('F j, Y');?>
						</td>
						<td align='center'>
							<?php if($o->type == 'MaSci') echo 'DLSU';?>
						</td>
						<td align='center'>
							<a href="<?php echo base_url(); ?>faci_outreach/edit/<?php echo $o->id; ?>">
								<img src="<?php echo base_url(); ?>images/icons/edit.gif" />
							</a>
							<a href="<?php echo base_url(); ?>faci_outreach/delete/<?php echo $o->id; ?>">
								<img src="<?php echo base_url(); ?>images/icons/delete.gif" />
							</a>
						</td>
					</tr>
				<?php $i++; endif; ?>
			<?php endforeach; ?>
		</table>
		<?php endif;?>
	</div>
</div>