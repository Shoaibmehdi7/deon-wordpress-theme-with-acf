<?php /* Template Name: Ai consulting */


get_header();
?>


   <!-- Banner Section -->
    <section class="career-banner-sec ai-banner-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="career-title-box">
                        <h1 class="career-title" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine"
                            data-aos-duration="1100"> <?php echo the_field('main_heading_ai'); ?>
                            
                        </h1>
                    </div>
                    <p class="ai-banner-desc"> <?php echo the_field('description_here_ai'); ?>
                       
                    </p>
                    <div class="career-img-box">
                        <?php $imagea1 = get_field('select_image_ai'); ?>
                        <img class="careerbanner-img" src="<?php echo $imagea1; ?>" data-aos="fade-up"
                            data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                    </div>
                    <img class="cloud-left-spiral it-banner-left-spiral" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/design-1.png">
                    <img class="ai-left-design" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/pro-design-left.png">
                    <img class="ai-right-design" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/pro-design-right.png">
                    <img class="cloud-right-spiral it-banner-right-spiral" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/design-1.png">
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Section -->


    <!-- AI Service Section -->
    <section class="it-choose-health-section position-relative">
        <div class="container">
            <div class="row align-items-center">
                <h1 class="career-title ai-service-title" data-aos="fade-up" data-aos-offset="300"
                    data-aos-easing="ease-in-sine" data-aos-duration="1100"> <?php echo the_field('main_heading_inc'); ?>
                   
                </h1>

                <div class="col-md-4 mt-5">
                    <div class="ai-service-box">
                        <h1 class="career-title ai-service-box-title">  <?php echo the_field('sub_heading_inc_1'); ?>
                            
                        </h1>
                        <p class="ai-service-box-desc">  <?php echo the_field('sub_description_inc_1'); ?>
                            
                        </p>
                    </div>
                </div>

                <div class="col-md-4 mt-5">
                    <div class="ai-service-box"> 
                        <h1 class="career-title ai-service-box-title"> <?php echo the_field('sub_heading_inc_2'); ?>
                            
                        </h1>
                        <p class="ai-service-box-desc">  <?php echo the_field('sub_description_inc_2'); ?>
                            
                        </p>
                    </div>
                </div>

                <div class="col-md-4 mt-5">
                    <div class="ai-service-box">
                        <h1 class="career-title ai-service-box-title">  <?php echo the_field('sub_heading_inc_3'); ?>
                           
                        </h1>
                        <p class="ai-service-box-desc">  <?php echo the_field('sub_description_inc_3'); ?>
                           
                        </p>
                    </div>
                </div>
            </div>

            <div class="row align-items-center mt-5 mb-4">
                <div class="col-md-6">
                    <div class="service-second-textbox">
                        <h1 class="career-title ai-service-box-title">  <?php echo the_field('heading_ting_1'); ?>
                            
                        </h1>
                        <p class="ai-service-box-desc">  <?php echo the_field('description_here_ting_1'); ?>
                            
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service-second-img-box" data-aos="fade-left" data-aos-duration="2000">
                        <?php $imagea2 = get_field('select_image_ting_1'); ?>
                        <img class="ai-service-img" src="<?php echo $imagea2; ?>">
                    </div>
                </div>
            </div>

            <div class="row align-items-center service-second-row-2 mt-5 mb-4">
                <div class="col-md-6">
                    <div class="service-second-img-box" data-aos="fade-right" data-aos-duration="2000">
                         <?php $imagea3 = get_field('select_image_ting_2'); ?>
                        <img class="ai-service-img" src="<?php echo $imagea3; ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service-second-textbox">
                        <h1 class="career-title ai-service-box-title">  <?php echo the_field('heading_ting_2'); ?>
                            
                        </h1>
                        <p class="ai-service-box-desc">  <?php echo the_field('description_here_ting_2'); ?>
                            
                        </p>
                    </div>
                </div>
            </div>

            <div class="row align-items-center mt-5 mb-4">
                <div class="col-md-6">
                    <div class="service-second-textbox">
                        <h1 class="career-title ai-service-box-title">  <?php echo the_field('heading_ting_3'); ?>
                           
                        </h1>
                        <p class="ai-service-box-desc">  <?php echo the_field('description_here_ting_3'); ?>
                          
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service-second-img-box" data-aos="fade-left" data-aos-duration="2000">
                        <?php $imagea4 = get_field('select_image_ting_3'); ?>
                        <img class="ai-service-img" src="<?php echo $imagea4; ?>">
                    </div>
                </div>
            </div>

        </div>
        <img class="service-second-left-design" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/pro-design-left.png">
        <img class="service-second-right-design" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/pro-design-right.png">
        <img class="service-second-left-plant" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/design-2.png">
        <img class="service-second-right-plant" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/right-plant.png">
    </section>
    <!-- End AI Service Section -->


    <!-- Why Are We Section -->
    <section class="tool-section why-are-we-section">
        <div class="container">
            <div class="row align-items-center position-relative">
                <div class="col-md-12">
                    <div class="heading-box">
                        <h1 class="career-title benefit-boxes-title"> <?php echo the_field('main_heading_exp'); ?>
                            
                        </h1>
                        <p class="why-desc-2 mb-4"> <?php echo the_field('description_here_exp'); ?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="row align-items-center why-boxes-row mb-4 position-relative">
                <div class="col-md-6">
                    <div class="why-second-box">
                        <h1 class="career-title it-box-title"><?php echo the_field('sub_heading_exp_1'); ?>
                            
                        </h1>
                        <p class="why-second-desc"> <?php echo the_field('sub_description_exp_1'); ?>
                           
                        </p>
                    </div>
                </div>
                <img class="why-vertical-connector" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/it-box-connector-vertical.png">
                <div class="col-md-6">
                    <div class="why-second-box">
                        <h1 class="career-title it-box-title"> <?php echo the_field('sub_heading_exp_2'); ?>
                            
                        </h1>
                        <p class="why-second-desc"> <?php echo the_field('sub_description_exp_2'); ?>
                           
                        </p>
                    </div>
                </div>
                <img class="why-vertical-connector-2" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/it-box-connector-vertical.png">
            </div>

            <div class="row align-items-center why-boxes-row-2 mb-4">
                <div class="col-md-4">
                    <div class="why-second-box">
                        <h1 class="career-title it-box-title"> <?php echo the_field('sub_heading_exp_3'); ?>
                           
                        </h1>
                        <p class="why-second-desc"> <?php echo the_field('sub_description_exp_3'); ?>
                            
                        </p>
                    </div>
                </div>
                <img class="why-horizontal-connector" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/it-box-connector-horizontal.png">
                <div class="col-md-4">
                    <div class="why-second-box">
                        <h1 class="career-title it-box-title"> <?php echo the_field('sub_heading_exp_4'); ?>
                            
                        </h1>
                        <p class="why-second-desc"> <?php echo the_field('sub_description_exp_4'); ?>
                           
                        </p>
                    </div>
                </div>
                <img class="why-horizontal-connector-2" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/it-box-connector-horizontal.png">
                <img class="why-vertical-connector-3" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/it-box-connector-vertical.png">
                <div class="col-md-4">
                    <div class="why-second-box">
                        <h1 class="career-title it-box-title"> <?php echo the_field('sub_heading_exp_5'); ?>
                           
                        </h1>
                        <p class="why-second-desc"> <?php echo the_field('sub_description_exp_5'); ?>
                           
                        </p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="why-second-box why-last-box mt-4">
                        <h1 class="career-title it-box-title"> <?php echo the_field('sub_heading_exp_6'); ?>
                           
                        </h1>
                        <p class="why-second-desc"> <?php echo the_field('sub_description_exp_6'); ?>
                           
                        </p>
                    </div>
                </div>
            </div>

        </div>
    

        <!-- corner images -->
        <img class="protect-img-1 why-left-img" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/blocks.png" >
        <img class="protect-img-2 why-right-img" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/tv.png" >

        <img class="tool-left-curl why-curl" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/side-curls-square.png">
        <img class="tool-right-curl why-curl" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/right-curls.png">
    </section>

    <!-- End Why Are We Section Section -->


    <!-- Tool Section -->
    <section class="developoment-technology-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="heading-box">
                        <h1 class="career-title benefit-boxes-title"> <?php echo the_field('main_heading_stack'); ?>
                            
                        </h1>
                    </div>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-md-6 mb-4">
                    <div class="life-cycle-box" data-aos="fade-right" data-aos-duration="2000">
                        <?php $imagea5 = get_field('select_image_stack_1'); ?>
                        <img class="tool-img" src="<?php echo $imagea5; ?>">
                    </div>
                </div>
                <div class="col-md-6 mb-46" data-aos="fade-left" data-aos-duration="2000">
                   <?php $imagea6 = get_field('select_image_stack_2'); ?>
                        <img class="tool-img" src="<?php echo $imagea6; ?>">
                </div>
                <div class="col-md-12 mb-5" data-aos="fade-up" data-aos-duration="2000">
                    <?php $imagea7 = get_field('select_image_stack_3'); ?>
                        <img class="tool-img" src="<?php echo $imagea7; ?>">
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-md-2">
                    <div class="partner-text-box"> 
                        <p class="partner-text"><?php echo the_field('title_here_stack_1'); ?></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="partner-text-box"> 
                        <p class="partner-text"><?php echo the_field('title_here_stack_2'); ?>  </p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="partner-text-box">
                        <p class="partner-text">   <?php echo the_field('title_here_stack_3'); ?></p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="partner-text-box"> 
                        <p class="partner-text"><?php echo the_field('title_here_stack_4'); ?></p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="partner-text-box"> 
                        <p class="partner-text"><?php echo the_field('title_here_stack_5'); ?></p>
                    </div>
                </div>
            </div>
        </div>
        

        <!-- corner images -->
        <img class="tool-left-curl" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/side-curls-square.png">
        <img class="tool-right-curl" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/right-curls.png">
    </section>
    <!-- Tool Section -->



    <!-- Approach Section -->
    <section class="approach-section position-relative">
        <div class="container">
            <div class="row align-items-center">
                <h1 class="career-title" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine"
                    data-aos-duration="1100"> <?php echo the_field('main_heading_needs'); ?>
                   
                </h1>
                <p class="approach-desc"> <?php echo the_field('description_here_needs'); ?>
                   
                </p>
            </div>

            <div class="row align-items-center">
                <div class="col-md-4">
                    <div class="approach-textbox">
                        <!--<h3 class="career-title ai-approach-box-title">-->
                        <!--    <span>Understanding</span> Business Needs-->
                        <!--</h3>-->
                        <p class="approach-text"> <?php echo the_field('sub_description_here_needs_1'); ?>
                           
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="approach-textbox">
                        <!--<h3 class="career-title ai-approach-box-title">-->
                        <!--    <span>Developing a</span> Comprehensive Strategy-->
                        <!--</h3>-->
                        <p class="approach-text"> <?php echo the_field('sub_description_here_needs_2'); ?>
                           
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="approach-textbox"> 
                        <!--<h3 class="career-title ai-approach-box-title">-->
                        <!--    <span>Prototyping</span> and Testing-->
                        <!--</h3>-->
                        <p class="approach-text"> <?php echo the_field('sub_description_here_needs_3'); ?>
                           
                        </p>
                    </div>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="approach-img-box">
                        <?php $imagea8 = get_field('select_image_needs'); ?>
                        <img class="approach-img" src="<?php echo $imagea8; ?>">
                    </div>
                </div>
            </div>

            <div class="row align-items-center approach-row-2">
                <div class="col-md-4">
                    <div class="approach-textbox">
                        <!--<h3 class="career-title ai-approach-box-title">-->
                        <!--    <span>Implementing and </span> Integrating the A.I. Solution-->
                        <!--</h3> -->
                        <p class="approach-text"> <?php echo the_field('sub_description_here_needs_4'); ?>
                          
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="approach-textbox">
                        <!--<h3 class="career-title ai-approach-box-title">-->
                        <!--    <span>Monitoring </span> and Optimization-->
                        <!--</h3>-->
                        <p class="approach-text"> <?php echo the_field('sub_description_here_needs_5'); ?>
                            
                        </p>
                    </div>
                </div>
            </div>

        </div>
        <img class="approach-curls-left" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/side-curls-square.png">
        <img class="approach-curls-right" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/right-curls.png">
    </section>
    <!-- End Approach Section -->



    <!-- Headings Section -->
    <section class="measure-section position-relative">
        <div class="container">

            <!-- Benefits Row -->
            <div class="row align-items-center zero-benefits-row">
                <div class="col-md-12">
                    <div class="heading-box">
                        <h1 class="career-title benefit-boxes-title" data-aos="fade-up" data-aos-offset="300"
                            data-aos-easing="ease-in-sine" data-aos-duration="1100"> <?php echo the_field('main_heading_across'); ?>
                           
                        </h1>
                        <p class="business-desc">
                            <?php echo the_field('description_here_across'); ?>
                            </p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row approach-boxes-row align-items-center">
                        <div class="col-md-2">
                            <div class="benefit-img-box">
                                
                                <?php $imagea9 = get_field('select_icon_image_across_1'); ?>
        
                                <img class="benefit-img" src="<?php echo $imagea9; ?>">
                                
                                 <?php $imagea10 = get_field('select_number_image_across_1'); ?>
                                <img class="benefit-num-img" src="<?php echo $imagea10; ?>">
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="benefit-textbox">
                                <h1 class="career-title benefit-box-title"> <?php echo the_field('sub_heading_here_across_1'); ?>
                                   
                                </h1>
                                <p class="benefit-desc">  <?php echo the_field('sub_description_here_across_1'); ?>
                                   
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row approach-boxes-row appropach-row-2 align-items-center">
                        <div class="col-md-10">
                            <div class="cyber-benefit-textbox"> 
                                <h1 class="career-title benefit-box-title cyber-benefit-title">  <?php echo the_field('sub_heading_here_across_2'); ?>
                                    
                                </h1>
                                <p class="benefit-desc">  <?php echo the_field('sub_description_here_across_2'); ?>
                                    
                                </p>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="cyber-benefit-img-box">
                                <?php $imagea11 = get_field('select_icon_image_across_2'); ?>
                                <img class="benefit-img" src="<?php echo $imagea11; ?>">
                                
                                 <?php $imagea12 = get_field('select_number_image_across_2'); ?>
                                <img class="cyber-benefit-img-2" src="<?php echo $imagea12; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row approach-boxes-row align-items-center">
                        <div class="col-md-2">
                            <div class="benefit-img-box">
                                <?php $imagea13 = get_field('select_icon_image_across_3'); ?>
                                <img class="benefit-img" src="<?php echo $imagea13; ?>">
                                
                                 <?php $imagea14 = get_field('select_number_image_across_3'); ?>
                                <img class="benefit-num-img" src="<?php echo $imagea14; ?>">
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="benefit-textbox">
                                <h1 class="career-title benefit-box-title">  <?php echo the_field('sub_heading_here_across_3'); ?>
                                  
                                </h1>
                                <p class="benefit-desc">  <?php echo the_field('sub_description_here_across_3'); ?>
                                   
                                </p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="row benefit-boxes-row cyber-benefit-row approach-boxes-row appropach-row-2 align-items-center">
                        <div class="col-md-10">
                            <div class="cyber-benefit-textbox">
                                <h1 class="career-title benefit-box-title cyber-benefit-title">  <?php echo the_field('sub_heading_here_across_4'); ?>
                                   
                                </h1>
                                <p class="benefit-desc">  <?php echo the_field('sub_description_here_across_4'); ?>
                                   
                                </p>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="cyber-benefit-img-box">
                                
                                <?php $imagea15 = get_field('select_icon_image_across_4'); ?>
                                <img class="benefit-img" src="<?php echo $imagea15; ?>">
                                
                                <?php $imagea16 = get_field('select_number_image_across_4'); ?>
                                <img class="cyber-benefit-img-2" src="<?php echo $imagea16; ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 <img class="approach-curls-left-z" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/pro-design-left-1.png">
        <img class="approach-curls-right-z" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/pro-design-right-1.png">
        <img class="measure-right-spiral" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/design-1.png">
        <img class="measure-left-spiral" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/design-1.png">
        <img class="measure-left-plant" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/design-2.png">
        <img class="measure-right-plant" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/right-plant.png">
    </section>
    <!-- End Headings Section -->
    
    
             <?php
get_footer();