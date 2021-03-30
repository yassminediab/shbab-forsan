<div class="header-slider-one">
    @foreach($sliders as $slider)
        <div class="header-area header-bg" style="background-image: url({{ asset('images/'.resizeImage($slider->image, 1972, 510)) }}); background-repeat: no-repeat; background-position: center center">
            <div class="container">
                <div @if(app()->getLocale() == "en") class="row" @else class="row justify-content-end" @endif>
                    <div @if(app()->getLocale() == "en") class="col-lg-6" @else class="col-lg-6 col-lg-offset-8" @endif>
                        <div class="header-inner">
                            <!-- header inner -->
                            <h1 class="title">
                                @if(app()->getLocale() == "en") {{ $slider->title_en }} @else {{ $slider->title_ar }} @endif
                            </h1>
                            <p>@if(app()->getLocale() == "en") {!! $slider->content_en !!} @else {!! $slider->content_ar !!} @endif</p>
                            <div class="btn-wrapper  desktop-left padding-top-30">
                                <a href="{{ $slider->button_url }}" class="boxed-btn">@if(app()->getLocale() == "en") {{ $slider->button_title_en }} @else {{ $slider->button_title_ar }} @endif</a>
                            </div>
                        </div>
                        <!-- //.header inner -->
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
