 @if(! empty($eventSection))
 <!-- Attend events  -->
 <section class="attend-events-area padding-top-115 padding-bottom-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="attend-title-content margin-bottom-50">
                    <div class="section-title desktop-left">
                        <h3 class="title">
                            @if(app()->getLocale() == "en") {{ $eventSection->title_en }} @else {{ $eventSection->title_ar }} @endif
                        </h3>
                    </div>
                    <div class="section-paragraph">
                        <P>
                            @if(app()->getLocale() == "en") {{ \Str::limit(Strip_tags($eventSection->content_en), $limit = 80, $end = '...')  }}
                              @else {{ \Str::limit(Strip_tags($eventSection->content_ar), $limit = 80, $end = '...')  }}
                            @endif 
                        </P>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($events as $event)
            <div class="col-lg-6">
                <div class="events-single-item bg-image margin-bottom-30" style="background-image: url(assets/img/events/bg.png);">
                    <div class="thumb">
                        <div class="bg-image" style="background-image: url(assets/img/events/01.jpg)">
                            <div class="post-time">
                                <h5 class="title">{{ $event->date->format('d') }}</h5>
                                <span>{{ $event->date->format('M') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="content-wrapper">
                        <div class="content">
                            <a class="title" href="#">
                                @if(app()->getLocale() == "en") {{ $event->title_en }} @else {{ $event->title_ar }} @endif
                                
                            </a>
                            <ul class="info-items-03">
                                <li><a href="#"><i class="far fa-clock"></i>{{ $event->time_to }} AM   -   {{ $event->time_to }} AM</a></li>
                                <li><a href="#"><i class="fas fa-map-marker-alt"></i> 
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
    </div>
</section>
@endif