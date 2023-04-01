<!DOCTYPE html>
<html lang="zxx">
<!-- Mirrored from gramentheme.com/html/magpie/author.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Mar 2023 01:44:37 GMT -->
<head>
    @include('magpie.partial.title')
    @include('magpie.partial.stylesheet')
</head>
<body>

    @include('magpie.partial.start')
    @include('magpie.partial.search')
    @include('magpie.partial.div-boby')
    @include('magpie.partial.header')
    @include('magpie.partial.blog-title')

    <!-- start blog page -->
    <div class="main-blog-area pd-top-60 pd-bottom-60">
        <div class="container">
            <div class="single-author-inner pd-bottom-60">
                <div class="media">
                    <div class="media-left">
                        <img src="magpie/assets/img/lifestyle/author.png" alt="img">
                    </div>
                    <div class="media-body mt-4 mt-lg-0 align-self-center">
                        <h4 class="name">Gabbie Hanna</h4>
                        <span>www.website.com</span>
                        <p>Along with a monthly print distribution of 40,000, Reason.com attracts 4 million visits a month. Digiqole produces original videos that draw over 5 million views a month, as well as podcasts, live events, and more. Our staffers regularly appear on leading cable news and radio programs and our work is widely</p>
                        <ul class="social-area social-area-2">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            @include('magpie.partial.page-blog')
        </div>
    </div>
    <!-- blog area end-->

    @include('magpie.partial.footer')
    @include('magpie.partial.back-top-area')
    @include('magpie.partial.plugins')
    @include('magpie.partial.main-js')
</body>
<!-- Mirrored from gramentheme.com/html/magpie/author.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Mar 2023 01:44:37 GMT -->
</html>