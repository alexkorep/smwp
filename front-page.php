<?php get_header();?>

  <div id="main">
    <div id="content">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6">
              <?php if (is_active_sidebar('home_left_1')): ?>
                  <?php dynamic_sidebar('home_left_1');?>
              <?php endif;?>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6">
              <?php if (is_active_sidebar('home_right_1')): ?>
                  <?php dynamic_sidebar('home_right_1');?>
              <?php endif;?>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php get_footer();?>