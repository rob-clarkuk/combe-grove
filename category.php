<?php
    get_header();
?>
    <section class="content">
        <div class="banner__top">
            <img src="<?php the_field('top_banner_image'); ?>">
        </div>
        
        <div class="layout__inner layout__inner--condensed content__padded content__tint content__tint--extended">
            <?php include 'includes/filters.php'; ?>
        </div>

        <div class="layout__inner layout__inner--wide layout__counter-margin">
            <?php include 'includes/listing-news-category.php'; ?>
        </div>

    </section>
<?php get_footer(); ?>
