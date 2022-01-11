@extends('frontend_template')
@section('content')

<div class="container" style="margin-top: 150px;">
	<div class="row">
		<div class="col-md-6">
			<h3 class="my-5 mx-3 text-primary">PHARMACY COUNTER</h3><hr>
			<img src="{{asset('image/s7.jpg')}}" class="img-fluid w-100">
			<p class="my-5">Riding on the strict regulations imposed by the Food and Drug Administration(FDA) ,  it is easy cure hospital’s responsibility to ensure that we dispense approved quality pharmaceutical drugs (medications) to all our patients. All such drugs are under the control and supervision of our certified pharmacists and sale of medical drugs are only made available to those with doctors’ prescriptions. Over the counter drugs are also made available for sale at our pharmacy for the convenience of our patients.</p>
          
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