<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="">

  <meta http-equiv="cache-control" content="public">
  <meta http-equiv="cache-control" content="private">

  <title>Parker Farms</title>

  <?php wp_head(); ?>

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
  <div class="masthead">
    <div class="container">
      <?php 
        $facebook = get_field('facebook', 'option');
        $instagram = get_field('instagram', 'option'); 
      ?>
      <div class="social">
        <?php if($facebook): ?>
          <a href="<?php echo $facebook; ?>" class="fa-stack" target="_blank">
            <i class="fa fa-circle-thin fa-stack-2x"></i>
            <i class="fa fa-facebook-official fa-stack-1x"></i>
          </a>
        <?php endif; if($instagram): ?>
          <a href="<?php echo $instagram; ?>" class="fa-stack" target="_blank">
            <i class="fa fa-circle-thin fa-stack-2x"></i>
            <i class="fa fa-instagram fa-stack-1x"></i>
          </a>
        <?php endif; ?>
      </div>
      <a href="<?php echo home_url(); ?>" class="header-logo">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" class="img-responsive center-block" alt="Parker Farms Logo" />
      </a>
    </div>
  </div>
  <nav id="header-nav">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="expanded" aria-controls="navbar">
          <span class="sr-only">Toggle Navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li<?php if(is_page('about')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('about'); ?>">About</a></li>
          <li<?php if(is_page('growers')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('growers'); ?>">Growers</a></li>
          <li<?php if(is_page('products')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('products'); ?>">Products</a></li>
          <li<?php if(is_page('sustainability')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('sustainability'); ?>">Sustainability</a></li>
          <li<?php if(is_page('food-safety')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('food-safety'); ?>">Food Safety</a></li>
          <li<?php if(is_page('transportation')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('transportation'); ?>">Transportation</a></li>
          <li<?php if(is_page('contact')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('contact'); ?>">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <?php if(is_front_page()): ?>
    <div class="hero hp-hero" style="background-image:url(<?php the_field('hero_background_image'); ?>); <?php the_field('hero_background_image_css'); ?>">
      <div class="caption-section">
        <div class="container">
          <div class="row">
            <div class="col-xs-6 col-sm-3">
              <a href="<?php echo home_url('growers'); ?>" id="our-growers">Our Growers</a>
            </div>
            <div class="col-xs-6 col-sm-3">
              <a href="<?php echo home_url('products'); ?>" id="our-products">Our Products</a>
            </div>
            <div class="col-xs-6 col-sm-3">
              <a href="<?php echo home_url('transportation'); ?>" id="transportation">Transportation</a>
            </div>
            <div class="col-xs-6 col-sm-3">
              <a href="<?php echo home_url('food-safety'); ?>" id="food-safety">Food Safety</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php else: ?>
    <div class="hero" style="background-image:url(<?php the_field('hero_background_image'); ?>); <?php the_field('hero_background_image_css'); ?>">
      <div class="caption-section">
        <div class="container">
          <div class="caption">
            <h1><?php the_field('hero_title'); ?></h1>
            <?php the_field('hero_text'); ?>
          </div>
        </div>
      </div>
    </div>    
  <?php endif; ?>