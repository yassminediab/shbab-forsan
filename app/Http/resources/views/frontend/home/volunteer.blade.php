   @if(! empty($volunteerSection))
   <!-- Volunteer Area -->
   <section class="volunteer-area bg-image padding-bottom-90 padding-top-120" style="background-image: url(assets/img/bg/03.png);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="volunteer-title-content margin-bottom-50">
                    <div class="section-title desktop-left">
                        <h3 class="title">
                            @if(app()->getLocale() == "en") {{ $volunteerSection->title_en }} @else {{ $volunteerSection->title_ar }} @endif
                        </h3>
                    </div>
                    <div class="section-paragraph">
                        <P>
                            @if(app()->getLocale() == "en") {!! $volunteerSection->content_en !!} @else {!! $volunteerSection->content_ar !!} @endif 
                        </P>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($volunteers as $volunteer)
                <div class="col-lg-3 col-sm-6">
                    <div class="team-single-item">
                        <div class="thumb">
                            <img src="{{ asset($volunteer->image) }}" alt="">
                            <div class="content">
                                <h4 class="title">
                                    @if(app()->getLocale() == "en") {{ $volunteer->title_en }} @else {{ $volunteer->title_ar }} @endif
                                </h4>
                                {{-- <div class="social-link">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                    </ul>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
           @endforeach
        </div>
    </div>
</section>
@endif