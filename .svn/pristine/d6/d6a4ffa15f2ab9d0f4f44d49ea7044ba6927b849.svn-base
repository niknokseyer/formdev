<script>
	$(document).ready(function () {
		var s;
		var arr = document.getElementsByTagName('div');
		count = 0;
		var i;
		var h = 189;
		for(i = 0; i < arr.length; i++)
			if($(arr[i]).attr('class') == 'isc')
				count++;
		for(i = 1; i < count+1; i++)
		{
			if($('#image-stack-container'+i).css('height') > parseInt(h))
				h = s;
		}
		for(i = 1; i < count+1; i++)
		{
			var br = ((parseInt(h) - parseInt($('#image-stack-container'+i).css('height'))) / 14)+1;
			var j;
			for(j = 0; j < br; j++)
					$('#stack-text-space'+i).append('&nbsp;<br />');
		}
		<?php if($backup):?>
			$('div.back-up').click(function () {
				window.location = "<?php echo base_url().'gallery/update_backup'; ?>";
			});
		<?php endif; ?>
	});
</script>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); $ctr=0; ?>

<span class="title_post">
	Gallery
</span>
<?php if($backup):?>
	<div class="back-up" style="float:right;">
		<button class="readmore_button">Update Back Up</button>
	</div>
<?php endif; ?>
<span class="body_post">
	<br/>
	<br/>
	<?php  $i = 0; foreach ($albums as $dataEntry): ?>
	     	<div id="image-stack-container<?php echo ($i+1);?>" class="isc" style="clear:both; position:relative; display:inline-block; padding-left:30px; padding-bottom:10px;">
				<a href="<?php echo base_url();?>gallery/album/<?php echo $dataEntry['id'];?>" title="<?php echo $dataEntry['name'];?>">
					<div class="image_stack" style="">
					<?php $j = 0; $p1 = array_reverse($photos[$i]); foreach ($p1 as $p):?>
						<img id="photo<?php echo ($j+1);?>" class="stackphotos" src="<?php echo $p['source'];?>"  >
					<?php $j++; endforeach;?>
				    </div>
				</a>
				<div class="body_post" name="stack-text" style="text-align:left; line-height:14px; width:150px;">
					<a href="<?php echo base_url();?>gallery/album/<?php echo $dataEntry['id'];?>">
						<font style = "font-weight:bold; color:#167F39" title="<?php echo $dataEntry['name'];?>">
							<?php echo $dataEntry['name'];?>
						</font>
					</a>
				<br />
				<font style="font-size:11px;"><?php echo $dataEntry['count'];?> photos</font>
				<div id="stack-text-space<?php echo ($i+1);?>"></div>
				</div>
			</div>
	<?php $i++; endforeach;?> 
</span>