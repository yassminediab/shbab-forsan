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
                        <h2 class="page-title">{{ __('Events') }}</h2>
                        <ul class="page-list">
                            <li><a href="index-2.html">{{ __('Home') }}</a></li>
                            <li><a href="#">{{ __('Events') }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Events Details Area -->
    <div class="page-content our-attoryney padding-bottom-120 padding-top-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="events-details-item">
                        <div class="thumb margin-bottom-20">
                            <img src="{{ asset('images/'. $event->image) }}" alt="@if(app()->getLocale() == "en") {{ $event->title_en }} @else {{ $event->title_ar }} @endif    
                            ">
                            <div class="post-time">
                                <h5 class="title"> {{ $event->date->format('d') }}</h5>
                                <span> {{ $event->date->format('F') }}</span>
                            </div>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="#">
                                @if(app()->getLocale() == "en") {{ $event->title_en }} @else {{ $event->title_ar }} @endif    
                            </a></h4>
                            <ul class="post-meta">
                                <li><a href="#"><i class="fas fa-map-marker-alt"></i>@if(app()->getLocale() == "en") {{ $event->location_en }} @else {{ $event->location_ar }} @endif    
                                </a></li>
                                <li><a href="#"><i class="far fa-clock"></i>{{ $event->time_from }}    -   {{  $event->time_to }}</a></li>
                            </ul>
                            <p>
                                @if(app()->getLocale() == "en") {!! $event->content_en !!} @else {!! $event->content_ar !!}  @endif    

                            </p>                          
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="widget-area">
                       
                        <div class="widget widget_event style-01">
                            <h3 class="widget-title style-02">{{ __('Event Details') }}</h3>
                            <ul>
                              @if($event->price)  <li><a href="#">Price :<span>${{ $event->price }}</span></a></li> @endif
                                <li><a href="#">{{ __('Date') }}  :    <span>  {{ $event->date->format('d F') }}</span></a></li>
                                <li><a href="#">{{ __('Duration') }}  :  <span>{{ $event->time_from }}    -   {{  $event->time_to }} </span></a></li>
                                <li><a href="#">{{ __('Organizer') }}  :  <span>  {{  $event->organizer }}</span></a></li>
                                <li><a href="#">{{ __('Contact') }}  :   <span> {{ $event->contact }} </span></a></li>
                            </ul>
                        </div>
                        <div class="widget widget_map style-01">
                            <h4 class="widget-title style-02">{{ __('Event Location') }}</h4>
                            <p class="widget-para">
                                @if(app()->getLocale() == "en") {{ $event->location_en }} @else {{ $event->location_ar }} @endif    
                            </p>
                            @if($event->lat && $event->lng)
                                <div class="contact_map-02">
                                <iframe src="https://maps.google.com/maps?q={{ $event->lat }},{{ $event->lng }}&z=15&output=embed" style="border:0; width: 100%; height: 100%;"
                                        allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection  