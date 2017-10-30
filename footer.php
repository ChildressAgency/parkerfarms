<?php 
  if(!is_page('contact')){
    get_template_part('contact', 'section');
  }
?>
  <footer>
    <div class="container-fluid container-sm-height">
      <div class="row row-sm-height">
        <div class="col-sm-3 col-sm-height">
          <a href="<?php echo home_url(); ?>" class="footer-logo">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" class="img-responsive center-block" alt="Parker Farms Logo" />
          </a>
        </div>
        <div class="col-sm-4 col-sm-height left-border">
          <ul class="footer-nav">
            <li><a href="<?php echo home_url('about'); ?>">About</a></li>
            <li><a href="<?php echo home_url('products'); ?>">Products</a></li>
            <li><a href="<?php echo home_url('transportation'); ?>">Transportation</a></li>
            <li><a href="<?php echo home_url('growers'); ?>">Growers</a></li>
            <li><a href="<?php echo home_url('sustainability'); ?>">Sustainability</a></li>
            <li><a href="<?php echo home_url('contact'); ?>">Contact</a></li>
          </ul>
        </div>
        <div class="col-sm-2 col-sm-height left-border">
          <?php 
            $facebook = get_field('facebook', 'option');
            $instagram = get_field('instagram', 'option');
          ?>
          <div class="social">
            <?php if($facebook): ?>
              <a href="<?php echo $facebook; ?>" target="_blank">
                <i class="fa fa-facebook-official"></i>
                Facebook
              </a>
            <?php endif; if($instagram): ?>
              <a href="<?php echo $instagram; ?>" target="_blank">
                <i class="fa fa-instagram"></i>
                Instagram
              </a>
            <?php endif; ?>
          </div>
        </div>
        <div class="col-sm-3 col-sm-height left-border">
          <p>Copyright &copy;<?php echo date('Y'); ?> Parker Farms<br /><?php the_field('address', 'option'); ?><br /><?php the_field('city_state_zip', 'option'); ?></p>
        </div>
      </div>
    </div>
      <p class="childress">website created by <a href="https://childressagency.com" target="_blank">The Childress Agency</a></p>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>