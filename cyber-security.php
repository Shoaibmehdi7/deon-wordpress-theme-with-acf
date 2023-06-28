<?php /* Template Name: Cyber Security */


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
                            <?php echo the_field('main_heading_cyber'); ?>
                        </h1>
                    </div>
                    <div class="career-img-box">
                        <?php $image31 = get_field('select_image_cyber');  ?>
                        <img class="careerbanner-img" src=" <?php echo $image31;  ?>" data-aos="fade-up"
                            data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                    </div>
                    <img class="cloud-left-spiral" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/design-1.png">
                    <img class="cloud-left-design it-banner-left-design" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/pro-design-left.png">
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
                             <?php echo the_field('main_heading_intro'); ?>
                        </h1>
                        <p class="heading-box-desc zero-desc"> <?php echo the_field('description_here_intro'); ?>
                          
                        </p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center ai-row">
                <div class="col-md-6">
                    <div class="thirty-img-box">
                         <?php $image32 = get_field('select_image_intro_left_intro');  ?>
                        <img class="thirty-img" src="<?php echo $image32;  ?>" data-aos="fade-right" data-aos-offset="300"
                            data-aos-easing="ease-in-sine" data-aos-duration="1100">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="percent-box">
                        <h1 class="career-title cyber-box-title">
                            <?php echo the_field('sub_heading_intro_right_text_intro'); ?>
                        </h1>
                        <p class="thirty-text">
                            <?php echo the_field('description_here_right_text_intro'); ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="percent-box">
                        <h1 class="career-title cyber-box-title">
                            <?php echo the_field('sub_heading_intro_left_text_intro'); ?>
                        </h1>
                        <p class="thirty-text">
                            <?php echo the_field('description_here_left_text_intro'); ?>
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="thirty-img-box cyber-img2-box">
                        <?php $image33 = get_field('select_image_intro_right_intro');  ?>
                        <img class="thirty-img cyber-img-2" src="<?php echo $image33;  ?>" data-aos="fade-left"
                            data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1100">
                    </div>
                </div>
            </div>
            <div class="row cyber-points-row align-items-center">
                <div class="col-md-12">
                    <div class="heading-box">
                        <h1 class="career-title cyber-point-title">
                            <?php echo the_field('heading_prevention'); ?>
                        </h1>
                    </div>
                </div>
            </div>
            <div class="row cyberpoint-boxes-row">
                <div class="col-md-4">
                    <div class="zero-process-box cyber-point-box">
                        <h4 class="career-title point-box-title">
                           <?php echo the_field('sub_heading_preven_1'); ?>
                        </h4>
                        <p class="zero-textbox-desc"> <?php echo the_field('description_here_preven_1'); ?>
                           
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="zero-process-box cyber-point-box-2">
                        <h4 class="career-title point-box-title"> <?php echo the_field('sub_heading_preven_2'); ?>
                            
                        </h4>
                        <p class="zero-textbox-desc"> <?php echo the_field('description_here_preven_2'); ?>
                           
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="zero-process-box">
                        <h4 class="career-title point-box-title"> <?php echo the_field('sub_heading_preven_3'); ?>
                           
                        </h4>
                        <p class="zero-textbox-desc"> <?php echo the_field('description_here_preven_3'); ?>
                           
                        </p>
                    </div>
                </div>
            </div>
            <div class="row cyber-points-row align-items-center">
                <div class="col-md-12">
                    <div class="heading-box">
                        <h1 class="career-title cyber-point-title">
                           <?php echo the_field('heading_detection'); ?>
                        </h1>
                    </div>
                </div>
            </div>
            <div class="row cyberpoint-boxes-row">
                <div class="col-md-4">
                    <div class="zero-process-box">
                        <h4 class="career-title point-box-title"> <?php echo the_field('sub_heading_detection_1'); ?>
                          
                        </h4>
                        <p class="zero-textbox-desc"> <?php echo the_field('description_here_detection_1'); ?>
                           
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="zero-process-box cyber-point-box-2">
                        <h4 class="career-title point-box-title"> <?php echo the_field('sub_heading_detection_2'); ?>
                            
                        </h4>
                        <p class="zero-textbox-desc"> <?php echo the_field('description_here_detection_2'); ?>
                          
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="zero-process-box">
                        <h4 class="career-title point-box-title"> <?php echo the_field('sub_heading_detection_3'); ?>
                           
                        </h4>
                        <p class="zero-textbox-desc"> <?php echo the_field('description_here_detection_3'); ?>
                           
                        </p>
                    </div>
                </div>
            </div>
            <div class="row cyber-points-row align-items-center">
                <div class="col-md-12">
                    <div class="heading-box">
                        <h1 class="career-title cyber-point-title"> <?php echo the_field('heading_response'); ?>
                           
                        </h1>
                    </div>
                </div>
            </div>
            <div class="row cyberpoint-boxes-row">
                <div class="col-md-4">
                    <div class="zero-process-box">
                        <h4 class="career-title point-box-title"> <?php echo the_field('sub_heading_response_1'); ?>
                           
                        </h4>
                        <p class="zero-textbox-desc"> <?php echo the_field('description_here_response_1'); ?>
                          
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="zero-process-box cyber-point-box-2">
                        <h4 class="career-title point-box-title"> <?php echo the_field('sub_heading_response_2'); ?>
                            
                        </h4>
                        <p class="zero-textbox-desc"> <?php echo the_field('description_here_response_2'); ?>
                           
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="zero-process-box">
                        <h4 class="career-title point-box-title"> <?php echo the_field('sub_heading_response_3'); ?>
                           
                        </h4>
                        <p class="zero-textbox-desc"> <?php echo the_field('description_here_response_3'); ?>
                           
                        </p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center cyber-choose-row">
                <div class="col-md-6">
                    <div class="cyber-choose-img-box">
                    <?php $image34 = get_field('select_image_why_choose');  ?>
                        <img class="cyber-choose-img" src=" <?php echo $image34;  ?>" data-aos="fade-right"
                            data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1100">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="cyber-choose-textbox">
                        <h4 class="career-title cyber-choose-title"> <?php echo the_field('main_heading_why_choose'); ?>
                            
                        </h4>
                        <p class="cyber-choose-desc"> <?php echo the_field('description_here_whychoose'); ?>
                         
                        </p>
                    </div>
                </div>
            </div>

            <div class="row choose-boxes-row">
                <div class="col-md-6">
                    <div class="choose-box">
                        <h4 class="choose-box-title"><?php echo the_field('heading_indus_1'); ?></h4>
                        <p class="choose-box-desc"> <?php echo the_field('description_indus_1'); ?>
                            
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="choose-box">
                        <h4 class="choose-box-title"><?php echo the_field('heading_indus_2'); ?></h4> 
                        <p class="choose-box-desc"> <?php echo the_field('description_indus_2'); ?>
                            
                        </p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="choose-box choose-box-3">
                        <h4 class="choose-box-title"><?php echo the_field('heading_indus_3'); ?></h4> 
                        <p class="choose-box-desc"> <?php echo the_field('description_indus_3'); ?>
                           
                        </p>
                    </div>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="secure-title-box">
                        <h3 class="career-title cyber-choose-title"> <?php echo the_field('main_heading_org'); ?>
                           
                        </h3>
                        <p class="secure-desc"> <?php echo the_field('description_here_org'); ?>
                         
                        </p>
                        <a class="secure-btn"> Request a free consultation with one of our cyber security experts
                            today!</a>
                    </div>
                </div>
            </div>

            <!-- Benefits Row -->
            <div class="row align-items-center zero-benefits-row">
                <div class="col-md-12">
                    <div class="heading-box">
                        <h1 class="career-title benefit-boxes-title" data-aos="fade-up" data-aos-offset="300"
                            data-aos-easing="ease-in-sine" data-aos-duration="1100"><?php echo the_field('main_heading_benefits'); ?>
                            
                        </h1>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row benefit-boxes-row cyber-benefit-row align-items-center">
                        <div class="col-md-2">
                            <div class="benefit-img-box">
                                <?php $image35 = get_field('select_icon_image_box_1');?>
                                <img class="benefit-img" src="<?php echo $image35; ?>">
                                
                                 <?php $image36 = get_field('select_number_image_box_1');?>
                                <img class="benefit-num-img" src="<?php echo $image36; ?>">
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="benefit-textbox">
                                <h1 class="career-title benefit-box-title"><?php echo the_field('heading_benefit_box_1'); ?>
                                  
                                </h1>
                                <p class="benefit-desc"><?php echo the_field('description_here_benefit_box_1'); ?>
                                   
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row benefit-boxes-row cyber-benefit-row align-items-center">
                        <div class="col-md-10">
                            <div class="cyber-benefit-textbox">
                                <h1 class="career-title benefit-box-title cyber-benefit-title"><?php echo the_field('heading_benefit_box_2'); ?>
                                   
                                </h1>
                                <p class="benefit-desc"><?php echo the_field('description_here_benefit_box_2'); ?>
                                   
                                </p>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="cyber-benefit-img-box">
                                 <?php $image37 = get_field('select_icon_image_box_2');?>
                                <img class="benefit-img" src="<?php echo $image37; ?>">
                                
                                <?php $image38 = get_field('select_number_image_box_2');?>
                                <img class="cyber-benefit-img-2" src="<?php echo $image38; ?>">
                               
                            </div>
                        </div>
                    </div>
                    <div class="row benefit-boxes-row cyber-benefit-row align-items-center">
                        <div class="col-md-2">
                            <div class="benefit-img-box">
                                
                               <?php $image40 = get_field('select_icon_image_box_3');?>
                                <img class="benefit-img" src="<?php echo $image40; ?>">
                                
                                <?php $image39 = get_field('select_number_image_box_3');?>
                                <img class="benefit-num-img" src="<?php echo $image39; ?>">
                               
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="benefit-textbox">
                                <h1 class="career-title benefit-box-title"> <?php echo the_field('heading_benefit_box_3'); ?>
                                  
                                </h1>
                                <p class="benefit-desc"> <?php echo the_field('description_here_benefit_box_3'); ?>
                                   
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row benefit-boxes-row cyber-benefit-row align-items-center">
                        <div class="col-md-10">
                            <div class="cyber-benefit-textbox">
                                <h1 class="career-title benefit-box-title cyber-benefit-title"> <?php echo the_field('heading_benefit_box_4'); ?>
                                    
                                </h1>
                                <p class="benefit-desc"> <?php echo the_field('description_here_benefit_box_4'); ?>
                                   
                                </p>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="cyber-benefit-img-box">
                                
                                <?php $image41 = get_field('select_icon_image_box_4');?>
                                <img class="benefit-img" src="<?php echo $image41; ?>">
                               
                               <?php $image42 = get_field('select_number_image_box_4');?>
                                <img class="cyber-benefit-img-2" src="<?php echo $image42; ?>">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img class="heading-right-spiral cyber-right-spiral" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/design-1.png">
    </section>
    <!-- End Headings Section -->

    <!-- Career Second Sec -->
    <section class="career-second-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="heading-box">
                        <h1 class="career-title benefit-boxes-title">  <?php echo the_field('main_heading_risk'); ?>
                            
                        </h1>
                        <p class="risk-management-case"> <?php echo the_field('description_here_risk'); ?>
                           </p>
                    </div>
                </div>
            </div>

            <!-- Risk Boxes Row -->
            <div class="row align-items-center risk-boxes-row">
                <div class="col-md-3">
                    <div class="risk-textbox">
                        <?php $image43 = get_field('select_icon_round_box_1');?>
                        <img class="risk-img" src="<?php echo $image43; ?>">
                        <p class="risk-text"><?php echo the_field('description_here_round_box_1'); ?></p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="risk-textbox">
                         <?php $image44 = get_field('select_icon_round_box_2');?>
                        <img class="risk-img" src="<?php echo $image44; ?>">
                        <p class="risk-text"><?php echo the_field('description_here_round_box_2'); ?>
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="risk-textbox">
                       <?php $image45 = get_field('select_icon_round_box_3');?>
                        <img class="risk-img" src="<?php echo $image45; ?>">
                        <p class="risk-text"><?php echo the_field('description_here_round_box_3'); ?></p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="risk-textbox">
                        <?php $image46 = get_field('select_icon_round_box_4');?>
                        <img class="risk-img" src="<?php echo $image46; ?>">
                        
                        <p class="risk-text"><?php echo the_field('description_here_round_box_4'); ?></p>
                    </div>
                </div>
            </div>

            <div class="row align-items-center risk-boxes-row-2">
                <div class="col-md-3">
                    <div class="risk-textbox">
                        <?php $image47 = get_field('select_icon_round_box_5');?>
                        <img class="risk-img" src="<?php echo $image47; ?>">
                        <p class="risk-text"><?php echo the_field('description_here_round_box_5'); ?></p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="risk-textbox">
                        <?php $image48 = get_field('select_icon_round_box_6');?>
                        <img class="risk-img" src="<?php echo $image48; ?>">
                        <p class="risk-text"><?php echo the_field('description_here_round_box_6'); ?>
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="risk-textbox">
                       <?php $image49 = get_field('select_icon_round_box_7');?>
                        <img class="risk-img" src="<?php echo $image49; ?>">
                        <p class="risk-text"><?php echo the_field('description_here_round_box_7'); ?></p>
                    </div>
                </div>
            </div>

            <div class="row align-items-center risk-boxes-row">
                <div class="col-md-3">
                    <div class="risk-textbox">
                       <?php $image50 = get_field('select_icon_round_box_8');?>
                        <img class="risk-img" src="<?php echo $image50; ?>">
                        <p class="risk-text"><?php echo the_field('description_here_round_box_8'); ?></p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="risk-textbox">
                         <?php $image500 = get_field('select_icon_round_box_9');?>
                        <img class="risk-img" src="<?php echo $image500; ?>">
                        <p class="risk-text"><?php echo the_field('description_here_round_box_9'); ?>
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="risk-textbox">
                         <?php $image5001 = get_field('select_icon_round_box_10');?>
                        <img class="risk-img" src="<?php echo $image5001; ?>">
                        <p class="risk-text"><?php echo the_field('description_here_round_box_10'); ?></p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="risk-textbox">
                        <?php $image5002 = get_field('select_icon_round_box_11');?>
                        <img class="risk-img" src="<?php echo $image5002; ?>">
                        <p class="risk-text"><?php echo the_field('description_here_round_box_11'); ?></p>
                    </div>
                </div>
            </div>

            <div class="row align-items-center risk-boxes-row-2">
                <div class="col-md-3">
                    <div class="risk-textbox">
                         <?php $image5003 = get_field('select_icon_round_box_12');?>
                        <img class="risk-img" src="<?php echo $image5003; ?>">
                        <p class="risk-text"><?php echo the_field('description_here_round_box_12'); ?></p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="risk-textbox">
                         <?php $image5004 = get_field('select_icon_round_box_13');?>
                        <img class="risk-img" src="<?php echo $image5004; ?>">
                        <p class="risk-text"><?php echo the_field('description_here_round_box_13'); ?>
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="risk-textbox">
                       <?php $image5005 = get_field('select_icon_round_box_14');?>
                        <img class="risk-img" src="<?php echo $image5005; ?>">
                        <p class="risk-text"><?php echo the_field('description_here_round_box_14'); ?></p>
                    </div>
                </div>
            </div>

            <div class="row align-items-center risk-boxes-row">
                <div class="col-md-3">
                    <div class="risk-textbox">
                         <?php $image5006 = get_field('select_icon_round_box_15');?>
                        <img class="risk-img" src="<?php echo $image5006; ?>">
                        <p class="risk-text"><?php echo the_field('description_here_round_box_15'); ?></p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="risk-textbox">
                        <?php $image5007 = get_field('select_icon_round_box_16');?>
                        <img class="risk-img" src="<?php echo $image5007; ?>">
                        <p class="risk-text"><?php echo the_field('description_here_round_box_16'); ?>
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="risk-textbox">
                        <?php $image5008 = get_field('select_icon_round_box_17');?>
                        <img class="risk-img" src="<?php echo $image5008; ?>">
                        <p class="risk-text"><?php echo the_field('description_here_round_box_17'); ?></p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="risk-textbox">
                         <?php $image5009 = get_field('select_icon_round_box_18');?>
                        <img class="risk-img" src="<?php echo $image5009; ?>">
                        <p class="risk-text"><?php echo the_field('description_here_round_box_18'); ?></p>
                    </div>
                </div>
            </div>

            <div class="row align-items-center risk-boxes-row-2">
                <div class="col-md-3">
                    <div class="risk-textbox">
                         <?php $image5011 = get_field('select_icon_round_box_19');?>
                        <img class="risk-img" src="<?php echo $image5011; ?>">
                        <p class="risk-text"><?php echo the_field('description_here_round_box_19'); ?></p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="risk-textbox">
                         <?php $image5012 = get_field('select_icon_round_box_20');?>
                        <img class="risk-img" src="<?php echo $image5012; ?>">
                        <p class="risk-text"><?php echo the_field('description_here_round_box_20'); ?>
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="risk-textbox">
                       <?php $image5013 = get_field('select_icon_round_box_21');?>
                        <img class="risk-img" src="<?php echo $image5013; ?>">
                        <p class="risk-text"><?php echo the_field('description_here_round_box_21'); ?></p>
                    </div>
                </div>
            </div>

            <div class="row align-items-center risk-boxes-row-2">
                <div class="col-md-12">
                    <div class="risk-textbox risk-textbox-last">
                        <?php $image5014 = get_field('select_icon_round_box_22');?>
                        <img class="risk-img" src="<?php echo $image5014; ?>">
                        <p class="risk-text"><?php echo the_field('description_here_round_box_22'); ?></p>
                    </div>
                </div>
            </div>

        </div>
        <img class="cyber-left-spiral" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/design-1.png">
        <img class="cyber-right-spiral" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/design-1.png">
        <img class="career-left-design2" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/career-left-design2.png">
        <!-- <img class="heading-left-plant" src="images/design-2.png"> -->
        <!-- <img class="heading-left-plant2" src="images/design-2.png"> -->
        <img class="heading-left-plant3" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/design-2.png">
        <img class="heading-left-plant4 cyber-left-plant4" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/design-2.png">
        <!-- <img class="heading-right-plant2" src="images/right-plant.png"> -->
        <img class="heading-right-plant3" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/right-plant.png">
        <img class="heading-right-plant4 cyber-right-plant4" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/right-plant.png">
        <!-- <img class="heading-right-plant" src="images/right-plant.png"> -->
    </section>
    <!-- End Career Second Sec -->


    <!-- Life Cycle Section -->
    <section class="life-cycle-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="heading-box">
                        <h1 class="career-title benefit-boxes-title">
                            <?php echo the_field('main_heading_protect'); ?>
                        </h1>
                        <p class="risk-management-case"><?php echo the_field('description_here_protect'); ?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="life-cycle-box">
                        <?php $image5016 = get_field('select_center_image_protect');?>
                        <img class="service-life-cycle" src="<?php echo $image5016; ?>">
                    </div>
                </div>
            </div>

            <!-- life cycle boxes -->
            <div class="row main-box-wrapper life-boxes-wrapper">
                <?php if(have_rows('protect_you_boxes')) :  ?>
                <?php while(have_rows('protect_you_boxes')) : the_row(); ?>
                <div class="col-md-6 position-relative">
                    <div class="main-box life-cycle-main-box" data-aos="fade-right" data-aos-duration="2000">
                        
                        <?php $image5015 = get_sub_field('select_icon_image_net');?>
                        <img class="life-cycle-number" src="<?php echo $image5015; ?>">
                        
                        <h1 class="career-title life-cycle-title">
                            <?php echo get_sub_field('sub_heading_net'); ?>
                        </h1>
                        <p class="life-cycle-point-desc"> <?php echo get_sub_field('description_here_net'); ?></p>
                    </div>
                </div>
                <br><br>
<?php endwhile; endif; ?>
                <!--<div class="col-md-6 position-relative">-->
                <!--    <div class="main-box life-cycle-main-box" data-aos="fade-left" data-aos-duration="2000">-->
                <!--        <img class="life-cycle-number" src="images/life-number-2.png">-->
                <!--        <h1 class="career-title life-cycle-title">-->
                <!--            <span>Endpoint </span> Security-->
                <!--        </h1>-->
                <!--        <p class="life-cycle-point-desc">-->
                <!--            This involves protecting the organization's endpoints, including laptops, desktops, mobile-->
                <!--            devices, and servers, from cyber threats. Endpoint security services may include anti-virus-->
                <!--            and anti-malware software, encryption, and data loss prevention.-->
                <!--        </p>-->
                <!--    </div>-->
                <!--</div>-->
            </div>

            <!--<div class="row main-box-wrapper life-boxes-wrapper">-->
            <!--    <div class="col-md-6 position-relative">-->
            <!--        <div class="main-box life-cycle-main-box" data-aos="fade-right" data-aos-duration="2000">-->
            <!--            <img class="life-cycle-number" src="images/life-number-3.png">-->
            <!--            <h1 class="career-title life-cycle-title">-->
            <!--                <span>Identity and </span> Access Managemen-->
            <!--            </h1>-->
            <!--            <p class="life-cycle-point-desc">-->
            <!--                This involves ensuring that only authorized users have access to sensitive data and systems.-->
            <!--                Identity and access management services may include multi-factor authentication, password-->
            <!--                management, and access control.-->
            <!--            </p>-->
            <!--        </div>-->
            <!--    </div>-->

            <!--    <div class="col-md-6 position-relative">-->
            <!--        <div class="main-box life-cycle-main-box" data-aos="fade-left" data-aos-duration="2000">-->
            <!--            <img class="life-cycle-number" src="images/life-number-4.png">-->
            <!--            <h1 class="career-title life-cycle-title">-->
            <!--                <span>Cloud </span> Security-->
            <!--            </h1>-->
            <!--            <p class="life-cycle-point-desc">-->
            <!--                This involves protecting data and applications that are hosted in the cloud. Cloud security-->
            <!--                services may include data encryption, access control, and monitoring.-->
            <!--            </p>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->

            <!--<div class="row main-box-wrapper life-boxes-wrapper">-->
            <!--    <div class="col-md-6 position-relative">-->
            <!--        <div class="main-box life-cycle-main-box" data-aos="fade-right" data-aos-duration="2000">-->
            <!--            <img class="life-cycle-number" src="images/life-number-5.png">-->
            <!--            <h1 class="career-title life-cycle-title">-->
            <!--                <span>Identity and </span> Access Managemen-->
            <!--            </h1>-->
            <!--            <p class="life-cycle-point-desc">-->
            <!--                This involves ensuring that only authorized users have access to sensitive data and systems.-->
            <!--                Identity and access management services may include multi-factor authentication, password-->
            <!--                management, and access control.-->
            <!--            </p>-->
            <!--        </div>-->
            <!--    </div>-->

            <!--    <div class="col-md-6 position-relative">-->
            <!--        <div class="main-box life-cycle-main-box" data-aos="fade-left" data-aos-duration="2000">-->
            <!--            <img class="life-cycle-number" src="images/life-number-6.png">-->
            <!--            <h1 class="career-title life-cycle-title">-->
            <!--                <span>Cloud </span> Security-->
            <!--            </h1>-->
            <!--            <p class="life-cycle-point-desc">-->
            <!--                This involves protecting data and applications that are hosted in the cloud. Cloud security-->
            <!--                services may include data encryption, access control, and monitoring.-->
            <!--            </p>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->

            <!--<div class="row main-box-wrapper life-boxes-wrapper">-->
            <!--    <div class="col-md-12 position-relative">-->
            <!--        <div class="main-box life-cycle-main-box last-box" data-aos="fade-left" data-aos-duration="2000">-->
            <!--            <img class="life-cycle-number" src="images/life-number-7.png">-->
            <!--            <h1 class="career-title life-cycle-title">-->
            <!--                <span>Cloud </span> Security-->
            <!--            </h1>-->
            <!--            <p class="life-cycle-point-desc">-->
            <!--                This involves protecting data and applications that are hosted in the cloud. Cloud security-->
            <!--                services may include data encryption, access control, and monitoring.-->
            <!--            </p>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
        </div>

        <!-- corner images -->
        <img class="protect-img-1" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/blocks.png" data-aos="fade-right" data-aos-offset="300"
            data-aos-easing="ease-in-sine" data-aos-duration="1100">
        <img class="protect-img-2" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/service-top-img-2.png" data-aos="fade-left" data-aos-offset="300"
            data-aos-easing="ease-in-sine" data-aos-duration="1100">

        <img class="cyber-plant" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/cyber-plant.png">    
        <img class="cyber-left-design" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/career-left-design.png">
        <img class="cyber-right-design" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/career-right-design.png">    
    </section>


    <?php
get_footer();