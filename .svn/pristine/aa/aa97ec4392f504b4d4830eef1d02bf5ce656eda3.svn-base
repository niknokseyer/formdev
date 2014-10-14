<?php 
$this->load->library('monitoring_lib');
$cookie=explode('.', $_COOKIE["monitoring"]);
?>

<div id="zealtracker" class="ui-widget-content ui-corner-all" style="padding:10px; margin-bottom:10px">
    <span class="title_post" style="font-size:15px">My Zeal Tracker</span>
    <hr />
    <div id="zealtracker_content" style="padding:0px 10px 0px 10px;"><?php
			$result = $this->monitoring_lib->getGroupsOfFaci($cookie[0]);
			$i=1;
			foreach ($result as $row) {
		?>
		<div>
            <strong>Bible Study Attendance - <?php echo $row->name; ?></strong><br />
            
            <?php
            $status = 0;
			$result1 = $this->monitoring_lib->getAttendancePointsInGroup($row->id, $cookie[0]);
			
			foreach ($result1 as $row1) {
				$status = $row1->points*100.0;
				break;
			}
			
			?>
            
            <div class="ui-corner-all" style="height:20px; text-align:center; background-color:<?php
            
			if($status >= 72)
				echo '#00CC00';
			else if($status < 33)
				echo '#FF3333';
			else echo '#FFCC66';
				
			?>; font-weight:bold;" onclick="hide_reveal_details('bs_details<?php echo $i; ?>')">
            	<?php echo $status."%"; ?>
            </div>
            <div id="bs_details<?php echo $i; ?>" style="display:none;">
            	<table width="100%" align="center" style="margin:5px;">
                <tr>
                	<td width="40%">Times Present:</td>
                    <?php
                    
					$result1 = $this->monitoring_lib->getNumberPresentInGroup($row->id, $cookie[0]);
					
					foreach ($result1 as $row1) {
						echo "<td width='10%'>".$row1->present."</td>";
						break;
					}
					
					?>
                    
                    <td width="40%">Times Absent:</td>
                    <?php
                    
					$result1 = $this->monitoring_lib->getNumberAbsentInGroup($row->id, $cookie[0]);
					
					foreach ($result1 as $row1) {
						echo "<td width='10%'>".$row1->absent."</td>";
						break;
					}
					
					?>
                </tr>
                <tr>
                	<td width="40%">Times Late:</td>
                    <?php
                    
					$result1 = $this->monitoring_lib->getNumberLateInGroup($row->id, $cookie[0]);
					
					foreach ($result1 as $row1) {
						echo "<td width='10%'>".$row1->late."</td>";
						break;
					}
					
					?>
                    
                    <td width="40%">Times Excused:</td>
                    <?php
                    
					$result1 = $this->monitoring_lib->getNumberExcusedInGroup($row->id, $cookie[0]);
					
					foreach ($result1 as $row1) {
						echo "<td width='10%'>".$row1->excused."</td>";
						break;
					}
					
					?>
                </tr>
                <tr>
                	<td>Total Meetings:</td>
                    <?php
                    
					$result1 = $this->monitoring_lib->getNumberGroupMeetings($row->id);
					
					foreach ($result1 as $row1) {
						echo "<td>".$row1->meetings."</td>";
						break;
					}
					
					?>
                </tr>
                </table>
            </div>
      	</div>
      	<hr />
        <?php 
				$i++;
			}
			
			$result = $this->monitoring_lib->getClassesOfFaci($cookie[0]);
			$i=1;
			foreach ($result as $row) {
		?>
        	<div>
            <strong>Class Attendance - <?php echo $row->section; ?></strong><br />
            
            <?php
            $status = 0;
			$result1 = $this->monitoring_lib->getAttendancePointsInClass($row->id, $cookie[0]);
			
			foreach ($result1 as $row1) {
				$status = $row1->points*100.0;
				break;
			}
			
			?>
            
          	<div class="ui-corner-all" style="height:20px; text-align:center; background-color:<?php
            
			if($status >= 72)
				echo '#00CC00';
			else if($status < 33)
				echo '#FF3333';
			else echo '#FFCC66';
				
			?>; font-weight:bold;" onclick="hide_reveal_details('class_details<?php echo $i; ?>')">
            	<?php echo $status."%"; ?>
            </div>
            <div id="class_details<?php echo $i; ?>" style="display:none;">
            	<table width="100%" align="center" style="margin:5px;">
                <tr>
                	<td width="40%">Times Present:</td>
                    <?php
                    
					$result1 = $this->monitoring_lib->getNumberPresentInClass($row->id, $cookie[0]);
					
					foreach ($result1 as $row1) {
						echo "<td width='10%'>".$row1->present."</td>";
						break;
					}
					
					?>
                    
                    <td width="40%">Times Absent:</td>
                    <?php
                    
					$result1 = $this->monitoring_lib->getNumberAbsentInClass($row->id, $cookie[0]);
					
					foreach ($result1 as $row1) {
						echo "<td width='10%'>".$row1->absent."</td>";
						break;
					}
					
					?>
                </tr>
                <tr>
                	<td width="40%">Times Late:</td>
                    <?php
                    
					$result1 = $this->monitoring_lib->getNumberLateInClass($row->id, $cookie[0]);
					
					foreach ($result1 as $row1) {
						echo "<td width='10%'>".$row1->late."</td>";
						break;
					}
					
					?>
                    <td width="40%">Times Excused:</td>
                    <?php
                    
					$result1 = $this->monitoring_lib->getNumberExcusedInClass($row->id, $cookie[0]);
					
					foreach ($result1 as $row1) {
						echo "<td width='10%'>".$row1->excused."</td>";
						break;
					}

					?>
                </tr>
                <tr>
                	<td>Total Meetings:</td>
                    <?php
                    
					$result1 = $this->monitoring_lib->getNumberClassMeetings($row->id);
					
					foreach ($result1 as $row1) {
						echo "<td>".$row1->meetings."</td>";
						break;
					}

					?>
                </tr>
                </table>
            </div>
      	</div>
        <hr />
		<?php 
				$i++;
			}
		?></div>
</div>

<?php	
	if($cookie[2]>5)
	{
?>

<div id="monitoring_updates" class="ui-widget-content ui-corner-all" style="padding:10px; margin-bottom:10px">
	<?php 
		$result = $this->monitoring_lib->get_completed_transactions();
		$content = "";
		$i=0;
		foreach ($result as $row) {
	
			if($row->status == 'PENDING')
				$content .= '<tr style="background-color:#FFCC66"><td>';
			else
				$content .= '<tr style="background-color:#DDDDDD"><td>';
			if($row->report_of_group=="")
				$forclause = ".";
			else $forclause = ' for '. $row->report_of_group. '.';
			$content .= $row->nickname. ' has submitted a '. $row->description. $forclause;
			$content .= "<br /><span style='font-size:8pt; color:gray;'>";
			
			if($row->status == 'PENDING')
			{
				$datetime = explode(' ', $row->date_requested);
				$date = explode('-', $datetime[0]);
				$time = explode(':', $datetime[1]);
				$hour = $time[0];
				$min = $time[1];
				$sec = $time[2];
				$month = $date[1];
				$day = $date[2];
				$year = $date[0];
				$content .= 'Pending since ' . date('M j, Y \a\t h:i A', mktime($hour, $min, $sec, $month, $day, $year));
			}
			else
			{
				$datetime = explode(' ', $row->date_processed);
				$date = explode('-', $datetime[0]);
				$time = explode(':', $datetime[1]);
				$hour = $time[0];
				$min = $time[1];
				$sec = $time[2];
				$month = $date[1];
				$day = $date[2];
				$year = $date[0];
				$content .= 'Completed on ' . date('M j, Y \a\t h:i A', mktime($hour, $min, $sec, $month, $day, $year));
			}
			$content .= '</span></td></tr>';
			$i++;
		}
	?>
	<span class="title_post" style="font-size:15px">Monitoring Updates (<?php echo $i;?>)</span>
    <hr />
    <div id="monitoring_content" style="height:180px; overflow:auto;">
    	<table style="width:100%;" cellpadding="5">
			<?php echo $content; ?>
        </table>
    </div>
    <?php } ?>
    
<script language="javascript">
	if(document.getElementById('zealtracker_content').innerHTML == "")
	{
		document.getElementById('zealtracker').parentNode.removeChild(document.getElementById('zealtracker'));
		document.getElementById('monitoring_content').style.height = '510px';
	}
</script>
</div>