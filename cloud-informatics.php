<?php /* Template Name: Cloud Informatics */


get_header();
?>

   <!-- Main Welcome-->
    <section class="main-section">
        <div class="container">
            <h1 data-aos="fade-left"
            data-aos-duration="1000"><?php echo the_field('main_heading'); ?><br>
                <strong data-aos="fade-left"
                data-aos-duration="3000"><?php echo the_field('main_heading_1'); ?></strong></h1>
                <?php $image6 = get_field('select_image_info'); ?>
            <img src="<?php echo $image6; ?>" alt="">
            <div class="row main-box-wrapper">
                <div class="col-md-6 first-box position-relative">
                    <div class="main-box" data-aos="fade-right" data-aos-duration="2000">
                        <p><?php echo the_field('description_here_box_1'); ?></p>
                    </div>
                </div>
                <div class="col-md-6 second-box position-relative" >
                    <div class="main-box" data-aos="fade-left" data-aos-duration="2000">
                        <p><?php echo the_field('description_here_box_2'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Main Welcome-->
    <!-- Image With Text -->
    <section class="image-with-text">
        <div class="container">
            <div class="row align-items-center">
                <img src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/line.svg" alt="" class="line" data-aos="fade-right" data-aos-duration="3000">
                <div class="col-md-6" data-aos="fade-right" data-aos-duration="2000">
                    <?php $image7 = get_field('select_image_mission_1'); ?>
                    <img src=" <?php echo $image7; ?>" alt="">
                </div>
                <div class="col-md-6">
                    <h2><?php echo the_field('main_heading_mission'); ?></h2>
                    <p><?php echo the_field('description_here_mission'); ?></p>
                </div>
            </div>
            <div class="row align-items-center">
                <img src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/line-right.svg" alt="" class="line-right" data-aos="fade-left" data-aos-duration="3000">
                <div class="col-md-6">
                    <h2><?php echo the_field('main_heading_mission_2'); ?></h2>
                    <p><?php echo the_field('description_here_mission_2'); ?></p>
                </div>
                <div class="col-md-6">
                    <?php $image8 = get_field('select_image_mission_2'); ?>
                    <img src=" <?php echo $image8; ?>" alt="" data-aos="fade-left" data-aos-duration="2000">
                
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6">
                   <?php $image9 = get_field('select_image_mission_3'); ?>
                    <img src=" <?php echo $image9; ?>" alt="" data-aos="fade-right" data-aos-duration="3000">
                   
                </div>
                <div class="col-md-6">
                    <h2><?php echo the_field('main_heading_mission_3'); ?></h2>
                    <p><?php echo the_field('description_here_mission_3'); ?></p>
                </div>
            </div>
        </div>
    </section>
    <!-- END Image With Text -->
    <!-- Start Lab Experties -->
    <section class="lab-experties">
        <?php $image10 = get_field('select_test_tube_image'); ?>
        <img src=" <?php echo $image10; ?>" class="lab-tube" alt="">
        
        <?php $image11 = get_field('select_microscope_image'); ?>
        <img src=" <?php echo $image11; ?>" alt="" class="microscope">
        
        <div class="container">
            <h2><?php echo the_field('main_heading_lab'); ?></h2>
            <div class="lab-experty-list">
                <div class="lab-item top-space text-first">
                    <div data-aos="fade-down" data-aos-duration="2000">
                        <h3><?php echo the_field('sub_heading_lab_1'); ?></h3>
                    <p><?php echo the_field('description_here_lab_1'); ?></p>
                    <img src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/arrow-bottom-short.svg" class="box-arrow" alt="">
                    </div>
                    <div class="icon-box box-bottom-arrow">
                        <?php $image12 = get_field('select_icon_image_1'); ?>
                        <img src=" <?php echo $image12; ?>" alt="">
                    </div>
                </div>
                <div class="lab-item text-first">
                    <div data-aos="fade-down" data-aos-duration="2000">
                        <h3><?php echo the_field('sub_heading_lab_2'); ?></h3>
                    <p><?php echo the_field('description_here_lab_2'); ?></p>
                    <img src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/arrow-bottom-long.svg" class="box-arrow" alt="">
                    </div>
                    <div class="icon-box box-bottom-arrow">
                        <?php $image13 = get_field('select_icon_image_2'); ?>
                        <img src=" <?php echo $image13; ?>" alt="">
                    </div>
                </div>
                <div class="lab-item text-first">
                    <div data-aos="fade-down" data-aos-duration="2000">
                        <h3><?php echo the_field('sub_heading_lab_3'); ?><span style="color: #101F31;font-weight: 400;"></h3>
                    <p><?php echo the_field('description_here_lab_3'); ?></p>
                    <img src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/arrow-bottom-long.svg" class="box-arrow" alt="">
                    </div>
                    <div class="icon-box box-bottom-arrow">
                       <?php $image14 = get_field('select_icon_image_3'); ?>
                        <img src=" <?php echo $image14; ?>" alt="">
                    </div>
                </div>
                <div class="lab-item top-space text-first">
                    <div data-aos="fade-down" data-aos-duration="2000">
                        <h3><?php echo the_field('sub_heading_lab_4'); ?></h3>
                    <p><?php echo the_field('description_here_lab_4'); ?></p>
                    <img src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/arrow-bottom-short.svg" class="box-arrow" alt="">
                    </div>
                    <div class="icon-box box-without-arrow">
                        <?php $image15 = get_field('select_icon_image_4'); ?>
                        <img src=" <?php echo $image15; ?>" alt="">
                    </div>
                </div>
                <div class="lab-item">
                    <div class="icon-box box-top-arrow">
                       <?php $image16 = get_field('select_icon_image_5'); ?>
                        <img src=" <?php echo $image16; ?>" alt="">
                    </div>
                    <div data-aos="fade-up" data-aos-duration="2000">
                    <img src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/arrow-top-short.svg" class="box-arrow" alt="">
                    <h3><?php echo the_field('sub_heading_lab_5'); ?></h3>
                    <p><?php echo the_field('description_here_lab_5'); ?></p>
                    </div>
                </div>
                <div class="lab-item">
                    <div class="icon-box box-top-arrow">
                       <?php $image17 = get_field('select_icon_image_6'); ?>
                        <img src=" <?php echo $image17; ?>" alt="">
                    </div>
                    <div data-aos="fade-up" data-aos-duration="2000">
                        <img src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/arrow-top-long.svg" class="box-arrow" alt="">
                    <div class="big-text">
                        <h3><?php echo the_field('sub_heading_lab_6'); ?></h3>
                        <p><?php echo the_field('description_here_lab_6'); ?></p>
                    </div>
                    </div>
                </div>
                <div class="lab-item">
                    <div class="icon-box box-top-arrow">
                      <?php $image18 = get_field('select_icon_image_7'); ?>
                        <img src=" <?php echo $image18; ?>" alt="">
                    </div>
                    <div data-aos="fade-up" data-aos-duration="2000">
                        <img src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/arrow-top-short.svg" class="box-arrow" alt="">
                    <h3><?php echo the_field('sub_heading_lab_7'); ?></h3>
                    <p><?php echo the_field('description_here_lab_7'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Lab Experties -->
    <section class="lab-transformation">
        <img src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/ihealth-digital-left.svg" class="ihealth-left" alt="">
        <img src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/blue-tv.png" class="ihealth-right" alt="">
        <div class="container position-relative">
            <div class="w-75 w-sm-100 mx-auto text-center">
                <h2><?php echo the_field('main_heading_digital'); ?></h2>
            <p><?php echo the_field('description_here_digital'); ?></p>
            </div>
            <div class="row mt-5">
                <div class="col-md-4 d-flex flex-column justify-content-between">
                    <div class="ihealth-item">
                        <div class="mobile-icon">
                            <img src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/Efficient-and-Accurate-Operations.png" alt="">
                        </div>
                        <h3><?php echo the_field('sub_heading_digital_left_1'); ?></h3>
                        <p><?php echo the_field('description_here_digital_left_1'); ?></p>
                    </div>
                    <div class="ihealth-item">
                        <div class="mobile-icon">
                            <img src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/Collaborating-with-the-Expert-Teams.png" alt="">
                        </div>
                        <h3><?php echo the_field('sub_heading_digital_left_2'); ?></h3>
                        <p><?php echo the_field('description_here_digital_left_2'); ?></p>
                    </div>
                    <div class="ihealth-item">
                        <div class="mobile-icon">
                            <img src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/Patient-Experience.png" alt="">
                        </div>
                        <h3><?php echo the_field('sub_heading_digital_left_3'); ?></h3>
                        <p><?php echo the_field('description_here_digital_left_3'); ?></p>
                    </div>
                    <div class="ihealth-item">
                        <div class="mobile-icon">
                            <img src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/Innovation-in-Labs.png" alt="">
                        </div>
                        <h3><?php echo the_field('sub_heading_digital_left_4'); ?></h3>
                        <p><?php echo the_field('description_here_digital_left_4'); ?></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <?php $image19 = get_field('select_image_digital'); ?>
                        <img src=" <?php echo $image19; ?>" class="ihealth-digital-icon-image" alt="">
                    
                </div>
                <div class="col-md-4 d-flex flex-column justify-content-center">
                    <div class="ihealth-item min-height">
                        <div class="mobile-icon">
                            <img src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/Connecting-with-Patients.png" alt="">
                        </div>
                        <h3><?php echo the_field('sub_heading_digital_right_1'); ?></h3>
                        <p><?php echo the_field('description_here_digital_right_1'); ?></p>
                    </div>
                    <div class="ihealth-item min-height">
                        <div class="mobile-icon">
                            <img src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/Accessibility-to-Data.png" alt="">
                        </div>
                        <h3><?php echo the_field('sub_heading_digital_right_2'); ?></h3>
                        <p><?php echo the_field('description_here_digital_right_2'); ?></p>
                    </div>
                    <div class="ihealth-item min-height">
                        <div class="mobile-icon">
                            <img src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/The-Future-of-Research-and-Development.png" alt="">
                        </div>
                        <h3><?php echo the_field('sub_heading_digital_right_3'); ?></h3>
                        <p><?php echo the_field('description_here_digital_right_3'); ?></p>
                    </div>
                </div>
            </div>
            <img src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/Group-7450.png" class="ihealth-bottom" alt="">
        </div>
    </section>
    
    
    <?php
get_footer();