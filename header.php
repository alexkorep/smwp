<html>

  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Ubuntu&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php bloginfo('template_directory'); ?>/vendor/bootstrap/bootstrap.css" rel="stylesheet" type="text/css" />

    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?> style="font-family: 'Ubuntu', sans-serif;">

    <!-- Menu -->
    <div class="row">
      <?php wp_nav_menu( array(
        'theme_location' => 'topmost-menu',
        'container'       => 'div',
        'container_class' => 'col-md-12',
        'menu_class'      => 'menu nav nav-pills',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '<div class="nav-item">',
        'after'           => '</div>',
        'link_before'     => '<span class="nav-link">',
        'link_after'      => '</span>',
        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'depth'           => 0
      ) ); ?>
    </div>

    <!--div class="row">
      <div class="col-md-12">
        <ul class="nav nav-pills">
          <li class="nav-item">
            <a href="#" class="active nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Profile</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Messages</a>
          </li>
        </ul>
      </div>
    </div-->



    <div class="section">
      <div class="background-image" style="background-image : url('<?php bloginfo('template_directory'); ?>/img/background.jpg')"></div>

      <div class="container">
        <div class="row smwp-toprow">
          <div class="col-lg-2 col-sm-3">
            <?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>
              <div class='site-logo'>
                <a href='<?php echo esc_url( home_url( '/' ) ); ?>'
                  title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'
                  rel='home'>
                  <img src="<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>"
                    alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"
                    class="center-block img-fluid m-t-md" />
                </a>
              </div>
            <?php endif; ?>
          </div>
          <div class="col-lg-10 col-sm-9">
            <h1 class="display-4 m-t-md pi-item"><?php bloginfo( 'name' ); ?></h1>
            <p class="lead pi-item"><?php echo get_bloginfo( 'description', 'display' ); ?></p>
          </div>
        </div>
      </div>

    </div>
    <div class="p-y-lg section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">