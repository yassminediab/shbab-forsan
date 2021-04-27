@extends('frontend.layouts.header')
@section('content')
<!-- breadcrumb Area -->
<div class="breadcrumb-area"
    style="background-image:url({{ asset('images/'.resizeImage($pageSetting->image, 1792, 510))}});">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner">
                    {{-- <div class="icon">
                        <img src="assets/img/icon/01.png" alt="">
                    </div> --}}
                    <h2 class="page-title">@if(app()->getLocale() == "en") {{$pageSetting->title_en}}@else
                        {{$pageSetting->title_ar}}@endif</h2>
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

                        <ul class="list-unstyled text-body lead" style="color: #000;">
                            <li class="mb-2">
                                📌بنك Cib - جمعية شباب فرسان للأنشطة الخيرية 1000/4431/7391
                            </li>
                            <li class="mb-2">
                                📌بنك مصر فرع سراي القبة - جمعية شباب فرسان 183/1/25349
                            </li>
                            <li class="mb-2">
                                📌رسائل #ميجا_خير كلمة "فرسان" في SMS على9797 بسعر ٥ جنيه
                            </li>
                            <li class="mb-2">
                                📌ماكينات #فورى : مؤسسة شباب فرسان كود 9140
                            </li>
                            <li class="mb-2">
                                📌ليصلك مندوبنا يمكنك التواصل علي أرقامنا :
                                <a href="tel:0226849010">0226849010</a> / <a href="tel:01015172946">01015172946</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="widget-area">
                    <div class="widget-nav-form">
                        @include('frontend.layouts.success_message')
                        <form action="{{ route('volunteer-data.store') }}" class="request-page-form" novalidate="novalidate"
                              method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="name" placeholder="{{ __('Full Name') }}" class="form-control"
                                               required="" aria-required="true">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="{{ __('Email') }}" class="form-control"
                                               required="" aria-required="true">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="phone" placeholder="{{ __('Phone') }}" class="form-control"
                                               required="" aria-required="true">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="address" placeholder="{{ __('Address') }}" class="form-control"
                                               required="" aria-required="true">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="submit" value="{{ __('Submit Request') }}" class="submit-btn">
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
