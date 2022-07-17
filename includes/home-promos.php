<?php
    if( have_rows('home_promo_bottom') ):
        echo '<div class="content__tint"><div class="layout__inner layout__inner--wide"><div class="promo__wrapper promo__wrapper--home">';
        while ( have_rows('home_promo_bottom') ) : the_row();
            echo '
			<a href="' . get_sub_field('link') . '" class="promo">
				<img src="' . get_sub_field('image') . '">
				<h3>' . get_sub_field('title') . '</h3>
			</a>
            ';

        endwhile;
        echo '</div></div></div>';
    endif;
?>
