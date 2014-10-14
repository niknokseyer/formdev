

<?php 
	echo "
		<div id='fb-root'></div>
      	<script src='http://connect.facebook.net/en_US/all.js'>
      	</script>
		<script>
		
		FB.init({ 
            appId:'170919919630462', cookie:true, 
            status:true, xfbml:true 
         });
		
		function postToFb()
     	{
     		  alert('entered');
     		  var form = document.getElementById('message');
     		  text = form.value;
     		  alert(text);
              FB.ui({
            		method: 'feed',
             	name: 'FORMDEV',
             	link: 'http://www.ccsformdev.com',
             	picture: 'http://ccsformdev.com/Logo.png',
             	description: 'Faci Reflections',  
             	caption: 'FORMDEV: Formation and Development',
             	message: text,
             	},
             	function(response) {
     				  if (response && response.post_id) {
     					 alert('posted in facebook');  	
     				  }
             		else {
             		     alert('error occured');
             		}
             	}
              );
     	}	
     	</script>
	";

	foreach ($ReflectionEntry as $dataEntry){
		echo $dataEntry['title'];
		echo $dataEntry['datetime'];
		echo "<hr>";
		echo htmlspecialchars_decode($dataEntry['message']);
		echo "<br>";
		echo anchor('reflections/editReflection/'.$dataEntry['idreflection'], 'Edit');
		echo "&nbsp; &nbsp;";
		echo anchor('reflections/deleteReflection/'.$dataEntry['idreflection'], 'Delete');
		echo "<br/><br/>";
	}
	$date = date('Y-m-d H:i:s');
	echo $date;
?> 	
	<?php echo form_open('reflections/insertReflection');?>
	<?php echo form_hidden('datetime', $date);?>
	user: <input type = "text" name = "iduser"><br>
	title: <input type = "text" name = "title"><br>
	message: <textarea name = "message"></textarea><br>
	<input type = "submit" value = "submit" id="message"><br>
	<input type="button" value = "FB" onclick="postToFb()"/>	
