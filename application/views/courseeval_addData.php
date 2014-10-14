<script>
	$(document).ready(function () {
		$('tr').mouseover(function () {
			if($(this).attr('id') != 'header' && $(this).attr('id') != 'buttons')
			{
				$(this).css('background-color','#009900');
				$(this).css('color','#fff');
			}
		});
		$('tr').mouseleave(function () {
			if($(this).attr('id') != 'header' && $(this).attr('id') != 'buttons')
			{
				if($(this).attr('class') == '0')
					$(this).css('background-color','#d8e4bc');
				else
					$(this).css('background-color','#ebf1de');
				$(this).css('color','#000');
			}
		});
		$('#cancel_button').click(function () {
			window.location = "<?php echo base_url();?>course_evaluation";
		});
	});
</script>
<div class="title_post">Course Evaluation: Add Data</div>
<br />
<?php
	for($i = 0; $i <= $total; $i++)
		$opts[$i] = $i;
	$hidden = array('start_year' => $start_year, 'term' => $term, 'section' => $section);
	echo form_open('course_evaluation/addData', null, $hidden);
?>
	<table class="body_post" style="width:100%;">
		<tr id='header' style="background-color:#9bbb59; color:white">
			<th align="center">#</th>
			<th width="60%" align="center">Question</th>
			<th align="center">3</th>
			<th align="center">2</th>
			<th align="center">1</th>
			<th align="center">N/A</th>
		</tr>
		<?php for($i = 1; $i < 25; $i++): ?>
			<?php if($i % 2 == 0): ?>
				<tr class="0" style='background-color:#d8e4bc; color: #000000;'>
			<?php else: ?>
				<tr class="1" style='background-color:#ebf1de; color: #000000;'>
			<?php endif; ?>
				<?php 
					if($i < 18)
						$qname = $i;
					else if($i == 18) 
						$qname = '18a';
					else if($i == 19)
						$qname = '18b';
					else if($i > 19)
						$qname = ($i - 1);
				?>
				<td align="center">
					<strong><?php echo $qname; ?></strong>
				</td>
				<td align="left" style="width:60%; padding-left:5px;">
					<?php echo $questions[($i-1)]; ?>
				</td>
				<td align="center">
					<?php echo form_dropdown($qname.'_3',$opts,0,'');?>
				</td>
				<td align="center">
					<?php echo form_dropdown($qname.'_2',$opts,0,'');?>
				</td>
				<td align="center">
					<?php echo form_dropdown($qname.'_1',$opts,0,'');?>
				</td>
				<td align="center">
					<?php echo form_dropdown($qname.'_0',$opts,0,'');?>
				</td>
			</tr>
		<?php endfor; ?>
		<tr id='buttons'>
			<td colspan='6' align='center'>
				<input class="readmore_button" type="submit" value="Submit" style="float:right; margin-left:0px;"/>
				<div style="float:right;">&nbsp;&nbsp;&nbsp;&nbsp;</div>
				<div id="cancel_button" class="readmore_button" style="float:right; background:url('<?php echo base_url();?>images/buttonLbg.png'); width:87px; height:27px;">Cancel</div>
			</td>
		</tr>
	</table>
</form>