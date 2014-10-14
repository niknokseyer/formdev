<?php

	$formtitle = "Class Attendance Form";
	$formdate = "mydate = new Date();";
	$formselectdisabled = "";
	$section = "";
	$members = array();
	$remarks = "";
	

	if(isset($post_f))
	{
		if($post_f == 2 && isset($post_r))
		{
			$formtitle = "Edit Class Attendance Form";
			$result = $this->monitoring_lib->getCAReport($post_r);
			foreach($result as $row) {
				$date = $row->date;
				$date = explode("-", $date);
				$formdate = "mydate = new Date(" . $date[0] . ", ". ($date[1]-1) .", " . $date[2] . ");";
				$formselectdisabled = " disabled ";
				$section = $row->section;
				$members[$section."_".$row->faci] = $row->attendance;
				$remarks = $row->remarks;
			}
		}
	}

?>
  <div id="header_part">
  	<div id="header_pic">
	  	<img id="himage" src="<?php echo base_url();?>images/headerpics/header1_monitoring.jpg" />
    </div>
  </div>
<table id="pagebody" width="100%" border="0">
        <tr style="vertical-align:top">
            <td id="classform" width="660px" >
                <span class="title_post"><?php echo $formtitle; ?></span><br />
                <span class="body_post">
                	<p> Select your section then check the facis that were in your class.<br />
                    <span class="required" style="font-size:10pt">* Required</span></p>
					<form action="#" class="form_post" id="class_form" method="post">
                     	<table align="center">
                            <tr>
                                <td align="right">
                                	<span class="required">*</span>Date of Session:
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
                                	<span class="required" style="margin-top:10px;">*</span>Section:
                                </td>
                                <td>
									<?php
                                        echo "<select id='section' name='section' onchange=\"replaceElement('section')\"".$formselectdisabled.">";
                                        
                                        $i=1;
                                        foreach($sections as $row){
                                            if($i==1) {
                                                $current_class = $row->id;
                                                $i++;
                                            }
											echo "<option ";
                                            if($section == $row->id)
                                                echo "selected ";
                                            echo "value='".$row->id."'>".$row->section." - ".$row->schedule."</option>";
                                        }
										
										echo "</select>";
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td align="right" valign="top">
                                	<span class="required" style="margin-top:10px;">*</span>Facis:
                                </td>
                                <td id="facis">
                                    <?php
										$facis = "";
										
										echo "<div id='".$current_class."'>";
										
										foreach($sec_faci as $row){
											if($current_class!=$row->class)
											{
												echo "<input type='hidden' name='facis' value='".$facis."' />";
												$facis = "";
												echo "</div>";
												$current_class = $row->class;
												echo "<div id='".$current_class."' style='display:none;'>";
											}
											//echo "<input type='checkbox' value='".$row['id']."'>".$row['nickname']."</input><br />";
											echo "<span style='font-weight:bold;'>".$row->nickname."</span><br />";
											
											echo "&nbsp;&nbsp;<input name='".$current_class."_".$row->id."' type='radio' value='1' ";
											if(isset($members[$current_class."_".$row->id]) && $members[$current_class."_".$row->id] == 1)
												echo "checked";
											echo ">Present</input>";
											echo "&nbsp;&nbsp;<input name='".$current_class."_".$row->id."' type='radio' value='0.5' ";
											if(isset($members[$current_class."_".$row->id]) && $members[$current_class."_".$row->id] == 0.5)
												echo "checked"; 
											echo ">Late</input>";
											echo "&nbsp;&nbsp;<input name='".$current_class."_".$row->id."' type='radio' value='0' ";
											if(!isset($members[$current_class."_".$row->id]) || $members[$current_class."_".$row->id] == 0)
												echo "checked"; 
											echo ">Absent</input>";
											echo "&nbsp;&nbsp;<input name='".$current_class."_".$row->id."' type='radio' value='-1' "; 
											if(isset($members[$current_class."_".$row->id]) && $members[$current_class."_".$row->id] == -1)
												echo "checked";
											echo ">Excused</input><br />";
											if($facis == "")
												$facis = $row->id;
											else
												$facis = $facis . ";" . $row->id;
										}
										echo "<input type='hidden' name='facis' value='".$facis."' />";
										echo "</div>";
										echo "<script language='javascript'> replaceElement('section');</script>";										
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
										echo "<input type='hidden' value='".$section."' name='section' id='h_section' />";
										echo "<input id='btnSubmit' type='button' value='Update' onclick=\"cleanAndSubmit('section', 'facis', 'class_form', 'submittedby', 'class_update', 'class')\"/>";
									}
									else
									{
										echo "<input id='btnSubmit' type='button' value='Submit' onclick=\"cleanAndSubmit('section', 'facis', 'class_form', 'submittedby', 'class_submit', 'class')\"/>";
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