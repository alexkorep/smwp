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
    <div class="p-y-lg section">
      <div class="background-image" style="background-image : url('<?php bloginfo('template_directory'); ?>/img/background.jpg')"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center text-inverse">
            <h1 class="display-2 m-y-md pi-draggable pi-item text-inverse"><?php bloginfo( 'name' ); ?></h1>
            <p class="lead pi-draggable pi-item text-inverse"><?php echo get_bloginfo( 'description', 'display' ); ?></p>
            <i class="center-block fa fa-5x fa-clock-o fa-fw m-y-md"></i>
          </div>
        </div>
      </div>
    </div>

    <div class="p-y-lg section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">