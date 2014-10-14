<script>
$(document).ready(function () {
	$('div.article-ctrl').click(function () {
		var elem1 = "#article-ctrl-btns";
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
<span class="title_post"><?php echo $article->title ?></span>

<div class="body_post" style="relative">
	<?php if((isset($pk_announcements_update) && $pk_announcements_update == true ||isset($pk_reflections_update) && $pk_reflections_update == true) || (isset($pk_announcements_delete) && $pk_announcements_delete == true ||isset($pk_reflections_delete) && $pk_reflections_delete == true)): ?>
		<div class="article-ctrl" style="cursor:pointer; display:block; height:24px; position:absolute; top:0px; left:610px; border:thin solid #ccc; border-top:0; -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset; -moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset; box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset;"><img src="<?php echo base_url()?>images/settings-icon.png" height="24px"></div>
		<div id="article-ctrl-btns" style="width: 70px; display:none; background-color:#ffffff; position:absolute; top:24px; left:564px; border:thin solid #ccc; -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset; -moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset; box-shadow: 0 1px 4px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset;">
			<?php if(isset($pk_announcements_update) && $pk_announcements_update == true ||isset($pk_reflections_update) && $pk_reflections_update == true): ?>
			<?php if((isset($user['iduser']) && $user['iduser']==$article->iduser) || $article->idtype == 2): ?>
				<?php echo '<div style="padding-left:5px; padding-top:5px; border-bottom:thin solid #ccc;">'; echo anchor("$controller/update_form/$article->idarticle",'<img src="'.base_url().'images/icons/edit.gif" height="16px" /> <font style="color:#636363; font-size:14px;">Edit</font>'); echo '</div>' ?>
			<?php endif; ?>
			<?php endif; ?>
			<?php if(isset($pk_announcements_delete) && $pk_announcements_delete == true ||isset($pk_reflections_delete) && $pk_reflections_delete == true): ?>
							<?php echo '<div style="padding-left:3px; padding-top:5px;"><img style="cursor:pointer;" height="16px" src="'.base_url().'images/icons/delete.gif" onclick="confirm_delete(\''.$article->title.'\',\''.base_url().$controller.'/delete/'.$article->idarticle.'\')" /> <font style="font-size:14px; cursor:pointer;" onclick="confirm_delete(\''.$article->title.'\',\''.base_url().$controller.'/delete/'.$article->idarticle.'\')">Delete</font></div>'; ?>
			<?php endif; ?>
		</div>
	<?php endif; ?>
<article class="article">
	<header>
		<p class="post-info">
				<?php if($controller=='reflections'):?>
					<?php echo 'by '.anchor(site_url("facilitator/".$article->username),$article->firstname.' '.$article->lastname,'class="article_author"'); ?>
				<?php else:?>
					<?php echo 'Posted '?>
				<?php endif;?>
				<?php 
				$sep_date = explode(" ",$article->datetime);
				$date = DateTime::createFromFormat('Y-m-d', $sep_date[0]);
				$time = DateTime::createFromFormat('G:i:s', $sep_date[1]);
				?>
				<?php echo " on ".$date->format('F j, Y')."  at ".$time->format('h:iA');?></p>
	</header>
	<div class="article-content">
		<?php echo $article->content; ?>
	</div>
	<div class="share-full" style='border-top: solid thin #e3e3e3; padding-top:5px;'>
		<table style="width:100%">
			<?php if($article->tags != null && $article->tags != ''): ?>
				<tr>
					<td>
						<strong>Keywords: </strong>
						<?php 
							$tags = explode(',',$article->tags);
							for($i = 0; $i < count($tags)-1; $i++)
								echo '<a href="'.base_url().$controller.'/search/'.str_replace(' ','_',$tags[$i]).'">'.$tags[$i].'</a>, ';
							echo '<a href="'.base_url().$controller.'/search/'.str_replace(' ','_',$tags[$i]).'">'.$tags[$i].'</a>';
						?>
						<br /><br />
					</td>
				</tr>
			<?php endif; ?>
			<tr>
				<td>
					<div class="fb-like" style='float:left;' data-href="<?php echo site_url($controller.'/article/'.$article->url_title);?>" data-send="false" data-layout="button_count" data-width="150" data-show-faces="false" data-font="arial"></div>
					<div style="float:left;">&nbsp;</div>
					<div style="float:left;">
						<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo site_url($controller.'/article/'.$article->url_title);?>" data-text="<?php echo $article->title; ?>:" data-via="CCSFORMDEV" data-related="CCSFORMDEV">Tweet</a>
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
			</tr>
		</table>
	</div>	
	<footer>
	</footer>
</article>
<center>
<div class="fb-comments" data-href="<?php echo current_url(); ?>/" data-num-posts="2" data-width="630"></div>
</center>

	<p class="disclaimer">
	<?php if($controller=='reflections'): ?>The views expressed on this <?php echo $controller; ?> page, whether in the text, graphics, comments, or articles, are those of the respective authors and do not, by appearing on this page, necessarily reflect the views of FORMDEV nor of De La Salle University.
	<?php endif; ?>
	</p>

</div>