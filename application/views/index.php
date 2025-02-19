<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    
    <!--====== Title ======-->
    <title>Arch - HTML Template for Construction and Architecture Sites</title>
    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="<?= base_url('assets/user') ?>/assets/images/favicon.png" type="image/png">
        
        
    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="<?= base_url('assets/user') ?>/assets/css/animate.css">
        
    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="<?= base_url('assets/user') ?>/assets/css/LineIcons.css">
        
    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="<?= base_url('assets/user') ?>/assets/css/bootstrap.min.css">
    
    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="<?= base_url('assets/user') ?>/assets/css/default.css">
    
    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="<?= base_url('assets/user') ?>/assets/css/style.css">
    
</head>

<body>
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->
    
    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->

    <!--====== HEADER PART START ======-->

    <section class="header_area">
        <div class="header_navbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.html">
                                <img src="<?= base_url('assets/user') ?>/assets/images/logo.png" alt="Logo">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="page-scroll" href="#home">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#about">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#services">Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#gallery">Gallery</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#team">Team</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#testimonial">Clients</a>
                                    </li>                                    
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#contact">Contact</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="<?= base_url('admin/auth') ?>">Login</a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header navbar -->

        <div id="home" class="header_slider">
            <div class="single_slider bg_cover d-flex align-items-center" style="background-image: url(<?= base_url('assets/user') ?>/assets/images/slider-1.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-md-10">
                            <div class="slider_content">
                                <h2 class="slider_title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">You are using free lite version</h2>
                                <p class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.5s">Please, consider purchasing full version of the template to get all section and features</p>
                                <a href="https://rebrand.ly/arch-ui" rel="nofollow" class="main-btn wow fadeInLeftBig" data-wow-duration="1.3s" data-wow-delay="0.8s">Purchase Now</a>
                            </div> <!-- slider content -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
            </div> <!-- single slider -->
        </div> <!-- header slider -->
    </section>

    <!--====== HEADER PART ENDS ======-->
    
    <!--====== FEATURES PART START ======-->

    <section id="features" class="features_area pt-100 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="single_features text-center mt-30 wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">
                        <div class="features_image">
                            <img src="<?= base_url('assets/user') ?>/assets/images/features-1.jpg" alt="features">
                        </div>
                        <div class="features_content">
                            <h4 class="features_title"><a href="#">Project Planing</a></h4>
                        </div>
                    </div> <!-- single features -->
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="single_features text-center mt-30 wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.5s">
                        <div class="features_image">
                            <img src="<?= base_url('assets/user') ?>/assets/images/features-2.jpg" alt="features">
                        </div>
                        <div class="features_content">
                            <h4 class="features_title"><a href="#">Architecture</a></h4>
                        </div>
                    </div> <!-- single features -->
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="single_features text-center mt-30 wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.8s">
                        <div class="features_image">
                            <img src="<?= base_url('assets/user') ?>/assets/images/features-3.jpg" alt="features">
                        </div>
                        <div class="features_content">
                            <h4 class="features_title"><a href="#">Construction</a></h4>
                        </div>
                    </div> <!-- single features -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== FEATURES PART ENDS ======-->
    
    <!--====== ABOUT PART START ======-->

    <section id="about" class="about_area pt-80 pb-130">
        <div class="about_bg d-none d-lg-block">
            <div class="about_bg_image bg_cover" style="background-image: url(<?= base_url('assets/user') ?>/assets/images/about_bg.jpg)"></div>
        </div> <!-- about bg -->
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about_image mt-50 wow fadeInRightBig" data-wow-duration="1.3s" data-wow-delay="0.5s">
                        <img src="<?= base_url('assets/user') ?>/assets/images/about_image.jpg" alt="About">
                    </div> <!-- about image -->
                </div>
                <div class="col-lg-6">
                    <div class="about_content mt-50 wow fadeInLeftBig" data-wow-duration="1.3s" data-wow-delay="0.5s">
                        <h3 class="sub_title"><span>15</span> Years of Experiance</h3>
                        <h4 class="main_title">Providing the best quality service</h4>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, serd diam nonumy eirmod tempor invidunt ut labore et dolore maali quyam erat, sed diam voluptua. At vero eos et accusam et justo dudolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctuest Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, onsetetur sadipscing elitr, <br> <br>Sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et.</p>
                        <a href="#" class="main-btn">Read More</a>
                    </div> <!-- about content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== ABOUT PART ENDS ======-->
    
    <!--====== SERVICES PART START ======-->

    <section id="services" class="services_area pt-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section_title">
                        <h4 class="title">Awesome Services in Meaningful Way</h4>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single_services mt-50 wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">
                        <div class="services_icon">
                            <i class="lni lni-compass"></i>
                        </div>
                        <div class="services_content">
                            <h4 class="title">Planning</h4>
                            <p>Lorem ipsum dolor sit amet, conse adipsci ng elitr, serd diam nonumy eirmod temt dolore maali quyam.</p>
                        </div>
                    </div> <!-- single services -->
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_services mt-50 wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.5s">
                        <div class="services_icon">
                            <i class="lni lni-apartment"></i>
                        </div>
                        <div class="services_content">
                            <h4 class="title">Architecture</h4>
                            <p>Lorem ipsum dolor sit amet, conse adipsci ng elitr, serd diam nonumy eirmod temt dolore maali quyam.</p>
                        </div>
                    </div> <!-- single services -->
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_services mt-50 wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.8s">
                        <div class="services_icon">
                            <i class="lni lni-construction"></i>
                        </div>
                        <div class="services_content">
                            <h4 class="title">Construction</h4>
                            <p>Lorem ipsum dolor sit amet, conse adipsci ng elitr, serd diam nonumy eirmod temt dolore maali quyam.</p>
                        </div>
                    </div> <!-- single services -->
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_services mt-50 wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">
                        <div class="services_icon">
                            <i class="lni lni-ruler-pencil"></i>
                        </div>
                        <div class="services_content">
                            <h4 class="title">Interior</h4>
                            <p>Lorem ipsum dolor sit amet, conse adipsci ng elitr, serd diam nonumy eirmod temt dolore maali quyam.</p>
                        </div>
                    </div> <!-- single services -->
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_services mt-50 wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.5s">
                        <div class="services_icon">
                            <i class="lni lni-brush-alt"></i>
                        </div>
                        <div class="services_content">
                            <h4 class="title">Painting</h4>
                            <p>Lorem ipsum dolor sit amet, conse adipsci ng elitr, serd diam nonumy eirmod temt dolore maali quyam.</p>
                        </div>
                    </div> <!-- single services -->
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_services mt-50 wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.8s">
                        <div class="services_icon">
                            <i class="lni lni-bolt"></i>
                        </div>
                        <div class="services_content">
                            <h4 class="title">Electricity</h4>
                            <p>Lorem ipsum dolor sit amet, conse adipsci ng elitr, serd diam nonumy eirmod temt dolore maali quyam.</p>
                        </div>
                    </div> <!-- single services -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== SERVICES PART ENDS ======-->
    
    <!--====== GALLERY PART START ======-->

    <section id="gallery" class="gallery_area pt-120 pb-130">
        <div class="container">
                                <h2 class="slider_title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">You are using free lite version</h2>
                                <p class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.5s">Please, consider purchasing full version of the template to get all section and features</p>
                                <a href="https://rebrand.ly/arch-ui" rel="nofollow" class="main-btn wow fadeInLeftBig" data-wow-duration="1.3s" data-wow-delay="0.8s">Purchase Now</a>
        </div> <!-- container -->
    </section>

    <!--====== GALLERY PART ENDS ======-->
    
    <!--====== COUNTER PART START ======-->

    <section id="counter" class="counter_area bg_cover pt-120 pb-130" style="background-image: url(<?= base_url('assets/user') ?>/assets/images/counter.jpg)">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section_title section_title_2 text-center pb-25">
                        <h4 class="title">Our Achievements<br> in Numbers</h4>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-3 col-sm-3 col-6">
                    <div class="single_counter text-center mt-30 wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.2s">
                        <div class="counter_icon">
                            <i class="lni lni-happy"></i>
                        </div>
                        <div class="counter_content">
                            <span>3874</span>
                            <p>Happy Clients</p>
                        </div>
                    </div> <!-- single counter -->
                </div>
                <div class="col-lg-3 col-sm-3 col-6">
                    <div class="single_counter text-center mt-30 wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.4s">
                        <div class="counter_icon">
                            <i class="lni lni-checkmark-circle"></i>
                        </div>
                        <div class="counter_content">
                            <span>3874</span>
                            <p>Projects Done</p>
                        </div>
                    </div> <!-- single counter -->
                </div>
                <div class="col-lg-3 col-sm-3 col-6">
                    <div class="single_counter text-center mt-30 wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.6s">
                        <div class="counter_icon">
                            <i class="lni lni-users"></i>
                        </div>
                        <div class="counter_content">
                            <span>3874</span>
                            <p>Team Members</p>
                        </div>
                    </div> <!-- single counter -->
                </div>
                <div class="col-lg-3 col-sm-3 col-6">
                    <div class="single_counter text-center mt-30 wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.8s">
                        <div class="counter_icon">
                            <i class="lni lni-cup"></i>
                        </div>
                        <div class="counter_content">
                            <span>3874</span>
                            <p>Awards Won</p>
                        </div>
                    </div> <!-- single counter -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== COUNTER PART ENDS ======-->
    
    <!--====== TEAM PART START ======-->

    <section id="team" class="team_area pt-120 pb-130">
        <div class="container">
                                <h2 class="slider_title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">You are using free lite version</h2>
                                <p class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.5s">Please, consider purchasing full version of the template to get all section and features</p>
                                <a href="https://rebrand.ly/arch-ui" rel="nofollow" class="main-btn wow fadeInLeftBig" data-wow-duration="1.3s" data-wow-delay="0.8s">Purchase Now</a>
        </div> <!-- container -->
    </section>

    <!--====== TEAM PART ENDS ======-->
    
    <!--====== TESTIMONIAL PART START ======-->

    <section id="testimonial" class="testimonial_area bg_cover pt-120 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section_title section_title_2 text-center pb-55">
                        <h4 class="title">Testimonials From</br> Happy Clients</h4>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
        <div class="container">
                                <h2 class="slider_title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">You are using free lite version</h2>
                                <p class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.5s">Please, consider purchasing full version of the template to get all section and features</p>
                                <a href="https://rebrand.ly/arch-ui" rel="nofollow" class="main-btn wow fadeInLeftBig" data-wow-duration="1.3s" data-wow-delay="0.8s">Purchase Now</a>
        </div> <!-- container -->
        </div> <!-- container -->
    </section>

    <!--====== TESTIMONIAL PART ENDS ======-->
    
    <!--====== BRAND LOGO PART START ======-->

    <section id="brand" class="brand_logo_area pt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section_title text-center pb-25">
                        <h4 class="title">Proud Member of<br> Great Associations</h4>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-2 col-md-2 col-6 col-sm-4">
                    <div class="single_logo mt-30 wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">
                        <img src="<?= base_url('assets/user') ?>/assets/images/logo-1.jpg" alt="logo">
                    </div> <!-- single logo -->
                </div>
                <div class="col-lg-2 col-md-2 col-6 col-sm-4">
                    <div class="single_logo mt-30 logo_2 wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.4s">
                        <img src="<?= base_url('assets/user') ?>/assets/images/logo-2.jpg" alt="logo">
                    </div> <!-- single logo -->
                </div>
                <div class="col-lg-2 col-md-2 col-6 col-sm-4">
                    <div class="single_logo mt-30 wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.6s">
                        <img src="<?= base_url('assets/user') ?>/assets/images/logo-3.jpg" alt="logo">
                    </div> <!-- single logo -->
                </div>
                <div class="col-lg-2 col-md-2 col-6 col-sm-4">
                    <div class="single_logo mt-30 logo_2 wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.8s">
                        <img src="<?= base_url('assets/user') ?>/assets/images/logo-4.jpg" alt="logo">
                    </div> <!-- single logo -->
                </div>
                <div class="col-lg-2 col-md-2 col-6 col-sm-4">
                    <div class="single_logo mt-30 wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1.2s">
                        <img src="<?= base_url('assets/user') ?>/assets/images/logo-5.jpg" alt="logo">
                    </div> <!-- single logo -->
                </div>
                <div class="col-lg-2 col-md-2 col-6 col-sm-4">
                    <div class="single_logo mt-30 logo_2 wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1.4s">
                        <img src="<?= base_url('assets/user') ?>/assets/images/logo-6.jpg" alt="logo">
                    </div> <!-- single logo -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== BRAND LOGO PART ENDS ======-->
    
    <!--====== CONTACT PART START ======-->

    <section id="contact" class="contact_area pt-80 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact_form mt-40 wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.5s">
                        <div class="section_title pb-25">
                            <h4 class="title">Get In Touch</h4>
                        </div> <!-- section title -->
                        
                        <form id="contact-form" action="<?= base_url('assets/user') ?>/assets/contact.php" method="post">
                            <div class="single_form">
                                <input name="name" type="text" placeholder="Name">
                            </div> <!-- single form -->
                            
                            <div class="single_form">
                                <input name="email" type="email" placeholder="Email">
                            </div> <!-- single form -->
                            
                            <div class="single_form">
                                <input name="subject" type="text" placeholder="Subject">
                            </div> <!-- single form -->
                            
                            <div class="single_form">
                                <input name="number" type="text" placeholder="Contact Number">
                            </div> <!-- single form -->
                            
                            <div class="single_form">
                                <textarea name="message" placeholder="Message"></textarea>
                            </div> <!-- single form -->
                            
                            <p class="form-message"></p>
                            
                            <div class="single_form">
                                <button class="main-btn">SEND MESSAGE</button>
                            </div> <!-- single form -->
                        </form>
                    </div> <!-- contact form -->
                </div>
                <div class="col-lg-6">
                    <div class="contact_info mt-40 wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.5s">
                        <div class="section_title pb-25">
                            <h4 class="title">Contact Us</h4>
                        </div> <!-- section title -->
                        <p>Lorem ipsum dolor sit consetetur sadipscing elitr, sed diamnonumy eirmod tempor inidunt ut labore et dolore.Lorem ipsum dolor sit consetetur sadipscing elitr, sed diamnonumy eirmod tempor inidunt ut labore et dolore.Lorem ipsum dolor sit consetetur sadipscing elitr, sed diamnonumy eirmod tempor inidunt ut labore et dolore.</p>
                        
                        <div class="single_info d-flex align-items-center">
                            <div class="info_icon">
                                <i class="lni lni-phone"></i>
                            </div>
                            <div class="info_content media-body">
                                <p>+12345678987654</p>
                            </div>
                        </div> <!-- single info -->
                        
                        <div class="single_info d-flex align-items-center">
                            <div class="info_icon">
                                <i class="lni lni-envelope"></i>
                            </div>
                            <div class="info_content media-body">
                                <p>architecture@gmail.com</p>
                            </div>
                        </div> <!-- single info -->
                        
                        <div class="single_info d-flex align-items-center">
                            <div class="info_icon">
                                <i class="lni lni-world"></i>
                            </div>
                            <div class="info_content media-body">
                                <p>www.architectandconstruction.com</p>
                            </div>
                        </div> <!-- single info -->
                        
                        <div class="single_info d-flex align-items-center">
                            <div class="info_icon">
                                <i class="lni lni-map"></i>
                            </div>
                            <div class="info_content media-body">
                                <p>London Plaza 38/3, New York </br>United State Of America</p>
                            </div>
                        </div> <!-- single info -->
                    </div> <!-- contact info -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== CONTACT PART ENDS ======-->
    
    <!--====== FOOTER PART START ======-->

    <section class="footer_area bg_cover" style="background-image: url(<?= base_url('assets/user') ?>/assets/images/footer_bg.jpg)">
        <div class="container">
            <div class="footer_widget pt-80 pb-130">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="footer_about mt-50">
                            <a href="#"><img src="<?= base_url('assets/user') ?>/assets/images/logo.png" alt="logo"></a>
                            <p>Lorem ipsum dolor sit consetetur sadipscing elitr, sed diamnonumy eirmod tempor inidunt ut labore et dolore. Lorem ipsum dolor sit consetetur sadipscing elitr, sed diamnonumy eirmod tempor inidunt ut labore et dolore.</p>
                        </div> <!-- footer about -->
                    </div>
                    <div class="col-lg-8">
                        <div class="footer_link_wrapper d-flex flex-wrap">
                            <div class="footer_link mt-45">
                                <h4 class="footer_title">Compnay</h4>
                                <ul class="link">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Service</a></li>
                                    <li><a href="#">Gallery</a></li>
                                    <li><a href="#">Blog</a></li>
                                </ul>
                            </div> <!-- footer link -->
                            <div class="footer_link mt-45">
                                <h4 class="footer_title">Support</h4>
                                <ul class="link">
                                    <li><a href="#">Terms & Condition</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Policy</a></li>
                                    <li><a href="#">Leal</a></li>
                                    <li><a href="#">Leal</a></li>
                                </ul>
                            </div> <!-- footer link -->
                            <div class="footer_link mt-45">
                                <h4 class="footer_title">Socials</h4>
                                <ul class="link">
                                    <li><a href="#">Facebook</a></li>
                                    <li><a href="#">Twitter</a></li>
                                    <li><a href="#">Instageam</a></li>
                                    <li><a href="#">Linkdin</a></li>
                                    <li><a href="#">Pintarest</a></li>
                                </ul>
                            </div> <!-- footer link -->
                        </div> <!-- footer link wrapper -->
                    </div>
                </div> <!-- row -->
            </div> <!-- footer widget -->
            <div class="footer_copyright text-center">
                <p>Designed and Developed by <a href="https://uideck.com" rel="nofollo">UIdeck</a></p>
            </div>
        </div> <!-- container -->
    </section>

    <!--====== FOOTER PART ENDS ======-->
    
    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->


    <!--====== Jquery js ======-->
    <script src="<?= base_url('assets/user') ?>/assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="<?= base_url('assets/user') ?>/assets/js/vendor/modernizr-3.7.1.min.js"></script>
    
    <!--====== Bootstrap js ======-->
    <script src="<?= base_url('assets/user') ?>/assets/js/popper.min.js"></script>
    <script src="<?= base_url('assets/user') ?>/assets/js/bootstrap.min.js"></script>

    
    <!--====== Scrolling Nav js ======-->
    <script src="<?= base_url('assets/user') ?>/assets/js/jquery.easing.min.js"></script>
    <script src="<?= base_url('assets/user') ?>/assets/js/scrolling-nav.js"></script>
    
    <!--====== WOW js ======-->
    <script src="<?= base_url('assets/user') ?>/assets/js/wow.min.js"></script>


    
    <!--====== Main js ======-->
    <script src="<?= base_url('assets/user') ?>/assets/js/main.js"></script>
    
</body>

</html>
