@extends('frontend.layouts.header')
@section('content')
    <!-- breadcrumb Area -->
    <div class="breadcrumb-area" style="background-image:url({{ asset('images/'. $aboutUs->image) }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner">
                        <div class="icon">
                            <img src="" alt="">
                        </div>
                        <h2 class="page-title">{{ __('About Us') }}</h2>
                        <ul class="page-list">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('about-us') }}">{{ __('About Us') }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Section -->
    <div class="about-area padding-top-115 padding-bottom-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about-title-content margin-bottom-50">
                        <div class="section-title desktop-left">
                            <span>{{ __('About Us') }}</span>
                            <h3 class="title">
                                @if(app()->getLocale() == "en") {{ $aboutUs->title_en }} @else {{ $aboutUs->title_ar }} @endif    
                            </h3>
                        </div>
                        <div class="section-paragraph">
                            <p>
                                @if(app()->getLocale() == "en")   {!! $aboutUs->content_en !!}
                                @else  {!! $aboutUs->content_ar !!}  @endif
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="about-content-area padding-top-60 padding-bottom-60">
               <div class="bg-img" style="background-image: url(assets/img/about/bg.jpg);"></div>
                <div class="row">
                    <div class="col-lg-7 offset-lg-5">
                        <div class="about-content">
                            <div class="section-title">
                                <h3 class="title">Our Mission</h3>
                                <p>We are a non-profit organisation in USA that works towards supporting underprivileged children reach their full potential - physical, mental as well as emotional. </p>
                            </div>
                            <div class="content">
                                <ul>
                                    <li><a href="#"><i class="fas fa-check"></i>If you want to change the world</a></li>
                                    <li><a href="#"><i class="fas fa-check"></i>Wish at a time, help kids like Ramesh</a></li>
                                    <li><a href="#"><i class="fas fa-check"></i>Sheetal reach their full potential.</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
@endsection    
   