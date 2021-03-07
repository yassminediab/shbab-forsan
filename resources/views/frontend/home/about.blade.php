@if(! empty($about))
    <div class="header-bottom-area m-top bg-image padding-bottom-120 padding-top-120" style="background-image: url(assets/img/bg/02.png);">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-12">
                    <div class="help-and-support-left">
                        <div class="section-title margin-bottom-35">
                            <h2 class="title">  @if(app()->getLocale() == "en") {{ $about->title_en }} @else {{ $about->title_ar }} @endif </h2>
                        </div>
                        @if(app()->getLocale() == "en") {!! $about->content_en !!} @else {!! $about->content_ar !!} @endif 
                    </div>
                </div>
                {{-- <div class="col-xl-6 col-lg-12 offset-xl-1">
                    <div class="help-and-support-right bg-image" style="background-image: url(assets/img/support/bg.png);">
                        <div class="support-img">
                            <div class="thumb">
                                <img src="assets/img/support/01.jpg" alt="">
                            </div>
                            <div class="donation-content">
                                <h3 class="price">$8860</h3>
                                <span> Donated</span>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
            @include('frontend.home.area')
        </div>
    </div>
@endif