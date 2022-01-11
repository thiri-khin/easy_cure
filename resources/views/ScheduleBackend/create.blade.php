@extends('backend_template')
@section('content')

<div class="card shadow mx-3 my-3">
	<div class="card-body">
		<form method="post" enctype="multipart/form-data" action="{{route('ScheduleBackend.store')}}">
			@csrf
			<div class="container-fluid">
				<h4 class="text-primary font-weight-bold">Schedule Create Form</h4>
				<div class="row">
					<div class="col">
						<div class="form-group">
							<label for="speciality">Speciality:</label>
							<select class="special form-control @error('speciality') is-invalid @enderror" name="speciality" id="speciality">

								<option value="">Select Speciality</option>
								@foreach($specializations as $speciality)
								<option value="{{$speciality->id}}" >{{$speciality->speciality}}</option>
								@endforeach
							</select>
							@error('speciality')
								<div class="alert alert-danger">{{ $message }}</div>
							@enderror

							<label for="doctor">Doctor:</label>
							<select class="special form-control @error('doctor') is-invalid @enderror" name="doctor" id="doctor">
								<option value=""></option>
							</select>
							@error('doctor')
							<div class="alert alert-danger">{{ $message }}</div>
							@enderror

							<label for="day">Day:</label>
							<select class="form-control @error('day') is-invalid @enderror" name="day">
								<option value="">Select Day</option>
								<option value="Monday">Monday</option>
								<option value="Tuesday">Tuesday</option>
								<option value="Wednesday">Wednesday</option>
								<option value="Thursday">Thursday</option>
								<option value="Friday">Friday</option>
								<option value="Saturday">Saturday</option>
								<option value="Sunday">Sunday</option>
							</select>
							@error('day')
								<div class="alert alert-danger">{{ $message }}</div>
							@enderror

							<label for="start_time">Start Time:</label>
							<input type="text" name="start_time" class="form-control @error('start_time') is-invalid @enderror" placeholder="hh:mm am/pm">
							@error('start_time')
								<div class="alert alert-danger">{{ $message }}</div>
							@enderror

							<label for="end_time">End Time:</label>
							<input type="text" name="end_time" class="form-control @error('end_time') is-invalid @enderror" placeholder="hh:mm am/pm">
							@error('end_time')
								<div class="alert alert-danger">{{ $message }}</div>
							@enderror

							<button class="btn btn-primary mt-3" type="submit"><i class="fas fa-save"></i> Save</button>
						</div>
					</div>
				</div>
		</form>
	</div>
</div>
	
</div>

@endsection