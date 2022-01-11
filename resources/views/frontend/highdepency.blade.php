@extends('frontend_template')
@section('content')


<div class="container" style="margin-top: 150px;">
	<div class="row">
		<div class="col-md-6">
		 <h3 class="my-5 mx-3 text-primary">HIGH DEPENDENCY UNIT</h3><hr>
			<img src="{{asset('image/h.jpg')}}" class="img-fluid w-100">
			<p class="my-5">Some medical situations or emergencies require full attention and medical treatment. In victoria HDU, patients receive complete assurance that none of the required medical treatment and care will be spared at any point under our experienced and well qualified doctors and nurses in HDU. We have also equipped HDU with similar medical technology as found in ICU. This s to offer the assurance to patients that they receive the best medical care available with the aid of latest technology, state-of-the-art drager ventilators, reliable defibrillators, and nihon kohden patient monitoring system .</p>
          
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