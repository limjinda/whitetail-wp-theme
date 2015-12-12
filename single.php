<?php get_header(); ?>

<main class="main">
	<div class="container">
		
		<div class="clearfix mxn2">
			<?php while ( have_posts() ) : the_post() ?>

				<div class="sm-col sm-col-12 px1">
					<h1 class="entry-title"><?php the_title(); ?></h1>
					<div class="entry-content">
						<?php the_content() ?>
					</div>
					<div class="clearfix author-block">
						<?php echo get_avatar( get_the_author_meta('user_email'), 80, '', get_the_author_meta('display_name'), array('class' => 'author-image') ); ?>
						<div class="author-content">
							<h3 class="author-title"><?php echo get_the_author(); ?></h3>
							<p class="author-bio"><?php echo the_author_meta('description'); ?></p>
						</div>
					</div>
				</div>

			<?php endwhile ?>
		</div>

		<div class="single-pagination">
			<div class="clearfix mxn2">
				<div class="sm-col sm-col-6 px1 left">
					<div class="clearfix pagination-content-block">
						<?php if(get_adjacent_post(false,'',true)){ ?>
							<a href="<?php echo get_permalink( get_adjacent_post(false, '', true) ); ?>"><span class="post-pagination-icon icon-arrow-left"></span></a>
							<?php previous_post_link('<strong>%link</strong>'); ?>
						<?php } ?>
					</div>
				</div>
				<div class="sm-col sm-col-6 px1 right">
					<div class="clearfix pagination-content-block">
						<?php if (get_adjacent_post(false,'',false)) { ?>
							<?php next_post_link('<strong>%link</strong>'); ?>
							<a href="<?php echo get_permalink( get_adjacent_post(false, '', false) ); ?>"><span class="post-pagination-icon icon-arrow-right"></span></a>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>

	</div>
</main>

<?php get_footer(); ?>