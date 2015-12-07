<div class="col col-sm-4 px1">
	<div class="grid-content-block">
		<figure>
			<?php if (has_post_thumbnail()): ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title() ?>"><img src="<?php echo get_thumbnail_url($post->ID, 'full') ?>" alt="<?php echo get_the_title() ?>" title="<?php echo get_the_title(); ?>"></a>
			<?php else: ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title() ?>"><img src="http://www.placehold.it/600x400" title="<?php echo get_the_title(); ?>"></a>
			<?php endif ?>
		</figure>
		<h3 class="grid-title"><a href="<?php the_permalink(); ?>" title="<?php the_title() ?>"><?php the_title(); ?></a></h3>
		<p class="grid-text"><?php echo get_the_excerpt(); ?></p>
	</div>
</div>