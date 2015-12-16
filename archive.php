<?php get_header(); ?>

<main class="main">
	<div class="container">
		<div class="clearfix mxn2">
			<?php if ( have_posts() ): ?>
				<div class="sm-col sm-col-12 px1">
					<h1 class="archive-title"><?php the_archive_title(''); ?></h1>
					<?php the_archive_description('<div class="archive-description">', '</div>') ?>
				</div>
				<?php while( have_posts() ) : the_post(); ?>
					<?php get_template_part('views/layout', 'grid') ?>
				<?php endwhile; ?>
				<?php get_template_part('views/page','pagination'); ?>
			<?php else: ?>
				<!-- no posts in archive -->
				<div class="archive-content sm-col sm-col-12 px1">
					<span class="icon-battery archive-icon-empty"></span>
					<h1 class="archive-title empty">ไม่พบบทความใดๆ ในหมวด <?php the_archive_title(''); ?></h1>
				</div>
			<?php endif; ?>
			
		</div>
	</div>
</main>

<?php get_footer(); ?>