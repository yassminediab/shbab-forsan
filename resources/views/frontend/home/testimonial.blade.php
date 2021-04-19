<section class="carosal">
	<div class="customer-feedback">
		<div class="container text-center">
			<div class="row">
				<div class="col-sm-offset-2 col-MD-6">
					<div>
						<h2 class="section-title" style="    font-size: 48px;">
 							@if(app()->getLocale() == "en") {{ $testimonialSection->title_en }} @else {{
                        $testimonialSection->title_ar }} @endif</h2>
					</div>
				</div><!-- /End col -->
			</div><!-- /End row -->

			<div class="row">
                <div class="col-md-3"></div>
				<div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
					<div class="owl-carousel feedback-slider">

                        <!-- slider item -->
                         @foreach($testimonials as $testimonial)
						<div class="feedback-slider-item">
							<h1 class="customer-name" style="font-size: 28px;">
                                 @if(app()->getLocale() == "en") {{ $testimonial->title_en }} @else {{
                                        $testimonial->title_ar }} @endif</h1>
							<p>  @if(app()->getLocale() == "en") {!! Strip_tags($testimonial->content_en) !!}
                                @else {!! Strip_tags($testimonial->content_ar) !!}
                                @endif </p>
						
                        </div>
                        @endforeach
						<!-- /slider item -->
					</div><!-- /End feedback-slider -->
				</div><!-- /End col -->
			</div><!-- /End row -->
		</div><!-- /End container -->
	</div><!-- /End customer-feedback -->
	    @include('frontend.home.numbers')

</section>

