<?php get_header();?>

  <div id="main">
    <div id="content">
      
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6">
              
              
            <?php the_title( '<h1>', '</h1>' ); ?>

            <div>
              <?php
                while ( have_posts() ) : the_post();
                  the_content();
                  $post_id = get_the_ID();
                  $product_buy_link = get_post_meta($post_id, 'product_buy_link', true);
                  if ($product_buy_link) {
                    $product_buy_title = get_post_meta($post_id, 'product_buy_title', true);
                    if (!$product_buy_title) {
                      $product_buy_title = 'Купить';
                    }

                    echo '<a href="' . $product_buy_link . '" class="btn btn-primary">' .
                      $product_buy_title . '</a>';
                  }
                endwhile;
              ?>
            </div>
              
              
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