<?php get_header(); ?>
  <section id="grow-locations">
    <div class="container narrow">
      <article>
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; endif; ?>
      </article>
    </div>
  </section>
  <section id="farmToTable" class="green-divit" style="background-image:url(<?php the_field('farm_to_table_section_background_image'); ?>); <?php the_field('farm_to_table_section_background_image_css'); ?>">
    <div class="container narrow">
      <div class="row">
        <div class="col-sm-6">
          <?php the_field('farm_to_table_section_content'); ?>
        </div>
      </div>
    </div>
  </section>
  <?php
    $growers = get_field('growers');
    if($growers): ?>
      <section id="farmsSlider" class="white-lump">
        <div class="container">
          <div class="row">
            <div class="col-sm-4">
              <ul class="slider-nav" role="tablist">
                <?php foreach($growers as $grower): 
                  $grower_id = sanitize_title($grower['farm_name']); ?>
                  <li role="presentation" class="active">
                    <a href="#<?php echo $grower_id; ?>" aria-controls="<?php echo $grower_id; ?>" role="tab" data-toggle="tab"><?php echo $grower['farm_name']; ?> - <?php echo $grower['farm_location']; ?></a>
                  </li>
                <?php endforeach; reset($growers); ?>
              </ul>
            </div>
            <div class="col-sm-8">
              <div class="tab-content">
                <?php $c=0; foreach($growers as $grower): 
                  $grower_id = sanitize_title($grower['farm_name']); ?>
                  <div role="tabpanel" class="tab-pane fade<?php if($c==0){ echo ' in active'; } ?>" id="<?php echo $grower_id; ?>">
                    <?php
                      $farm_image = get_stylesheet_directory_uri() . '/images/farm-through-fence.jpg';
                      if($grower['farm_image']){ $farm_image = $grower['farm_image']; } ?>
                    <img src="<?php echo $farm_image; ?>" class="img-responsive center-block" alt="" />
                    <div class="farm-info">
                      <h1><?php echo $grower['farm_name']; ?></h1>
                      <h2 class="farm-location"><?php echo $grower['farm_location']; ?></h2>
                      <?php echo $grower['farm_description']; ?>
                    </div>
                  </div>
                <?php $c++; endforeach; ?>
              </div>
            </div>
          </div>
        </div>
      </section>
  <?php endif; ?>
<?php get_footer(); ?>