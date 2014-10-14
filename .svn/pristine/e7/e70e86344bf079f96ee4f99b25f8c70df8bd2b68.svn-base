<div class="content">
<?php 
$user = $this->session->all_userdata();
date_default_timezone_set('GMT');
$ph_time = time() + 8 * 60 * 60; //sets the current time to philippine time
$hidden = array(
	'iduser' => $user['iduser'],
	'datetime' => date('Y-m-d H:i:s',$ph_time),
	'edited_date' => date('Y-m-d H:i:s',$ph_time)
);
echo form_open($controller.'/'.'add',"class='article-form'",$hidden);
echo form_label('Title:','title');
echo form_input('title',set_value('title'),"id='title'");
$data = array('name'=>'content','id'=>'rte_add');
echo form_textarea($data);
echo display_ckeditor($ckeditor);
echo form_label('Keywords <em>(separate keywords by a \',\')</em>:','tags" style="font-size:10pt;');
echo form_input('tags','','id="tags" style="font-size:10pt; width:370px;"');
echo '<div style="width:100%; text-align:center;">';
echo form_submit('submit',"Add");
echo '</div>';
echo form_close(); 
?>
</div>