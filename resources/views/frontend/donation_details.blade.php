@extends('frontend.layouts.header')
@section('content')
    <!-- breadcrumb Area -->
    <div class="breadcrumb-area" style="background-image:url({{ asset('images/'.resizeImage($pageSetting->image, 1792, 510))}});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner">
                        {{-- <div class="icon">
                            <img src="assets/img/icon/01.png" alt="">
                        </div> --}}
                        <h2 class="page-title">@if(app()->getLocale() == "en")  {{$pageSetting->title_en}}@else {{$pageSetting->title_ar}}@endif</h2>
                        <ul class="page-list">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="#">{{$pageSetting->title_en}}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Donation Details Area -->
    <div class="page-content our-attoryney padding-bottom-105 padding-top-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="donation-details-item">
                        <div class="thumb margin-bottom-20">
                            <img src="{{ asset('images/'. $case->image) }}" alt="@if(app()->getLocale() == "en") {{ $case->title_en }} @else {{ $case->title_ar }} @endif">
                        </div>
                        <div class="content-wrapper">
                            <div class="progress-content">
                                <div class="goal">
                                    <h4 class="raised">{{ __('Raised') }} : ${{ $case->current_share }}</h4>
                                    <h4 class="raised">{{ __('Goal') }} : ${{ $case->target_share }}</h4>
                                </div>
                                <div class="progress-item">
                                    <div class="single-progressbar">
                                        <div class="js"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-wrapper">
                                <a href="#" class="boxed-btn reverse-color">{{ __('Donate For This Cause') }}</a>
                            </div>
                        </div>
                        <h3 class="title">
                            @if(app()->getLocale() == "en") {{ $case->title_en }} @else {{ $case->title_ar }} @endif
                        </h3>
                        <p>
                            @if(app()->getLocale() == "en")  {!! $case->content_en !!} @else {!! $case->content_ar !!} @endif
                        </p>

                        <div class="donation-img-thumb padding-top-30 padding-bottom-40">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="thumb">
                                        <img src="assets/img/blog-single/04.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="thumb-02">
                                        <img src="assets/img/blog-single/05.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="widget-area">
                        <div class="widget widget_recent_posts style-01">
                            <h4 class="widget-title style-02">{{ __('More Causes') }}</h4>
                            <ul class="recent_post_item">
                                @foreach($cases as $relatedCase)
                                    <li class="single-recent-post-item">
                                        <div class="thumb">
                                            <img src="{{ asset('images/'. $relatedCase->image) }}"
                                            alt="@if(app()->getLocale() == "en") {{ $relatedCase->title_en }} @else {{ $relatedCase->title_ar }} @endif">

                                        </div>
                                        <div class="content">
                                            <h4 class="title"><a href="#">
                                                @if(app()->getLocale() == "en") {{ $relatedCase->title_en }} @else {{ $relatedCase->title_ar }} @endif
                                            </a></h4>
                                            <p class="time"><span>{{ __('Goal') }} :</span> ${{ $relatedCase->target_share }}</p>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
