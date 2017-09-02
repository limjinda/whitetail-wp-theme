<div class="clearfix mxn2">
	<?php while ( have_posts() ) : the_post() ?>
		<article itemscope itemtype="http://schema.org/BlogPosting" <?php post_class('sm-col sm-col-12 px2' ); ?>>
			<h1 class="entry-title" itemprop="name"><?php the_title(); ?></h1>
			<div class="entry-content" itemprop="articleBody">
				<?php the_content() ?>
				
				<div class="clearfix mxn2 entry-ads-block">
					<?php if(get_option('jinda_opt_ads_end_content_left')): ?>
					<div class="sm-col sm-col-6 px1">
						<?php echo get_option('jinda_opt_ads_end_content_left') ?>
					</div>
					<?php endif; ?>
					<?php if(get_option('jinda_opt_ads_end_content_right')): ?>
					<div class="sm-col sm-col-6 px1">
						<?php echo get_option('jinda_opt_ads_end_content_right') ?>
					</div>
					<?php endif; ?>
				</div>
				<div class="row"></div>
				

				<?php get_template_part('views/layout', 'meta'); ?>
			</div>
			<?php get_template_part('views/layout', 'author') ?>
		</article>
	<?php endwhile ?>
</div>