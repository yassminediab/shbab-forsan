@extends('frontend.layouts.header')
@section('content')
    <!-- breadcrumb Area -->
    <div class="breadcrumb-area" style="background-image:url(assets/img/breadcrumb/01.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner">
                        <div class="icon">
                            <img src="assets/img/icon/01.png" alt="">
                        </div>
                        <h2 class="page-title">Donation</h2>
                        <ul class="page-list">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="#">Donation</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our latest causes -->
    <div class="our-latest-area padding-bottom-130 padding-top-120">
        <div class="container">
            <div class="row">
                @foreach($cases as $case)
                    <div class="col-lg-6 col-xl-4 col-md-6">
                        <div class="contribute-single-item">
                            <div class="thumb">
                                <img src="{{ asset('images/'. $case->image) }}" alt="@if(app()->getLocale() == "en") {{ $case->title_en }} @else {{ $case->title_ar }} @endif">
                            </div>
                            <div class="content">
                                <div class="progress-content">
                                    <div class="progress-item">
                                        <div class="single-progressbar">
                                            <div class="html"></div>
                                        </div>
                                    </div>
                                    <div class="goal">
                                        <h4 class="raised">{{ __('Raised') }} : ${{ $case->current_share }}</h4>
                                        <h4 class="raised">{{ __('Goal') }} : ${{ $case->target_share }}</h4>
                                    </div>
                                </div>
                                <h3 class="title">
                                    @if(app()->getLocale() == "en") {{ $case->title_en }} @else {{ $case->title_ar }} @endif
                                </h3>
                                <p>
                                   
                                    @if(app()->getLocale() == "en")   {{ \Str::limit(Strip_tags($case->content_en), $limit = 50, $end = '...')  }}
                                     @else  {{ \Str::limit(Strip_tags($case->content_ar), $limit = 50, $end = '...')  }}  @endif
                                </p>
                                <div class="btn-wrapper">
                                    <a href="{{ url('cases/'. $case->id) }}" class="boxed-btn">
                                        {{ __('Read More') }} 
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $cases->links() }}
        </div>
    </div>
 @endsection   
