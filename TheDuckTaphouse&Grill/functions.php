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


// Enqueue script into block editor
function hybrid_theme_enqueue_scripts() {
 wp_enqueue_script(
     'hybrid-theme-scripts',
     get_template_directory_uri() . '/assets/js/hybrid-theme.js',
     array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
     null,
     true
 );
}
add_action( 'enqueue_block_editor_assets', 'hybrid_theme_enqueue_scripts' );

// Enqueue styles in block editor and front end
function hybrid_theme_enqueue_styles() {
 wp_enqueue_style(
     'hybrid-theme-styles',
     get_template_directory_uri() . '/assets/css/hybrid-theme.css',
     array(),
     filemtime( get_template_directory() . '/assets/css/hybrid-theme.css' )
 );
 add_editor_style( 'assets/css/hybrid-theme.css' );
}
add_action( 'enqueue_block_assets', 'hybrid_theme_enqueue_styles' );

function hybrid_add_theme_supports() {
  add_theme_support( 'responsive-embeds' );
  add_theme_support( 'disable-custom-colors' );
  add_theme_support( 'disable-custom-gradients' );
  add_theme_support( 'disable-custom-font-sizes' );

  // Cannot use alongside a theme.json file
  add_theme_support( 'align-wide' );
  add_theme_support( 'custom-line-height' );
  add_theme_support( 'custom-spacing' );
  add_theme_support( 'custom-units', array( 'rem', 'em', 'px', 'vw', 'vh' ) );

  add_theme_support(
    'editor-color-palette',
    array(
      array(
        'name'  => __( 'Dusty Blue', 'hybrid-theme' ),
        'slug'  => 'dusty-blue',
        'color' => '#367cb3',
      ),
      array(
        'name'  => __( 'Faded Brown', 'hybrid-theme' ),
        'slug'  => 'faded-brown',
        'color' => '#7a6a53',
      ),
    )
  );

  add_theme_support(
    'editor-gradient-presets',
    array(
      array(
        'name'     => __( 'Dusty to Faded', 'hybrid-theme' ),
        'gradient' => 'linear-gradient(135deg, #367cb3 0%, #7a6a53 100%)',
        'slug'     => 'dusty-to-faded',
      ),
    )
  );

  add_theme_support(
    'editor-font-sizes',
    array(
      array(
        'name' => 'Small',
        'slug' => 'small',
        'size' => 12
      ),
      array(
        'name' => 'Medium',
        'slug' => 'medium',
        'size' => 18
      ),
    )
  );
}
add_action( 'after_setup_theme','hybrid_add_theme_supports' );

?>