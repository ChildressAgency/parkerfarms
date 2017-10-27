<?php get_header(); ?>
  <main id="main">
    <div class="container narrow">
      <article class="text-center">
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; endif; ?>
        <a href="<?php echo home_url('contact'); ?>" class="btn-main">Contact Us</a>
      </article>
    </div>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/parker-farms-truck.jpg" class="img-responsive center-block" alt="" />
  </main>
<?php get_footer(); ?>