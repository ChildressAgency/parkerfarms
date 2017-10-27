<?php get_header(); ?>
  <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <main id="main">
      <div class="container">
        <article>
          <?php the_content(); ?>
        </article>
      </div>
    </main>
  <?php endwhile; endif; ?>
  <?php if(have_rows('timeline')): ?>
    <section id="timeline">
      <hr class="timeline-bar" />
      <div class="container">
        <div class="timeline-wrapper2">
          <?php $i=1; while(have_rows('timeline')): the_row(); ?>
            <div class="row">
              <div class="col-sm-5 col-md-6<?php if($i%2==0){ echo ' col-sm-offset-2 col-md-offset-0 col-sm-push-5 col-md-push-6'; } ?>">
                <img src="<?php the_sub_field('timeline_image'); ?>" class="img-responsive center-block" alt="" />
              </div>
              <div class="col-sm-5 col-md-6<?php if($i%2==0){ echo ' col-sm-pull-7 col-md-pull-6'; }else{ echo ' col-sm-offset-2 col-md-offset-0;'; } ?>">
                <div class="timeline-content">
                  <h2><?php the_sub_field('timeline_date'); ?></h2>
                  <?php the_sub_field('timeline_content'); ?>
                </div>
              </div>
            </div>
          <?php $i++; endwhile; ?>
        </div>
      </div>
    </section>
  <?php endif; ?>
<?php get_footer(); ?>