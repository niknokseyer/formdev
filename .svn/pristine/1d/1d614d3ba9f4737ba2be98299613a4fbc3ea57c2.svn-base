<div class="content">
	<?php

	$user = $this->session->all_userdata();
	date_default_timezone_set('GMT');
	$ph_time = time() + 8 * 60 * 60; //sets the current time to philippine time
	$hidden = array(
		'idarticle' => $this->uri->segment(3),
		'iduser' => $user['iduser'],
		'edited_date' => date('Y-m-d H:i:s',$ph_time)
	);
	 echo form_open($action,"class='article-form'",$hidden);
	 echo form_label('Title','title');
	 echo form_input('title',set_value('title',$article->title),"id='title'");
	$data = array('name'=>'content','id'=>'rte_update');
	 echo form_textarea($data,$article->content);
	 echo display_ckeditor($ckeditor);
	 echo form_label('Keywords <em>(separate keywords by a \',\')</em>:','tags" style="font-size:10pt;');
	 $tags_array = explode(',',$article->tags); $tags_str = '';
	 for($i = 0; $i < count($tags_array)-1; $i++)
	 	 $tags_str .= $tags_array[$i].', ';
	 $tags_str .= $tags_array[$i];
	 echo form_input('tags',set_value('title',$tags_str),'id="tags" style="font-size:10pt; width:370px;"');
	 echo '<div style="width:100%; text-align:center;">';
	 echo form_submit('submit',"Update");
	 echo '</div>';
	 ?>
	<?php echo form_close(); ?>	
</div><!-- / -->
