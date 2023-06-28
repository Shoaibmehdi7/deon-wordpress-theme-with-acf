<?php /* Template Name: social corporate responsibility */


get_header();
?>




  <!-- Banner Section -->
    <section class="ihealth-banner-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="health-social-title-box">
                        <h1 class="health-social-title" data-aos="fade-up" data-aos-offset="300"
                            data-aos-easing="ease-in-sine" data-aos-duration="1100">
                            <?php echo the_field('main_heading_social'); ?>
                        </h1>
                    </div>
                    <div class="ihealth-img-box">
                        <?php $imagea = get_field('select_image_social'); ?>
                        <img class="ihealthbanner-img" src="<?php echo $imagea; ?>">
                    </div>
                </div>
            </div>
        </div>
        <img class="left-side-ihealth" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/ihealth-social-left-img.png" data-aos="fade-right"
            data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1100">
        <img class="right-side-ihealth" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/ihealth-social-right-img.png" data-aos="fade-left"
            data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="1100">
    </section>
    <!-- End Banner Section -->

    <!-- iHealth Second Sec -->
    <section class="ihealth-second-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="ihealth-social-desc-box">
                        <p class="ihealth-social-desc"> <?php echo the_field('description_here_social'); ?>
                          
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <img class="ihealth-left-plant" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/design-2.png">
        <img class="ihealth-right-spiral" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/design-1.png">
    </section>
    <!-- End iHealth Second Sec -->

    <!-- iHealth Commitment Section -->
    <section class="commit-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="commit-title-box">
                        <h1 class="commit-title"> <?php echo the_field('main_heading_create'); ?>
                           
                        </h1>
                        <p class="commit-desc"> <?php echo the_field('description_here_create'); ?>
                           
                        </p>
                    </div>
                </div>
            </div>
            <div class="row commit-boxes-row">
                
                <?php if (have_rows('number_boxes_create')) : ?>
                <?php while(have_rows('number_boxes_create')) : the_row(); ?>
                <div class="col-md-4 moxi-0">
                    <div class="commit-box">
                         <?php $imageb = get_sub_field('select_number_icon_create'); ?>
                        <img class="commit-num-img" src="<?php echo $imageb; ?>">
                        
                        <img class="commit-dotted-line" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/dotted-line.png">
                        <h4 class="commit-head"> <?php echo get_sub_field('sub_heading_create'); ?>
                           
                        </h4>
                        <p class="commit-box-desc"> <?php echo get_sub_field('sub_description_here_create'); ?>
                          
                        </p>
                    </div>
                </div>
                <?php endwhile; endif; ?>
                <!--<div class="col-md-4">-->
                <!--    <div class="commit-box commit-box-2">-->
                <!--        <img class="commit-num-img" src="images/commit-num-2.png">-->
                <!--        <img class="commit-dotted-line" src="images/dotted-line.png">-->
                <!--        <h4 class="commit-head">-->
                <!--            Environmental sustainability-->
                <!--        </h4>-->
                <!--        <p class="commit-box-desc">-->
                <!--            iHealth should strive to reduce its environmental impact by implementing sustainable-->
                <!--            practices in its operations. This can include reducing waste and emissions, using renewable-->
                <!--            energy sources, and promoting sustainable transportation.-->
                <!--        </p>-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="col-md-4">-->
                <!--    <div class="commit-box">-->
                <!--        <img class="commit-num-img" src="images/commit-num-3.png">-->
                <!--        <img class="commit-dotted-line" src="images/dotted-line.png">-->
                <!--        <h4 class="commit-head">-->
                <!--            Community engagement-->
                <!--        </h4>-->
                <!--        <p class="commit-box-desc">-->
                <!--            iHealth should actively engage with the communities it serves and support local initiatives-->
                <!--            that promote health and well-being. This can include sponsoring health fairs and events,-->
                <!--            volunteering time and resources, and partnering with local organizations.-->
                <!--        </p>-->
                <!--    </div>-->
                <!--</div>-->
            </div>
            <!--<div class="row commit-boxes-row">-->
            <!--    <div class="col-md-4">-->
            <!--        <div class="commit-box">-->
            <!--            <img class="commit-num-img" src="images/commit-num-4.png">-->
            <!--            <img class="commit-dotted-line" src="images/dotted-line.png">-->
            <!--            <h4 class="commit-head">-->
            <!--                Diversity and inclusion-->
            <!--            </h4>-->
            <!--            <p class="commit-box-desc">-->
            <!--                iHealth should embrace diversity and promote inclusion in its workplace and operations. This-->
            <!--                includes providing equal opportunities to all employees, ensuring that its products and-->
            <!--                services are accessible to all, and promoting diversity in its supply chain.-->
            <!--            </p>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--    <div class="col-md-4">-->
            <!--        <div class="commit-box commit-box-2">-->
            <!--            <img class="commit-num-img" src="images/commit-num-5.png">-->
            <!--            <img class="commit-dotted-line" src="images/dotted-line.png">-->
            <!--            <h4 class="commit-head">-->
            <!--                Philanthropy-->
            <!--            </h4>-->
            <!--            <p class="commit-box-desc">-->
            <!--                iHealth can show corporate responsibility by donating a portion of its profits to charitable-->
            <!--                causes. This can include supporting health-related charities or initiatives that promote-->
            <!--                social and environmental causes.-->
            <!--            </p>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--    <div class="col-md-4">-->
            <!--        <div class="commit-box">-->
            <!--            <img class="commit-num-img" src="images/commit-num-6.png">-->
            <!--            <img class="commit-dotted-line" src="images/dotted-line.png">-->
            <!--            <h4 class="commit-head">-->
            <!--                Product responsibility-->
            <!--            </h4>-->
            <!--            <p class="commit-box-desc">-->
            <!--                iHealth should ensure that its products and services are safe, effective, and meet the needs-->
            <!--                of its customers. This includes conducting rigorous testing and ensuring that its products-->
            <!--                comply with relevant laws and regulations.-->
            <!--            </p>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
            <!--<div class="row commit-boxes-row">-->
            <!--    <div class="col-md-4">-->
            <!--        <div class="commit-box">-->
            <!--            <img class="commit-num-img" src="images/commit-num-7.png">-->
            <!--            <img class="commit-dotted-line" src="images/dotted-line.png">-->
            <!--            <h4 class="commit-head">-->
            <!--                Employee well-being-->
            <!--            </h4>-->
            <!--            <p class="commit-box-desc">-->
            <!--                iHealth should prioritize the well-being of its employees by providing a safe and healthy-->
            <!--                workplace, offering competitive benefits and compensation packages, and promoting work-life-->
            <!--                balance.-->
            <!--            </p>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--    <div class="col-md-4">-->
            <!--        <div class="commit-box commit-box-2">-->
            <!--            <img class="commit-num-img" src="images/commit-num-8.png">-->
            <!--            <img class="commit-dotted-line" src="images/dotted-line.png">-->
            <!--            <h4 class="commit-head">-->
            <!--                Data privacy and security-->
            <!--            </h4>-->
            <!--            <p class="commit-box-desc">-->
            <!--                As a healthcare company, iHealth deals with sensitive patient data. Therefore, it should-->
            <!--                prioritize data privacy and security by implementing robust data protection measures,-->
            <!--                complying with relevant regulations, and being transparent about its data practices.-->
            <!--            </p>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--    <div class="col-md-4">-->
            <!--        <div class="commit-box">-->
            <!--            <img class="commit-num-img" src="images/commit-num-9.png">-->
            <!--            <img class="commit-dotted-line" src="images/dotted-line.png">-->
            <!--            <h4 class="commit-head">-->
            <!--                Supplier responsibility-->
            <!--            </h4>-->
            <!--            <p class="commit-box-desc">-->
            <!--                iHealth should ensure that its suppliers and partners also adhere to ethical and sustainable-->
            <!--                business practices. This can include conducting supplier audits, requiring suppliers to meet-->
            <!--                certain standards, and promoting sustainability throughout its supply chain.-->
            <!--            </p>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
            <div class="row commit-boxes-row-last">
                <div class="col-md-12">
                    <div class="commit-box commit-box-10">
                        <?php $imagec = get_field('select_number_image_create_last'); ?>
                        <img class="commit-num-img" src="<?php echo $imagec; ?>">
                        
                        
                        <img class="commit-dotted-line" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/dotted-line.png">
                        <h4 class="commit-head">  <?php echo the_field('sub_heading_create_1'); ?>
                            
                        </h4>
                        <p class="commit-box-desc"> <?php echo the_field('sub_description_here_create_1'); ?>
                           
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <img class="commit-left-design" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/pro-design-left.png">
        <img class="commit-right-design" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/pro-design-right.png">
    </section>
    <!-- End iHealth Commitment Section -->

    <!-- Campaigns Section -->
    <section class="campaign-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="campaign-title-box">
                        <h1 class="campaign-title" data-aos="fade-up" data-aos-offset="300"
                            data-aos-easing="ease-in-sine" data-aos-duration="1100"> <?php echo the_field('main_heading_camp'); ?>
                            
                        </h1>
                    </div>
                </div>
            </div>
            <div class="row campaign-row align-items-center">
                <div class="col-md-6">
                    <div class="campaign-text-box">
                        <h5 class="campaign-top-head"><?php echo the_field('top_title_camp_1'); ?>
                           
                        </h5>
                        <h1 class="campaign-textbox-title"> <?php echo the_field('heading_here_camp_1'); ?>
                           
                        </h1>
                        <p class="campaign-box-desc"> <?php echo the_field('description_here_camp_1'); ?>
                            
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="campaign-img-box">
                        <?php $imaged = get_field('select_image_camp_1'); ?>
                        <img class="campaign-img" src="<?php echo $imaged; ?>" data-aos="fade-left"
                            data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="2000">
                    </div>
                </div>
            </div>
            <div class="row campaign-row-2 align-items-center">
                <div class="col-md-6">
                    <div class="campaign-img-box">
                        <?php $imagee = get_field('select_image_camp_2'); ?>
                        <img class="campaign-img" src="<?php echo $imagee; ?>" data-aos="fade-right"
                            data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="2000">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="campaign-text-box">
                        <h5 class="campaign-top-head"> <?php echo the_field('top_title_camp_2'); ?>
                           
                        </h5>
                        <h1 class="campaign-textbox-title"> <?php echo the_field('heading_here_camp_2'); ?>
                           
                        </h1>
                        <p class="campaign-box-desc"> <?php echo the_field('description_here_camp_2'); ?>
                          
                        </p>
                    </div>
                </div>
            </div>
            <div class="row campaign-row-3 align-items-center">
                <div class="col-md-6">
                    <div class="campaign-text-box">
                        <h5 class="campaign-top-head"><?php echo the_field('top_title_camp_3'); ?>
                            
                        </h5>
                        <h1 class="campaign-textbox-title"><?php echo the_field('heading_here_camp_3'); ?>
                          
                        </h1>
                        <p class="campaign-box-desc"><?php echo the_field('description_here_camp_3'); ?>
                            
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="campaign-img-box">
                        <?php $imagef = get_field('select_image_camp_3'); ?>
                        <img class="campaign-img" src="<?php echo $imagef; ?>" data-aos="fade-left"
                            data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="2000">
                    </div>
                </div>
            </div>
            <div class="row campaign-row-4 align-items-center">
                <div class="col-md-6">
                    <div class="campaign-img-box">
                         <?php $imageg = get_field('select_image_camp_4'); ?>
                        <img class="campaign-img" src="<?php echo $imageg; ?>" data-aos="fade-right"
                            data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="2000">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="campaign-text-box">
                        <h5 class="campaign-top-head"><?php echo the_field('top_title_camp_4'); ?>
                          
                        </h5>
                        <h1 class="campaign-textbox-title"><?php echo the_field('heading_here_camp_4'); ?>
                            
                        </h1>
                        <p class="campaign-box-desc"><?php echo the_field('description_here_camp_4'); ?>
                           
                        </p>
                    </div>
                </div>
            </div>
            <div class="row campaign-row-5 align-items-center">
                <div class="col-md-6">
                    <div class="campaign-text-box">
                        <h5 class="campaign-top-head"><?php echo the_field('top_title_camp_5'); ?>
                           
                        </h5>
                        <h1 class="campaign-textbox-title"><?php echo the_field('heading_here_camp_5'); ?>
                            
                        </h1>
                        <p class="campaign-box-desc"><?php echo the_field('description_here_camp_5'); ?>
                            
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="campaign-img-box">
                        <?php $imageh = get_field('select_image_camp_5'); ?>
                        <img class="campaign-img campaign-img-5" src="<?php echo $imageh; ?>" data-aos="fade-left"
                            data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="2000">
                    </div>
                </div>
            </div>
        </div>
        <img class="campain-left-design" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/pro-design-left.png">
        <img class="campain-right-design" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/pro-design-right.png">
        <img class="campaign-left-spiral" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/design-1.png">
        <img class="right-cube" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/cube-right.png">
        <img class="left-cube" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/cube-left.png">
        <img class="campaign-right-spiral" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/design-1.png">
        <img class="campaign-left-spiral2" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/design-1.png">
        <img class="left-cube2" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/cube-left.png">
        <img class="right-cube2" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/cube-right.png">
        <img class="campaign-left-plant" src="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/design-2.png">
    </section>
    <!-- End Campaigns Section -->

    
    
         <?php
get_footer();