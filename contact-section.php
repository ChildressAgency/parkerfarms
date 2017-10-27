  <section id="contact" class="green-lump">
    <div class="container narrow">
      <div class="row">
        <div class="col-sm-5">
          <div class="contact-info">
            <h2>Contact Us</h2>
            <p><?php the_field('address', 'option'); ?><br /><?php the_field('city_state_zip', 'option'); ?></p>
            <p><strong>OFFICE</strong> <?php the_field('phone', 'option'); ?></p>
            <p><strong>FAX</strong> <?php the_field('fax', 'option'); ?></p>
            <p><?php the_field('email', 'option'); ?></p>
            <?php
              $facebook = get_field('facebook', 'option');
              $instagram = get_field('instagram', 'option');
            ?>
            <div class="social">
              <?php if($facebook): ?>
                <a href="<?php echo $facebook; ?>" class="btn-main" target="_blank">
                  <i class="fa fa-facebook-official"></i>
                  Facebook
                </a>
              <?php endif; if($instagram): ?>
                <br />
                <a href="<?php echo $instagram; ?>" class="btn-main" target="_blank">
                  <i class="fa fa-instagram"></i>
                  Instagram
                </a>
              <?php endif; ?>
            </div>
          </div>
        </div>
        <div class="col-sm-7">
          <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d238788.40302526543!2d-77.12231623820936!3d38.15315728424931!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b72357c8861d91%3A0x5784fb19d6886a74!2s1647+Kings+Hwy%2C+Colonial+Beach%2C+VA+22443!5e0!3m2!1sen!2sus!4v1509131306650" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>