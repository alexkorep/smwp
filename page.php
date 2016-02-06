<?php get_header();?>

  <div id="main">
    <div id="content">
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
  </div>

<?php get_footer();?>