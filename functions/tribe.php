<?php

if ( class_exists('Tribe__Events__Main') ){

	/* get event category names in text format */
	function tribe_get_text_categories ( $event_id = null ) {

		if ( is_null( $event_id ) ) {
			$event_id = get_the_ID();
		}

		$event_cats = '';

		$term_list = wp_get_post_terms( $event_id, Tribe__Events__Main::TAXONOMY );

		// foreach( $term_list as $term_single ) {
		// 	$event_cats .= $term_single->name . ', ';
		// }

		$event_cats .= $term_list[0]->name;

		//return rtrim($event_cats, ', ');
		return rtrim($event_cats);

	}

}
