<?php get_header();?>

  <div id="main">
    <div id="content">
      <?php
        if (have_posts()):
      ?>

      <header class="page-header">
        <?php
          the_archive_title( '<h1 class="page-title">', '</h1>' );
          the_archive_description( '<div class="taxonomy-description">', '</div>' );
        ?>
      </header><!-- .page-header -->


      <?php
          while (have_posts()): the_post();
      ?>

      <h2><?php the_title();?></h2>

      <div><?php the_content(__('(дальше...)'));?></div>
      <hr>
      <?php
          endwhile;
        // If no content, include the "No posts found" template.
        else :
          get_template_part( 'content', 'none' );

        endif;
      ?>

    </div>
  </div>
<?php get_footer();?>