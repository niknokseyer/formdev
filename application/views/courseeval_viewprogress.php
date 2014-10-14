<script>
	$(document).ready(function () {
		$('div.add_data').click(function () {
			window.location = "<?php echo base_url().'course_evaluation/add'; ?>";
		});
		$('div.back').click(function () {
			window.location = "<?php echo base_url().'course_evaluation'; ?>";
		});
	});
</script>
<script type="text/javascript">
	$(function () {
	    var chart;
	    $(document).ready(function() {
	        chart = new Highcharts.Chart({
	            chart: {
	                renderTo: 'container1',
					zoomType: 'xy'
	            },
	            title: {
	                text: 'Course Evaluation'
	            },
	            xAxis: {
	                categories: [
	                    <?php
							$i = 1;
							foreach($scores[0] as $s)
							{
								if($i < count($scores[0]))
									echo '\'S.Y. '.$s->start_year.'-'.($s->start_year+1).' Term '.$s->term.'\',';
								else
									echo '\'S.Y. '.$s->start_year.'-'.($s->start_year+1).' Term '.$s->term.'\'';
								$i++;
							}
						?>
	                ]
	            },
	            yAxis: {
	                min: 0,
	                title: {
	                    text: 'Weighted Scores'
	                }
	            },
	            tooltip: {
	                formatter: function() {
	                    return this.x +': '+ this.y;
	                }
	            },
	            plotOptions: 
					{
	                column: {
	                    pointPadding: 0.2,
	                    borderWidth: 0
	                }
	            },
	            series: [
					<?php $q = 0; foreach($scores as $score): ?>
						{
			                name: <?php echo '\'Item '.$items[$q].'\''; ?>,
							type: 'spline',
			                data: [
								<?php
									$i = 1;
									foreach($score as $s)
									{
										if($i < count($score))
											echo $s->q.',';
										else
											echo $s->q;
										$i++;
									}
								?>
							]
						}<?php if($q < count($scores) - 1) echo ','; ?>
					<?php $q++; endforeach; ?>
	            ]
	        });
	    });
	    
	});
</script>
<script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>
<style>	
	#page_links div a:link{
		color:#454646;
	}
	
	#page_links div a:visited{
		color:#454646;
	}
	
	#page_links div a:hover{
		color:#009900;
	}
</style>
<div style="border: 1px solid #efefef; margin: 0 0 10px 0; -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset;	-moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset; box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset;">
	<div class="title_post" style="float:left; padding:10px 0 0 5px;">
		Course Evaluation - Progress Report
	</div>
	<div class="add_data" style="float:right; padding:10px 5px 0 0px;">
		<button class="readmore_button">Add Course Evaluation Data</button>
	</div>
	<div class="back" style="float:right; padding:10px 5px 0 0px;">
		<button class="readmore_button">View Course Evaluation</button>
	</div>
	<div class="body_post" style="clear:both"><br /><br /></div>
	<div id="scores1">
		<div class="body_post" style="font-size: 12pt; font-weight:bold; color: #009900; padding: 0px 15px;">
			<?php echo $category; ?>
		</div>
		<br />
		<div id="container1" style="min-width: 400px; height: 400px; margin: 0 auto"></div>
	</div>
	<div class="body_post" style="padding: 0 15px;">
		<font style="color:#009900"><strong>Reference:</strong></font>
		<table>
			<?php $q = 0; foreach($questions as $question): ?>
				<tr>
					<td valign="top">
						<?php echo $items[$q].'.'; ?>
					</td>
					<td style="padding-left:5px;">
						<?php echo $question; ?>
					</td>
				</tr>
			<?php $q++; endforeach; ?>
		</table>
	</div>
	<br /><br />
	<div id='page_links' class="body_post" style="padding:0px 5px 5px 5px;">
		<?php if($page > 1):?>
			<div style="float:left;"><strong><a href="<?php echo base_url().'course_evaluation/view_progress/'.($page-1);?>"><< Previous Page</a></strong></div>
		<?php endif;?>
		<?php if($page < 6):?>
			<div style="float:right"><strong><a href="<?php echo base_url().'course_evaluation/view_progress/'.($page+1);?>">Next Page >></a></strong></div>
		<?php endif;?>
	</div>
	<br />
	<div style="clear:both"></div>
</div>