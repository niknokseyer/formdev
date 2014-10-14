<script>
$(document).ready(function () {
	$('div.article-ctrl').click(function () {
		var elem1 = "#article-ctrl-btns";
		$(elem1).toggle('drop',{ direction: 'up' });
	});
	
	$('#home-button').click(function () {
		var elem1 = "#article-ctrl-btns";
		$(elem1).toggle('drop',{ direction: 'up' });
		$('#check-grade-container').hide();
		$('#class-info-container').show();
	});
	$('#cg-button').click(function () {
		var elem1 = "#article-ctrl-btns";
		$(elem1).toggle('drop',{ direction: 'up' });
		$('#class-info-container').hide();
		$('#check-grade-container').css('height','');
		$('#check-grade-container').show();
	});
});
</script>
<?php if($section_info->excel != null): ?>
	<script type="text/javascript" src="http://r.office.microsoft.com/r/rlidExcelWLJS?v=1&kip=1"></script>
	<script type="text/javascript">
		/*
		 * This code uses the Microsoft Office Excel Javascript object model to programmatically insert the
		 * Excel Web App into a div with id=myExcelDiv. The full API is documented at
		 * http://msdn.microsoft.com/en-US/library/hh315812.aspx. There you can find out how to programmatically get
		 * values from your Excel file and how to use the rest of the object model. 
		 */

		// Use this file token to reference FORMDEV - Grading Sheet.xlsx in Excel's APIs
		var fileToken = "<?php echo $section_info->excel; ?>";

		// run the Excel load handler on page load
		if (window.attachEvent) {
			window.attachEvent("onload", loadEwaOnPageLoad);
		} else {
			window.addEventListener("DOMContentLoaded", loadEwaOnPageLoad, false);
		}

		function loadEwaOnPageLoad() {
			var props = {
				item: "'View Grades'!A1:D22",
				uiOptions: {
					showDownloadButton: false,
					selectedCell: "'View Grades'!B12",
					showParametersTaskPane: false
				},
				interactivityOptions: {
					allowParameterModification: false,
					allowSorting: false,
					allowFiltering: false,
					allowPivotTableInteractivity: false
				}
			};

			Ewa.EwaControl.loadEwaAsync(fileToken, "myExcelDiv", props, onEwaLoaded);
		}

		function onEwaLoaded(result) {
			/*
			 * Add code here to interact with the embedded Excel web app.
			 * Find out more at http://msdn.microsoft.com/en-US/library/hh315812.aspx.
			 */
		}
	</script>
<?php endif; ?>
<div id="class_container">
	<div id="title_container" class="title_post">
		<div id="title"><?php echo 'FORMDEV '.$section_info->section;?></div>
		<div id="sub-title" style="font-size:15pt"></div>
		<div style="font-size:15pt">&nbsp;</div>
	</div>
	<div class="body_post" style="font-size: 10.5pt; font-weight:bold; text-align:justify;">
		<div class="article-ctrl" style="font-size: 10pt; font-weight:normal; cursor:pointer; display:block; height:24px; position:absolute; top:0px; left:610px; border:thin solid #ccc; border-top:0; -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset; -moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset; box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset;">
			<img src="<?php echo base_url()?>images/ellipsis.png" height="24px">
		</div>
		<div id="article-ctrl-btns" style="font-size: 10pt; font-weight:normal; width: 100px; display:none; background-color:#ffffff; position:absolute; top:24px; left:534px; border:thin solid #ccc; -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset; -moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset; box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset;">
			<div id="home-button" style="cursor:pointer; padding-left:5px; padding-top:5px; border-bottom:thin solid #ccc;">
				<font style="color:#636363; font-size:14px;">
					Home
				</font>
			</div>
			<div id="cg-button" style="cursor:pointer; padding-left:5px; padding-top:5px; border-bottom:thin solid #ccc;">
				<font style="color:#636363; font-size:14px;">
					Check Grades
				</font>
			</div>
		</div>
		<div id="class-info-container">
			<div style="color:#009900;">
				Class Schedule:
			</div>
			<div>
				<?php echo $section_info->schedule;?>
			</div>
			<div>&nbsp;</div>
			<div>
				<table>
					<tr>
						<td style="color:#009900;">Class Facilitator:</td>
						<td align="center">
							<div style="width:100px; overflow:hidden;">
							<a href="<?php echo base_url().'facilitator/'.$facis_in_class[0]->username;?>">
								<?php if(!isset($facis_in_class[0]->facebook) || $facis_in_class[0]->facebook == null):?>
									<?php echo '<img src="'.base_url().'images/profile/no-image.png" height="100px" />';?>
								<?php else: ?>
									<?php echo '<img src="http://graph.facebook.com/'.$facis_in_class[0]->facebook.'/picture?type=large" height="100px" />';?>
								<?php endif; ?>
							</a>
							</div>
							<a style="color: #636363;" href="<?php echo base_url().'facilitator/'.$facis_in_class[0]->username;?>">
								<?php echo $facis_in_class[0]->firstname.' '.$facis_in_class[0]->lastname;?>
							</a>
						</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td style="color:#009900;">Class Henchie:</td>
						<td align="center">
							<div style="width:100px; overflow:hidden;">
								<a href="<?php echo base_url().'facilitator/'.$facis_in_class[1]->username;?>">
									<?php if(!isset($facis_in_class[1]->facebook) || $facis_in_class[1]->facebook == null):?>
										<?php echo '<img src="'.base_url().'images/profile/no-image.png" height="100px" />';?>
									<?php else: ?>
										<?php echo '<img src="http://graph.facebook.com/'.$facis_in_class[1]->facebook.'/picture?type=large" height="100px" />';?>
									<?php endif; ?>
								</a>
							</div>
							<a style="color: #636363;" href="<?php echo base_url().'facilitator/'.$facis_in_class[1]->username;?>">
								<?php echo $facis_in_class[1]->firstname.' '.$facis_in_class[1]->lastname;?>
							</a>
						</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td style="color:#009900;">Group Facilitators:</td>
					</tr>
					<?php $i = 0; $j = 0; foreach ($facis_in_class as $f):?>
						<?php if($i > 1):?>
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
		
		<div id="check-grade-container" style="height:0px; overflow:hidden; text-align:center;">
			<?php if($section_info->excel != null): ?>
				<div class="body_post" id="instructions" style="text-align:left; font-weight:normal;">
					<font style="color:#009900"><strong>Instructions</strong></font>
					<ol>
						<li>Click on the "green box" to enter your ID Number.</li>
						<li>Once you have entered your ID Number, type [Enter].</li>
						<li>You will see the breakdown of your grades and if you are currently passing or failing the course.</li>
					</ol>
				</div>
				<hr />
				<div id="myExcelDiv" style="width: 400px; height: 486px"></div>
			<?php else: ?>
				Oops! Sorry! This feature is not yet ready for your class. :(
			<?php endif; ?>
		</div>
	</div>
</div>