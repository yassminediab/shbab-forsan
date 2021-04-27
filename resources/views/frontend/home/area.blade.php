<div class="volunteer-area padding-top-160">
    <div class="row">
        @foreach($areas as $val => $area)
            <div class="col-lg-6 col-xl-4 col-md-6">
                <a href="{{ ($val == 1) ? route('volunteer-data.index') :  $area->url }}" target="_blank">
                    <div class="volunteer-single-item margin-bottom-30 bg-image" @if($val == 0) style="background-color: #9238a4;"
                        @endif @if($val == 1) style="background-color: var(--main-color-one);" @endif @if($val == 2)
                        style="background-color: #00bdc0;" @endif>

                        <div class="icon">
                            <i @if($val == 0) class = "fas fa-users" @elseif($val == 1) class="fas fa-gift" @else class="fas fa-hand-holding-heart" @endif></i>
                        </div>

                        <div class="content">
                            <h4 class="title">
                                @if(app()->getLocale() == "en") {{ $area->title_en }} @else {{ $area->title_ar }} @endif
                            </h4>
                            <p>
                                @if(app()->getLocale() == "en") {!! \Str::limit(Strip_tags($area->content_en), $limit = 600, $end
                                = '...') !!}
                                @else {!! \Str::limit(Strip_tags($area->content_ar), $limit = 600, $end = '...') !!}
                                @endif
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>
