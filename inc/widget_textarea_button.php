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
      array('description' => __('Text widget with button', 'wpb_widget_domain'))
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

    $content = apply_filters( 'widget_text', $content, $instance, $this );
    $content = !empty( $instance['filter'] ) ? wpautop( $content ) : $content;


    echo $args['before_widget'];
    echo '<div class="card"><div class="card-block">';
    if (!empty($title)) {
      echo '<h3 class="card-title">';
      echo $title;
      echo '</h3>';
    }

    // This is where you run the code and display the output
    echo '<p class="card-text">' . $content . '</p>';

    if (!empty($link)) {
      echo '<a href="' . $link . '" class="btn btn-primary">' . $button . '</a>';
    }
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

    $content = (isset($instance['content']) ? $instance['content'] : '');
    $button = (isset($instance['button']) ? $instance['button'] : 'Go');
    $link = (isset($instance['link']) ? $instance['link'] : 'http://');
    $filter = (isset($instance['filter']) ? $instance['filter'] : false);

    // Widget admin form
    ?>
  <p>
    <label for="<?php echo $this->get_field_id('title');?>"><?php _e('Title:');?></label>
    <input class="widefat" id="<?php echo $this->get_field_id('title');?>"
      name="<?php echo $this->get_field_name('title');?>"
      type="text"
      value="<?php echo esc_attr($title);?>" />
  </p>

  <p><label for="<?php echo $this->get_field_id( 'content' ); ?>"><?php _e( 'Content:' ); ?></label>
  <textarea class="widefat" rows="16" cols="20" id="<?php echo $this->get_field_id('content'); ?>"
    name="<?php echo $this->get_field_name('content');
    ?>"><?php echo esc_textarea( $instance['content'] ); ?></textarea></p>


  <p><input id="<?php echo $this->get_field_id('filter'); ?>"
    name="<?php echo $this->get_field_name('filter'); ?>"
    type="checkbox"<?php checked( $filter ); ?> />&nbsp;<label
    for="<?php echo $this->get_field_id('filter'); ?>"><?php _e('Automatically add paragraphs'); ?></label></p>
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

    if ( current_user_can('unfiltered_html') )
      $instance['content'] =  $new_instance['content'];
    else
      $instance['content'] = wp_kses_post( stripslashes( $new_instance['content'] ) );

    $instance['filter'] = ! empty( $new_instance['filter'] );
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