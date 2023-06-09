<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from gramentheme.com/html/attax/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Mar 2023 01:40:33 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Attax - Tax Advisor Html Template</title>
    <link rel=icon href="attax/assets/img/favicon.png" sizes="20x20" type="image/png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="attax/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="attax/assets/css/animate.min.css">
    <link rel="stylesheet" href="attax/assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="attax/assets/css/nice-select.min.css">
    <link rel="stylesheet" href="attax/assets/css/magnific.min.css">
    <link rel="stylesheet" href="attax/assets/css/slick.min.css">
    <link rel="stylesheet" href="attax/assets/css/style.css">
    <link rel="stylesheet" href="attax/assets/css/responsive.css">

    <title>@yield('index-3')</title>

</head>
<body>

    <!-- preloader area start -->
    <!-- <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div> -->
    <!-- preloader area end -->

    <!-- search popup start-->
    <div class="td-search-popup" id="td-search-popup">
        <form action="https://gramentheme.com/html/attax/index.html" class="search-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search.....">
            </div>
            <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <!-- search popup end-->
    <div class="body-overlay" id="body-overlay"></div>

    <!-- navbar start -->
    <nav class="navbar navbar-area navbar-expand-lg">
        <div class="container nav-container navbar-bg">
            <div class="responsive-mobile-menu">
                <button class="menu toggle-btn d-block d-lg-none" data-target="#itech_main_menu" 
                aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-left"></span>
                    <span class="icon-right"></span>
                </button>
            </div>
            <div class="logo">
                <a href="index-2.html">
                    <img src="attax/assets/img/logo.png" alt="img">
                </a>
            </div>
            <div class="nav-right-part nav-right-part-mobile">
                <a class="search-bar-btn" href="#">
                    <i class="fa fa-search"></i>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="itech_main_menu">
                <ul class="navbar-nav menu-open text-lg-end">
                    <li class="menu-item-has-children">
                        <a href="#">Home</a>
                        <ul class="sub-menu">
                            <li><a href="index-2.html">Home 01</a></li>
                            <li><a href="index-3.html">Home 02</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Service</a>
                        <ul class="sub-menu">
                            <li><a href="service.html">Service</a></li>
                            <li><a href="service-details.html">Service Single</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Pages</a>
                        <ul class="sub-menu">
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="team.html">Team</a></li>
                            <li><a href="team-details.html">Team Details</a></li>
                            <li><a href="case-study.html">Case Study</a></li>
                            <li><a href="case-study-details.html">Case Study Details</a></li>
                            <li><a href="pricing.html">Pricing</a></li>
                            <li><a href="404.html">404</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="blog-details.html">Blog Details</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
            </div>
            <div class="nav-right-part nav-right-part-desktop align-self-center">
                <a class="search-bar-btn" href="#">
                    <img src="attax/assets/img/search.png" alt="img">
                </a>
                <a class="btn btn-base" href="contact.html">Get In Touch</a>
            </div>
        </div>
    </nav>
    <!-- navbar end -->

    <!-- banner start -->
    <div class="banner-area pd-bottom-120 banner-small-inner bg-relative bg-cover text-center" style="background-image: url('attax/assets/img/bg/1.png');">
        <div class="container">
            <h6 class="wow animated fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">We appreciate your trust greatly!</h6>
            <h2 class="wow animated fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.4s">Make Your Taxes Easy & Gain Confidence In Managing Your Tax</h2>
            <div class="scroll-down top_image_bounce wow animated fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.5s">
                <a href="#about-area">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="80" viewBox="0 0 40 80">
                      <image id="scroll" width="40" height="80" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAABQCAYAAABrjzfBAAADwElEQVRoge2bP1LbQBTGP5xQsCoiThD7BIgTxL5BOEGcE0CqlIaSytClg5wA0qUzOQHmBEY3EIW2JfM833oW2bIl78rSJPpmdjwGefent3/13tOeOjjAluoDiAB84mfIIkoAPLM8AXhgWVKq9drWywIKwCmAMwBTq/EpoRLrui5LnzcR8toLgs/lC1AqHwEYArgGcGs3UlACe07YBegmwE6BusViMwAvAHpspCwc+Bu5wQGAGMCE39dqkwXHAD4DOGE3+lSXkPep1t/y6s2zYMgfHwI4rgAOtKjU3Q2UegyUClddlAc4YTcMrYFfhZJU6xNOtruigGNrvOxEqdbSVhwoNc629z7zfcgxd7wrOEuydElXx6nWV+bP9iQxg3aw5SzdSvYyEygVkaGXaj0fWnYXyzr3c5dwWaVaT7nOjsy/jAVrsR5W7CSczTNjRWPBEVf32qxnxK695phcWHBWh/WQsxcHSkmPPqZaH3a4mSdNsJ5RqrWwTAOl+gbwTzPQ3kgW70gAj/LOajVLmOYW7Dapey3JknPUZECZF6HM4leZzXVRrDuwBkq9Fjmw1qoW0FUtoKv+O8CZ5/raLnZWC+iqFtBVLaCrWkBXtYCuagFd9c8BRg5tmeBOKZUFfAQgz9E3JRqL6CCfbXOgLQu4R//1Hhsbbbj+lDcVM9ZS2kGQdaIX0ZTOdok4TXj9xYrfmdBZz8W14jJJpNGBFRmwNbTCXk5+H9dZbCDHVigWtJ4Xj62PZeaZ0YEzfh/6jBb48m6FnKlmZhe23q68W3Yg+8mnv9HnTvKLgPce6/QKaPzcXkO3PgGfM59etM1CnaekCldye9xyVQvoqhbQVR0TcmoaGCPviQH80ACmrOYxxA63pjrSUDZJAOMOg9n9BgIK09RY8KgBQFnN0/g6PIXIo+HHppAxqSJMtX4wy4ykgXytmcuWSZNZpKUskmkqznZb0orEnkWSkWR/GAsmmQefOvVFrMfUlDfJZaGV4FNFQuNGC2ath8xWl9BDcFfHzsKdQ+AuDBxyclivuLPsZNIYCwZKiWEkd/DNMMtLsp3wGaNySAEMlBJvWZRqvbSj5Z1mTiy3WZXdHRKuy7G/pDzAhPtzTPdZacdjAUWs+yXVemAyLrN6t7+/v66q30zwvqElYw/rpNTzHcAPAJep1ufrLi5yYL2l+Xscm2W8q7a63CFmzM/ucUKuVdHnYpO23LUcl2JJ2Y7kNGTefLB9NFLstyWkyJZaardyfV1DipyEzJsP9usaUmTBlxuQz/KvawD4CybGJEiPys7UAAAAAElFTkSuQmCC"/>
                    </svg>
                </a>
            </div>  
        </div>
    </div>
    <!-- banner end -->

    <!-- banner video area start -->
    <div class="banner-video-area">
        <div class="slider banner-slider">       
            <div class="slide-item text-center" style="background-image: url('attax/assets/img/bg/2.png');">
                <a class="video-play-btn" href="https://www.youtube.com/embed/Wimkqo8gDZ0" data-effect="mfp-zoom-in"><i class="fa fa-play"></i></a>
            </div>
            <div class="slide-item text-center" style="background-image: url('attax/assets/img/bg/2.png');">
                <a class="video-play-btn" href="https://www.youtube.com/embed/Wimkqo8gDZ0" data-effect="mfp-zoom-in"><i class="fa fa-play"></i></a>
            </div>
            <div class="slide-item text-center" style="background-image: url('attax/assets/img/bg/2.png');">
                <a class="video-play-btn" href="https://www.youtube.com/embed/Wimkqo8gDZ0" data-effect="mfp-zoom-in"><i class="fa fa-play"></i></a>
            </div> 
        </div>
        <div class="container">
            <div class="banner-slider-control">
                <div class="pagination"></div>
                <div class="slider-controlprogress">
                    <span class="slider__label sr-only"></span>
                </div>
                <div class="slider-dots"></div>
            </div>
        </div>
        <div class="banner-content-area bg-sky">
            <h3>Let’s work together</h3>
            <a href="contact.html">Contact Us</a>
        </div>
        <img class="top_image_bounce banner-animate-image" src="attax/assets/img/bg/shape1.png" alt="img">
    </div>
    <!-- banner video area end -->

    <!-- intro-area area start -->
    <div class="intro-area bg-sky pd-top-120 pd-bottom-90 mt-md-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="intro-area-inner border-right-1 ps-lg-3">
                        <div class="thumb mb-4">
                            <img src="attax/assets/img/icon/1.png" alt="img">
                        </div>
                        <div class="details">
                            <h4>Best Taxation Service</h4>
                            <p>Duis aute irure dolor in voluptate velit esse cillum dolore eu fugiat nulla Excepteur sint occaecat cupidatat</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="intro-area-inner border-right-1 ps-lg-3 pe-lg-3">
                        <div class="thumb mb-4">
                            <img src="attax/assets/img/icon/2.png" alt="img">
                        </div>
                        <div class="details">
                            <h4>Business Strategy & Growth</h4>
                            <p>Duis aute irure dolor in voluptate velit esse cillum dolore eu fugiat nulla Excepteur sint occaecat cupidatat</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="intro-area-inner ps-lg-3">
                        <div class="thumb mb-4">
                            <img src="attax/assets/img/icon/3.png" alt="img">
                        </div>
                        <div class="details">
                            <h4>Highly Dedicated Worker</h4>
                            <p>Duis aute irure dolor in voluptate velit esse cillum dolore eu fugiat nulla Excepteur sint occaecat cupidatat</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- intro-area area end -->

    <!-- about-area area start -->
    <div id="about-area" class="about-area pd-top-120 pd-bottom-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-9 wow animated fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.3s">
                    <div class="about-thumb-area">
                        <img class="about-img-1" src="attax/assets/img/about/1.png" alt="img">
                        <img class="about-img-2" src="attax/assets/img/about/2.png" alt="img">
                        <img class="about-img-3 top_image_bounce" src="attax/assets/img/about/3.png" alt="img">
                        <img class="about-img-4 top_image_bounce" src="attax/assets/img/about/4.png" alt="img">
                        <div class="exp-wrap">
                            <div class="exp-inner">
                                <h2>25 +</h2>
                                <p>Years Experienced</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center wow animated fadeInRight" data-wow-duration="1.5s" data-wow-delay="0.3s">
                    <div class="section-title mb-0 mt-5 mt-lg-0">
                        <h6 class="sub-title">//  About Our Company</h6>
                        <h2 class="title">Providing Quality Tax Services & Consulting</h2>
                        <p class="content">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem quisquam est, qui dolorem ipsum quia dolor sit amet,</p>
                        <p class="quote mt-4 pb-2">Duis aute irure dolor in reprehenderit in voluptate velit esse dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat proident."</p>
                        <div class="row">
                            <div class="col-md-6 mt-3">
                                <h5><img class="me-2" src="attax/assets/img/about/11.png" alt="img">  Professional Team</h5>
                            </div>
                            <div class="col-md-6 mt-3">
                                <h5><img class="me-2" src="attax/assets/img/about/11.png" alt="img"> 24/7 Customer Support</h5>
                            </div>
                        </div>
                        <div class="btn-wrap">
                            <a class="btn btn-base border-radius" href="about.html">Discover More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about-area area end -->

    <!-- counter-area area start -->
    <div class="counter-area bg-sky pd-top-110 pd-bottom-60">
        <div class="container">
            <div class="counter-area-inner">
                <h2 class="overlay-title">Company</h2>
                <div class="row">
                    <div class="col-lg-3 col-md-6 wow animated fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.01s">
                        <div class="single-counter-inner text-center">
                            <h2><span class="counter">12</span> k</h2>
                            <h6>Successfully Project Done</h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow animated fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.1s">
                        <div class="single-counter-inner text-center">
                            <h2><span class="counter">450</span></h2>
                            <h6>Saticfied Global Clients</h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow animated fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <div class="single-counter-inner text-center">
                            <h2><span class="counter">25</span> m</h2>
                            <h6>3,280 avg Rating</h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow animated fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
                        <div class="single-counter-inner text-center">
                            <h2><span class="counter">358</span> +</h2>
                            <h6>Successfully Project Done</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- counter-area area end -->

    <!-- service area start -->
    <div class="service-area bg-black pd-top-120 pd-bottom-120">  
        <div class="container"> 
            <div class="row">
                <div class="col-lg-4 col-md-8">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="sertab1" role="tabpanel" aria-labelledby="sertab1-tab">
                            <div class="single-service-inner-2">
                                <img class="top_image_bounce animate-img-1" src="attax/assets/img/service/3.png" alt="img">
                                <img class="top_image_bounce animate-img-2" src="attax/assets/img/service/2.png" alt="img">
                                <div class="thumb">
                                    <img src="attax/assets/img/service/1.png" alt="img">
                                </div>
                                <div class="details">
                                    <div class="details-inner">
                                        <h2>01.</h2>
                                        <p>Duis aute irure dolor reprehenderit in voluptate velit esse cillum dolore fugiat nulla pariatur. Excepteur sint occaecat cupidatat </p>
                                        <a href="service.html">Discover More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="sertab2" role="tabpanel" aria-labelledby="sertab2-tab">
                            <div class="single-service-inner-2">
                                <img class="top_image_bounce animate-img-1" src="attax/assets/img/service/2.png" alt="img">
                                <img class="top_image_bounce animate-img-2" src="attax/assets/img/service/3.png" alt="img">
                                <div class="thumb">
                                    <img src="attax/assets/img/service/4.png" alt="img">
                                </div>
                                <div class="details">
                                    <div class="details-inner">
                                        <h2>02.</h2>
                                        <p>Duis aute irure dolor reprehenderit in voluptate velit esse cillum dolore fugiat nulla pariatur. Excepteur sint occaecat cupidatat </p>
                                        <a href="service.html">Discover More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="sertab3" role="tabpanel" aria-labelledby="sertab3-tab">
                            <div class="single-service-inner-2">
                                <img class="top_image_bounce animate-img-1" src="attax/assets/img/service/2.png" alt="img">
                                <img class="top_image_bounce animate-img-2" src="attax/assets/img/service/3.png" alt="img">
                                <div class="thumb">
                                    <img src="attax/assets/img/service/5.png" alt="img">
                                </div>
                                <div class="details">
                                    <div class="details-inner">
                                        <h2>03.</h2>
                                        <p>Duis aute irure dolor reprehenderit in voluptate velit esse cillum dolore fugiat nulla pariatur. Excepteur sint occaecat cupidatat </p>
                                        <a href="service.html">Discover More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="sertab4" role="tabpanel" aria-labelledby="sertab4-tab">
                            <div class="single-service-inner-2">
                                <img class="top_image_bounce animate-img-1" src="attax/assets/img/service/2.png" alt="img">
                                <img class="top_image_bounce animate-img-2" src="attax/assets/img/service/3.png" alt="img">
                                <div class="thumb">
                                    <img src="attax/assets/img/service/6.png" alt="img">
                                </div>
                                <div class="details">
                                    <div class="details-inner">
                                        <h2>04.</h2>
                                        <p>Duis aute irure dolor reprehenderit in voluptate velit esse cillum dolore fugiat nulla pariatur. Excepteur sint occaecat cupidatat </p>
                                        <a href="service.html">Discover More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="sertab5" role="tabpanel" aria-labelledby="sertab5-tab">
                            <div class="single-service-inner-2">
                                <img class="top_image_bounce animate-img-1" src="attax/assets/img/service/2.png" alt="img">
                                <img class="top_image_bounce animate-img-2" src="attax/assets/img/service/3.png" alt="img">
                                <div class="thumb">
                                    <img src="attax/assets/img/service/4.png" alt="img">
                                </div>
                                <div class="details">
                                    <div class="details-inner">
                                        <h2>05.</h2>
                                        <p>Duis aute irure dolor reprehenderit in voluptate velit esse cillum dolore fugiat nulla pariatur. Excepteur sint occaecat cupidatat </p>
                                        <a href="service.html">Discover More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-2 align-self-center">
                    <div class="section-title style-white mb-0 mt-4 mt-lg-0">
                        <h6 class="sub-title">//  OUR SERVICES</h6>
                        <h2 class="title">Loose And Experienced Tax Preparation</h2>
                    </div>
                    <ul class="service-tab-inner nav nav-tabs mt-lg-5 mt-4" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="sertab1-tab" data-bs-toggle="tab" data-bs-target="#sertab1" type="button" role="tab" aria-controls="sertab1" aria-selected="true">Insurance Tax</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="sertab2-tab" data-bs-toggle="tab" data-bs-target="#sertab2" type="button" role="tab" aria-controls="sertab2" aria-selected="false">Financial Planning</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="sertab3-tab" data-bs-toggle="tab" data-bs-target="#sertab3" type="button" role="tab" aria-controls="sertab3" aria-selected="false">Audit & Assurancy</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="sertab4-tab" data-bs-toggle="tab" data-bs-target="#sertab4" type="button" role="tab" aria-controls="sertab4" aria-selected="false">Strategic Planning</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="sertab5-tab" data-bs-toggle="tab" data-bs-target="#sertab5" type="button" role="tab" aria-controls="sertab5" aria-selected="false">Porject Management</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>  
    </div> 
    <div class="btn-wrap bg-sky text-center">
        <a class="btn btn-base border-radius mt--30 left_image_bounce" href="service.html">View All Services</a> 
    </div>        
    <!-- service area end -->

    <!-- about-area area start -->
    <div class="about-area bg-sky pd-top-120 pd-bottom-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center wow animated fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.1s">
                    <div class="section-title mb-0">
                        <h6 class="sub-title">// About Attax</h6>
                        <h2 class="title">Helping You Put Systems in that Work</h2>
                        <p class="content mb-4">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
                        <div class="row">
                            <div class="col-md-4 align-self-center">
                                <div class="ratting-inner">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <strong>99.9% Customer Satisfaction Based on 750+ Reviews and 20,000 Objective Resource</strong>
                            </div>
                        </div>
                        <div class="btn-wrap">
                            <a class="btn btn-black border-radius me-2" href="about.html">Explore More</a>
                            <a class="btn btn-base border-radius" href="about.html">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-5 mt-5 mt-lg-0">
                    <div class="media progressbar-media ps-lg-5 wow animated fadeInRight" data-wow-duration="1.5s" data-wow-delay="0.3s">
                        <div class="media-left">
                            <div class="circle-counter">
                              <div class="percent">
                                <svg>
                                    <circle cx="50" cy="50" r="45"></circle>
                                    <circle cx="50" cy="50" r="45" style="--percent: 75"></circle>
                                </svg>
                                <div class="number">
                                    <h4>95<span>%</span></h4>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="media-body align-self-center">
                            <h4>Business Consulting</h4>
                            <p>There are many variations of passages Lorem Ipsum available,</p>
                        </div>
                    </div>
                    <div class="media progressbar-media pe-lg-5 wow animated fadeInRight" data-wow-duration="1.5s" data-wow-delay="0.4s">
                        <div class="media-left">
                            <div class="circle-counter">
                              <div class="percent">
                                <svg>
                                    <circle cx="50" cy="50" r="45"></circle>
                                    <circle cx="50" cy="50" r="45" style="--percent: 65"></circle>
                                </svg>
                                <div class="number">
                                    <h4>85<span>%</span></h4>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="media-body align-self-center">
                            <h4>Financial Advising</h4>
                            <p>There are many variations of passages Lorem Ipsum available,</p>
                        </div>
                    </div>
                    <div class="media progressbar-media ps-lg-5 wow animated fadeInRight" data-wow-duration="1.5s" data-wow-delay="0.5s">
                        <div class="media-left">
                            <div class="circle-counter">
                              <div class="percent">
                                <svg>
                                    <circle cx="50" cy="50" r="45"></circle>
                                    <circle cx="50" cy="50" r="45" style="--percent: 65"></circle>
                                </svg>
                                <div class="number">
                                    <h4>75<span>%</span></h4>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="media-body align-self-center">
                            <h4>Brand Consulting</h4>
                            <p>There are many variations of passages Lorem Ipsum available,</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about-area area end -->

    <!-- team-area area start -->
    <div class="team-area pd-top-115 pd-bottom-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-title text-center">
                        <h6 class="sub-title">// Our Team</h6>
                        <h2 class="title">Meet the Professionals</h2>
                        <p class="content mb-4">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-team-inner text-center">
                        <img class="hover-img" src="attax/assets/img/about/12.png" alt="img">
                        <div class="thumb">
                            <img src="attax/assets/img/team/1.png" alt="img">
                        </div>
                        <div class="details">
                            <h4><a href="team-details.html">Alextina Ditarson</a></h4>
                            <p>Senior Tax Advisor</p>
                            <div class="social">
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-team-inner text-center">
                        <img class="hover-img" src="attax/assets/img/about/12.png" alt="img">
                        <div class="thumb">
                            <img src="attax/assets/img/team/2.png" alt="img">
                        </div>
                        <div class="details">
                            <h4><a href="team-details.html">Alan Macdonald</a></h4>
                            <p>Senior Tax Advisor</p>
                            <div class="social">
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-team-inner text-center">
                        <img class="hover-img" src="attax/assets/img/about/12.png" alt="img">
                        <div class="thumb">
                            <img src="attax/assets/img/team/3.png" alt="img">
                        </div>
                        <div class="details">
                            <h4><a href="team-details.html">William Adams</a></h4>
                            <p>Senior Tax Advisor</p>
                            <div class="social">
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-team-inner text-center">
                        <img class="hover-img" src="attax/assets/img/about/12.png" alt="img">
                        <div class="thumb">
                            <img src="attax/assets/img/team/4.png" alt="img">
                        </div>
                        <div class="details">
                            <h4><a href="team-details.html">Advisor Ditarson</a></h4>
                            <p>Senior Tax Advisor</p>
                            <div class="social">
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- team-area area end -->

    <!-- call-to-action-area area start -->
    <div class="call-to-action-area bg-parallax pd-top-120 pd-bottom-120" style="background-image: url('attax/assets/img/bg/4.png');">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-7 col-md-10 align-self-center">
                    <div class="section-title style-white mb-0 text-center">
                        <h6 class="sub-title">// Tax Problems Solved</h6>
                        <h2 class="title">Solve All Your Tax Problems Under One Room</h2>
                        <div class="btn-wrap">
                            <a class="btn btn-black border-radius me-2" href="about.html">Work With Us</a>
                            <a class="btn btn-base border-radius" href="about.html">Get Started</a>
                            <img class="top_image_bounce" src="attax/assets/img/bg/shape2.png" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- call-to-action-area area end -->

    <!-- testimonial-area area start -->
    <div class="testimonial-area pd-top-120">
        <img class="tm-img-animation-1" src="attax/assets/img/about/10.png" alt="img">
        <img class="tm-img-animation-2 top_image_bounce" src="attax/assets/img/about/9.png" alt="img">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 wow animated fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.3s">
                    <div class="section-title mb-0">
                        <h6 class="sub-title">// CUSTOMERS FEEDBACK</h6>
                        <h2 class="title">What they’re talking about services</h2>
                        <div class="testimonial-slider mt-4">
                            <div class="single-testimonial-inner">
                                <div class="thumb">
                                    <img src="attax/assets/img/about/8.png" alt="img">
                                </div>
                                <p class="content">All the Lorem Ipsum generators on the Internet tend repeat predefined chunks as necessary, making this the generator on the Internet. It uses a dictionary of over Latin combined with a handful of model sentence structures,</p>
                                <h4>David D. Rethman</h4>
                                <p class="designation">CEO & Founder</p>
                            </div>
                            <div class="single-testimonial-inner">
                                <div class="thumb">
                                    <img src="attax/assets/img/about/8.png" alt="img">
                                </div>
                                <p>All the Lorem Ipsum generators on the Internet tend repeat predefined chunks as necessary, making this the generator on the Internet. It uses a dictionary of over Latin combined with a handful of model sentence structures,</p>
                                <h4>David D. Rethman</h4>
                                <p class="designation">CEO & Founder</p>
                            </div>
                            <div class="single-testimonial-inner">
                                <div class="thumb">
                                    <img src="attax/assets/img/about/8.png" alt="img">
                                </div>
                                <p>All the Lorem Ipsum generators on the Internet tend repeat predefined chunks as necessary, making this the generator on the Internet. It uses a dictionary of over Latin combined with a handful of model sentence structures,</p>
                                <h4>David D. Rethman</h4>
                                <p class="designation">CEO & Founder</p>
                            </div>
                        </div>
                        <div class="testimonial-slider-control">
                            <div class="pagination"></div>
                            <div class="slider-controlprogress">
                                <span class="slider__label sr-only"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 col-md-8">
                    <div class="about-thumb-area pb-0 pe-0 mt-4 mt-lg-0">
                        <img class="about-img-1 wow animated zoomIn" data-wow-duration="1.5s" data-wow-delay="0.3s" src="attax/assets/img/about/6.png" alt="img">
                        <img class="about-img-5 top_image_bounce" src="attax/assets/img/about/5.png" alt="img">
                        <img class="about-img-6 top_image_bounce" src="attax/assets/img/about/7.png" alt="img">
                        <div class="avg-ratting-wrap">
                            <div class="avg-ratting-inner">
                                <h2>4.8 +</h2>
                                <p>Avg Rating</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial-area area end -->

    <!-- case-study-area area start -->
    <div class="case-study-area pd-top-110 pd-bottom-90">
        <div class="container">
            <div class="section-title">
                <div class="row">
                    <div class="col-lg-7 pe-xl-5 align-self-center">
                        <h6 class="sub-title">// Case Study</h6>
                        <h2 class="title">Delivering our clients more project clarity, greater insight, and less chaos.</h2>
                    </div>
                    <div class="col-lg-5 align-self-end">
                        <p class="content">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, search for 'lorem ipsum' will uncover </p>
                        <div class="btn-wrap">
                            <a class="btn btn-base border-radius me-2" href="about.html">View All Project</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-case-study-inner">
                        <div class="thumb">
                            <img src="attax/assets/img/case-study/1.png" alt="img">
                            <a class="case-view-btn" href="case-study-details.html"><span>View Projects</span> +</a>
                        </div>
                        <div class="details">
                            <p>Project</p>
                            <h4><a href="case-study-details.html">Permissive Tax Planning</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-case-study-inner">
                        <div class="thumb">
                            <img src="attax/assets/img/case-study/2.png" alt="img">
                            <a class="case-view-btn" href="case-study-details.html"><span>View Projects</span> +</a>
                        </div>
                        <div class="details">
                            <p>Project</p>
                            <h4><a href="case-study-details.html">Short-range Tax Planning</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-case-study-inner">
                        <div class="thumb">
                            <img src="attax/assets/img/case-study/3.png" alt="img">
                            <a class="case-view-btn" href="case-study-details.html"><span>View Projects</span> +</a>
                        </div>
                        <div class="details">
                            <p>Project</p>
                            <h4><a href="case-study-details.html">Planning Expenditures</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- case-study-area area end -->

    <!-- faq-area area start -->
    <div class="faq-area pd-top-110 bg-cover pd-bottom-120" style="background-image: url('attax/assets/img/bg/5.png');">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="section-title style-white mb-0 pe-xl-5">
                        <h6 class="sub-title">// Frequently Asked Questions</h6>
                        <h2 class="title">Providing exceptional tax advisor & financial consulting and insight from the start.</h2>
                        <p class="content mb-4">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
                        <div class="row">
                            <div class="col-md-6 border-right-1-light  pe-xl-4">
                                <h5 class="section-counter"><span>K<span class="counter">25</span></span> Daily Visitor</h5>
                            </div>
                            <div class="col-md-6 ps-xl-4">
                                <h5 class="section-counter"><span>+<span class="counter">50</span></span> Customer</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ps-xl-4">
                    <div class="accordion attax-accordion mt-5 mt-lg-0 style-white" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                1. Where Can I Find Information?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, search for 'lorem ipsum' will uncover 
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    2. What Are Your Terms And Conditions?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, search for 'lorem ipsum' will uncover 
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    3. Can I Buy Directly From The Factory?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, search for 'lorem ipsum' will uncover 
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    4. What Kinds of Payment Do You Accept?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, search for 'lorem ipsum' will uncover 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- faq-area area end -->

    <!-- contact-area area start -->
    <div class="contact-area pd-top-110 bg-cover pd-bottom-120">
        <img class="bg-img-1" src="attax/assets/img/bg/10.png" alt="img">
        <img class="bg-img-2" src="attax/assets/img/bg/9.png" alt="img">
        <img class="bg-img-3 wow animated fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.3s" src="attax/assets/img/bg/7.png" alt="img">
        <img class="bg-img-4 left_image_bounce" src="attax/assets/img/bg/8.png" alt="img">
        <div class="container">
            <div class="contact-inner">
                <div class="row">
                    <div class="col-xl-7 col-lg-7 offset-xl-5 offset-lg-5">
                        <div class="contact-from-inner">
                            <img class="ci-bg-img-1 top_image_bounce" src="attax/assets/img/bg/6.png" alt="img">
                            <div class="section-title mb-4">
                                <h6 class="sub-title">// SEND A MESSAGE</h6>
                                <h2 class="title">Request a call back</h2>
                            </div>
                            <form>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="single-input-inner">
                                            <input type="text" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="single-input-inner">
                                            <input type="text" placeholder="Phone">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="single-input-inner">
                                            <input type="text" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="single-input-inner">
                                            <input type="text" placeholder="How can we help you?">
                                        </div>
                                    </div>
                                    <div class="col-lg-12"> 
                                        <div class="single-input-inner">
                                            <textarea placeholder="Your Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <a class="btn btn-black border-radius" href="#">Send A Message</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact-area area end -->

    <!-- blog-area area start -->
    <div class="blog-area bg-relative bg-sky pd-top-115 pd-bottom-120">
        <img class="top_image_bounce position-top-right" src="attax/assets/img/about/4.png" alt="img">
        <img class="top_image_bounce position-bottom-right" src="attax/assets/img/about/5.png" alt="img">
        <img class="left_image_bounce position-bottom-left" src="attax/assets/img/about/7.png" alt="img">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-title text-center">
                        <h6 class="sub-title">// Latest Articles</h6>
                        <h2 class="title">Blog & News From Us!</h2>
                        <p class="content mb-4">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-inner">
                        <div class="details">
                            <div class="cat-wrap">
                                <a href="#">Finance</a>
                                <a href="#">Investment</a>
                            </div>
                            <h4><a href="blog-details.html">Mastercards, just pushes deeper into crypto</a></h4>
                            <p class="date">January 19, 2023 . 02 Comments</p>
                        </div>
                        <div class="thumb">
                            <img src="attax/assets/img/blog/1.png" alt="img">
                        </div>
                        <a class="read-more" href="blog-details.html">Read More <img src="attax/assets/img/right-up.png" alt="img"></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-inner">
                        <div class="details">
                            <div class="cat-wrap">
                                <a href="#">Finance</a>
                                <a href="#">Company</a>
                            </div>
                            <h4><a href="blog-details.html">Job market cooling, workers still have power</a></h4>
                            <p class="date">January 19, 2023 . 02 Comments</p>
                        </div>
                        <div class="thumb">
                            <img src="attax/assets/img/blog/2.png" alt="img">
                        </div>
                        <a class="read-more" href="blog-details.html">Read More <img src="attax/assets/img/right-up.png" alt="img"></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-inner">
                        <div class="details">
                            <div class="cat-wrap">
                                <a href="#">Tax</a>
                                <a href="#">Investment</a>
                            </div>
                            <h4><a href="blog-details.html">High inflations is hitting holiday travel plans</a></h4>
                            <p class="date">January 19, 2023 . 02 Comments</p>
                        </div>
                        <div class="thumb">
                            <img src="attax/assets/img/blog/3.png" alt="img">
                        </div>
                        <a class="read-more" href="blog-details.html">Read More <img src="attax/assets/img/right-up.png" alt="img"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="btn-wrap text-center mt--50">
        <a class="blog-page-btn left_image_bounce" href="blog.html"><img src="attax/assets/img/right-up2.png" alt="img"></a>
    </div>
    <!-- blog-area area end -->

    <!-- client-area area start -->
    <div class="client-area pd-top-120 pd-bottom-90">
        <div class="container text-center">
            <h2>We worked with global largest brands </h2>
        </div>
        <div class="container">
            <div class="client-slider">
                <div class="thumb">
                    <img src="attax/assets/img/client/1.png" alt="img">
                </div>
                <div class="thumb">
                    <img src="attax/assets/img/client/2.png" alt="img">
                </div>
                <div class="thumb">
                    <img src="attax/assets/img/client/3.png" alt="img">
                </div>
                <div class="thumb">
                    <img src="attax/assets/img/client/4.png" alt="img">
                </div>
                <div class="thumb">
                    <img src="attax/assets/img/client/5.png" alt="img">
                </div>
                <div class="thumb">
                    <img src="attax/assets/img/client/2.png" alt="img">
                </div>
            </div>
        </div>
    </div>
    <!-- client-area area start -->

    <!-- instagram-area area start -->
    <div class="instagram-area pd-bottom-120">
        <div class="container">
            <div class="instagram-slider">
                <div class="item-wrap">
                    <div class="thumb">
                        <img src="attax/assets/img/instagram/1.png" alt="img">
                        <a href="#">Instagram</a>
                    </div>
                </div>
                <div class="item-wrap">
                    <div class="thumb">
                        <img src="attax/assets/img/instagram/2.png" alt="img">
                        <a href="#">Instagram</a>
                    </div>
                </div>
                <div class="item-wrap">
                    <div class="thumb">
                        <img src="attax/assets/img/instagram/3.png" alt="img">
                        <a href="#">Instagram</a>
                    </div>
                </div>
                <div class="item-wrap">
                    <div class="thumb">
                        <img src="attax/assets/img/instagram/4.png" alt="img">
                        <a href="#">Instagram</a>
                    </div>
                </div>
                <div class="item-wrap">
                    <div class="thumb">
                        <img src="attax/assets/img/instagram/5.png" alt="img">
                        <a href="#">Instagram</a>
                    </div>
                </div>
                <div class="item-wrap">
                    <div class="thumb">
                        <img src="attax/assets/img/instagram/6.png" alt="img">
                        <a href="#">Instagram</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- instagram-area area start -->

    <!-- footer area start -->
    <footer class="footer-area bg-cover" style="background-image: url('attax/assets/img/bg/12.png');">
        <div class="container">
            <div class="footer-top">
                <div class="row">
                    <div class="col-lg-6 align-self-center mb-4 mb-lg-0">
                        <h2 class="animate-text-footer">
                            <span class="waviy ms-2">
                               <span style="--i:1">L</span>
                               <span style="--i:2">e</span>
                               <span style="--i:3">t </span> 
                               <span style="--i:4">’</span>
                               <span style="--i:5">s</span>
                               <span class="ms-2" style="--i:5">S</span>
                               <span style="--i:6">t</span>
                               <span style="--i:7">a</span>
                               <span style="--i:8">r</span>
                               <span style="--i:9">t</span>
                               <span style="--i:10">e</span>
                               <span style="--i:11">d</span>
                            </span>
                        </h2>
                        <p>For furthur info & support, <a href="contact.html">Contact us.</a></p>
                    </div>
                    <div class="col-lg-6">
                        <div class="footer-subscribe">
                            <div class="single-input-inner">
                                <input class="input-field" type="text" placeholder="Enter your email">
                                <a class="btn btn-white" href="#">Send</a>
                            </div>
                            <span>We’ll contact you shortly</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="widget widget_about pe-xl-4">
                        <h4 class="widget-title">The Address</h4>
                        <div class="details">
                            <p>Valentin, Street Road 24, New York, USA - 67452</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="widget widget_about">
                        <h4 class="widget-title">The Email</h4>
                        <div class="details">
                            <p>attaxcontact@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="widget widget_about">
                        <h4 class="widget-title">The Phone</h4>
                        <div class="details">
                            <p>+000 123 (456) 789</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="widget widget_about">
                        <h4 class="widget-title">Working Hours</h4>
                        <div class="details">
                            <p>Mon - Saturday: 9 AM – 6 PM Sunday: Closed</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="footer-bottom">
                <div class="row">
                    <div class="col-lg-4 align-self-center mb-1 mb-lg-0">
                        <p>Copyright © 2023 Attax. All rights reserved.</p>
                    </div>
                    <div class="col-lg-5 align-self-center text-lg-center mb-3 mb-lg-0">
                        <p>Privacy Policy  /  Terms & Services</p>
                    </div>
                    <div class="col-lg-3 text-lg-end">
                        <ul class="social-media">
                            <li>
                                <a class="facebook" href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a class="twitter" href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a class="instagram" href="#">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a class="youtube" href="#">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- back to top area start -->
        <div class="back-to-top">
            <span class="back-top">Back to top</span>
        </div>
        <!-- back to top area end -->
    </footer>
    <!-- footer area end -->

    <!-- all plugins here -->
    <script src="attax/assets/js/jquery.min.js"></script>
    <script src="attax/assets/js/bootstrap.min.js"></script>
    <script src="attax/assets/js/fontawesome.min.js"></script>
    <script src="attax/assets/js/nice-select.min.js"></script>
    <script src="attax/assets/js/magnific.min.js"></script>
    <script src="attax/assets/js/wow.min.js"></script>
    <script src="attax/assets/js/slick.min.js"></script>
    <script src="attax/assets/js/jQuery.rProgressbar.min.js"></script>
    <script src="attax/assets/js/counter-up.min.js"></script>
    <script src="attax/assets/js/waypoint.min.js"></script>
    <!-- main js  -->
    <script src="attax/assets/js/main.js"></script>
</body>

<!-- Mirrored from gramentheme.com/html/attax/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Mar 2023 01:40:50 GMT -->
</html>