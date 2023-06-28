<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package deon
 */

get_header();
?>

   <!-- Banner Slider -->
    <section class="banner-section">
        <div class="container position-relative">
            <div class="row">
                <div class="col-md-12">
                    
                    
                     
                      
                    <div class="owl-4 owl-carousel owl-theme">
                        <?php if( have_rows ('home_banner_slider') ): ?>
                      <?php while( have_rows ('home_banner_slider') ): the_row();?>
                        <div class="item">
                            <div class="banner-box">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="banner-title-box">
                                            <h1 class="banner-title">
                                               <?php echo get_sub_field('banner_heading'); ?>
                                            </h1>
                                            <div class="row">
                                                <div class="col-sm-6">
  <?php 
$link = get_sub_field('button_1_link');
$link_text = get_sub_field('button_1_text');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link_text['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
                                                    
                                                    <a href="<?php echo esc_url( $link_url ); ?>" class="banner-btn-1" target="_blank"><?php echo esc_html( $link_text ); ?></a>
                                                    
                                                    <?php endif; ?>
                                                </div>
                                                
                                                <div class="col-sm-6">
  <?php 
$link = get_sub_field('button_2_link');
$link_text = get_sub_field('button_2_text');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link_text['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
                                                    
                                                    <a href="<?php echo esc_url( $link_url ); ?>" class="banner-btn-2" target="_blank"><?php echo esc_html( $link_text ); ?></a>
                                                    
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="banner-img-box">
                                            <?php $image1 = get_sub_field('banner_right_side_image'); ?>
                                            <img class="banner-img" src="<?php echo $image1; ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <?php endwhile; ?> <?php endif; ?>
                        
                      
                    </div>


                  
                </div>
            </div>
            
            
            
            <div class="follow-box">
                <h4 class="follow-text">
                    <?php echo the_field('follow_us'); ?>
                </h4>
                <ul class="follow-social-links">
                    <?php if(have_rows('follow_us_links')): ?>
                    <?php while(have_rows('follow_us_links')): the_row(); ?>
                    <li>
                       <?php $link = get_sub_field('instagram_link');
if( $link ):  $link_url = $link['url']; $link_target = $link['target'] ? $link['target'] : '_blank'; ?>

                        <a href="<?php echo esc_url( $link_url ); ?>" target="_blank"><i class="fa fa-instagram"></i></a>
                        <?php endif; ?>
                        </li>
                 
                    <li>
                         <?php $link = get_sub_field('twitter_link');
if( $link ):  $link_url = $link['url']; $link_target = $link['target'] ? $link['target'] : '_blank'; ?>

                        <a href="<?php echo esc_url( $link_url ); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                        <?php endif; ?>
                        </li>
                        
                        <li>
                         <?php $link = get_sub_field('facebook_link');
if( $link ):  $link_url = $link['url']; $link_target = $link['target'] ? $link['target'] : '_blank'; ?>

                        <a href="<?php echo esc_url( $link_url ); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                        <?php endif; ?>
                        </li>
                        
                        <li>
                         <?php $link = get_sub_field('linkedin_link');
if( $link ):  $link_url = $link['url']; $link_target = $link['target'] ? $link['target'] : '_blank'; ?>

                        <a href="<?php echo esc_url( $link_url ); ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
                        <?php endif; ?>
                        </li>
                    
                    
                       <?php endwhile; endif; ?>
                </ul>
            </div>
        </div>

    </section>
    <!-- End Banner Slider -->

    <!-- Logos Section -->
    <section class="Logos Section">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="logo-box">
                        <?php $image2 = get_field('select_image_h1'); ?>
                        <img class="logo-img" src="<?php echo $image2; ?>">
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="logo-box">
                        <?php $image3 = get_field('select_image_h2'); ?>
                        <img class="hub-img logo-img" src="<?php echo $image3; ?>">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="logo-box">
                        <p class="logo-desc">
                            <b><?php echo the_field('heading_h3'); ?>:</b><br><?php echo the_field('description_h4'); ?>
                        </p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="logo-box">
                        <p class="logo-desc">
                            <b><?php echo the_field('heading_h5'); ?>:</b><br><?php echo the_field('description_h6'); ?>
                        </p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="logo-box">
                        <p class="logo-desc">
                            <b><?php echo the_field('heading_h7'); ?>:</b><br><?php echo the_field('description_h8'); ?>
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="logo-box">
                        <p class="logo-desc">
                            <b><?php echo the_field('heading_h9'); ?></b> <?php echo the_field('description_h10'); ?>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Logos Section -->

    <!-- capabilities Section -->
    <section class="capabilities-sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="capabilities-desc-box">
                        <h1 class="capa-title" data-aos="fade-up"
                        data-aos-offset="300"
                        data-aos-easing="ease-in-sine" data-aos-duration="1100">
                            <?php echo the_field('main_heading_core')?> 
                        </h1>
                        <p class="capa-desc">
                           <?php echo the_field('description_here_core'); ?>
                        </p>
                    </div>

                    <div class="owl-carousel owl-1 owl-theme">
                        
                        <?php if( have_rows ('core_capability_slider') ): ?>
                      <?php while( have_rows ('core_capability_slider') ): the_row();?>
                        <div class="item">
                            <div class="capability-box">
                                <?php $image4 = get_sub_field('select_image_icon_core'); ?>
                                <img class="capa-img lock" src="<?php echo $image4; ?>">
                                <h3 class="capa-box-title">
                                    <?php echo get_sub_field('slider_heading_core'); ?></h3>
                                <p class="capa-box-desc">
                                    <?php echo get_sub_field('slider_description_core'); ?>
                                </p>
  <?php 
$link = get_sub_field('slider_button_link_core');
$link_text = get_sub_field('slider_button_text_core');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link_text['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
                                <a href="<?php echo esc_url( $link_url ); ?>" class="capa-btn"><?php echo esc_html( $link_text ); ?> <span class="arrow">&#8594;</span></a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php endwhile; endif; ?>
                        
                     
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Capabilities Section-->


    <!-- Counter Section -->
    <section class="counter-section">
        <div class="container">
            <div class="row counter-row" data-aos="fade-up"
            data-aos-offset="200"
            data-aos-easing="ease-in-sine" data-aos-duration="900">
                <div class="col-md-3">
                    <div class="counter-box counter-1">
                        <div class="row">
                            <div class="col-sm-4">
                                <span class="counter fw-bold display-5" 
                                    data-end-number="<?php echo get_field('counter_number_1'); ?>"></span>
                            </div>
                            <div class="col-sm-8">
                                <p class="lead" editable="inline"><?php echo the_field('counter_text_here_1'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="counter-box counter-1">
                        <div class="row">
                            <div class="col-sm-4">
                                <span class="counter fw-bold display-5" 
                                    data-end-number="<?php echo get_field('counter_number_2'); ?>"></span>
                            </div>
                            <div class="col-sm-8">
                                <p class="lead" editable="inline"><?php echo the_field('counter_text_here_2'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="counter-box counter-1">
                        <div class="row">
                            <div class="col-sm-5">
                                <span class="counter fw-bold display-5"
                                    data-end-number="<?php echo get_field('counter_number_3'); ?>"></span>
                            </div>
                            <div class="col-sm-7">
                                <p class="lead" editable="inline"><?php echo the_field('counter_text_here_3'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="counter-box counter-1">
                        <div class="row">
                            <div class="col-sm-5">
                                <span class="counter fw-bold display-5" 
                                    data-end-number="<?php echo get_field('counter_number_4'); ?>" data-time="50" data-format="{}"></span>
                            </div>
                            <div class="col-sm-7">
                                <p class="lead" editable="inline"><?php echo the_field('counter_text_here_4'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Counter Section -->
    
    
    <!--- Plus Section -->
    <div id="trigger1" class="spacer s0"></div>
    <section class="posibilities-section section-animation" id="pin1">
        <div class="page-main page-current">
            <div class="page-toload home" data-bodyClass="home">
                <main role="main">
                    <div id="home-start">
                        <div class="home-start-fixed parallax-b parallax-home-start">
                            <div class="parallax-b-layer"></div>
                            <div class="block-bg-cover parallax-b-layer">
                              
                                <div class="container">
                                    <div class="row why-row">
                                        <div class="col-md-6">
                                            <div class="why-img-box">
                                               <?php $image5 = get_field('ihealth_left_image'); ?>
                                                <img class="why-img" src="<?php echo $image5; ?>" data-aos="fade-right"
                                                data-aos-offset="300"
                                                data-aos-easing="ease-in-sine" data-aos-duration="1100">
                
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="why-desc-box">
                                                <h1 class="why-title" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine"
                                                    data-aos-duration="1100">
                                                    <?php echo the_field('heading_here_ihealth'); ?>
                                                </h1>
                                                <p class="why-desc">
                                                    <?php echo the_field('description_here_ihealth'); ?>
                                                </p>
                                                  <?php 
$link = get_field('button_link_ihealth');
$link_text = get_field('button_text_ihealth');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link_text['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
                                                <a href="<?php echo esc_url( $link_url ); ?>" class="why-btn"><?php echo esc_html( $link_text ); ?> <span class="arrow">&#8594;</span></a>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="bg-p">
                                <svg class="home-p" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000"
                                    style="enable-background:new 0 0 1000 1000;" xml:space="preserve">
                                    <style type="text/css">
                                        .st0 {
                                            fill: #75ddfc;
                                        }
                                    </style>
                                    <path class="st0"
                                        d="M-735.3-0.6v1001.1H1733V-0.6H-735.3z M718.5,471h-184v187h-54V471h-186v-54h186V234h54V417h184V471z" />
                                </svg>

                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <!-- 
       <div class="container align-hor">
           <svg xmlns="http://www.w3.org/2000/svg" width="739.475" height="709.822" viewBox="0 0 739.475 709.822"><path d="M0,0H93.959V279.488H0Z" transform="translate(322.732)" fill="#e8170b"/><path d="M0,0H99.031V265.173H0Z" transform="translate(739.475 304.244) rotate(90)" fill="#e8170b"/><path d="M0,265.173H99.031V0H0Z" transform="translate(265.173 304.244) rotate(90)" fill="#e8170b"/><path d="M0,279.488H93.959V0H0Z" transform="translate(322.732 430.334)" fill="#e8170b"/></svg>
       </div> -->

    </section>
    <!--- End Plus Section -->


    <!-- Why Section -->
    <!--<section class="why-section">-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="col-md-6">-->
    <!--                <div class="why-img-box">-->
    <!--                    <div class="why-img-container">-->
    <!--                        <img class="why-img" src="images/why-img.png">-->
    <!--                        <img class="why-img" src="images/why-img.png">-->
    <!--                        <img class="why-img" src="images/why-img.png">-->
    <!--                        <img class="why-img" src="images/why-img.png">-->
    <!--                      </div>-->
                        <!-- <img class="why-img" src="images/why-img.png" data-aos="fade-right"
    <!--                    data-aos-offset="300"-->
    <!--                    data-aos-easing="ease-in-sine" data-aos-duration="1100"> -->
                        
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-md-6">-->
    <!--                <div class="why-desc-box">-->
    <!--                    <h1 class="why-title" data-aos="fade-up"-->
    <!--                    data-aos-offset="300"-->
    <!--                    data-aos-easing="ease-in-sine" data-aos-duration="1100">-->
    <!--                        <span>Why</span> iHealth?-->
    <!--                    </h1>-->
    <!--                    <p class="why-desc">-->
    <!--                        Since our inception, our mission and focus has been to bridge the gap between health and-->
    <!--                        technology by delivering innovative IT solutions and professional services throughout the-->
    <!--                        healthcare community. By leveraging such solutions, we have been able to help organizations-->
    <!--                        build sustainable systems, improve care and outcomes by transforming data, and developing-->
    <!--                        Security Intelligence Platforms.-->
    <!--                    </p>-->
    <!--                    <a class="why-btn">Learn More <span class="arrow">&#8594;</span></a>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <!-- End Why Section -->

    <!-- Video Section -->
    <section class="video-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="video-title-box">
                        <h1 class="video-title">
                            <?php echo the_field('main_heading_tempor'); ?>
                        </h1>
                        <p class="video-desc">
                          <?php echo the_field('description_here_tempor'); ?>
                        </p>
                    </div>
                    <div class="video-box">
                      
       <?php                                            // Get the video link value from ACF
$video_link = get_field('video_link_here_tempor');

// Check if a video link is available
if ($video_link) {
    echo '<video  src="' . esc_url($video_link) . '" poster="https://onecontentpro.com/ihealthis-final/wp-content/uploads/2023/06/video-bg.png" controls></video>';
}
?>
                       

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Video Section -->


    <!-- Testimonial Section -->
    <section class="testimonial-section">
        <div class="container">
            <div class="row">
                <div class="testi-title-box">
                    <h1 class="testi-title" data-aos="fade-up"
                    data-aos-offset="300"
                    data-aos-easing="ease-in-sine" data-aos-duration="1100">
                       <?php echo the_field('main_heading_testi_2'); ?>
                    </h1>
                    <p class="testi-desc">
                         <?php echo the_field('description_here_testi_3'); ?>
                    </p>
                </div>
                <div class="col-md-12">
                    <div class="owl-carousel owl-2 owl-theme">
                        
                        <?php if(have_rows('client_feeds')): ?>
                        <?php while(have_rows('client_feeds')) :the_row(); ?>
                        <div class="item">
                            <div class="testi-box">
                                <p class="testi-review">
                                     <?php echo get_sub_field('client_feedback_here'); ?>
                                    <strong>  <?php echo get_sub_field('name_designation_here'); ?></strong>
                                </p>
                            </div>
                        </div>
                        <?php  endwhile; endif; ?>
                        <!--<div class="item">-->
                        <!--    <div class="testi-box">-->
                        <!--        <p class="testi-review">-->
                        <!--            “iHealth has consistently demonstrated an innovative approach in developing and implementing tools of high quality in support for the NIH Enterprise Life Cycle Process Management Office (ELCPMO) in a professional and timely manner. iHealth’s overall performance has been exemplified in their attention to our needs and the quality of service provided.”<br><br>-->

                        <!--            <strong> Jonathan Wellsbury, COTR, National Institute of Health</strong>-->
                        <!--        </p>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--<div class="item">-->
                        <!--    <div class="testi-box">-->
                        <!--        <p class="testi-review">-->
                        <!--            “We had a clear vision to reach our customers not only through “normal” web channels but also to address the growing customer usage of smartphones. With help from iHealth experts we developed a mobile platform based on iOS and Android which gives the user a mobile experience with the goal of making them contact a local provider for appointments and patient records, has yielded success from our customer base.”<br><br>-->

                        <!--            <strong> Henrik Nylander, IT Manager, Octapharma AG</strong>-->
                        <!--        </p>-->
                        <!--    </div>-->
                        <!--</div>-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonial Section -->

    <!-- News Section -->
    <section class="news-section">
        <div class="container-fluid">
            <div class="row">
                <div class="owl-carousel owl-3 owl-theme">
                    <div class="item">
                        <div class="news-box-first">
                            <h1 class="news-title">
                                <span>Latest</span> News
                            </h1>
                            <p class="news-desc">
                                There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form, by injected humour, or randomised words
                            </p>
                            <a class="news-btn">Learn More <span class="arrow">&#8594;</span></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="news-box">
                            <p class="img-number">01</p>
                            <h4 class="news-box-title">
                                Lorem Ipsum
                            </h4>
                            <p class="news-desc">
                                There are many variations passages of Lorem Ipsum available. but the majority have
                                suffered.
                            </p>
                            <a class="news-box-btn">Learn More <span class="arrow">&#8594;</span></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="news-box">
                            <p class="img-number">02</p>
                            <h4 class="news-box-title">
                                Lorem Ipsum
                            </h4>
                            <p class="news-desc">
                                There are many variations passages of Lorem Ipsum available. but the majority have
                                suffered.
                            </p>
                            <a class="news-box-btn">Learn More <span class="arrow">&#8594;</span></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="news-box">
                            <p class="img-number">03</p>
                            <h4 class="news-box-title">
                                Lorem Ipsum
                            </h4>
                            <p class="news-desc">
                                There are many variations passages of Lorem Ipsum available. but the majority have
                                suffered.
                            </p>
                            <a class="news-box-btn">Learn More <span class="arrow">&#8594;</span></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="news-box">
                            <p class="img-number">04</p>
                            <h4 class="news-box-title">
                                Lorem Ipsum
                            </h4>
                            <p class="news-desc">
                                There are many variations passages of Lorem Ipsum available. but the majority have
                                suffered.
                            </p>
                            <a class="news-box-btn">Learn More <span class="arrow">&#8594;</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End News Section -->
<?php
get_footer();
