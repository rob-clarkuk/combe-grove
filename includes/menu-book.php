<div class="menu__book">
	<a href="#" class="menu__book--close">Return to Page</a>
	<div class="menu__book--content">
		<h3><?php the_field('book_menu_title', 'option');?></h3>
		<?php if( have_rows('book_links', 'option') ): ?>
			<?php while( have_rows('book_links', 'option') ): the_row(); ?>
				<a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('title'); ?></a>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</div>