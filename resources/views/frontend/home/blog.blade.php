   @if(! empty($blogSection))
   <!-- blog area start  -->
   <section class="blog-area bg-image padding-top-120 padding-bottom-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title desktop-center margin-bottom-50">
                    <h3 class="title">
                        @if(app()->getLocale() == "en") {{ $blogSection->title_en }} @else {{ $blogSection->title_ar }} @endif
                    </h3>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($blogs as $blog)
            <div class="col-lg-6 col-xl-4">
                <div class="single-blog-grid-01 margin-bottom-30">
                    <div class="thumb">
                        <img src="{{ asset('images/'.resizeImage($slider->image, 360, 232)) }}" alt="blog image">
                    </div>
                    <div class="content-wrapper">
                        <div class="news-date">
                            <h5 class="title">{{ \Carbon\Carbon::parse($blog->created_at)->format('d') }}</h5>
                            <span>{{ \Carbon\Carbon::parse($blog->created_at)->format('M') }}</span>
                        </div>
                        <div class="content">
                            {{-- <ul class="post-meta">
                                <li><a href="#">By <span>Admin</span></a></li>
                                <li><a href="#">Comments<span>(03)</span></a></li>
                            </ul> --}}
                            <h4 class="title"><a href="{{ url('blogs/'. $blog->id) }}">
                                @if(app()->getLocale() == "en") {{ $blog->title_en }} @else {{ $blog->title_ar }} @endif
                            </a></h4>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- blog area end -->
@endif
