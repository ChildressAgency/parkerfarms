<?php get_header(); ?>
  <main id="main">
    <div class="container">
      <article>
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; endif; ?>
      </article>
    </div>
  </main>
  <?php if(have_rows('team_contacts')): ?>
    <section id="teamContacts" class="green-lump">
      <div class="container narrow">
        <div class="row team-row">
          <?php $i=1; while(have_rows('team_contacts')): the_row(); ?>
            <div class="col-sm-6">
              <div class="team-member">
                <h3><?php the_sub_field('team_member_name'); ?></h3>
                <p class="member-title"><?php the_sub_field('team_member_title'); ?></p>
                <p><?php the_sub_field('team_member_phone'); ?><br /><?php the_sub_field('team_member_email'); ?></p>
              </div>
            </div>
            <?php if($i%2==0){ echo '</div><div class="row team-row">'; } ?>
          <?php $i++; endwhile; ?>
        </div>
      </div>
    </section>
  <?php endif; ?>
  <?php get_template_part('contact', 'section'); ?>
<?php get_footer(); ?>