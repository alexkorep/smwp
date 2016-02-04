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
            if ( is_single() ) :
              the_title( '<h1 class="entry-title">', '</h1>' );
            else :
              the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
            endif;
      ?>
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