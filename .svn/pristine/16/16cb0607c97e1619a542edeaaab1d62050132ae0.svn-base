<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<script>
	$(document).ready(function () {
		$('div.edit_verse').click(function () {
			window.location = "<?php echo base_url().'verses/editVerse/'.$verseinfo->idverse; ?>";
		});
	});
</script>
<div class="title_post" style="float:left"><?php echo anchor("/verses/","Verses","class='gallery_title'"); ?></div>
<?php if(isset($pk_verse_edit) && $pk_verse_edit == true):?>
	<div class="edit_verse" style="float:right;"><button class="readmore_button">Edit Verse</button></div>
<?php endif; ?>
<div style="clear:both;"></div><br />
<span class="body_post">
    <fieldset class = "verse_info">
        <legend>Verse Information</legend>
        <div class = "verse_text">
			<?php if (isset($verseinfo->image) && $verseinfo->image!=null): ?>
			<img src="<?php echo $verseinfo->image; ?>" width="600px"></img>
			<?php endif; ?>
            <p><?php  echo $verseinfo->text; ?></p>
            <div style ="text-align: right">
            <?php echo "- ".$verseinfo->book." ".$verseinfo->chapter.":".$verseinfo->verse; ?>
            </div>
			<?php if($verseinfo->application != ''):?>
            <p><?php  echo "General Application: ";?></p>
            <p><?php echo $verseinfo->application;?></p><br/>
			<?php endif; ?>
			<?php if(isset($is_logged_in) && $is_logged_in == true): ?>
	<?php 
				$sep_date = explode(" ",$verseinfo->datetime);
				$date = DateTime::createFromFormat('Y-m-d', $sep_date[0]);
				$time = DateTime::createFromFormat('G:i:s', $sep_date[1]);
	?>		
            <?php echo 'by '.$faciverse->firstname.' '. $faciverse->lastname.'<br>'; ?>
            <?php  echo $date->format('F j, Y')."  at ".$time->format('h:iA'); ?>	
			<?php endif; ?>
            <br /><br />
		<div class="share-full">
			<table style="width:100%">
				<tr>
					<td>
						<div class="fb-like" style='float:left;' data-href="<?php echo site_url('verses/viewVerse/'.$verseinfo->idverse);?>" data-send="false" data-layout="button_count" data-width="150" data-show-faces="false" data-font="arial"></div>
						<div style="float:left;">&nbsp;</div>
						<div style="float:left;">
							<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo site_url('verses/viewVerse/'.$verseinfo->idverse);?>" data-text="<?php echo character_limiter(strip_quotes($verseinfo->text), 70); ?> - <?php echo $verseinfo->book; ?> <?php echo $verseinfo->chapter; ?>:<?php echo $verseinfo->verse; ?>:" data-via="CCSFORMDEV" data-related="CCSFORMDEV">Tweet</a>
							<script>
								!function(d,s,id){
									var js,fjs=d.getElementsByTagName(s)[0];
									if(!d.getElementById(id)){
										js=d.createElement(s);
										js.id=id;
										js.src="//platform.twitter.com/widgets.js";
										fjs.parentNode.insertBefore(js,fjs);
									}
								}(document,"script","twitter-wjs");
							</script>
						</div>
					</td>
					<td>&nbsp;</td>
				</tr>
			</table>
		</div>				
        </div>
    </fieldset>
    <div class="fileupload-buttonbar" style="float:right; margin:10px">
<!--        <div id="right"> <input type="submit" id="cancel" name="back" value="Back" class="galleryUpload" onclick="window.location.href=<?php site_url('verses')?>;"> </div>-->
    </div>
<!--<form action="<?php echo site_url('verses'); ?>" method="POST" enctype="multipart/form-data">
    <div class="fileupload-buttonbar" style="float:right; margin:10px">
        <div id="right"> <input type="submit" id="cancel" name="back" value="Back" class="galleryUpload"> </div>
    </div>
</form>-->
</span>                
