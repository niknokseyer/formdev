<span class="title_post"><?php echo $article->title; ?></span>

	<?php if(isset($pk_about_update) && $pk_about_update == true): ?>
		<p class="add"><?php echo anchor("about/update_form/".$article->idarticle,'Edit'); ?></p>
	<?php endif; ?>

</br>	
	
	<span class="body_post">
		<article class="article">
			<?php if(isset($article)): ?>
				<?php echo $article->content; ?>
			<?php endif; ?>
		</article>

		<div class="right">
				<a href="http://www.facebook.com/FORMDEV" title="Follow FORMDEV in Facebook" target="_blank"><img src="<?php echo base_url();?>images/icons/facebook.png" /></a>
				<a href="http://www.twitter.com/CCSFORMDEV" title="Follow FORMDEV in Twitter" target="_blank"><img src="<?php echo base_url();?>images/icons/twitter.png" /></a>
				<a href="http://www.youtube.com/CCSFORMDEV" title="Follow FORMDEV in YouTube" target="_blank"><img src="<?php echo base_url();?>images/icons/youtube.png" /></a>	
				<a href="http://raymundsison.wordpress.com/formdev" title="FORMDEV - Raymund Sison" target="_blank"><img src="<?php echo base_url();?>images/icons/wordpress.png" /></a>					
		</div>
		
	</span>