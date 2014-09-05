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
    <!----> 
</header>


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
                    <?php for ($i = 0; $i < count($custom1['wpcf-about-us-image-heading']); $i++): ?>
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


    <section id="teamParallax" data-speed="8" data-type="background">
    </section>



    <section id="services">
        <div class="content__Wrap ">
            <h1>Our <span>Sevices</span></h1>
            <article>
                <ul>
                    <li>
                        <div class="artical__thumb wow fadeInLeft"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/serviceImg1.jpg" alt=""></div>
                        <h3>Threading</h3>
                    </li>
                    <li>
                        <div class="artical__thumb wow fadeInLeft" data-wow-delay="0.4s"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/waxingImg.jpg" alt=""></div>
                        <h3>Waxing</h3>
                    </li>
                    <li>
                        <div class="artical__thumb wow fadeInLeft" data-wow-delay="0.8s"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/facial-sml.jpg" alt=""></div>
                        <h3>Facial</h3>
                    </li>


                    <li>
                        <div class="artical__thumb wow fadeInLeft" data-wow-delay="0.14s"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/lashes-sml-img.jpg" alt=""></div>
                        <h3>LASHES AND BROWS</h3>
                    </li>
                    <li>
                        <div class="artical__thumb wow fadeInLeft" data-wow-delay="0.20s"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/heenaImg.jpg" alt=""></div>
                        <h3>HENNA TATTOOS</h3>
                    </li>
                    <li>
                        <div class="artical__thumb wow fadeInLeft" data-wow-delay="0.24s"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/bridal.jpg" alt=""></div>
                        <h3>BRIDAL MAKEUP</h3>
                    </li>
                </ul>
            </article>
            <div class="clearfix"></div>
            <p>We provide a specialized service to remove unwanted facial hair by natural means called <strong>Threading</strong>. Threading is an ancient technique and process of removing unwanted hair with the help of cotton thread from <strong>Eyebrow</strong>, <strong>Upper Lips</strong>, <strong>Chin</strong>, <strong>Sideburns</strong> and other parts of the face and body. </p>
            <p> Threading has its traces as early as 6000 years back in Ancient India. The hair removal technique, then spread throughout the South Asia and Middle East. The threading technique is now getting more and more popular in the United States of America with the arrival of many Asian Immigrants. It can be done quickly, relatively painless and it last longer that traditional waxing. Threading is one of the most natural ways take care of eyebrows and remove the unwanted hairs. It is painless and very effective.</p>

            <p>Threading is a very unique art that cannot be mastered overnight. Our trained professionals have over 25 years of experience and can perform this service with precision and quality. Our #1 Priority is to ensure you the utmost safety and professionalism exceeding all of your prior expectations.</p>

            <p><strong>Facial</strong> is another procedure we offer. Your face is what defines you and presents you to the world. When it comes to beauty, the first thing that people notice is your facial features. The skin on your face will look radiant and young with the help of our professional services. We know how to get rid of dirt and dead skin cells that are tarnishing your beauty. We are familiar with the correct methods of moisturizing and nourishing your skin to make it soft, clean, and attractive.</p>
            <p>Additionally, we also provide services like <strong>Make-up</strong>, <strong>Eyebrow Lashes</strong>, <strong>Eye Lash Tinting</strong> and <strong>Henna Tattoos</strong>. We have special packages for special occasions like wedding, prom, engagement, or other special events. Besides, we also provide advisory services on how to take care of your beauty when you are not in the salon.</p>
        </div>
    </section>
    <!---->

    <section id="pricing">
        <div class="content__Wrap ">

            <div class="row">

                <div class="col-md-6">

                    <div class="price_list">
                        <h1>Threading</h1>
                        <div class="list_row">
                            <label>Eyebrows</label>
                            <input type="text" disabled placeholder="$11.00">
                            <div class="clearfix"></div>
                        </div>
                        <div class="list_row">
                            <label>Upper Lip</label>
                            <input type="text" disabled placeholder="$7.00">
                            <div class="clearfix"></div>
                        </div>
                        <div class="list_row">
                            <label>Chin</label>
                            <input type="text" disabled placeholder="$9.00">
                            <div class="clearfix"></div>
                        </div>
                        <div class="list_row">
                            <label>Forehead</label>
                            <input type="text" disabled placeholder="$8.00">
                            <div class="clearfix"></div>
                        </div>
                        <div class="list_row">
                            <label>2 Side Burns</label>
                            <input type="text" disabled placeholder="$10.00">
                            <div class="clearfix"></div>
                        </div>
                        <div class="list_row">
                            <label>Full Face</label>
                            <input type="text" disabled placeholder="$36.00">
                            <div class="clearfix"></div>
                        </div>

                        <div class="list_row">
                            <label>--</label>
                            <input type="text" disabled placeholder="">
                            <div class="clearfix"></div>
                        </div>


                    </div>





                    <div class="price_list">
                        <h1>Threading (combo)</h1>
                        <div class="list_row">
                            <label>Eyebrows + upper lip</label>
                            <input type="text" disabled placeholder="$15.00">
                            <div class="clearfix"></div>
                        </div>
                        <div class="list_row">
                            <label>Eyebrows + forehead</label>
                            <input type="text" disabled placeholder="$16.00">
                            <div class="clearfix"></div>
                        </div>
                        <div class="list_row">
                            <label>Eyebrows + upper lip +chin</label>
                            <input type="text" disabled placeholder="$21.00">
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="price_list">
                        <h1>Lashes and brows</h1>
                        <div class="list_row">
                            <label>Eyelash Extension</label>
                            <input type="text" disabled placeholder="$31.00">
                            <div class="clearfix"></div>
                        </div>
                        <div class="list_row">
                            <label>Eyelash Tinting</label>
                            <input type="text" disabled placeholder="$16.00">
                            <div class="clearfix"></div>
                        </div>
                        <div class="list_row">
                            <label>Eyebrow Tinting</label>
                            <input type="text" disabled placeholder="$16.00">
                            <div class="clearfix"></div>
                        </div>
                    </div>


                </div><!--col-md.6-->


                <div class="col-md-6">

                    <div class="price_list">
                        <h1>Waxing</h1>
                        <div class="list_row">
                            <label>Under arm </label>
                            <input type="text" disabled placeholder="$11.00">
                            <div class="clearfix"></div>
                        </div>
                        <div class="list_row">
                            <label>Full arms </label>
                            <input type="text" disabled placeholder="$7.00">
                            <div class="clearfix"></div>
                        </div>
                        <div class="list_row">
                            <label>Half Arms</label>
                            <input type="text" disabled placeholder="$9.00">
                            <div class="clearfix"></div>
                        </div>
                        <div class="list_row">
                            <label>Full legs </label>
                            <input type="text" disabled placeholder="$8.00">
                            <div class="clearfix"></div>
                        </div>
                        <div class="list_row">
                            <label>Half legs</label>
                            <input type="text" disabled placeholder="$10.00">
                            <div class="clearfix"></div>
                        </div>
                        <div class="list_row">
                            <label>Full bikini (Brazilian) </label>
                            <input type="text" disabled placeholder="$36.00">
                            <div class="clearfix"></div>
                        </div>
                        <div class="list_row">
                            <label>Regular bikini line</label>
                            <input type="text" disabled placeholder="$36.00">
                            <div class="clearfix"></div>
                        </div>
                    </div>



                    <div class="price_list">
                        <h1>Facial</h1>
                        <div class="list_row">
                            <label>Basic Facial</label>
                            <input type="text" disabled placeholder="$35.00">
                            <div class="clearfix"></div>
                        </div>
                        <div class="list_row">
                            <label>Deep Cleansing Facial</label>
                            <input type="text" disabled placeholder="$45.00">
                            <div class="clearfix"></div>
                        </div>
                        <div class="list_row">
                            <label>Aromatherapy Facial</label>
                            <input type="text" disabled placeholder="$40.00">
                            <div class="clearfix"></div>
                        </div>
                    </div> 



                    <div class="price_list">
                        <h1>Henna Tattoos</h1>
                        <div class="list_row">
                            <label>Henna Tattoos</label>
                            <input type="text" disabled placeholder="$8 +">
                            <br>
                            <label>Depends upon Design</label>
                            <div class="clearfix"></div>
                        </div>
                    </div>   



                </div><!--col-md.6-->




            </div><!--Row.-->






            <div class="content__Wrap service_demand">Service on Demand <br>(Bridal Makeup, Henna Tattoo at Home Service  Available By Appointment)</div>
        </div>
    </section>




    <section id="team">
        <div class="content__Wrap ">
            <h1>Our<span> Team</span></h1>
            <div class="biotext wow fadeInRight"> <strong>Over 25 years of experienced team</strong> </div>
            <article>
                <ul>
                    <li>
                        <div class="artical__thumb wow fadeInLeft"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/urmila.jpg" alt=""></div>
                        <h3>Urmila</h3>
                        <div class="member__info"> </div>
                        <p>Owner and Chief Threading Specialist<br>
                            <strong>Past working experience:</strong> <br>
                            Ziba Beauty Salon LA- California<br> 
                            Eyebrow R US Las Vegas-NV<br>
                            Miracle Eyebrows, Columbus-OH<br> 
                            Exquisite Eyebrows, Columbus-OH</p>
                    </li>
                    <li>
                        <div class="artical__thumb wow fadeInLeft" data-wow-delay="0.4s"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/pratiksha.jpg" alt=""></div>
                        <h3>Pratiksha</h3>
                        <p>Licensed and experienced eyebrow threading and henna tattoo Artist at Mila threading.</p>
                    </li>
                    <li>
                        <div class="artical__thumb wow fadeInLeft" data-wow-delay="0.8s"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/pratigya.jpg" alt=""></div>
                        <h3>Pratighya</h3>
                        <p>Graduate of Esthetician School and Licensed Working Experience at Miracle Eyebrows. Currently working at Mila Threading & Beauty Salon</p>
                    </li>
                </ul>
            </article>
        </div>

    </section>
    <div class="clearfix"></div>


    <section id="career">

        <h1>Career <span>Opportunity</span></h1>
        <div class="mila_info">
            <p><strong>Mila Threading </strong>is the one stop Threading and Beauty Salon in Columbus Ohio. We are committed to provide optimal service with our excellent, experienced and licensed staff. We are always looking for customer service centric excellent Full-time / Part-time Threaders, Esthetician with experience of the beauty industry in the field of Waxing and Henna Art and more</p>
            <p><strong>Mila Threading</strong> & Beauty Salon is a registered LLC in the State of Ohio. Mila Threading is an Equal Opportunity Employer. If you would like to have competitive wages and work in a family friendly environment, please send your short resume to urmila@milathreading.com or contact via telephone at (614) 985-1890.</p>
        </div>

    </section>

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
        <!--<div class="newsletter wow slideInLeft">
          <h1>Newsletter</h1>
          <div class="content__Wrap">
            <fieldset>
              <input type="text" placeholder="Your Email">
              <button type="submit">Subscribe</button>
            </fieldset>
          </div>
          <div class="clearfix"></div>
        </div>-->
        <section id="address__parallax" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -100px;" data-speed="10" data-type="background"></section>
        <div class="gmap">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3053.675869253218!2d-82.9631735!3d40.0603338!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88388b0f25bb60d5%3A0x50ea7cd5a06904e7!2s4667+Morse+Centre+Rd!5e0!3m2!1sen!2s!4v1404809108842" ></iframe>
        </div>
    </section>


<!--<section id="contactParallax">

</section>-->

    <section id="thanks_bg">

        <div class="content__Wrap">
            <h1 class="wow slideInLeft">Thank you for visiting our website. <br>We appreciate your business.</h1>
        </div>
    </section>

    <?php   
    /*$custom_val = get_post_custom();
    echo "<pre>";
    print_r($custom_val);*/
    get_footer($custom_val);
   // echo $custom_val['wpcf-footer'][0];
    ?>