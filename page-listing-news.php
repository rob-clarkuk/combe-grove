<?php
    // Template name: News Listing Page
    get_header();
?>
    <section class="content">
        <div class="layout__inner layout__inner--condensed content__padded content__tint content__tint--extended">
            <h1 class="type__centered">
                <?php
                    $optional_title = get_field('alternate_page_title');
                    if($optional_title){
                        echo $optional_title;
                    } else {
                        the_title();
                    }
                ?>
            </h1>
            <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
            <?php endif; ?>

            <?php //include 'includes/filters.php'; ?>
			<?php include 'includes/search.php'; ?>
        </div>

        <div class="layout__inner layout__inner--wide layout__counter-margin">
            <?php include 'includes/listing-news.php'; ?>
        </div>

        <?php include 'includes/banner.php'; ?>
    </section>
<?php get_footer(); ?>
