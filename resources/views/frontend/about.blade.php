@extends('frontend_template')
@section('content')

<!-- Home -->
	<div class="home" style="margin-top: 150px; margin-bottom: -300px;">
		<div class="home_slider_container">
			<!-- Slider Item -->
			<div class="owl-item">
				<div style="background-image:url({{asset('caremed-master/images/bbb_background.jpg')}}); padding: 100px;">
					<div>
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="home_content_inner">
									<div class="home_title"><h1>Medicine made with care</h1></div>
									<div class="home_text">
										<p>Since its inception, and with the realization and understanding of the local healthcare needs, Easy Cure Hospital has continued to introduce a wide range of medical treatments and services to further elevate the country’s medical standard while mindfully bridging the gap by importing and introducing state-of-the-art technologies into the local medical scene.</p>
									</div>
									<div class="button home_button">
										<a href="{{route('contact.index')}}"><i class="fas fa-book-reader"></i> read more</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				</div>
				
			</div>
		</div>
	</div>

	<div class="container-fluid" style="margin-bottom: 
	100px; background-color: #03198c; padding: 80px;">
		<h3 class="text-white font-weight-bold">Search Your Desired Doctor With Speciality</h3>
		<div class="row my-5">
			<div class="col-md-12">
				<form class="form-group" action="{{route('doctorfrontend.store')}}" method="post">
				@csrf
					<div class="input-group">
						<select class="form-control text-dark" name="speciality">
							<option>Select Speciality</option>
							@foreach($specialities as $speciality)
							<option value="{{$speciality->id}}">{{$speciality->speciality}}</option>
							@endforeach
						</select>
						<div class="input-group-append">
						<button class="btn btn-primary w-20 ml-5" id="searchbtn"><i class="fas fa-search fa-sm"></i> Search</button>
						</div>
					</div>
				</form>	
			</div>
		</div>
	</div>

	@yield('dresult')

	<!-- 3 Boxes -->

	<div class="boxes">
		<div class="container" style="margin-top: 150px;">
			<div class="row">
				
				<!-- Box -->
				<div class="col-lg-4 box_col">
					<div class="box working_hours">
						<div class="box_icon d-flex flex-column align-items-start justify-content-center"><div style="width:29px; height:29px;"><img src="{{asset('caremed-master/images/alarm-clock.svg')}}" alt=""></div></div>
						<div class="box_title">Working Hours</div>
						<div class="working_hours_list">
							<ul>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div>24 hours a day</div>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Box -->
				<div class="col-lg-4 box_col">
					<div class="box box_appointments">
						<div class="box_icon d-flex flex-column align-items-start justify-content-center"><div style="width: 29px; height:29px;"><img src="{{asset('caremed-master/images/phone-call.svg')}}" alt=""></div></div>
						<div class="box_title"><a href="{{route('appointmentfrontend.create')}}" class="text-white">Appointments</a></div>
						<div class="box_text">We can also make appoinments for all of our clients with their favourite doctors in all availibale schdules</div>
					</div>
				</div>

				<!-- Box -->
				<div class="col-lg-4 box_col">
					<div class="box box_emergency">
						<div class="box_icon d-flex flex-column align-items-start justify-content-center"><div style="width: 37px; height:37px; margin-left:-4px;"><img src="{{asset('caremed-master/images/bell.svg')}}" alt=""></div></div>
						<div class="box_title">Emergency Cases</div>
						<div class="box_phone">+959 453 652 231</div>
						<div class="box_emergency_text">Call this number for any kind of emergency situations</div>
					</div>
				</div>

			</div>
		</div>
	</div>

<!-- About -->

	<div class="about">
		<div class="container">
			<div class="row row-lg-eq-height">
				
				<!-- About Content -->
				<div class="col-lg-7">
					<div class="about_content">
						<div class="section_title"><h2>A great medical team to help your needs</h2></div>
						<div class="about_text">
							<p class="text-justify">Easy Cure Hospital was established to motivate by and anchor on providing advanced and quality healthcare services to the citizens through the combined and dedicated hands of the medical and non-medical experts in the field.
							Since its inception, and with the realization and understanding of the local healthcare needs, Easy Cure Hospital has continued to introduce a wide range of medical treatments and services to further elevate the country’s medical standard while mindfully bridging the gap by importing and introducing state-of-the-art technologies into the local medical scene.</p>
						</div>
						<div class="button about_button">
							<a href="{{route('contact.index')}}"><i class="fas fa-book-reader"></i> read more</a>
						</div>
					</div>
				</div>

				<!-- About Image -->
				<div class="col-lg-5">
					<div class="about_image"><img src="{{ asset('caremed-master/images/about.png') }}" alt=""></div>
				</div>
			</div>
		</div>
	</div>

<!-- Departments -->

	<div class="departments">
		<div class="departments_background parallax-window" data-parallax="scroll" data-image-src="{{asset('caremed-master/images/b.jpg')}}" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title section_title_dark"><h2>Our Medical Departments</h2></div>
				</div>
			</div>
			<div class="row departments_row row-md-eq-height">

				@foreach($specialities as $speciality)
				
				<!-- Department -->
				<div class="col-lg-4 col-md-6 dept_col">
					<div class="dept">
						<div class="dept_image"><img src="{{$speciality->profile}}" alt="" width="600px" height="300px"></div>
						<div class="dept_content text-center">
							<div class="dept_title">
								<form action="{{route('showdoctors.update',$speciality->id)}}" method="post">
									@csrf
									@method('PUT')
									<button type="submit" class="btn btn-block" name="speciality">
									{{$speciality->speciality}}
									</button>
								</form>
							</div>
						</div>
					</div>
				</div>
				@endforeach

				<!-- Department -->
				<div class="col-lg-4 col-md-6 dept_col ml-3 mr-5" style="background-image: url({{asset('caremed-master/images/departments.jpg')}})">
					<div class="dept">
						<div class="dept_text">
							<p class="p-5">Easy Cure organizes and conducts regular consultations and encourages discussions with respected and credible working partners and stakeholders to cultivate good practices in the medical field and to advance cooperation to benefit individual, community and the country.</p>
						</div><br><br>
						<div class="button dept_button m-5"><a href="{{route('contact.index')}}"><i class="fas fa-book-reader"></i> read more</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection

