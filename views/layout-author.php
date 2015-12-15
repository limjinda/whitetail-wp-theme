<div class="clearfix author-block">
	<?php echo get_avatar( get_the_author_meta('user_email'), 80, '', get_the_author_meta('display_name'), array('class' => 'author-image') ); ?>
	<div class="author-content">
		<h3 class="author-title"><?php echo get_the_author(); ?></h3>
		<p class="author-bio"><?php echo the_author_meta('description'); ?></p>
	</div>
</div>