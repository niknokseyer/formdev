<?php

include('../../db/db_facilitators.php');

$committeeID = $_POST['committee'];
$committee = "";

if($committeeID == 4)
	$committee = "Monitoring";
else if($committeeID == 3)
	$committee = "Instructional Materials";
else if($committeeID == 2)
	$committee = "Communications";
else if($committeeID == 1)
	$committee = "Outreach";

$result = db_facilitators::getCurrentFacilitatorsInCommittee($committeeID);
$result = db_facilitators::getCurrentFacilitatorsNotInCommittee($committeeID);
?>

<div id="<?php echo $committeeID; ?>" class="ui-widget-content ui-corner-all" style="padding:10px; height:555px; overflow:hidden">
    <div style="float:left">
    	<button style="width:120px; height:25px; font-size:12px; padding:0px; border:none; background-image:url(../../images/buttonbg.png); color:#FFFFFF" onclick="selectPanelTab('com_tab')">Committees</button>
    </div>
    	<div style="text-align:right"><span class="title_post" style="font-size:15px;"><?php echo $committee; ?> Committee Members</span></div>
    <hr />
    <div style="height:460px; width:400px;">
        Members:
        <div class="ui-widget-content ui-corner-all" style="padding:0px 10px 0px 10px; height:460px; width:400px;">
            <table width="380px">
                <tr style="background-color:#CCCCCC">
                    <th width="38px" align="center">Head</th>
                    <th width="304px" align="center">Member</th>
                    <th width="38px" align="center"></th>
                </tr>
            </table>
            <div style="height:430px; overflow:auto">
            <table width="380px">
                <tr>
                    <td width="38px" align="center"><input type="radio" name="head" checked/></td>
                    <td width="304px">Angelo Crisanto Miranda</td>
                    <td width="38px" align="center"><button style="padding:0px; border:none; background-color:#FFFFFF; color:red">X</button></td>
                </tr>
                <tr style='background-color:#DDDDDD'>
                    <td align="center"><input type="radio" name="head" /></td>
                    <td>Mary Czarinelle Yeung</td>
                    <td align="center"><button style="padding:0px; border:none; background-color:#DDDDDD; color:red">X</button></td>
                </tr>
                <tr>
                    <td align="center"><input type="radio" name="head" /></td>
                    <td>Jenna Karla Tardio</td>
                    <td align="center"><button style="padding:0px; border:none; background-color:#FFFFFF; color:red">X</button></td>
                </tr>
                <tr style='background-color:#DDDDDD'>
                    <td align="center"><input type="radio" name="head" /></td>
                    <td>Sandie Roa</td>
                    <td align="center"><button style="padding:0px; border:none; background-color:#DDDDDD; color:red">X</button></td>
                </tr>
            </table>
            </div>
        </div>
    </div>
    <div align="center" style="position:relative; top:35px">
    	<button style="width:120px; height:25px; font-size:12px; padding:0px; border:none; background-image:url(../../images/buttonbg.png); color:#FFFFFF">SAVE</button>
    </div>
    <div style="height:460px; position:absolute; top:59px; left:450px">
    	Facilitators:
    	<div class="ui-widget-content ui-corner-all" style="padding:0px 10px 0px 10px; height:460px; width:243px;">
            <table width="225px">
                <tr style="background-color:#CCCCCC">
                    <th width="24px" align="center"></th>
                    <th width="214px" align="center">Facilitator</th>
                </tr>
            </table>
            <div style="height:430px; overflow:auto">
            <table width="225px">
            	<?php
                
					$i = 0;
					while ($row = mysql_fetch_assoc($result)) {
						if($i%2==0)
						{
							echo "<tr style='background-color:#FFFFFF'>";
							echo "<td width='24px' align='center'><button style='padding:0px; border:none; background-color:WHITE; color:GREEN' value='".$row['id']."'>+</button></td>";
						}
						else
						{
							echo "<tr style='background-color:#DDDDDD'>";
							echo "<td width='24px' align='center'><button style='padding:0px; border:none; background-color:#DDDDDD; color:GREEN' value='".$row['id']."'>+</button></td>";
						}
						echo "<td width='214px'>".$row['nickname']."</td>";
						echo "</tr>";
						$i++;
					}
				?>
            </table>
            </div>
        </div>
    </div>
</div>
