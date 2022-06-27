<?php
    // Template name: Location Page
    get_header();
?>
    <section class="content">
        <div class="layout__inner layout__inner--condensed content__padded content__tint content__tint--extended">
            <h1>
                <?php
                    $optional_title = get_field('alternate_page_title');
                    if($optional_title){
                        echo $optional_title;
                    } else {
                        the_title();
                    }
                ?>
            </h1>
            <div class="type__content">
                <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>

            <div class="layout__col--wrapper">
                <div class="layout__col--50 text__feature--blue">
                    <?php the_field('column_1'); ?>
                </div>
                <div class="layout__col--50 text__feature--blue">
                    <?php the_field('column_2'); ?>
                </div>
            </div>
        </div>

        <?php include 'includes/map.php'; ?>

        <?php include 'includes/banner.php'; ?>

    </section>
<?php get_footer(); ?>
