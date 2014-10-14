
<?php 
	$id = $this->uri->segment(3);
	echo $id;
	foreach ($ReflectionEntry as $dataEntry){
		if($id == $dataEntry['idreflection']) {
			echo form_open("reflections/updateReflection/".$dataEntry['idreflection']."");
			echo form_hidden('datetime', $dataEntry['datetime']);
			echo "title: <input type = 'text' name = 'title' value = ".$dataEntry['title']."><br>";
			echo "message: <textarea name = 'message' rows = 10 cols = 40>".$dataEntry['message']."</textarea><br>";
			echo "<input type = 'submit' value = 'submit'><br>";
		}
	}
?> 	
	
	
	