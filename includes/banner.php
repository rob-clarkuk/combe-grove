<div class="banner__top">
    <?php
        $has_banner_image = get_field('top_banner_image');
        if($has_banner_image){
            echo '<img src="' . $has_banner_image . '">';
        } else {
            echo '<img src="' . get_field('placeholder_image', 'options') . '">';
        }
    ?>
</div>
