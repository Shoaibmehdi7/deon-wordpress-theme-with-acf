<?php /* Template Name: Military Veteran Commitment */


get_header();
?>
<!-- Banner Section -->
    <section class="military-banner-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="military-title-box">
                        <h1 class="military-title" data-aos="fade-up" data-aos-offset="300"
                            data-aos-easing="ease-in-sine" data-aos-duration="1100">
                            <?php echo get_field('heading'); ?>
                        </h1>
                        <p class="heading-box-desc zero-desc"> 
                          iHealth Innovative Solutions (iHealth) is a professional services Health Information Technology organization committed to assisting our clients in delivering innovative and visionary technology solutions to help transform patient care, health information technology and health intelligence. This is supported by our ability to execute and provide assistance and guidance on the use of technology-supported business process reengineering; investment analysis; performance measurements; strategic application development of information systems and infrastructure resources; and policies to provide improved management of information resources and technology.
                        </p>
                    </div>
                    <div class="military-img-box">
                        <img class="military-banner-img" src="<?php echo get_field('image'); ?>">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Section -->

    <!-- Military Second Section -->
    <section class="military-sec-1">
        <div class="container">
            <div class="row military-first-row">
                <div class="col-md-6">
                    <div class="military-img-box">
                        <img class="military-img" src="<?php echo get_field('image_section2'); ?>" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1100">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="military-text-box">
                        <h1 class="military-box-title" data-aos="fade-up" data-aos-offset="300"
                            data-aos-easing="ease-in-sine" data-aos-duration="1100">
                            <?php echo get_field('heading_section2'); ?>
                        </h1>
                        <p class="military-box-desc"><?php echo get_field('paragraph_section2'); ?></p>
                    </div>
                    <img class="spiral-design" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/design-1.png">
                </div>
            </div>
            <div class="row military-second-row">
                <div class="col-md-6">
                    <div class="military-text-box">
                        <h1 class="military-box-title" data-aos="fade-up" data-aos-offset="300"
                            data-aos-easing="ease-in-sine" data-aos-duration="1100">
                            <?php echo get_field('heading_2'); ?>
                        </h1>
                        <p class="military-box-desc"><?php echo get_field('paragraph_2'); ?></p>
                    </div>
                    <img class="flower-design" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/design-2.png">
                </div>
                <div class="col-md-6">
                    <div class="military-img-box">
                        <img class="military-img" src="<?php echo get_field('image_2'); ?>" data-aos="fade-left"
                            data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1100">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Military Second Section -->


    <!-- Growth Section -->
    <section class="growth-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="growth-title-box">
                        <h1 class="growth-title" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine"
                            data-aos-duration="1100">
                            <?php echo get_field('heading_section3'); ?>
                        </h1>
                        <p class="growth-desc">
                            <?php echo get_field('paragraph_section3'); ?>
                        </p>
                        <h4 class="growth-subhead">
                            <?php echo get_field('sub_text'); ?>
                        </h4>
                    </div>
                </div>
				<?php if( have_rows('box') ):  while( have_rows('box') ) : the_row(); ?>
                <div class="col-md-4">
                    <div class="growth-box">
                        <img class="growth-img" src="<?php echo get_sub_field('box_icon'); ?>">
                        <h1 class="growth-box-title">
                            <?php echo get_sub_field('box_title'); ?>
                        </h1>
                        <p class="growth-box-desc">
                            <?php echo get_sub_field('box_content'); ?>
                        </p>
                        <a class="growth-btn"><?php echo get_sub_field('type'); ?></a>
                    </div>
                </div>
				<?php endwhile; endif; ?>
            </div>
        </div>
    </section>
    <!-- End Growth Section -->


    <!-- Technology Section -->
    <section class="technology-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="technology-title-box">
                        <h1 class="technology-title" data-aos="fade-up" data-aos-offset="300"
                            data-aos-easing="ease-in-sine" data-aos-duration="1100">
                             <?php echo get_field('heading_section4'); ?>
                        </h1>
                        <a class="veteran-btn" href="<?php echo get_field('button_url'); ?>"> <?php echo get_field('buttontext'); ?></a>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="technology-img-box">
                        <img class="technology-img" src="<?php echo get_field('graph'); ?>" data-aos="flip-left"
                            data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1100">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="technology-desc-box">
                        <p class="technology-desc">
                            <?php echo get_field('paragraph_section4'); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <img class="block-image" src="<?php echo get_field('top_left_image'); ?>" data-aos="fade-right" data-aos-offset="300"
            data-aos-easing="ease-in-sine" data-aos-duration="1100">
        <img class="tv-image" src="<?php echo get_field('top_right_image'); ?>" data-aos="fade-left" data-aos-offset="300"
            data-aos-easing="ease-in-sine" data-aos-duration="1100">
        <img class="side-plant" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/design-2.png">
        <img class="right-design" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/design-1.png">
        <img class="right-side-plant" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/right-plant.png">
        <img class="left-design" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/design-1.png">
    </section>
    <!-- End Technology Section -->
    
     <?php
get_footer();