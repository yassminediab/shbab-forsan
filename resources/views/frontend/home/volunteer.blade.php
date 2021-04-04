   @if(! empty($volunteerSection))
   <!-- Volunteer Area -->
   <section class="volunteer-area bg-image padding-bottom-90 padding-top-120">
       <div class="container">
           <div class="row">
               <div class="col-lg-12">
                   <div class="volunteer-title-content margin-bottom-50">
                       <div class="section-title desktop-left">
                           <h3 class="title" style="background-color: var(--main-color-one);">
                               @if(app()->getLocale() == "en") {{ $volunteerSection->title_en }} @else {{
                               $volunteerSection->title_ar }} @endif
                           </h3>
                       </div>
                       <div class="section-paragraph">
                           <P>
                               @if(app()->getLocale() == "en") {!! $volunteerSection->content_en !!} @else {!!
                               $volunteerSection->content_ar !!} @endif
                           </P>
                       </div>
                   </div>
               </div>
           </div>
           <div class="row">
               @foreach($volunteers as $val => $volunteer)
               <div class="col-lg-3 col-sm-6">
                   <div class="team-single-item">
                       <div class="thumb">
                           <img src="{{ asset('images/'.resizeImage($volunteer->image, 681, 722)) }}"
                               alt="{{ $volunteer->name }}">
                           <div class="content" 
                           @if($val ==0 ) style="    background-color: rgba(248, 96, 72, 0.9);}"
                           @elseif($val == 1 ) style="    background-color: rgba(0, 189, 192, 0.9);}"
                           @elseif($val ==  2) style="background-color: rgba(252, 177, 26, 0.9);}"
                           @else style="background-color: rgba(146, 56, 164, 0.9);}"
                           @endif
                           >

                               <h4 class="title">
                                   {{ $volunteer->name }}
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