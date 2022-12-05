<?php
add_action('acf/init', 'my_acf_init_block_types_promo');
function my_acf_init_block_types_promo()
{

    // Check function exists.
    if (function_exists('acf_register_block_type')) {
        $name = "promo";
        $title = "Promo";
        $description = "Promo block";
        // register a testimonial block.
        acf_register_block_type(array(
            'name'              => $name,
            'title'             => __($title),
            'description'       => __($description),
            'render_template'   => 'blocks/' . $name . '/template.php',
            'category'          => 'combegrove-blocks',
            'icon'              => 'cover-image',
            // Shows block preview
            'example'         => array(
                'attributes' => array(
                    'mode' => 'preview', // Important!
                    'data' => array(
                        'preview_image_help' => '' //this can be ignored but is needed to replace in the template
                    ),
                ),
            ),
            'align_text' => 'left',
            'align_content' => 'left',
            'enqueue_assets' => function () {
                $dir = get_template_directory_uri() . "/blocks/" . basename(__DIR__);
                wp_enqueue_style(basename(__DIR__) . '-style.css', $dir . '/style.css', array());
            },
            'supports' => array(
                'align' => false,
                'align_text' => false,
                'full_height' => false,
                'mode' => true,
            ),
        ));

        // Add editor styles
        $dir = get_template_directory_uri() . "/blocks/" . basename(__DIR__);
        add_editor_style($dir . '/style.css');
    }
}
