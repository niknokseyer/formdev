<?php

include('../../db/db_facilitators.php');

switch($_POST['committee'])
{
	case 1: $result = db_facilitators::getCurrentFacilitators();
		break;
	case 2: $result = db_facilitators::getLoaFacilitators();
		break;
	case 3: $result = db_facilitators::getAlumniFacilitators();
}

?>
<div id="facimanagement" class="ui-widget-content ui-corner-all" style="padding:10px; margin-bottom:10px">
    <?php
		
		switch($_POST['committee'])
		{
			case 1: echo "<span class='title_post' style='font-size:15px'>Facilitator Management</span><hr /><span class='title_post' style='font-size:14px'>Current Facilitators</span><span class='title_post' style='font-size:14px'>&nbsp;|&nbsp;</span><span style='font-size:14px' onClick=\"selectPanelTab('faci_tab', 2)\">LOA Facilitators</span><span class='title_post' style='font-size:14px'>&nbsp;|&nbsp;</span><span style='font-size:14px' onClick=\"selectPanelTab('faci_tab', 3)\">Alumni Facilitators</span>";
				break;
			case 2: echo "<span class='title_post' style='font-size:15px'>Facilitator Management</span><hr /><span style='font-size:14px' onClick=\"selectPanelTab('faci_tab', 1)\">Current Facilitators</span><span class='title_post' style='font-size:14px'>&nbsp;|&nbsp;</span><span class='title_post' style='font-size:14px'>LOA Facilitators</span><span class='title_post' style='font-size:14px'>&nbsp;|&nbsp;</span><span style='font-size:14px' onClick=\"selectPanelTab('faci_tab', 3)\">Alumni Facilitators</span>";
				break;
			case 3: echo "<span class='title_post' style='font-size:15px'>Facilitator Management</span><hr /><span style='font-size:14px' onClick=\"selectPanelTab('faci_tab', 1)\">Current Facilitators</span><span class='title_post' style='font-size:14px'>&nbsp;|&nbsp;</span><span style='font-size:14px' onClick=\"selectPanelTab('faci_tab', 2)\">LOA Facilitators</span><span class='title_post' style='font-size:14px'>&nbsp;|&nbsp;</span><span class='title_post' style='font-size:14px'>Alumni Facilitators</span>";
		}

	
	?>
    
	<form id="faci_form">
    <div style="height:465px; overflow:auto">
        <table width="100%">
            <?php
            
                $i = 0;
                while ($row = mysql_fetch_assoc($result)) {
                    echo "<tr style='background-color:#FFFFFF;'>";
                    echo "<td width='214px'><div><label style='width:5px; float:left;'>&nbsp;</label><label for='option_".$row['id']."' style='width:270px; float:left;'>".$row['fullname'];
                    echo "</label>";
					echo "<label for='option_".$row['id']."' style='width:180px; float:left;'>Batch ".$row['batch'];
                    echo "</label>";
                    echo "<select id='option_".$row['id']."' name='option_".$row['id']."' style='width:200px;'>";
					switch($_POST['committee'])
					{
						case 1: echo "<option value='1' selected>Current Serving Facilitator</option><option value='2'>LOA</option><option value='3'>Alumni Facilitator</option>";
							break;
						case 2: echo "<option value='1'>Current Serving Facilitator</option><option value='2' selected>LOA</option><option value='3'>Alumni Facilitator</option>";
							break;
						case 3: echo "<option value='1'>Current Serving Facilitator</option><option value='2'>LOA</option><option value='3' selected>Alumni Facilitator</option>";
					}
                    echo "";
                    echo "</select></div>";
                    echo "<hr/>";
                    echo "</td>";
                    echo "</tr>";
                    $i++;
                }
            ?>
	    </table>
    </div>
    <div align="center" style="position:relative; top:5px;">
    	<input type="button" value="UPDATE" style="width:120px; height:25px; font-size:12px; padding:0px; border:none; background-image:url(../../images/buttonbg.png); color:#FFFFFF" />
    </form>
    </div>
</div>