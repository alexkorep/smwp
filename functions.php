<?php
  wp_register_script( 'jquery',
    'http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js',
    array(), '1.0', false );
  wp_enqueue_script( 'jquery' );

  wp_register_script( 'bootstrap',
    'http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js',
    array(), '1.0', false );
  wp_enqueue_script( 'bootstrap' );
?>