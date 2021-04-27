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
                        <h2 class="page-title">Latest Blog</h2>
                        <ul class="page-list">
                            <li><a href="index-2.html">Home</a></li>
                            <li><a href="#">Latest Blog </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Area -->
    <div class="page-content our-attoryney padding-top-120 padding-bottom-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @foreach($blogs as $blog)
                        <div class="blog-classic-item-01 margin-bottom-60">
                            <div class="thumbnail">
                                <img src="{{ asset('images/'. $blog->image) }}" alt="   @if(app()->getLocale() == "en") {{ $blog->title_en }} @else {{ $blog->title_ar }} @endif">
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
                                    <h4 class="title"><a href="#">
                                        @if(app()->getLocale() == "en") {{ $blog->title_en }} @else {{ $blog->title_ar }} @endif
                                    </a></h4>
                                </div>
                            </div>
                            <div class="blog-bottom">
                                <p>
                                    @if(app()->getLocale() == "en")   {{ \Str::limit(Strip_tags($blog->content_en), $limit = 50, $end = '...')  }}
                                    @else  {{ \Str::limit(Strip_tags($blog->content_ar), $limit = 50, $end = '...')  }}  @endif
                                </p>
                                <div class="btn-wrapper">
                                    <a href="{{ url('blogs/'. $blog->id) }}" class="boxed-btn reverse-color">{{ __('Read More') }}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="blog-pagination desktop-center">
                        {{ $blogs->links() }}
{{-- 
                        <ul>
                            <li><a class="next page-numbers" href="#"><i class="fas fa-chevron-left"></i></a></li>
                            <li><span class="page-numbers current">1</span></li>
                            <li><a class="page-numbers" href="#">2</a>
                            </li>
                            <li><a class="next page-numbers" href="#"><i class="fas fa-chevron-right"></i></a></li>
                        </ul> --}}
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="widget-area">
                        <div class="widget widget_search">
                            <form action="http://irtech.biz/tf/fundorex/blog.html" class="search-form">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Write your keyword...">
                                </div>
                                <button class="submit-btn" type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
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
                                        <img src="{{ asset('images/'. $recentPost->image) }}" alt="@if(app()->getLocale() == "en") {{ $recentPost->title_en }} @else {{ $recentPost->title_ar }} @endif
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
