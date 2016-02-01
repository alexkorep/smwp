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
    <div class="section">
      <div class="background-image" style="background-image : url('<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>')"></div>
      <div class="container">
          <div class="row">
              <div class="col-lg-12 p-y-lg text-center" style="background-color: rgba(245, 245, 245, 0.8);">
                  <h1 class="display-2 m-y-md">Smilenglish</h1>
                  <h1 class="display-4 m-y-md">британский английский для детей</h1>
              </div>
          </div>
      </div>

      <!--div class="background-image" style="background-image : url('<?php bloginfo('template_directory'); ?>/img/background.jpg')"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 p-y-sm text-center smwp-toprow">
            <?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>
              <a href='<?php echo esc_url( home_url( '/' ) ); ?>'
                title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'
                rel='home'>
                <img src="<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>"
                  alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"
                  class="center-block img-fluid m-t-md" />
              </a>
            <?php endif; ?>
            <h1 class="display-5 m-y-md"><?php echo get_bloginfo( 'description', 'display' ); ?></h1>
          </div>
        </div>
      </div-->
    </div>

    <div class="p-y-lg section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">