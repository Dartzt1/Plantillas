<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from gramentheme.com/html/attax/service.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Mar 2023 01:40:50 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Attax - Tax Advisor Html Template</title>
    <link rel=icon href="assets/img/favicon.png" sizes="20x20" type="image/png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="attax/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="attax/assets/css/animate.min.css">
    <link rel="stylesheet" href="attax/assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="attax/assets/css/nice-select.min.css">
    <link rel="stylesheet" href="attax/assets/css/magnific.min.css">
    <link rel="stylesheet" href="attax/assets/css/slick.min.css">
    <link rel="stylesheet" href="attax/assets/css/style.css">
    <link rel="stylesheet" href="attax/assets/css/responsive.css">

    <title>@yield('service')</title>

</head>
<body class='sc5'>

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
                <a href="index-2.html"><img src="attax/assets/img/logo.png" alt="img"></a>
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
    <div class="banner-area bg-relative pd-bottom-120 banner-small-inner bg-light bg-relative bg-cover text-center">
        <img class="left_image_bounce position-bottom-left" src="attax/assets/img/about/4.png" alt="img">
        <div class="container">
            <h4 class="wow animated fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">Our Services</h4>
            <h3 class="wow animated fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.4s">No matter the challenge, we build on what we know works and elevate your vision of success</h3>
            <div class="scroll-down top_image_bounce wow animated fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.5s">
                <a href="#service-area">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="80" viewBox="0 0 40 80">
                      <image id="scroll" width="40" height="80" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAABQCAYAAABrjzfBAAADwElEQVRoge2bP1LbQBTGP5xQsCoiThD7BIgTxL5BOEGcE0CqlIaSytClg5wA0qUzOQHmBEY3EIW2JfM833oW2bIl78rSJPpmdjwGefent3/13tOeOjjAluoDiAB84mfIIkoAPLM8AXhgWVKq9drWywIKwCmAMwBTq/EpoRLrui5LnzcR8toLgs/lC1AqHwEYArgGcGs3UlACe07YBegmwE6BusViMwAvAHpspCwc+Bu5wQGAGMCE39dqkwXHAD4DOGE3+lSXkPep1t/y6s2zYMgfHwI4rgAOtKjU3Q2UegyUClddlAc4YTcMrYFfhZJU6xNOtruigGNrvOxEqdbSVhwoNc629z7zfcgxd7wrOEuydElXx6nWV+bP9iQxg3aw5SzdSvYyEygVkaGXaj0fWnYXyzr3c5dwWaVaT7nOjsy/jAVrsR5W7CSczTNjRWPBEVf32qxnxK695phcWHBWh/WQsxcHSkmPPqZaH3a4mSdNsJ5RqrWwTAOl+gbwTzPQ3kgW70gAj/LOajVLmOYW7Dapey3JknPUZECZF6HM4leZzXVRrDuwBkq9Fjmw1qoW0FUtoKv+O8CZ5/raLnZWC+iqFtBVLaCrWkBXtYCuagFd9c8BRg5tmeBOKZUFfAQgz9E3JRqL6CCfbXOgLQu4R//1Hhsbbbj+lDcVM9ZS2kGQdaIX0ZTOdok4TXj9xYrfmdBZz8W14jJJpNGBFRmwNbTCXk5+H9dZbCDHVigWtJ4Xj62PZeaZ0YEzfh/6jBb48m6FnKlmZhe23q68W3Yg+8mnv9HnTvKLgPce6/QKaPzcXkO3PgGfM59etM1CnaekCldye9xyVQvoqhbQVR0TcmoaGCPviQH80ACmrOYxxA63pjrSUDZJAOMOg9n9BgIK09RY8KgBQFnN0/g6PIXIo+HHppAxqSJMtX4wy4ykgXytmcuWSZNZpKUskmkqznZb0orEnkWSkWR/GAsmmQefOvVFrMfUlDfJZaGV4FNFQuNGC2ath8xWl9BDcFfHzsKdQ+AuDBxyclivuLPsZNIYCwZKiWEkd/DNMMtLsp3wGaNySAEMlBJvWZRqvbSj5Z1mTiy3WZXdHRKuy7G/pDzAhPtzTPdZacdjAUWs+yXVemAyLrN6t7+/v66q30zwvqElYw/rpNTzHcAPAJep1ufrLi5yYL2l+Xscm2W8q7a63CFmzM/ucUKuVdHnYpO23LUcl2JJ2Y7kNGTefLB9NFLstyWkyJZaardyfV1DipyEzJsP9usaUmTBlxuQz/KvawD4CybGJEiPys7UAAAAAElFTkSuQmCC"/>
                    </svg>
                </a>
            </div> 
        </div>
    </div>
    <!-- banner end -->

    <!-- banner area start -->
    <div class="banner-area">
        <img src="attax/assets/img/bg/14.png" alt="img">
    </div>
    <!-- banner area end -->

    <!-- service area start -->
    <div id="service-area" class="service-area bg-sky pd-top-110 bg-relative">
        <img class="left_image_bounce position-top-right" src="attax/assets/img/about/4.png" alt="img">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <h6 class="sub-title">//  OUR SERVICES</h6>
                        <h2 class="title">Loose And Experienced Tax Preparation</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-inner">
                        <div class="thumb">
                            <img src="attax/assets/img/service-icon/1.png" alt="img">
                        </div>
                        <div class="details">
                            <h4><a href="service-details.html">Insurance Tax</a></h4>
                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will </p>
                            <a class="case-view-btn" href="case-study-details.html"><span>View Details</span> +</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-inner">
                        <div class="thumb">
                            <img src="attax/assets/img/service-icon/2.png" alt="img">
                        </div>
                        <div class="details">
                            <h4><a href="service-details.html">Financial Planning</a></h4>
                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will </p>
                            <a class="case-view-btn" href="case-study-details.html"><span>View Details</span> +</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-inner">
                        <div class="thumb">
                            <img src="attax/assets/img/service-icon/3.png" alt="img">
                        </div>
                        <div class="details">
                            <h4><a href="service-details.html">Audit & Assurancy</a></h4>
                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will </p>
                            <a class="case-view-btn" href="case-study-details.html"><span>View Details</span> +</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-inner">
                        <div class="thumb">
                            <img src="attax/assets/img/service-icon/4.png" alt="img">
                        </div>
                        <div class="details">
                            <h4><a href="service-details.html">Strategic Planning</a></h4>
                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will </p>
                            <a class="case-view-btn" href="case-study-details.html"><span>View Details</span> +</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-inner">
                        <div class="thumb">
                            <img src="attax/assets/img/service-icon/5.png" alt="img">
                        </div>
                        <div class="details">
                            <h4><a href="service-details.html">Finance Secure</a></h4>
                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will </p>
                            <a class="case-view-btn" href="case-study-details.html"><span>View Details</span> +</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-inner">
                        <div class="thumb">
                            <img src="attax/assets/img/service-icon/1.png" alt="img">
                        </div>
                        <div class="details">
                            <h4><a href="service-details.html">Management</a></h4>
                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will </p>
                            <a class="case-view-btn" href="case-study-details.html"><span>View Details</span> +</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service area end -->

    <!-- counter-area area start -->
    <div class="counter-area bg-sky pd-top-90 pd-bottom-120">
        <div class="container">
            <div class="counter-area-inner">
                <h2 class="overlay-title">Company</h2>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="single-counter-inner text-center">
                            <h2><span class="counter">12</span> k</h2>
                            <h6>Successfully Project Done</h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-counter-inner text-center">
                            <h2><span class="counter">450</span></h2>
                            <h6>Saticfied Global Clients</h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-counter-inner text-center">
                            <h2><span class="counter">25</span> m</h2>
                            <h6>3,280 avg Rating</h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
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

    <!-- work-process area start -->
    <div class="work-process bg-black p-4 p-lg-0">
        <div class="row">
            <div class="col-lg-6">
                <div class="work-process-thumb">
                    <img src="attax/assets/img/service/7.png" alt="img">
                    <div class="quote-wrap">
                        <h4>Quality, Trust, and Expertise</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 align-self-center">
                <div class="section-title style-white mb-0 pd-top-100 pd-bottom-100">
                    <h6 class="sub-title">// Our Process</h6>
                    <h2 class="title">Our Work Process</h2>
                    <div class="media single-list-media style-2 mt-4">
                        <div class="media-left">
                            01
                        </div>
                        <div class="media-body align-self-center">
                            <h4>Make An Appointment</h4>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered</p>
                        </div>
                    </div>
                    <div class="media single-list-media style-2 mt-4">
                        <div class="media-left">
                            02
                        </div>
                        <div class="media-body align-self-center">
                            <h4>Meet Our Professional</h4>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered</p>
                        </div>
                    </div>
                    <div class="media single-list-media style-2 mt-4">
                        <div class="media-left">
                            03
                        </div>
                        <div class="media-body align-self-center">
                            <h4>24/7 Full Support</h4>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- work-process area end -->

    <!-- pricing-area area start -->
    <div class="pricing-area pd-top-115 pd-bottom-90" style="background-image: url('attax/assets/img/bg/3.png');">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-title text-center">
                        <h6 class="sub-title">// Pricing Plans</h6>
                        <h2 class="title">Affordable Pricing Plans</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-pricing-inner text-center">
                        <h4>Basic Plan</h4>
                        <h2>$99.00</h2>
                        <p class="month">Per/Mounth</p>
                        <p>Lorem ipsum dolor sit amet, consec tetur adipiscing.</p>
                        <ul>
                            <li>Includes all Workbooks</li>
                            <li>Vehicula ut sagittis at</li>
                            <li>Rutrum ac netus gravida</li>
                            <li>24/7 Online Support</li>
                            <li>Cashback Guarantee</li>
                        </ul>
                        <a class="btn btn-black border-radius" href="#">Purchase Now</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-pricing-inner text-center">
                        <h4>Advanced Plan</h4>
                        <h2>$199.00</h2>
                        <p class="month">Per/Mounth</p>
                        <p>Lorem ipsum dolor sit amet, consec tetur adipiscing.</p>
                        <ul>
                            <li>Includes all Workbooks</li>
                            <li>Vehicula ut sagittis at</li>
                            <li>Rutrum ac netus gravida</li>
                            <li>24/7 Online Support</li>
                            <li>Cashback Guarantee</li>
                        </ul>
                        <a class="btn btn-black border-radius" href="#">Purchase Now</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-pricing-inner text-center">
                        <h4>Premium Plan</h4>
                        <h2>$299.00</h2>
                        <p class="month">Per/Mounth</p>
                        <p>Lorem ipsum dolor sit amet, consec tetur adipiscing.</p>
                        <ul>
                            <li>Includes all Workbooks</li>
                            <li>Vehicula ut sagittis at</li>
                            <li>Rutrum ac netus gravida</li>
                            <li>24/7 Online Support</li>
                            <li>Cashback Guarantee</li>
                        </ul>
                        <a class="btn btn-black border-radius" href="#">Purchase Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- pricing-area area end -->

    <!-- testimonial-area area start -->
    <div class="testimonial-area bg-sky pd-top-120 pd-bottom-120">
        <img class="tm-img-animation-1" src="attax/assets/img/about/10.png" alt="img">
        <img class="tm-img-animation-2 top_image_bounce" src="attax/assets/img/about/9.png" alt="img">
        <div class="container pd-bottom-120">
            <div class="row">
                <div class="col-lg-6">
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
                        <img class="about-img-1" src="attax/assets/img/about/6.png" alt="img">
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

    <!-- quote-area area start -->
    <div class="quote-area pd-bottom-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 bg-black">
                    <div class="media p-4 pt-lg-5 pb-lg-5">
                        <div class="media-left pe-md-4 mb-3 mb-lg-0">
                            <img src="attax/assets/img/about/15.png" alt="img">
                        </div>
                        <div class="media-body align-self-center">
                            <h3 class="text-white mb-md-4">3k Problems Solved</h3>
                            <p class="text-white mb-0">There are many variations of passages of Lorem Ipsum available, but the alteration in some form, </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 bg-base">
                    <div class="media p-4 pt-lg-5 pb-lg-5">
                        <div class="media-body align-self-center">
                            <h3 class="text-white mb-0">Have An Emergency?</h3>
                            <h5 class="text-white mb-3">+11 44-45-4789</h5>
                            <p class="text-white mb-0">There are many variations of passages of Lorem Ipsum available,</p>
                        </div>
                        <div class="media-left ps-md-4 mt-3 mt-lg-0">
                            <img src="attax/assets/img/about/16.png" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- quote-area area end -->

    <!-- client-area area start -->
    <div class="client-area bg-light pd-top-120 pd-bottom-90">
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
    <div class="instagram-area pd-bottom-120" style="background-image: url('attax/assets/img/bg/11.png');">
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

<!-- Mirrored from gramentheme.com/html/attax/service.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Mar 2023 01:40:54 GMT -->
</html>