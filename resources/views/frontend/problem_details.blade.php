@extends('frontend.layouts.header')
@section('content')

<!-- Slider -->
<div class="header-slider-one">
    @foreach($problem->photo as $photo)
    <div class="header-area header-bg"
         style="background-image:url({{ asset('images/'.resizeImage($photo, 1972, 510)) }}); background-repeat: no-repeat; background-position:
        center center; background-size: cover;">
        <div class="container">
            <div @if(app()->getLocale() == "en") class="row" @else class="row justify-content-end" @endif>
                <div @if(app()->getLocale() == "en") class="col-lg-6" @else class="col-lg-6 col-lg-offset-8" @endif>
                    <div class="header-inner">

                    </div>
                    <!-- //.header inner -->
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

<!--Events Details Area -->
<div class="page-content our-attoryney padding-bottom-120 padding-top-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="volunteer-details-item">
                    <div class="section-title margin-bottom-35">
                        <h2 class="title">
                            @if(app()->getLocale() == "en") {{ $problem->title_en }} @else {{ $problem->title_ar
                            }} @endif
                        </h2>

                        @if(app()->getLocale() == "en") {!! $problem->long_content_en !!} @else {!! $problem->long_content_ar !!}  @endif


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
