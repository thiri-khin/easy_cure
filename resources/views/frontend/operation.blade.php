@extends('frontend_template')
@section('content')

<div class="container"style="margin-top: 150px;">
	<div class="row">
		<div class="col-md-6">
      <h3 class="my-5 mx-3 text-primary">OPERATION THEATRES</h3>
      <hr>
			<img src="{{asset('image/o.jpg')}}" class="img-fluid w-100">
			<p class="my-5">We take every operation seriously. Every medical staff operating in our five major operation theaters and one minor theatre observe strict medical rules & regulations governing good operation practices in Victoria. Undoubtedly, patients receive full attention from the team, uncompromised surgical procedures from the experts’ hands and ultimate care during the entire process.

Each theatre includes:</p>
           <div>
           	<ul>
           		<li>Built in Oxygen, Nitrous Oxide, medical air and vacuum</li>
           		<li>Wall sockets connected to a main pipeline supply.</li>
           		<li>Fully mobile operating table.</li>
           		<li>Two berchtold halogen operating lamps.</li>
           		<li>Nikon Kohden (life scope) patient monitor with attached to multi-gas analyzers.</li>  
              <li>Drager (Fabius Plus) anesthetic machine.</li> 
              <li>Surgical instruments are fully and properly sterilized with autoclave machines.</li>
              <li>We have also introduced a portable C-arm Digital X-ray machine to provide quality imaging with mobility during surgical operations – adding precision during operation.</li>

           	</ul>
           	
           </div>
		</div>
		<div class="offset-2 col-md-4">
			
      <h3 class="my-5 mx-3 text-primary">Our Services</h3>
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