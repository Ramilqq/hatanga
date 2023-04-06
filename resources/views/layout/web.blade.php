<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />
	<base href="/">
	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/app.css" type="text/css" />
    
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>@yield('title')</title>

</head>

<body class="stretched">
	<div id="wrapper" class="clearfix">
		<div id="top-bar" class="transparent-topbar dark">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-12 col-md-auto">
						<div class="top-links">

						</div>
					</div>

					<div class="col-12 col-md-auto">
						<ul id="top-social">
							@if(setting('contact.instagram'))
							<li><a href="{{setting('contact.instagram')}}" class="si-instagram"><span class="ts-icon"><i class="icon-instagram2"></i></span><span class="ts-text">Instagram</span></a></li>
							@endif
							@if(setting('contact.phone'))
							<li><a href="tel:{{setting('contact.phone')}}" class="si-call"><span class="ts-icon"><i class="icon-call"></i></span><span class="ts-text">{{setting('contact.phone')}}</span></a></li>
							@endif
							@if(setting('contact.mail'))
							<li><a href="mailto:{{setting('contact.mail')}}" class="si-email3"><span class="ts-icon"><i class="icon-envelope-alt"></i></span><span class="ts-text">{{setting('contact.mail')}}</span></a></li>
							@endif
						</ul>
					</div>
				</div>

			</div>
		</div>

		<header id="header" class="transparent-header dark" data-sticky-class="not-dark" data-responsive-class="not-dark" data-menu-padding="28">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row">
						<div id="logo">
							<a href="/" class="standard-logo" data-dark-logo="/storage/{{ setting('site.logo') }}"><img src="/storage/{{ setting('site.logo') }}" alt="Canvas Logo"></a>
							<a href="/" class="retina-logo" data-dark-logo="/storage/demo/images/logo-dark@2x.png"><img src="/storage/demo/images/logo@2x.png" alt="Canvas Logo"></a>
						</div>

						<div id="primary-menu-trigger">
							<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
						</div>

						<nav class="primary-menu style-4 menu-spacing-margin">
							<ul class="menu-container">
								@if(isset($menu))
									@foreach($menu as $page)
									<li class="menu-item"><a class="menu-link @if(url()->current() == route($page['route']))active @endif " href="{{ route($page['route']) }}"><div><i class="{{$page['icon_class']}}"></i>{{ $page['title'] }}</div></a></li>
									@endforeach
								@endif
							</ul>
						</nav>
					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header>

		@yield('form_tab')
		@yield('page_title')
		@yield('content')

		<footer id="footer" class="dark" style="background-color: #222;">
			<div class="container">
				<div class="footer-widgets-wrap">
					<div class="row col-mb-50">
						<div class="col-md-4">
							<div class="widget clearfix">
								<div class="row col-mb-30">
									<div class="col-lg-12">
										<div class="footer-big-contacts">
											<span>Call Us:</span>
											{{setting('contact.phone')}}
										</div>
									</div>
									<div class="col-lg-12">
										<div class="footer-big-contacts">
											<span>Send an Enquiry:</span>
											{{setting('contact.mail')}}
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="widget clearfix">
								
							</div>
						</div>

						<div class="col-md-4">

							<div class="widget widget_links clearfix">
								<h4>Страницы</h4>
								<div class="row col-mb-30">
									<div class="col-6">
										<ul>
										@if(isset($pages))
											@foreach($pages as $k => $page)
												@if($k % 2 == 0)
												<li class="menu-item"><a href="{{ route('get_page',$page['id']) }}">{{ $page['title'] }}</a></li>
												@endif
											@endforeach
										@endif
										</ul>
									</div>
									<div class="col-6">
										<ul>
										@if(isset($pages))
											@foreach($pages as $k => $page)
												@if($k % 2 == 1)
												<li class="menu-item"><a href="{{ route('get_page',$page['id']) }}">{{ $page['title'] }}</a></li>
												@endif
											@endforeach
										@endif
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="copyrights">
				<div class="container">
					<div class="row col-mb-30">
						<div class="col-md-6 text-center text-md-left">
							
						</div>
						<div class="col-md-6 text-center text-md-right">
							<div class="d-flex justify-content-center justify-content-md-end">
								@if(setting('contact.instagram'))
									<a href="{{setting('contact.instagram')}}" class="social-icon si-small si-borderless si-instagram">
										<i class="icon-instagram"></i>
										<i class="icon-instagram"></i>
									</a>
								@endif
							</div>
							<div class="clear"></div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
    <script src="js/jquery.js"></script>
	<script src="js/plugins.min.js"></script>

    <script src="js/app.js"></script>

	<!--script src="https://maps.google.com/maps/api/js?key=YOUR-API-KEY"></script-->

    <script src="js/components/datepicker.js"></script>
    <script src="js/functions.js"></script>

	<script>

		$(function() {
			$('.travel-date-group').datepicker({
				format: 'yyyy-mm-dd',
				autoclose: true,
				startDate: "today",
			});
		});

	</script>

</body>
</html>