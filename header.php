<!doctype html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <base href="/">
  <link rel="alternate" hreflang="x-default" href="<?php echo home_url(); ?>">
  <link rel="alternate" hreflang="en" href="<?php echo home_url(); ?>/en">
  <link rel="alternate" hreflang="ru" href="<?php echo home_url(); ?>/ru">
  <link rel="alternate" hreflang="ua" href="<?php echo home_url(); ?>/ua">
  <?php
  // ENQUEUE your css and js in inc/enqueues.php

    wp_head();
	?>
</head>
<body <?php echo body_class(); ?>>
  <!-- <div class="preloader"></div> -->
  
  <header id="header" class="header py-3" role="banner">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="header_content d-flex align-items-center justify-content-between">
            <div class="header_logo">
              <a href="<?php echo home_url() ?>" class="d-flex align-items-center">
                <img src="<?php bloginfo('template_url') ?>/img/logo.svg" alt="" class="mr-3">
                <span>Heeelp!</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <section id="content" role="main">