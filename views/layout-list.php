<div class="list-item">
	<div class="list-wrapper clearfix">
		<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" class="list-item-image">
			<figure>
				<img src="<?php echo has_post_thumbnail() ? the_post_thumbnail_url('grid') : 'http://www.placehold.it/600x450' ?>" alt="<?php echo the_permalink(); ?>">
				<div class="shade-effect"></div>
			</figure>
		</a>
		<div class="list-item-content">
			<h3 class="_title"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
			<p class="_text"><?php echo mb_strimwidth( wp_strip_all_tags( get_the_content() ), 0, 200, '...', 'UTF-8' ); ?></p>
			<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" class="_button btn btn-primary">อ่านต่อ</a>
		</div>
	</div>
</div>
