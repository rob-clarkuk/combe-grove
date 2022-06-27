<?php get_header(); ?>
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
        </div>

        <?php include 'includes/secondary-content.php'; ?>

        <?php include 'includes/banner.php'; ?>
    </section>
<?php get_footer(); ?>
