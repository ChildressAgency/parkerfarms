<?php get_header(); ?>
<main id="main">
  <div class="container">
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
      
      <?php if(is_archive()): ?>
        <div class="blog-summary">
          <h3><?php the_title(); ?></h3>
          <?php the_excerpt(); ?>
          <a href="<?php the_permalink(); ?>" class="read-more">Read More...</a>
        </div>
      <?php else: ?>
        <article>
          <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>
        </article>
      <?php endif; ?>

    <?php endwhile; endif; ?>
  </div>
</main>
<?php get_footer(); ?>