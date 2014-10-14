<?php

	$formtitle = "Outreach Attendance Form";
	$formdate = "mydate = new Date();";
	$formselectdisabled = "";
	$activity = "";
	$members = array();
	$remarks = "";
	

	if(isset($_POST['f']))
	{
		if($_POST['f'] == 2 && isset($_POST['r']))
		{
			$formtitle = "Edit Outreach Attendance Form";
			$result = db_outreach::getOAReport($_POST['r']);
			while ($row = mysql_fetch_assoc($result)) {
				$date = $row['date'];
				$date = explode("-", $date);
				$formdate = "mydate = new Date(" . $date[0] . ", ". ($date[1]-1) .", " . $date[2] . ");";
				$formselectdisabled = "disabled ";
				$activity = $row['activity'];
				if($activity == "faci_outreach")
					$members[1 . "_" . $row['faci']] = $row['attendance'];
				else
					$members[2 . "_" . $row['faci']] = $row['attendance'];
				$remarks = $row['remarks'];
			}
		}
		else
		{
			header('Location: ../outreach');
		}
	}

?>
  <div id="header_part">
  	<div id="header_pic">
	  	<img id="himage" src="<?php echo base_url(); ?>images/headerpics/header1_monitoring.jpg" />
    </div>
  </div>
<table id="pagebody" width="100%" border="0">
        <tr style="vertical-align:top">
            <td id="classform" width="660px" >
                <span class="title_post"><?php echo $formtitle; ?></span><br />
                <span class="body_post">
                	<p> Select if the activity is a class outreach or faci outreach then check the facis that were present.<br />
                    <span class="required" style="font-size:10pt">* Required</span></p>
					<form action="#" class="form_post" id="outreach_form" method="post">
                     	<table align="center">
                            <tr>
                                <td align="right">
                                	<span class="required">*</span>Date of Activity:
                                </td>
                                <td>
                                    <input type="text" value="" name="date" id="date" readonly onClick="GetDate(this);" />
                                    <script type="text/javascript">
                                        <?php echo $formdate; ?>
                                        y = mydate.getFullYear();
                                        m = (mydate.getMonth()+1);
                                        if(m+1<10)
                                            dispmonth = "0" + m;
                                        else dispmonth = m;
                                        d = mydate.getDate();
                                        if(d<10)
                                            dispdate = "0" + d;
                                        else dispdate = d;
                                        document.getElementById("date").value = y + "-" + dispmonth + "-" + dispdate;
                                    </script>
                                </td>
                            </tr>
                            <tr>
                                <td align="right">
                                	<span class="required" style="margin-top:10px;">*</span>Activity:
                                </td>
                                <td>
                                	<?php
                                    echo "<input " . $formselectdisabled . "name='activity' type='radio' value='faci_outreach' ";
									if($activity != "class_outreach")
										echo "checked ";
									echo "onclick=\"hideSubmenu('class_outreach'); revealSubmenu('faci_outreach');\">Faci Outreach</input>";
									echo "&nbsp;&nbsp;";
									echo "<input " . $formselectdisabled . "name='activity' type='radio' value='class_outreach' ";
									if($activity == "class_outreach")
										echo "checked ";
									echo "onclick=\"hideSubmenu('faci_outreach'); revealSubmenu('class_outreach');\">Class Outreach</input>";
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td align="right" valign="top">
                                	<span class="required" style="margin-top:10px;">*</span>Facis:
                                </td>
                                <td id="facis">
                                    <?php
									
										echo "<div id='faci_outreach' style='display:block;'>";
										
										$facis = "";
										
										foreach($facisNotInBSL as $row) {
											echo "<span style='font-weight:bold;'>".$row->nickname." ".$row->lastname."</span><br />";
											echo "&nbsp;&nbsp;<input name='1_".$row->faci."' type='radio' value='1' ";
											if(isset($members[1 . "_" . $row->faci]) && $members[1 . "_" . $row->faci] == 1)
												echo "checked";
											echo ">Present</input>";
											echo "&nbsp;&nbsp;<input name='1_".$row->faci."' type='radio' value='0.5' ";
											if(isset($members[1 . "_" . $row->faci]) && $members[1 . "_" . $row->faci] == 0.5)
												echo "checked";
											echo ">Late</input>";
											echo "&nbsp;&nbsp;<input name='1_".$row->faci."' type='radio' value='0' ";
											if(isset($members[1 . "_" . $row->faci]) && $members[1 . "_" . $row->faci] == 0)
												echo "checked";
											echo ">Absent</input>";
											echo "&nbsp;&nbsp;<input name='1_".$row->faci."' type='radio' value='-1' ";
											if(!isset($members[1 . "_" . $row->faci]) || $members[1 . "_" . $row->faci] == -1)
												echo "checked";
											echo ">Excused/Not Scheduled</input><br />";
											if($facis == "")
												$facis = $row->faci;
											else
												$facis = $facis . ";" . $row->faci;
										}
										echo "<input type='hidden' name='facis' value='".$facis."' />";
										echo "</div>";
										
										echo "<div id='class_outreach' style='display:none;'>";

										$facis = "";
										
										foreach($facilitators as $row) {
											echo "<span style='font-weight:bold;'>".$row->nickname." ".$row->lastname."</span><br />";
											echo "&nbsp;&nbsp;<input name='2_".$row->id."' type='radio' value='1' ";
											if(isset($members[2 . "_" . $row->id]) && $members[2 . "_" . $row->id] == 1)
												echo "checked";
											echo ">Present</input>";
											echo "&nbsp;&nbsp;<input name='2_".$row->id."' type='radio' value='0.5' ";
											if(isset($members[2 . "_" . $row->id]) && $members[2 . "_" . $row->id] == 0.5)
												echo "checked";
											echo ">Late</input>";
											echo "&nbsp;&nbsp;<input name='2_".$row->id."' type='radio' value='0' ";
											if(isset($members[2 . "_" . $row->id]) && $members[2 . "_" . $row->id] == 0)
												echo "checked";
											echo ">Absent</input>";
											echo "&nbsp;&nbsp;<input name='2_".$row->id."' type='radio' value='-1' ";
											if(!isset($members[2 . "_" . $row->id]) || $members[2 . "_" . $row->id] == -1)
												echo "checked";
											echo ">Excused/Not Scheduled</input><br />";
											if($facis == "")
												$facis = $row->id;
											else
												$facis = $facis . ";" . $row->id;
										}
										echo "<input type='hidden' name='facis' value='".$facis."' />";
										echo "</div>";
										if($activity == "class_outreach")
											echo "<script language='javascript'>hideSubmenu('faci_outreach'); revealSubmenu('class_outreach');</script>";
										else
											echo "<script language='javascript'>hideSubmenu('class_outreach'); revealSubmenu('faci_outreach');</script>";
										
									?>
                                </td>
                            </tr>
                            <tr>
                                <td align="right" valign="top">
                                	Remarks:
                                </td>
                                <td>
                                    <textarea name="remarks" style="width:400px; height:100px;"><?php echo $remarks; ?></textarea>
                                    <input type="hidden" value="<?php $cookie=explode('.', $_COOKIE["monitoring"]); echo $cookie[0]; ?>" name="submittedby" id="submittedby" />
                                </td>
                            </tr>
                            <tr>
                            <td colspan="2" align="center">
                            	<br />
                            	<?php
                                	if(isset($post_f) && isset($post_r) && $post_f == 2 && isset($post_r))
									{
										echo "<input type='hidden' value='".$post_r."' name='id' id='id' />";
										echo "<input type='hidden' value='".$activity."' name='activity' id='h_activity' />";
										echo "<input id='btnSubmit' type='button' value='Update' onclick=\"cleanAndSubmit1('activity', 'facis', 'outreach_form', 'submittedby', 'outreach_update', 'outreach')\"/>";
									}
									else
									{
										echo "<input id='btnSubmit' type='button' value='Submit' onclick=\"cleanAndSubmit1('activity', 'facis', 'outreach_form', 'submittedby', 'outreach_submit', 'outreach')\"/>";
									}
								?>
                            </td>
                            </tr>
                        </table>
                	</form>
			  	</span>
			</td>
          <td width="40px">&nbsp;</td>
            <td width="330px">
                <table id="pagebody_right" width="100%" height="100%" border="0">
                  <tr style="vertical-align:top;">
                  	<td>