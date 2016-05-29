<?php get_header();?>

  <div id="main">
    <div id="content">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6">


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
          <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6">
              <?php if (is_active_sidebar('home_right_1')): ?>
                  <?php dynamic_sidebar('home_right_1');?>
              <?php endif;?>
          </div>
        </div>
      </div>      
    </div>
  </div>
<?php get_footer();?>