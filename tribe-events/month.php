<?php
/**
 * Month View Template
 * The wrapper template for month view.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/month.php
 *
 * @package TribeEventsCalendar
 * @version 4.6.19
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

do_action( 'tribe_events_before_template' );
?>

<section class="content">
    <div class="banner__top">
        <img src="<?php the_field('event_banner_image', 'options'); ?>">
    </div>
    
    <div class="layout__inner layout__inner--condensed content__padded content__tint content__tint--extended">

<?php // Title Bar
tribe_get_template_part( 'month/title-bar' );

// Tribe Bar
tribe_get_template_part( 'modules/bar' );

// Main Events Content
tribe_get_template_part( 'month/content' );?>

	</div>
	
</section>

<?php

do_action( 'tribe_events_after_template' );
