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
    <!-- Blog Details Area -->
    <div class="page-content our-attoryney padding-bottom-120 padding-top-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-details-item">
                        <div class="thumb margin-bottom-20">
                            <img src="{{ asset('images/'.resizeImage($blog->image, 360, 332))}}" alt="@if(app()->getLocale() == "en") {{ $blog->title_en }} @else {{ $blog->title_ar }} @endif">
                        </div>
                        <div class="content-wrapper">
                            <div class="news-date">
                                <h5 class="title"> {{ $blog->created_at->format('d') }}</h5>
                                <span> {{ $blog->created_at->format('F') }}</span>
                            </div>
                            <div class="content">
                                {{-- <ul class="post-meta">
                                    <li><a href="#">By <span>Admin</span></a></li>
                                    <li><a href="#">Comments<span>(03)</span></a></li>
                                </ul> --}}
                                <h4 class="title" style="margin-top: 25px;padding-right: 6px;"><a href="#">
                                    @if(app()->getLocale() == "en") {{ $blog->title_en }} @else {{ $blog->title_ar }} @endif
                                </a></h4>
                            </div>
                        </div>
                        <p>
                            @if(app()->getLocale() == "en")   {!! $blog->content_en !!}
                            @else  {!! $blog->content_ar !!}  @endif
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="widget-area">

                        <div class="widget widget_archive style-01">
                            <h3 class="widget-title style-01">{{ __('Categories') }}</h3>
                            <ul>
                                @foreach($categories as $category)
                                    <li><a href="#"><i class="fas fa-chevron-right"></i>
                                        @if(app()->getLocale() == "en") {{ $category->title_en }} @else {{ $category->title_ar }} @endif
                                    </a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="widget widget_recent_posts style-01">
                            <h4 class="widget-title style-01">{{ __('Recent Post') }}</h4>
                            <ul class="recent_post_item">
                                @foreach($recentPosts as $recentPost)
                                <li class="single-recent-post-item">
                                    <div class="thumb">
                                        <img src="{{ asset('images/'.resizeImage($recentPost->image, 360, 232)) }}" alt="@if(app()->getLocale() == "en") {{ $recentPost->title_en }} @else {{ $recentPost->title_ar }} @endif
                                        ">
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="#">
                                            @if(app()->getLocale() == "en") {{ $recentPost->title_en }} @else {{ $recentPost->title_ar }} @endif
                                        </a></h4>
                                        <span class="time"><i class="far fa-calendar-alt"></i> {{ $recentPost->created_at->format('d F Y') }}</span>
                                    </div>
                                </li>
                               @endforeach
                            </ul>
                        </div>
                        <div id="tag_cloud-2" class="widget widget_tag_cloud style-01">
                            <h2 class="widget-title style-01">{{ __('Tags') }}</h2>
                            <div class="tagcloud">
                                @foreach($tags as $tag)
                                    <a href="#">
                                        @if(app()->getLocale() == "en") {{ $tag->title_en }} @else {{ $tag->title_ar }} @endif
                                    </a>
                               @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
