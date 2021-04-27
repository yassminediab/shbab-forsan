<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.css">
        <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
         <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="assets/js/vendor/modernizr-3.6-custom.min.js"></script>
        <link href="datapicker/src/css/datepicker.css" rel="stylesheet">
        <script src="datapicker/dist/js/datepicker.js"></script>

        <link href="datapicker/dist/css/datepicker.min.css" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="assets/css/main.css">
        <!-- Include English language -->

    </head>
    <body>
         <div class="se-pre-con"></div>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

            <!-- page-load -->
            <!-- <div class="se-pre-con"></div> -->
            <!-- form-modal -->
            <div class="modal fade pr-0" id="exampleModalLabel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content p-lg-5">
                        <div class="modal-header border-0">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text-center" id="result">

                        </div>
                        <div class="modal-footer border-0">
                            <button type="button" class="btn btn-primary" id="sendAppoinment" data-url="{{ url('send/appoinment') }}">حجز</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">رجوع</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- video-modal -->
           <div class="modal fade" id="exampleModalvideo" tabindex="-1" role="dialog" aria-labelledby="exampleModalvideo" aria-hidden="true">
            <div class="modal-dialog h-75" role="document">
                <div class="modal-content h-100">
                    <div class="modal-header border-0">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-center">
                        <iframe width="100%"  class="h-100" src="{{$link}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header border-0">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body slider-modal" id="blogresult">

                        </div>
                    </div>
                </div>
            </div>
            <!-- header -->
            <header>
                <nav class="navbar bg-transparent">
                    <div class="container p-0 py-md-3">
                        <div class="brand">
                            <img src="assets/img/brand.svg" class="img-fluid trangle" alt="Responsive image">
                        </div>
                        <ul class="nav">
                          <li>
                            <a class=" d-flex align-items-center justify-content-center text-white w-100 h-100" target="_blank" href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                          </li>

                          <li>
                              <a class=" d-flex align-items-center justify-content-center text-white w-100 h-100" target="_blank" href="https://www.youtube.com/channel/UCzk8_reoFZQ6qOFmIUxqnjQ/">
                                <i class="fab fa-youtube"></i>
                            </a>
                          </li>
                            <li>
                             <a class=" d-flex align-items-center justify-content-center text-white w-100 h-100" target="_blank" href="">
                                <i class="fab fa-google"></i>
                            </a>
                          </li>
                          <li>
                              <a class=" d-flex align-items-center justify-content-center text-white w-100 h-100" target="_blank" href="https://www.google.com/maps/place/%D8%AF%D9%83%D8%AA%D9%88%D8%B1+%D9%85%D8%AD%D9%85%D8%AF+%D9%86%D8%AC%D9%8A%D8%A8+%D9%85%D8%AD%D9%85%D9%88%D8%AF+%D8%A7%D9%84%D8%B5%D9%8A%D8%B1%D8%A9%E2%80%AD/@29.9691724,30.9407635,17z/data=!3m1!4b1!4m5!3m4!1s0x145855e8db059799:0x1e97bf76ba97ba03!8m2!3d29.9691724!4d30.9385748">
                                <i class="fas fa-map-marker-alt"></i>
                            </a>
                          </li>
                        </ul>
                    </div>
                </nav>
                <section class="doctor">
                    <div class="container mycontainer d-flex align-items-center h-100">
                        <div class="row doc-row h-100">
                            <div class="col-12 col-lg-6 d-flex justify-content-center align-items-center text-md-right">
                                <div class="row">
                                    <div class="col-12 text-center text-lg-right my-image d-lg-none">
                                        <img src="assets/img/personal.png" class="rounded-circle" alt="Responsive image" data-aos="zoom-in">
                                    </div>
                                    <div class="col-12 text-center text-lg-right text-white mt-4 make-space">
                                        <h4>د/ محمد نجيب الصيرة </h4>
                                        <h5>استشارى الباطنة العامة </h5>
                                        <p>
                                            مول اباظة - الدور الثانى بجوار التوحيد والنور
                                            مسجد الحصرى مدينة 6 أكتوبر - الجيزة
                                        </p>
                                        <a href="tel:01068801080">
                                            <button type="button" class="btn btn-primary fly-btn mt-1 d-flex align-items-center justify-content-center">
                                                <p class="d-none d-lg-block m-0 ml-3"> للتواصل </p>
                                                <i class="fas fa-phone-alt"></i>
                                                <!-- <i class="fas fa-phone"></i> -->
                                            </button>
                                        </a>
                                    </div>
                                    <div class="col-12 mt-4 d-md-none">
                                        <a href="#" class="w-100 mr-auto ml-auto down">
                                            <div id="mouse-scroll">
                                              <div class="mouse">
                                                <div class="mouse-in"></div>
                                              </div>
                                              <div class="text-white mt-1">
                                                  تصفح للاسفل
                                               </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="d-none d-lg-block col-lg-6">
                                <img src="assets/img/bigimage.svg" class="img-fluid doc-big-image" alt="Responsive image">
                            </div>
                        </div>
                    </div>
                </section>
            </header>
            <!-- form -->
            <section class="form py-4" data-aos="fade-up">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-10 offset-lg-1">
                            <div class="form-box text-center w-md-50 mr-md-auto ml-md-auto">
                               <h4 class="font-weight-bold">احجز كشفك الان </h4>
                                <p class="mb-0 text-center text-dark">
                                    سعر الكشف 200جنية
                                        <i class="fas fa-money-bill-wave mr-2"></i>
                                </p>
                                <p class="mb-0 text-center text-dark">
                                   ايام العمل : من السبت الى الخميس
                                </p>
                                <p class="mb-0 text-center text-dark">
                                   ساعات العمل من الساعة 4 الى الساعة 10
                                </p>
                                <p class="mt-3 font-weight-bold text-center text-dark mt-5">بيانات المريض </p>
                                <form action="" method="post">
                                    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />

                                    {{ csrf_field() }}
                                    <div class="mb-3">
                                        <input type="text" id="name" name="name" class="form-control" placeholder="اسم المريض " aria-label="Username" aria-describedby="basic-addon1">
                                        <p id="error-name" style="color: red" class="d-none">لابد من ادخال الاسم</p>
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" id="phone" name="phone" class="form-control" placeholder="تليفون المريض " aria-label="Username" aria-describedby="basic-addon1">
                                        <p id="error-phone" style="color: red" class="d-none">لابد من ادخال رقم الهاتف</p>

                                    </div>
                                    <div class="mb-3">
                                        <input type="text" id="email" name="email" class="form-control" placeholder="ايميل المريض ( اختيارى)"aria-label="Username" aria-describedby="basic-addon1">
                                    </div>

                                    <div id="disabled-days" data-language='en'></div>
                                    <input type="hidden" name="time" id="time">
                                    <div class="book-btn mt-4 mt-lg-5 pt-lg-3">
                                        <button type="button" class="btn form-button ml-auto mr-auto" id="getTime"  data-gettime="{{ url('get/time') }}">
                                              حجز
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- service -->
            <section class="service">
                <div class="container">
                    <div class="row">
                        <div class="col-6 mb-lg-5">
                            <div class="service-box text-white text-center" data-aos="flip-left">
                                <img src="assets/img/blood.svg" class="img-fluid w-25" alt="Responsive image">
                                <p class="mt-3"> علاج امراض القلب </p>
                            </div>
                        </div>
                        <div class="col-6 mb-lg-5">
                            <div class="service-box text-white text-center" data-aos="flip-right">
                                <img src="assets/img/stomach.svg" class="img-fluid w-25" alt="Responsive image">
                                <p class="mt-3"> علاج امراض الجهاز الهضمى </p>
                            </div>
                        </div>
                        <div class="col-6 mb-lg-5">
                            <div class="service-box text-white text-center" data-aos="flip-left">
                                <img src="assets/img/bladder.svg" class="img-fluid w-25" alt="Responsive image">
                                <p class="mt-3"> علاج امراض الجهاز البولى</p>
                            </div>
                        </div>
                        <div class="col-6 mb-lg-5">
                            <div class="service-box text-white text-center" data-aos="flip-right">
                                <img src="assets/img/respiratory-system (1).svg" class="img-fluid w-25" alt="Responsive image">
                                <p class="mt-3"> علاج امراض الجهاز التنفسي</p>
                            </div>
                        </div>
                        <div class="col-6 mb-lg-5">
                            <div class="service-box text-white text-center" data-aos="flip-right">
                                <img src="assets/img/electronics.svg" class="img-fluid w-25" alt="Responsive image">
                                <p class="mt-3"> علاج امراض السكر والغدد الصماء </p>
                            </div>
                        </div>
                        <div class="col-6 mb-lg-5">
                            <div class="service-box text-white text-center" data-aos="flip-right">
                                <img src="assets/img/outline.svg" class="img-fluid w-25" alt="Responsive image">
                                <p class="mt-3">علاج امراض الغدد</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- video -->
            <section class="myvideo">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="video-box text-center w-100" data-aos="zoom-in">
                                <h6 class="text-dark font-weight-bold mb-3 mb-lg-5">{{$title}}</h6>
                                <div class="position-relative">
                                    <button class="border-0 p-0" data-toggle="modal" data-target="#exampleModalvideo">
                                        <img src="assets/img/1.png " class="img-fluid video-img" alt="Responsive image">
                                    <div class="icon position-absolute text-center">
                                        <img src="assets/img/play.png" class="img-fluid" alt="Responsive image">
                                    </div>
                                    </button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- slider -->

            <section class="slider py-5 text-center">
                <h6 class="text-dark font-weight-bold mb-3 mb-lg-5">مقالات</h6>
                <div class="container-fluid position-relative">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            @foreach($blogs as $blog)
                                <div class="swiper-slide text-right" >
                                    <button type="button" class="btn p-0 blogModel"  data-url="{{ url('modelblog/'.$blog->id) }}" >
                                        <div class="card" >
                                            <img src="{{ asset('images/'.$blog->image) }}" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="font-weight-bold">  {{$blog->title}}</h5>
                                                <p class="card-text">{{ \Str::limit(Strip_tags($blog->description), $limit = 50, $end = '...')  }}
                                                </p>
                                            </div>
                                        </div>
                                    </button>
                                </div>
                           @endforeach
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next d-none d-md-block"></div>
                        <div class="swiper-button-prev d-none d-md-block"></div>
                    </div>
                </div>
            </section>
            <!-- footer -->
            <footer class="py-4">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-4 text-md-center">
                            <div class="brand">
                                <img src="assets/img/brand.svg" class="img-fluid trangle" alt="Responsive image">
                            </div>
                            <h4 class=" mt-2 mb-0"> د/كتور محمد نجيب الصيرة </h4>
                            <p class="job">استاذ الباطنة العامة </p>
                            <div>
                                <a href="tel:01068801080">
                                    <button type="button" class="btn btn-primary fly-btn mt-1 d-flex align-items-center justify-content-center">
                                        <p class="d-none d-lg-block m-0 ml-3"> للتواصل </p>
                                        <i class="fas fa-phone-alt"></i>
                                        <!-- <i class="fas fa-phone"></i> -->
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mt-5 text-md-center">
                            <ul class="discraption m-0 p-0">
                                <li>
                                    للتعديل على الحجز
                                </li>
                                <li>
                                    <i class="fas fa-phone"></i>
                                    / 01010729672
                                </li>
                                <li>
                                    <i class="far fa-envelope"></i>
                                    / info@naguibclinic.com
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 col-md-4 mt-5 text-md-center">
                            <p class="title">للتواصل معنا على </p>
                            <ul class="social m-0">
                                <li>
                                    <a class=" d-flex align-items-center justify-content-center text-white w-100 h-100" target="_blank" href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class=" d-flex align-items-center justify-content-center text-white w-100 h-100" target="_blank" href="https://www.youtube.com/channel/UCzk8_reoFZQ6qOFmIUxqnjQ/">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class=" d-flex align-items-center justify-content-center text-white w-100 h-100" href="#" target="_blank">
                                        <i class="fab fa-google"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class=" d-flex align-items-center justify-content-center text-white w-100 h-100" target="_blank" href="https://www.google.com/maps/place/%D8%AF%D9%83%D8%AA%D9%88%D8%B1+%D9%85%D8%AD%D9%85%D8%AF+%D9%86%D8%AC%D9%8A%D8%A8+%D9%85%D8%AD%D9%85%D9%88%D8%AF+%D8%A7%D9%84%D8%B5%D9%8A%D8%B1%D8%A9%E2%80%AD/@29.9691724,30.9407635,17z/data=!3m1!4b1!4m5!3m4!1s0x145855e8db059799:0x1e97bf76ba97ba03!8m2!3d29.9691724!4d30.9385748">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>

        <!-- scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="datapicker/dist/js/datepicker.min.js"></script>
        <script src="datapicker/dist/js/i18n/datepicker.en.js"></script>


        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        <script src="assets/js/plugins.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
        <script src="https://unpkg.com/swiper/js/swiper.js"></script>
        <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        <!-- <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script> -->
        <script>
            // Make Sunday and Saturday disabled
            var days = "{{$days}}";
            var disabledDays = days;
            var d = new Date();
            var currMonth = d.getMonth() ;
            var currYear = d.getFullYear();
            var startDate = new Date(currYear, currMonth, 1);
            $("#datepicker").datepicker("setDate", startDate);
            $('#disabled-days').datepicker({
                language: 'en',
                minDate: d,
                onRenderCell: function (date, cellType) {
                    if (cellType == 'day') {
                        var day = date.getDay(),
                            isDisabled = disabledDays.indexOf(day) != -1;

                        return {
                            disabled: isDisabled
                        }
                    }
                }
            })
        </script>
         <script>
            var swiper = new Swiper('.swiper-container', {
                autoplay: {
                    delay: 2000,
                },
                slidesPerView: 'auto',
                spaceBetween: 20,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
              },
              breakpoints: {
                768: {
                  slidesPerView: 2,
                  spaceBetween: 30,
                },
              }
            });
        </script>
        <script>
            $(window).load(function() {
              // Animate loader off screen
               $(".se-pre-con").delay(1500).fadeOut(400);
                $('#sendAppoinment').removeClass('d-none');

            });
        </script>

          <script>
            AOS.init();
          </script>
          <script>
              $(document).ready(function() {
                $(".down").click(function() {
                     $('html, body').animate({
                         scrollTop: $(".up").offset().top
                     }, 1500);
                 });
                });
          </script>
          <script>
               function scrollWin() {
                  window.scrollBy(0, 500);
                }
          </script>
       <script>
           $(".blogModel").click(function () {
               var url = $(this).data("url");
               console.log(url);
               $.ajax({
                   type: "GET",
                   url: url,
                   success: function (data) {
                       $('#exampleModal').modal('show');
                       $('#blogresult').html(data);
                   },
                   error: function (request, error) {
                       console.log(request);
                   }
               });
           });
               $("#getTime").click(function() {
                   if($('#name').val() == '')
                   {
                       $('#error-name').removeClass('d-none');
                   }
                   if($('#phone').val() == '')
                   {
                       $('#error-phone').removeClass('d-none');
                   }
                   if(! jQuery('.-selected-').data('date'))
                   {
                       alert("يجب اختيار تاريخ اولا   ");
                   }
                   if(! $('#name').val() == '' && ! $('#phone').val() == '' && jQuery('.-selected-').data('date') ){
                       var url = $(this).data("gettime");
                       $.ajax({
                           type: "GET",
                           url: url,
                           data: {
                               'day' : jQuery('.-selected-').data('date'),
                               'month' : jQuery('.-selected-').data('month'),
                               'year' : jQuery('.-selected-').data('year'),
                           },
                           success: function (data) {
                               $('#exampleModalLabel').modal('show');
                               $('#result').html(data);
                           },
                           error: function (request, error) {
                                 console.log(request);
                           }
                       });
                   }

           });

           function timeSelected(time){
               $('#time').val(time);
           }

           $("#sendAppoinment").click(function() {
               var url = $(this).data("url");
               $.ajax({
                   type: "POST",
                   url: url,
                   data: {
                       'name': $('#name').val(),
                       'phone': $('#phone').val(),
                       'email': $('#email').val(),
                       'day' : jQuery('.-selected-').data('date'),
                       'month' : jQuery('.-selected-').data('month'),
                       'year' : jQuery('.-selected-').data('year'),
                       'time' : $('#time').val(),
                       '_token' : $('#csrf-token').val(),

                   },
                   success: function (data) {
                       document.getElementById("result").innerHTML = "";
                       $('#result').html(data);
                       $('#sendAppoinment').addClass('d-none');
                   },
                   error: function (request, error) {
                       console.log(error);
                   }

               });
           });



       </script>

    </body>
</html>
