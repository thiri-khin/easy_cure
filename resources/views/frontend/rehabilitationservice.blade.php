@extends('frontend_template')
@section('content')


<div class="container" style="margin-top: 150px;">
	<div class="row">
		<div class="col-md-6">
      <h3 class="my-5 mx-3 text-primary">REHABILITATION UNIT</h3>
      <hr>
			<img src="{{asset('image/s3.jpg')}}" class="img-fluid w-100">
			<p class="my-5">Our approach to every condition carries the signature of the targeted and effective physiotherapy treatments done by our experienced physiotherapists and well-trained technicians. It is with patience and compassion from these personnel, who engages the use of advanced international standard equipment that makes your every visit a step closer to regaining strength and quick recovery.</p>
      <p>
      Victoria Hospital’s very own rehabilitation unit houses only safe and topnotch equipment that meet international medical standard for physiotherapy treatment.</p>
           <div>
           	<ul>
           		<li>Balancing exercise and parallel bar standings</li>
           		<li>Chest physiotherapy</li>
           		<li>Heating equipment (Infra-red)</li>
           		<li>Laser therapy</li>
           		<li>Massage therapy</li>
              <li>Muscle stimulation</li>
              <li>Occupational therapy</li>
              <li>Rehabilitation equipment</li>
              <li>Rehabilitation for stroke</li>
              <li>Short wave diathermy</li>
              <li>Traction equipment</li>
              <li>Ultrasound devices</li>
           	</ul>
       
           </div>
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