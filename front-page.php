<?php

get_header();

$hero = get_field('hero');

?>
 <!-- hero slider Start -->
   <div class="banner-wrap">
        <div class="banner-slider">
            <!-- hero slide start -->
            <div class="banner-slide bg1">
                <div class="container">
                    <div class="hero-content">
                        <h1 data-animation="flipInX" data-delay="0.8s" data-color="#fff"><?php echo $hero['main_title'];?></h1>
                        <p data-animation="fadeInDown" class="mt-4"><?php echo $hero['subtitle'];?>
                            <span class="dis-none"></span> </p>
                        <div class="cta-btn" data-animation="fadeInUp" data-delay="1s">
                            <a href="<?php echo $hero['link'];?>" class="btn btn-style btn-primary"><?php echo $hero['link_text'];?></a>                          
                        </div>
                    </div>
                </div>
                <div class="hero-overlay"></div>
            </div>
            <!-- hero slide end -->
           
        </div>
    </div>
<?php

$second = get_field('second');

?>
    <!-- hero slider end -->
    <!--/home-stats-->
    <section class="w3l-stats-main py-5">
        <div class="container py-lg-5 py-2">
            <div class="row stats-con">
                <div class="col-lg-3 col-6 stats_info counter_grid text-left mt-lg-0 mt-5">
                    <div class="icon stat-icon">
                        <i class="fab fa-keycdn"></i>
                    </div>
                    <p class="counter"><?php echo $second['active_cases'];  ?></p>
                    <h4>Active Cases</h4>
                </div>
                <div class="col-lg-3 col-6 stats_info counter_grid1 text-left mt-lg-0 mt-5">
                    <div class="icon stat-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <p class="counter"><?php echo $second['recovered_cases'];  ?></p>
                    <h4>Recovered Cases</h4>
                </div>
                <div class="col-lg-3 col-6 stats_info counter_grid text-left mt-lg-0 mt-5">
                    <div class="icon stat-icon">
                        <i class="fas fa-skull-crossbones"></i>
                    </div>
                    <p class="counter"><?php echo $second['total_deaths'];  ?></p>
                    <h4>Total Deaths</h4>
                </div>
                <div class="col-lg-3 col-6 stats_info counter_grid text-left mt-lg-0 mt-5">
                    <div class="icon stat-icon">
                        <i class="fas fa-crutch"></i>
                    </div>
                    <p class="counter"><?php echo $second['vaccination'];  ?></p>
                    <h4>Vaccination</h4>
                </div>
            </div>
        </div>
    </section>
<?php

$third = get_field('third');

?>

    <!--//home-stats-->
    <!-- home page about section -->
    <section class="w3l-homeblock1" id="about">
        <div class="midd-w3 py-5">
            <div class="container py-lg-5 py-md-3">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <span class="title-subw3hny"><?php echo $third['short_tag'];  ?></span>
                        <h3 class="title-w3l"><?php echo $third['main'];  ?></h3>
                        <p class="mt-md-4 mt-3"><?php echo $third['tag'];  ?> </p>
                        <ul class="service-list pt-lg-2 mt-4">
                            <li class="service-link"><a href="#url"><span class="fas fa-check"></span> <?php echo $third['first_point'];  ?></a></li>
                            <li class="service-link"><a href="#url"><span class="fas fa-check"></span> <?php echo $third['second_point'];  ?></a></li>
                            <li class="service-link"><a href="#url"><span class="fas fa-check"></span> <?php echo $third['third_point'];  ?></a></li>
                        </ul>
                    </div>
                    <div class="HomeAboutImages col-lg-6 mt-lg-0 mt-5 pl-lg-5">
                        <div class="row position-relative">
                            <div class="col-6">
                                <img src="assets/images/1.jpg" alt="" class="radius-image img-fluid">
                            </div>
                            <div class="col-6">
                                <img src="assets/images/2.jpg" alt="" class="radius-image img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php

$fourth = get_field('fourth');

?>

    <!-- //home page about section -->
    <!-- features-section -->
    <section class="w3l-features py-5" id="work">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="row main-cont-wthree-2 align-items-center">
                <div class="col-lg-6 feature-grid-left pr-lg-5">
                    <h5 class="title-subw3hny"><?php  echo $fourth['short_tag']  ?></h5>
                    <h3 class="title-w3l mb-4"><?php  echo $fourth['main']  ?></h3>
                    <p class="text-para"><?php  echo $fourth['tag']  ?></p>
                    <a href="<?php echo $fourth['link_second'];?>" class="btn btn-style btn-primary mt-lg-5 mt-4"><?php  echo $fourth['link_text']  ?></a>
                </div>
                <div class="col-lg-6 feature-grid-right mt-lg-0 mt-5 pl-lg-5">
                    <div class="call-grids-w3 d-grid">
                        <div class="grids-1 box-wrap">
                            <div class="icon">
                                <i class="fas fa-hands-wash"></i>
                            </div>
                            <h4><a href="about.html" class="title-head">Wash your hands frequently</a></h4>
                        </div>
                        <div class="grids-1 box-wrap">
                            <div class="icon">
                                <i class="fas fa-people-arrows"></i>
                            </div>
                            <h4><a href="about.html" class="title-head">Maintain social distancing</a></h4>
                        </div>
                        <div class="grids-1 box-wrap">
                            <div class="icon">
                                <i class="fas fa-surprise"></i>
                            </div>
                            <h4><a href="about.html" class="title-head">Avoid touching on your face</a></h4>
                        </div>
                        <div class="grids-1 box-wrap">
                            <div class="icon">
                                <i class="fas fa-temperature-high"></i>
                            </div>
                            <h4><a href="about.html" class="title-head">Practice respiratory hygiene</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php

$image = get_field('image_and_des');

?>
    <!-- features section -->
    <!--  services section -->
    <div class="w3l-servicesblock2" id="services">
        <section id="grids5-block" class="py-5">
            <div class="container py-lg-5 py-md-4 py-2">
                <h5 class="title-subw3hny text-center">Protect Yourself?</h5>
                <h3 class="title-w3l text-center">Take Steps To Protect
                    Yourself</h3>
                <div class="row mt-lg-5 mt-4 text-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="grids5-info">
                            <a href="#service" class="d-block zoom"><img src="assets/images/s1.jpg" alt=""
                                    class="img-fluid" /></a>
                            <div class="blog-info">
                                <a href="#service" class="title">Wear A Face Mask</a>
                                <p class="text-para"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore. </p>
                            </div>
                           
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-md-0 mt-5">
                        <div class="grids5-info">
                        <!-- <?php bloginfo('stylesheet_directory'); ?>/images/s2.jpg -->
                            <a href="#service" class="d-block zoom"><img src="<?php echo $image['image1'] ?>" alt=""
                                    class="img-fluid" /></a>
                            <div class="blog-info">
                                <a href="#service" class="title">Wash Your Hands</a>
                                <p class="text-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore. </p>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-0 mt-5">
                        <div class="grids5-info">
                        <!-- <?php bloginfo('stylesheet_directory'); ?>/images/s3.jpg -->
                            <a href="#service" class="d-block zoom"><img src="<?php echo $image['image2'] ?>" alt=""
                                    class="img-fluid" /></a>
                            <div class="blog-info">
                                <a href="#service" class="title">Avoid Close Contact</a>
                                <p class="text-para"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore. </p>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!--//services-section-->
    <!--/testimonials-->
    <section class="w3l-testimonials" id="testimonials">
        <!-- /grids -->
        <div class="cusrtomer-layout py-5">
            <div class="container py-lg-4 py-md-3 py-2 pb-lg-0">
                <h5 class="title-subw3hny text-center mb-1">Happy Clients</h5>
                <h3 class="title-w3l two text-center mb-sm-5 mb-4">Reviews and Testimonials</h3>
                <!-- /grids -->
                <div class="testimonial-width">
                    <div id="owl-demo1" class="owl-two owl-carousel owl-theme">
                        <div class="item">
                            <div class="testimonial-content">
                                <div class="testimonial">
                                    <i class="fas fa-quote-right"></i>
                                    <blockquote>
                                        <q>Lorem ipsum dolor sit amet elit. Velit beatae
                                            laudantium voluptate rem ullam dolore nisi voluptatibus esse quasi,
                                            doloribus tempora.
                                            Dolores molestias adipisci dolo amet!. Lorem ipsum dolor sit amet
                                            consectetur
                                            adipisicing elit. Esse architecto est ea sunt eligendi cum?</q>
                                    </blockquote>
                                    <div class="testi-des">
                                        <div class="test-img"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/team1.jpg" class="img-fluid"
                                                alt="client-img">
                                        </div>
                                        <div class="peopl align-self">
                                            <h3>John wilson</h3>
                                            <p class="indentity">Example City</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- /grids -->
        </div>
        <!-- //grids -->
    </section>
    <!-- //testimonials -->
   
     <!--/subscribe-->
            <section class="w3l-project py-5" id="subscribe">
                <div class="container py-md-5 py-sm-4 py-2">
                    <div class="bottom-info">
                        <div class="header-section text-center">
                            <h5 class="title-subw3hny text-center mb-1">Join With Us</h5>
                            <h3 class="title-w3l">Subscribe to our Newsletter</h3>
                            <p class="mt-3 pr-lg-5">Lorem ipsum dolor sit amet elit. Velit beatae
                                rem ullam dolore nisi esse quasi, sit amet. Lorem ipsum dolor sit
                                amet elit.</p>
                        </div>
                        <form action="#" class="subscribe mt-5" method="post">
                            <input type="email" name="email" placeholder="Your Email Address" required="">
                            <button class="btn btn-style btn-primary"><i class="fas fa-paper-plane"></i></button>
                        </form>
                    </div>
                </div>
            </section>
     <!--//subscribe-->
<?php

get_footer();

?>