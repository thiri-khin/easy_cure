@extends('frontend_template')
@section('content')


<div class="container" style="margin-top: 150px;">
	<div class="row">
		<div class="col-md-6">
      <h3 class="my-5 mx-3 text-primary">PATIENT ROOMS</h3><hr>
			<img src="{{asset('image/s5.jpg')}}" class="img-fluid w-100">
			<p class="my-5">We have created six types of in-patient rooms to meet every patient’s specific needs. Regardless of room type each promises uncompromised comfort and privacy. Each room is equipped with functional facilities like built-in Oxygen and suction outlets, emergency call bell, 32” LCD TV, refrigerator, telephone, relaxing chair and other supporting items.</p>
      <p>With 3 meals a day specially catered from feel victoria restaurant, your body will receive the nourishment it needs during your recuperating period.

      All efforts are not spared to ensure you regain your health in a clean and peaceful environment.</p>
           <div>
           	<ul>
           		<li>Four Bedded Room</li>
           		<li>Double Room</li>
           		<li>Standard Room</li>
           		<li>The Suite ( a spacious area for attendant )</li>
           	</ul>
           </div>
		</div>
	 <div class=" offset-2 col-md-4">
      
      <h3 class="my-5 mx-3 text-primary">Our Services</h3><hr>
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