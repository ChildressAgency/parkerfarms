<?php get_header(); ?>
  <section id="hp-growLocations">
    <div class="container">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/growing-locations.png" class="img-responsive center-block" alt="" />
      <article class="text-center">
        <h1>Growing Locations</h1>
        <?php the_field('growing_locations_section_content'); ?>
        <div class="btn-pair">
          <a href="<?php echo home_url('growers'); ?>" class="btn-main">Our Growers</a>
          <a href="<?php echo home_url('contact'); ?>" class="btn-main">Become A Grower</a>
        </div>
      </article>
    </div>
  </section>
  <section id="hp-sustainability" class="green-divit" style="background-image:url(<?php the_field('sustainability_section_background_image'); ?>); <?php the_field('sustainability_section_background_image_css'); ?>">
    <div class="caption">
      <div class="container">
        <h1>Sustainability</h1>
        <div class="row">
          <div class="col-sm-4">
            <a href="<?php echo home_url('sustainability'); ?>" id="methods" class="icon-link">Methods</a>
          </div>
          <div class="col-sm-4">
            <a href="<?php echo home_url('sustainability'); ?>" id="quality" class="icon-link">Quality</a>
          </div>
          <div class="col-sm-4">
            <a href="<?php echo home_url('sustainability'); ?>" id="temperature" class="icon-link">Temperature</a>
          </div>
        </div>
        <a href="<?php echo home_url('sustainability'); ?>" class="btn-main">Learn More</a>
      </div>
    </div>
  </section>
  <?php if(get_field('fleet_section_content')): ?>
    <section id="fleet" class="white-lump">
      <div class="container">
        <?php the_field('fleet_section_content'); ?>
        <a href="<?php echo home_url('contact'); ?>" class="btn-main">Contact Us</a>
      </div>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/parker-farms-truck.jpg" class="img-responsive center-block" alt="Parker Farms Truck" />
    </section>
  <?php endif; ?>
<?php get_footer(); ?>