<?php
	$attribute = "";
?>

<div id="announcement_part">
	<div style="padding-top:10px;"><span class="title_post">Recent Submissions</span></div>
	  <hr />
      <?php
	  
	  	$cookie=explode('.', $_COOKIE["monitoring"]);
		
	  
	  	if($formtype == 'bs')
		{
			if($cookie[2]>=9)
				$result = $this->monitoring_lib->getRecentSubmissionsFromBS($cookie[0]);
			else
				$result = $this->monitoring_lib->getRecentSubmissionsByFaciBS($cookie[0]);
			$attribute = "BS Report";
		}
		else if($formtype == 'class')
		{
			if($cookie[2]==6 || $cookie[2]==10)
				$result = $this->monitoring_lib->getRecentSubmissionsFromSection($cookie[0]);
			else
				$result = $this->monitoring_lib->getRecentSubmissionsByFaciClass($cookie[0]);
			$attribute = "Class Report";
		}
		else if($formtype == 'outreach' && $cookie[2]>=6)
		{
			$result = $this->monitoring_lib->getRecentOutreachSubmissions();
			$attribute = "Outreach Report";
		}
		else if($formtype == 'reports')
		{
			$result = $this->monitoring_lib->getRecentSubmissionsByFaci($cookie[0]);
		}
		
		$i=0;
		foreach($result as $row) {
	  ?>
	  <p align="justify" class="announcement_post">
      	<?php
		$datetime = explode(' ', $row->date);
		$date = explode('-', $datetime[0]);
		$month = $date[1];
		$day = $date[2];
		$year = $date[0];
		$content = date('F d', mktime(0,0,0, $month, $day, $year));
		$name=$row->name;
		if($row->name=='class_outreach')
			$name='Class';
		else if($row->name=='faci_outreach')
			$name='Faci';
		?>
          <span class="announcement_item"><?php echo $content . " - " . $name . " " . $attribute; ?></span>
		  <br />
          <?php 
	        $datetime = explode(' ', $row->timestamp);
			$date = explode('-', $datetime[0]);
			$time = explode(':', $datetime[1]);
			$hour = $time[0];
			$min = $time[1];
			$sec = $time[2];
			$month = $date[1];
			$day = $date[2];
			$year = $date[0];
			$content = date('M d \a\t h:i A', mktime($hour, $min, $sec, $month, $day, $year));
          ?>
          <span class="readmore_post">&nbsp;&nbsp;Submitted by <?php echo $row->submitted_by . " last " . $content; ?></span>
	  </p>
      
      <?php 
	  		$i++;
		}
	  	if($i==0)
		{
	  ?>
      	<p align="justify" class="announcement_post">
        	<span class="announcement_item">No submissions.</span>
      		<br />
        </p>
       <?php } ?>
</div>
</td>
</tr>
</table>
</td>
</tr>
</table>