<?php
add_action('acf/init', 'my_acf_init_block_types_call_to_action');
function my_acf_init_block_types_call_to_action()
{

    // Check function exists.
    if (function_exists('acf_register_block_type')) {
        $name = "content";
        $title = "Content";
        $description = "Simple block for add title, short description and a button";
        // register a testimonial block.
        acf_register_block_type(array(
            'name'              => $name,
            'title'             => __($title),
            'description'       => __($description),
            'render_template'   => 'blocks/' . $name . '/template.php',
            'category'          => 'combegrove-blocks',
            'icon'              => 'format-aside',
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
                wp_enqueue_style(get_template_directory_uri() . '/dist/styles/main.css', get_template_directory_uri() . '/dist/styles/main.css', array());
            },
            'supports' => array(
                'align' => true,
                'align_text' => true,
                'full_height' => true,
                'mode' => true,
            ),
        ));

        // Add editor styles
        $dir = get_template_directory_uri() . "/blocks/" . basename(__DIR__);
        add_editor_style($dir . '/style.css');
    }
}
