<?php
    // Template name: Team Page
    get_header();
?>
    <section class="content">
        
        <?php include 'includes/banner.php'; ?>

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
            <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
            <?php endif; ?>

            <?php
                if( have_rows('department') ):
                    while( have_rows('department') ): the_row();
                        echo '<div class="team__wrapper">';
                        echo '<h2>' . get_sub_field('department_name') . '</h2>';

                        if( have_rows('team_member') ):
                            while( have_rows('team_member') ): the_row();
                                $has_image = get_sub_field('image');
                                echo '
                                <div class="team__item js-team-member-toggle">
                                    <div class="team__item__inner">';
                                    if($has_image){
                                        echo '
                                            <img src="' . $has_image . '">
                                            <div class="team__item__content">';
                                    } else {
                                        echo '<div class="team__item__content team__item__content--wide">';
                                    }
                                        echo '
                                            <h3>' . get_sub_field('name') . '</h3>
                                            <h4>' . get_sub_field('title') . '</h4>
                                        </div>
                                    </div>
                                    <div class="team__item__biography">' . get_sub_field('biography') . '</div>
                                </div>
                                ';

                            endwhile;
                        endif;

                        echo '</div>';

                    endwhile;
                endif;
             ?>
        </div>

    </section>
<?php get_footer(); ?>
