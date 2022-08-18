<div class="offCanvas">
	<?php if( have_rows('link', 'option') ): ?>
	    <ul class="offCanvas__menu">
		    <?php while( have_rows('link', 'option') ): the_row(); ?>
		        <li data-menu="offCanvas__menu--<?php echo get_row_index(); ?>" class="offCanvas__menu--item">
		            <a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('title'); ?></a>
		        </li>
		    <?php endwhile; ?>
	    </ul>
	    <div class="offCanvas__subMenu--default"></div>
	    <?php while( have_rows('link', 'option') ): the_row();
	    	$menuId = get_row_index(); 
	    	$background = get_sub_field('submenu_background'); 

	    		if( $background ):

			    $size = 'menu-image';
			    $thumb = $background['sizes'][ $size ];
			    $height = $background['sizes'][ $size . '-height' ];
			    $width = $background['sizes'][ $size . '-width' ];

			    endif;

	    	?>
	    	<?php if( have_rows('submenu') ): ?>
			    <div class="offCanvas__subMenu" style="background-image: url('<?php if( $background ): echo esc_url($thumb); endif;?>);" id="offCanvas__menu--<?php echo $menuId; ?>">
			    	<ul class="offCanvas__menu offCanvas__subMenu--menu">
					    <?php while( have_rows('submenu') ): the_row(); ?>
					        <li>
					            <a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('title'); ?></a>
					        </li>
					    <?php endwhile; ?>
				    </ul>
				</div>
			<?php else : ?>
				<div class="offCanvas__subMenu" style="background-image: url('<?php if( $background ): echo esc_url($thumb); endif;?>);" id="offCanvas__menu--<?php echo $menuId; ?>"></div>
			<?php endif; ?>
		<?php endwhile; ?>
	<?php endif; ?>
</div>

<div class="offCanvas__mob">
	<div class="offCanvas__mob--container">
		<div class="offCanvas__mob--content">
			<?php if( have_rows('link', 'option') ): ?>
				<?php while( have_rows('link', 'option') ): the_row(); ?>
					<?php $linkTitle = get_sub_field('title'); ?>
					<?php $menuId = get_row_index();?>
					<?php if( have_rows('submenu') ): ?>
						<span class="offCanvas__mob--subMenu__trigger" data-subMenu="offCanvas__mob--subMenu--<?php echo $menuId; ?>"><?php echo $linkTitle ?> <?php include 'icon-chevron.php'; ?></span>
					<?php else : ?>	
					<a href="<?php the_sub_field('link'); ?>"><?php echo $linkTitle ?></a>
					<?php endif; ?>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
		<?php if( have_rows('link', 'option') ): ?>
			<?php while( have_rows('link', 'option') ): the_row(); ?>
				<?php $menuId = get_row_index();?>
				<div class="offCanvas__mob--subMenu" id="offCanvas__mob--subMenu--<?php echo $menuId; ?>">
					<?php if( have_rows('submenu') ): ?>
						<a href="#" class="offCanvas__mob--subMenu__back--trigger"><?php include 'icon-chevron.php'; ?> Back</a>
						<?php while( have_rows('submenu') ): the_row(); ?>
					        <a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('title'); ?></a>
					    <?php endwhile; ?>
				    <?php endif; ?>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</div>