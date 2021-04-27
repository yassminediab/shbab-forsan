<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shabab-Forsan</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{asset('admin_design/assets/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin_design/assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin_design/assets/css/core.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin_design/assets/css/components.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin_design/assets/css/colors.css') }}" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="{{ asset('admin_design/assets/js/plugins/loaders/pace.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('admin_design/assets/js/core/libraries/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin_design/assets/js/core/libraries/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin_design/assets/js/plugins/loaders/blockui.min.js') }}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script type="text/javascript" src="{{ asset('admin_design/assets/js/plugins/tables/footable/footable.min.js') }}"></script>
    <!-- Theme JS files -->    <script type="text/javascript" src="{{ asset('admin_design/assets/js/plugins/forms/selects/select2.min.js')}}"></script>

    <script type="text/javascript" src="{{ asset('admin_design/assets/js/core/app.js') }}"></script>
	<!-- /theme JS files -->

    <script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>

	<script type="text/javascript" src="{{ asset('admin_design/assets/js/plugins/editors/summernote/summernote.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('admin_design/assets/js/plugins/forms/styling/uniform.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin_design/assets/js/pages/form_inputs.js') }}"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<style>
	select{
		font-family: fontAwesome
	}
</style>
<style>
    .navbar-brand > img{
        margin-top: -18px !important;
       height: 59px !important;
    }
     .media-body > span{
        margin-top: 10px !important;
    }
    </style>

</head>

<body>

<!-- Main navbar -->
<div class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{url('admin')}}"><img src="{{ asset('images/logo.png')}}" alt=""></a>
        <ul class="nav navbar-nav visible-xs-block">
        </ul>
    </div>

    <div class="navbar-collapse collapse" id="navbar-mobile">
        <ul class="nav navbar-nav">
            <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>
        </ul>

        <div class="navbar-right">
            <ul class="nav navbar-nav">
                <li class="dropdown dropdown-user">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{asset('images/logo.png')}}" alt="">
                        <span>Shabab-forsan</span>
                        <i class="caret"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-right">
                        <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="icon-switch2"></i>   Logout
                        </a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- /main navbar -->

<!-- Page container -->
<div class="page-container">

    <!-- Page content -->
    <div class="page-content">

        <!-- Main sidebar -->
        <div class="sidebar sidebar-main">
            <div class="sidebar-content">

                <!-- User menu -->
                <div class="sidebar-user">
                    <div class="category-content">
                        <div class="media">
                            <a href="#" class="media-left"><img src="{{ asset('images/logo.png')}}" class="img-circle img-sm" alt=""></a>
                            <div class="media-body">
                                <span class="media-heading text-semibold">Admin</span>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- /user menu -->


                <!-- Main navigation -->
                <div class="sidebar-category sidebar-category-visible">
                    <div class="category-content no-padding">
                        <ul class="navigation navigation-main navigation-accordion">
                            <li>
                                <a href="#"><i class="icon-wrench3"></i> <span>Settings</span></a>
                                <ul>
                                    <li><a href="{{ url('admin/footer') }}">settings</a></li>
                                    <li><a href="{{ url('admin/social-media') }}">Social Media</a></li>
                                    <li><a href="{{ url('admin/page/settings') }}">Page Settings</a></li>
                                </ul>
                            </li>



                            <li>
                                <a href="#"><i class="icon-cube3"></i> <span>Pages</span></a>
                                <ul>
                                    <li><a href="{{ url('admin/about-us') }}">view About Us</a></li>
                                    <li><a href="{{ url('admin/volunteer/section') }}">view volunteer</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="#"><i class="icon-grid6"></i> <span>Home Pgae</span></a>
                                <ul>
                                    <li>
                                        <a href="#"><i class="icon-wrench3"></i> <span>Sections Setting</span></a>
                                        <ul>
                                            <li><a href="{{ url('admin/problem/section') }}">View Activity section</a></li>
                                            <li><a href="{{ url('admin/testimonial/section') }}">View Review Section</a></li>
                                            <li><a href="{{ url('admin/case/section') }}">View Cases Section</a></li>
                                            <li><a href="{{ url('admin/blog/section') }}">View Blogs Section</a></li>
                                            <li><a href="{{ url('admin/aboutSection') }}">View About Section</a></li>
                                            <li><a href="{{ url('admin/video') }}">View Video Section</a></li>
                                            <li><a href="{{ url('admin/event/section') }}">View Event Section</a></li>
                                            <li><a href="{{ url('admin/volunteer/section') }}">View Volunteer Section</a></li>

                                        </ul>
                                    </li>

                                    <li><a href="{{ url('admin/slider') }}">View Slider</a></li>
                                    <li><a href="{{ url('admin/area/section') }}">View Area Section</a></li>
                                    <li><a href="{{ url('admin/number') }}">View Numbers Section</a></li>
                                    <li><a href="{{ url('admin/problems') }}">View Activities</a></li>
                                    <li><a href="{{ url('admin/testimonials') }}">View reviews</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="#"><i class="icon-calendar3"></i> <span>Events</span></a>
                                <ul>
                                    <li><a href="{{ url('admin/events') }}">View Events</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="#"><i class="icon-stack2"></i> <span>Cases</span></a>
                                <ul>
                                    <li><a href="{{ url('admin/cases') }}">View Cases</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="#"><i class="icon-stack2"></i> <span>Blogs</span></a>
                                <ul>
                                    <li><a href="{{ url('admin/blogs') }}">View Blogs</a></li>
                                    <li><a href="{{ url('admin/categories') }}">View Categories</a></li>
                                    <li><a href="{{ url('admin/tags') }}">View Tags</a></li>

                                </ul>
                            </li>

                            <li>
                                <a href="#"><i class="icon-pencil3"></i> <span>Form</span></a>
                                <ul>
                                    <li><a href="{{ url('admin/contact') }}">view Contacts</a></li>
                                    <li><a href="{{ url('admin/volunteers') }}">view Volunteers</a></li>
                                    <li><a href="{{ url('admin/volunteers-data') }}">view Volunteers Data</a></li>
                                    <li><a href="{{ url('admin/newsletters') }}">view NewsLetter</a></li>
                                </ul>
                            </li>


                        </ul>
                    </div>
                </div>
                <!-- /main navigation -->

            </div>
        </div>
        <!-- /main sidebar -->


        <!-- Main content -->
        <div class="content-wrapper">
            @include('admin.layouts.success_message')
            @yield('content')
        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</div>
<!-- /page container -->
<script>
    // Default initialization
    $('.summernote').summernote();
</script>
@yield('scripts')

</body>
</html>
