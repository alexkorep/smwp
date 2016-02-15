<?php

// Creating the widget
class widget_product_list_menu extends WP_Widget {

  function __construct() {
    parent::__construct(
      // Base ID of your widget
      'widget_product_list_menu',

      // Widget name will appear in UI
      __('Product List Menu Widget', 'smwp_widget_domain'),

      // Widget description
      array('description' => __('Product List Menu Widget', 'smwp_widget_domain'))
    );
  }

  // Creating widget front-end
  // This is where the action happens
  public function widget($args, $instance) {
    $title = apply_filters('widget_title', $instance['title']);
    $parent = $instance['parent'];
    // before and after widget arguments are defined by themes
    echo $args['before_widget'];
    echo '<div class="card"><div class="card-block">';

    if (!empty($title)) {
      echo '<h3 class="card-title">';
      echo $title;
      echo '</h3>';
    }

    // This is where you run the code and display the output
    $string = '';
    $childpages = wp_list_pages('sort_column=menu_order&title_li=&child_of=' .
      $parent . '&echo=0' );
    if ( $childpages ) {
      $childpages = '<ul>' . $childpages . '</ul>';
    }

    echo '<p class="card-text">' . $childpages . '</p>';
    echo '</div></div>';
    echo $args['after_widget'];
  }

  // Widget Backend
  public function form($instance) {
    if (isset($instance['title'])) {
      $title = $instance['title'];
    } else {
      $title = __('New title', 'wpb_widget_domain');
    }

    $parent = (isset($instance['parent']) ? $instance['parent'] : '');

    // Widget admin form
    ?>
  <p>
    <label for="<?php echo $this->get_field_id('title');?>"><?php _e('Title:');?></label>
    <input class="widefat" id="<?php echo $this->get_field_id('title');?>"
      name="<?php echo $this->get_field_name('title');?>"
      type="text"
      value="<?php echo esc_attr($title);?>" />
  </p>

    <?php

    //$dropdown_args = apply_filters( 'page_attributes_dropdown_pages_args',
    //  $dropdown_args, $parent );
    //$pages = wp_dropdown_pages( $dropdown_args );
    $pages = wp_dropdown_pages(array(
      'selected' => $parent,
      'echo' => 0,
      'name' => $this->get_field_name('parent')
    ));
    if (!empty($pages)) {

    ?>
    <p>
      <label for="<?php echo $this->get_field_id('parent');?>"><?php _e('Parent') ?></label>
      <?php echo $pages; ?>
    <p>
    <?php
    }
  }

  // Updating widget replacing old instances with new
  public function update($new_instance, $old_instance) {
    $instance = array();
    $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
    $instance['parent'] = (!empty($new_instance['parent'])) ? strip_tags($new_instance['parent']) : '';
    return $instance;
  }

} // Class wpb_widget ends here

// Register and load the widget
function widget_product_list_menu_load_widget() {
  register_widget('widget_product_list_menu');
}
add_action('widgets_init', 'widget_product_list_menu_load_widget');

?>