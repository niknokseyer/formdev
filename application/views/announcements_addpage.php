<span class="title_post">Add Announcement</span>

<span class="body_post">
<?php 
echo form_open('announcements/add_announcement'); 
echo form_input('title','Title');
echo form_input('content','Content');
echo form_input('role','Role');
echo form_submit('submit','Add Announcement');
echo validation_errors('<p class="error">');
echo form_close();
?>

</span>