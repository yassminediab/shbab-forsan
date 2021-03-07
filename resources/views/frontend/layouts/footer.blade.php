 <!-- footer area start -->
 <footer class="footer-area">
    <div class="footer-top bg-black bg-image padding-top-85 padding-bottom-50" style="background-image: url(assets/img/bg/footer-bg.png);">
        <div class="container">
            <div class="footer-top-border">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-widget widget">
                            <div class="about_us_widget">
                                <a href="" class="footer-logo"> <img src="{{ asset('images/'.$footer->logo) }}" alt="footer logo"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="footer-widget widget widget_subscribe">
                            <h4 class="widget-title">{{ __('Subscribe Newsletter') }}</h4>
                            <form class="subscribe-form" action="{{ url('newsletter') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control" name="email" placeholder="Your email address">
                                </div>
                                <button type="submit" class="submit-btn"><i class="flaticon-send"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-widget widget">
                            <ul class="contact_info_list">
                                <li class="single-info-item-02">
                                    <div class="icon">
                                        <i class="flaticon-call"></i>
                                    </div>
                                    <div class="details">
                                        {{ $footer->phone }}
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget widget ">
                        <h4 class="widget-title">
                            @if(app()->getLocale() == "en") {{ $footer->title_en }} @else {{ $footer->title_ar }} @endif    
                        </h4>
                        <p>
                            @if(app()->getLocale() == "en")   {!! $footer->content_en !!}
                            @else  {!! $footer->content_ar !!}  @endif
                        </p>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1 col-md-6 col-sm-6">
                    <div class="footer-widget widget widget_nav_menu">
                        <h4 class="widget-title">{{ __('Main Links') }}</h4>
                        <ul>
                            @foreach($footer->main_links as $link)
                                <li><a href="{{ $link['url'] }}">
                                    @if(app()->getLocale() == "en") {{ $link['name_en'] }} @else {{ $link['name_ar'] }} @endif        
                                </a></li>
                           @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget widget widget_nav_menu">
                        <h4 class="widget-title">{{ __('What we do') }}</h4>
                        <ul>
                            @foreach($footer->we_do as $link)
                                <li><a href="{{ $link['url'] }}">
                                    @if(app()->getLocale() == "en") {{ $link['name_en'] }} @else {{ $link['name_ar'] }} @endif        
                                </a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <ul class="contact_info_list">
                        <li class="single-info-item">
                            <div class="title">
                                {{ __('Our Address') }}
                            </div>
                            <div class="details">
                                @if(app()->getLocale() == "en") {{ $footer->address_en }} @else {{ $footer->address_ar }} @endif        
                            </div>
                        </li>
                        <li class="single-info-item">
                            <div class="title">
                                {{ __('Contact us') }}
                            </div>
                            <div class="details">
                                {{ $footer->phone }} <br> {{ $footer->email }}
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-area-inner">
                        &copy; {{ __('Copyrights 2020 Shabab-Forsan . Designed By Love . All rights reserved') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer area end -->
   <!-- back to top area start -->
   <div class="back-to-top">
    <span class="back-top"><i class="fa fa-angle-up"></i></span>
</div>
<!-- back to top area end -->
 


<!-- wow -->
<script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
<!-- Slick Slider -->
<script src="{{ asset('frontend/assets/js/slick.js') }}"></script>
<!-- owl carousel -->
<script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
<!-- waypoint -->
<script src="{{ asset('frontend/assets/js/waypoints.min.js') }}"></script>
<!-- counterup -->
<script src="{{ asset('frontend/assets/js/jquery.counterup.min.js') }}"></script>
<!-- Progress-Bar -->
<script src="{{ asset('frontend/assets/js/jQuery.rProgressbar.min.js') }}"></script>
<!-- Progress-Bar Active js -->
<!-- main js -->
<script src="{{ asset('frontend/assets/js/main.js') }}"></script>
</body>


<!-- Mirrored from irtech.biz/tf/fundorex/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Feb 2021 22:17:44 GMT -->
</html>