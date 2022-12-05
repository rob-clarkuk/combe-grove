<?php
/**
 * Video Block Template.
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
$class_name = 'cta-block';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}

// Load values and assign defaults.

$button_link     = get_field( 'button_link' );
$button_text     = get_field( 'button_text' );
$margin_bottom     = get_field( 'bottom_margin' );
$bottom_margin     = $margin_bottom ? "50px" : "0px";

$styles = array( 'margin-bottom: ' . $bottom_margin);
$style  = implode( '; ', $styles );

?>
<?php if ($button_link) :?>
<div <?php echo $anchor; ?>class="<?php echo esc_attr( $class_name ); ?>" style="<?php echo esc_attr( $style ); ?>">
	<div class="content__padded content__centered layout--higher">
	    <a href="<?php echo $button_link ; ?>" class="button button__cta"><?php echo esc_html($button_text) ; ?></a>
	</div>
</div>
<?php endif;?>