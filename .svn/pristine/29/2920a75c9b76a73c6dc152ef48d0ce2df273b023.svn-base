
<?php 
	$id = $this->uri->segment(3);
	echo $id;
	foreach ($AnnouncementsEntry as $dataEntry){
		if($id == $dataEntry['idannouncement']) {
			echo form_open("announcements/updateAnnouncement/".$dataEntry['idannouncement']."");
			echo form_hidden('datetime', $dataEntry['datetime']);
			echo "user: <input type = 'text' name = 'iduser' value = ".$dataEntry['iduser']."><br>";
			echo "role: <input type = 'text' name = 'book' value = ".$dataEntry['role']."><br>";
			echo "message: <textarea name = 'message' rows = 10 cols = 40>".$dataEntry['message']."</textarea><br>";
			echo "<input type = 'submit' value = 'submit'><br>";
		}
	}
?> 	
	
	
	