<?php
/**
 * Content Block Template.
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
$class_name = 'content-block';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}

// Load values and assign defaults.
$title             = get_field( 'title' );
$content           = get_field( 'content' ) ?: 'Your content here...';
$margin_bottom     = get_field( 'bottom_margin' );
$small_container   = get_field( 'thin_container' );


$bottom_margin     = $margin_bottom ? "50px" : "0px";
$thin_container     = $small_container ? "content__container--small" : "";

$styles = array( 'margin-bottom: ' . $bottom_margin);
$style  = implode( '; ', $styles );

?>
<div <?php echo $anchor; ?>class="<?php echo esc_attr( $class_name ); ?>" style="<?php echo esc_attr( $style ); ?>">
    <div class="content">
        <div class="content__container <?php echo esc_html( $thin_container );?>">
            <?php if( !empty( $title ) ): ?>
                <h3><strong><?php echo esc_html( $title ); ?></strong></h3>
            <?php endif; ?>
            <?php echo $content ; ?>
        </div>
    </div>
</div>