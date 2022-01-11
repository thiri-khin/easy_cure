@extends('frontend_template')
@section('content')


<div class="container" style="margin-top: 150px;">
	<div class="row">
		<div class="col-md-6">
      <h3 class="my-5 mx-3  text-primary">IMAGING UNIT</h3>
			<img src="{{asset('image/i.jpg')}}" class="img-fluid w-100">
			<p class="my-5">We know that certain medical diagnosis goes beyond what the eyes can see. This calls for a deeper than the surface diagnostic approaches that lead to more beneficial treatments.

 

Easy Cure Hospital has carefully studied and imported the latest cutting edge technologies and equipment to support the diagnosis you may need. It is here that our Imaging Unit boasts of the perfect marriage of the medical technologies and the skillful hands of both the doctors and imaging technicians to obtain an accurate medical result  so as to execute the necessary treatment – right on target.</p>

 

<p>The Imaging Unit works with:</p>
           <div>
           	<ul>
           		<li>1.5 Tesla MRI</li>
           		<li>128 slice CT scan</li>
              <li>Bone densitometer which can measure precisely the bone mineral density</li>
              <li>Echocardiogram</li>
              <li>2D ultrasound and 4D ultrasound</li>
              <li>Mammogram</li>
              <li>Computed radiography (Digital X-ray, C-arm X-ray)</li>

           	</ul>
           	
           </div>
		</div>
		<div class="offset-2 col-md-4">
			
      <h3 class=" my-5 mx-3 text-primary">Our Services</h3>
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