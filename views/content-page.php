<article <?php post_class('sm-col sm-col-12 px2' ); ?>>
	<h1 class="entry-title"><?php the_title(); ?></h1>
	<?php get_template_part('views/layout', 'meta'); ?>
	<div class="entry-content">
		<?php the_content() ?>
	</div>
</article>