<div class="sm-col sm-col-6 md-col-4 px2">
	<div class="grid-content-block">
		<figure>
			<?php if (has_post_thumbnail()): ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title() ?>"><?php the_post_thumbnail('grid', array('alt' => get_the_title(), 'class' => 'img-responsive' )) ?></a>
			<?php else: ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title() ?>"><img src="http://www.placehold.it/600x450" title="<?php echo get_the_title(); ?>" class="img-responsive"></a>
			<?php endif ?>
		</figure>
		<h3 class="grid-title"><a href="<?php the_permalink(); ?>" title="<?php the_title() ?>"><?php the_title(); ?></a></h3>
		<p class="grid-text"><?php echo iconv_substr(get_the_excerpt(),0,140,"UTF-8").' '; ?></p>
	</div>
</div>
