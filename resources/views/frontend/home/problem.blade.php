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
               <div class="col-lg-6 col-md-6">
                   <div class="problem-single-item margin-bottom-30">
                       <div class="icon">
                           <i class="fa {{ $problem->icon }}"></i>
                       </div>
                       <div class="content">
                           <h4 class="title">
                               <a href="#">
                                   @if(app()->getLocale() == "en") {{ $problem->title_en }} @else {{ $problem->title_ar
                                   }} @endif
                               </a>
                           </h4>
                           <p>
                               @if(app()->getLocale() == "en") {{ \Str::limit(Strip_tags($problem->content_en), $limit =
                               80, $end = '...') }}
                               @else {{ \Str::limit(Strip_tags($problem->content_ar), $limit = 80, $end = '...') }}
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