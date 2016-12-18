<?php 
	$defaults_page_link = array(
		'before'           => '<p>' . __( 'Pages:', 'jindatheme' ),
		'after'            => '</p>',
		'link_before'      => '',
		'link_after'       => '',
		'next_or_number'   => 'number',
		'separator'        => ' ',
		'nextpagelink'     => __( 'Next page', 'jindatheme' ),
		'previouspagelink' => __( 'Previous page', 'jindatheme' ),
		'pagelink'         => '%',
		'echo'             => 1
	);
	get_header(); 
?>

<main class="main">
	<div class="container">
		<div class="clearfix mxn2">
			<?php while( have_posts() ) : the_post(); ?>
				<?php get_template_part('views/content', 'page'); ?>
				<?php get_template_part('views/layout', 'comment' ); ?>
				<?php wp_link_pages( $defaults_page_link ); ?> 
			<?php endwhile; ?>
		</div>
	</div>
</main>

<?php get_footer(); ?>