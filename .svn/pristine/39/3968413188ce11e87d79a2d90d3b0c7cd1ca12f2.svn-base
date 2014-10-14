<script>
	$(document).ready(function () {
		$('div.add_data').click(function () {
			window.location = "<?php echo base_url().'course_evaluation/add'; ?>";
		});
		$('div.view_progress').click(function () {
			window.location = "<?php echo base_url().'course_evaluation/view_progress'; ?>";
		});
	});
</script>
<script type="text/javascript">
	$(function () {
	    var chart;
	    $(document).ready(function() {
	        chart = new Highcharts.Chart({
	            chart: {
	                renderTo: 'ce-container',
					zoomType: 'x',
	                type: 'column'
	            },
	            title: {
	                text: 'Course Evaluation'
	            },
	            xAxis: {
	                categories: [
	                    '1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18a','18b','19','20','21','22','23'
	                ]
	            },
	            yAxis: {
	                min: 0,
	                title: {
	                    text: 'Percentage'
	                }
	            },
	            tooltip: {
	                formatter: function() {
	                    return 'Question '+
	                        this.x +': '+ this.y +' %';
	                }
	            },
	            plotOptions: {
	                column: {
	                    pointPadding: 0.2,
	                    borderWidth: 0
	                }
	            },
	                series: [{
	                name: '3',
	                data: [
						<?php $i = 0; foreach($percentages as $p): ?>
							<?php if($i < 24) echo $p[3].','; else echo $p[3]; $i++;?>
						<?php endforeach;?>
					]
	    
	            }, {
	                name: '2',
	                data: [
						<?php $i = 0; foreach($percentages as $p): ?>
							<?php if($i < 24) echo $p[2].','; else echo $p[2]; $i++;?>
						<?php endforeach;?>
					]
	    
	            }, {
	                name: '1',
	                data: [
						<?php $i = 0; foreach($percentages as $p): ?>
							<?php if($i < 24) echo $p[1].','; else echo $p[1]; $i++;?>
						<?php endforeach;?>
					]
	    
	            }, {
	                name: 'N/A',
	                data: [
						<?php $i = 0; foreach($percentages as $p): ?>
							<?php if($i < 24) echo $p[0].','; else echo $p[0]; $i++;?>
						<?php endforeach;?>
					]
	    
	            }]
	        });
	    });
	    
	});
</script>

<script type="text/javascript">
	$(function () {
	    var chart;
	    $(document).ready(function() {
	        chart = new Highcharts.Chart({
	            chart: {
	                renderTo: 'cs-container',
					zoomType: 'x'
	            },
	            title: {
	                text: 'Course Evaluation'
	            },
	            xAxis: {
	                categories: [
	                    '1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18a','18b','19','20','21','22','23'
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
	                    return 'Question '+
	                        this.x +': '+ this.y;
	                }
	            },
	            plotOptions: {
	                column: {
	                    pointPadding: 0.2,
	                    borderWidth: 0
	                }
	            },
	                series: [{
	                name: 'Current Term',
					type: 'column',
	                data: [
						<?php $i = 0; foreach($scores as $s): ?>
							<?php if($i < 24) echo $s.','; else echo $s; $i++;?>
						<?php endforeach;?>
					]
	    
	            }, {
	                name: 'Previous Term',
					type: 'spline',
	                data: [
						<?php $i = 0; foreach($prev_scores as $ps): ?>
							<?php if($i < 24) echo $ps.','; else echo $ps; $i++;?>
						<?php endforeach;?>
					]
	    
	            }]
	        });
	    });
	    
	});
</script>

<script type="text/javascript">
	$(function () {
	    var chart;
	    $(document).ready(function() {
	        chart = new Highcharts.Chart({
	            chart: {
	                renderTo: 'i-container',
					zoomType: 'x',
	                type: 'column'
	            },
	            title: {
	                text: 'Course Evaluation'
	            },
	            xAxis: {
	                categories: [
					'1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18a','18b','19','20','21','22','23'
					]
	            },
	            tooltip: {
	                formatter: function() {
	                    return 'Question '+ ': '+ this.y;
	                }
	            },
	            credits: {
	                enabled: false
	            },
	            series: [{
	                name: 'Difference (Current vs. Previous Scores)',
	                data: [
						<?php for($i = 0; $i < 24; $i++): ?>
							<?php if($i < 24) echo ($scores[$i] - $prev_scores[$i]).','; else echo ($scores[$i] - $prev_scores[$i]);?>
						<?php endfor;?>
					]
	            }]
	        });
	    });
	    
	});
</script>
<script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>
<div style="border: 1px solid #efefef; margin: 0 0 10px 0; -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset;	-moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset; box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset;">
	<div class="title_post" style="float:left; padding:10px 0 0 5px;">
		Course Evaluation 
		<?php if($start_year != null && $start_year != '') echo ' - S.Y.'.$start_year.'-'.($start_year+1).' Term '.$term; ?>
	</div>
	<div class="add_data" style="float:right; padding:10px 5px 0 0px;">
		<button class="readmore_button">Add Course Evaluation Data</button>
	</div>
	<div class="view_progress" style="float:right; padding:10px 5px 0 0px;">
		<button class="readmore_button">View Progress Report</button>
	</div>
	<div class="title_post" style="clear:both">&nbsp;</div>
	<div id="scores">
		<div class="body_post" style="font-size: 12pt; font-weight:bold; color: #009900; padding: 0px 15px;">
			Summary: Weighted Scores
		</div>
		<br />
		<div id="cs-container" style="min-width: 400px; height: 400px; margin: 0 auto"></div>
	</div>
	<br />
	<div id="percentages">
		<div class="body_post" style="font-size: 12pt; font-weight:bold; color: #009900; padding: 0px 15px;">
			In-Depth: Raw Percentages
		</div>
		<br />
		<div id="ce-container" style="min-width: 400px; height: 400px; margin: 0 auto"></div>
	</div>
	<br />
	<div id="improvements">
		<div class="body_post" style="font-size: 12pt; font-weight:bold; color: #009900; padding: 0px 15px;">
			In-Depth: Improvements from Previous Term
		</div>
		<br />
		<div id="i-container" style="min-width: 400px; height: 400px; margin: 0 auto"></div>
	</div>
</div>