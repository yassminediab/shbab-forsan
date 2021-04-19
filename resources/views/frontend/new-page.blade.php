@extends('frontend.layouts.header')
@section('content')

<!-- Slider -->
<div class="header-slider-one">
    @for($i = 0; $i < 3; $i++)
    <div class="header-area header-bg"
        style="background-image:url('https://picsum.photos/800'); background-repeat: no-repeat; background-position:
        center center; background-size: cover;">
        <div class="container">
            <div @if(app()->getLocale() == "en") class="row" @else class="row justify-content-end" @endif>
                <div @if(app()->getLocale() == "en") class="col-lg-6" @else class="col-lg-6 col-lg-offset-8" @endif>
                    <div class="header-inner">
                        <!-- header inner -->
                        <h1 class="title">
                            New Page
                        </h1>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam saepe temporibus suscipit voluptate laudantium ullam mollitia officiis autem veniam modi exercitationem ducimus, aliquid deserunt, eos impedit quod. Sunt, nostrum at!</p>
                        <div class="btn-wrapper  desktop-left padding-top-30">
                            <a href="#" class="boxed-btn float-start">
                                learn more
                            </a>
                        </div>
                    </div>
                    <!-- //.header inner -->
                </div>
            </div>
        </div>
    </div>
    @endfor
</div>

<!--Events Details Area -->
<div class="page-content our-attoryney padding-bottom-120 padding-top-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="volunteer-details-item">
                    <div class="section-title margin-bottom-35">
                        <h2 class="title">
                            new page title
                        </h2>
                        
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
                        <form action="{{ route('volunteer.store') }}" class="request-page-form" novalidate="novalidate"
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
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea name="message" id="msg" cols="1" rows="4" placeholder="{{ __('Send Message') }}"
                                            spellcheck="false"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="file" name="file" placeholder="{{ __('') }}" class="form-control" required
                                            aria-required="true">
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