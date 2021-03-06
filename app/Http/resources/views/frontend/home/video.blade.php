 @if(! empty($video))
    <!-- Works towards supporting Area -->
    <div class="work-towards-area bg-image padding-bottom-115 padding-top-120" style="background-image: url(assets/img/bg/04.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12">
                    <div class="left-content">
                        <div class="inner-section-title padding-top-160 bg-image" style="background-image: url(assets/img/charity/01.png);">
                            <h2 class="title">
                                @if(app()->getLocale() == "en") {{ $video->title_en }} @else {{ $video->title_ar }} @endif
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="right-content">
                        <div class="vdo-btn">
                            <a class="video-play mfp-iframe" href="{{ $video->urlFormat($video->url) }}"><i class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif