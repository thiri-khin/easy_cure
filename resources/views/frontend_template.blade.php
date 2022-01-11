<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="{{asset('caremed-master/images/favicon.ico')}}" type="image/x-icon">
<title>Easy Cure</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="CareMed demo project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{ asset('caremed-master/styles/bootstrap4/bootstrap.min.css') }}">
<link href="{{ asset('caremed-master/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('caremed-master/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('caremed-master/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('caremed-master/plugins/OwlCarousel2-2.2.1/animate.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('caremed-master/styles/main_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('caremed-master/styles/responsive.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('caremed-master/fontawesome/css/all.min.css') }}">
</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header trans_200">
		
		<!-- Top Bar -->
		<div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
							<div class="top_bar_item"><a href="{{route('appointmentfrontend.create')}}">Request an Appointment</a></div>
							<div class="emergencies  d-flex flex-row align-items-center justify-content-start ml-auto">For Emergencies: +959 453 652 231</div>
						</div>

					</div>
				</div>
			</div>
		</div>

		<!-- Header Content -->
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<nav class="main_nav ml-auto">
								<ul>
									<li><a href="{{route('index')}}" style="color: #03198c;" style="color: #03198c;">Home</a></li>
									<li><a href="{{route('contact.index')}}" style="color: #03198c;">About us</a></li>
									<li><a href="{{route('premiums')}}" style="color: #03198c;">Services</a></li>
									<li><a href="{{route('contact.index')}}" style="color: #03198c;">Contact</a></li>
                        				<!-- Authentication Links -->
				                    @guest
		                            <li>
		                                <a href="{{ route('login') }}" style="color: #03198c;">{{ __('Login') }}</a>
		                            </li>
		                            @if (Route::has('register'))
		                            <li>
		                                <a href="{{ route('register') }}" style="color: #03198c;">{{ __('Register') }}</a>
		                            </li>
		                            @endif
		                        	@else
		                            <li class="nav-item dropdown">
		                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-primary" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
		                                    {{ Auth::user()->name }} <span class="caret"></span>
		                                </a>

		                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
		                                   <a class="dropdown-item" href="{{ route('logout') }}"
		                                       onclick="event.preventDefault();
		                                                     document.getElementById('logout-form').submit();">
		                                        {{ __('Logout') }}
		                                    </a>

		                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
		                                        @csrf
		                                    </form>
		                                </div>
		                            </li>
				                    @endguest
								</ul>
							</nav>
							<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Logo -->
		<div class="logo_container_outer">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="logo_container" style="height: 100px;">
							<a href="{{route('index')}}">
								<img src="{{asset('caremed-master/images/ez5.png')}}" class="w-100">
							</a>
						</div>
					</div>
				</div>
			</div>	
		</div>

	</header>

	<!-- Menu -->

	<div class="menu_container menu_mm">

		<!-- Menu Close Button -->
		<div class="menu_close_container">
			<div class="menu_close"></div>
		</div>

		<!-- Menu Items -->
		<div class="menu_inner menu_mm">
			<div class="menu menu_mm">
				<ul class="menu_list menu_mm">
					<li class="menu_item menu_mm"><a href="{{route('index')}}">Home</a></li>
					<li class="menu_item menu_mm"><a href="{{route('contact.index')}}">About us</a></li>
					<li class="menu_item menu_mm"><a href="{{route('premiums')}}">Services</a></li>
					<li class="menu_item menu_mm"><a href="{{route('contact.index')}}">Contact</a></li>
					@guest
                    <li class="menu_item menu_mm">
                        <a href="{{ route('login') }}" style="color: #03198c;">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="menu_item menu_mm">
                        <a href="{{ route('register') }}" style="color: #03198c;">{{ __('Register') }}</a>
                    </li>
                    @endif
                	@else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-primary" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                           <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
				</ul>
			</div>
			<div class="menu_extra">
				<div class="menu_appointment"><a href="{{route('appointmentfrontend.create')}}">Request an Appointment</a></div>
				<div class="menu_emergencies">For Emergencies: +563 47558 623</div>
			</div>

		</div>

	</div>

	@yield('content')

	<!-- Footer -->

	<footer class="footer mt-5">
		<div class="footer_container">
			<div class="container">
				<div class="row">
					
					<!-- Footer - About -->
					<div class="col-lg-4 footer_col">
						<div class="footer_about">
							<div class="footer_logo_container">
								<a href="#" class="d-flex flex-column align-items-center justify-content-center">
									<img src="{{asset('caremed-master/images/ez5.png')}}" class="w-100">
								</a>
							</div>
						</div>
					</div>

					<!-- Footer - Links -->
					<div class="col-lg-8 footer_col">
							<div class="footer_about_text">
								<p class="text-justify">Easy Cure Hospital was established to motivate by and anchor on providing advanced and quality healthcare services to the citizens through the combined and dedicated hands of the medical and non-medical experts in the field.</p>
							</div>
							<ul class="footer_about_list">
								<li><div class="footer_about_icon"><img src="{{asset('caremed-master/images/phone-call.svg')}}" alt=""></div><span>+959 223 456 786</span></li>
								<li><div class="footer_about_icon"><img src="{{asset('caremed-master/images/envelope.svg')}}" alt=""></div><span>officeeasycure@gmail.com</span></li>
								<li><div class="footer_about_icon"><img src="{{asset('caremed-master/images/placeholder.svg')}}" alt=""></div><span>Main Str. no 45-46, b3, 56832, Yangon, Myanmar</span></li>
							</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="copyright_content d-flex flex-lg-row flex-column align-items-lg-center justify-content-start">
							<div class="cr"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fas fa-heartbeat"></i> by <span class="text-success">HexaHyper</span>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
							<div class="footer_social ml-lg-auto">
								<ul>
									<li><a href="https://www.pinterest.de/pin/242490761173721983/"><i class="fab fa-pinterest"></i></a></li>
									<li><a href="https://www.facebook.com/VictoriaHospitalMyanmar/"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a></li>
									<li><a href="https://www.linkedin.com/"><i class="fab fa-linkedin"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>			
		</div>
	</footer>
</div>

<script src="{{ asset('caremed-master/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('caremed-master/styles/bootstrap4/popper.js') }}"></script>
<script src="{{ asset('caremed-master/styles/bootstrap4/bootstrap.min.js') }}"></script>
<script src="{{ asset('caremed-master/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
<script src="{{ asset('caremed-master/plugins/easing/easing.js') }}"></script>
<script src="{{ asset('caremed-master/plugins/parallax-js-master/parallax.min.js') }}"></script>
<script src="{{ asset('caremed-master/js/custom.js') }}"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
@yield('script')
</body>
</html>