<?php
	$argsNorm = array( 'post_type' => array('post', 'page', 'events-and-workshops') );
	$argsNorm = array_merge( $argsNorm, $wp_query->query );
	query_posts( $argsNorm );
?>

<?php get_header(); ?>
<section class="content">
    <div class="layout__inner layout__inner--condensed content__padded content__tint content__tint--extended">
        <h1>
            <?php echo sprintf( __( '%s Search Results for "', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?>"
        </h1>
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<p>
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br>
				<?php echo excerpt(30); ?>
			</p>
		<?php endwhile; endif; ?>
    </div>
</section>
<?php get_footer(); ?>
