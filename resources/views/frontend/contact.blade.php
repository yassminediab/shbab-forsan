
    @extends('frontend.layouts.header')
    @section('content')
    <!-- breadcrumb Area -->
    <div class="breadcrumb-area" style="background-image:url({{ asset('images/'.resizeImage($pageSetting->image, 1792, 510))}});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner">
                        <div class="icon">
                            <img src="assets/img/icon/01.png" alt="">
                        </div>
                        <h2 class="page-title">@if(app()->getLocale() == "en")  {{$pageSetting->title_en}}@else {{$pageSetting->title_ar}}@endif</h2>
                        <ul class="page-list">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="#">{{$pageSetting->title_en}}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Area -->
    <div class="contact-inner-area padding-bottom-120 padding-top-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <div class="content-area-wrapper bg-image" style="background-image: url(assets/img/contact/01.jpg);">
                        <div class="content-area">
                            <div class="single-contact-item">
                                <div class="icon">
                                    <i class="flaticon-call"></i>
                                </div>
                                <div class="content">
                                    <p class="details">{{ $footer->phone }}</p>
                                </div>
                            </div>
                            <div class="single-contact-item">
                                <div class="icon">
                                    <i class="flaticon-open"></i>
                                </div>
                                <div class="content">
                                    <p class="details">{{ $footer->email }}</p>
                                </div>
                            </div>
                            <div class="single-contact-item">
                                <div class="icon">
                                    <i class="flaticon-location"></i>
                                </div>
                                <div class="content">
                                    <p class="details">
                                      @if(app()->getLocale() == "en") {{ $footer->address_en }} @else {{ $footer->address_ar }} @endif
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 offset-lx-1">
                    <div class="row">
                        <div class="col-lg-10 col-sm-11 col-11">
                            <div class="section-title padding-top-25 margin-bottom-55">
                                <span>{{ __('Fill The Form') }}</span>
                                <h2 class="title"> {{ __('Send us') }} <span>{{ __('message') }}</span> {{ __('for any help') }}
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="contact-form style-01">
                        @include('frontend.layouts.success_message')
                        <form action="{{ route('contact.store') }}" method="post" class="contact-page-form style-01" novalidate="novalidate">
                           {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="fname" placeholder="First Name" class="form-control" required="" aria-required="true">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="lname" placeholder="Last Name" class="form-control" required="" aria-required="true">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="phone" placeholder="Telephone" class="form-control" required="" aria-required="true">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" id="msg" cols="1" rows="4" placeholder="Send Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="btn-wrapper">
                                        <button type="submit" class="boxed-btn reverse-color"><span>
                                            {{ __('Submit Message') }}
                                        </span></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Map Area -->
    {{-- <div class="map-area">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="contact_map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d233667.8223908687!2d90.27923710646989!3d23.780887457084543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1588510922243!5m2!1sen!2sbd" style="border:0; width: 100%; height: 100%;"
                            allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
