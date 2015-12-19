<?php get_header(); ?>
	<main class="main">
		<div class="container">
			<div class="clearfix mxn2">
				<div class="sm-col sm-col-12 px2">
					<?php if ( have_posts() ): ?>
						<div class="sm-col sm-col-12 px2">
							<h1 class="archive-title"><span class="icon-search"></span> ค้นหา: <?php echo get_search_query(); ?></h1>
							<div class="archive-description">แสดงบทความทั้งหมดที่เกี่ยวข้องกับสิ่งที่คุณต้องการค้นหา</div>
						</div>
						<?php while ( have_posts() ) : the_post(); ?>
							<?php get_template_part('views/layout', 'grid') ?>
						<?php endwhile; ?>
						<?php get_template_part('views/page','pagination'); ?>
					<?php else: ?>
						<!-- not match with any query -->
					<?php endif; ?>
				</div>
			</div>
		</div>
	</main>
<?php get_footer(); ?>