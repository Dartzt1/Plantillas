<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from gramentheme.com/html/attax/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Mar 2023 01:41:08 GMT -->
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

    <title>@yield('contact')</title>

</head>
<body class='bg-light'>

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
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h4 class="wow animated fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">Contact info</h4>
                    <h3 class="wow animated fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.4s">Our team are here to help you.</h3>
                    <div class="scroll-down top_image_bounce wow animated fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.5s">
                        <a href="#contact-page-area">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="80" viewBox="0 0 40 80">
                              <image id="scroll" width="40" height="80" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAABQCAYAAABrjzfBAAADwElEQVRoge2bP1LbQBTGP5xQsCoiThD7BIgTxL5BOEGcE0CqlIaSytClg5wA0qUzOQHmBEY3EIW2JfM833oW2bIl78rSJPpmdjwGefent3/13tOeOjjAluoDiAB84mfIIkoAPLM8AXhgWVKq9drWywIKwCmAMwBTq/EpoRLrui5LnzcR8toLgs/lC1AqHwEYArgGcGs3UlACe07YBegmwE6BusViMwAvAHpspCwc+Bu5wQGAGMCE39dqkwXHAD4DOGE3+lSXkPep1t/y6s2zYMgfHwI4rgAOtKjU3Q2UegyUClddlAc4YTcMrYFfhZJU6xNOtruigGNrvOxEqdbSVhwoNc629z7zfcgxd7wrOEuydElXx6nWV+bP9iQxg3aw5SzdSvYyEygVkaGXaj0fWnYXyzr3c5dwWaVaT7nOjsy/jAVrsR5W7CSczTNjRWPBEVf32qxnxK695phcWHBWh/WQsxcHSkmPPqZaH3a4mSdNsJ5RqrWwTAOl+gbwTzPQ3kgW70gAj/LOajVLmOYW7Dapey3JknPUZECZF6HM4leZzXVRrDuwBkq9Fjmw1qoW0FUtoKv+O8CZ5/raLnZWC+iqFtBVLaCrWkBXtYCuagFd9c8BRg5tmeBOKZUFfAQgz9E3JRqL6CCfbXOgLQu4R//1Hhsbbbj+lDcVM9ZS2kGQdaIX0ZTOdok4TXj9xYrfmdBZz8W14jJJpNGBFRmwNbTCXk5+H9dZbCDHVigWtJ4Xj62PZeaZ0YEzfh/6jBb48m6FnKlmZhe23q68W3Yg+8mnv9HnTvKLgPce6/QKaPzcXkO3PgGfM59etM1CnaekCldye9xyVQvoqhbQVR0TcmoaGCPviQH80ACmrOYxxA63pjrSUDZJAOMOg9n9BgIK09RY8KgBQFnN0/g6PIXIo+HHppAxqSJMtX4wy4ykgXytmcuWSZNZpKUskmkqznZb0orEnkWSkWR/GAsmmQefOvVFrMfUlDfJZaGV4FNFQuNGC2ath8xWl9BDcFfHzsKdQ+AuDBxyclivuLPsZNIYCwZKiWEkd/DNMMtLsp3wGaNySAEMlBJvWZRqvbSj5Z1mTiy3WZXdHRKuy7G/pDzAhPtzTPdZacdjAUWs+yXVemAyLrN6t7+/v66q30zwvqElYw/rpNTzHcAPAJep1ufrLi5yYL2l+Xscm2W8q7a63CFmzM/ucUKuVdHnYpO23LUcl2JJ2Y7kNGTefLB9NFLstyWkyJZaardyfV1DipyEzJsP9usaUmTBlxuQz/KvawD4CybGJEiPys7UAAAAAElFTkSuQmCC"/>
                            </svg>
                        </a>
                    </div> 
                </div>
            </div>
        </div>
    </div>
    <!-- banner end -->

    <!-- map start -->
    <div class="contact-g-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d29208.601361499546!2d90.3598076!3d23.7803374!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1589109092857!5m2!1sen!2sbd"></iframe>
    </div> 
    <!-- map end -->

    <!-- contact-page-area area start -->
    <div id="contact-page-area" class="contact-page-area bg-sky pd-top-120 pd-bottom-120 bg-relative">
        <img class="left_image_bounce position-top-right" src="attax/assets/img/about/4.png" alt="img">
        <div class="container">
            <div class="contact-page-inner">
                <div class="row justify-content-center">
                    <div class="col-lg-6 pe-xl-5">
                        <h3 class="mb-xl-5 mb-4">Write a message</h3>
                        <div class="single-input-inner style-bg">
                            <input type="text" placeholder="Name">
                        </div>
                        <div class="single-input-inner style-bg">
                            <input type="text" placeholder="Phone">
                        </div>
                        <div class="single-input-inner style-bg">
                            <input type="text" placeholder="Email">
                        </div>
                        <div class="single-input-inner style-bg">
                            <textarea placeholder="Message"></textarea>
                        </div>
                        <div class="btn-wrap">
                            <a class="btn btn-black border-radius" href="#">Send A Message</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-title mb-0 mt-5 mt-lg-0">
                            <h6 class="sub-title">// Quick Contact</h6>
                            <h2 class="title">Solutions: all your questions answered</h2>
                            <p class="content">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione</p>
                            <div class="media single-list-media style-3 mt-4">
                                <div class="media-left">
                                    <img src="attax/assets/img/icon/8.png" alt="img">
                                </div>
                                <div class="media-body align-self-center">
                                    <p>Have any question?</p>
                                    <h4>Free +88 (7800) 0002</h4>
                                </div>
                            </div>
                            <div class="media single-list-media style-3 mt-4">
                                <div class="media-left">
                                    <img src="attax/assets/img/icon/9.png" alt="img">
                                </div>
                                <div class="media-body align-self-center">
                                    <p>Write email</p>
                                    <h4>wostix@gmail.com</h4>
                                </div>
                            </div>
                            <div class="media single-list-media style-3 mt-4 mb-0">
                                <div class="media-left">
                                    <img src="attax/assets/img/icon/10.png" alt="img">
                                </div>
                                <div class="media-body align-self-center">
                                    <p>Visit anytime</p>
                                    <h4>30 golden street. New York</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact-page-area area end -->

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

<!-- Mirrored from gramentheme.com/html/attax/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Mar 2023 01:41:09 GMT -->
</html>