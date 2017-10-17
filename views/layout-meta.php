<div class="entry-meta">
	<?php if (is_single()): ?>
		<span class="entry-categories"><span class="icon icon-archive"></span> ในหมวดหมู่: <?php the_category(', '); ?> </span>
		<span class="entry-tags"><span class="icon icon-tag"></span> คำค้น: <?php the_tags('', ', ', ''); ?></span>
	<?php endif ?>
</div>
