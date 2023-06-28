<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package deon
 */

?>

    <!-- Footer -->
    <footer>
        <section class="ft-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="ft-logo-box">
                            <?php $footer_logo = get_theme_mod('footer_logo'); ?>
							<img src="<?php echo esc_url($footer_logo); ?>" class="ft-logo">
							<?php $footer_description = get_theme_mod('footer_description'); ?>

                            <p class="ft-logo-desc">
                                <?php echo esc_html($footer_description); ?>
                            </p>
							<?php $facebook_url = get_theme_mod('facebook_url'); ?>
<?php $twitter_url = get_theme_mod('twitter_url'); ?>
<?php $linkedin_url = get_theme_mod('linkedin_url'); ?>
<?php $instagram_url = get_theme_mod('instagram_url'); ?>
                            <ul class="ft-social-links">
                                <li><a href="<?php echo esc_url($instagram_url); ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="<?php echo esc_url($twitter_url); ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="<?php echo esc_url($facebook_url); ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="<?php echo esc_url($linkedin_url); ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="ft-link-box">
                            <h4 class="ft-box-head">
                                Quick Links
                            </h4>
                            <div class="row">
                                <div class="col-sm-6">
                                  <ul class="ft-list">
      <?php
        $menu_items = wp_get_nav_menu_items('quick-menu'); // Replace 'footer-menu' with the location of your footer menu
        $menu_count = count($menu_items);
        
        // Loop through the first three menu items
        for ($i = 0; $i < min(4, $menu_count); $i++) {
          echo '<li><a href="' . $menu_items[$i]->url . '">' . $menu_items[$i]->title . '</a></li>';
        }
      ?>
    </ul>
                                </div>
                                <div class="col-sm-6">
                                    
									 <ul class="ft-list">
      <?php
        // Loop through the last three menu items
        for ($i = $menu_count - 4; $i < $menu_count; $i++) {
          echo '<li><a href="' . $menu_items[$i]->url . '">' . $menu_items[$i]->title . '</a></li>';
        }
      ?>
    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="ft-link-box">
                            <h4 class="ft-box-head">
                                Contact Us
                            </h4>
							<?php $phone_number_1 = get_theme_mod('phone_number_1'); ?>
<?php $phone_number_2 = get_theme_mod('phone_number_2'); ?>
<?php $address = get_theme_mod('address'); ?>
                            <ul class="contact-list">
                                <li><img class="ft-list-icon" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/blue-phone.png"> <?php echo esc_html($phone_number_1); ?></li>
                                <li><img class="ft-list-icon" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/blue-fax.png"> <?php echo esc_html($phone_number_2); ?></li>
                                <li><img class="ft-list-icon" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/check-mark.png"> <?php echo esc_html($address); ?></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class=" ft-box-last">
                            <h4 class="ft-box-head">
                                Join Our Newsletter
                            </h4>
                            <form>
                                <div class="mb-3">
                                    <input type="email" class="form-control email" id="exampleFormControlInput1"
                                        placeholder="Email">
                                    <button class="btn-submit" type="submit">Subscribe <span
                                            class="form-arrow">&#8594;</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row copyright-row">
                    <div class="col-md-6">
                        <div class="copyright-box">
							<?php $copyright_text = get_theme_mod('copyright_text'); ?>
                            <p class="copyright-text">
                                <?php echo esc_html($copyright_text); ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <divn class="policy-text-box">
                            <p class="policy-text">
                                Privacy Policy | Terms & Conditions
                            </p>
                        </divn>
                    </div>
                </div>
            </div>
        </section>

    </footer>
    <!-- End Footer -->
    
    <!-- Cursor -->
        <!--    This is the cursor   -->
        <div class="cursor"></div>



</div><!-- #page -->

<?php wp_footer(); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- OWL Carousel Script- -->
    <!-- counter script -->
    <script src="https://unpkg.com/vanilla-counter"></script>
<!-- AOS Scriipt -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
  </script>
<!-- End AOS Scriipt -->

<!-- Cursor Script -->

<!-- Plus JS Coding -->
<div id="trigger2" class="spacer s0"></div>
    
<!-- End Plus JS Coding -->


</body>
</html>
