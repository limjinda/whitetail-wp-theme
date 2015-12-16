<div class="single-pagination">
	<div class="clearfix mxn2">
		<div class="sm-col sm-col-6 px1 left">
			<?php if(get_adjacent_post(false,'',true)){ ?>
			<div class="clearfix pagination-content-block">
					<a href="<?php echo get_permalink( get_adjacent_post(false, '', true) ); ?>"><span class="post-pagination-icon icon-arrow-left"></span></a>
					<?php previous_post_link('<strong>%link</strong>'); ?>
			</div>
			<?php } ?>
		</div>
		<div class="sm-col sm-col-6 px1 right">
			<?php if (get_adjacent_post(false,'',false)) { ?>
			<div class="clearfix pagination-content-block">
					<?php next_post_link('<strong>%link</strong>'); ?>
					<a href="<?php echo get_permalink( get_adjacent_post(false, '', false) ); ?>"><span class="post-pagination-icon icon-arrow-right"></span></a>
			</div>
			<?php } ?>
		</div>
	</div>
</div>