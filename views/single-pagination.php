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