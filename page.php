<?php get_header(); ?>

<main class="main">
	<div class="container">
		<div class="clearfix mxn2">
			<?php while( have_posts() ) : the_post(); ?>

				<article <?php post_class('sm-col sm-col-12 px1' ); ?>>
					<h1 class="entry-title"><?php the_title(); ?></h1>
					<?php get_template_part('views/layout', 'meta'); ?>

					<div class="entry-content">
						<?php the_content() ?>
					</div>

				</article>

				<?php get_template_part('views/layout', 'comment' ); ?>
			<?php endwhile; ?>
		</div>
	</div>
</main>

<?php get_footer(); ?>



<!-- <?php post_class(); ?> -->