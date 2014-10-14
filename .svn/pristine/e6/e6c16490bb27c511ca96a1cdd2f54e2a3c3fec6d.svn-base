<script>
	function check_input(){
		var temp = $('#section').val();
		if(temp != null && temp != '')
			return true;
		else
			return false;
	}
</script>
<div class="title_post">Course Evaluation: Add Data</div>
<br />
<?php 
	if($month < 5)
		$hidden = array('year' => $this_year, 'term' => 3);
	else
		$hidden = array('year' => $this_year, 'term' => 2);
	$attr = array('onsubmit' => 'return check_input()');
	echo form_open('course_evaluation/add',$attr,$hidden); 
?>
	<table align="center" class="body_post">
		<tr>
			<td align="left">
				<?php 
					if($classes != null)
					{
						foreach($classes as $c)
							$sections[$c->section] = $c->section;
						echo form_label('Section:', 'section').'</td><td align="left">';
						echo form_dropdown('section',$sections,$classes[0]->section, 'id="section" style="width:100px"');
					}
					else
					{	
						$sections = array();
						echo form_label('Section:', 'section').'</td><td align="left">';
						echo form_dropdown('section',$sections,0, 'id="section" style="width:100px"');
					}
				?>
			</td>
			<td>
				&nbsp;
			</td>
			<td align="left">
				<?php 
					echo form_label('No. of records to add:', 'total_record').'</td><td align="left">';
					echo form_input('total_record', '', 'style="width:100px"');
				?>
			</td>
			<td>
				&nbsp;
			</td>
			<td align="center">
				<input class="readmore_button" type="submit" value="Start" style="margin-left:0px;"/>
			</td>
		</tr>
	</table>
</form>
<br />
<?php if(count($submissions) > 0):?>
	<div class="body_post">
		<strong>Data Submissions</strong>
	</div>
	<table class="body_post" style="width:100%;">
		<tr id='header' style="background-color:#9bbb59; color:white">
			<th align="center">School Year/Term</th>
			<th align="center">Section</th>
			<th align="center">Submitted By</th>
			<th align="center">Submission Time</th>
			<th align="center"></th>
		</tr>
		<?php $i = 0; foreach($submissions as $s): ?>
			<?php if($i % 2 == 0): ?>
				<tr style='background-color:#d8e4bc; color: #000000;'>
			<?php else: ?>
				<tr style='background-color:#ebf1de; color: #000000;'>
			<?php endif; ?>
				<td align="center">
					<?php echo 'S.Y. '.$s->start_year.'-'.($s->start_year+1).' Term '.$s->term;?>
				</td>
				<td align="center">
					<?php echo $s->section;?>
				</td>
				<td align="center">
					<?php echo $s->nickname;?>
				</td>
				<td align="center">
					<?php echo $s->submission_time;?>
				</td>
				<td align="center">
					<?php 
						$hidden1 = array(
							'start_year' => $s->start_year,
							'term' => $s->term,
							'section' => $s->section,
							'faci' => $s->faci,
							'submission_time' => $s->submission_time
						);
						echo form_open('course_evaluation/delete',null,$hidden1);
						echo '<input type="submit" value="" style="margin-left:0px; background: url(\''.base_url().'images/icons/delete.gif\'); width:20px; height:20px;"/>';
						echo '</form>';
					?>
				</td>
			</tr>
		<?php $i++; endforeach; ?>
	</table>
<?php endif; ?>