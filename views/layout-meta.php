<div class="entry-meta">
	<time class="entry-date"><?php if (is_single()): ?><span class="icon icon-clock"></span> <?php endif ?>เขียนเมื่อ: <span class="time" itemprop="dateCreated"><?php the_time('j F, Y'); ?></span></time>
	<?php if (is_single()): ?>
		<span class="entry-categories"><span class="icon icon-archive"></icon> ในหมวดหมู่: <?php the_category(', '); ?> </span>
		<span class="entry-tags"><span class="icon icon-tag"></icon> คำค้น: <?php the_tags('', ', ', ''); ?></span>
	<?php endif ?>
</div>