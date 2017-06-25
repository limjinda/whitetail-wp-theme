<?php get_header(); ?>
<main class="main">
	<div class="container">
		<?php get_template_part('views/content', 'single') ?>
		<?php get_template_part('views/single', 'pagination') ?>
		<?php get_template_part('views/layout', 'comment' ); ?>
	</div>
</main>
<?php get_footer(); ?>