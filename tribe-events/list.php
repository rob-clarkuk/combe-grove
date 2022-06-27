<?php
/**
 * List View Template
 * The wrapper template for a list of events. This includes the Past Events and Upcoming Events views
 * as well as those same views filtered to a specific category.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/list.php
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
    <div class="layout__inner layout__inner--condensed content__padded content__tint content__tint--extended">

        <!-- Title Bar -->
        <?php tribe_get_template_part( 'list/title-bar' ); ?>

        <!-- Tribe Bar -->
        <?php tribe_get_template_part( 'modules/bar' ); ?>

        	<!-- Main Events Content -->
        <?php tribe_get_template_part( 'list/content' ); ?>

    </div>
    <div class="banner__top">
        <img src="<?php the_field('event_banner_image', 'options'); ?>">
    </div>
</section>

<?php
do_action( 'tribe_events_after_template' );
