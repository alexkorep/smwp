<?php

function smwp_list_child_pages() {
  global $post;

  if (is_page() && $post->post_parent) {
    $childpages = wp_list_pages('sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0');
  } else {
    $childpages = wp_list_pages('sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0');
  }

  if ($childpages) {
    $string = '<ul>' . $childpages . '</ul>';
  }

  return $string;
}

add_shortcode('smwp_childpages', 'smwp_list_child_pages');

?>