@extends('frontend_template')
@section('content')


<div class="container" style="margin-top: 150px;">
	<div class="row">
		<div class="col-md-6">
		 <h3 class="my-5 mx-3 text-primary">AMBULANCE SERVICE</h3><hr>
			<img src="{{asset('image/s2.jpg')}}" class="img-fluid w-100">
			<p class="my-5">Our ambulance team works relentlessly to attend to emergency calls anytime of the day and night. Speed and undivided attention mark the team’s core value. Every medical situation could be a unique situation. Our medical team consists of experienced doctors and nurses along with emergency medical equipment and supplies on board every ambulance will do its utmost best to make every ride a lifesaving journey.</p>
          
		</div>
			<div class="offset-2 col-md-4">
			
      <h3 class="my-5 mx-3 text-primary">Our Services</h3>
      <hr>
      <ul >
                <li><a href="{{route('premiums')}}">Premier Healthcare Services</a></li>
                      <li><a href="{{route('ambulances')}}">Ambulance Service</a></li>
                      <li><a href=" {{route('rehabilitations')}}">Rehabilitation Unit</a></li>
                      <li><a href="{{route('operations')}}">Operation Theatres</a></li>
                      <li><a href="{{route('imagings')}}">Imaging Unit</a></li>
                      <li><a href="{{route('recoverys')}}">Recovery Room</a></li>
                      <li><a href="{{route('pharmacys')}}">Pharmacy Counter</a></li>
                      <li><a href="{{route('patientrooms')}}">Patient Rooms</a></li>
                      <li><a href="{{route('ccares')}}">Customer Care Services</a></li>
                      <li><a href="{{route('highdepencys')}}">High Depencency Unit</a></li>
                      <li><a href="{{route('endoscopys')}}">Endoscopy Unit</a></li>
                      <li><a href="{{route('dogbites')}}">Dog Bite Coner</a></li>
      </ul>
    
		</div>
	</div>
</div>
@endsection