<div class="banner__top">
    <?php
        $has_banner_image = get_field('top_banner_image');
        if($has_banner_image){
            echo '<img src="' . $has_banner_image . '">';
            
        } else {
            echo '<img src="' . get_field('placeholder_image', 'options') . '">';

        }
    ?>
    <h1 class="banner__top--title">
        <?php
            $optional_title = get_field('alternate_page_title');
            if($optional_title){
                echo $optional_title;
            } else {
                the_title();
            }
        ?>
    </h1>
</div>
