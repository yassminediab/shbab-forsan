@extends('frontend.layouts.header')
@section('content')
    <!-- breadcrumb Area -->
    <div class="breadcrumb-area" style="background-image:url({{asset('images/'.$pageSetting->image)}});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner">
                        <div class="icon">
                            <img src="assets/img/icon/01.png" alt="">
                        </div>
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
    <!-- Attend events  -->
    <section class="attend-events-area padding-top-115 padding-bottom-90">
        <div class="container">
            <div class="row">
                @foreach($events as $event)
                <div class="col-lg-6">
                    <div class="events-single-item bg-image margin-bottom-30" style="background-image: url(assets/img/events/bg.png);">
                        <div class="thumb">
                            <div class="bg-image" style="background-image: url(assets/img/events/01.jpg)">
                                <div class="post-time">
                                    <h5 class="title"> {{ $event->date->format('d') }}</h5>
                                    <span> {{ $event->date->format('F') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="content-wrapper">
                            <div class="content">
                                <a class="title" href="{{ url('events/'. $event->id) }}">
                                    @if(app()->getLocale() == "en") {{ $event->title_en }} @else {{ $event->title_ar }} @endif
                                </a>
                                <ul class="info-items-03">
                                    <li><a href="{{ url('events/'. $event->id) }}"><i class="far fa-clock"></i>{{ $event->time_from }}   -   {{  $event->time_to }}</a></li>
                                    <li><a href="{{ url('events/'. $event->id) }}"><i class="fas fa-map-marker-alt"></i>
                                        @if(app()->getLocale() == "en") {{ $event->location_en }} @else {{ $event->location_ar }} @endif
                                    </a></li>
                                </ul>
                                {{-- <div class="events-btn-wrapper">
                                    <a href="#" class="book-btn">Book Seat</a>
                                    <a href="#" class="free-btn">Free</a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
              @endforeach
            </div>
             <div class="blog-pagination desktop-center">
                {{ $events->links() }}
            </div>
        </div>
    </section>
@endsection
