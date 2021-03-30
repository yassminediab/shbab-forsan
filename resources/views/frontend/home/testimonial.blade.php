@if(! empty($testimonialSection))
<!-- testimonial area start  -->
<section class="testimonial-area bg-image padding-top-105">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title white desktop-center margin-bottom-50">
                    <h3 class="title">
                        @if(app()->getLocale() == "en") {{ $testimonialSection->title_en }} @else {{
                        $testimonialSection->title_ar }} @endif
                    </h3>
                </div>
            </div>
        </div>
        <div class="row no-gutters justify-content-center">
            <div class="col-lg-7">
                <!--  {{-- <div class="testimonial-carousel-area bg-blue">
                    <div class="testimonial-carousel">
                        <div class="single-testimonial-item">
                            <div class="thumb bg-image" style="background-image: url(assets/img/testimonial/01.png);">
                                <div class="icon">
                                    <i class="fas fa-quote-right"></i>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial-item">
                            <div class="thumb bg-image" style="background-image: url(assets/img/testimonial/02.png);">
                                <div class="icon">
                                    <i class="fas fa-quote-right"></i>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial-item">
                            <div class="thumb bg-image" style="background-image: url(assets/img/testimonial/03.png);">
                                <div class="icon">
                                    <i class="fas fa-quote-right"></i>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial-item">
                            <div class="thumb bg-image" style="background-image: url(assets/img/testimonial/01.png);">
                                <div class="icon">
                                    <i class="fas fa-quote-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}-->
                <div class="content-carousel">
                    @foreach($testimonials as $testimonial)
                    <div class="single-testimonial-item">
                        <div class="content">
                            <div class="author-details">
                                <div class="author-meta">
                                    <h4 class="title">
                                        @if(app()->getLocale() == "en") {{ $testimonial->title_en }} @else {{
                                        $testimonial->title_ar }} @endif
                                    </h4>
                                </div>
                            </div>
                            <p class="description">
                                @if(app()->getLocale() == "en") {{ \Str::limit(Strip_tags($testimonial->content_en),
                                $limit = 80, $end = '...') }}
                                @else {{ \Str::limit(Strip_tags($testimonial->content_ar), $limit = 80, $end = '...')
                                }}
                                @endif
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @include('frontend.home.numbers')
</section>
<!-- testimonial area end -->
@endif