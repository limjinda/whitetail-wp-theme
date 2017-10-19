<div class="clearfix mxn2 px2">

	<?php while ( have_posts() ) : the_post() ?>
		<article itemscope itemtype="http://schema.org/BlogPosting" <?php post_class('sm-col sm-col-12 px2 entry-wrapper' ); ?>>
			<h1 class="entry-title" itemprop="name"><?php the_title(); ?></h1>

			<time class="entry-date">
				<span class="time" itemprop="datePublished" itemprop="dateCreated"><?php the_time('j F, Y'); ?></span>
			</time>

			<div class="entry-content" itemprop="articleBody">
				<?php the_content() ?>

				<?php if ( (get_option('jinda_opt_enable_content_ads_left') || get_option('jinda_opt_enable_content_ads_right')) && get_post_format() != "quote" ): ?>
					<div class="clearfix mxn2 entry-ads-block">
						<?php if(get_option('jinda_opt_enable_content_ads_left')): ?>
							<div class="sm-col sm-col-6 ">
								<?php echo get_option('jinda_opt_ads_end_content_left') ?>
							</div>
						<?php endif; ?>
						<?php if(get_option('jinda_opt_enable_content_ads_right')): ?>
							<div class="sm-col sm-col-6 ">
								<?php echo get_option('jinda_opt_ads_end_content_right') ?>
							</div>
						<?php endif; ?>
					</div>
				<?php endif; ?>

				<?php get_template_part('views/layout', 'meta'); ?>
			</div>
			<?php get_template_part('views/layout', 'author') ?>
		</article>
	<?php endwhile ?>
</div>
