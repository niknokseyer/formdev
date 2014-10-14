<script>
$(document).ready(function () {
	$('div.article_post').mouseover(function () {
		var elem = "#article-ctrl-" + $(this).attr('name');
		$(elem).toggle(true);
	});
	$('div.article_post').mouseleave(function () {
		var elem = "#article-ctrl-" + $(this).attr('name');
		$(elem).toggle(false);
		var elem1 = "#article-ctrl-btns-" + $(this).attr('name');
		$(elem1).toggle(false);
	});
	$('div.article-ctrl').click(function () {
		var elem1 = "#article-ctrl-btns-" + $(this).attr('name');
		$(elem1).toggle('drop',{ direction: 'up' });
	});
});
	function confirm_delete(x,url){
	jConfirm('Delete "'+ x +'"?', 'Confirm Delete', function (c) {
		if(c)
			window.location=url;
	});
	}
</script>
<style>
	#page_links a:link{
		color:#454646;
	}
	
	#page_links a:visited{
		color:#454646;
	}
	
	#page_links a:hover{
		color:#009900;
	}
</style>
<table style="width:100%">
<tr>
<td class="title_post"><?php echo $title ?>
<?php 
	$display_add = true; 
	if($articles[0]->idtype == 1)
	{
		if($title != "Reflections" && $title != "Search Reflections")
		{
			if(isset($user['iduser']) && $user['iduser']==$articles[0]->iduser) 
				$display_add = true; 
			else 
				$display_add = false;
		}
		else if($title == "Search Reflections")
		{
			echo '<font style="text-transform:capitalize;">: '.$search_tag.'</font>';
		}
	}
	else if($articles[0]->idtype == 2)
	{
		if($title == "Search Announcements")
		{
			echo '<font style="text-transform:capitalize;">: '.$search_tag.'</font>';
		}
	}
?>
</td>
<?php $add_btn="New Announcement"; if($controller=='reflections') $add_btn="New Reflection";?>
<?php if($display_add): ?>
	<?php if(isset($pk_announcements_add) && $pk_announcements_add == true ||isset($pk_reflections_add) && $pk_reflections_add == true): ?>
		<td align="right" style="padding-top:3px"><?php echo anchor("$controller/add_form",'<img src="'.base_url().'images/icons/add.png" height="29px"/>',array('title'=>$add_btn)); ?></td>	
	<?php endif; ?>
<?php endif; ?>
</tr>
</table>
<div class="body_post article-body">
<?php if(isset($articles) && $articles!=null): ?>
	<?php if($controller == 'reflections') echo '<div id="left-column" class="article-columns" style="position:relative; width:300px; float:left; padding-left:5px; padding-right: 10px">';?>
	<?php $i=0; foreach($articles as $a): ?>
	<?php if(($controller == 'reflections' && ($i % 2) == 0) || $controller == 'announcements'):?>
	<div class='article_post' name="<?php echo $i;?>" style='position:relative; <?php if($controller == 'reflections') echo 'width:300px; float:left; padding-left:5px; padding-right: 10px';?>'>
	
	<?php if((isset($pk_announcements_update) && $pk_announcements_update == true ||isset($pk_reflections_update) && $pk_reflections_update == true) || (isset($pk_announcements_delete) && $pk_announcements_delete == true ||isset($pk_reflections_delete) && $pk_reflections_delete == true)): ?>
		<div id="article-ctrl-<?php echo $i;?>" class="article-ctrl" name="<?php echo $i;?>" style="cursor:pointer; display:none; height:20px; position:absolute; top:-11px; <?php if($controller == 'reflections') echo 'left:283px;'; else echo 'left:608px;'?> border:thin solid #ccc; border-top:0; -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset; -moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset; box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset;"><img src="<?php echo base_url()?>images/settings-icon.png" height="20px"></div>
		<div id="article-ctrl-btns-<?php echo $i;?>" class="article-ctrl-btns" name="<?php echo $i;?>" style="width: 70px; display:none; background-color:#ffffff; position:absolute; top:9px; <?php if($controller == 'reflections') echo 'left:233px;'; else echo 'left:558px;'?> border:thin solid #ccc; -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset; -moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset; box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset;">
			<?php if(isset($pk_announcements_update) && $pk_announcements_update == true ||isset($pk_reflections_update) && $pk_reflections_update == true): ?>
			<?php if($user['iduser']==$a->iduser || $a->idtype == 2): ?>
				<?php echo '<div style="padding-left:5px; padding-top:5px; border-bottom:thin solid #ccc;">'; echo anchor("$controller/update_form/$a->idarticle",'<img src="'.base_url().'images/icons/edit.png" height="16px" /> <font style="color:#636363; font-size:14px;">Edit</font>'); echo '</div>' ?>
			<?php endif; ?>
			<?php endif; ?>
			<?php if(isset($pk_announcements_delete) && $pk_announcements_delete == true ||isset($pk_reflections_delete) && $pk_reflections_delete == true): ?>
							<?php echo '<div style="padding-left:3px; padding-top:5px;"><img style="cursor:pointer;" height="16px" src="'.base_url().'images/icons/delete.png" onclick="confirm_delete(\''.$a->title.'\',\''.base_url().$controller.'/delete/'.$a->idarticle.'\')" /> <font style="font-size:14px; cursor:pointer;" onclick="confirm_delete(\''.$a->title.'\',\''.base_url().$controller.'/delete/'.$a->idarticle.'\')">Delete</font></div>'; ?>
			<?php endif; ?>
		</div>
	<?php endif; ?>
		<?php
			if($controller=='reflections' && ($i % 4) == 2)
				$style_str = 'style="border-bottom-color:#fff"';
			else
				$style_str = 'style="border-bottom-color:#e3e3e3"';
		?>
		<article class="article-part" <?php echo $style_str;?>>
			<header>
				<h2 class="article-title" style="text-align:left"><?php echo anchor("$controller/article/$a->url_title",$a->title); ?></h2>
				<p class="post-info" style="text-align:left">
				<?php if($controller=='reflections'):?>
					<?php echo anchor(site_url("reflections/author/$a->username"),$a->firstname.' '.$a->lastname,'class="article_author"').' | '; ?>
				<?php else:?>
					<?php echo 'Posted on '?>
				<?php endif;?>
				<?php 
				$sep_date = explode(" ",$a->datetime);
				$date = DateTime::createFromFormat('Y-m-d', $sep_date[0]);
				$time = DateTime::createFromFormat('G:i:s', $sep_date[1]);
				?>
				<?php echo $date->format('F j, Y')."  at ".$time->format('h:iA');?></p>
			</header>
			
			<div class="article-content" style="<?php if($controller == 'reflections') echo 'padding-left:5px; padding-right:5px;';?>">
				<div class="article-content-summary">
					<?php echo $a->summary; ?>
				</div>
			</div>
			<footer>
				<div class="share">
					<br />
					<table style="width:100%">
					<tr>
						<td style="width:70%;">
							<div class="fb-like" style='float:left;' data-href="<?php echo site_url($controller.'/article/'.$a->url_title);?>" data-send="false" data-layout="button_count" data-width="150" data-show-faces="false" data-font="arial"></div>
							<div style='float:left;'>&nbsp;</div>
							<div style='float:left;'>
								<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo site_url($controller.'/article/'.$a->url_title);?>" data-text="<?php echo $a->title; ?>:" data-via="CCSFORMDEV" data-related="CCSFORMDEV">Tweet</a>
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
						<td style="width: 30%;" align="right">
							<button class="readmore_button" onclick="window.location='<?php echo site_url($controller.'/article/'.$a->url_title);?>'">Read More</button>
						</td>
					</tr>
					</table>
				</div>
			</footer>
		</article>
	</div>
	<?php endif; $i++; endforeach; ?>
	<?php if($controller == 'reflections') echo '</div>';?>
	<?php if($controller == 'reflections'): echo '<div id="right-column" class="article-columns" style="position:relative; width:300px; float:left; padding-left:5px; padding-right: 10px">';?>
	<?php $i=0; foreach($articles as $a): ?>
	<?php if($controller == 'reflections' && ($i % 2) == 1):?>
	<div class='article_post' name="<?php echo $i;?>" style='position:relative; <?php if($controller == 'reflections') echo 'width:300px; float:left; padding-left:5px; padding-right: 10px';?>'>
	
	<?php if((isset($pk_announcements_update) && $pk_announcements_update == true ||isset($pk_reflections_update) && $pk_reflections_update == true) || (isset($pk_announcements_delete) && $pk_announcements_delete == true ||isset($pk_reflections_delete) && $pk_reflections_delete == true)): ?>
		<div id="article-ctrl-<?php echo $i;?>" class="article-ctrl" name="<?php echo $i;?>" style="cursor:pointer; display:none; height:20px; position:absolute; top:-11px; <?php if($controller == 'reflections') echo 'left:283px;'; else echo 'left:608px;'?> border:thin solid #ccc; border-top:0; -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset; -moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset; box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset;"><img src="<?php echo base_url()?>images/settings-icon.png" height="20px"></div>
		<div id="article-ctrl-btns-<?php echo $i;?>" class="article-ctrl-btns" name="<?php echo $i;?>" style="width: 70px; display:none; background-color:#ffffff; position:absolute; top:9px; <?php if($controller == 'reflections') echo 'left:233px;'; else echo 'left:558px;'?> border:thin solid #ccc; -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset; -moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset; box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset;">
			<?php if(isset($pk_announcements_update) && $pk_announcements_update == true ||isset($pk_reflections_update) && $pk_reflections_update == true): ?>
			<?php if($user['iduser']==$a->iduser || $a->idtype == 2): ?>
				<?php echo '<div style="padding-left:5px; padding-top:5px; border-bottom:thin solid #ccc;">'; echo anchor("$controller/update_form/$a->idarticle",'<img src="'.base_url().'images/icons/edit.png" height="16px" /> <font style="color:#636363; font-size:14px;">Edit</font>'); echo '</div>' ?>
			<?php endif; ?>
			<?php endif; ?>
			<?php if(isset($pk_announcements_delete) && $pk_announcements_delete == true ||isset($pk_reflections_delete) && $pk_reflections_delete == true): ?>
							<?php echo '<div style="padding-left:3px; padding-top:5px;"><img style="cursor:pointer;" height="16px" src="'.base_url().'images/icons/delete.png" onclick="confirm_delete(\''.$a->title.'\',\''.base_url().$controller.'/delete/'.$a->idarticle.'\')" /> <font style="font-size:14px; cursor:pointer;" onclick="confirm_delete(\''.$a->title.'\',\''.base_url().$controller.'/delete/'.$a->idarticle.'\')">Delete</font></div>'; ?>
			<?php endif; ?>
		</div>
	<?php endif; ?>
		<?php
			if($controller=='reflections' && ($i % 4) == 3)
				$style_str = 'style="border-bottom-color:#fff"';
			else
				$style_str = 'style="border-bottom-color:#e3e3e3"';
		?>
		<article class="article-part" <?php echo $style_str;?>>
			<header>
				<h2 class="article-title" style="text-align:left"><?php echo anchor("$controller/article/$a->url_title",$a->title); ?></h2>
				<p class="post-info" style="text-align:left">
				<?php if($controller=='reflections'):?>
					<?php echo anchor(site_url("reflections/author/$a->username"),$a->firstname.' '.$a->lastname,'class="article_author"').' | '; ?>
				<?php else:?>
					<?php echo 'Posted on '?>
				<?php endif;?>
				<?php 
				$sep_date = explode(" ",$a->datetime);
				$date = DateTime::createFromFormat('Y-m-d', $sep_date[0]);
				$time = DateTime::createFromFormat('G:i:s', $sep_date[1]);
				?>
				<?php echo $date->format('F j, Y')."  at ".$time->format('h:iA');?></p>
			</header>
			
			<div class="article-content" style="<?php if($controller == 'reflections') echo 'padding-left:5px; padding-right:5px;';?>">
				<div class="article-content-summary">
					<?php echo $a->summary; ?>
				</div>
			</div>
			<footer>
				<div class="share">
					<br />
					<table style="width:100%">
					<tr>
						<td style="width:70%;">
							<div class="fb-like" style='float:left;' data-href="<?php echo site_url($controller.'/article/'.$a->url_title);?>" data-send="false" data-layout="button_count" data-width="150" data-show-faces="false" data-font="arial"></div>
							<div style='float:left;'>&nbsp;</div>
							<div style='float:left;'>
								<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo site_url($controller.'/article/'.$a->url_title);?>" data-text="<?php echo $a->title; ?>:" data-via="CCSFORMDEV" data-related="CCSFORMDEV">Tweet</a>
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
						<td style="width: 30%;" align="right">
							<button class="readmore_button" onclick="window.location='<?php echo site_url($controller.'/article/'.$a->url_title);?>'">Read More</button>
						</td>
					</tr>
					</table>
				</div>
			</footer>
		</article>
	</div>
	<?php endif; $i++; endforeach; ?>
	<?php echo '</div>'; endif;?>
	<div id="page_links" style="clear:both; color:#009900;">
	<?php echo $this->pagination->create_links();?>
	</div>
	<p class="disclaimer"><?php if($controller=='reflections'): ?>The views expressed on this <?php echo $controller; ?> page, whether in the text, graphics, comments, or articles, are those of the respective authors and do not, by appearing on this page, necessarily reflect the views of FORMDEV nor of De La Salle University.
	<?php endif; ?>
	</p>
<?php else: ?>
	<p>There are currently no <?php echo $controller;?> to display.</p>
<?php endif; ?>

</div>