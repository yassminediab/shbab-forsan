 @if(! empty($video))
 <!-- Works towards supporting Area -->
 <div class="work-towards-area bg-image padding-bottom-115" style="
    height: 275px;
">
     <div class="container" style="padding-top: 83px;">
         <div class="row">
             <div class="col-lg-9 col-md-9 col-sm-9 col-7">
                 <div class="left-content">
                     <div class="inner-section-title bg-image" style="padding-top: 24px">
                         <h2 class="title">
                             @if(app()->getLocale() == "en") {{ $video->title_en }} @else {{ $video->title_ar }} @endif
                         </h2>
                     </div>
                 </div>
             </div>
             <div class="col-lg-3 col-md-3 col-sm-3 col-5">
                 <div class="right-content">
                     <div class="vdo-btn">
                         <a class="video-play mfp-iframe" href="{{ $video->urlFormat($video->url) }}"><i
                                 class="fas fa-play"></i></a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 @endif