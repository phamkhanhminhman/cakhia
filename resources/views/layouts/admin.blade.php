<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Admin</title>
	<meta name="description" content="Responsive, Bootstrap, BS4" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- for ios 7 style, multi-resolution icon of 152x152 -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
	<link rel="apple-touch-icon" href="{{asset('images-admin/logo.png')}}">
	<meta name="apple-mobile-web-app-title" content="Flatkit">
	<!-- for Chrome on Android, multi-resolution icon of 196x196 -->
	<meta name="mobile-web-app-capable" content="yes">
	<link rel="shortcut icon" sizes="196x196" href="{{asset('images-admin/logo.png')}}">
	
	<!-- style -->
	<link rel="stylesheet" href="{{asset('css-admin/animate.css/animate.min.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css-admin/glyphicons/glyphicons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css-admin/font-awesome/css/font-awesome.min.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css-admin/material-design-icons/material-design-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css-admin/ionicons/css/ionicons.min.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css-admin/simple-line-icons/css/simple-line-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css-admin/bootstrap/dist/css/bootstrap.min.css')}}" type="text/css" />

	<!-- build:css css/styles/app.min.css -->
	<link rel="stylesheet" href="{{asset('css-admin/styles/app.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css-admin/styles/style.css')}}" type="text/css" />
	<!-- endbuild -->
	<link rel="stylesheet" href="{{asset('css-admin/styles/font.css')}}" type="text/css" />
</head>
<body>
	<div class="app" id="app">

		<!-- ############ LAYOUT START-->

		<!-- aside -->
		@includeIf('partials.admin.sidebar')
		<!-- / -->

		<!-- content -->
		@yield('content')
		<!-- / -->


		<!-- ############ SWITHCHER START-->
		<div id="switcher">
			<div class="switcher dark-white" id="sw-theme">
				<a href="#" data-ui-toggle-class="active" data-ui-target="#sw-theme" class="dark-white sw-btn">
					<i class="fa fa-gear text-muted"></i>
				</a>
				<div class="box-header">
					<a href="https://themeforest.net/item/aside-dashboard-ui-kit/17903768?ref=flatfull" class="btn btn-xs rounded danger pull-right">BUY</a>
					<strong>Theme Switcher</strong>
				</div>
				<div class="box-divider"></div>
				<div class="box-body">
					<p id="settingLayout" class="hidden-md-down">
						<label class="md-check m-y-xs" data-target="folded">
							<input type="checkbox">
							<i></i>
							<span>Folded Aside</span>
						</label>
						<label class="m-y-xs pointer" data-ui-fullscreen data-target="fullscreen">
							<span class="fa fa-expand fa-fw m-r-xs"></span>
							<span>Fullscreen Mode</span>
						</label>
					</p>
					<p>Colors:</p>
					<p data-target="color">
						<label class="radio radio-inline m-a-0 ui-check ui-check-color ui-check-md">
							<input type="radio" name="color" value="primary">
							<i class="primary"></i>
						</label>
						<label class="radio radio-inline m-a-0 ui-check ui-check-color ui-check-md">
							<input type="radio" name="color" value="accent">
							<i class="accent"></i>
						</label>
						<label class="radio radio-inline m-a-0 ui-check ui-check-color ui-check-md">
							<input type="radio" name="color" value="warn">
							<i class="warn"></i>
						</label>
						<label class="radio radio-inline m-a-0 ui-check ui-check-color ui-check-md">
							<input type="radio" name="color" value="success">
							<i class="success"></i>
						</label>
						<label class="radio radio-inline m-a-0 ui-check ui-check-color ui-check-md">
							<input type="radio" name="color" value="info">
							<i class="info"></i>
						</label>
						<label class="radio radio-inline m-a-0 ui-check ui-check-color ui-check-md">
							<input type="radio" name="color" value="warning">
							<i class="warning"></i>
						</label>
						<label class="radio radio-inline m-a-0 ui-check ui-check-color ui-check-md">
							<input type="radio" name="color" value="danger">
							<i class="danger"></i>
						</label>
					</p>
					<p>Themes:</p>
					<div data-target="bg" class="clearfix">
						<label class="radio radio-inline m-a-0 ui-check ui-check-lg">
							<input type="radio" name="theme" value="">
							<i class="light"></i>
						</label>
						<label class="radio radio-inline m-a-0 ui-check ui-check-color ui-check-lg">
							<input type="radio" name="theme" value="grey">
							<i class="grey"></i>
						</label>
						<label class="radio radio-inline m-a-0 ui-check ui-check-color ui-check-lg">
							<input type="radio" name="theme" value="dark">
							<i class="dark"></i>
						</label>
						<label class="radio radio-inline m-a-0 ui-check ui-check-color ui-check-lg">
							<input type="radio" name="theme" value="black">
							<i class="black"></i>
						</label>
					</div>
				</div>
			</div>
		</div>
		<!-- ############ SWITHCHER END-->

		<!-- ############ LAYOUT END-->
	</div>

	<!-- build:js scripts/app.min.js -->
	<!-- jQuery -->
	<script src="{{asset('libs/jquery/dist/jquery.js')}}"></script>
	<!-- Bootstrap -->
	<script src="{{asset('libs/tether/dist/js/tether.min.js')}}"></script>
	<script src="{{asset('libs/bootstrap/dist/js/bootstrap.js')}}"></script>
	<!-- core -->
	<script src="{{asset('libs/jQuery-Storage-API/jquery.storageapi.min.js')}}"></script>
	<script src="{{asset('libs/PACE/pace.min.js')}}"></script>
	<script src="{{asset('libs/jquery-pjax/jquery.pjax.js')}}"></script>
	<script src="{{asset('libs/blockUI/jquery.blockUI.js')}}"></script>
	<script src="{{asset('libs/jscroll/jquery.jscroll.min.js')}}"></script>

	<script src="{{asset('scripts/config.lazyload.js')}}"></script>
	<script src="{{asset('scripts/ui-load.js')}}"></script>
	<script src="{{asset('scripts/ui-jp.js')}}"></script>
	<script src="{{asset('scripts/ui-include.js')}}"></script>
	<script src="{{asset('scripts/ui-device.js')}}"></script>
	<script src="{{asset('scripts/ui-form.js')}}"></script>
	<script src="{{asset('scripts/ui-modal.js')}}"></script>
	<script src="{{asset('scripts/ui-nav.js')}}"></script>
	<script src="{{asset('scripts/ui-list.js')}}"></script>
	<script src="{{asset('scripts/ui-screenfull.js')}}"></script>
	<script src="{{asset('scripts/ui-scroll-to.js')}}"></script>
	<script src="{{asset('scripts/ui-toggle-class.js')}}"></script>
	<script src="{{asset('scripts/ui-taburl.js')}}"></script>
	<script src="{{asset('scripts/app.js')}}"></script>
	<script src="{{asset('scripts/ajax.js')}}"></script>
	<!-- endbuild -->
</body>
</html>
