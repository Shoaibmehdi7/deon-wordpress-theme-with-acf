<?php /* Template Name: IT Service Management */


get_header();
?>




 <!-- Banner Section -->
    <section class="career-banner-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="career-title-box">
                        <h1 class="career-title" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine"
                            data-aos-duration="1100"><?php echo the_field('main_heading_it_serv'); ?>
                            
                        </h1>
                    </div>
                    <div class="career-img-box">
                         <?php $image71 = get_field('select_image_it_serv');?>
                        <img class="careerbanner-img" src="<?php echo $image71; ?>" data-aos="fade-up"
                            data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                    </div>
                    <img class="cloud-left-spiral it-banner-left-spiral" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/design-1.png">
                    <img class="cloud-left-design it-banner-left-design" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/pro-design-left.png">
                    <img class="cloud-right-design it-banner-right-design" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/pro-design-right.png">
                    <img class="cloud-right-spiral it-banner-right-spiral" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/design-1.png">
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Section -->


    <!-- IT Boxes Row-->
    <section class="it-boxes-section">
        <div class="container">
            <div class="row align-items-center it-boxes-row it-boxes-row-1 position-relative mb-5" data-aos="fade-right"
                data-aos-duration="3000">
                <div class="col-md-3">
                    <div class="it-img-box">
                        <?php $image72 = get_field('select_image_left_it_1');?>
                        <img class="it-box-img" src="<?php echo $image72; ?>">
                    </div>
					<img class="it-box-connector-horizontal" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/it-box-connector-horizontal.png">
					<img class="it-box-connector-vertical" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/it-box-connector-vertical.png">
                </div>
                <div class="col-md-9">
                    <div class="it-desc-box">
                        <h1 class="career-title it-box-title"> <?php echo the_field('sub_heading_it_right_1'); ?>
                            
                        </h1>
                        <p class="it-box-desc"> <?php echo the_field('sub_description_it_right_1'); ?>
                            
                        </p>
                    </div>
                </div>
                
                
            </div>

            <div class="row align-items-center it-boxes-row it-boxes-row-2 position-relative mb-5" data-aos="fade-left"
                data-aos-duration="3000">
                <div class="col-md-9">
                    <div class="it-desc-box">
                        <h1 class="career-title it-box-title"> <?php echo the_field('sub_heading_it_right_2'); ?>
                          
                        </h1>
                        <p class="it-box-desc"><?php echo the_field('sub_description_it_right_2'); ?>
                       
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
					<img class="it-box-connector-horizontal-2" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/it-box-connector-horizontal.png">
                    <div class="it-img-box">
                        <?php $image73 = get_field('select_image_left_it_2');?>
                        <img class="it-box-img" src="<?php echo $image73; ?>">
                    </div>
					<img class="it-box-connector-vertical" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/it-box-connector-vertical.png">
                </div>
                
                
            </div>

            <div class="row align-items-center it-boxes-row it-boxes-row-3 position-relative mb-5" data-aos="fade-right"
                data-aos-duration="3000">
                <div class="col-md-3">
                    <div class="it-img-box">
                        <?php $image74 = get_field('select_image_left_it_3');?>
                        <img class="it-box-img" src="<?php echo $image74; ?>">
                    </div>
					 <img class="it-box-connector-horizontal" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/it-box-connector-horizontal.png">
                <img class="it-box-connector-vertical" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/it-box-connector-vertical.png">
            </div>
               
                <div class="col-md-9">
                    <div class="it-desc-box">
                        <h1 class="career-title it-box-title"> <?php echo the_field('sub_heading_it_right_3'); ?>
                          
                        </h1>
                        <p class="it-box-desc"><?php echo the_field('sub_description_it_right_3'); ?>
                       
                        </p>
                    </div>
                </div>
               </div>

            <div class="row align-items-center it-boxes-row it-boxes-row-4 position-relative mb-5" data-aos="fade-left"
                data-aos-duration="3000">
                <div class="col-md-9">
                    <div class="it-desc-box">
                        <h1 class="career-title it-box-title">
                           <?php echo the_field('sub_heading_it_right_4'); ?>
                        </h1>
                        <p class="it-box-desc"><?php echo the_field('sub_description_it_right_4'); ?>
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="it-img-box">
                        <?php $image75 = get_field('select_image_left_it_4');?>
                        <img class="it-box-img" src="<?php echo $image75; ?>">
                    </div>
					<img class="it-box-connector-horizontal-2" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/it-box-connector-horizontal.png">
                </div>
                
            </div>

        </div>
        <img class="cloud-left-design it-boxes-left-design" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/pro-design-left.png">
        <img class="cloud-right-design it-boxes-right-design" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/pro-design-right.png">
    </section>
    <!-- End IT Boxes Row-->


    <!-- IT second Row-->
    <section class="it-second-section">
        <div class="container">
            <div class="row align-items-center position-relative">
                <div class="col-md-6">
                    <div class="it-second-sec-textbox">
                        <h1 class="career-title it-second-box-title"><?php echo the_field('main_heading_innov'); ?>
                            
                        </h1>
                        <h3 class="it-second-desc"><?php echo the_field('description_here_innov'); ?>
                           </h3>
                        <ul class="it-benefit-list">
                            <li><img class="list-tick" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/list-tick.png"> <?php echo the_field('list_here_1'); ?></li>
                            <li><img class="list-tick" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/list-tick.png"> <?php echo the_field('list_here_2'); ?></li>
                            <li><img class="list-tick" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/list-tick.png"> <?php echo the_field('list_here_3'); ?></li>
                            <li><img class="list-tick" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/list-tick.png"> <?php echo the_field('list_here_4'); ?></li>
                            <li><img class="list-tick" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/list-tick.png"> <?php echo the_field('list_here_5'); ?></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="it-second-img-box">
                        <?php $image76 = get_field('select_image_right_innov');?>
                        <img class="it-second-img" src="<?php echo $image76; ?>" data-aos="fade-left"
                            data-aos-duration="3000">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End IT second Row-->



    <!-- IT Choose Health -->
    <section class="it-choose-health-section position-relative">
        <div class="container">
            <div class="row align-items-center">
                <h1 class="career-title" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine"
                    data-aos-duration="1100">
                   <?php echo the_field('main_heading_bcuz'); ?>
                </h1>

                <div class="col-md-12 mt-5">
                    <div class="choose-health-main-img-box" data-aos="fade-down" data-aos-duration="3000">
                        <?php $image77 = get_field('select_image_bcuz');?>
                        <img class="choose-health-img" src="<?php echo $image77; ?>">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="row align-items-center it-benefit-row">
                        <div class="col-md-2">
                            <!-- <div class="it-benefit-img-box">
                                <img class="it-benefit-num-img" src="images/it-benefit-num-1.png">
                            </div> -->
                        </div>
                        <div class="col-md-10">
                            <div class="it-benefit-box">
                                
                                <h1 class="career-title it-benefit-title">
                                    <span>Industry- </span> specific expertise
                                </h1>
                                <p class="it-benefit-box-desc">
                                    iHealth IT Services has extensive experience in the healthcare industry, with a deep
                                    understanding of the unique challenges and requirements of healthcare organizations.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="row align-items-center it-benefit-row">
                        <div class="col-md-2">
                            <!-- <div class="it-benefit-img-box">
                                <img class="it-benefit-num-img" src="images/it-benefit-num-2.png">
                            </div> -->
                        </div>
                        <div class="col-md-10">
                            <div class="it-benefit-box-left">
                                <h1 class="career-title it-benefit-title-left">
                                    <span>Industry- </span> specific expertise
                                </h1>
                                <p class="it-benefit-box-desc-left">
                                    iHealth IT Services has extensive experience in the healthcare industry, with a deep
                                    understanding of the unique challenges and requirements of healthcare organizations.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-md-6">
                    <div class="col-md-2">
                        <!-- <div class="it-benefit-img-box">
                            <img class="it-benefit-num-img" src="images/it-benefit-num-3.png">
                        </div> -->
                    </div>
                    <div class="row align-items-center it-benefit-row">
                        <div class="col-md-10">
                            <div class="it-benefit-box">
                                <h1 class="career-title it-benefit-title">
                                    <span>Commitmen </span> to quality
                                </h1>
                                <p class="it-benefit-box-desc">
                                    iHealth IT Services is committed to delivering high-quality IT solutions that are
                                    reliable, scalable, and secure, with a focus on ensuring customer satisfaction.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="row align-items-center it-benefit-row">
                        <div class="col-md-2">
                            <!-- <div class="it-benefit-img-box">
                                <img class="it-benefit-num-img" src="images/it-benefit-num-4.png">
                            </div> -->
                        </div>
                        <div class="col-md-10">
                            <div class="it-benefit-box-left">
                                <h1 class="career-title it-benefit-title-left">
                                    <span>Skilled and </span> experienced team
                                </h1>
                                <p class="it-benefit-box-desc-left">
                                    iHealth IT Services has a team of highly skilled and experienced IT professionals
                                    who are dedicated to delivering the best possible IT solutions and services to
                                    healthcare organizations.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-md-6">
                    <div class="row align-items-center it-benefit-row">
                        <div class="col-md-2">
                            <!-- <div class="it-benefit-img-box">
                                <img class="it-benefit-num-img" src="images/it-benefit-num-5.png">
                            </div> -->
                        </div>
                        <div class="col-md-10">
                            <div class="it-benefit-box">
                                <h1 class="career-title it-benefit-title">
                                    <span>Customer- </span> centric approach
                                </h1>
                                <p class="it-benefit-box-desc">
                                    iHealth IT Services takes a customer-centric approach to all its services, working
                                    closely with clients to understand their unique needs and delivering customized
                                    solutions that meet those needs.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="row align-items-center it-benefit-row">
                        <div class="col-md-2">
                            <!-- <div class="it-benefit-img-box">
                                <img class="it-benefit-num-img" src="images/it-benefit-num-6.png">
                            </div> -->
                        </div>
                        <div class="col-md-10">
                            <div class="it-benefit-box-left">
                                <h1 class="career-title it-benefit-title-left">
                                    <span>Proven </span> track record
                                </h1>
                                <p class="it-benefit-box-desc-left">
                                    iHealth IT Services has a proven track record of delivering successful IT projects
                                    and services to healthcare organizations of all sizes, including hospitals, clinics,
                                    and medical practices.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img class="curls-left" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/side-curls-square.png">
        <img class="curls-right" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/right-curls.png">
    </section>
    <!-- End IT Choose Health -->


    <!-- IT Service Section -->
    <section class="it-service-sec position-relative">
        <div class="container">
            <div class="row align-items-center">
                <h1 class="career-title" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine"
                    data-aos-duration="1100"><?php echo the_field('main_heading_high'); ?>
                   
                </h1>

                <div class="row align-items-center mb-5">
                    <div class="col-md-6">
                        <div class="it-service-img-box-1">
                            <?php $image78 = get_field('select_icon_image_high_1');?>
                            <img class="service-num-img" src="<?php echo $image78;?>" data-aos="fade-right"
                                data-aos-duration="3000">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="service-desc-box-1">
                            <h4 class="career-title point-box-title service-title"><?php echo the_field('sub_heading_high_1'); ?>
                                
                            </h4>
                            <p class="it-service-box-desc"> <?php echo the_field('description_here_high_1'); ?>
                                
                            </p>
                        </div>
                    </div>
                </div>


                <div class="row align-items-center service-row-2 mb-5">
                    <div class="col-md-6">
                        <div class="service-desc-box-2">
                            <h4 class="career-title point-box-title service-title-right"> <?php echo the_field('sub_heading_high_2'); ?>
                              
                            </h4>
                            <p class="it-service-box-desc"> <?php echo the_field('description_here_high_2'); ?>
                               
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="it-service-img-box-2">
                            <?php $image79 = get_field('select_icon_image_high_2');?>
                            <img class="service-num-img-right" src="<?php echo $image79;?>" data-aos="fade-left"
                                data-aos-duration="3000">
                        </div>
                    </div>
                </div>


                <div class="row align-items-center mb-5">
                    <div class="col-md-6">
                        <div class="it-service-img-box-1">
                            <?php $image80 = get_field('select_icon_image_high_3');?>
                            <img class="service-num-img" src="<?php echo $image80;?>" data-aos="fade-right"
                                data-aos-duration="3000">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="service-desc-box-1">
                            <h4 class="career-title point-box-title service-title"> <?php echo the_field('sub_heading_high_3'); ?>
                               
                            </h4> 
                            <p class="it-service-box-desc"> <?php echo the_field('description_here_high_3'); ?>
                               
                            </p>
                        </div>
                    </div>
                </div>


                <div class="row align-items-center service-row-4 mb-5">
                    <div class="col-md-6">
                        <div class="service-desc-box-2">
                            <h4 class="career-title point-box-title service-title-right"> <?php echo the_field('sub_heading_high_4'); ?>
                               
                            </h4>
                            <p class="it-service-box-desc"> <?php echo the_field('description_here_high_4'); ?>
                                
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="it-service-img-box-2">
                            <?php $image80 = get_field('select_icon_image_high_4');?>
                            <img class="service-num-img-right" src="<?php echo $image80;?>" data-aos="fade-left"
                                data-aos-duration="3000">
                        </div>
                    </div>
                </div>


                <div class="row align-items-center mb-5">
                    <div class="col-md-6">
                        <div class="it-service-img-box-1">
                             <?php $image81 = get_field('select_icon_image_high_5');?>
                            <img class="service-num-img" src="<?php echo $image81;?>" data-aos="fade-right"
                                data-aos-duration="3000">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="service-desc-box-1">
                            <h4 class="career-title point-box-title service-title"> <?php echo the_field('sub_heading_high_5'); ?>
                               
                            </h4>
                            <p class="it-service-box-desc"> <?php echo the_field('description_here_high_5'); ?>
                               
                            </p>
                        </div>
                    </div>
                </div>


                <div class="row align-items-center service-row-6 mb-5">
                    <div class="col-md-6">
                        <div class="service-desc-box-2">
                            <h4 class="career-title point-box-title service-title-right"> <?php echo the_field('sub_heading_high_6'); ?>
                               
                            </h4>
                            <p class="it-service-box-desc"> <?php echo the_field('description_here_high_6'); ?>
                               
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="it-service-img-box-2">
                            <?php $image82 = get_field('select_icon_image_high_6');?>
                            <img class="service-num-img-right" src="<?php echo $image82;?>" data-aos="fade-left"
                                data-aos-duration="3000">
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <img class="service-lines" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/service-lines-bg.png">
        <img class="curls-left" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/pro-design-left.png">
        <img class="curls-right" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/pro-design-right.png">
        <img class="service-left-plant" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/design-2.png">
        <img class="service-right-plant" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/right-plant.png">
        <img class="service-right-curl" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/right-curls.png">
    </section>
    <!-- End IT Service Section -->



    <!-- Steps Section -->
    <section class="steps-section">
        <div class="container">
            <div class="row align-items-center"> 
                <h1 class="career-title" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine"
                    data-aos-duration="1100"> <?php echo the_field('main_heading_help_desk'); ?>
                   
                </h1>
            </div>

            <div class="row align-items-center step-row position-relative">
                <div class="col-md-2">

                </div>
                <div class="col-md-3">
                    <div class="step-text-box step-2-box">
                        <h3 class="step-title"> <?php echo the_field('sub_heading_help_desk_1'); ?>
                            
                        </h3>
                        <p class="step-desc"> <?php echo the_field('sub_description_help_desk_1'); ?>
                           
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="step-text-box step-4-box">
                        <h3 class="step-title"> <?php echo the_field('sub_heading_help_desk_2'); ?>
                            
                        </h3>
                        <p class="step-desc"> <?php echo the_field('sub_description_help_desk_2'); ?>
                            
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="step-text-box step-6-box">
                        <h3 class="step-title"> <?php echo the_field('sub_heading_help_desk_3'); ?>
                            
                        </h3>
                        <p class="step-desc"> <?php echo the_field('sub_description_help_desk_3'); ?>
                           
                        </p>
                    </div>
                </div>
            </div>

            <div class="row align-items-center step-row">
                <div class="step-img-box">
                   <?php $image83 = get_field('select_image_help_desk');?>
                    <img class="step=-img" src="<?php echo $image83;?>">
                </div>
            </div>

            <div class="row align-items-center step-row position-relative">
                <div class="col-md-3">
                    <div class="step-text-box step-1-box">
                        <h3 class="step-title"> <?php echo the_field('sub_heading_help_desk_4'); ?>
                           
                        </h3>
                        <p class="step-desc"> <?php echo the_field('sub_description_help_desk_4'); ?>
                           
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="step-text-box step-3-box">
                        <h3 class="step-title"> <?php echo the_field('sub_heading_help_desk_5'); ?>
                           
                        </h3>
                        <p class="step-desc"> <?php echo the_field('sub_description_help_desk_5'); ?>
                           
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="step-text-box step-5-box">
                        <h3 class="step-title"> <?php echo the_field('sub_heading_help_desk_6'); ?>
                           
                        </h3>
                        <p class="step-desc"><?php echo the_field('sub_description_help_desk_6'); ?>
                           
                        </p>
                    </div>
                </div>
                <div class="col-md-2">

                </div>
            </div>
        </div>
        <img class="step-curls-left" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/side-curls-square.png">
        <img class="step-curls-right" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/right-curls.png">
    </section>
    <!-- End Steps Section -->



    <!-- Tool Section -->
    <section class="tool-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="heading-box">
                        <h1 class="career-title benefit-boxes-title"> <?php echo the_field('main_heading_tools'); ?>
                          
                        </h1>
                    </div>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="life-cycle-box" data-aos="fade-down" data-aos-duration="2000">
                         <?php $image84 = get_field('select_tools_images_1');?>
                        <img class="tool-img" src="<?php echo $image84;?>">
                    </div>
                </div>
                <div class="col-md-5 mb-5" data-aos="fade-right" data-aos-duration="2000">
                    <?php $image85 = get_field('select_tools_images_2');?>
                        <img class="tool-img" src="<?php echo $image85;?>">
                </div>
                <div class="col-md-7 mb-5" data-aos="fade-left" data-aos-duration="2000">
                   <?php $image86 = get_field('select_tools_images_3');?>
                        <img class="tool-img" src="<?php echo $image86;?>">
                </div>
                <div class="col-md-12" data-aos="fade-down" data-aos-duration="2000">
                    <div class="life-cycle-box">
                       <?php $image87 = get_field('select_tools_images_4');?>
                        <img class="tool-img" src="<?php echo $image87;?>">
                    </div>
                </div>
                <div class="col-md-12" data-aos="fade-left" data-aos-duration="2000">
                    <div class="life-cycle-box">
                        <?php $image88 = get_field('select_tools_images_5');?>
                        <img class="tool-img" src="<?php echo $image88;?>">
                    </div>
                </div>
                <div class="col-md-12 mb-5" data-aos="fade-right" data-aos-duration="2000">
                    <div class="life-cycle-box">
                        <?php $image89 = get_field('select_tools_images_6');?>
                        <img class="tool-img" src="<?php echo $image89;?>">
                    </div>
                </div>
                <div class="col-md-12 mb-5" data-aos="fade-left" data-aos-duration="2000">
                    <div class="life-cycle-box">
                        <?php $image90 = get_field('select_tools_images_7');?>
                        <img class="tool-img" src="<?php echo $image90;?>">
                    </div>
                </div>
                <div class="col-md-12 mb-5" data-aos="fade-right" data-aos-duration="2000">
                    <div class="life-cycle-box">
                        <?php $image91 = get_field('select_tools_images_8');?>
                        <img class="tool-img" src="<?php echo $image91;?>">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="life-cycle-box" data-aos="fade-left" data-aos-duration="2000">
                       <?php $image92 = get_field('select_tools_images_9');?>
                        <img class="tool-img" src="<?php echo $image92;?>">
                    </div>
                </div>
            </div>
        </div>
       

        <!-- corner images -->
        <img class="protect-img-1 tool-left-img" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/blocks.png" data-aos="fade-right" data-aos-offset="300">
        <!--    data-aos-easing="ease-in-sine" data-aos-duration="1100">-->
       <img class="protect-img-2 tool-right-img" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/service-top-img-2.png" data-aos="fade-left">
        <!--    data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1100">-->

        <!-- <img class="cyber-plant" src="images/cyber-plant.png">     -->
        <!--<img class="tool-left-design" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/career-left-design.png">-->
        <!--<img class="tool-right-design" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/career-right-design.png">-->

        <!--<img class="tool-left-curl" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/side-curls-square.png">-->
        <!--<img class="tool-right-curl" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/right-curls.png">-->
    </section>
    <!-- Tool Section -->




    <!-- Headings Section -->
    <section class="measure-section position-relative">
        <div class="container">

            <!-- Benefits Row -->
            <div class="row align-items-center zero-benefits-row">
                <div class="col-md-12">
                    <div class="heading-box">
                        <h1 class="career-title benefit-boxes-title" data-aos="fade-up" data-aos-offset="300"
                            data-aos-easing="ease-in-sine" data-aos-duration="1100"><?php echo the_field('main_heading_maintain'); ?>
                            
                        </h1>
                    </div>
                </div>
                <div class="col-md-12">
                    <?php if(have_rows('measuring_maintain')) :  ?>
                <?php while(have_rows('measuring_maintain')) : the_row(); ?>
                   
                    <div class="row benefit-boxes-row cyber-benefit-row tool-boxes-row align-items-center">
                        <div class="col-md-2">
                            <div class="benefit-img-box">
                                <?php $image93 = get_sub_field('select_image_icon_maintain');?>
                                <img class="benefit-img" src="<?php echo $image93;?>">
                                
                                <?php $image94 = get_sub_field('select_number_image_miantain');?>
                                <img class="benefit-num-img" src="<?php echo $image94;?>">
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="benefit-textbox">
                                <h1 class="career-title benefit-box-title">
                                    <?php echo get_sub_field('sub_heading_mainatain'); ?>
                                </h1>
                                <p class="benefit-desc">
                                   <?php echo get_sub_field('sub_description_here_mainatain'); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; endif; ?>
                    <!--<div class="row benefit-boxes-row cyber-benefit-row tool-boxes-row-left align-items-center">-->
                    <!--    <div class="col-md-10">-->
                    <!--        <div class="cyber-benefit-textbox">-->
                    <!--            <h1 class="career-title benefit-box-title cyber-benefit-title">-->
                                    
                    <!--            </h1>-->
                    <!--            <p class="benefit-desc">-->
                                   
                    <!--            </p>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--    <div class="col-md-2">-->
                    <!--        <div class="cyber-benefit-img-box">-->
                    <!--            <img class="benefit-img" src="images/measuring-img-1.png">-->
                    <!--            <img class="cyber-benefit-img-2" src="images/benefit-number-2.png">-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div class="row benefit-boxes-row cyber-benefit-row tool-boxes-row align-items-center">-->
                    <!--    <div class="col-md-2">-->
                    <!--        <div class="benefit-img-box">-->
                    <!--            <img class="benefit-img" src="images/measuring-img-1.png">-->
                    <!--            <img class="benefit-num-img" src="images/benefit-number-3.png">-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--    <div class="col-md-10">-->
                    <!--        <div class="benefit-textbox">-->
                    <!--            <h1 class="career-title benefit-box-title">-->
                                   
                    <!--            </h1>-->
                    <!--            <p class="benefit-desc">-->
                                   
                    <!--            </p>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div class="row benefit-boxes-row cyber-benefit-row tool-boxes-row-left align-items-center">-->
                    <!--    <div class="col-md-10">-->
                    <!--        <div class="cyber-benefit-textbox">-->
                    <!--            <h1 class="career-title benefit-box-title cyber-benefit-title">-->
                                    
                    <!--            </h1>-->
                    <!--            <p class="benefit-desc">-->
                                  
                    <!--            </p>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--    <div class="col-md-2">-->
                    <!--        <div class="cyber-benefit-img-box">-->
                    <!--            <img class="benefit-img" src="images/measuring-img-1.png">-->
                    <!--            <img class="cyber-benefit-img-2" src="images/benefit-number-4.png">-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div class="row benefit-boxes-row cyber-benefit-row tool-boxes-row align-items-center">-->
                    <!--    <div class="col-md-2">-->
                    <!--        <div class="benefit-img-box">-->
                    <!--            <img class="benefit-img" src="images/measuring-img-1.png">-->
                    <!--            <img class="benefit-num-img" src="images/benefit-number-5.png">-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--    <div class="col-md-10">-->
                    <!--        <div class="benefit-textbox">-->
                    <!--            <h1 class="career-title benefit-box-title">-->
                                    
                    <!--            </h1>-->
                    <!--            <p class="benefit-desc">-->
                                   
                    <!--            </p>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                </div>
            </div>
        </div>

        <img class="measure-right-spiral" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/design-1.png">
        <img class="measure-left-spiral" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/design-1.png">
        <img class="measure-left-plant" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/design-2-1.png">
        <img class="measure-right-plant" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/right-plant.png">
    </section>
    <!-- End Headings Section -->
    
      <?php
get_footer();
    