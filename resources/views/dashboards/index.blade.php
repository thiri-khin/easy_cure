@extends('backend_template')
@section('content')
	<section id="page-title" >
						<div class="row  mx-3">
							<div class="col-lg-9">
								<h1 class="mainTitle">Admin | Dashboard</h1>
							</div>
							<ol class="breadcrumb">
								<li>
									<span>Admin</span>
								</li>
								<li class="active">
									<span>Dashboard</span>
								</li>
							</ol>
						</div>
	</section>
     <div class="container-fluid container-fullw bg-white p-5">

		<div class="row ">
			<div class="offset-2	 col-lg-4">
				<div class="card shadow text-center">
					<div class="card-body">
			
						<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> 
							
						<i class="fas fa-users fa-stack-1x fa-inverse"></i> 
						</span>
						<h3 class="StepTitle"> Doctors</h3>
						  <p class="cl-effect-1">
							<a href="{{route('DoctorBackend.index')}}">
							  Total Doctors :@php echo $dcount;@endphp
							</a>
														
						  </p>
					</div>
				</div>
			</div>

			<div class=" col-lg-4">
					<div class="card shadow text-center">
						<div class="card-body">
					        <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fas fa-procedures fa-stack-1x fa-inverse"></i> </span>
							<h3 class="StepTitle">Patients</h3>
														
							<p class="links cl-effect-1">
						    <a href="{{route('patients.index')}}">
							Total Patients :@php echo $pcount;@endphp					
																			
							</a>
					        </p>
						</div>
					</div>
			</div>
		</div>
		<div class="row my-5">
        <div class="offset-lg-2 col-lg-4">
				<div class="card shadow  text-center">
					<div class="card-body">
				        <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i>  <i class="fas fa-calendar-check fa-stack-1x fa-inverse"></i></span>
						<h3 class="StepTitle">Appointment</h3>
													
						<p class="links cl-effect-1">
					    <a href="{{route('appointmentbackendadmin.index')}}">
						Total Appointments :@php echo $acount;@endphp					
																		
						</a>
				        </p>
					</div>
				</div>
		</div>
		<div class=" col-lg-4">
				<div class="card shadow text-center">
					<div class="card-body">
				        <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i>
				        <i class="far fa-envelope fa-stack-1x fa-inverse"></i> </span>
						<h3 class="StepTitle"> Contact</h3>
													
						<p class="links cl-effect-1">
					    <a href="{{route('contactbackend.index')}}">
						Total Contact Message :@php echo $ccount;@endphp					
																		
						</a>
				        </p>
					</div>
				</div>
		</div>
		</div>	
	 </div>
    
@endsection