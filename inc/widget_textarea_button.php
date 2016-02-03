<?php
// Creating the widget
class wpb_widget extends WP_Widget {

  function __construct() {
    parent::__construct(
      // Base ID of your widget
      'wpb_widget',

      // Widget name will appear in UI
      __('WPBeginner Widget', 'wpb_widget_domain'),

      // Widget description
      array('description' => __('Sample widget based on WPBeginner Tutorial', 'wpb_widget_domain'))
    );
  }

  // Creating widget front-end
  // This is where the action happens
  public function widget($args, $instance) {
    $title = apply_filters('widget_title', $instance['title']);
    $content = $instance['content'];
    $button = $instance['button'];
    $link = $instance['link'];
    // before and after widget arguments are defined by themes
    echo $args['before_widget'];
    if (!empty($title)) {
      echo $args['before_title'] . $title . $args['after_title'];
    }

    // This is where you run the code and display the output
    echo '<div>' . $content . '</div>';
    echo '<p><a href="' . $link . '" class="btn btn-secondary">' . $button . '</a></p>';
    echo $args['after_widget'];
  }

  // Widget Backend
  public function form($instance) {
    if (isset($instance['title'])) {
      $title = $instance['title'];
    } else {
      $title = __('New title', 'wpb_widget_domain');
    }

    $content = (isset($instance['content']) ? $instance['content'] : '');
    $button = (isset($instance['button']) ? $instance['button'] : 'Go');
    $link = (isset($instance['link']) ? $instance['link'] : 'http://');

    // Widget admin form
    ?>
  <p>
    <label for="<?php echo $this->get_field_id('title');?>"><?php _e('Title:');?></label>
    <input class="widefat" id="<?php echo $this->get_field_id('title');?>"
      name="<?php echo $this->get_field_name('title');?>"
      type="text"
      value="<?php echo esc_attr($title);?>" />
  </p>
  <p>
    <label for="<?php echo $this->get_field_id('content');?>"><?php _e('Content:');?></label>
    <textarea id="<?php echo $this->get_field_id('content');?>"
      name="<?php echo $this->get_field_name('content');?>"><?php
echo esc_textarea($content);
    ?></textarea>
  </p>
  <p>
    <label for="<?php echo $this->get_field_id('button');?>"><?php _e('Button text:');?></label>
    <input class="widefat" id="<?php echo $this->get_field_id('button');?>"
      name="<?php echo $this->get_field_name('button');?>"
      type="text"
      value="<?php echo esc_attr($button);?>" />
  </p>
  <p>
    <label for="<?php echo $this->get_field_id('link');?>"><?php _e('Button link:');?></label>
    <input class="widefat" id="<?php echo $this->get_field_id('link');?>"
      name="<?php echo $this->get_field_name('link');?>"
      type="text"
      value="<?php echo esc_attr($link);?>" />
  </p>
  <?php
}

  // Updating widget replacing old instances with new
  public function update($new_instance, $old_instance) {
    $instance = array();
    $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
    $instance['content'] = (!empty($new_instance['content'])) ? strip_tags($new_instance['content']) : '';
    $instance['button'] = (!empty($new_instance['button'])) ? strip_tags($new_instance['button']) : '';
    $instance['link'] = (!empty($new_instance['link'])) ? strip_tags($new_instance['link']) : '';
    return $instance;
  }
} // Class wpb_widget ends here

// Register and load the widget
function wpb_load_widget() {
  register_widget('wpb_widget');
}
add_action('widgets_init', 'wpb_load_widget');

?>