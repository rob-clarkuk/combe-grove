<?php get_header(); ?>
    <section class="content">
        <div class="layout__inner layout__inner--condensed content__padded content__white">
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

            <div class="single__meta">
                <div class="single__meta--left">
                    <p><time><?php the_time('d F Y'); ?></time></p>
                </div>
            </div>
            <div class="type__content">
                <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="layout__inner--centered content__white content__padded--notop">
            <?php include 'includes/secondary-content.php'; ?>
        </div>
    </section>
    <section class="content content__bottom">
        <div class="layout__inner layout__inner--wide">
            <h3 class="type__centered">Other Events</h3>
            <?php include 'includes/listing-related.php'; ?>
        </div>
    </section>
<?php get_footer(); ?>
