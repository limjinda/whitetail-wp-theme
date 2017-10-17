<?php get_header(); ?>
<main class="main">
	<div class="container">
		<div class="clearfix mxn2 px2">
			<div class="list-item-block">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php get_template_part('views/layout', 'list') ?>
				<?php endwhile; endif; ?>
			</div>
		</div>
	</div>
	<?php get_template_part('views/page','pagination'); ?>
</main>
<?php get_footer(); ?>
