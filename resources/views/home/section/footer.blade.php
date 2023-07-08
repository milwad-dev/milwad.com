<footer class="footer_area f_bg_color">
    <img class="p_absolute leaf" src="{{ asset('assets/img/v.svg') }}" alt="">
    <img class="p_absolute f_man" src="{{ asset('assets/img/home_two/f_man.png') }}" alt="">
    <img class="p_absolute f_cloud" src="{{ asset('assets/img/home_two/cloud.png') }}" alt="">
    <img class="p_absolute f_email" src="{{ asset('assets/img/home_two/email-icon.png') }}" alt="">
    <img class="p_absolute f_email_two" src="{{ asset('assets/img/home_two/email-icon_two.png') }}" alt="">
    <img class="p_absolute f_man_two" src="{{ asset('assets/img/home_two/man.png') }}" alt="">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="f_widget subscribe_widget">
                        <ul class="list-unstyled f_social_icon">
                            <li>
                                <a href="https://www.youtube.com/channel/UClbxZk9EdsuVxx26LXzPeZg">
                                    <i class="social_youtube"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/milwad-dev">
                                    <i class="social_github"></i>{{-- TOOD: Fix this --}}
                                </a>
                            </li>
                            <li>
                                <a href="mailto:milwad.dev@gmail.com">
                                    <i class="social_googleplus"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/MilwadDev">
                                    <i class="social_twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/in/milwad-khosravi">
                                    <i class="social_linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="f_widget link_widget pl_30">
                        <h3 class="f_title">Links</h3>
                        <ul class="list-unstyled link_list">
                            <li><a href="{{ route('home.index') }}">Home</a></li>
                            <li><a href="{{ route('docs.index') }}">Docs</a></li>
                            <li><a href="{{ route('blog.index') }}">Blog</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="f_widget link_widget">
                        <h3 class="f_title">Projects</h3>
                        <ul class="list-unstyled link_list">
                            <li><a href="https://github.com/milwad-dev/shopline">Shopline</a></li>
                            <li><a href="https://github.com/milwad-dev/towork-backend">ToWork-Backend</a></li>
                            <li><a href="https://github.com/milwad-dev/crm-app">Crm-App</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="f_widget link_widget pl_70">
                        <h3 class="f_title">Packages</h3>
                        <ul class="list-unstyled link_list">
                            <li><a href="https://github.com/milwad-dev/laravel-validate">Laravel Validate</a></li>
                            <li><a href="https://github.com/milwad-dev/laravel-crod">Laravel Crod</a></li>
                            <li><a href="https://github.com/milwad-dev/laravel-attributes">Laravel Attributes</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="border_bottom"></div>
        </div>
    </div>
    <div class="footer_bottom text-center">
        <div class="container">
            <p>© 2023 All Rights Reserved by <a href="{{ route('home.index') }}">Milwad Dev (Fun Developer)</a></p>
        </div>
    </div>
</footer>
