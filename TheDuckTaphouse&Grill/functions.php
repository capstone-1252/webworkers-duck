<?php
add_theme_support( 'block-template-parts' );

function mytheme_enqueue_styles() {
    // Enqueue the main theme stylesheet (style.css in the theme root)
    wp_enqueue_style( 'mytheme-main-style', get_stylesheet_uri() );

    // Enqueue an additional custom stylesheet (e.g., in a 'css' subfolder)
    wp_enqueue_style( 'mytheme-custom-style', get_template_directory_uri() . '/style.css', array(), '1.0.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_styles' );


function disable_new_pages_for_users() {
    if ( !current_user_can( 'manage_options' ) ) {
        remove_post_type_support( 'page', 'create_posts' );
        // Optional: Hide the "Add New" menu item
        global $submenu;
        if (isset($submenu['edit.php?post_type=page'])) {
            unset($submenu['edit.php?post_type=page'][10]);
        }
    }
}
add_action( 'admin_menu', 'disable_new_pages_for_users' );


function hybrid_register_pattern_categories() {
    register_block_pattern(
        'prefix/card',
        array(
            'title'      => 'Card',
            'content'    => '<p>blak</p>' ,
        )
    );
}
add_action( 'init', 'hybrid_register_pattern_categories' );


// add_action( 'init', 'TheDuckTaphouseGrill_register_patterns' );

// function TheDuckTaphouseGrill_register_patterns() {
// 	register_block_pattern( 'TheDuckTaphouse&Grill/hero', array(
// 		'title'      => __( 'Home', 'TheDuckTaphouse&Grill' ),
// 		'categories' => array( 'home' ),
// 		'source'     => 'TheDuckTaphouse&Grill'
// 	) );
// }

?>