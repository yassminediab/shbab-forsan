<!DOCTYPE html>
@if(app()->getLocale() == "en")
<html lang="en">
@else
<html lang="ar" dir="rtl">
@endif


<!-- Mirrored from irtech.biz/tf/fundorex/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Feb 2021 22:13:56 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ __('Shabab Forsan') }}</title>

    <!-- jquery -->
    <script src="{{ asset('frontend/assets/js/jquery-2.2.4.min.js') }}"></script>
    <!-- bootstrap -->
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
    <!-- magnific popup -->
    <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.js') }}"></script>
    <!-- favicon -->
    <link rel=icon href={{ asset('images/'. $footer->logo) }} sizes="20x20" type="image/png">
    <!-- animate -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.css') }}">
    <!-- bootstrap -->
    @if(app()->getLocale() == "en")
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    @else
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.rtl.min.css') }}">
    @endif
    <!-- magnific popup -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css') }}">
    <!-- slick carousel  -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css') }}">
    <!-- owl carousel -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}">
    <!-- fontawesome -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/font-awesome.min.css') }}">
    <!-- flaticon -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/flaticon.css') }}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    @if(app()->getLocale() == "ar")
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.rtl.css') }}">
    @endif

    <!-- responsive Stylesheet -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/new-curosal/curosal.css') }}">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal&display=swap" rel="stylesheet">
    
    
    <style>
        .blog-pagination ul li span.current,
        .blog-pagination ul li a:hover {
            background-color: #019e43 !important;
            color: #fff;
        }

        .topbar-area {
            background-color: #019e43 !important;
        }

        .bg-black {
            background-color: #019e43 !important;
        }

        .widget.footer-widget p,
        .footer-widget.widget_tag_cloud .tagcloud a,
        .widget.footer-widget.widget_calendar caption,
        .widget.footer-widget.widget_calendar th,
        .widget.footer-widget.widget_calendar td {
            color: #fff !important;
        }

        .contact_info_list li.single-info-item .details {
            color: #fff !important;
        }

        .copyright-area .copyright-area-inner {
            color: #fff !important;
        }

        .widget.footer-widget ul li a,
        .widget.footer-widget ul li {
            color: #fff !important;
        }

        .copyright-area {
            background-color: #019e43 !important;
        }

        .header-area.header-bg::before {
            background: linear-gradient(360deg, rgba(255, 255, 255, 0.28) 0%, #019e437a 100%);
             !important;
        }

        .breadcrumb-area:before {
            background: linear-gradient(360deg, #019e43d1 0%, #019e4359 100%);
             !important;
        }

        .padding-bottom-85 {
            padding-bottom: -23px !important;
        }

        html,
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        span,
        div,
        section,
        nav,
        li,
        a {
            font-family: 'Tajawal', sans-serif !important;
        }

        .blog-pagination ul li span.current,
        .blog-pagination ul li a:hover {
            background-color: #019e43 !important;
            color: #fff;
        }

        .topbar-area {
            background-color: #019e43 !important;
        }

        .bg-black {
            background-color: #019e43 !important;
        }

        .widget.footer-widget p,
        .footer-widget.widget_tag_cloud .tagcloud a,
        .widget.footer-widget.widget_calendar caption,
        .widget.footer-widget.widget_calendar th,
        .widget.footer-widget.widget_calendar td {
            color: #fff !important;
        }

        .contact_info_list li.single-info-item .details {
            color: #fff !important;
        }

        .copyright-area .copyright-area-inner {
            color: #fff !important;
        }

        .widget.footer-widget ul li a,
        .widget.footer-widget ul li {
            color: #fff !important;
        }

        .copyright-area {
            background-color: #019e43 !important;
        }

        .header-area.header-bg::before {
            background: linear-gradient(360deg, rgba(255, 255, 255, 0.28) 0%, #019e437a 100%);
             !important;
        }

        .breadcrumb-area:before {
            background: linear-gradient(360deg, #019e43d1 0%, #019e4359 100%);
             !important;
        }
        .header-bottom-area{
            background-image: url(images/02.png) !important;
        }
        .problem-area{
            background-image: url(images/02.png) !important;
        }
        .blog-area {
            background-image: url(images/02.png) !important;
        }
        .carosal{
            background-image: url(images/02.png) !important;
        }
    </style>
</head>

<body>
    <!-- preloader area start -->
    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="loader">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->
    <!-- //. search Popup -->
    <div class="body-overlay" id="body-overlay"></div>
    {{-- <div class="search-popup" id="search-popup">
        <form action="http://irtech.biz/tf/fundorex/index.html" class="search-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search.....">
            </div>
            <button class="close-btn border-none"><i class="fas fa-times"></i></button>
        </form>
    </div> --}}
    <div class="header-style-01">
        <div class="topbar-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="topbar-inner">
                            <div class="left-contnet">
                                <ul class="info-items">
                                    <li><a href="#"><i class="flaticon-call"></i>{{ $footer->phone }}</a></li>
                                    <li><a href="mailto:{{ $footer->email }}"><i class="far fa-envelope-open"></i>{{
                                            $footer->email }}</a></li>
                                </ul>
                            </div>
                            <div class="right-contnet">
                                <div class="social-link">
                                    <ul>
                                        @foreach($socialMedias as $socialMedia)
                                        <li><a href="{{ $socialMedia->url }}"><i
                                                    class="far fa-{{ $socialMedia->platform }}"></i></a></li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="volunteer-right">
                                    <ul class="info-items-02">
                                        <li class="volunteer"><a href="{{ url('volunteer')}}">
                                                {{ __('Become a Volunteer') }}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- support bar area end -->
        <nav class="navbar navbar-area navbar-expand-lg has-topbar nav-style-02">
            <div class="container nav-container">
                <div class="responsive-mobile-menu">
                    <div class="logo-wrapper">
                        <a href="{{ url('/') }}" class="logo">
                            <img src="{{ asset('images/'.resizeImage($footer->logo, 40, 40)) }}" alt="">
                        </a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bizcoxx_main_menu"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="bizcoxx_main_menu">
                    <ul class="navbar-nav">
                        <li style="margin-left:15px"><a href="{{ url('/') }}">{{ __('Home') }}</a></li>

                        <li class="menu-item-has-children">
                            <a href="#">{{ __('Pages') }}</a>
                            <ul class="sub-menu">
                                <li><a href="{{ url('about-us') }}">{{ __('About') }}</a></li>
                                <li><a href="{{ url('volunteer') }}">{{ __('Our Volunteer') }}</a></li>
                            </ul>
                        </li>

                        <li><a href="{{ url('events') }}">{{ __('Events') }}</a></li>

                        <li><a href="{{ url('blogs') }}">{{ __('Blogs') }}</a></li>
                        <li><a href="{{ url('cases') }}">{{ __('Cases') }}</a></li>

                        <li><a href="{{ url('contact') }}">{{ __('Contact') }}</a></li>
                        <li> <a href="{{ route('locale', $switchLanguage) }}">{{ __('frontend.language_switch') }}</a>
                        </li>
                    </ul>
                </div>
                <div class="nav-right-content">
                    <ul>
                        <li>
                            <a href="#">
                                <div class="info-bar-item">
                                    <div class="icon">
                                        <i class="far fa-heart"></i>
                                    </div>
                                    <div class="content">
                                        <span class="title">{{ __('Make your') }}</span>
                                        <p class="details"> {{ __('Donation') }}</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- navbar area end -->
    </div>
    @yield('content')

    @include('frontend.layouts.footer')