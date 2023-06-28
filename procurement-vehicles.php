<?php /* Template Name: procurement-vehicles */


get_header();
?>




 <!-- Banner Section -->
    <section class="pro-banner-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="pro-title-box">
                        <h1 class="pro-title" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine"
                            data-aos-duration="1100">
                           <?php echo the_field('main_heading_proc_1'); ?>
                        </h1>
                    </div>
                    <div class="pro-img-box">
                        <?php $image21 = get_field('select_image_proc'); ?>
                        <img class="probanner-img" src=" <?php echo $image21; ?>">
                    </div>
                    <img class="pro-left-design" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/pro-design-left.png">
                    <img class="pro-right-design" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/pro-design-right.png">
                    <img class="pro-right-spiral" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/design-1.png">
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Section -->

    <!-- Pro Second Section -->
    <section class="pro-second-sec">
        <div class="container">
            <div class="row pro-second-sec-row" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine"
                data-aos-duration="1100">
                <div class="col-md-3">
                    <div class="pro-second-sec-box">
                        
                        <?php $image22 = get_field('select_image_box_1'); ?>
                        <img class="pro-second-sec-img" src=" <?php echo $image22; ?>">
                        
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="pro-second-sec-box sec-box-2">
                        <h3 class="pro-box-title">
                            <?php echo the_field('sub_heading_box_1'); ?>
                        </h3>
                        <p class="pro-box-desc">
                            <?php echo the_field('enter_text_box_1'); ?>
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="pro-second-sec-box sec-box-3">
                        <h3 class="pro-box-title">
                             <?php echo the_field('sub_heading_box_2'); ?>
                        </h3>
                        <p class="pro-box-desc">
                            <?php echo the_field('enter_text_box_2'); ?>
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="pro-second-sec-box">
                        <h3 class="pro-box-title">
                             <?php echo the_field('sub_heading_box_3'); ?>
                        </h3>
                        <p class="pro-box-desc">
                            <?php echo the_field('enter_text_box_3'); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Pro Second Section -->

    <!-- Pro Details Section -->
    <section class="pro-details-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="pro-detail-head-box">
                        <h1 class="pro-detail-title" data-aos="fade-up" data-aos-offset="300"
                            data-aos-easing="ease-in-sine" data-aos-duration="1100">
                            <?php echo the_field('main_heading_gsa'); ?>
                        </h1>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pro-detail-img-box">
                         <?php $image23 = get_field('select_image_gsa'); ?>
                        <img class="pro-detail-img" src=" <?php echo $image23; ?>">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="pro-detail-desc-box">
                        <p class="pro-detail-desc"> <?php echo the_field('description_here_gsa'); ?>
                            
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="pro-box">
                        <h3 class="pro-detail-head">
                            <?php echo the_field('heading_box_gsa_1'); ?>
                        </h3>
                        <p class="pro-detail-desc">
                            <?php echo the_field('text_here_box_gsa_1'); ?>
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="pro-box">
                        <h3 class="pro-detail-head">
                            <?php echo the_field('heading_box_gsa_2'); ?>
                        </h3>
                        <p class="pro-detail-desc">
                             <?php echo the_field('text_here_box_gsa_2'); ?>
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="pro-box">
                        <h3 class="pro-detail-head">
                            <?php echo the_field('heading_box_gsa_3'); ?>
                        </h3>
                        <p class="pro-detail-desc">
                             <?php echo the_field('text_here_box_gsa_3'); ?>
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="pro-box">
                        <h3 class="pro-detail-head">
                             <?php echo the_field('heading_box_gsa_4'); ?>
                        </h3>
                        <p class="pro-detail-desc">
                            <?php echo the_field('text_here_box_gsa_4'); ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="last-box">
                        <h3 class="last-box-head">
                             <?php echo the_field('heading_box_three_1'); ?>
                        </h3>
                        <p class="pro-detail-desc">
                             <?php echo the_field('text_here_box_three_1'); ?>
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="last-box">
                        <h3 class="last-box-head">
                             <?php echo the_field('heading_box_three_2'); ?>
                        </h3>
                        <p class="pro-detail-desc">
                             <?php echo the_field('text_here_box_three_2'); ?>
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="last-box">
                        <h3 class="last-box-head">
                            <?php echo the_field('heading_box_three_3'); ?>
                        </h3>
                        <p class="pro-detail-desc">
                             <?php echo the_field('text_here_box_three_3'); ?>
                        </p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="download-btn-box">
                        <a href="<?php echo get_field('button_link_proc'); ?>" class="download-btn"><?php echo get_field('button_text_proc'); ?> <span class="arrow">&#8594;</span></a>

                    </div>
                </div>
            </div>
        </div>
        <img class="gsa-left-spiral" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/design-1.png">
        <img class="gsa-right-plant" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/right-plant.png">
        <img class="gsa-left-plant" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/design-2.png">
        <img class="gsa-right-spiral" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/design-1.png">
    </section>
    <!-- End Pro Details Section -->
    
      <?php
get_footer();