<?php /* Template Name: cloud support services ihealth */


get_header();
?>

    <!-- Banner Section -->
    <section class="career-banner-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="career-title-box">
                        <h1 class="career-title" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine"
                            data-aos-duration="1100">
                            <?php echo get_field('main_heading'); ?>
                        </h1>
                    </div>
                    <div class="career-img-box">
                        <img class="careerbanner-img" src="<?php echo get_field('main_image'); ?>" data-aos="fade-up"
                            data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                    </div>
                    <img class="cloud-left-spiral" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/design-1.png">
                    <img class="cloud-left-design" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/pro-design-left.png">
                    <img class="cloud-right-design" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/pro-design-right.png">
                    <img class="cloud-right-spiral" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/design-1.png">
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Section -->

    <!-- Headings Section -->
    <section class="headings-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="heading-box">
                        <h1 class="career-title" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine"
                            data-aos-duration="1100">
                            <?php echo get_field('heading_first'); ?>e
                        </h1>
                        <p class="heading-box-desc">
                           <?php echo get_field('content'); ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="heading-box">
                        <h1 class="career-title cloud-title" data-aos="fade-up" data-aos-offset="300"
                            data-aos-easing="ease-in-sine" data-aos-duration="1100">
                             <?php echo get_field('heading_2'); ?>
                        </h1>
                        <p class="heading-box-desc">
                             <?php echo get_field('content_2'); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <img class="heading-left-spiral" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/design-1.png">
        <img class="heading-right-spiral" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/design-1.png">
    </section>
    <!-- End Headings Section -->

    <!-- Career Second Sec -->
    <section class="career-second-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="heading-third-sec-box">
                        <h1 class="heading-feature-title">
                            <?php echo get_field('first_heading'); ?>
                        </h1>
                        <p class="heading-feature-box-desc">
                            <?php echo get_field('first_content'); ?>
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="career-img-box">
                        <img class="heading-img" src="<?php echo get_field('first_image'); ?>" data-aos="fade-left"
                            data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                    </div>
                </div>
            </div>
            <div class="row heading-row-2 align-items-center">
                <div class="col-md-6">
                    <div class="career-img-box">
                        <img class="heading-img" src="<?php echo get_field('second_image'); ?>" data-aos="fade-right"
                            data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="heading-third-sec-box">
                        <h1 class="heading-feature-title">
                            <?php echo get_field('second_heading'); ?>
                        </h1>
                        <p class="heading-feature-box-desc">
                            <?php echo get_field('second_content'); ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row heading-row-3 align-items-center">
                <div class="col-md-6">
                    <div class="heading-third-sec-box">
                        <h1 class="heading-feature-title">
                            <?php echo get_field('third_heading'); ?>
                        </h1>
                        <p class="heading-feature-box-desc">
                           <?php echo get_field('third_content'); ?>
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="career-img-box">
                        <img class="heading-img" src="<?php echo get_field('third_image'); ?>" data-aos="fade-left"
                            data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                    </div>
                </div>
            </div>
            <div class="row heading-double-text-row align-items-center">
                <div class="col-md-4">
                    <div class="head-double-box">
                        <h3 class="heading-double">
                            <?php echo get_field('the_right_cloud_solutions'); ?>
                        </h3>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="head-double-box">
                        <p class="heading-double-desc">
                            <?php echo get_field('right_cloud_paragraph'); ?>
                        </p>
                    </div>
                </div>
                <img class="two-circle" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/two-circle.png">
            </div>
            <div class="row align-items-center heading-partner-row">
				<?php if( have_rows('partners') ):  while( have_rows('partners') ) : the_row(); ?>
                <div class="col-md-4">
                    <div class="heading-partner-img-box">
                        <img class="heading-partner-img" src="<?php echo get_sub_field('add_partner_image'); ?>">
                    </div>
                </div>
				<?php endwhile; endif; ?>
            </div>
            <div class="row heading-boxes-row">
				<?php if( have_rows('icon_box') ):  while( have_rows('icon_box') ) : the_row(); ?>
                <div class="col-md-4">
                    <div class="heading-circle-box">
                        <img class="heading-circle-img" src="<?php echo get_sub_field('box-image'); ?>">
                        <h3 class="heading-circle-title">
                            <?php echo get_sub_field('box-heading'); ?>
                        </h3>
                        <p class="heading-circle-desc">
                            <?php echo get_sub_field('box-content'); ?>
                        </p>
                    </div>
                </div>
				<?php endwhile; endif; ?>
            </div>
            <div class="row chart-img-row">
                <div class="col-md-12">
                    <div class="chart-img-box">
                        <img class="chart-img" src="<?php echo get_field('image_chart'); ?>">
                    </div>
                </div>
            </div>
        </div>
        <img class="career-left-design2" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/career-left-design2.png">
        <img class="heading-left-plant" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/design-2.png">
        <img class="heading-left-plant2" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/design-2.png">
        <img class="heading-left-plant3" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/design-2.png">
        <img class="heading-left-plant4" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/design-2.png">
        <img class="heading-right-plant2" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/right-plant.png">
        <img class="heading-right-plant3" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/right-plant.png">
        <img class="heading-right-plant4" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/right-plant.png">
        <img class="heading-right-plant" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/right-plant.png">
    </section>
    <!-- End Career Second Sec -->


    <!-- Partnership Section -->
    <section class="partnership-section">
        <div class="container">
            <div class="row align-items-center">
                <h1 class="career-title" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine"
                    data-aos-duration="1100">
                    <?php echo get_field('heading_strategic_partner'); ?>
                </h1>
                <p class="partnership-sec-desc">
                    <?php echo get_field('paragraph_strategic_partner'); ?>
                </p>
				<?php if( have_rows('strategic_partner') ):  while( have_rows('strategic_partner') ) : the_row(); ?>
                <div class="col-md-3">
                    <div class="partner-text-box">
                        <p class="partner-text"> <img src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/Vector-5.svg"> <?php echo get_sub_field('partnername'); ?></p>
                    </div>
                </div>
				<?php endwhile; endif; ?>
            </div>
            <div class="row align-items-center">
                <h3 class="partner-sub-title">
                    <span>What Sets </span> Us Apart?
                </h3>
				<?php if( have_rows('set_us_part') ):  while( have_rows('set_us_part') ) : the_row(); ?>
                <div class="col-md-3">
                    <div class="apart-text-box">
                        <p><img class="blue-tick" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/blue-tick.svg"><?php echo get_sub_field('name_set_us_part'); ?></p>
                    </div>
                </div>
				<?php endwhile; endif; ?>
            </div>
          
            <div class="row grow-row align-items-center">
                <div class="col-md-6">
                    <div class="grow-text-box">
                        <h3 class="grow-title">
                            <?php echo get_field('heading_section7'); ?>
                        </h3>
                        <p class="grow-desc">
                           <?php echo get_field('paragraph_section7'); ?>
                        </p>
                        <hr class="grow-line">
                        <h3 class="adver-text"><?php echo get_field('sub_text'); ?></h3>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-textbox">
                                <h4 class="contact-text">
                                    Contact us
                                </h4>
                                <h4 class="contact-subtext">
                                    <?php echo get_field('phone'); ?> 
                                </h4>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-textbox">
                                <h4 class="contact-text">
                                    or Email us at
                                </h4>
                                <h4 class="contact-subtext">
                                    <?php echo get_field('email'); ?>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="grow-img-box">
                        <img class="grow-img" src="<?php echo get_field('image_section7'); ?>" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine"
                        data-aos-duration="1100">
                    </div>
                </div>
            </div>
    </section>
    <!-- End Partnership Section -->


         <?php
get_footer();