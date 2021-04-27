<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Doctor nagib</title>

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


</head>

<body>

<!-- Main navbar -->
<div class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{url('admin')}}"><img src="{{ asset('admin_design/assets/images/logo_light.png')}}" alt=""></a>
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
                        <img src="{{asset('admin_design/assets/images/placeholder.jpg')}}" alt="">
                        <span>Doctor Nagib</span>
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
                            <a href="#" class="media-left"><img src="{{ asset('admin_design/assets/images/placeholder.jpg')}}" class="img-circle img-sm" alt=""></a>
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
                                <a href="#"><i class="icon-stack2"></i> <span>Settings</span></a>
                                <ul>
                                    <li><a href="{{ url('admin/footer') }}">view settings</a></li>
                                    <li><a href="{{ url('admin/social-media') }}">view social media</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="#"><i class="icon-stack2"></i> <span>Pages</span></a>
                                <ul>
                                    <li><a href="{{ url('admin/about-us') }}">view About Us</a></li>
                                    <li><a href="{{ url('admin/volunteer/section') }}">view volunteer</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="#"><i class="icon-stack2"></i> <span>Home Pgae</span></a>
                                <ul>
                                    <li><a href="{{ url('admin/slider') }}">view Slider</a></li>
                                    <li><a href="{{ url('admin/aboutSection') }}">view About</a></li>
                                    <li><a href="{{ url('admin/video') }}">view Video</a></li>
                                    <li><a href="{{ url('admin/number') }}">view number</a></li>
                                    <li><a href="{{ url('admin/blog/section') }}">view blog</a></li>
                                    <li><a href="{{ url('admin/problem/section') }}">view problem</a></li>
                                    <li><a href="{{ url('admin/case/section') }}">view case</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="#"><i class="icon-stack2"></i> <span>Events</span></a>
                                <ul>
                                    <li><a href="{{ url('admin/events') }}">view events</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="#"><i class="icon-stack2"></i> <span>Cases</span></a>
                                <ul>
                                    <li><a href="{{ url('admin/cases') }}">view cases</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="#"><i class="icon-stack2"></i> <span>blogs</span></a>
                                <ul>
                                    <li><a href="{{ url('admin/blogs') }}">view blogs</a></li>
                                    <li><a href="{{ url('admin/categories') }}">view categories</a></li>
                                    <li><a href="{{ url('admin/tags') }}">view tags</a></li>

                                </ul>
                            </li>

                            <li>
                                <a href="#"><i class="icon-stack2"></i> <span>Form</span></a>
                                <ul>
                                    <li><a href="{{ url('admin/contact') }}">view Contacts</a></li>
                                    <li><a href="{{ url('admin/volunteers') }}">view Volunteers</a></li>
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
