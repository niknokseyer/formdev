<span class="title_post">Edit Announcement</span>

<span class="body_post">
<?php 
echo form_open('announcements/edit_announcement');
if(isset($announcement)): foreach($announcement as $row):
echo form_input('title',$row->title);
echo form_input('content',$row->content);
echo form_input('role',$row->role);
echo form_hidden('idannouncement', $row->idannouncement);
echo form_hidden('datetime',$row->datetime);
//echo form_hidden('iduser',$row->iduser);
echo form_submit('submit','Save Changes');
echo validation_errors('<p class="error">');
echo form_close();
endforeach;
endif;
?>

</span>