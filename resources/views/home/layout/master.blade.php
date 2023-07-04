<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

        <title>{{ config('app.name') }} - @yield('title')</title>

        <!-- CSS Stylesheets -->
        <link rel="stylesheet" href="{{ asset('assets/assets/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/assets/slick/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/assets/slick/slick-theme.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/assets/elagent-icon/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/assets/animation/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/assets/mcustomscrollbar/jquery.mCustomScrollbar.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
        @yield('css')
    </head>

<body data-scroll-animation="true">
    @include('home.section.preloader')
    <div class="body_wrapper">


        <section class="breadcrumb_area">
            <img class="p_absolute bl_left" src="img/v.svg" alt="">
            <img class="p_absolute bl_right" src="img/home_one/b_leaf.svg" alt="">
            <img class="p_absolute star" src="img/home_one/banner_bg.png" alt="">
            <img class="p_absolute wave_shap_one" src="img/blog-classic/shap_01.png" alt="">
            <img class="p_absolute wave_shap_two" src="img/blog-classic/shap_02.png" alt="">
            <img class="p_absolute one wow fadeInRight" src="img/home_one/b_man_two.png" alt="">
            <img class="p_absolute two wow fadeInUp" data-wow-delay="0.2s" src="img/home_one/flower.png" alt="">
            <div class="container custom_container">
                <form action="#" class="banner_search_form banner_search_form_two">
                    <div class="input-group">
                        <input type="search" class="form-control" placeholder='Search ("/" to focus)'>
                        <div class="input-group-append">
                            <select class="custom-select" id="inlineFormCustomSelect">
                                <option selected>All Category</option>
                                <option value="1">Doc Archive</option>
                                <option value="2">Doc List</option>
                                <option value="3">KbDoc</option>
                            </select>
                        </div>
                        <button type="submit"><i class="icon_search"></i></button>
                    </div>
                </form>
            </div>
        </section>
        @yield('content')

        <footer class="footer_area f_bg_color">
            <img class="p_absolute leaf" src="img/v.svg" alt="">
            <img class="p_absolute f_man" src="img/home_two/f_man.png" alt="">
            <img class="p_absolute f_cloud" src="img/home_two/cloud.png" alt="">
            <img class="p_absolute f_email" src="img/home_two/email-icon.png" alt="">
            <img class="p_absolute f_email_two" src="img/home_two/email-icon_two.png" alt="">
            <img class="p_absolute f_man_two" src="img/home_two/man.png" alt="">
            <div class="footer_top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="f_widget subscribe_widget">
                                <a href="index.html" class="f_logo"><img src="img/logo.png" alt=""></a>
                                <h4 class="c_head">Subscribe to our newsletter</h4>
                                <form action="#" class="footer_subscribe_form">
                                    <input type="email" placeholder="Email" class="form-control">
                                    <button type="submit" class="s_btn">Send</button>
                                </form>
                                <ul class="list-unstyled f_social_icon">
                                    <li><a href="#"><i class="social_facebook"></i></a></li>
                                    <li><a href="#"><i class="social_twitter"></i></a></li>
                                    <li><a href="#"><i class="social_vimeo"></i></a></li>
                                    <li><a href="#"><i class="social_linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="f_widget link_widget pl_30">
                                <h3 class="f_title">Company</h3>
                                <ul class="list-unstyled link_list">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">Affiliates</a></li>
                                    <li><a href="#">Partners</a></li>
                                    <li><a href="#">Careers</a></li>
                                    <li><a href="#">Docly for Good</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6">
                            <div class="f_widget link_widget">
                                <h3 class="f_title">Support</h3>
                                <ul class="list-unstyled link_list">
                                    <li><a href="index-cool.html">Help Desk</a></li>
                                    <li><a href="#">Knowledge Base</a></li>
                                    <li><a href="#">Live Chat</a></li>
                                    <li><a href="#">Integrations</a></li>
                                    <li><a href="#">Reports</a></li>
                                    <li><a href="#">iOS & Android</a></li>
                                    <li><a href="#">Messages</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="f_widget link_widget pl_70">
                                <h3 class="f_title">Doc Pages</h3>
                                <ul class="list-unstyled link_list">
                                    <li><a href="doclist.html">Doc Topic</a></li>
                                    <li><a href="#">Free Training</a></li>
                                    <li><a href="doc-archive.html">Doc Archive</a></li>
                                    <li><a href="changelog.html">Changelog</a></li>
                                    <li><a href="Onepage.html">Onepage Docs</a></li>
                                    <li><a href="#">Conversion Tracking</a></li>
                                    <li><a href="cheatsheet.html">Cheatseet</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="border_bottom"></div>
                </div>
            </div>
            <div class="footer_bottom text-center">
                <div class="container">
                    <p>© 2020 All Rights Reserved by <a href="index.html">Docly</a></p>
                </div>
            </div>
        </footer>
    </div>

    <!-- Back to top button -->
    <a id="back-to-top" title="Back to Top"></a>

    <!-- JavaScript Scripts -->
    <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/pre-loader.js') }}"> </script>
    <script src="{{ asset('assets/js/pre-loader.js') }}"> </script>
    <script src="{{ asset('assets/assets/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/assets/slick/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/parallaxie.js') }}"></script>
    <script src="{{ asset('assets/js/TweenMax.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.wavify.js') }}"></script>
    <script src="{{ asset('assets/assets/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/assets/mcustomscrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
