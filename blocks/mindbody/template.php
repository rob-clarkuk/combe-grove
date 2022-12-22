<?php
/**
 * Mindbody Widget Block Template.
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
$class_name = 'mindbody-block';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}

// Load values and assign defaults.
$form_type         = get_field( 'form_choice' );
$margin_bottom     = get_field( 'bottom_margin' );
$bottom_margin     = $margin_bottom ? "50px" : "0px";

$styles = array( 'margin-bottom: ' . $bottom_margin);
$style  = implode( '; ', $styles );

?>
<div <?php echo $anchor; ?>class="<?php echo esc_attr( $class_name ); ?>" style="<?php echo esc_attr( $style ); ?>">
    <div class="mindbody__container mindbody__<?php echo $form_type ;?>">
        <?php
        switch ($form_type) {
            case "prospect":?>

                <script src="https://widgets.mindbodyonline.com/javascripts/healcode.js" type="text/javascript"></script>

                <healcode-widget data-type="prospects" data-widget-partner="object" data-widget-id="48450386b7b" data-widget-version="0" ></healcode-widget>

            <?php break;
            case "newsletter":?>
                <script src="https://widgets.mindbodyonline.com/javascripts/healcode.js" type="text/javascript"></script>

                <healcode-widget data-type="prospects" data-widget-partner="object" data-widget-id="48452376b7b" data-widget-version="0" ></healcode-widget>
            <?php break;
            case "classes":?>
                <script src="https://widgets.mindbodyonline.com/javascripts/healcode.js" type="text/javascript"></script>

                <healcode-widget data-type="schedules" data-widget-partner="object" data-widget-id="481880236b7b" data-widget-version="1" ></healcode-widget>
            <?php break;
            case "registration":?>
                <script src="https://widgets.mindbodyonline.com/javascripts/healcode.js" type="text/javascript"></script>

                <healcode-widget data-type="registrations" data-widget-partner="object" data-widget-id="481330616b7b" data-widget-version="0" ></healcode-widget>
            <?php break;
            case "classlist":?>
                <script src="https://widgets.mindbodyonline.com/javascripts/healcode.js" type="text/javascript"></script>

                <healcode-widget data-type="class_lists" data-widget-partner="object" data-widget-id="48695606b7b" data-widget-version="0" ></healcode-widget>
            <?php break;
            case "appointments":?>
                <script src="https://widgets.mindbodyonline.com/javascripts/healcode.js" type="text/javascript"></script>

                <healcode-widget data-type="appointments" data-widget-partner="object" data-widget-id="481027386b7b" data-widget-version="0" ></healcode-widget>
            <?php break;
            case "login":?>
                <script src="https://widgets.mindbodyonline.com/javascripts/healcode.js" type="text/javascript"></script>

                <healcode-widget data-version="0.2" data-link-class="healcode-login-register-text-link" data-site-id="111195" data-mb-site-id="5729429" data-bw-identity-site="false" data-type="account-link" data-inner-html="Login | Register"  />
            <?php break;
        }?>
    </div>
</div>