<?php get_header(); ?>

<main class="main">
	<div class="container">
		<div class="clearfix mxn2">
			<?php while( have_posts() ) : the_post(); ?>
				<?php get_template_part('views/content', 'page'); ?>
				<?php get_template_part('views/layout', 'comment' ); ?>
			<?php endwhile; ?>
		</div>
	</div>
</main>

<?php get_footer(); ?>