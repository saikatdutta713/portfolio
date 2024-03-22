<?php

function mytheme_enqueue_scripts(){
  wp_enqueue_style('bootstrap-css', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.0.0');
  wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '4.0.0', true);
  wp_enqueue_script('popper-js', get_stylesheet_directory_uri() . '/assets/js/popper.min.js', array('jquery'), '', true);
  wp_enqueue_script('jquery', get_stylesheet_directory_uri() .'/assets/js/jquery/jquery-2.2.4.min.js', array(), '2.2.4', true);
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_scripts');

// Add custom stylesheet.
function add_custom_css() {
  wp_enqueue_style('custom-styles', get_stylesheet_directory_uri() . '/assets/css/main.style.css');
}
add_action('wp_enqueue_scripts', 'add_custom_css');

function mytheme_register_menus() {
  register_nav_menus(
    array(
      'primary-menu' => esc_html__( 'Primary Menu', 'mynewtheme' ),
      'footer-menu' => esc_html__( 'Footer Menu', 'mynewtheme' ),
    )
  );
}
add_action( 'after_setup_theme', 'mytheme_register_menus' );
  
function mytheme_setup() {
  add_theme_support( 'custom-logo' );
}
add_action( 'after_setup_theme', 'mytheme_setup' );

function mytheme_customize_register( $wp_customize ) {
  // Add section for download button settings
  $wp_customize->add_section( 'download_button_settings', array(
  'title' => __( 'Download Button', 'mytheme' ),
  'priority' => 30,
  ) );

  // Add control for download button text
  $wp_customize->add_setting( 'download_button_text', array(
  'default' => __( 'Download', 'mytheme' ),
  'sanitize_callback' => 'sanitize_text_field',
  ) );

  $wp_customize->add_control( 'download_button_text', array(
  'label' => __( 'Button Text', 'mytheme' ),
  'section' => 'download_button_settings',
  'type' => 'text',
  ) );

  // Add control for attachment upload
  $wp_customize->add_setting( 'download_button_attachment', array(
  'default' => '',
  'sanitize_callback' => 'absint',
  ) );

  $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'download_button_attachment', array(
  'label' => __( 'Upload Attachment', 'mytheme' ),
  'section' => 'download_button_settings',
  'mime_type' => 'application',
  )));

  $wp_customize->add_section('introduction_area_settings',array(
    'title'       => __('Introduction Area','mytheme'),
    'priority'=> 25,
  ));

  $wp_customize->add_setting('introduction',array(
    
  ));
}
add_action( 'customize_register', 'mytheme_customize_register' );