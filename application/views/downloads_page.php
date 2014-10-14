<script src="<?php echo base_url();?>js/jquery.tablednd.0.7.min.js"></script>
<script>
$(document).ready(function () {
	$('span.title_post').ready(function () {
	$('div.upload').toggle(false);
	});
	
	$('div.upload_button').click(function () {
		$('div.upload').toggle('blind');
		if($('#upload_button').html()=='Upload File')
			$('#upload_button').html("Cancel");
		else
			$('#upload_button').html("Upload File");
	});	
	
	function slideUp(){
		setTimeout(function(){
			$('#AjaxResult1').slideUp('slow');
		}, 2000);
	}

	function updateList(x){
		var elem = "#"+x+" tr";
		var i = 0;$(elem).each(function(){
			var newID = i+"."+x;
			$(this).attr('id',newID);
			i++;
		});
	}
	
	$('#1').tableDnD({
		onDrop: function(table, row) 
		{
			$.post('<?php echo base_url(); ?>files/update_order',{ 'groupid':1, 'field':$.tableDnD.serialize() }, function(result)
			{
				$('#AjaxResult1').html(result);
				updateList('1');
				$('#AjaxResult1').slideDown('slow');
				slideUp();
			}); 
		},
		dragHandle: ".dragHandle"
	});

	
	$('#2').tableDnD({
        onDrop: function(table, row) {
            $.post('<?php echo base_url(); ?>files/update_order',{ 'groupid':2, 'field':$.tableDnD.serialize() }, function(result)
			{
				$('#AjaxResult1').html(result);
				updateList('2');
				$('#AjaxResult1').slideDown('slow');
                slideUp();
			});
        },
        dragHandle: ".dragHandle"
    });
	
	$('#3').tableDnD({
        onDrop: function(table, row) {
            $.post('<?php echo base_url(); ?>files/update_order',{ 'groupid':3, 'field':$.tableDnD.serialize() }, function(result)
			{
				$('#AjaxResult1').html(result);
				updateList('3');
				$('#AjaxResult1').slideDown('slow');
                slideUp();
			});
        },
        dragHandle: ".dragHandle"
    });
	
	$('#4').tableDnD({
        onDrop: function(table, row) {
            $.post('<?php echo base_url(); ?>files/update_order',{ 'groupid':4, 'field':$.tableDnD.serialize() }, function(result)
			{
				$('#AjaxResult1').html(result);
				updateList('4');
				$('#AjaxResult1').slideDown('slow');
                slideUp();
			});
        },
        dragHandle: ".dragHandle"
    });
	
	$('#5').tableDnD({
        onDrop: function(table, row) {
            $.post('<?php echo base_url(); ?>files/update_order',{ 'groupid':5, 'field':$.tableDnD.serialize() }, function(result)
			{
				$('#AjaxResult1').html(result);
				updateList('5');
				$('#AjaxResult1').slideDown('slow');
                slideUp();
			});
        },
        dragHandle: ".dragHandle"
    });
	
	$("#1 tr").hover(function() {
		if($(this.cells[0]).attr('class') == 'dragHandle')
          $(this.cells[0]).addClass('showDragHandle');
    }, function() {
          $(this.cells[0]).removeClass('showDragHandle');
    });
	$("#2 tr").hover(function() {
		if($(this.cells[0]).attr('class') == 'dragHandle')
          $(this.cells[0]).addClass('showDragHandle');
    }, function() {
          $(this.cells[0]).removeClass('showDragHandle');
    });
	$("#3 tr").hover(function() {
		if($(this.cells[0]).attr('class') == 'dragHandle')
          $(this.cells[0]).addClass('showDragHandle');
    }, function() {
          $(this.cells[0]).removeClass('showDragHandle');
    });
	$("#4 tr").hover(function() {
		if($(this.cells[0]).attr('class') == 'dragHandle')
          $(this.cells[0]).addClass('showDragHandle');
    }, function() {
          $(this.cells[0]).removeClass('showDragHandle');
    });
	$("#5 tr").hover(function() {
		if($(this.cells[0]).attr('class') == 'dragHandle')
          $(this.cells[0]).addClass('showDragHandle');
    }, function() {
          $(this.cells[0]).removeClass('showDragHandle');
    });
 });	
	function confirm_delete(x,url){
	jConfirm('Delete "'+ x +'"?', 'Confirm Delete', function (c) {
		if(c)
			window.location=url;
	});
	}
	
	function check_files(x){
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
	
</script>


<span class="title_post">Downloads</span>

<span class="body_post">
<?php if(isset($pk_files) && $pk_files == true):?>
<?php $fnames = array(); foreach($files as $r) array_push($fnames,$r['filename']);?>
<div style="float:right" class="upload_button"><button id="upload_button" class="readmore_button">Upload File</button></div>
<?php endif; ?>
<br/>
<div class='upload' style=" clear:both; background:#EFFFEB;">		
<?php if(isset($pk_files) && $pk_files == true):?>
<strong>Upload</strong>
<?php $attr = array('onsubmit' => 'return check_files(\''.implode(',',$fnames).'\')'); echo form_open_multipart('files/do_upload',$attr);?>
<div style="float:left; background:#EFFFEB;"><input id="input_filename" type="file" name="userfile" /></div>
<?php
echo '<div style="float:left; background:#EFFFEB;">&nbsp;'; echo form_label('Privacy:', 'access');
$options = array(
                  '1'  => 'Facilitators',
                  '2'  => 'Everyone'
                );
echo form_dropdown('access', $options, '1');
echo '</div><div style="float:left;background:#EFFFEB;">&nbsp;';
echo form_label('Type:', 'groupid');
$options = array(
                  '1'  => 'About FORMDEV',
                  '2'  => 'FORMDEV Class',
				  '3'  => 'Forms',
				  '4'  => 'Plantilla',
				  '5'  => 'Guidelines and Tips'
                );
echo form_dropdown('groupid', $options, '1');
echo '</div><input class="readmore_button" type="submit" value="GO!" style="width:35px"/>';
?>
</form>
<?php endif; ?>
</div>
<div align="center" id="AjaxResult1" style="display:none; background:#EFFFEB; font-style: italic;"> </div>
<?php if(isset($files) && $files!=null):?>
<?php echo '<br />'?>
		<?php $cur = 0; foreach($files as $r) : ?>
			<?php if ($r['groupid'] > $cur): ?>
				<?php if($r['groupid'] >= 4 && isset($is_logged_in) && $is_logged_in == true):?>
					<?php if ($cur != 0): ?>
						<?php echo '</table><br /><table id="'.$r["groupid"].'" width="100%" style="clear:both;">';?>
					<?php else:?>
						<?php echo '<table id="'.$r["groupid"].'" width="100%" style="clear:both;">';?>
					<?php endif; ?>
					<?php echo '<tr id="0.'.$r['groupid'].'" class="nodrop nodrag"><td colspan="3"><strong>'.$r['group_name'].'</strong></td></tr>'; $cur = $r['groupid'] ?>
				<?php elseif($r['groupid'] < 4):?>
					<?php if ($cur != 0): ?>
						<?php echo '</table><br /><table id="'.$r["groupid"].'" width="100%" style="clear:both;">';?>
					<?php else:?>
						<?php echo '<table id="'.$r["groupid"].'" width="100%" style="clear:both;">';?>
					<?php endif; ?>
					<?php echo '<tr id="0.'.$r['groupid'].'" class="nodrop nodrag"><td colspan="3"><strong>'.$r['group_name'].'</strong></td></tr>'; $cur = $r['groupid'] ?>
				<?php endif; ?>
			<?php endif; ?>
			<?php if ($r['access']==2): ?>
				<tr id="<?php echo $r['list_order'].'.'.$r['groupid'];?>">
				<?php if(isset($pk_files) && $pk_files == true):?>
					<td width='3%' class="dragHandle">&nbsp;</td>
				<?php endif;?>
				<td width='87%'>
				<?php echo anchor(base_url()."files/download/".$r['filename'],$r['label'],"class='download'"); ?>
				<?php if(isset($is_logged_in) && $is_logged_in == true):?>
					<?php echo "<img src='".base_url()."images/icons/public.png' height='12px' title='Shared with: Public'/> <i> (downloads: ".$r['download'].")</i>"; ?>
				<?php endif; ?>
				<?php if(!isset($pk_files) || $pk_files != true):?>
				<?php else : ?>
					</br>
					<i>last modified <?php echo timespan(human_to_unix($r['datetime']),time());?> ago by <?php echo $r['firstname'];?></i>
					</td>
					<td align="right">
					<?php echo anchor(base_url()."files/edit/".$r['idfile'],"<img src='".base_url()."images/icons/edit.png'/>","class='admin_menu'").'&nbsp;&nbsp;'; ?>
					<?php echo '<img style="cursor:pointer;" src="'.base_url().'images/icons/delete.png" onclick="confirm_delete(\''.$r['filename'].'\',\''.base_url()."files/delete/".$r['idfile'].'\')" />'; ?>
					</td>
				<?php endif; ?>
				</tr>
			<?php else:?>
				<?php if(isset($is_logged_in) && $is_logged_in == true):?>
					<tr id="<?php echo $r['list_order'].'.'.$r['groupid'];?>">
					<?php if(isset($pk_files) && $pk_files == true):?>
					<td width='3%' class="dragHandle">&nbsp;</td>
					<?php endif; ?>
					<td width='87%'>
					<?php echo anchor(base_url()."files/download/".$r['filename'],$r['label'],"class='download'"); ?>
					<?php if(isset($is_logged_in) && $is_logged_in == true):?>
						<?php echo "<img src='".base_url()."images/icons/facilitator.png' height='12px' title='Shared with: Facilitators'/> <i> (downloads: ".$r['download'].")</i>"; ?>
					<?php endif; ?>
					<?php if(!isset($pk_files) || $pk_files != true):?>
					<?php else : ?>
						</br>
						<i>last modified <?php echo timespan(human_to_unix($r['datetime']),time());?> ago by <?php echo $r['firstname'];?></i>
						</td>
						<td align="right">
						<?php echo anchor(base_url()."files/edit/".$r['idfile'],"<img src='".base_url()."images/icons/edit.png'/>","class='admin_menu'").'&nbsp;&nbsp;'; ?>
						<?php echo '<img style="cursor:pointer;" src="'.base_url().'images/icons/delete.png" onclick="confirm_delete(\''.$r['filename'].'\',\''.base_url().'files/delete/'.$r['idfile'].'\')" />'; ?>
						</td>
					<?php endif; ?>
					</tr>
				<?php endif; ?>
			<?php endif; ?>
		<?php endforeach; ?>
<?php echo "</table>";?>
</br>
<?php if(isset($is_logged_in) && $is_logged_in == true):?>
<span class="legend">
Legend:&nbsp;
<img src='<?php echo base_url();?>images/icons/facilitator.png' height='12px' title='Shared with: Facilitators'/> Facilitators &nbsp;
<img src='<?php echo base_url();?>images/icons/public.png' height='12px' title='Shared with: Public'/> Public
</span>
<?php endif; ?>
<?php else: ?>
<?php echo "No files availalable for download yet.";?>
<?php endif; ?>
</span>
<div id="download_page_report"> </div>