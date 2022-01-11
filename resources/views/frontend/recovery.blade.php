@extends('frontend_template')
@section('content')


<div class="container" style="margin-top: 150px;">
	<div class="row">
		<div class="col-md-6">
      <h3 class="my-5 mx-3 text-primary">RECOVERY ROOM</h3>
      <hr>
			<img src="{{asset('image/r.jpg')}}" class="img-fluid w-100">
			<p class="my-5">Knowing that your body needs quality and total rest after operation, we offer a post-operative recovery room just for this purpose. Intensive and constant observation by our medical staff are put in place to ensure you are fit to be transferred back to your ward for that needed rest to recuperate well. You will continue to receive the quality care that victoria hospital promised.

You focus on resting while we concentrate on nursing you back to good health under our skillful staff.</p>
      <p>4skills & Experiences of our staff</p>
           <div>
           	<ul>
           		<li>B.Med.Tech (MLT) qualification.</li>
              <li>Hands-on experience in laboratories at least 3 years.</li>
              <li>Excellent communication and patient management skills.</li>
              <li>Quality care through conscious mind, passion and good medical practice.</li>
           	</ul>
           	
           </div>

           <p>4Special Services</p>
           <div>
            <ul>
              <li>24/7 round the clock operation.</li>
              <li>Home services for investigations.</li>
              <li>Automated total histology solutions.</li>
              <li>Overseas second opinion services.</li>
              <li>Sample collection services at downtown area.</li>
              
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
