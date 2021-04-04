  <!-- Counter Area -->
  <div class="counterup-area padding-bottom-120 padding-top-100">
    <div class="container">
        <div class="counterup-area-wrapper">
            <div class="row">
                @foreach($numbers as $val => $number)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-counterup-01">
                        <div class="icon">
                           @if($val == 0) <i class="fas fa-hand-holding-heart"></i> @elseif($val == 1) <i class="flaticon-solidarity"></i>
                           @else <i class="flaticon-man"></i> @endif
                        </div>
                        <div class="content">
                            <div class="count-wrap"><span class="count-num">{{ $number->number }}</span>+</div>
                            <h4 class="title">
                                @if(app()->getLocale() == "en") {{ $number->title_en }} @else {{ $number->title_ar }} @endif
                            </h4>
                        </div>
                    </div>
                </div>
               @endforeach
            </div>
        </div>
    </div>
</div>