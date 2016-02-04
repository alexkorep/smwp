<?php
wp_register_script('jquery',
  'http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js',
  array(), '1.0', false);
wp_enqueue_script('jquery');

wp_register_script('bootstrap',
  'http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js',
  array(), '1.0', false);
wp_enqueue_script('bootstrap');

// Website image uploading
function themeslug_theme_customizer($wp_customize) {
  $wp_customize->add_section('themeslug_logo_section', array(
    'title' => __('Logo', 'themeslug'),
    'priority' => 30,
    'description' => 'Upload a logo to be displayed in the site header',
  ));

  $wp_customize->add_setting('themeslug_logo');

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'themeslug_logo', array(
    'label' => __('Logo', 'themeslug'),
    'section' => 'themeslug_logo_section',
    'settings' => 'themeslug_logo',
  )));
}
add_action('customize_register', 'themeslug_theme_customizer');

//////////////////////////////////////////////////////////
// Widgets

function home_widgets_init() {
  register_sidebar(array(
    'name' => 'Home left pane',
    'id' => 'home_left_1',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  ));

  register_sidebar(array(
    'name' => 'Home right pane',
    'id' => 'home_right_1',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  ));
}

add_action('widgets_init', 'home_widgets_init');

require get_template_directory() . '/inc/widget_textarea_button.php';

/////////////////////////////////////////////////////////////
// Menu
function register_my_menu() {
  register_nav_menu('topmost-menu', __('Topmost Menu'));
}
add_action('init', 'register_my_menu');

///////////////////////////////////////////////////////////////
// Catecory titles
add_filter('get_the_archive_title', function ($title) {
  if (is_category()) {
    $title = single_cat_title('', false);
  } elseif (is_tag()) {
    $title = single_tag_title('', false);
  } elseif (is_author()) {
    $title = '<span class="vcard">' . get_the_author() . '</span>';
  }
  return $title;
});

?>