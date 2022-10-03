<?php $sectionId = get_row_index();?>
<?php if( have_rows('accordion') ): ?>
	<div class="layout__inner content__padded layout__inner--condensed layout--higher type__content">
		<?php while( have_rows('accordion') ): the_row();?>
			<div class="accordion__title" data-accordion="accordion-<?php echo $sectionId . get_row_index(); ?>"><?php the_sub_field('title');?></div>
			<div class="accordion__content" id="accordion-<?php echo $sectionId . get_row_index(); ?>"><?php the_sub_field('content');?></div>
		<?php endwhile ;?>
	</div>
<?php endif ;?>