<?php
/**
 * Hero Block Template.
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
$class_name = 'promo-block';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}

// Load values and assign defaults.
$margin_bottom     = get_field( 'bottom_margin' );
$bottom_margin     = $margin_bottom ? "50px" : "0px";

$styles = array( 'margin-bottom: ' . $bottom_margin);
$style  = implode( '; ', $styles );

?>
<div <?php echo $anchor; ?>class="<?php echo esc_attr( $class_name ); ?>" style="<?php echo esc_attr( $style ); ?>">
    <div class="layout__inner layout__inner--wide layout--higher">
        <div class="promo__wrapper">
            <?php while( have_rows('promos') ): the_row();
                $promo_image = get_sub_field('image');
                if(!empty($promo_image))
                    {
                        // vars
                        $size = 'team-image';
                        $thumb = $promo_image['sizes'][ $size ];?>

                        <a href="<?php the_sub_field('link');?>" class="promo">
                            <img src="<?php echo $thumb;?>">
                            <h3><?php the_sub_field('title');?></h3>
                        </a>
                <?php }
            endwhile;?>
        </div>
    </div>
</div>