<?php
/**
 * Gallery Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during backend preview render.
 * @param   int $post_id The post ID the block is rendering content against.
 *          This is either the post ID currently being displayed inside a query loop,
 *          or the post ID of the post hosting this block.
 * @param   array $context The context provided to the block by the post or it's parent block.
 */

// Support custom "anchor" values.
$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'gallery-block';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}

// Load values and assign defaults.
$title 			   = get_field('title');
$intro 			   = get_field('intro');
$columns 		   = get_field('maximum_columns');
$margin_bottom     = get_field( 'bottom_margin' );
$container_width   = get_field( 'container_width' ) ?: 'layout__inner';
$bottom_margin     = $margin_bottom ? "50px" : "0px"; 

$styles = array( 'margin-bottom: ' . $bottom_margin);
$style  = implode( '; ', $styles );

?>
<div <?php echo $anchor; ?>class="<?php echo esc_attr( $class_name ); ?>" style="<?php echo esc_attr( $style ); ?>">
	<div class="gallery__container layout--higher gallery__layout--<?php echo esc_html($columns);?>">
        <div>
        <?php if($title){ ;?>
            <h3><?php echo esc_html($title);?></h3>
        <?php }
        if($intro){;?>
            <p><?php echo esc_html($intro);?></p>
        <?php };?>

        </div>
        <div class="<?php echo esc_html($container_width);?> gallery">

            <?php if( have_rows('images') ): ;?>
                <ul class="gallery__wrapper">
                <?php while ( have_rows('images') ) : the_row();

                    $image = get_sub_field('image');

                    if(!empty($image))
                    {
                        // vars
                        $size = 'team-image';
                        $size2 = 'large';
                        $thumb = $image['sizes'][ $size ];
                        $master = $image['sizes'][ $size2 ]; ?>

                    	<li class="gallery__item">
                    		<a data-fancybox="gallery" href="<?php echo $master;?>">
                    			<img src="<?php echo $thumb;?>">
                    		</a>
                    	</li>
                    <?php }

                endwhile ;?>
                </ul>

            <?php endif;?>

        </div>
    </div>

</div>