   @if(! empty($problemSection))
   <!-- Follow Problem -->
   <section class="problem-area padding-top-90 padding-bottom-85">
       <div class="container">
           <div class="row justify-content-center">
               <div class="col-lg-8 col-sm-11 col-11">
                   <div class="section-title b-top desktop-center padding-top-25 margin-bottom-55">
                       <h2 class="title">
                           @if(app()->getLocale() == "en") {{ $problemSection->title_en }} @else {{
                           $problemSection->title_ar }} @endif
                       </h2>
                   </div>
               </div>
           </div>
           <div class="row">
               @foreach($problems as $problem)
               <div class="col-lg-3 col-md-3">
                   <div class="problem-single-item margin-bottom-30">
                       <div class="icon">
                           <img src="{{ asset('images/'.resizeImage($problem->icon, 100, 100))}}">
                       </div>
                       <div class="content">
                           <h2 class="title" style="margin-top: 20px;font-size: 27px;">
                               <a href="{{ $problem->url }}">
                                   @if(app()->getLocale() == "en") {{ $problem->title_en }} @else {{ $problem->title_ar
                                   }} @endif
                               </a>
                           </h2>
                           <p>
                               @if(app()->getLocale() == "en") {!! \Str::limit(Strip_tags($problem->content_en), $limit =
                               300, $end = '...') !!}
                               @else {!! \Str::limit(Strip_tags($problem->content_ar), $limit = 300, $end = '...') !!}
                               @endif
                           </p>
                       </div>
                   </div>
               </div>
               @endforeach
           </div>
       </div>
   </section>
   @endif