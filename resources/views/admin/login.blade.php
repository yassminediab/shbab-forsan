<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>shabab-forsan</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{asset('admin_design/assets/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('admin_design/assets/css/bootstrap.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('admin_design/assets/css/core.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('admin_design/assets/css/components.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('admin_design/assets/css/colors.css')}}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="{{asset('admin_design/assets/js/plugins/loaders/pace.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('admin_design/assets/js/core/libraries/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('admin_design/assets/js/core/libraries/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('admin_design/assets/js/plugins/loaders/blockui.min.js')}}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="{{asset('admin_design/assets/js/plugins/forms/styling/uniform.min.js')}}"></script>

	<script type="text/javascript" src="{{asset('admin_design/assets/js/core/app.js')}}"></script>
	<script type="text/javascript" src="{{asset('admin_design/assets/js/pages/login.js')}}"></script>
	<!-- /theme JS files -->

</head>

<body class="login-container">

	<!-- Main navbar -->
	<div class="navbar navbar-inverse">
		<div class="navbar-header">
			<a class="navbar-brand" href="index.html"><img src="assets/images/logo_light.png" alt=""></a>

			<ul class="nav navbar-nav pull-right visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="#">
						<i class="icon-display4"></i> <span class="visible-xs-inline-block position-right"> Go to website</span>
					</a>
				</li>

				<li>
					<a href="#">
						<i class="icon-user-tie"></i> <span class="visible-xs-inline-block position-right"> Contact admin</span>
					</a>
				</li>

				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-cog3"></i>
						<span class="visible-xs-inline-block position-right"> Options</span>
					</a>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Content area -->
				<div class="content">

					<!-- Advanced login -->
                    <form action="{{ route('login') }}" method="POST">
                         @csrf
						<div class="login-form">
							<div class="text-center">
								<div class="icon-object border-warning-400 text-warning-400"><i class="icon-people"></i></div>
								<h5 class="content-group-lg">Login to your account <small class="display-block">Enter your credentials</small></h5>
                            </div>

							<div class="form-group has-feedback has-feedback-left">
								<input type="text" class="form-control input-lg" placeholder="Email" @error('email') is-invalid @enderror name="email" value="{{ old('email') }}">
								<div class="form-control-feedback">
									<i class="icon-user text-muted"></i>
                                </div>
                                 @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>

							<div class="form-group has-feedback has-feedback-left">
								<input type="password" class="form-control input-lg" placeholder="Password" @error('password') is-invalid @enderror name="password" required autocomplete="current-password">
								<div class="form-control-feedback">
									<i class="icon-lock2 text-muted"></i>
                                </div>
                                 @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
							<div class="form-group">
								<button type="submit" class="btn bg-blue btn-block btn-lg">Login <i class="icon-arrow-right14 position-right"></i></button>
							</div>
						</div>
					</form>
					<!-- /advanced login -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</body>
</html>
