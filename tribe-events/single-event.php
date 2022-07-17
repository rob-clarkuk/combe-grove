<?php
/**
 * Single Event Template
 * A single event. This displays the event title, description, meta, and
 * optionally, the Google map for the event.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/single-event.php
 *
 * @package TribeEventsCalendar
 * @version 4.6.19
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

$events_label_singular = tribe_get_event_label_singular();
$events_label_plural   = tribe_get_event_label_plural();

$event_id = get_the_ID();

?>

<section class="content">
    <div class="layout__inner layout__inner--condensed content__padded content__white">



    	<!-- Notices -->
    	<?php tribe_the_notices() ?>

    	<?php the_title( '<h1>', '</h1>' ); ?>
        <div class="single__meta">
            <div class="single__meta--left">
                <p><time><?php echo tribe_events_event_schedule_details( $event_id, '', '' ); ?></time></p>
            </div>
        </div>


    		<?php /*if ( tribe_get_cost() ) : ?>
    			<span class="tribe-events-cost"><?php echo tribe_get_cost( null, true ) ?></span>
    		<?php endif; */?>


    	<?php while ( have_posts() ) :  the_post(); ?>

    			<!-- Event featured image, but exclude link -->
    			<?php //echo tribe_event_featured_image( $event_id, 'full', false ); ?>

    			<!-- Event content -->
    			<?php do_action( 'tribe_events_single_event_before_the_content' ) ?>
                    <?php
                        $alt_button = get_field('alternative_book_now_email');
                        if($alt_button){
                            echo '<a href="mailto:' . $alt_button . '?subject=Booking for ' . get_the_title() . '" class="button margin-bottom--30">Book Now</a>';
                        } /*else {
                            echo '<a href="#" class="button js-book-now margin-bottom--30">Book Now</a>';
                        }*/
                    ?>


    				<?php the_content(); ?>

                    <?php
                        if($alt_button){
                            echo '<a href="mailto:' . $alt_button . '?subject=Booking for ' . get_the_title() . '" class="button margin-bottom--30">Book Now</a>';
                        } /*else {
                            echo '<a href="#" class="button js-book-now margin-bottom--30">Book Now</a>';
                        }*/
                    ?>

    			<!-- .tribe-events-single-event-description -->
    			<?php //do_action( 'tribe_events_single_event_after_the_content' ) ?>

    		<?php //if ( get_post_type() == Tribe__Events__Main::POSTTYPE && tribe_get_option( 'showComments', false ) ) comments_template() ?>
    	<?php endwhile; ?>

    </div><!-- #tribe-events-content -->
</section>

<!-- Event footer -->
<?php /*<div id="tribe-events-footer">
    <!-- Navigation -->
    <nav class="tribe-events-nav-pagination" aria-label="<?php printf( esc_html__( '%s Navigation', 'the-events-calendar' ), $events_label_singular ); ?>">
        <ul class="tribe-events-sub-nav">
            <li class="tribe-events-nav-previous"><?php tribe_the_prev_event_link( '<span>&laquo;</span> %title%' ) ?></li>
            <li class="tribe-events-nav-next"><?php tribe_the_next_event_link( '%title% <span>&raquo;</span>' ) ?></li>
        </ul>
        <!-- .tribe-events-sub-nav -->
    </nav>
</div>*/ ?>
<!-- #tribe-events-footer -->

<section class="content content__bottom">
    <div class="layout__inner layout__inner--wide">

        <!-- Event meta -->
        <?php do_action( 'tribe_events_single_event_before_the_meta' ) ?>
        <?php //tribe_get_template_part( 'modules/meta' ); ?>
        <?php $eventbrite_id = get_post_meta( $event_id, '_EventBriteId', true ); ?>
        <?php do_action( 'tribe_events_single_event_after_the_meta' ) ?>

    </div>
</section>
