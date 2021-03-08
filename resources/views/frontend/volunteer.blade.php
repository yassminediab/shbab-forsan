@extends('frontend.layouts.header')
@section('content')
    <!-- breadcrumb Area -->
    <div class="breadcrumb-area" style="background-image:url({{ asset('images/'.resizeImage($pageSetting->image, 1792, 510))}});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner">
                        {{-- <div class="icon">
                            <img src="assets/img/icon/01.png" alt="">
                        </div> --}}
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
    <!--Events Details Area -->
    <div class="page-content our-attoryney padding-bottom-120 padding-top-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="volunteer-details-item">
                        <div class="section-title margin-bottom-35">
                            <h2 class="title">
                                @if(app()->getLocale() == "en") {{ $VolunteerSection->title_en }} @else {{ $VolunteerSection->title_ar }} @endif
                            </h2>
                            <p>
                                @if(app()->getLocale() == "en")   {!! $VolunteerSection->content_en !!}
                                @else  {!! $VolunteerSection->content_ar !!}  @endif
                            </p>
                        </div>
                        {{-- <div class="content">
                            <p>We are a non-profit organisation in USA that works towards supporting underprivileged children reach their full potential - physical, mental as well as emotional. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                nisi ut aliquip.</p>
                            <h4 class="sub-title"><a href="#">Requirment to Join</a></h4>
                            <ul>
                                <li><a href="#"><i class="fas fa-check"></i>If you want to change the world</a></li>
                                <li><a href="#"><i class="fas fa-check"></i>Keep the same cleaner for every visit</a></li>
                                <li><a href="#"><i class="fas fa-check"></i>One-off, weekly or fortnightly visits</a></li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="widget-area">
                        <div class="widget-nav-form">
                            @include('frontend.layouts.success_message')
                            <form action="{{ route('volunteer.store') }}" class="request-page-form" novalidate="novalidate" method="post">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="email" name="name" placeholder="Full Name" class="form-control" required="" aria-required="true">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Email" class="form-control" required="" aria-required="true">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="phone" placeholder="Phone" class="form-control" required="" aria-required="true">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="address" placeholder="Address" class="form-control" required="" aria-required="true">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea name="message" id="msg" cols="1" rows="4" placeholder="Send Message" spellcheck="false"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="submit" value="Submit Request" class="submit-btn">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
