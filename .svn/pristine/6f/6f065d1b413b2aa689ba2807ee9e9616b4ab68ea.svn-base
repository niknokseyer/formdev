<script>
$(document).ready(function () {
	$('input#replacefile').click(function () {
		if($('input#replacefile:checked').val() != undefined)
		{
			$('#filename').toggle(false);
			$('#input_filename').toggle(true);
		}
		else
		{
			$('#filename').toggle(true);
			$('#input_filename').toggle(false);
		}
	});
});
	function check_files(x){
		if($('input#replacefile:checked').val() != undefined)
		{
			var arr = x.split(',');
			var temp = $('#input_filename').val();
			var n = temp.lastIndexOf('\\');
			var f;
			if(n >= 0)
				f = temp.substr(n+1);
			else
				f = temp;
			if(arr.indexOf(f) != -1)
				return confirm('\"'+f+'\" already exists! Continue?');
			if(temp != '')
				return true;
			else
				return false;
		}
		else
			return true;
	}
</script>
<span class="title_post">Manage Files - Update</span>
<br />
<span class="body_post">	
<?php if(isset($pk_files) && $pk_files == true):?>
<?php $fnames = array(); foreach($files as $r) array_push($fnames,$r['filename']);?>
<br />
<?php $attr = array('onsubmit' => 'return check_files(\''.implode(',',$fnames).'\')'); echo form_open_multipart('files/update/'.$file['idfile'],$attr);?>
<?php 
$attr = array(
     'name'        => 'replacefile',
     'id'          => 'replacefile',
     'value'       => 'replace',
     'checked'     => FALSE
     );
 
echo form_checkbox($attr);?><?php echo form_label('Replace File', 'replacefile'); echo ' | '?>
File: <?php echo anchor(base_url()."files/download/".$file['filename'],$file['filename'],'id="filename"'); ?>
<input id="input_filename" type="file" name="userfile" style="display:none"/>
</br>
<input type="hidden" name="iduser" value="<?php echo $iduser; ?>" />
<?php echo form_label('Label: ', 'label');?><?php echo form_input('label', $file['label']); ?>

<?php echo form_label('Privacy: ', 'access');?>
<?php
$options = array(
                  '1'  => 'Facilitators',
                  '2'  => 'Everyone'
                );

echo form_dropdown('access', $options, $file['access']);
echo '&nbsp;';
echo form_label('Type:', 'groupid');
$options = array(
                  '1'  => 'About FORMDEV',
                  '2'  => 'FORMDEV Class',
				  '3'  => 'Forms',
				  '4'  => 'Plantilla',
				  '5'  => 'Guidelines and Tips'
                );
echo form_dropdown('groupid', $options, $file['groupid']);
?>
<input type="submit" value="Update" style="width:60px"/>
</form>
<?php endif; ?>

</span>

<div id="download_page_report"> </div>