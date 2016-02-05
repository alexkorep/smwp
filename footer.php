          </div>
        </div>
      </div>
    </div>



    <div class="section">
      <div class="container">
        <div class="row smwp-toprow">
          <div class="col-md-4 col-sm-4 col-xs-12 col-lg-4 m-t-md">
              <?php if (is_active_sidebar('bottom_left')): ?>
                  <?php dynamic_sidebar('bottom_left');?>
              <?php endif;?>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12 col-lg-4 m-t-md">
              <?php if (is_active_sidebar('bottom_center')): ?>
                  <?php dynamic_sidebar('bottom_center');?>
              <?php endif;?>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12 col-lg-4 m-t-md">
              <?php if (is_active_sidebar('bottom_right')): ?>
                  <?php dynamic_sidebar('bottom_right');?>
              <?php endif;?>
          </div>
        </div>
      </div>
    </div>

    <?php wp_footer(); ?>
  </body>
</html>