<?php get_header(); ?>
    <section class="content">
        <div class="layout__inner layout__inner--condensed content__padded content__white">
            <h1>
                <?php
                    $optional_title = get_field('sub_heading');
                    if($optional_title){
                        echo $optional_title;
                    } else {
                        the_title();
                    }
                ?>
            </h1>

            <div class="single__meta">
                <?php /*<div class="single__meta--left">
                    <p>By <?php the_author(); ?></p>
                </div> */ ?>
                <ul class="single__meta--left">
                    <?php /*<li><time><?php the_time('d F Y'); ?></time></li>*/ ?>
                    <?php
                        $cats = get_the_category();
                        //$cat_name = $cats[0]->name;
                        //echo $cat_name;

                        for ($i = 0; $i < count($cats); ++$i) {
                            $cat_names = "";
                            $cat_url = "";

                            $cat_names .= $cats[$i]->name;
                            $cat_url .= $cats[$i]->slug;

                            echo '<li>';
                            echo '<a href="/category/';
                                echo $cat_url;
                            echo '">';
                                echo $cat_names;
                            echo '</a> ';
                            echo '</li>';
                        }
                    ?>
                </ul>
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
            <div class="sharethis-inline-share-buttons"></div>
        </div>
    </section>
    <section class="content content__bottom">
        <div class="layout__inner layout__inner--wide">
            <?php include 'includes/listing-related.php'; ?>
        </div>
    </section>
<?php get_footer(); ?>
