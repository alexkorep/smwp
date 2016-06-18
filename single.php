<?php
get_header(); ?>

  <div id="main">
    <div id="content">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6">


            <?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );

				endwhile;
			?>

<!-- Put this script tag to the <head> of your page -->
<script type="text/javascript" src="//vk.com/js/api/openapi.js?122"></script>

<script type="text/javascript">
  VK.init({apiId: 2658931, onlyWidgets: true});
</script>

<!-- Put this div tag to the place, where the Comments block will be -->
<div id="vk_comments"></div>
<script type="text/javascript">
VK.Widgets.Comments("vk_comments", {limit: 10, width: "665", attach: "*", autoPublish: 0});
</script>

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

<?php
  get_footer();