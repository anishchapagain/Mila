<?php
/*
 * Template Name: HomePage-Mila
 */

//Load Header
get_header();
$custom_val = get_post_custom();
?>


<header id="sticky-header"> 
    <!-- Static navbar -->
    <div class="navbar navbar-default" role="navigation">
        <div class="container-fluid">

            <div class="logo-main"> 
                <?php echo types_render_field('web-logo', array('alt' => 'Mila Thread Logo', 'title' => 'Mila Thread Logo')); ?>
            </div>

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>

            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="#home" class="topdownscroll">Home</a></li>
                    <li><a href="#whyus" class="topdownscroll">About us</a></li>
                    <li><a href="#services" class="topdownscroll">Services</a></li>
                    <li><a href="#team" class="topdownscroll">Our Team</a></li>
                    <li><a href="#career" class="topdownscroll">Career</a></li>
                    <li><a href="#appointment" class="topdownscroll">Appointment</a></li>
                    <li><a href="#contact" class="topdownscroll">Contact us</a></li>           
                </ul>
            </div>
            <!--/.nav-collapse --> 
        </div>
        <!--/.container-fluid --> 
    </div>
</header>
<!-- Ends: Header--> 


<!--<section id="video">
    <a href="#" class="video_play_btn" data-featherlight="#yt_video">
        <img src="<?php echo get_bloginfo('template_directory'); ?>/images/video_play.png" width="176" height="176" alt="">
    </a>
</section>-->
<div class="customLightbox">
    <iframe width="854" height="510" src="//www.youtube.com/embed/pKqVpWpFEn8" frameborder="0" allowfullscreen></iframe>
    <a href="#" class="popup-close">Closebtn</a></div>
<div class="clearfix"></div>


<!--header-->

<section id="saying">
    <div class="content__Wrap">
        <p><?php echo types_render_field('quote-text', $params); ?> <strong> <?php echo types_render_field('quote-writer', $params); ?></strong></p> 
    </div>
</section>

<div class="clearfix"></div>

<!-- 
Section: Slider 
-->
<section id="main__banner">
    <div id="slides">
        <ul class="slides-container">  
            <?php
            $args = array('post_type' => 'slider', 'posts_per_page' => 10);
            $loop = new WP_Query($args);
            while ($loop->have_posts()) :
                $loop->the_post();
                $custom = get_post_custom(get_the_ID());
                ?>
                <li><img src="<?php echo $custom['wpcf-images'][0]; ?>" alt="" /></li>            
            <?php endwhile; ?>    
        </ul>
        <nav class="slides-navigation"> <a href="#" class="next">Next</a> <a href="#" class="prev">Previous</a> </nav>
    </div>
</section>
<!-- //Ends: Section: Slider -->

<!-- 
Section: About Us 
About Us Title
About Us Content
About Us Heading
-->
<section id="whyus">
    <div class="content__Wrap">
        <?php
        $args1 = array('post_type' => 'about', 'posts_per_page' => 0);
        $loop1 = new WP_Query($args1);
        while ($loop1->have_posts()) :
            $loop1->the_post();
            $custom1 = get_post_custom(get_the_ID());
            ?>
            <h1><?php echo $custom1['wpcf-about-us-title'][0]; ?></h1>         
            <h2><?php echo $custom1['wpcf-about-us-heading'][0]; ?></h2>
            <p><?php echo $custom1['wpcf-about-us-content'][0]; ?></p> 
            <article>
                <ul>
                    <?php
                    for ($i = 0; $i < count($custom1['wpcf-about-us-image-heading']); $i++):
                        ?>
                        <li>
                            <h4><?php echo $custom1['wpcf-about-us-image-heading'][$i]; ?></h4>
                            <div class="artical__thumb wow wow fadeInRight">
                                <img src="<?php echo $custom1['wpcf-about-us-image'][$i]; ?>" alt="<?php echo $custom1['wpcf-about-us-image-heading'][$i]; ?>" />   
                            </div>
                        </li>
                    <?php endfor; ?>
                </ul>
            </article>
            <?php
        endwhile;
        ?>
    </div>
</section>
<!-- //Ends: Section: About Us -->


<section id="teamParallax" data-speed="8" data-type="background">
</section>


<!-- 
Section: Our Services 
Service Title
Service Images
Service Headings
-->
<section id="services">
    <div class="content__Wrap ">
        <?php
        $service = array('post_type' => 'our-service', 'posts_per_page' => 0);
        $our_service = new WP_Query($service);
        while ($our_service->have_posts()) :
            $our_service->the_post();
            $custom2 = get_post_custom(get_the_ID());
            ?>
            <h1><?php echo $custom2['wpcf-our-services'][0]; ?></h1>
            <article>
                <ul>
                    <?php
                    for ($i = 0; $i < count($custom2['wpcf-service-headings']); $i++):
                        ?>
                        <li>                            
                            <div class="artical__thumb wow fadeInLeft" data-wow-delay="0.<?php echo $i * 4; ?>s">
                                <img src="<?php echo $custom2['wpcf-service-images'][$i]; ?>" alt="<?php echo $custom2['wpcf-service-images'][$i]; ?>" />   
                            </div>
                            <h3><?php echo $custom2['wpcf-service-headings'][$i]; ?></h3>
                        </li>
                    <?php endfor; ?>
                </ul>
            </article>
            <?php
        endwhile;
        ?>
        <div class="clearfix"></div>
        <?php
        /*
         * Page Content : Our Services
         * Page Id: 51
         */
        $the_query = new WP_Query('page_id=51');
        while ($the_query->have_posts()):
            $the_query->the_post();                    //the_title();
            the_content();
        endwhile;
        wp_reset_postdata();
        ?>
    </div>
</section>
<!-- //Ends: Section: Our Services -->

<?php
/*
 * Page Content : Our Services Pricing
 * $the_query1 = new WP_Query($args);
 * $the_query1->post->ID;
 * $the_query1->post->post_name;
 * $the_query1->post->post_title;
 * Page Id: 54
 * [post_title] => Our Services Pricing           
 * [post_status] => publish 
 * [post_name] => our-services-pricing                    
 * [post_type] => page
 */
$args = array(
    'post_type' => 'page',
    'name' => 'our-services-pricing',
    'post_status' => 'publish'
);
$the_query1 = new WP_Query($args);
if ($the_query1->have_posts()) {
    ?>
    <section id="pricing">
        <div class="content__Wrap ">
            <?php
            while ($the_query1->have_posts()):
                $the_query1->the_post();
                the_content();
            endwhile;
            wp_reset_postdata();
            ?>
            <div class="content__Wrap service_demand">Service on Demand <br>(Bridal Makeup, Henna Tattoo at Home Service  Available By Appointment)</div>
        </div>
    </section>
    <?php
//End Page Content: Our Services Pricing
}
?>


<!-- 
Section: Our Team 
Our Team Title
Our Team Heading
Team Images
Team Images Headings
Team Images Details
-->
<section id="team">
    <div class="content__Wrap ">
        <?php
        $args3 = array('post_type' => 'our-team', 'posts_per_page' => 0);
        $loop3 = new WP_Query($args3);
        while ($loop3->have_posts()) :
            $loop3->the_post();
            $custom3 = get_post_custom(get_the_ID());
            ?>
            <h1><?php echo $custom3['wpcf-our-team-title'][0]; ?></h1>
            <div class="biotext wow fadeInRight"><strong><?php echo $custom1['wpcf-our-team-heading'][0]; ?></strong></div>
            <article>
                <ul>
                    <?php
                    for ($i = 0; $i < count($custom3['wpcf-team-images']); $i++):
                        ?>
                        <li>                            
                            <div class="artical__thumb wow wow fadeInRight">
                                <img src="<?php echo $custom3['wpcf-team-images'][$i]; ?>" alt="<?php echo $custom3['wpcf-team-images'][$i]; ?>" />   
                            </div>
                            <h3><?php echo $custom3['wpcf-team-images-heading'][$i]; ?></h3>
                            <div class="member__info"> </div>
                            <p><?php echo $custom3['wpcf-team-images-details'][$i]; ?></p>
                        </li>
                    <?php endfor; ?>
                </ul>
            </article>
            <?php
        endwhile;
        ?>
    </div>
</section>
<!-- //Ends: Section: Our Team -->

<div class="clearfix"></div>

<!-- 
Section: Career Opportunity
Career Title
Career Details
-->
<section id="career">
    <?php
    $args_career = array('post_type' => 'career', 'posts_per_page' => 0);
    $loop_career = new WP_Query($args_career);
    while ($loop_career->have_posts()) :
        $loop_career->the_post();
        $custom_career = get_post_custom(get_the_ID());
        ?>
        <h1><?php echo $custom_career['wpcf-career-title'][0]; ?></h1>
        <div class="mila_info">
            <?php echo $custom_career['wpcf-career-details'][0]; ?>
        </div>
        <?php
    endwhile;
    ?>
</section>
<!-- //Ends: Section: Career Opportunity -->

<!---->
<section id="appointment">
    <div class="content__Wrap">
        <h1>Schedule <span> Appointment</span></h1>
        <form name="contact" action="sendmail.php" method="post"> 
            <div class="form__wrpp  wow slideInLeft">
                <fieldset>
                    <input type="text" name="fullname" id="fullname" placeholder="Name" required>
                    <input type="text" name="email" id="email" placeholder="Email" required>
                    <input type="text" name="phone" id="phone" placeholder="Phone">
                    <input type="text" name="address" id="address" placeholder="Phone">
                </fieldset>
            </div>
            <div class="form__wrpp zero-margin wow slideInRight">
                <fieldset>
                    <textarea name="message" id="message" placeholder="Message" required></textarea>
                </fieldset>
            </div>
            <div>
                <button type="submit" class="form__Submit wow slideInDown">Submit</button>
            </div>
    </div>
</form>
</section>

<!---->

<div class="clearfix"></div>
<section id="contact">
    <div class="content__Wrap">
        <h1 class="wow slideInLeft">Contact <span>Us</span></h1>
        <div class="row address_wrapp">
            <div class="col-md-4 wow fadeInRight">
                <div class="location"> 4667 Morse Center Road <br>
                    Columbus, OH 43229 <br>
                    United States </div>
            </div>
            <div class="col-md-4 wow fadeInRight" data-wow-delay="0.4s">
                <div class="phn"> Phone: (614) 985 - 1890<br>
                    Video Phone: (641) 429 - 1467 </div>
                <div class="emailIcon"> Email: <a href="mailto:urmila@milathreading.com">urmila@milathreading.com</a><br>
                    website: <a href="http://www.milathreading.com">www.milathreading.com</a> </div>
            </div>
            <div class="col-md-4 wow fadeInRight"  data-wow-delay="0.8s">
                <div class="open__Time"> Monday to Saturday: 10:00am → 8:30pm <br>
                    Sunday: 11:00am to 7:00pm </div>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <section id="address__parallax" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -100px;" data-speed="10" data-type="background"></section>
    <div class="gmap">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3053.675869253218!2d-82.9631735!3d40.0603338!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88388b0f25bb60d5%3A0x50ea7cd5a06904e7!2s4667+Morse+Centre+Rd!5e0!3m2!1sen!2s!4v1404809108842" ></iframe>
    </div>
</section>


    <!--<section id="contactParallax"></section>-->

<section id="thanks_bg">
    <div class="content__Wrap">
        <h1 class="wow slideInLeft">Thank you for visiting our website. <br>We appreciate your business.</h1>
    </div>
</section>

<section id="copy__right">
    <div class="content__Wrap">
        <div class="row">
            <div class="col-md-6 pull-left text-left">
                <p><?php echo $custom_val['wpcf-footer'][0]; ?></p>   
        <!--<p>Copyright © 2014, Mila Thread. ALL RIGHTS RESERVED</p>Website designed and developed by Belhi Designs-->
            </div>

            <div class="col-md-6 pull-right">
                <figure class="social_icons">
                    <ul>
                        <li><a href="<?php echo $custom_val['wpcf-facebook-url'][0]; ?>" class="fb" target="_blank"></a></li>
                        <li><a href="<?php echo $custom_val['wpcf-youtube-url'][0]; ?>" class="yt" target="_blank"></a></li>
                        <li><a href="<?php echo $custom_val['wpcf-twitter-url'][0]; ?>" class="gp" target="_blank"></a></li>
                        <li><a href="<?php echo $custom_val['wpcf-yelp-url'][0]; ?>" class="yelp" target="_blank"></a></li>
                    </ul>
                </figure>
            </div>
        </div>   
    </div>
</section>

<?php
//Loads Footer
get_footer();
?>