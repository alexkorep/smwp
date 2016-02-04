<?php get_header();?>

  <div id="main">
    <div id="content">
      <?php
        if (have_posts()): while (have_posts()): the_post();
      ?>

      <h1><?php the_title();?></h1>

      <div><?php the_content(__('(more...)'));?></div>
      <hr>
      <?php
        endwhile;else:
      ?>
        <p><?php _e('Sorry, no posts matched your criteria.');?></p>
      <?php endif;?>
    </div>
  </div>
<?php get_footer();?>