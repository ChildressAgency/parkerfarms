<?php get_header(); ?>
  <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <?php if(!empty(get_the_content())): ?>
    <main id="main">
      <div class="container">
        <article>
          <?php the_content(); ?>
        </article>
      </div>
    </main>
  <?php endif; ?>
  <?php endwhile; endif; ?>
  <?php if(have_rows('products')): ?>
    <section id="products" class="green-lump">
      <div class="container">
        <div class="row">
          <?php $i=0; while(have_rows('products')): the_row(); ?>
            <?php if($i%3==0){ echo '<div class="clearfix visible-sm-block"></div>'; } ?>
            <?php if($i%4==0){ echo '<div class="clearfix hidden-sm"></div>'; } ?>
            <div class="col-sm-4 col-md-3">
              <div class="product-card">
                <div class="product-img-overlay">
                  <img src="<?php the_sub_field('product_image'); ?>" class="" alt="<?php the_sub_field('product_name'); ?>" />
                  <div class="product-overlay">
                    <h3>Harvest Dates & Locations</h3>
                    <div class="location1">
                      <h4><?php the_sub_field('location_1_name'); ?></h4>
                      <p><?php the_sub_field('location_1_dates'); ?></p>
                    </div>
                    <div class="location2">
                      <h4><?php the_sub_field('location_2_name'); ?></h4>
                      <p><?php the_sub_field('location_2_dates'); ?></p>
                    </div>
                    <div class="location3">
                      <h4><?php the_sub_field('location_3_name'); ?></h4>
                      <p><?php the_sub_field('location_3_dates'); ?></p>
                    </div>
                  </div>
                </div>
                <div class="product-title">
                  <h2><?php the_sub_field('product_name'); ?></h2>
                </div>
              </div>
            </div>
          <?php $i++; endwhile; ?>
        </div>
      </div>
    </section>
  <?php endif; ?>
  <section id="packaging">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <img src="<?php the_field('packaging_section_image'); ?>" class="img-responsive center-block" alt="" />
        </div>
        <div class="col-sm-6">
          <div class="packaging-content">
            <?php the_field('packaging_section_content'); ?>
            <a href="<?php echo home_url('contact'); ?>" class="btn-main">Contact Us</a>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php get_footer(); ?>