<?php
  wp_register_script( 'jquery',
    'http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js',
    array(), '1.0', false );
  wp_enqueue_script( 'jquery' );

  wp_register_script( 'bootstrap',
    'http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js',
    array(), '1.0', false );
  wp_enqueue_script( 'bootstrap' );

  // Website image uploading
  function themeslug_theme_customizer( $wp_customize ) {
    $wp_customize->add_section( 'themeslug_logo_section' , array(
        'title'       => __( 'Logo', 'themeslug' ),
        'priority'    => 30,
        'description' => 'Upload a logo to be displayed in the site header',
    ));

    $wp_customize->add_setting( 'themeslug_logo' );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_logo', array(
      'label'    => __( 'Logo', 'themeslug' ),
      'section'  => 'themeslug_logo_section',
      'settings' => 'themeslug_logo',
    )));
  }
  add_action( 'customize_register', 'themeslug_theme_customizer' );

?>