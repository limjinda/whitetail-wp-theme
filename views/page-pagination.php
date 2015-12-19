<!-- page pagination -->
<div class="page-pagination-block">
	<div class="clearfix mxn1">
		<div class="sm-col sm-col-6 px2 right-align">
			<?php get_previous_posts_link() ? previous_posts_link("<span class='icon icon-arrow-left'></span> ดูเรื่องที่ใหม่กว่า") : "" ?>&nbsp;
		</div>
		<div class="sm-col sm-col-6 px2">
			&nbsp;<?php get_next_posts_link() ? next_posts_link("ย้อนไปดูเรื่องเก่าๆ <span class='icon icon-arrow-right'></span>") : "" ?>
		</div>
	</div>
</div>
<!-- /page pagination -->