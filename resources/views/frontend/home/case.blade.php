  <!-- Our latest causes -->
  @if(! empty($caseSection))
  <div class="our-latest-area padding-bottom-90 padding-top-90">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-sm-11 col-11">
                <div class="section-title b-top desktop-center padding-top-25 margin-bottom-55">
                    <h2 class="title"> 
                        @if(app()->getLocale() == "en") {{ $caseSection->title_en }} @else {{ $caseSection->title_ar }} @endif
                    </h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($cases as $case)
                <div class="col-lg-6 col-xl-4 col-md-6">
                    <div class="contribute-single-item">
                        <div class="thumb">
                            <img src="{{ asset($case->image) }}" alt="">
                        </div>
                        <div class="content">
                            <div class="progress-content">
                                <div class="progress-item">
                                    <div class="single-progressbar">
                                        <div id="{{ $case->id }}"></div>
                                    </div>
                                </div>
                                <div class="goal">
                                    <h4 class="raised">{{ __('Raised') }} : {{ $case->current_share }}</h4>
                                    <h4 class="raised">{{ __('Goal') }} : {{ $case->target_share }}</h4>
                                </div>
                            </div>
                            <h3 class="title">
                                @if(app()->getLocale() == "en") {{ $case->title_en }} @else {{ $case->title_ar }} @endif
                            </h3>
                            <p>
                                @if(app()->getLocale() == "en") {{ \Str::limit(Strip_tags($case->content_en), $limit = 80, $end = '...')  }}
                                   @else {{ \Str::limit(Strip_tags($case->content_ar), $limit = 80, $end = '...')  }}
                                @endif 
                            </p>
                            <div class="btn-wrapper">
                                <a href="{{ url('cases') }}" class="boxed-btn">{{ __('Read More') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<script>
     $( document ).ready(function() {
        @foreach($cases as $case)
            (function($) {
            "use strict";
            $("#{{ $case->id }}").rProgressbar({
                percentage: {{ ($case->current_share / $case->target_share)*100 }},
                fillBackgroundColor: "#14b3e4"
            });

            $(".js").rProgressbar({
                height: 10,
                percentage: 50,
                fillBackgroundColor: "#14b3e4"
            });
            $(".css").rProgressbar({
                percentage: 65,
                fillBackgroundColor: "#f1ae44"
            });
        })(jQuery); 
        @endforeach
     });
 </script>
@endif