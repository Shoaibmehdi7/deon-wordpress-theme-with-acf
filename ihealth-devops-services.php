<?php /* Template Name: ihealth devops services */


get_header();
?>



   <!-- Banner Section -->
    <section class="devops-banner-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="devops-title-box">
                        <h1 class="devops-title" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine"
                            data-aos-duration="1100"><?php echo the_field('main_heading_dev'); ?>
                           
                        </h1>
                        <p class="devops-desc"> <?php echo the_field('description_here_dev'); ?>
                            
                        </p>
                    </div>
                    <div class="devops-img-box">
                        <?php $imageaa = get_field('select_image_dev');  ?>
                        <img class="devopsbanner-img" src="<?php echo $imageaa;  ?>" data-aos="fade-up"
                            data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                    </div>
                    <img class="career-bottom-left-design" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/career-left-design.png">
                    <img class="career-bottom-right-design" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/career-right-design.png">
                </div>
            </div>
        </div>
        <img class="chemical" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/chemical.png">
        <img class="devops-right-spiral" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/design-1.png">
    </section>
    <!-- End Banner Section -->

    <!-- Devops Second Sec -->
    <section class="devops-second-sec">
        <div class="container">
            <div class="row devops-row-1 align-items-center">
                <div class="col-md-6">
                    <div class="devops-img-box">
                          <?php $imagebb = get_field('select_image_dev_1');  ?>
                        <img class="devops-img" src="<?php echo $imagebb;  ?>" data-aos="fade-right"
                            data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="devops-text-box">
                        <p class="devops-textbox-desc">
                           <?php echo the_field('description_here_dev_1'); ?>
                        </p>
                    </div>
                </div>
                
                <img class="devops-road-1" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/road-1.png">
            </div>
            <div class="row devops-row-2 align-items-center">
                <div class="col-md-6">
                    <div class="devops-text-box">
                        <p class="devops-textbox-desc"><?php echo the_field('description_here_dev_2'); ?>
                           
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="devops-img-box">
                        <?php $imagecc = get_field('select_image_dev_2');  ?>
                        <img class="devops-img" src="<?php echo $imagecc;  ?>" data-aos="fade-left"
                            data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                    </div>
                </div>
                <img class="devops-road-2" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/road-2.png">
            </div>
            <div class="row devops-row-3 align-items-center">
                <div class="col-md-6">
                    <div class="devops-img-box">
                        <?php $imagedd = get_field('select_image_dev_3');  ?>
                        <img class="devops-img" src="<?php echo $imagedd;  ?>" data-aos="fade-right"
                            data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                    </div>
                    <img class="devops-2roads" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/2-road-lines.png">
                </div>
                <div class="col-md-6">
                    <div class="devops-text-box row-3-textbox">
                        <p class="devops-textbox-desc"><?php echo the_field('description_here_dev_3'); ?>
                          
                        </p>
                    </div>
                </div>
            </div>
            <div class="row devops-row-4 align-items-center">
                <div class="col-md-6">
                    <div class="devops-text-box devops-box-last">
                        <p class="devops-textbox-desc"><?php echo the_field('description_here_dev_4'); ?>
                           
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="devops-img-box">
                        <?php $imageee = get_field('select_image_dev_4');  ?>
                        <img class="devops-img" src="<?php echo $imageee;  ?>" data-aos="fade-left"
                            data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1500">
                    </div>
                </div>
            </div>
        </div>
        <img class="career-left-design2" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/career-left-design2.png">
    </section>
    <!-- End Career Second Sec -->


    <!-- Approach Section -->
    <section class="approach-section position-relative">
        <div class="container">
            <div class="row align-items-center">
                <h1 class="career-title" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine"
                    data-aos-duration="1100"><?php echo the_field('main_heading_better'); ?>
                    
                </h1>
            </div>

            <div class="row align-items-center">
                <div class="col-md-4">
                    <div class="approach-textbox dev-box">
                        <!--<h3 class="career-title ai-approach-box-title">-->
                        <!--    <span>Faster Time</span> to Market-->
                        <!--</h3>-->
                        <p class="approach-text"><?php echo the_field('description_here_better_1'); ?>
                           
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="approach-textbox dev-box">
                        <!--<h3 class="career-title ai-approach-box-title">-->
                        <!--    <span>Increased Efficiency and </span> Productivity-->
                        <!--</h3>-->
                        <p class="approach-text"><?php echo the_field('description_here_better_2'); ?>
                          
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="approach-textbox dev-box">
                        <!--<h3 class="career-title ai-approach-box-title">-->
                        <!--    <span>Improved </span> Scalability-->
                        <!--</h3>-->
                        <p class="approach-text"><?php echo the_field('description_here_better_3'); ?>
                         
                        </p>
                    </div>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="approach-img-box">
                        <?php $imageff = get_field('select_image_better');  ?>
                        <img class="approach-img" src="<?php echo $imageff;  ?>">
                    </div>
                </div>
            </div>

            <div class="row align-items-center approach-row-2">
                <div class="col-md-4">
                    <div class="approach-textbox dev-box">
                        <!--<h3 class="career-title ai-approach-box-title">-->
                        <!--    <span>Improved</span> Quality-->
                        <!--</h3>-->
                        <p class="approach-text"><?php echo the_field('description_here_better_4'); ?>
                           
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="approach-textbox dev-box">
                        <!--<h3 class="career-title ai-approach-box-title">-->
                        <!--    <span>Better</span> Communication and Collaboration-->
                        <!--</h3>-->
                        <p class="approach-text"><?php echo the_field('description_here_better_5'); ?>
                            
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <img class="blue-left-plant" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/blue-plant-1.png">
        <img class="blue-right-plant" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/blue-plant-2.png">
    </section>
    <!-- End Approach Section -->


    <!-- Challenge Section -->
    <section class="challenge-section position-relative">
        <div class="container">
            <div class="row align-items-center zero-benefits-row">
                <div class="col-md-12">
                    <div class="heading-box">
                        <h1 class="career-title benefit-boxes-title" data-aos="fade-up" data-aos-offset="300"
                            data-aos-easing="ease-in-sine" data-aos-duration="1100"><?php echo the_field('main_heading_adop'); ?>
                            
                        </h1>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row benefit-boxes-row cyber-benefit-row align-items-center">
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="benefit-img-box challenge-image">
                                        
                                        <?php $imagegg = get_field('select_icon_image_adop_1');  ?>
                                        <img class="benefit-img" src="<?php echo $imagegg;  ?>">
                                        
                                        <?php $imagehh = get_field('select_number_image_adop_1');  ?>
                                        <img class="challenge-num-img" src="<?php echo $imagehh;  ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="benefit-img-box challenge-img-box">
                                        <h1 class="career-title benefit-box-title challenge-title">
                                          <?php echo the_field('title_here_adop_1'); ?>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="benefit-textbox">
                                <p class="benefit-desc">
                                    <?php echo the_field('description_here_adop_1'); ?>
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="row benefit-boxes-row challenge-row-2 cyber-benefit-row align-items-center">
                        <div class="col-md-8">
                            <div class="cyber-benefit-textbox">
                                <p class="benefit-desc">
                                   <?php echo the_field('description_here_adop_2'); ?>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="benefit-img-box challenge-image">
                                         <?php $imagejj = get_field('select_icon_image_adop_2');  ?>
                                        <img class="benefit-img" src="<?php echo $imagejj;  ?>">
                                        
                                        <?php $imageii = get_field('select_number_image_adop_2');  ?>
                                        <img class="challenge-num-img-2" src="<?php echo $imageii;  ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="benefit-img-box">
                                        <h1 class="career-title benefit-box-title challenge-title">
                                           <?php echo the_field('title_here_adop_2'); ?>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row benefit-boxes-row cyber-benefit-row align-items-center">
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="benefit-img-box challenge-image">
                                         <?php $imagekk = get_field('select_icon_image_adop_3');  ?>
                                        <img class="benefit-img" src="<?php echo $imagekk;  ?>">
                                        
                                        <?php $imagell = get_field('select_number_image_adop_3');  ?>
                                        <img class="challenge-num-img" src="<?php echo $imagell;  ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="benefit-img-box challenge-img-box">
                                        <h1 class="career-title benefit-box-title challenge-title">
                                           <?php echo the_field('title_here_adop_3'); ?>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="benefit-textbox">
                                <p class="benefit-desc">
                                  <?php echo the_field('description_here_adop_3'); ?>
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="row benefit-boxes-row challenge-row-2 cyber-benefit-row align-items-center">
                        <div class="col-md-8">
                            <div class="cyber-benefit-textbox">
                                <p class="benefit-desc">
                                   <?php echo the_field('description_here_adop_4'); ?>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="benefit-img-box challenge-image">
                                         <?php $imagemm = get_field('select_icon_image_adop_4');  ?>
                                        <img class="benefit-img" src="<?php echo $imagemm;  ?>">
                                        
                                        <?php $imagenn = get_field('select_number_image_adop_4');  ?>
                                        <img class="challenge-num-img-2" src="<?php echo $imagenn;  ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="benefit-img-box">
                                        <h1 class="career-title benefit-box-title challenge-title">
                                           <?php echo the_field('title_here_adop_4'); ?>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row benefit-boxes-row cyber-benefit-row align-items-center">
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="benefit-img-box challenge-image">
                                         <?php $imageoo = get_field('select_icon_image_adop_5');  ?>
                                        <img class="benefit-img" src="<?php echo $imageoo;  ?>">
                                        
                                        <?php $imagepp = get_field('select_number_image_adop_5');  ?>
                                        <img class="challenge-num-img" src="<?php echo $imagepp;  ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="benefit-img-box challenge-img-box">
                                        <h1 class="career-title benefit-box-title challenge-title">
                                            <?php echo the_field('title_here_adop_5'); ?>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="benefit-textbox">
                                <p class="benefit-desc">
                                   <?php echo the_field('description_here_adop_4'); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <img class="challenge-left-design" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/pro-design-left.png">
        <img class="challenge-right-design" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/pro-design-right.png">
        <img class="challenge-cube-left" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/cube-slide.png">
        <img class="challenge-cube-right" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/cube-slide.png">
    </section>
    <!-- End Challenge Section -->


    <!-- Devops Portfolio Section-->
    <section class="devops-portfolio-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="heading-box">
                        <h1 class="career-title benefit-boxes-title"> <?php echo the_field('main_heading_port'); ?>
                            
                        </h1>
                    </div>
                </div>
            </div>

            <!-- life cycle boxes -->
            <div class="row main-box-wrapper life-boxes-wrapper">
                
                <?php if ( have_rows ('portfolio_boxes')) : ?>
                <?php while ( have_rows('portfolio_boxes')) : the_row(); ?>
                <div class="col-md-6 position-relative">
                    <div class="main-box life-cycle-main-box" data-aos="fade-right" data-aos-duration="2000">
                         <?php $imageqq = get_sub_field('select_number_image_port');  ?>
                        <img class="life-cycle-number" src="<?php echo $imageqq;  ?>">
                        <h1 class="career-title life-cycle-title">
                           <?php echo get_sub_field('sub_title_here_port'); ?>
                        </h1>
                        <p class="life-cycle-point-desc">
                           <?php echo get_sub_field('sub_description_here_port'); ?>
                        </p>
                    </div>
                </div>
<?php endwhile; endif;  ?>
                <!--<div class="col-md-6 position-relative">-->
                <!--    <div class="main-box life-cycle-main-box" data-aos="fade-left" data-aos-duration="2000">-->
                <!--        <img class="life-cycle-number" src="images/blue-nunm-2.png">-->
                <!--        <h1 class="career-title life-cycle-title">-->
                <!--            <span>DevOps</span> Consulting-->
                <!--        </h1>-->
                <!--        <p class="life-cycle-point-desc">-->
                <!--            ihealth can provide DevOps consulting services to help healthcare organizations adopt DevOps-->
                <!--            principles and practices. These services can include DevOps strategy development, toolchain-->
                <!--            evaluation, and implementation planning.-->
                <!--        </p>-->
                <!--    </div>-->
                <!--</div>-->
            </div>

            <!--<div class="row main-box-wrapper life-boxes-wrapper">-->
            <!--    <div class="col-md-6 position-relative">-->
            <!--        <div class="main-box life-cycle-main-box" data-aos="fade-right" data-aos-duration="2000">-->
            <!--            <img class="life-cycle-number" src="images/blue-nunm-3.png">-->
            <!--            <h1 class="career-title life-cycle-title">-->
                           
            <!--            </h1>-->
            <!--            <p class="life-cycle-point-desc">-->
                            
            <!--            </p>-->
            <!--        </div>-->
            <!--    </div>-->

            <!--    <div class="col-md-6 position-relative">-->
            <!--        <div class="main-box life-cycle-main-box" data-aos="fade-left" data-aos-duration="2000">-->
            <!--            <img class="life-cycle-number" src="images/blue-nunm-4.png">-->
            <!--            <h1 class="career-title life-cycle-title">-->
                            
            <!--            </h1>-->
            <!--            <p class="life-cycle-point-desc">-->
                           
            <!--            </p>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->

            <!--<div class="row main-box-wrapper life-boxes-wrapper">-->
            <!--    <div class="col-md-6 position-relative">-->
            <!--        <div class="main-box life-cycle-main-box" data-aos="fade-right" data-aos-duration="2000">-->
            <!--            <img class="life-cycle-number" src="images/blue-nunm-5.png">-->
            <!--            <h1 class="career-title life-cycle-title">-->
                           
            <!--            </h1>-->
            <!--            <p class="life-cycle-point-desc">-->
                           
            <!--            </p>-->
            <!--        </div>-->
            <!--    </div>-->

            <!--    <div class="col-md-6 position-relative">-->
            <!--        <div class="main-box life-cycle-main-box" data-aos="fade-left" data-aos-duration="2000">-->
            <!--            <img class="life-cycle-number" src="images/blue-nunm-6.png">-->
            <!--            <h1 class="career-title life-cycle-title">-->
                           
            <!--            </h1>-->
            <!--            <p class="life-cycle-point-desc">-->
                           
            <!--            </p>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->

            <!--<div class="row main-box-wrapper life-boxes-wrapper">-->
            <!--    <div class="col-md-12 position-relative">-->
            <!--        <div class="main-box life-cycle-main-box last-box" data-aos="fade-left" data-aos-duration="2000">-->
            <!--            <img class="life-cycle-number" src="images/blue-nunm-7.png">-->
            <!--            <h1 class="career-title life-cycle-title">-->
                            
            <!--            </h1>-->
            <!--            <p class="life-cycle-point-desc">-->
                          
            <!--            </p>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
        </div>

        <!-- corner images -->
        <img class="protect-img-1 devops-ban-1" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/blocks.png" data-aos="fade-right" data-aos-offset="300"
            data-aos-easing="ease-in-sine" data-aos-duration="1100">
        <img class="protect-img-2 devops-ban-2" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/blue-tv.png" data-aos="fade-left" data-aos-offset="300"
            data-aos-easing="ease-in-sine" data-aos-duration="1100">

        <img class="cyber-plant dev-plant" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/cyber-plant.png">
        <img class="cyber-left-design" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/career-left-design.png">
        <img class="cyber-right-design" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/career-right-design.png">
    </section>
    <!-- End Devops Portfolio Section-->


    <!--- Devops Tools & Platforms --->
    <section class="platform-section">
        <div class="container">
            <div class="row align-items-center">
                <h1 class="career-title benefit-boxes-title"><?php echo the_field('main_heading_plat'); ?>
                    
                </h1>
                <p class="dev-platform-desc"><?php echo the_field('description_here_plat'); ?>
                   
                </p>
            </div>

            <div class="row align-items-center platform-boxes-row">
                
                <?php if ( have_rows ('platform_boxes')) : ?>
                <?php while ( have_rows('platform_boxes')) : the_row(); ?>
                
                <div class="col-md-12 mt-5 mb-4" data-aos="fade-right" data-aos-duration="2000">
                    <div class="platform-box">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="platform-textbox">
                                    <h1 class="career-title benefit-boxes-title platform-box-title"><?php echo get_sub_field('title_here_plat'); ?>
                                       
                                    </h1>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="platform-img-box">
                                     <?php $imagerr = get_sub_field('select_logo_image_plat');  ?>
                                    <img class="platform-img" src="<?php echo $imagerr;  ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <?php endwhile; endif;  ?>

                <!--<div class="col-md-12 mt-5 mb-4" data-aos="fade-left" data-aos-duration="2000">-->
                <!--    <div class="platform-box">-->
                <!--        <div class="row">-->
                <!--            <div class="col-md-2">-->
                <!--                <div class="platform-textbox">-->
                <!--                    <h1 class="career-title benefit-boxes-title platform-box-title">-->
                                       
                <!--                    </h1>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--            <div class="col-md-10">-->
                <!--                <div class="platform-img-box">-->
                <!--                    <img class="platform-img" src="images/platforrm-img-2.png">-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->

                <!--<div class="col-md-12 mt-5 mb-4" data-aos="fade-right" data-aos-duration="2000">-->
                <!--    <div class="platform-box">-->
                <!--        <div class="row">-->
                <!--            <div class="col-md-2">-->
                <!--                <div class="platform-textbox">-->
                <!--                    <h1 class="career-title benefit-boxes-title platform-box-title">-->
                                        
                <!--                    </h1>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--            <div class="col-md-10">-->
                <!--                <div class="platform-img-box">-->
                <!--                    <img class="platform-img" src="images/platforrm-img-3.png">-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->

                <!--<div class="col-md-12 mt-5 mb-4" data-aos="fade-left" data-aos-duration="2000">-->
                <!--    <div class="platform-box">-->
                <!--        <div class="row">-->
                <!--            <div class="col-md-2">-->
                <!--                <div class="platform-textbox">-->
                <!--                    <h1 class="career-title benefit-boxes-title platform-box-title">-->
                                        
                <!--                    </h1>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--            <div class="col-md-10">-->
                <!--                <div class="platform-img-box">-->
                <!--                    <img class="platform-img" src="images/platforrm-img-4.png">-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->

                <!--<div class="col-md-12 mt-5 mb-4" data-aos="fade-right" data-aos-duration="2000">-->
                <!--    <div class="platform-box">-->
                <!--        <div class="row">-->
                <!--            <div class="col-md-2">-->
                <!--                <div class="platform-textbox">-->
                <!--                    <h1 class="career-title benefit-boxes-title platform-box-title">-->
                                       
                <!--                    </h1>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--            <div class="col-md-10">-->
                <!--                <div class="platform-img-box">-->
                <!--                    <img class="platform-img" src="images/platforrm-img-5.png">-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->

                <!--<div class="col-md-12 mt-5 mb-4" data-aos="fade-left" data-aos-duration="2000">-->
                <!--    <div class="platform-box">-->
                <!--        <div class="row">-->
                <!--            <div class="col-md-2">-->
                <!--                <div class="platform-textbox">-->
                <!--                    <h1 class="career-title benefit-boxes-title platform-box-title">-->
                                        
                <!--                    </h1>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--            <div class="col-md-10">-->
                <!--                <div class="platform-img-box">-->
                <!--                    <img class="platform-img" src="images/platforrm-img-6.png">-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->

                <!--<div class="col-md-12 mt-5 mb-4" data-aos="fade-right" data-aos-duration="2000">-->
                <!--    <div class="platform-box">-->
                <!--        <div class="row">-->
                <!--            <div class="col-md-2">-->
                <!--                <div class="platform-textbox">-->
                <!--                    <h1 class="career-title benefit-boxes-title platform-box-title">-->
                                       
                <!--                    </h1>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--            <div class="col-md-10">-->
                <!--                <div class="platform-img-box">-->
                <!--                    <img class="platform-img" src="images/platforrm-img-7.png">-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->

                <!--<div class="col-md-12 mt-5 mb-4" data-aos="fade-left" data-aos-duration="2000">-->
                <!--    <div class="platform-box">-->
                <!--        <div class="row">-->
                <!--            <div class="col-md-2">-->
                <!--                <div class="platform-textbox">-->
                <!--                    <h1 class="career-title benefit-boxes-title platform-box-title">-->
                                      
                <!--                    </h1>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--            <div class="col-md-10">-->
                <!--                <div class="platform-img-box">-->
                <!--                    <img class="platform-img" src="images/platforrm-img-8.png">-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->

                <!--<div class="col-md-12 mt-5 mb-4" data-aos="fade-right" data-aos-duration="2000">-->
                <!--    <div class="platform-box">-->
                <!--        <div class="row">-->
                <!--            <div class="col-md-2">-->
                <!--                <div class="platform-textbox">-->
                <!--                    <h1 class="career-title benefit-boxes-title platform-box-title">-->
                                       
                <!--                    </h1>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--            <div class="col-md-10">-->
                <!--                <div class="platform-img-box">-->
                <!--                    <img class="platform-img" src="images/platforrm-img-9.png">-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->

                <!--<div class="col-md-12 mt-5 mb-4" data-aos="fade-left" data-aos-duration="2000">-->
                <!--    <div class="platform-box">-->
                <!--        <div class="row">-->
                <!--            <div class="col-md-2">-->
                <!--                <div class="platform-textbox">-->
                <!--                    <h1 class="career-title benefit-boxes-title platform-box-title">-->
                                       
                <!--                    </h1>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--            <div class="col-md-10">-->
                <!--                <div class="platform-img-box">-->
                <!--                    <img class="platform-img" src="images/platforrm-img-10.png">-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->


            </div>
        </div>
        </div>
    </section>
    <!--- End Devops Tools & Platforms --->


    <!--- Programs Section --->
    <section class="platform-section position-relative">
        <div class="container">
            <div class="row align-items-center">
                <h1 class="career-title benefit-boxes-title"><?php echo the_field('main_heading_below'); ?>
                  
                </h1>
            </div>


            <div class="row align-itemm-center position-relative" data-aos="fade-right" data-aos-duration="2000">
                <div class="col-md-6">
                    <div class="program-box">
                        <div class="row program-row ">
                            <div class="col-md-9">
                                <div class="program-textbox">
                                    <p class="program-text">
                                        <?php echo the_field('description_here_below_1'); ?>
                                    </p>
                                </div>
								<img class="connector" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/connector.png">
                            </div>
                            
                            <div class="col-md-3 d-flex align-items-center">
                                <div class="program-img-box">
                                    <?php $imagess = get_field('select_number_image_below_1');  ?>
                                    <img class="program-num-img" src="<?php echo $imagess;  ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row align-itemm-center position-relative" data-aos="fade-left" data-aos-duration="2000">
                <div class="col-md-6"></div>
                <div class="col-md-6">
                    <div class="program-box">
                        <div class="row">
                            <div class="col-md-3 d-flex align-items-center">
                                <div class="program-img-box">
                                   <?php $imagett = get_field('select_number_image_below_2');  ?>
                                    <img class="program-num-img" src="<?php echo $imagett;  ?>">
                                </div>
                            </div>
                            
                            <div class="col-md-9">
								<img class="connector-2" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/connector.png">
                                <div class="program-textbox">
                                    <p class="program-text">
                                        <?php echo the_field('description_here_below_2'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row align-itemm-center position-relative" data-aos="fade-right" data-aos-duration="2000">
                <div class="col-md-6">
                    <div class="program-box">
                        <div class="row program-row">
                            <div class="col-md-9">
                                <div class="program-textbox">
                                    <p class="program-text">
                                        <?php echo the_field('description_here_below_3'); ?>
                                    </p>
                                </div>
								<img class="connector" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/connector.png">
                            </div>
                            
                            <div class="col-md-3 d-flex align-items-center">
                                <div class="program-img-box">
                                    
                                    <?php $imageuu = get_field('select_number_image_below_3');  ?>
                                    <img class="program-num-img" src="<?php echo $imageuu;  ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row align-itemm-center position-relative" data-aos="fade-left" data-aos-duration="2000">
                <div class="col-md-6"></div>
                <div class="col-md-6">
                    <div class="program-box">
                        <div class="row">
                            <div class="col-md-3 d-flex align-items-center">
                                <div class="program-img-box">
                                    <?php $imagevv = get_field('select_number_image_below_4');  ?>
                                    <img class="program-num-img" src="<?php echo $imagevv;  ?>">
                                </div>
                            </div>
                           
                            <div class="col-md-9">
								<img class="connector-2" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/connector.png">
                                <div class="program-textbox">
                                    <p class="program-text">
                                        <?php echo the_field('description_here_below_4'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row align-itemm-center position-relative" data-aos="fade-right" data-aos-duration="2000">
                <div class="col-md-6">
                    <div class="program-box">
                        <div class="row program-row">
                            <div class="col-md-9">
                                <div class="program-textbox">
                                    <p class="program-text">
                                         <?php echo the_field('description_here_below_5'); ?>
                                    </p>
                                </div>
								<img class="connector" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/connector.png">
                            </div>
                            
                            <div class="col-md-3 d-flex align-items-center">
                                <div class="program-img-box">
                                    <?php $imageww = get_field('select_number_image_below_5');  ?>
                                    <img class="program-num-img" src="<?php echo $imageww;  ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row align-itemm-center position-relative" data-aos="fade-left" data-aos-duration="2000">
                <div class="col-md-6"></div>
                <div class="col-md-6">
                    <div class="program-box">
                        <div class="row">
                            <div class="col-md-3 d-flex align-items-center">
                                <div class="program-img-box">
                                   <?php $imagexx = get_field('select_number_image_below_6');  ?>
                                    <img class="program-num-img" src="<?php echo $imagexx;  ?>">
                                </div>
                            </div>
                            
                            <div class="col-md-9">
								<img class="connector-2" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/connector.png">
                                <div class="program-textbox">
                                    <p class="program-text">
                                        <?php echo the_field('description_here_below_6'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row align-itemm-center position-relative" data-aos="fade-right" data-aos-duration="2000">
                <div class="col-md-6">
                    <div class="program-box">
                        <div class="row program-row">
                            <div class="col-md-9">
                                <div class="program-textbox">
                                    <p class="program-text">
                                        <?php echo the_field('description_here_below_7'); ?>
                                    </p>
                                </div>
								<img class="connector" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/connector.png">
                            </div>
                            
                            <div class="col-md-3 d-flex align-items-center">
                                <div class="program-img-box">
                                   <?php $imageyy = get_field('select_number_image_below_7');  ?>
                                    <img class="program-num-img" src="<?php echo $imageyy;  ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row align-itemm-center position-relative" data-aos="fade-left" data-aos-duration="2000">
                <div class="col-md-6"></div>
                <div class="col-md-6">
                    <div class="program-box">
                        <div class="row">
                            <div class="col-md-3 d-flex align-items-center">
                                <div class="program-img-box">
                                    <?php $imagezz = get_field('select_number_image_below_8');  ?>
                                    <img class="program-num-img" src="<?php echo $imagezz;  ?>">
                                </div>
                            </div>
                            
                            <div class="col-md-9">
								<img class="connector-2" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/connector.png">
                                <div class="program-textbox">
                                    <p class="program-text">
                                         <?php echo the_field('description_here_below_8'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row align-itemm-center position-relative" data-aos="fade-right" data-aos-duration="2000">
                <div class="col-md-6">
                    <div class="program-box">
                        <div class="row program-row">
                            <div class="col-md-9">
                                <div class="program-textbox">
                                    <p class="program-text">
                                        <?php echo the_field('description_here_below_9'); ?>
                                    </p>
                                </div>
								 <img class="connector" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/connector.png">
                            </div>
                           
                            <div class="col-md-3 d-flex align-items-center">
                                <div class="program-img-box">
                                   <?php $imageaz = get_field('select_number_image_below_9');  ?>
                                    <img class="program-num-img" src="<?php echo $imageaz;  ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>


        <img class="program-left-plant" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/design-2.png">
        <img class="program-right-plant" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/right-plant.png">
        <img class="program-chemical" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/chemical.png">
        <img class="program-white-ball" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/white-ball.png">
        <img class="program-white-ball-2" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/white-ball.png">
    </section>
    <!--- End Programs Section --->
    
             <?php
get_footer();