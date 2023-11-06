<?php 
 
/* ====== Custom Gutenberg functions ====== */
function imon_gutenberg_default_colors(){
  add_theme_support('editor-color-palette', 
  
    array(
      array(
        'name'  => 'White',
        'slug'  => 'white',
        'color' => '#ffffff'
      ),
       array(
        'name'  => 'Black',
        'slug'  => 'black',
        'color' => '#000000'
      ),
       array(
        'name'  => 'Salmon',
        'slug'  => 'salmon',
        'color' => 'salmon'
      ),
    )
  );

  add_theme_support(
    'editor-font-sizes',
      array(
        array(
          'name' => 'Large',
          'slug' => 'large',
          'size' => 24
        )
      )
  );
}

add_action( 'init','imon_gutenberg_default_colors' );


function imon_gutenberg_blocks() {

  wp_register_script( 'custom-cta-js', get_template_directory_uri() . '/build/index.js', array( 'wp-blocks', 'wp-editor', 'wp-components' ));

  register_block_type( 'imon/custom-cta', array(
    'editor_script' => 'custom-cta-js'
  ) );
}

add_action('init', 'imon_gutenberg_blocks');