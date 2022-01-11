@extends('frontend_template')
@section('content')
<div class="container" style="margin-top: 180px;">
	<div class="row">
		@foreach($doctors as $doctor)
		<div class="col-6">
			
			<div class="card shadow m-4 border-primary">
				<div class="card-body ">

					<h4 class="text-dark font-weight-bold">
						{{$doctor->name}}
					</h4>
					<p class="text-dark font-weight-bold">
						{{$doctor->speciality}}
					</p>	
					<p class="text-dark font-weight-bold">
						Schedule - {{$doctor->day}} - {{$doctor->start_time}} - {{$doctor->end_time}}
					</p>

				</div>
			</div>

		</div>
		@endforeach
	</div>

</div>
@endsection