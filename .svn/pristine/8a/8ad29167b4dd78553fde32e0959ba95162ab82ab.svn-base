<?php 
	foreach ($AnnouncementEntry as $dataEntry){
		echo "Posted on: ".$dataEntry['datetime']."<br>";
		echo "<hr>";
		echo $dataEntry['message'];
		echo "<br>";
		echo anchor('announcements/editAnnouncement/'.$dataEntry['idannouncement'], 'Edit');
		echo "&nbsp;&nbsp";
		echo anchor('announcements/deleteAnnouncement/'.$dataEntry['idannouncement'], 'Delete');
		echo "<br><br>";
	}
	$date = date('Y-m-d H:i:s');
	//echo $date;
	
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
             	description: 'For more details go to http://www.ccsformdev.com/announcements/facilitator-recruitment-ay-11-12-term-1',  
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
?> 

page under construction. <br>
Announcements <br>
<?php echo form_open('announcements/insertannouncement');?>
<?php echo form_hidden('datetime', $date);?>
User: <input type="text" name = "iduser"></input> <br>
Role: <input type="text" name = "role"></input> <br>
Announcement: <textarea rows="10" cols = "40" id="message" name = "message"></textarea> <br>
<input type="submit" value = "Submit"></input>
<input type="button" value = "FB" onclick="postToFb()"/>




