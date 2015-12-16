<div class="clearfix mxn2">
	<?php while ( have_posts() ) : the_post() ?>
		<article <?php post_class('sm-col sm-col-12 px1' ); ?>>
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<div class="entry-content">
				<?php the_content() ?>
				<?php get_template_part('views/layout', 'meta'); ?>
			</div>
			<?php get_template_part('views/layout', 'author') ?>
		</article>
	<?php endwhile ?>
</div>