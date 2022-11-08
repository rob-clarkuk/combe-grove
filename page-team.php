<?php
    // Template name: Team Page
    get_header();
?>
    <section class="content team">
        
        <?php include 'includes/banner.php'; ?>

        <div class="team__wrapper">
            <?php if (have_posts()): while (have_posts()) : the_post(); ?>
            <div class="team__description">
                <?php the_content(); ?>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>

            <?php
                if( have_rows('department') ):
                    while( have_rows('department') ): the_row();
                        $departmentId = get_row_index();
                        ;?>

                        <div class="team__wrapper">

                            <h2 class="font__lg"><?php the_sub_field('department_name');?></h2>

                            <div class="team__list">

                                <?php 
                                    if( have_rows('team_member') ):
                                        while( have_rows('team_member') ): the_row();
                                            $has_image = get_sub_field('image');
                                            $size = 'team-image';
                                            $thumb = $has_image['sizes'][ $size ];
                                            $width = $has_image['sizes'][ $size . '-width' ];
                                            $height = $has_image['sizes'][ $size . '-height' ];
                                            $biography_image = get_sub_field('biography_image');
                                            $sizebio = 'biography-image';
                                            $thumbbio = $biography_image['sizes'][ $sizebio ];
                                            $widthbio = $biography_image['sizes'][ $sizebio . '-width' ];
                                            $heightbio = $biography_image['sizes'][ $sizebio . '-height' ];?>

                                            <div class="team__item">
                                                <div class="team__item__inner" data-team="team__item__inner--<?php echo get_row_index();?>-<?php echo $departmentId;?>">
                                                    <?php if($has_image){ ?>
                                                        <div class="team__item--image">
                                                            <img src="<?php echo esc_url($thumb); ?>" />
                                                        </div>
                                                        <div class="team__item__content">
                                                            <h3 class="team__item__content--name font__lg"><?php the_sub_field('name');?></h3>
                                                            <h4 class="team__item__content--title text__uppercase font__md"><?php the_sub_field('title');?></h4>
                                                        </div>
                                                    <?php } else { ;?>
                                                        <div class="team__item--image">

                                                        </div>
                                                        <div class="team__item__content">
                                                            <h3 class="team__item__content--name font__lg"><?php the_sub_field('name');?></h3>
                                                            <h4 class="team__item__content--title text__uppercase font__md"><?php the_sub_field('title');?></h4>
                                                        </div>
                                                    <?php } ;?>
                                                </div>
                                            </div>

                                            <div class="team__item--popout" id="team__item__inner--<?php echo get_row_index();?>-<?php echo $departmentId;?>">
                                                <div class="team__item--popout__bg"></div>
                                                <div class="team__item--popout--container">
                                                    <div class="team__item--popout--close"><?php include 'includes/icon-close.php'; ?></div>
                                                    <?php if($biography_image){ ?>
                                                        <img src="<?php echo esc_url($thumbbio); ?>" />
                                                    <?php } ;?>
                                                    <div class="team__item--popout--content">
                                                        <div>
                                                            <h3 class="team__item__content--name font__xl"><?php the_sub_field('name');?></h3>
                                                            <h4 class="team__item__content--title text__uppercase font__md"><?php the_sub_field('title');?></h4>
                                                            <div class="team__item--popout--content__social">
                                                                <?php if (get_sub_field('facebook')){ ;?>
                                                                    <div class="team__item--popout--content__social--item">
                                                                        <?php include 'includes/icon-facebook.php'; ?>
                                                                        <a href="//facebook.com/<?php the_sub_field('facebook');?>" target="_blank"><?php the_sub_field('facebook');?></a>
                                                                    </div>
                                                                <?php } ;?>
                                                                <?php if (get_sub_field('twitter')){ ;?>
                                                                    <div class="team__item--popout--content__social--item">
                                                                        <?php include 'includes/icon-twitter.php'; ?>
                                                                        <a href="//twitter.com/<?php the_sub_field('twitter');?>" target="_blank"><?php the_sub_field('twitter');?></a>
                                                                    </div>
                                                                <?php } ;?>
                                                                <?php if (get_sub_field('instagram')){ ;?>
                                                                    <div class="team__item--popout--content__social--item">
                                                                        <?php include 'includes/icon-instagram.php'; ?>
                                                                        <a href="//instagram.com/<?php the_sub_field('instagram');?>" target="_blank"><?php the_sub_field('instagram');?></a>
                                                                    </div>
                                                                <?php } ;?>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <?php the_sub_field('biography');?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                    <?php endwhile;
                                endif;?>

                            </div>

                        </div>

                    <?php endwhile;
                endif;
             ?>
        </div>

    </section>
<?php get_footer(); ?>
