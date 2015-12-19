<?php get_header(); ?>
	<main class="main">
		<div class="container">
			<div class="clearfix mxn1">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php get_template_part('views/layout', 'grid') ?>
				<?php endwhile; else: ?>
				<!-- no post found -->
				<?php endif; ?>
		</div>
		<?php get_template_part('views/page','pagination'); ?>
	</div>
	</main>
<?php get_footer(); ?>