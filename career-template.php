<?php /* Template Name: Career Page */


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
                            <?php echo get_field('title'); ?>
                        </h1>
                    </div>
                    <div class="career-img-box">
                        <img class="careerbanner-img" src="<?php echo get_field('image'); ?>" data-aos="fade-up"
                            data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                    </div>
                    <img class="career-left-design" src="<?php echo get_field('top_left_shape'); ?>">
                    <img class="career-right-design" src="<?php echo get_field('top_right_shape'); ?>">
                    <img class="career-bottom-left-design" src="<?php echo get_field('bottom_left_shape'); ?>">
                    <img class="career-bottom-right-design" src="<?php echo get_field('top_right_shape'); ?>">
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Section -->

    <!-- Career Second Sec -->
    <section class="career-second-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="career-second-text-box">
                        <h2 class="career-textbox-title">
                            <?php echo get_field('heading'); ?>
                        </h2>
                        <p class="career-textbox-desc">
                             <?php echo get_field('content'); ?>
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="career-img-box">
                        <img class="career-img" src=" <?php echo get_field('image2'); ?>" data-aos="fade-left" data-aos-offset="300"
                            data-aos-easing="ease-in-sine" data-aos-duration="1500">
                    </div>
                </div>
            </div>
        </div>
        <img class="career-left-design2" src="<?php echo get_field('left_shape'); ?>">
    </section>
    <!-- End Career Second Sec -->


    <!-- Position Section -->
    <section class="position-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php echo do_shortcode('[jobs]');?>
                </div>
            </div>
        </div>
        <img class="position-left-plant" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/design-2.png">
        <img class="position-right-plant" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/right-plant.png">
        <img class="position-right-design" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/career-right-design2.png">
        <img class="position-cube" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/cube.png">
        <img class="position-right-plant2" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/right-plant.png">
        <img class="position-left-spiral" src="/https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/design-1.png">
        <img class="position-left-plant2" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/design-2.png">
    </section>
    <!-- End Position Section -->

    <!-- Perk Image Section -->
    <section class="perk-img-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="perk-img-box">
                        <div class="row perk-title-row">
                            <div class="col-md-6">
                                <h3 class="perk-title">
                                    <?php echo get_field('title_perk'); ?>
                                </h3>
                            </div>
                            <div class="col-md-6">
                                <h3 class="list-title">
                                    <a href="<?php echo get_field('title_perk'); ?>">View Full List</a>
                                </h3>
                            </div>
                        </div>
                        <img class="perk-img" src="<?php echo get_field('perks_image'); ?>">
                        <a class="perk-btn" href="<?php echo get_field('view_full_list_button'); ?>">View All Perks + Benefits</a>
                    </div>
                </div>
            </div>
        </div>
        <img class="image-left-design" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/career-left-design2.png">
        <img class="image-right-spiral" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/design-1.png">
        <img class="image-right-plant" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/right-plant.png">
        <img class="image-left-plant" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/design-2.png">
    </section>
    <!-- End Image Section -->

    <!-- Features iHealth -->
    <section class="feature-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="feature-desc-box">
                        <h1 class="feature-title">
                           <?php echo get_field('title_section4'); ?>
                        </h1>
                        <p class="feature-desc">
                            <?php echo get_field('content_section4'); ?>
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="feature-img-box">
                        <img class="feature-img" src="<?php echo get_field('image_section4'); ?>" data-aos="fade-left"
                            data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1100">
                    </div>
                </div>
            </div>
            <div class="row align-items-center feature-row-2">
                <div class="col-md-6">
                    <div class="feature-img-box">
                        <img class="feature-img" src="<?php echo get_field('image_section5'); ?>" data-aos="fade-right"
                            data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1100">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="feature-desc-box">
                        <h1 class="feature-title">
                            <?php echo get_field('title_section5'); ?>
                        </h1>
                        <p class="feature-desc">
                            <?php echo get_field('content_section5'); ?>
                        </p>
                    </div>
                </div>
            </div>*
            <div class="row align-items-center feature-row-3">
                <div class="col-md-6">
                    <div class="feature-desc-box">
                        <h1 class="feature-title">
                            <?php echo get_field('title_section6'); ?>
                        </h1>
                        <p class="feature-desc">
                            <?php echo get_field('content_section6'); ?>
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="feature-img-box">
                        <img class="feature-img" src="<?php echo get_field('image_section6'); ?>" data-aos="fade-left"
                            data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1100">
                    </div>
                </div>
            </div>
            <div class="row align-items-center feature-row-4">
                <div class="col-md-6">
                    <div class="feature-img-box">
                        <img class="feature-img" src="<?php echo get_field('image_section7'); ?>" data-aos="fade-right"
                            data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1100">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="feature-desc-box">
                        <h1 class="feature-title">
                            <?php echo get_field('title_section7'); ?>
                        </h1>
                        <p class="feature-desc">
                            <?php echo get_field('content_section7'); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <img class="feature-right-design" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/career-right-design2.png">
        <img class="feature-cube" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/cube.png">
        <img class="feature-right-plant" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/right-plant.png">
    </section>
    <!-- End Features iHealth -->

    <!-- Career Video Section -->
    <section class="career-video-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="career-video-title" data-aos="fade-up"
                    data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1100">
                        <?php echo get_field('title_section8'); ?>
                    </h1>
                    <p class="career-video-desc">
                        <?php echo get_field('content_section8'); ?>
                    </p>
                    <div class="career-video-box">
                        <video src="<?php echo get_field('add_video'); ?>" controls></video>
                    </div>
                </div>
            </div>
        </div>
        <img class="career-video-right-spiral" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/design-1.png">
        <img class="career-video-left-plant" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/design-2.png">
        <img class="career-video-right-plant" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/right-plant.png">
        <img class="career-video-left-spiral" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/design-1.png">
        <img class="career-video-right-plant2" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/plant-2.png">
    </section>
    <!-- End Career Video Section -->

  <?php
get_footer();