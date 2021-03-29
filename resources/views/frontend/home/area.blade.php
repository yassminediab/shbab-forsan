<div class="volunteer-area padding-top-160">
    <div class="row">
        @foreach($areas as $val => $area)
        <div class="col-lg-6 col-xl-4 col-md-6">
            <div class="volunteer-single-item margin-bottom-30 bg-image" @if($val==0) style="background-color: #9238a4;"
                @endif @if($val==1) style="background-color: var(--main-color-one);" @endif @if($val==2)
                style="background-color: #00bdc0;" @endif>

                <div class="icon">
                    <i class="fa {{ $area->icon }}"></i>
                </div>
                <div class="content">
                    <h4 class="title">
                        <a href="#">
                            @if(app()->getLocale() == "en") {{ $area->title_en }} @else {{ $area->title_ar }} @endif
                        </a>
                    </h4>
                    <p>
                        @if(app()->getLocale() == "en") {{ \Str::limit(Strip_tags($area->content_en), $limit = 80, $end
                        = '...') }}
                        @else {{ \Str::limit(Strip_tags($area->content_ar), $limit = 80, $end = '...') }}
                        @endif
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>