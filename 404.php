<?php get_header(); ?>
    <section class="content">
        <div class="layout__inner layout__inner--condensed content__padded content__white">
            <h1>
                <?php the_field('404_title', 'options'); ?>
            </h1>
            <?php the_field('404_content', 'options'); ?>
        </div>
    </section>
<?php get_footer(); ?>
