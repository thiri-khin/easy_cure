@extends('frontend_template')
@section('content')

<div class="container" style="margin-top: 150px;">
	<div class="row">
		<div class="col-md-6">
			<h3 class="my-5 mx-3 text-primary">CUSTOMER CARE SERVICES</h3><hr>

			<img src="{{asset('image/s6.jpg')}}" class="img-fluid w-100">
			<p class="my-5">Your satisfaction is our priority. You (and family members) will be greeted and assisted by our customer service team from the onset of your arrival to discharge. Providing you with assistance to minimize unnecessary anxiety and confusion that most patients might encounter, the team is always ready to guide you through. For what matters to you, matters to us.</p>
          
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