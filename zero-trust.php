<?php /* Template Name: Zero Trust */


get_header();
?>






  <!-- Banner Section -->
    <section class="career-banner-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="career-title-box">
                        <h1 class="career-title" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine"
                            data-aos-duration="1100"><?php echo the_field('main_heading_zero')?> 
                            
                        </h1>
                    </div>
                    <div class="career-img-box">
                        <?php $image61 = get_field('select_image_zero'); ?>
                    
                        <img class="careerbanner-img" src="<?php echo $image61; ?>" data-aos="fade-up"
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
                            data-aos-duration="1100"> <?php echo the_field('main_heading_zero_1')?> 
                           
                        </h1>
                        <p class="heading-box-desc zero-desc"> <?php echo the_field('description_here_zero_1')?> 
                            
                        </p>
                    </div>
                </div>
            </div>
            <div class="row zero-trust-row-2 align-items-center">
                <div class="col-md-6">
                    <div class="percent-box">
                        
                         <?php $image62 = get_field('select_icon_image_left_1'); ?>
                        <img class="thirty-img" src="<?php echo $image62; ?>">
                        <p class="thirty-text"><?php echo the_field('description_here_left_1')?> 
                           
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="thirty-img-box">
                        
                         <?php $image63 = get_field('select_image_right_1'); ?>
                        <img class="thirty-img" src="<?php echo $image63; ?>" data-aos="fade-left" data-aos-offset="300"
                            data-aos-easing="ease-in-sine" data-aos-duration="1100">
                    </div>
                </div>
            </div>
            
            
            <div class="row zero-process-boxes-row align-items-center">
                <div class="col-md-12">
                    <div class="heading-box">
                        <h1 class="career-title zero-idealogy" data-aos="fade-up" data-aos-offset="300"
                            data-aos-easing="ease-in-sine" data-aos-duration="1100"> <?php echo the_field('main_heading_ideo')?> 
                            
                        </h1>
                        <p class="heading-box-desc zero-desc"> <?php echo the_field('description_here_ideo')?></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="zero-process-box">
                        <h4 class="career-title zero-process-box-title" data-aos="fade-up" data-aos-offset="300"
                            data-aos-easing="ease-in-sine" data-aos-duration="1100">
                           <?php echo the_field('sub_heading_ideo_1')?> 
                        </h4>
                        <p class="zero-textbox-desc"> <?php echo the_field('sub_description_ideo_1')?> 
                            
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="zero-process-box">
                        <h4 class="career-title zero-process-box-title" data-aos="fade-up" data-aos-offset="300"
                            data-aos-easing="ease-in-sine" data-aos-duration="1100"> <?php echo the_field('sub_heading_ideo_2')?> 
                            
                        </h4>
                        <p class="zero-textbox-desc"> <?php echo the_field('sub_description_ideo_2')?> 
                          
                        </p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center zero-benefits-row">
                <div class="col-md-12">
                    <div class="heading-box">
                        <h1 class="career-title benefit-boxes-title" data-aos="fade-up" data-aos-offset="300"
                            data-aos-easing="ease-in-sine" data-aos-duration="1100"> <?php echo the_field('main_heading_zero_trust')?> 
                           
                        </h1>
                    </div>
                </div>
               
                <div class="col-md-12">
                    
                    
                     <?php if( have_rows ('zero_trust_benefits') ): ?>
                      <?php while( have_rows ('zero_trust_benefits') ): the_row();?>
                    
                    <div class="row benefit-boxes-row align-items-center">
                        <div class="col-md-2">
                            <div class="benefit-img-box">
                                <?php $image64 = get_sub_field('select_number_image_zero_1'); ?>
                                <img class="benefit-img" src="<?php echo $image64; ?>">
                                
                                <?php $image65 = get_sub_field('select_number_image_zero_2'); ?>
                                <img class="benefit-num-img" src="<?php echo $image65; ?>">
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="benefit-textbox">
                                <h1 class="career-title benefit-box-title"> <?php echo get_sub_field('sub_heading_zero_benefit_1')?> 
                                    
                                </h1>
                                <p class="benefit-desc"> <?php echo get_sub_field('sub_description_zero_benefit_1')?> 
                                   
                                </p>
                            </div>
                        </div>
                    </div>
                       <?php endwhile; endif; ?>
                   
                    
                    
                    <!--<div class="row benefit-boxes-row align-items-center">-->
                    <!--    <div class="col-md-2">-->
                    <!--        <div class="benefit-img-box">-->
                    <!--            <img class="benefit-img" src="images/benefit-img-2.png">-->
                    <!--            <img class="benefit-num-img" src="images/benefit-number-2.png">-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--    <div class="col-md-10">-->
                    <!--        <div class="benefit-textbox">-->
                    <!--            <h1 class="career-title benefit-box-title">-->
                    <!--                <span>Minimized vulnerability </span> to be attacked-->
                    <!--            </h1>-->
                    <!--            <p class="benefit-desc">-->
                    <!--                Zero Trust approach reduces the risk of system breaches through continuous-->
                    <!--                evaluation and monitoring of access requests to protected information and assets.-->
                    <!--            </p>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div class="row benefit-boxes-row align-items-center">-->
                    <!--    <div class="col-md-2">-->
                    <!--        <div class="benefit-img-box">-->
                    <!--            <img class="benefit-img" src="images/benefit-img-3.png">-->
                    <!--            <img class="benefit-num-img" src="images/benefit-number-3.png">-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--    <div class="col-md-10">-->
                    <!--        <div class="benefit-textbox">-->
                    <!--            <h1 class="career-title benefit-box-title">-->
                    <!--                <span>Consistent and streamlined </span> user experience-->
                    <!--            </h1>-->
                    <!--            <p class="benefit-desc">-->
                    <!--                Zero Trust approach facilitates the adoption of cloud and remote work by enabling-->
                    <!--                flexible and secure work environments.-->
                    <!--            </p>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    
                    
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
                <div class="col-md-12">
                    <div class="heading-box">
                        <h1 class="career-title benefit-boxes-title" data-aos="fade-up" data-aos-offset="300"
                            data-aos-easing="ease-in-sine" data-aos-duration="1100"> <?php echo the_field('main_heading_sec_fifth_zero')?> 
                           
                        </h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="career-img-box choose-img-box">
                        <?php $image66 = get_field('select_image_fith_sec_left_1'); ?>
                        <img class="heading-img" src="<?php echo $image66; ?>" data-aos="fade-right"
                            data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="heading-third-sec-box choose-health-textbox">
                        <h1 class="heading-feature-title"> <?php echo the_field('heading_here_fifth_sec_right_1')?> 
                           
                        </h1>
                        <p class="heading-feature-box-desc"> <?php echo the_field('description_here_fifth_sec_right_1')?> 
                            
                        </p>
                    </div>
                </div>
            </div>
            <div class="row heading-row-2 align-items-center">
                <div class="col-md-6">
                    <div class="heading-third-sec-box choose-health-textbox">
                        <h1 class="heading-feature-title"> <?php echo the_field('heading_here_fifth_sec_right_2')?> 
                          
                        </h1>
                        <p class="heading-feature-box-desc"> <?php echo the_field('description_here_fifth_sec_right_2')?> 
                         
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="career-img-box choose-img-box">
                         <?php $image67 = get_field('select_image_fith_sec_left_2'); ?>
                        <img class="heading-img" src="<?php echo $image67; ?>" data-aos="fade-left"
                            data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                    </div>
                </div>
            </div>
            <div class="row heading-row-3 align-items-center">
                <div class="col-md-6">
                    <div class="career-img-box choose-img-box">
                         <?php $image68 = get_field('select_image_fith_sec_left_3'); ?>
                        <img class="heading-img" src="<?php echo $image68; ?>" data-aos="fade-right"
                            data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="heading-third-sec-box choose-health-textbox acquire-box">
                        <h1 class="heading-feature-title"> <?php echo the_field('heading_here_fifth_sec_right_3')?> 
                            
                        </h1>
                        <p class="heading-feature-box-desc"> <?php echo the_field('description_here_fifth_sec_right_3')?> 
                           
                        </p>
                    </div>
                </div>
            </div>
            
            
            <div class="row heading-boxes-row pillars-row">
                <div class="col-md-12">
                    <h1 class="career-title" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine"
                        data-aos-duration="1100"> <?php echo the_field('main_heading_pillars')?> 
                       
                    </h1>
                    <p class="zero-pillar-desc"> <?php echo the_field('description_here_Pillars')?> 
                        
                    </p>
                </div>
                <!--<div class="col-md-4">-->
                <!--    <div class="heading-circle-box zero-pillar-box">-->
                <!--        <img class="heading-circle-img zero-pillar-img" src="images/zero-pillar-img-1.png">-->
                <!--        <h3 class="heading-circle-title">-->
                <!--            Verify identity-->
                <!--        </h3>-->
                <!--        <p class="heading-circle-desc">-->
                <!--            Authenticate and verify the identity of users, devices, and systems before granting access.-->
                <!--        </p>-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="col-md-4">-->
                <!--    <div class="heading-circle-box zero-pillar-box">-->
                <!--        <img class="heading-circle-img zero-pillar-img" src="images/zero-pillar-img-2.png">-->
                <!--        <h3 class="heading-circle-title">-->
                <!--            Segment the network-->
                <!--        </h3>-->
                <!--        <p class="heading-circle-desc">-->
                <!--            Segment the network into smaller, isolated segments to minimize the impact of a security-->
                <!--            breach.-->
                <!--        </p>-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="col-md-4">-->
                <!--    <div class="heading-circle-box zero-pillar-box">-->
                <!--        <img class="heading-circle-img zero-pillar-img" src="images/zero-pillar-img-3.png">-->
                <!--        <h3 class="heading-circle-title">-->
                <!--            Protect data-->
                <!--        </h3>-->
                <!--        <p class="heading-circle-desc">-->
                <!--            Encrypt data both at rest and in transit to prevent unauthorized access.-->
                <!--        </p>-->
                <!--    </div>-->
                <!--</div>-->
            </div>
            <div class="row heading-boxes-row pillars-row">
                
                <?php if (have_rows('six_pillers_of_zero_trust')):  ?>
                <?php while(have_rows('six_pillers_of_zero_trust')): the_row(); ?>
                <div class="col-md-4">
                    <div class="heading-circle-box zero-pillar-box">
                         <?php $image65 = get_sub_field('select_icon_image_Pillars'); ?>
                        <img class="heading-circle-img zero-pillar-img" src="<?php echo $image65; ?>">
                        <h3 class="heading-circle-title"><?php echo get_sub_field('sub_heading_Pillars'); ?>
                           
                        </h3>
                        <p class="heading-circle-desc"> <?php echo get_sub_field('sub_description_Pillars'); ?>
                            
                        </p>
                    </div>
                </div>
                <?php endwhile; endif; ?>
                <!--<div class="col-md-4">-->
                <!--    <div class="heading-circle-box zero-pillar-box">-->
                <!--        <img class="heading-circle-img zero-pillar-img" src="images/zero-pillar-img-5.png">-->
                <!--        <h3 class="heading-circle-title">-->
                <!--            Monitor and detect-->
                <!--        </h3>-->
                <!--        <p class="heading-circle-desc">-->
                <!--            Continuously monitor access to sensitive data and detect any unusual or suspicious activity.-->
                <!--        </p>-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="col-md-4">-->
                <!--    <div class="heading-circle-box zero-pillar-box">-->
                <!--        <img class="heading-circle-img zero-pillar-img" src="images/zero-pillar-img-6.png">-->
                <!--        <h3 class="heading-circle-title">-->
                <!--            Enforce least privilege-->
                <!--        </h3>-->
                <!--        <p class="heading-circle-desc">-->
                <!--            Grant the minimum amount of access necessary to perform specific tasks, reducing the attack-->
                <!--            surface.-->
                <!--        </p>-->
                <!--    </div>-->
                <!--</div>-->
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
    
    
    
    <?php
get_footer();