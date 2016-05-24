<html>

  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Ubuntu&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?> style="font-family: 'Ubuntu', sans-serif;">

<div class="container-full">
  <div class="row">
    <div class="col-lg-12">

      <div class="container">
        <div class="row">
          <div class="col-lg-2 col-sm-3">
            <?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>
              <div class='site-logo'>
                <a href='<?php echo esc_url( home_url( '/' ) ); ?>'
                  title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'
                  rel='home'>
                  <img src="<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>"
                    alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"
                    class="center-block img-fluid m-y-md img-circle img-responsive" />
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
  </div>
</div>
<!-- /container full -->

<nav class="navbar">
  <div class="container">
<?php 
  wp_nav_menu( array(
    'menu' => 'top_menu',
    'depth' => 2,
    'container' => false,
    'menu_class' => 'nav navbar-nav',
    //Process nav menu using our custom nav walker
    'walker' => new wp_bootstrap_navwalker())
  );
?>
  </div>
</nav>

<div class="container">
  <div class="row">