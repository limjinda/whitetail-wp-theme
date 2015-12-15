<?php get_header(); ?>

<main class="main">
	<div class="container">
		
		<div class="clearfix mxn2">
			<?php while ( have_posts() ) : the_post() ?>
				<div class="sm-col sm-col-12 px1">
					<h1 class="entry-title"><?php the_title(); ?></h1>
					<div class="entry-content">
						<?php the_content() ?>
						<?php get_template_part('views/layout', 'meta'); ?>
					</div>
					<?php get_template_part('views/layout', 'author') ?>
				</div>
			<?php endwhile ?>
		</div>

		<?php get_template_part('views/single', 'pagination') ?>

		<div class="clearfix mxn2">
			<div class="sm-col sm-col-12 px1">
				<?php if ( comments_open() || get_comments_number() ) {
					comments_template();
				}?>
			</div>
		</div>

	</div>
</main>

<?php get_footer(); ?>