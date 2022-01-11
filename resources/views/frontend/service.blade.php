@extends('frontend_template')
@section('content')

	
<div class="container m-auto" style="margin-top: 150px;">
	<H3 class="mx-3">Our Services From Easy Cure</H3>
	<div class="row my-3">

		<div class="col-lg-4 col-md-4">
			<h5 class="my-4">PREMIER HEALTHCARE SERVICES</h5>
			<div class="img-hover">
				<a href="{{route('premiums')}}" class="image-popup"><img src="{{asset('image/s1.jpg')}}" class="img-responsive"></a>
			</div>		
				
			
		</div>
		<div class="col-lg-4 col-md-4">
			<h5 class=" my-4">AMBULANCE SERVICE</h5>
			<div  class="img-hover">
				<a href="{{route('ambulances')}}" class="image-popup"><img src="{{asset('image/s2.jpg')}}"
				 class="img-responsive">
				</a>
			</div>
			
		</div>
		<div class="col-lg-4 col-md-4">
			<h5 class=" my-4">REHABILITATION UNIT</h5>
			
				<div  class="img-hover">
					<a href="{{route('rehabilitations')}}" class="image-popup"><img src="{{asset('image/s3.jpg')}}"  class="img-responsive">
				</a>
				</div>
			
		</div>
	</div>
	<div class="row my-3">
		<div class="col-lg-4 col-md-4">
			<h5 class="my-4">PHARMACY COUNTER</h5>
			    <div  class="img-hover">
				
					<a href="{{route('pharmacys')}}"  class="image-popup"><img src="{{asset('image/s7.jpg')}}" class="img-responsive">
				    </a>
				</div>
			
		</div>
		<div class="col-lg-4 col-md-4">
			<h5 class=" my-4">PATIENT ROOMS</h5>
		
				  <div  class="img-hover">
					<a href="{{route('patientrooms')}}"class="image-popup"><img src="{{asset('image/s5.jpg')}}" class="img-responsive">
				    </a>
				  </div>
			
		</div>
		<div class="col-lg-4 col-md-4">
			<h5 class="my-4">CUSTOMER CARE SERVICES</h5>
			
				<div  class="img-hover">
					<a href="{{route('ccares')}}"class="image-popup"><img src="{{asset('image/s6.jpg')}}" class="img-responsive"></a>
			    </div>
		</div>
	</div>

	<div class="row my-3">
		<div class="col-lg-4 col-md-4">
			<h5 class="my-4">OPERATION THEATRES</h5>
			    <div  class="img-hover">
				
					<a href="{{route('operations')}}" class="image-popup"><img src="{{asset('image/o.jpg')}}" class="img-responsive">
				     </a>
				</div>
		</div>
		<div class="col-lg-4 col-md-4">
			<h5 class="my-4">IMAGING UNIT</h5>
			
				 <div  class="img-hover">
					<a href="{{route('imagings')}}"class="image-popup"><img src="{{asset('image/i.jpg')}}" class="img-responsive">
				    </a>
				</div>
			
		</div>
		<div class="col-lg-4 col-md-4">
			<h5 class=" my-4">RECOVERY ROOM</h5>
			
				   <div  class="img-hover">
					<a href="{{route('recoverys')}}"class="image-popup"><img src="{{asset('image/r.jpg')}}"class="img-responsive"></a>
		           </div>
		</div>
	</div>
	<div class="row my-3">

		<div class="col-lg-4 col-md-4">
			<h5 class="my-4">HIGH DEPENDENCY UNIT</h5>
			<div class="img-hover">
				<a href="{{route('highdepencys')}}" class="image-popup"><img src="{{asset('image/h.jpg')}}" class="img-responsive"></a>
			</div>		
				
			
		</div>
		<div class="col-lg-4 col-md-4">
			<h5 class=" my-4">ENDOSCOPY UNIT</h5>
			<div  class="img-hover">
				<a href="{{route('endoscopys')}}" class="image-popup"><img src="{{asset('image/e.jpg')}}"
				 class="img-responsive">
				</a>
			</div>
			
		</div>
		<div class="col-lg-4 col-md-4">
			<h5 class=" my-4">DOG BITE CORNER</h5>
			
				<div  class="img-hover">
					<a href="{{route('dogbites')}}" class="image-popup"><img src="{{asset('image/do.jpg')}}"  class="img-responsive">
				</a>
				</div>
			
		</div>
	</div>
	
</div>
@endsection