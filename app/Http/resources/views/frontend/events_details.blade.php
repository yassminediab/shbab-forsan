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
                        <h2 class="page-title">Events</h2>
                        <ul class="page-list">
                            <li><a href="index-2.html">Home</a></li>
                            <li><a href="#">Events</a></li>
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
                            <h3 class="widget-title style-02">Event Details</h3>
                            <ul>
                                <li><a href="#">Price :<span>${{ $event->price }}</span></a></li>
                                <li><a href="#">Date  :    <span>  {{ $event->date->format('d F') }}</span></a></li>
                                <li><a href="#">Duration  :  <span>{{ $event->time_from }}    -   {{  $event->time_to }} </span></a></li>
                                <li><a href="#">Organizer  :  <span>  {{  $event->organizer }}</span></a></li>
                                <li><a href="#">Contact  :   <span> {{ $event->contact }} </span></a></li>
                            </ul>
                        </div>
                        <div class="widget widget_map style-01">
                            <h4 class="widget-title style-02">{{ __('Event Location') }}</h4>
                            <p class="widget-para">
                                @if(app()->getLocale() == "en") {{ $event->location_en }} @else {{ $event->location_ar }} @endif    
                            </p>
                            <div class="contact_map-02">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d233667.8223908687!2d90.27923710646989!3d23.780887457084543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1588510922243!5m2!1sen!2sbd" style="border:0; width: 100%; height: 100%;"
                                    allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection  