@extends('frontend_template')
@section('content')

<div class="container" style="margin-top: 150px;">
	<div class="row">
		<div class="col-md-6">
      <h3 class="my-5 mx-3 text-primary">PREMIER HEALTHCARE SERVICES</h3><hr>
			<img src="{{asset('image/s1.jpg')}}" class="img-fluid w-100">
			<p class="my-5">It is a team comprises of carefully selected medical personnel, and specially created to extend victoria’s renowned quality care (medical & healthcare) to those who seek uncompromising medical attention.</p>
           <div>
           	<ul>
           		<li>Specialist consultation by victoria medical officer (MO)</li>
           		<li>Treatment given by victoria medical officer (MO)</li>
           		<li>Injection administered by victoria medical officer (MO) – special drug (Clexane, Epogen,Recormon,Neupogen)</li>
           		<li>Home service for ECG , 24hr holter monitor, 24hr Ambulatory BP monitor</li>
           		<li>Dressing for any wound, urinary catheter insertion, nasogastric tube insertion</li>
           	</ul>
           	<p>We can also bring the dedicated medical team right to your door step. This well-coordinated and experienced team will attend to any medical situation and emergency (mild or extreme) during any event – from private to corporate functions, from local to international events. For instance, mega sports event, weddings, international functions (Beauty Pageant), religious event, etc.</p>
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